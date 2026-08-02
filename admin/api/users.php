<?php
require_once "../../auth/db.php";

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

/* Get users */
$stmt = $connected->prepare("
    SELECT id, username, email, role, status 
    FROM users 
    ORDER BY id DESC 
    LIMIT ? OFFSET ?
");
$stmt->bind_param("ii", $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();

/* Get total count */
$totalResult = $connected->query("SELECT COUNT(*) as total FROM users");
$totalPages = ceil($totalResult->fetch_assoc()['total'] / $limit);
?>


<div class="maIn-title"><h2>REGISTERED USERS</h2></div>
<div class="table-wrapper">
    <div class="table-container">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['username']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['role']) ?></td>
                <td>
                    <?= $row['status'] == 0 
                        ? '<span style="color:green;font-weight:bold;">Active</span>' 
                        : '<span style="color:red;font-weight:bold;">Inactive</span>' ?>
                </td>
                <td>
                    <?php if ($row['status'] == 0): ?>
                        <button onclick="toggleUser(<?= $row['id'] ?>)" class="btn-delete">
                            Deactivate
                        </button>
                    <?php else: ?>
                        <button onclick="toggleUser(<?= $row['id'] ?>)" class="btn-activate">
                            Reactivate
                        </button>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <!-- PAGINATION -->
   <div class="pagination">
    <?php
    $range = 2;

    $start = max(1, $page - $range);
    $end   = min($totalPages, $page + $range);

    if ($start > 1) {
        echo "<span class='page-link' onclick='loadUsers(1)'>1</span>";
        if ($start > 2) echo "<span class='dots'>...</span>";
    }

    for ($i = $start; $i <= $end; $i++) {
        $active = ($i == $page) ? 'active' : '';
        echo "<span class='page-link $active' onclick='loadUsers($i)'>$i</span>";
    }

    if ($end < $totalPages) {
        if ($end < $totalPages - 1) echo "<span class='dots'>...</span>";
        echo "<span class='page-link' onclick='loadUsers($totalPages)'>$totalPages</span>";
    }
    ?>
  </div>
</div>
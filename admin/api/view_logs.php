<?php
session_start();
require_once "../../auth/db.php";

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    exit;
}

/* Pagination */
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

/* Get Logs */
$stmt = $connected->prepare("
    SELECT u.username, al.action, al.created_at
    FROM audit_logs al
    JOIN users u ON al.user_id = u.id
    ORDER BY al.created_at DESC
    LIMIT ? OFFSET ?
");
$stmt->bind_param("ii", $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();

/* Get total count */
$totalResult = $connected->query("SELECT COUNT(*) as total FROM audit_logs");
$totalPages = ceil($totalResult->fetch_assoc()['total'] / $limit);
?>

<div class="maIn-title"><h2>TRANSACTION LOGS</h2></div>

<div class="table-wrapper">
    <div class="table-container">
            <table>
            <tr>
                <th>User</th>
                <th>Action</th>
                <th>Time</th>
            </tr>

            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['username']) ?></td>
                <td><?= htmlspecialchars($row['action']) ?></td>
                <td><?= $row['created_at'] ?></td>
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
            echo "<span class='page-link' onclick='loadLogs(1)'>1</span>";
            if ($start > 2) echo "<span class='dots'>...</span>";
        }

        for ($i = $start; $i <= $end; $i++) {
            $active = ($i == $page) ? 'active' : '';
            echo "<span class='page-link $active' onclick='loadLogs($i)'>$i</span>";
        }

        if ($end < $totalPages) {
            if ($end < $totalPages - 1) echo "<span class='dots'>...</span>";
            echo "<span class='page-link' onclick='loadLogs($totalPages)'>$totalPages</span>";
        }
        ?>
    </div>
</div>
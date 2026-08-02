<?php
require_once "../auth/db.php";
require_once "../auth/auth.php";

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

/* Fetch pending appointments */
$stmt = $connected->prepare("
    SELECT a.id, u.username, a.service_type AS service,
           a.preferred_date AS date, a.contact, a.service_address AS address
    FROM appointments a
    JOIN users u ON a.user_id = u.id
    WHERE a.status = 0
    ORDER BY a.created_at DESC
    LIMIT ? OFFSET ?
");
$stmt->bind_param("ii", $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();

/* Get total pending appointments for pagination */
$totalResult = $connected->query("SELECT COUNT(*) as total FROM appointments WHERE status=0");
$totalPages = ceil($totalResult->fetch_assoc()['total'] / $limit);
?>


<div class="table-container">
    <table>
        <tr>
            <th>User</th>
            <th>Service</th>
            <th>Date</th>
            <th>Contact</th>
            <th>Address</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['username']) ?></td>
            <td><?= htmlspecialchars($row['service']) ?></td>
            <td><?= htmlspecialchars($row['date']) ?></td>
            <td><?= htmlspecialchars($row['contact']) ?></td>
            <td><?= htmlspecialchars($row['address']) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<div class="pagination">
        <?php if($page > 1): ?>
            <button class="page-btn" onclick="loadAppointmentsPage(<?= $page-1 ?>)">← Prev</button>
        <?php endif; ?>

    <span class="page-info">
        Page <?= $page ?> of <?= $totalPages ?>
    </span>

    <?php if($page < $totalPages): ?>
        <button class="page-btn" onclick="loadAppointmentsPage(<?= $page+1 ?>)">Next →</button>
    <?php endif; ?>

</div>
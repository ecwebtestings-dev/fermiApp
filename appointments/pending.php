<?php
require_once __DIR__ . "/../auth/db.php";
require_once __DIR__ . "/../auth/auth.php";

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

/* Total for pagination */
$totalResult = $connected->query("SELECT COUNT(*) as total FROM appointments WHERE status=0");
$totalPages = ceil($totalResult->fetch_assoc()['total'] / $limit);
?>

<div class="maIn-title"><h2>PENDING  APPOINTMENTS</h2></div>

<div class="table-wrapper">
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

<!-- PAGINATION -->
  <div class="pagination">
    <?php
    $range = 2;

    $start = max(1, $page - $range);
    $end   = min($totalPages, $page + $range);

    if ($start > 1) {
        echo "<span class='page-link' onclick='loadAppointmentsPage(1)'>1</span>";
        if ($start > 2) echo "<span class='dots'>...</span>";
    }

    for ($i = $start; $i <= $end; $i++) {
        $active = ($i == $page) ? 'active' : '';
        echo "<span class='page-link $active' onclick='loadAppointmentsPage($i)'>$i</span>";
    }

    if ($end < $totalPages) {
        if ($end < $totalPages - 1) echo "<span class='dots'>...</span>";
        echo "<span class='page-link' onclick='loadAppointmentsPage($totalPages)'>$totalPages</span>";
    }
    ?>
  </div>
</div>

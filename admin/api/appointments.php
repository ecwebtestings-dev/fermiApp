<?php
session_start();
require_once "../../auth/db.php";
if ($_SESSION['role'] !== 'admin') exit;

$sql = "
SELECT u.username, a.service_type, a.preferred_date, a.created_at
FROM appointments a
JOIN users u ON a.user_id = u.id
LIMIT 10 OFFSET 0
";

$result = $connected->query($sql);
?>

<div class="maIn-title"><h2>NEW APPOINTMENTS</h2></div>

<div class="table-wrapper">
    <div class="table-container">
        <table>
        <tr>
            <th>Client</th>
            <th>Service</th>
            <th>Date</th>
            <th>Booked</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['username']) ?></td>
            <td><?= htmlspecialchars($row['service_type']) ?></td>
            <td><?= $row['preferred_date'] ?></td>
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

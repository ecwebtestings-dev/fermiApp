<?php

// Always calculate absolute path from project root
$root = realpath(__DIR__ . '/../../../'); // 3 levels up from appointments/
require_once $root . '/auth/db.php';
require_once $root . '/auth/auth.php';

header("Content-Type: application/json");
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$offset = ($page-1)*$limit;

$query = "SELECT a.id, u.username, a.service_type AS service, a.preferred_date AS date,
          a.contact, a.service_address AS address
          FROM appointments a JOIN users u ON a.user_id=u.id
          WHERE a.status=1
          ORDER BY a.created_at DESC
          LIMIT $limit OFFSET $offset";

$result = $connected->query($query);
$totalResult = $connected->query("SELECT COUNT(*) as total FROM appointments WHERE status=1");
$totalPages = ceil($totalResult->fetch_assoc()['total']/$limit);
?>

<table>
<tr><th>User</th><th>Service</th><th>Date</th><th>Contact</th><th>Address</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($row['username']) ?></td>
<td><?= htmlspecialchars($row['service']) ?></td>
<td><?= htmlspecialchars($row['date']) ?></td>
<td><?= htmlspecialchars($row['contact']) ?></td>
<td><?= htmlspecialchars($row['address']) ?></td>
</tr>
<?php endwhile; ?>
</table>

<div style="margin-top:10px;">
<?php if($page>1): ?>
<button onclick="loadCompletedAppointmentsPage(<?= $page-1 ?>)">Prev</button>
<?php endif; ?>
<?php if($page<$totalPages): ?>
<button onclick="loadCompletedAppointmentsPage(<?= $page+1 ?>)">Next</button>
<?php endif; ?>
</div>
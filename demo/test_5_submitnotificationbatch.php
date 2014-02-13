<? require_once('html/head.php'); ?>
<? require_once('html/return.php'); ?>

<h2>Test 4 - Submit Notification Batch</h2>

<?

require_once('../src/efinance.php');

$bef = new bef_submitNotificationBatch();

$bef->build_batch_reference('Test Batch');

$bef->build_notifications('8435', '', 'A7', '600.00');
$bef->build_notifications('8435', '', 'A7', '600.00');
$bef->build_notifications('8435', '', 'A7', '600.00');

$bef->call();

echo 'Batch ID:<br />';
echo $bef->get_batch_id();

echo '<br /><br />Total Accepted:<br />';
echo $bef->get_total_accepted();

echo '<br /><br />Total Rejected:<br />';
echo $bef->get_total_rejected();

if($bef->get_total_rejected() > 0)
{
	$rejections = $bef->get_rejection_reasons();

	echo '<pre>'; print_r($rejections); echo '</pre>';
}

?>

<? require_once('html/footer.php'); ?>
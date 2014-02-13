<? require_once('html/head.php'); ?>
<? require_once('html/return.php'); ?>

<h2>Test 5 - Notification Batch Enquiry</h2>

<?

require_once('../src/efinance.php');

$bef = new bef_notificationBatchEnquiry();

$bef->add_data('BatchID', 1234);
$bef->add_data('Reference', 'Test Batch');

$bef->call();

?>

<? require_once('html/footer.php'); ?>
<? require_once('html/head.php'); ?>
<? require_once('html/return.php'); ?>

<h2>Test 4 - Cancel (A Live) Agreement</h2>

<?

require_once('../src/efinance.php');

$bef = new bef_cancelAgreement();

$bef->build_customer('Title', 'Mr');
$bef->build_customer('Forename', 'Test');
$bef->build_customer('Surname', 'Person');
$bef->build_customer('EmailAddress', 'test@test.com');

$bef->build_agreement('AgreementNumber', '1');
$bef->build_agreement('OriginalLoanAdvance', '1000.00');
$bef->build_agreement('CancellationAmount', '1000.00');
$bef->build_agreement('NewLoanAdvance', '0.00');
$bef->build_agreement('CancellationType', 'full');
$bef->build_agreement('ClientRequestReference', 'A4');

$bef->call();

?>

<? require_once('html/footer.php'); ?>
<? require_once('html/head.php'); ?>
<? require_once('html/return.php'); ?>

<h2>Test 1 - Soap</h2>

<?

require_once('../src/efinance.php');

$bef = new bef_proposalEnquiry();

$bef->add_data('ClientReference', 'A4');
$bef->add_data('ProposalID', 8323);

$bef->call();

?>

<? require_once('html/footer.php'); ?>
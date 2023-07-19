<?php
    declare(strict_types=1);
    require_once(dirname(__DIR__).'/templates/common.tpl.php');
    require_once(dirname(__DIR__).'/templates/auth.tpl.php');
    require_once(dirname(__DIR__).'/classes/session.class.php');
    $session = new Session();

    $_SESSION['input']['email login'] = $_SESSION['input']['email login'] ?? "";
    $_SESSION['input']['password login'] = $_SESSION['input']['password login'] ?? "";

    $message = $_GET['message'] ?? '';

    drawHead();
    drawLogRegHeader();
    if (count($session->getMessages())) drawMessages($session);
    drawLoginForm();
    
?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    <?php if ($message) { ?>
      alert("<?php echo htmlspecialchars($message); ?>");
    <?php } ?>
  });
</script>
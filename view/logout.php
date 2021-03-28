<?php $fname = $_SESSION['uerid']; ?>
<h3>Thank you for signing out, <?php echo '$fname' ?></h3>
<?php 
    unset($_SESSION['uerid']);
    session_destroy();
    
    $name = session_name();
    $expire = strtotime('-1 year');
    $params = session_get_cookie_params();
    $path = $params['path'];
    $domain = $params['domain'];
    $secure = $params['secure'];
    $httponly = $params['httponly'];
    setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
?>
<p><a href=".?action=list_vehicles">View Vehicles</a></p>
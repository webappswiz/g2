<?php

$menus = array();
$menus = array(
    '/admin/packages' => array('Packages','packages'),
    '/admin/orders' => array('Orders', 'orders'),
    '/admin/settings' => array('Statuses','settings'),
    //'/admin/shelters' => array('Shelters', 'shelters'),
    '/admin/users' => array('Users', 'users'),
    '/admin/templates' => array('Templates', 'templates'),
    '/admin/contacts' => array('Contacts','contacts'),
    '/admin/counter' => array('Counter','counter'),
    '/admin/invoice' => array('Invoices','invoice'),
    '/admin/shipping' => array('Shipping','shipping'),
    '/admin/coupons' => array('Coupons','coupons'),
    //'/admin/xmlexport' => array('XML export','xmlexport'),
);
if (!$menus)
    return;
?>
<?php

foreach ($menus as $uri => $data) {
    $class = ''; //active
    if (isset($active_menu) && $active_menu === $data[1]) {
        $class = 'class = "active"';
    }
    echo "<li $class>";
    echo HTML::anchor($uri, $data[0]);
    echo '</li>';
}
?>
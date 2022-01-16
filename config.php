<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51JzH4TSEU2Gkh7vzt5RoAspg4wHgy3fwXC966v7jJphyc4zkjMDSfuCYdHDPE4I6UYGhhOm0w0dyuzqIclQUidDS00w9bjgtPV";

$secretKey="sk_test_51JzH4TSEU2Gkh7vzlsRpOAVU4zPG7KmwETm4vRf9awEePfQvofJPKOla0ybw4GIAT2QnKX7maOJZnM2kX8y6Qd96005rKjYThP";

\Stripe\Stripe::setApiKey($secretKey);
?>
$routes->get('/', 'Home::index');
$routes->get('bmi', 'Home::showbmi');
$routes->post('calbmi', 'BmiController::calculateBmi');
$routes->get('inputbmi', 'BmiController::showInputForm');
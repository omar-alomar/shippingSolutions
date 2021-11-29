'use strict';

(function () {
    function init() {
        var router = new Router([
            new Route('deliveries', 'deliveries.php', true),            
            new Route('reports', 'reports.php'),
            new Route('payroll', 'payroll.php'),
            new Route('account', 'account.php')
        ]);
    }
    init();
}());
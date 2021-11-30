'use strict';

(function () {
    function init() {
        var router = new Router([
            new Route('deliveries', 'deliveries.php', true),            
            new Route('reports', 'reports.php'),
            new Route('payroll', 'payroll.php'),
            new Route('account', 'account.php'),
            new Route('orderEntry', 'orderEntry.php'),
            new Route('clientEntry', 'clientEntry.php'),
            new Route('clients', 'clients.php')
        ]);
    }
    init();
}());
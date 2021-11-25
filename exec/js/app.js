'use strict';

(function () {
    function init() {
        var router = new Router([
            new Route('deliveries', 'deliveries.html', true),            
            new Route('reports', 'reports.html'),
            new Route('payroll', 'payroll.html'),
            new Route('account', 'account.html')
        ]);
    }
    init();
}());
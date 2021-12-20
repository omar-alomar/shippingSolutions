SELECT
    orders.id, 
    users.name AS clientName,
    users.address,
    orders.payload,
    orders.status,
    orders.dateDelivered,
    (SELECT name FROM users WHERE id=orders.driverId) AS driverName

FROM
    orders

INNER JOIN users ON orders.clientId = users.id;
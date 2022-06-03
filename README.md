1. Есть класс сущности Article.php. Необходимо, чтобы поле createdAt заполнялось при создании, а поле updatedAt при создании и обновлении сущности. Как этого добиться?

Ответ: Doctrine Lifecycle Callbacks / Listeners / Subscribers. Listener / Subscriber лучше, т.к. вынесены в отдельный сервис, не засоряют код сущности.

2.



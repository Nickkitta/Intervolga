start transaction;
-- Удаление всех записей в таблице продуктов, о количестве которых мы ничего не знаем
delete from products where id not in (select product_id from availabilities);
-- Удаление всех записией в таблице категорий, которые не имеют ни одного продукта
delete from categories where id not in (select category_id from products);
-- Удаление всех записей в таблице складов, которые не имеют у себя никаких товаров
delete from stocks where id not in (select stock_id from availabilities);
commit;
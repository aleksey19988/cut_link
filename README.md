# Cut links / Сокращение ссылок

Сервис, благодаря которому вы можете сокращать свои ссылки до 10 символов, независимо от их первоначальной длины.

---

Ссылка на оригинальное тестовое задание: https://github.com/avito-tech/auto-backend-trainee-assignment

---

# Внешний вид приложения:

![Screenshot](/screenshot.png)

# Полезная информация
1. Подключение к БД
    * Хост - localhost
    * Имя пользователя - root
    * Пароль - пустое поле
    * Имя БД - cut_link
2. Реализация переадресации
    * Для успешной переадресации автоматически подставляется шаблон "localhost/cut-link". Значение шаблона хранится в переменной, так что при необходимости его необходимо сменить только в одном месте:
    * ```$pattern = "localhost/cut-link/"```

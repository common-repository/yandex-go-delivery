=== Яндекс Доставка ===
Contributors: yandexlogistic
Tags: shipping, shipping method, delivery, woocommerce shipping, shipment, доставка
Requires at least: 6.0.0
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: trunk
License: GPL 2.0
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html

Яндекс Доставка — это сервис, который помогает бизнесам отправлять заказы клиентам внутри города и между городами.

== Часто задаваемые вопросы ==

= Как обратиться в службу поддержки модуля?  =

Поддержка осуществляется через личный кабинет Яндекс Доставки

= Как настроить Яндекс доставку для WooCommerce? =

1. Подключите Яндекс Доставку для бизнеса, если ещё не успели этого сделать. Сделать это можно на сайте Яндекс Доставки [на сайте Яндекс Доставки](https://dostavka.yandex.ru/payment/#form).
2. Войдите в свой личный кабинет на сайте Яндекс Доставки» и [перейдите на вкладку «Профиль компании»](https://business.taxi.yandex.ru/profile/settings/).
3. Нажмите «Получить» напротив пункта «Токен для API». Скопируйте полученный токен.
4. Перейдите в раздел «Установленные» в пункте «Плагины». Найдите плагин «Яндекс Доставка» в списке плагинов. Активируйте его, если он не активирован.
5. Перейдите к настройкам способа доставки: Яндекс Доставка → Настройки.
6. Выберете страну и введите полученный токен API Яндекс Доставки.
7. Получите токен геокодера, используя инструкцию
→ для Google Geocoding — [Getting started with Google Maps Platform | Google for Developers](https://developers.google.com/maps/get-started#create-project)
→ для Яндекс Геосервисы — [Введение | API Геокодера](https://business.taxi.yandex.ru/profile/settings/). Скопируйте и вставьте токен в поле «Токен API выбранного геосервиса».
8. При необходимости поставьте галочку в чекбоксе «Включено в корзине». В корзине вашего магазина появится метод доставки «Яндекс Доставка». Расчёт стоимости будет происходить после ввода адреса.
9. Настройте расчёт доставки для ваших клиентов. Помните, что это не меняет способ обработки платежей между вами и Яндекс Доставкой.
10. Перейдите в WooCommerce → Настройки → Доставка. Добавьте зону доставки и выберете метод доставки: Яндекс Доставка
Доступные зоны доставки: Россия, Беларусь, Казахстан, Узбекистан. Доступные города можно увидеть [на сайте Яндекс Доставки](https://dostavka.yandex.ru/express-delivery/region/).
11. Перейдите к управлению складами: Яндекс Доставка → Склады. Введите адреса складов или магазинов, с которых будете отправлять заказы клиентам. Выберите склад по умолчанию. От него будет рассчитываться стоимость доставки в корзине.
12. Перейдите в список заказов: WooCommerce → Заказы
13. Убедитесь, что в списке заказов отображается колонка «Действия». Если это не так, нажмите на «Настройки экрана», отметьте галочкой поле «Действия» и нажмите «Применить».
14. В списке заказов, для которых возможна отправка через Яндекс Доставку, доступна кнопка отправки. Нажмите на неё, чтобы перейти к форме создания заявки на доставку выбранного заказа.
15. Чтобы посмотреть, в каких заказах покупатель выбрал Яндекс Доставку, введите «Яндекс Доставка» в строку поиска по заказам.
16. Для одновременной отправки нескольких заказов выделите их, выберите действие «Отправить заказы в Яндекс Доставку», и нажмите кнопку «Применить», чтоб перейти к форме создания заявки на доставку выбранных заказов.
17. После ввода данных нажмите кнопку «Рассчитать» для расчёта стоимости доставки.
18. После расчета вы увидите стоимость доставки и время подачи машины. Чтобы подтвердить заявку на доставку с указанной стоимостью нажмите на кнопку «Подтвердить заявку».
19. Вот и всё! Вы сможете отслеживать этапы выполнения заявки в карточке заказа.

= Что делать, если появилось уведомление “Not authorized request” =
1. Ваш токен не позволяет вам реализовать доставку с помощью Яндекс Доставки. Чтобы всё заработало, [нужно подключиться к Яндекс Доставке](https://dostavka.yandex.ru/payment/#form).
2. Ваш баланс меньше лимита, вам необходимо внести депозит.

= Введён правильный токен, но стоимость заказа не рассчитывается =
Если карты не загружены, это означает, что ключ геокодера ещё не активирован.
Для активации ключа требуется до 24 часов.

== Changelog ==
= 1.13 =
* Добавлена новая страна: Армения

= 1.12.9 =
* Добавлена совместимость с HPOS (высокоскоростное хранилище данных Woocommerce)

= 1.12.5 =
* Добавлена новая страна: Узбекистан

= 1.12.4 =
* Добавлено: совместимость с Wordpress 6.5
* Добавлено: совместимость с PHP 8.3
* Исправлено: незначительные ошибки

= 1.11.5 =
* Исправлено: Отправка заказов
* Добавлено: Поддержка ЮАР

= 1.11.4 =
* Добавлено: Поддержка Израиля и Чили

= 1.11.2 =
* Исправлено: отправка заказа по постоплате

= 1.11.1 =
* Добавлено: Функция для вывода стоимости заказа в любом месте шаблона: ygo_get_delivery_price($product_id)
* Исправлен перевод

= 1.11.0 =
* Новый интерфейс
* Добавлено: Перевод на Иврит

= 1.10.5 =
* Добавлено: Сервисы геокодирования Google и DaData
* Исправлены ошибки и недочёты

= 1.10.4 =
* Исправлено: неверная стоимость доставки, если не введены данные на странице заказа

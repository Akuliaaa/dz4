<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О ПОКУПКЕ ПРОДУКТА</title>
    <link rel="stylesheet" href="style/for_clients.css">
</head>
<body>
<header>
        <a class="logo" href="index.php">IT TECHNIC</a>
        <a class="news" href="news.php">НОВОСТИ</a>
        <a class="about_us"href="about_us.php">О НАС</a>
        <a class="info"href="info.php">О ПРОДУКТЕ</a>
        <a class="history"href="history.php">ИСТОРИЯ ПРОДУКТА</a>
        <a class="contacts" href="contacts.php">КОНТАКТЫ</a>
        <a class="for_clients" href="for_clients.php">О ПОКУПКЕ ПРОДУКТА</a>
    </header>

    <section class="content">
        <h2>Запишитесь на курсы в IT TECHNIC</h2>

        <p>Запишитесь на курсы в IT TECHNIC В нашем образовательно-досуговом центре IT TECHNIC мы предлагаем широкий спектр курсов, которые помогут ученикам развить важные навыки в различных областях — от программирования и робототехники до творчества и наук. Наши курсы рассчитаны на детей всех возрастов и уровней подготовки и помогут вам раскрыть потенциал вашего ребенка.</p>
        <br>
        <h3>Как записаться на курс::</h3>
        <ol>
            <li>Выберите курс
                <p>Ознакомьтесь с нашими курсами и выберите тот, который соответствует интересам вашего ребенка. Каждый курс сопровождается подробным описанием, чтобы вы могли принять обоснованное решение.</p>
            </li>
            <br>
            <li>Добавить курс в корзину
                <p>Нажмите кнопку «Зарегистрироваться» и продолжите выбор других курсов или перейдите к регистрации.</p>
            </li>
            <br>
            <li>Регистрация записи
                <p>Перейдите в корзину, проверьте выбранные курсы и заполните необходимые регистрационные данные.</p>
            </li>
            <br>
            <li>Подтверждение записи
                <p>После записи на прием мы свяжемся с вами для подтверждения и уточнения всех деталей. Вы получите уведомление с подтверждением регистрации на курс и временем занятий.</p>
            </li>
        </ol>
    <br>
    <h3>Способы оплаты:</h3>
    <ul>
        <li>Банковская карта</li>
        <li>Электронные кошельки</li>
        <li>Наличный расчет (для клиентов, посещающих центр)</li>
    </ul>
    <br>
    <h3>Обратная связь:</h3>
    <p>Если у вас возникли вопросы или трудности при записи на курс, не стесняйтесь обращаться к нам. Мы всегда готовы помочь и предоставить дополнительную информацию.</p>
    <br> <br>
    <h3>Зачисление на курсы в IT TECHNIC — это прекрасная возможность для вашего ребенка развиваться и получать новые знания в увлекательной и поддерживающей атмосфере.</h3>

    <div class="form-container">
        <h3>Записаться на курс:</h3>
        <form action="">
            <label for="name">Имя:</label>
            <input type="text" name="name"required>

            <label for="email">Электронная почта:</label>
            <input type="email" name="email" required>

            <label for="course">Выберите курс:</label>
            <select required>
                <option value="programming">Программирование</option>
                <option value="robotics">Робототехника</option>
                <option value="creativity">Создание</option>
                <option value="science">Науки</option>
            </select>
            <br> <br>
            <label for="message">Комментарий:</label>
            <textarea name="message" rows="4" placeholder="Your wishes or questions..."></textarea>

            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</section>

</body>
</html>


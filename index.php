<?php include __DIR__ . '/calc.php'; ?>
<form action="/index.php" method="POST">
       <input type="number" name="x" placeholder="Введите значение" required autofocus> <!-- Изменил тип с text на number избавившись от лишней проверки на тип данных в коде -->
    <select name="operation">
        <option value="sum">+</option>
        <option value="diff">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="y" placeholder="Введите значение" required>
    <button type="submit">Выполнить действие</button>
</form>
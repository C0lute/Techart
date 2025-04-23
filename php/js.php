<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/" style="display: flex; flex-direction: column; width: max-content; gap:10px;">
        <label>Число 1</label>
            <input type="text" id="text1">
                <select name="inp1" id="inp1">
                    <option value="value1">*</option>
                    <option value="value2">/</option>
                    <option value="value3">+</option>
                    <option value="value4">-</option>
                </select>
            </input>
            <label>Число 2</label>
            <input type="text" id="text2"></inpuut>
            <button type="button" id="btn1" style="width:180px; height:max-content;">Нажми меня!</button>
            <label>Результат</label>
            <input type="number" id="text3" readonly></inpuut>
</form>
<script src="/js/test.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body>
<div id="header">
    <!-- Your header content goes here -->
    <h1>Student Dashboard</h1>
</div>
<style>
    #header {
        background-color: #333;
        color: #fff;
        padding: 5px;
        text-align: center;
    }
</style>

<div id="content">
    <!-- Your iframe code goes here -->
    <iframe title="soft" width="1400" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiODFkMzJiZWQtNmM2MC00YzZkLWIxYTMtZTA2M2RkYjUxZWVmIiwidCI6ImE2ZWMwZjFjLTJhMzQtNDFhOS1hZDExLTIyNzVhNDg4ODQ5NyIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
</div>

<script>
    // JavaScript code to get screen width and height
    var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var screenHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

    console.log('Screen Width:', screenWidth);
    console.log('Screen Height:', screenHeight);
</script>

</body>
</html>



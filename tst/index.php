<?php

   require_once('./app/require.php');
   /*
    1) get method
    2) get 'action' parameter
    3) pass parameters throught to controller based on action
    4) add/remove user to the page 
    5) show the table at the bottom
    */
    $app = new App();
    $app->run();
    
?>
<!DOCTYPE html>
<html>
<head>
    <script
      src="https://code.jquery.com/jquery-3.2.1.js"
      integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>
     <script src="./public/script.js"></script>
</head>
<body>
    <form id = "1" method="post" action="">
        <input name="name"/>
        <input name="surname"/>
        <input name="age" />
        <input name="action" value="add_action" />
        <button type="submit">submit</button>
    </form>
    <pre>
        <?php if(!$empty){print_r($_POST);} ?>
    </pre>
    <table>
        <tbody>
            <tr><td ></td><td>
            <form method="post" action"">
                <input name="id" value="test" hidden/>
                <input name="action" value="delete_action" hidden/>
                <button class="remove-button">remove</button>
            </form>
            </td></tr>
        </tbody>
    </table>
</body>
</html>

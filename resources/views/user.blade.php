<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>gotouti map</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h3>プロフィール</h3>
 
   
        <div style="margin-top: 30px;">
   
            <table class="table table-striped">  
            <tr>
                <th>
                    氏名
                </th>
                <td>
                    {{ Auth::user()->name }}
                </td>
            </tr>  
            
    </table>
 
</div>
</body>
</html>
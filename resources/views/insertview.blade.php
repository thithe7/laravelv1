<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        
    </head>
    <body>
        
                <form action="{{url('insert')}}" method="POST">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                	nama=<input type="text" name="nama"><br>
                	alamat=<TEXTAREA name="alamat"></TEXTAREA><br>
                	telpon<input type="text" name="telpon"><br>
                	<input type="submit" name="submit" value="save">
                </form>
            
    </body>
</html>

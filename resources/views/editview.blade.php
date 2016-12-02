<!DOCTYPE html>
<html>
    <head>
        <title>Laravell</title>

        
    </head>
    <body>
        
                <form action="{{url('edit')}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                    <input type="hidden" name="id" value="{{$siswa->id}}">
                	nama=<input type="text" name="nama" value="{{$siswa->nama}}"><br>
                	alamat=<TEXTAREA name="alamat">{{$siswa->alamat}}</TEXTAREA><br>
                	telpon<input type="text" name="telpon" value="{{$siswa->telpon}}"><br>
                	<input type="submit" name="submit" value="save">
                </form>
            
    </body>
</html>

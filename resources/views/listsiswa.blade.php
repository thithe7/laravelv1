<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        
    </head>
    <body>
                <a class="button btn-small full-width text-center" title="" href="{{url('insertsiswa')}}">insert</a>
                <br><br>
                @foreach($siswa as $s)
                -{{$s->nama}}
                <a class="button btn-small full-width text-center" title="" href="{{url('editsiswa')}}/{{$s->id}}">edit</a>
                <a class="button btn-small full-width text-center" title="" href="{{url('deletesiswa')}}/{{$s->id}}">delete</a><br>
                @endforeach
            
    </body>
</html>

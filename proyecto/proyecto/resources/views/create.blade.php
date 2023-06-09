<form action="{{ url('/Estudiantes') }}" method="post" enctype="multipart/form-data">
@csrf
@include('form');
</form>
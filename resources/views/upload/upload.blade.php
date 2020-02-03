<div>
    <form id="dddd" name="dddd"enctype="multipart/form-data" method="POST" action="{{url('upload')}}">
        <input id="id" type="file" name="button" value="id"/>
        {{csrf_field()}}
        <input type="submit" name="button" value="button"/>
    </form>
</div>

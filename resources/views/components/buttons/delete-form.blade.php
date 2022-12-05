
<form method={{$attributes['method']}} action={{$attributes['action']}}>
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger ">Cancella</button>
</form>
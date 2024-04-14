<h3>Exporter</h3>
<p>Exporter la table "clients" en Excel</p>

<form method="POST" action="{{ url('simple-excel/export') }}" name="f">
 @method('POST')
  {{ csrf_field() }}

    <input type="text" name="name" placeholder="Nom de fichier" >

    <select name="extension" >
        <option value="xlsx" >.xlsx</option>
        <option value="csv" >.csv</option>
    </select>

    <button type="submit" >Exporter</button>

</form>
<div class=" offset-1 col-3">
    <div class="input-group">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
      </div>
</div>

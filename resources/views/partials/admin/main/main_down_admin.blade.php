<h2 class="sub-header">Configuraciones</h2>
<div class="row">
    <div class="col-lg-3" id="ver-oferta" style="text-align: center;">
        <h4>Oferta online</h4>
        <p>{{ C_OFERTA_ONLINE }}</p>
        <div class="row" style="margin-top:50px;">
            <a class="btn btn-info" onclick="edit_sets('oferta')">Editar</a>
        </div>
    </div>
    <div class="col-lg-3" id="edit-oferta" style="text-align:center;display:none">
    <h4>Modificar datos</h4>
    <form action="{{url('admin/sets')}}" method="post" role="form" id="sets-form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-lg-12">

            <div class="row">
                <div class="col-lg-12">
                    <input type="text" class="form-control" name="value" id="value" placeholder="Oferta Online" required value="{{ C_OFERTA_ONLINE }}" >
                    <input type="hidden" name="key" value="C_OFERTA_ONLINE">
                </div>
            </div>

            <button type="submit" class="btn btn-default btn-primary">Modificar</button><a class="btn btn-danger" onclick="edit_sets('oferta')" style="margin-left:10px">Cancelar</a>


        </div>
    </form>
    </div>
</div>

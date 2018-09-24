<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>150</h3>

        <p>Total Clientes</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-people"></i>
      </div>
      <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>53<sup style="font-size: 20px">%</sup></h3>

        <p>Clientes Activos</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>44</h3>

        <p>Clientes Pausados</p>
      </div>
      <div class="icon">
        <i class="ion ion-sad"></i>
      </div>
      <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>65</h3>

        <p>Clientes Morosos</p>
      </div>
      <div class="icon">
        <i class="ion ion-alert-circled"></i>
      </div>
      <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<div class="row">
  <div class="col-xs-12">

    <div class="box">
      <!-- <div class="box-header">
        <h3 class="box-title">Data Table With Full Features</h3>
      </div> -->
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Cliente</th>
            <th>Sucursal</th>
            <th>Contrato</th>
            <th>Fecha</th>
            <th>Status</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          <?php if(!empty($clientes)) {
          $i = 1;
          foreach ($clientes ->result() as $cliente) { ?>
          <tr>
            <td><?= $cliente->nombre ?></td>
            <td>Internet
              Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>
              <span class="label" style="background: #63B45E ">CUMPLIENDO</span>
            </td>
            <td>
              <a href="perfil" class="btn btn-block btn-info btn-xs">Más</a>
            </td>
          </tr>
          <?php $i++; } }  ?>
          </tbody>
          <tfoot>
          <tr>
            <th>Cliente</th>
            <th>Sucursal</th>
            <th>Contrato</th>
            <th>Fecha</th>
            <th>Status</th>
            <th></th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
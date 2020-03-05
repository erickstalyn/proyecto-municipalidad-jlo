<template>
    <main>
      <!-- <h3><i class="fa fa-angle-right"></i> Expedientes</h3> -->
      <!-- <div class="row mb"> -->
      
        <!-- <div class="container-small"> -->
          <!-- Encabezado principal -->
          <!-- <div class="row form-group">
              <i class="fas fa-map-signs"></i>&nbsp;&nbsp;
              <span class="h3 mb-0 text-gray-900">Materiales&nbsp;</span>
              <button type="button" class="btn btn-success" @click="abrirModalAgregar()">
                  <i class="fas fa-hammer"></i>&nbsp; Nuevo
              </button>&nbsp;
              <button type="button" class="btn btn-danger" @click="generatePdf()">
                  <i class="far fa-file-pdf"></i>&nbsp; PDF
              </button>
          </div> -->
          <div class="row">
            <div class="col-lg-12" style="background: red;">
          
              <!-- <div class="input-group" style="background: white;"> -->
                <!-- <div class="input-group-lg"> -->
                  <h3 ><i class="fa fa-angle-right"></i> Expedientes</h3>
                  <!-- <div class="col-lg-2 pt-4"> -->
                    <button type="button" class="btn btn-success" @click="abrirModalAgregar()">
                        <i class="fas fa-hammer"></i>&nbsp; Nuevo
                    </button>&nbsp;
                  <!-- </div> -->
                  <!-- <div class="col-lg-2"> -->
                    <button type="button" class="btn btn-danger" @click="generatePdf()">
                        <i class="far fa-file-pdf"></i>&nbsp; PDF
                    </button>
                  <!-- </div> -->

                <!-- </div> -->
              <!-- </div> -->

            </div>
          </div>


          <!-- Inputs de busqueda -->
          <div class="row form-group">
              <div class="col-md-8">
                  <div class="input-group"> 
                      <!-- <select class="col-md-3 custom-select text-gray-900" v-model="Busqueda.estado" @change="listar()">
                          <option value="2">Todos</option>
                          <option value="1">Activados</option>
                          <option value="0">Desactivados</option>
                      </select> -->
                      <input type="search" class="form-control" v-model="Busqueda.texto" placeholder="Buscar por NOMBRE" @keyup="listar()">
                      <button type="button" class="btn btn-primary" @click="listar()">
                          <i class="fa fa-search"></i>&nbsp; Buscar
                      </button>
                  </div>
              </div>
              <div class="col-md-2"></div>
              <div class="col-md-1" align="right">
                  <label>N° filas:</label>
              </div>
              <div class="col-md-1">
                  <select class="custom-select custom-select-sm text-gray-900" v-model="Busqueda.filas" @change="listar()">
                      <option v-for="item in Filas" :key="item" :value="item" v-text="item"></option>
                  </select>
              </div>
          </div>

          <!-- List start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th class="hidden-phone">Platform(s)</th>
                    <th class="hidden-phone">Engine version</th>
                    <th class="hidden-phone">CSS grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                    <td>Trident</td>
                    <td>Internet Explorer 4.0</td>
                    <td class="hidden-phone">Win 95+</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">X</td>
                  </tr>
                  <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td class="hidden-phone">Win 98SE+</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">A</td>
                  </tr>
                  <tr class="gradeX">
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td class="hidden-phone">Mac OS 8-9</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">X</td>
                  </tr>
                  <tr class="gradeC">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td class="hidden-phone">Mac OS 7.6-9</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">C</td>
                  </tr>
                  <tr class="gradeC">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td class="hidden-phone">Mac OS 8-X</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">C</td>
                  </tr>
                  <tr class="gradeA">
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td class="center">-</td>
                    <td class="center">C</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- List end-->
        <!-- </div> -->

      <!-- </div> -->





    </main>
</template>

<script>
    export default {
      data(){
        return {

          Busqueda: {
              texto: '',
              estado: 2,
              filas: 5
          },
          //datos de paginacion
          Paginacion: {
              total: 0,
              currentPage: 0,
              lastPage: 0,
              perPage: 0,
              firstItem: 0,
              lastItem: 0
          },
          Navegacion:{
              offset: 3,
              ordenarPor: 'id',
              orden: 'desc'
          },
        }
      },
      computed: {
        Paginas: function(){
            if ( !this.Paginacion.lastItem ) {
                return [];
            }

            var from = this.Paginacion.currentPage - this.Navegacion.offset;
            if ( from < 1) {
                from = 1;
            }

            var to = this.Paginacion.currentPage + this.Navegacion.offset*2;
            if ( to > this.Paginacion.lastPage ) {
                to = this.Paginacion.lastPage;
            }

            var pagesArray = [];
            while ( from <= to ) {
                pagesArray.push(from);
                from++;
            }
            
            return pagesArray;
        },
        Filas: function(){
            var min = 3;
            var max = 20;
            var filas = [];

            while ( min <= max) {
                filas.push(min);
                min++;
            }

            return filas;
        },
      },
      mounted() {
          console.log('Component mounted.')
      }
    }
</script>

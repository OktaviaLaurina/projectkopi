@extends('user.default')

@section('content')

@include('sweetalert::alert')
   
<div class="container">
    <form action="{{route('cekoutpost')}}" method="POST">
        @csrf
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">
                    <input type="checkbox" onchange="checkAll(this)">
                </th>
                <th scope="col">Nama Kopi</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody>
    
                <?php $i = 0; ?>
                @foreach ($data as $datas)
                <?php $i++; ?>
    
            <tr>
                <th scope="row">
                    <input type="checkbox" name="checked[]" onchange="changed(this)" value="<?=($datas->total . ',' . $datas->kopi_id . ',' . $datas->jumlah . ',' . $datas->id) ?>">
                </th>
                <td>{{$datas->nama_kopi}}</td>
                <td>{{$datas->jumlah}}</td>
                <td>{{$datas->total}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
        @if(sizeof($data) > 0):
        <div class="row mb-4">
            <div class="col-md-6">
                <input type="text" name="total" id="totalInput" hidden>
                <textarea placeholder="Alamat" class="form-control" type="text" name="alamat"></textarea>
            </div>
            <div class="col-md-6">
                <textarea placeholder="Pesan" class="form-control" type="text" name="pesan"></textarea>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col">
                <button type="submit" href="" class="btn btn-primary">Cekout</button>
            </div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                <h3>Total: Rp. <span id="totalSemua">0</span> </h3>
            </div>
          </div>
    </form>
    
    <div class="card">
        
    </div>
</div>
@endsection

<script>
    function checkAll(ele) {
       var checkboxes = document.getElementsByTagName('input');
       let totalAll = 0
       if (ele.checked) {
           for (var i = 0; i < checkboxes.length; i++) {
               if (checkboxes[i].type == 'checkbox' ) {
                   checkboxes[i].checked = true;
                   const string = checkboxes[i].value.toString().split(',')
                   let total = string[0]
                   if(total !== 'on') {
                    
                    
                    let jumlah = string[1]
                    totalAll += Number(total)
                   }
                  
               }
           }
       } else {
           for (var i = 0; i < checkboxes.length; i++) {
               if (checkboxes[i].type == 'checkbox') {
                   checkboxes[i].checked = false;
               }
           }
       }
       document.getElementById('totalSemua').textContent = totalAll
       document.getElementById('totalInput').value = totalAll
   }
   function changed (ele) {
       let totalAll =Number( document.getElementById('totalSemua').textContent)
       const string = ele.value.toString().split(',')
       let total = string[0]
       if (ele.checked) {
            totalAll += Number(total)
       } else {
           console.log('tidak')
           totalAll -= Number(total)
       }
       document.getElementById('totalSemua').textContent = totalAll
       document.getElementById('totalInput').value = totalAll
    // var checkboxes = document.getElementsByTagName('input');
    //    let totalAll = 0
    //    if (ele.checked) {
    //        for (var i = 0; i < checkboxes.length; i++) {
    //            if (checkboxes[i].type == 'checkbox' ) {
    //                const string = checkboxes[i].value.toString().split(',')
    //                let total = string[0]
    //                if(total !== 'on') {
                    
                    
    //                 let jumlah = string[1]
    //                 totalAll += Number(total)
    //                }
                  
    //            }
    //        }
    //    } else {
    //        for (var i = 0; i < checkboxes.length; i++) {
    //            if (checkboxes[i].type == 'checkbox') {
    //            }
    //        }
    //    }
    //    document.getElementById('totalSemua').textContent = totalAll
   }
</script>
@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Edit User</div>
                  <div class="card-body">
  
                      <form action="{{ route('sellings.update', $selling->id) }} " method="POST">
                          @csrf
                          @method('PUT')
                          <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Code Trans:</strong>
                            <input type="text" id="code_trans" class="form-control" name="code_trans" value="{{ $selling->code_trans }}" required autofocus>
                            @error('code_trans')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date Sell :</strong>
                            <input type="date" name="date_sell" class="form-control" name="date_sell" value="{{ $selling->date_sell }}" required autofocus>
                            @error('date_sell')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Customer:</strong>
                            <select name="customer_id" id="customer_id" class="form-select">
                                <option value="">Pilih</option>
                                @foreach($customers as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('customer_id')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cashier :</strong>
                            <select name="cashier_id" id="cashier_id" class="form-select">
                                <option value="">Pilih</option>
                                @foreach($cashiers as $item)
                                <option value="{{ $item->id }}" 
                                    {{ Auth()->user()->id == $item->id ? 'selected' : ''}}>
                                    {{ $item->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('cashier_id')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row col-xs-12 col-sm-12 col-md-12 mt-3">
                        <div class="col-md-10 form-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Masukan Nama / Kode Product">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-2 form-group text-center">
                            <button class="btn btn-secondary" type="button" name="btnAdd" id="btnAdd"><i class="fa fa-plus"></i>Tambah</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">QTY</th>
                                    <th scope="col">Sub Total</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="detail">

                            </tbody>
                        </table>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="text" name="jml" class="form-control">
                            <div class="form-group">
                                <strong>Grand Total:</strong>
                                <input type="text" name="grand_total" class="form-control" placeholder="Rp. 0">
                                @error('grand_total')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 ml-3">Submit</button>
                </div>
  
                          
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
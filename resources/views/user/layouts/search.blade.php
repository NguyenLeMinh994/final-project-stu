

<section class="ftco-search">
  <div class="container">
    <div class="row">
      <div class="col-md-12 search-wrap">
        <h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Tìm Kiếm Bất Động Sản</h2>
        <form action="{{route('/timkiem')}}" method="get" class="search-property">
          

          <div class="row">
            
            <div class="col-md align-items-end">
              <div class="form-group">
                <label for="#">Tìm kiếm</label>
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-search"></span></div>
                    <input type="search" class="form-control" id="usr" name="key">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md align-items-end">
              <div class="form-group">
                <label for="#">Tỉnh/Thành Phố</label>
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="idThanhPho" class="form-control">
                            <option value="">Tỉnh/Thành Phố</option>
                            @foreach ($tinhThanhPhos as $thanhPho)
                              <option value={!! $thanhPho->id !!}>{{$thanhPho->ten}}</option>
                            @endforeach
                      </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md align-items-end">
              <div class="form-group">
                <label for="#">Quận/Huyện</label>
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="idQuan" class="form-control">
                        <option value="">Quận</option>
                            
                      </select>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md align-self-end">
              <div class="form-group">
                <div class="form-field">
                  <input type="submit" value="Tìm kiếm" class="form-control btn btn-primary">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
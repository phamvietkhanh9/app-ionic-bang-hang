<div class="row">
    <div class="col m-b-30">
        <div class="card ">
            <div class="   text-center card-body">
                <div class="text-success   ">
                    <div class="avatar avatar-sm ">
                        <span class="avatar-title rounded-circle badge-soft-success"><i class="mdi mdi-food mdi-18px"></i> </span>
                    </div>
                    <h6 class="m-t-5 m-b-0">&nbsp;</h6>
                </div>
                <div class=" text-center">
                    <h3 style="font-size: 19px">Tổng sản phẩm</h3>
                </div>
                <div class="text-overline ">
                    {{ $overview['items'] }}
                </div>
            </div>
        </div>
    </div>
    <div class="col m-b-30">
        <div class="card ">
            <div class="   text-center card-body">
                <div class="text-danger   ">
                    <div class="avatar avatar-sm ">
                        <span class="avatar-title rounded-circle badge-soft-danger"><i class="mdi mdi-cart mdi-18px"></i> </span>
                    </div>
                    <h6 class="m-t-5 m-b-0">&nbsp;</h6>
                </div>
                <div class=" text-center">
                    <h3 style="font-size: 19px">Tổng đơn hàng</h3>
                </div>
                <div class="text-overline ">{{ $overview['order'] }}</div>
            </div>
        </div>
    </div>
    <div class="col m-b-30">
        <div class="card ">
            <div class="   text-center card-body">
                <div class="text-warning   ">
                    <div class="avatar avatar-sm ">
                        <span class="avatar-title rounded-circle badge-soft-warning"><i class="mdi mdi-calendar-check mdi-18px"></i> </span>
                    </div>
                    <h6 class="m-t-5 m-b-0"> &nbsp;</h6>
                </div>
                <div class=" text-center">
                    <h3 style="font-size: 19px"> Đơn hàng đã giao </h3>
                </div>
                <div class="text-overline ">{{ $overview['complete'] }}</div>
            </div>
        </div>
    </div>
    <div class="col m-b-30">
        <div class="card ">
            <div class="   text-center card-body">
                <div class="text-info   ">
                    <div class="avatar avatar-sm ">
                        <span class="avatar-title rounded-circle badge-soft-info"><i class="mdi mdi-cart mdi-18px"></i> </span>
                    </div>
                    <h6 class="m-t-5 m-b-0"> &nbsp;</h6>
                </div>
                <div class=" text-center">
                    <h3 style="font-size: 19px">Đơn hàng tháng này</h3>
                </div>
                <div class="text-overline ">{{ $overview['month'] }}</div>
            </div>
        </div>
    </div>
</div>
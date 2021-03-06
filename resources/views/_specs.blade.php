<div class='container'>

    <div class='row item-box -header'>
        <div class='col-md-2'>
            功能名稱
        </div>
        <div class='col-md-4'>
            基本款 - 功能說明（至少要收這些錢）
        </div>
        <div class='col-md-4'>
            進階版 - 功能說明（這些全部要加錢）
        </div>
        <div class='col-md-1'>
            價格
        </div>
        <div class='col-md-1'>
            工時
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-2'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-4'>
            {!! ($row[1]) !!}
            <div class='visible-xs-block'>
                <hr class='mobile-hr'>
            </div>
        </div>
        <div class='col-md-4'>
            {!! ($row[2]) !!}
        </div>
        <div class='col-md-1'>
            {{ $row[3] }}
        </div>
        <div class='col-md-1'>
            {{ $row[4] }}
        </div>
    </div>
    @endforeach
</div>

<style>

    .item-box {
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .item-box:nth-child(odd) {
        background-color: white;
    }

    .item-box.-header {
        font-weight: bold;
    }

    .item-box .title {
        font-weight: bold;
    }

    .mobile-hr {
        margin-top: 10px;
        margin-bottom: 10px;
        border-color: #BDBDBD;
        border-style: dashed;
        border-top-width: 2px;
    }

</style>

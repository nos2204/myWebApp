<div class="row">

    @for($i = 0; $i < 2; $i++)
        <div class="row">
            @for($j = 0; $j < 2; $j++)
                <div class="col">
                    {{$name[$i][$j]}}
                </div>
            @endfor
        </div>
    @endfor

</div>
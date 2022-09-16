<?php
    class componentes{
    public static function myModal($texto_boton,$color_boton,$titulo,$cuerpo,$texto_boton_cerrar,$texto_boton_ir,$vinculo_boton_ir){
        return '
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-'.$color_boton.'" data-bs-toggle="modal" data-bs-target="#exampleModal">
            '.$texto_boton.'
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog        ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">'.$titulo.'</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        '.$cuerpo.'
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">'.$texto_boton_cerrar.'</button>
                        <a href="'.$vinculo_boton_ir.'"><button type="button" class="btn btn-primary">'.$texto_boton_ir.'</button></a>
                    </div>
                </div>
            </div>
        </div>
        ';
    }

    public static function myAlert($alert_color,$alert_texto){
        return '
        <div class="alert alert-'.$alert_color.'" role="alert">
            '.$alert_texto.'
        </div>
        ';
    }

    public static function myBadge($titulo,$segundo_titulo){
        return '
        <h1>'.$titulo.' <span class="badge bg-secondary">'.$segundo_titulo.'</span></h1>
        ';
    }

    public static function myBreadcrumb($pa1,$pa2,$pa3){
        return '
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">'.$pa1.'</a></li>
                <li class="breadcrumb-item"><a href="#">'.$pa2.'</a></li>
                <li class="breadcrumb-item active" aria-current="page">'.$pa3.'</li>
            </ol>
        </nav>
        ';
    }

    }
?>
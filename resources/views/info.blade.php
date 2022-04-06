@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="border-style:solid;border-color: #d9d9d9;border-radius: 10px;background-color:white;">    
        <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
        
        <div class="div_primer_parrafo">
            
            <div class="primer_parrafo">
                <div class="titulo_info"><h2><b>Huella de Carbono</b></h2></div>
                <p>
                    La Huella de carbono es un indicador ambiental que pretende reflejar «la totalid
                    ad de gases de efecto invernadero (GEI) emitidos por efecto directo o indirecto 
                    de un individuo, organización, evento o producto». Tal impacto ambiental es medido 
                    llevando a cabo un inventario de emisiones de GEI o un análisis de ciclo de vida 
                    según la tipología de huella, siguiendo normativas internacionales reconocidas, 
                    tales como ISO 2007.El ISO 14069, ISO 14067, PAS 2050 o GHG Protocol entre otras. 
                    La huella de carbono se mide en masa de CO₂ equivalente. Una vez conocido el tamaño 
                    y la huella, es posible implementar una estrategia de reducción o compensación , 
                    públicos o privados.
                </p>
            </div>
            <div class="div_imagen">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Carbon_footprint_representation.jpg/225px-Carbon_footprint_representation.jpg" alt="" style="border-radius:10px;">
            </div>
        </div>
        <div class="div_segundo_parrafo">
            <div class="segundo_parrafo">
                <div class="subtitulo_1"><h5><b>Estándares utilizados en la medición</b></h5></div>
                <p>
                    Los estándares internacionales se pueden agrupa dependiendo si la certificación 
                    corresponde a una organización o a un producto:
                </p>
                <ul>
                    <li>
                        <b>Huella de carbono de una organización</b>. Se analizan las emisiones 
                        de GEI de una organización a lo largo de un año o periodo determinado, 
                        generando un inventario de las mismas. Los estándares más utilizados son: 
                        GHG Protocol e ISO 14064-1.
                    ​</li>
                    <li>
                        <b>Huella de carbono de productos o servicios</b>. Se analizan todas las 
                        emisiones de GEI realizadas durante el Ciclo de Vida del producto o servicio 
                        analizado. Los estándares más utilizados son: <a href="https://es.wikipedia.org/wiki/PAS_2050" title="PAS 2050">PAS 2050:2011</a>, 
                        ISO/TS 14067:2013, con el apoyo de ISO 14040 e ISO 14044 para la elaboración 
                        del Análisis de Ciclo de Vida.
                    </li>
                </ul>
                <div class="subtitulo_2"><h5><b>Organismos certificadores en América Latina</b></h5></div>
                <ul>
                    <li>
                        <b>Enviro-Mark Solutions Limited,</b> empresa perteneciente al gobierno de 
                        Nueva Zelanda posee las acreditaciones para certificar ISO 14064-1 y PAS2050.
                    </li>
                    <li>
                        <b>Carbon Trust</b>, perteneciente al gobierno de Reino Unido posee la 
                        acreditación para certificar PAS2050.
                    </li>
                </ul>
            </div>
            <div class="div_imagen2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Coal_power_plant_Datteln_2.jpg/300px-Coal_power_plant_Datteln_2.jpg" alt="" style="border-radius:10px;height: 295px;width: 354px;">
            </div>
            
        </div>
        <div class="tercer_parrafo">
            <div class="subtitulo_1"><h5><b>Huella de carbono de organización</b></h5></div>
            <p>
                El <b>Inventario de Gases de Efecto Invernadero</b> de una organización, también 
                denominado <i>Huella de Carbono de Organización</i>, es un informe donde se indican 
                las emisiones de GEI realizadas por la organización objeto de estudio durante un 
                periodo determinado, generalmente un año natural. Este inventario se realiza siguiendo 
                estándares internacionales, principalmente <b>GHG Protocol</b>​ o la norma <b>ISO 14064-1</b>. 
                Estos dos estándares contabilizan las emisiones de forma similar, diferenciándose principalmente 
                en detalles a la hora de detallar y desglosar el informe final de inventario.Para las 
                organizaciones se diferencian tres tipos de emisiones:
            </p>
            <ul>
                <li>
                    <b>Emisiones de Alcance 1</b> también denominadas <i>Emisiones Directas</i>. Son los 
                    gases de efecto invernadero emitidos de forma directa por la organización, por ejemplo 
                    por el uso de combustibles fósiles en maquinaria o vehículos propiedad de la organización, 
                    por pérdidas de gases refrigerantes, o por reacciones químicas durante los procesos 
                    productivos de la organización.
                </li>
                <li>
                    <b>Emisiones de Alcance 2</b> o <i>Emisiones Indirectas por Energía</i>. Son los 
                    gases de efecto invernadero emitidos por el productor de la energía requerida por la 
                    organización. Dependen tanto de la cantidad de energía requerida por la organización
                     como del Mix energético de la red que provee a la organización.
                </li>
                <li>
                    <b>Emisiones de Alcance 3</b> también denominadas <i>Otras Emisiones Indirectas</i>. 
                    Son las atribuibles a los productos y servicios adquiridos por la organización, que 
                    a su vez habrán generado emisiones previamente para ser producidos. Son las más 
                    difíciles de contabilizar debido a la gran cantidad de productos y servicios utilizados 
                    por las organizaciones y a la dificultad en conocer los emisiones de estos productos 
                    o servicios si no son aportadas por el propio productor.
                </li>
            </ul>
            <p>
                Dentro del Inventario de Emisiones de una organización también se deben contabilizar 
                las <b>Remociones</b> o absorciones de CO₂. Para poder ser contabilizadas, estas absorciones 
                deben ser debidas directamente a la actividad de la organización, y se contabilizan por separado, 
                no "restan" emisiones. La compensación de emisiones no es una absorción de CO₂, por tanto no 
                se deben contabilizar dentro de un inventario, aunque la organización sí puede informar de sus 
                compensaciones si las ha realizado.
            </p>
            <p>
                Los Inventarios de Emisiones de GEI deben contener como mínimo las emisiones de Alcance 1 y 
                Alcance 2, y pueden ser verificadas por una entidad de verificación acreditada.
            </p>
            <p>
                Los Inventarios de Emisiones se referirán siempre a un "Año Base", indicando el aumento o 
                reducción de emisiones del año del informe comparado con el Año Base. Si la organización 
                realiza un inventario por primera vez, ese será su año base.
            </p>
        </div>
        <div class="div_cuarto_parrafo">
            <div class="cuarto_parrafo">
                <div class="subtitulo_1"><h5><b>Huella de Carbono personal</b></h5></div>
                <p>
                    El <b>Inventario de Gases de Efecto Invernadero</b> de una organización, también denominado 
                    <i>Huella de Carbono de Organización</i>, es un informe donde se indican las emisiones de 
                    GEI realizadas por la organización objeto de estudio durante un periodo determinado, generalmente 
                    un año natural. Este inventario se realiza siguiendo estándares internacionales, principalmente 
                    <b>GHG Protocol</b>​ o la norma <b>ISO 14064-1</b>.​ Estos dos estándares contabilizan las emisiones 
                    de forma similar, diferenciándose principalmente en detalles a la hora de detallar y desglosar 
                    el informe final de inventario. Para las organizaciones se diferencian tres tipos de emisiones:
                </p>
                <ul>
                    <li>
                        <b>Emisiones de Alcance 1</b> también denominadas <i>Emisiones Directas</i>. Son los gases 
                        de efecto invernadero emitidos de forma directa por la organización, por ejemplo por el uso 
                        de combustibles fósiles en maquinaria o vehículos propiedad de la organización, por pérdidas 
                        de gases refrigerantes, o por reacciones químicas durante los procesos productivos de la organización.
                    </li>
                    <li>
                        <b>Emisiones de Alcance 2</b> o <i>Emisiones Indirectas por Energía</i>. Son los gases de 
                        efecto invernadero emitidos por el productor de la energía requerida por la organización. 
                        Dependen tanto de la cantidad de energía requerida por la organización como del Mix energético 
                        de la red que provee a la organización.
                    </li>
                    <li>
                        <b>Emisiones de Alcance 3</b> también denominadas <i>Otras Emisiones Indirectas</i>. Son las 
                        atribuibles a los productos y servicios adquiridos por la organización, que a su vez habrán 
                        generado emisiones previamente para ser producidos. Son las más difíciles de contabilizar 
                        debido a la gran cantidad de productos y servicios utilizados por las organizaciones y a la 
                        dificultad en conocer los emisiones de estos productos o servicios si no son aportadas por 
                        el propio productor.
                    </li>
                </ul>
                <p>
                    Dentro del Inventario de Emisiones de una organización también se deben contabilizar las 
                    <b>Remociones</b> o absorciones de CO₂. Para poder ser contabilizadas, estas absorciones 
                    deben ser debidas directamente a la actividad de la organización, y se contabilizan por separado, 
                    no "restan" emisiones. La compensación de emisiones no es una absorción de CO₂, por tanto no 
                    se deben contabilizar dentro de un inventario, aunque la organización sí puede informar de sus 
                    compensaciones si las ha realizado.
                </p>
                <p>
                    Los Inventarios de Emisiones de GEI deben contener como mínimo las emisiones de Alcance 1 y 
                    Alcance 2, y pueden ser verificadas por una entidad de verificación acreditada.
                </p>
                <p>
                    Los Inventarios de Emisiones se referirán siempre a un "Año Base", indicando el aumento o reducción
                    de emisiones del año del informe comparado con el Año Base. Si la organización realiza un 
                    inventario por primera vez, ese será su año base.
                </p>
            </div>
            
            <div class="div_imagen4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Products_leaving_a_carbon_foot_print.jpg/220px-Products_leaving_a_carbon_foot_print.jpg" alt="" style="border-radius:10px;height: 100%;">
            </div>
            
        </div>
        <button> Click me!</button>
        
    </div>
</div>
@endsection
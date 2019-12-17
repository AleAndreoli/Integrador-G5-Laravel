@extends('layouts.mainlayout')

@section('title','Registro - Green Valley')

@section('content')

  <div class="row col-md-12 justify-content-center">
    <div class="text-center">
      <h4 class="display-4">¡Gracias por elegirnos!</h4>
    </div>
  </div>
  <br>
  <div class="row col-md-12 justify-content-center">

    <p class="text-muted mb-4">Green Valley es la mejor opción en córdoba y alrededores para convertir tu casa en un hogar</p>
  </div>

  <div class="container mb-5">
      <div class="row no-gutter"> <!-- Fila sin separacion entre divs -->

        <div class="col-md-6 d-none d-md-flex bg-image p-0"> <!-- Div mitad para la imagen -->
          <img src="/img/ivy.jpg" alt="Carretilla">
        </div>

        <div class="col-md-6 py-2 bg-light"> <!-- Div Mitad para el formulario -->
          <div class="row d-flex justify-content-center">

            <div class="px-4 py-3 text-uppercase text-center"><h3 class="font-weight-bold">¡Registrate para comprar tus productos!</h3></div>
            <p class="my-3 px-4">
              En solo 7 pasos estarás adentro de tu cuenta y explorando nuestras maravillosas ofertas... <br>
              Si ya tenés una cuenta
              <a type="" href="{{ route('login') }}" name="button">seguí por acá</a>
            </p>

              <form class="col-md-10 bg-light px-4 py-3 text-uppercase font-weight-bold"  action="{{ route('register') }}" method='post' enctype="multipart/form-data" id="registerForm">
                @csrf

                  <div class="form-group">
                    <label class="bg-light rounded-pill px-4 py-1 text-uppercase font-weight-bold" for="name">{{ __('Decinos tu nombre:') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="bg-light rounded-pill px-4 py-1 text-uppercase font-weight-bold" for="last_name">{{ __('Y tu apellido?:') }}</label>
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email" class="bg-light rounded-pill px-4 py-1 text-uppercase font-weight-bold">{{ __('Ingresa tu e-mail:') }}</label>
                    <input id="email" placeholder="email@dominio.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <small class="form-text text-muted">Tranquilo, jamás compartiremos esta información con alguien más.</small>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>
                  <div class="form-group">
                    <label for="password" class="bg-light rounded-pill px-4 py-1 text-uppercase font-weight-bold">{{ __('Elegí tu contraseña:') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <small id="emailHelp" class="form-text text-muted">Tiene que contener 8 dígitos alfanuméricos.</small>
                  </div>

                  <div class="form-group">
                    <label for="password-confirm" class="bg-light rounded-pill px-4 py-1 text-uppercase font-weight-bold">{{ __('Confirma tu contraseña:') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                  </div>
                  <div class="form-check">
                      <input type="checkbox" class="form-check-input"
                       name="TyCAcepted" value= "Yes" style="bottom: 11.267px;">
                      <!-- Botón para mostrar TyC -->
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target=".modal-tyc">Acepto los Términos y condiciones</button>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="modal fade modal-tyc" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <h4 class="text-center">Bienvenid@s a Green Valley Vivero.</h4>
                              <p> A continuación se incluyen las condiciones generales de utilización de los servicios ofrecidos en el Sitio (el “Servicio” y las “Condiciones de Uso” respectivamente) que regirán los derechos y obligaciones entre los usuarios (los “Usuarios” y/o el “Usuario”) y Vivero Green Valley Vivero.<br>

                              Green Valley Vivero recomienda especialmente guardar una copia impresa de las Condiciones de Uso al ingresar en el Sitio, el Usuario declara saber, conocer y aceptar las presentes Condiciones de Uso. Las Condiciones de Uso, así como sus modificaciones, estarán vigentes en forma inmediata a su publicación en el Sitio. La utilización del Sitio implica el conocimiento y la aceptación plena por parte del Usuario de las Condiciones de Uso. En caso de no aceptar en las Condiciones de Uso o cualquier cambio o modificación de las mismas no deberá continuar utilizando el Sitio.</p>

                              <h5>Naturaleza del Servicio y destino del Sitio.</h5>

                              <p>El Sitio ha sido programado para que constituya un medio virtual para el acceso de los Usuarios a las góndolas de las tiendas de Green Valley Vivero del área de su domicilio.</p>

                              <h5>Usuarios que pueden utilizar los Servicios del Sitio.</h5>

                              <p>Los Servicios sólo están disponibles para personas que tengan capacidad legal para contratar. No podrán utilizar los Servicios las personas que no tengan esa capacidad, los menores de edad o quien registre como Usuario una persona jurídica, deberá tener capacidad para contratar a nombre de tal entidad y de obligar a la misma en los términos de estas Condiciones de Uso. Uso de los Servicios. El Usuario, ya sea registrado o “invitado”, declara que la información que brindará al remitir el pedido de registración será precisa, correcta y actual comprometiéndose a informar en forma inmediata y fehaciente respecto de cualquier cambio siendo a su vez enteramente responsable frente a Green Valley Vivero por los daños y perjuicios que el incumplimiento de dicha obligación pudiere acarrearle incluyendo pero no limitándose a costos de ubicación física del Usuario, costos de intimaciones y citaciones, etc.<br>

                              El Usuario acepta que utilizará los Servicios exclusivamente con los fines estipulados en (a) las Condiciones de Uso y (b) cualquier norma o regulación aplicable ya sea de índole municipal, provincial o nacional incluyendo pero no limitándose a leyes, decretos, ordenanzas, resoluciones, directivas, etc. El Usuario se compromete a no divulgar su contraseña a terceros que no     estuvieren autorizados por el Usuario para acceder a los Servicios del Sitio.</p>

                              <h5>Privacidad de la Información</h5>

                              <p>Para utilizar los Servicios ofrecidos por Green Valley Vivero, los Usuarios deberán facilitar determinados datos de carácter personal. Su información personal se procesa y almacena en servidores o medios magnéticos que mantienen altos estándares de seguridad y protección tanto física como tecnológica.</p>

                              <h5>Violaciones del Sistema o Bases de Datos</h5>

                              <p>No está permitida ninguna acción o uso de dispositivo, software, u otro medio tendiente a interferir tanto en las actividades y operatoria de Green Valley Vivero. Cualquier intromisión, tentativa o actividad violatoria o contraria a las leyes sobre derecho de propiedad intelectual y/o a las prohibiciones estipuladas en este contrato harán pasible a su responsable de las acciones legales pertinentes, y a las sanciones previstas por este acuerdo, así como lo hará responsable de indemnizar los daños ocasionados.</p>

                              <h5>Fallas en el sistema</h5>

                              <p>Green Valley Vivero no se responsabiliza por cualquier daño, perjuicio o pérdida al usuario causados por fallas en el sistema, en el servidor o en Internet. Green Valley Vivero tampoco será responsable por cualquier virus que pudiera infectar el equipo del usuario como consecuencia del acceso, uso o examen de su sitio web o a raíz de cualquier transferencia de datos, archivos, imágenes, textos, o audio contenidos en el mismo. Los usuarios NO podrán imputarle responsabilidad alguna ni exigir pago por lucro cesante, en virtud de perjuicios resultantes de dificultades técnicas o fallas en los sistemas o en Internet. Green Valley Vivero no garantiza el acceso y uso continuado o ininterrumpido de su sitio. El sistema puede eventualmente no estar disponible debido a dificultades técnicas o fallas de Internet, o por cualquier otra circunstancia ajena a Green Valley Vivero; en tales casos se procurará restablecerlo con la mayor celeridad posible sin que por ello pueda imputársele algún tipo de responsabilidad. Green Valley Vivero no será responsable por ningún error u omisión contenidos en su sitio web. </p>

                              <h5>Ámbito de aplicación.</h5>

                              <p>Estas Condiciones de Uso son aplicables a cualquiera de todas las ventas de productos y/o servicios a ser realizadas por Green Valley Vivero dentro de la República Argentina. La realización de un pedido supone la aceptación expresa del Usuario a las presentes Condiciones de Uso. Al aceptar estas Condiciones de Uso, registrándose como Usuario o ingresando como “invitado”, usted declara bajo juramento y certifica tener 18 años de edad o más. Si usted no está de acuerdo (o no puede cumplir) con cualquiera de las reglas de las Condiciones de Uso, no utilice el Sitio. Toda la información proporcionada al momento de operar con el Sitio debe ser precisa y veraz. Proporcionar información inexacta o falsa constituye una violación grave de estas Condiciones de Uso. Confirmando su pedido en el final del proceso de una operación, el Usuario acuerda aceptar los artículos adquiridos y pagar su precio, perfeccionando con Green Valley Vivero un contrato de compra-venta de mercadería. Referencias a terceros. Las referencias en el Sitio a nombres, marcas, productos o servicios de terceros, o vínculos de hipertexto a sitios Web o información de terceros se proveen únicamente como una comodidad para el Usuario y de ninguna forma constituyen o implican respaldo, patrocinio o recomendación por Green Valley Vivero respecto de la tercera parte, su información, productos o servicios. Green Valley Vivero no tiene control de las prácticas o políticas de esos terceros, ni del contenido de los sitios Web de cualesquiera terceros y no hace ninguna declaración o promesa con respecto a productos o servicios de terceros, o respecto del contenido o la exactitud de cualquier material alojado en dichos sitios de terceros. Si el Usuario decide navegar o seguir un vínculo hacia cualquiera de tales sitios Web de terceros, lo hace enteramente bajo su propio riesgo y responsabilidad.
                              </p>

                              <h5>Orden de compra correspondiente a cada pedido.</h5>

                              <p>El Usuario deberá formular su pedido de la misma forma en que en nuestras tiendas, o sea recorriendo virtualmente las góndolas de la tienda, escogiendo las mercaderías que desea comprar e indicando respecto de cada ítem la cantidad que desea comprar. El procedimiento del Sitio le da oportunidad de añadir o quitar ítems del pedido, de anularlo por completo y de revisarlo. Pueden existir mínimos o máximos en la cantidad, volumen o precio de los ítems incluidos en una orden de compra. Todos los precios publicados en el sitio son precios exclusivos para la compra online de los productos.</p>


                              <h5>Aceptación de pedidos.</h5>

                              <p>Por favor, tenga en cuenta que puede ocurrir que luego de aprobado por el Usuario un pedido, por distintas razones Green Valley Vivero no esté en condiciones de aceptarlo total o parcialmente y deba por ello cancelar o excluir del mismo algunos ítems pedidos por el Usuario. Algunas situaciones pueden dar lugar a que algunos ítems de su pedido sean excluidos del mismo, ya sea debido a limitaciones en las cantidades disponibles para la compra; faltantes de mercadería en la respectiva góndola; falta de autorización a la operación por parte de la entidad emisora o administradora de su tarjeta de crédito; inexactitudes o errores en el producto o información; o problemas identificados por el departamento de prevención de fraude de crédito y de precios. Para su seguridad, le informamos que eventualmente podemos requerirle información o realizar verificaciones adicionales antes de aceptar cualquier pedido. Si se cancela todo o parte de su pedido o si se necesita información adicional para aceptar su pedido, nos pondremos en contacto con usted. En todos los casos que deban realizarse una modificación o cancelación parcial de su pedido, el Usuario tendrá siempre derecho a cancelar la totalidad del mismo. Green Valley Vivero, en uso de sus facultades, se reserva el derecho de anular definitivamente cualquier operación luego de la constatación de los datos ingresados, en cuyo caso se le comunicará al usuario la decisión. Todas las compras efectuadas estarán sujetas al stock informado, debido a las demoras propias de las actualizaciones del sistema, es posible que el mismo le permita realizar una compra que luego deba ser anulada por falta de stock. En ese caso le será informado en el e-mail confirmatorio. Forma de entrega y pago. Una vez que un pedido haya quedado confirmado y el importe de su factura aprobado, salvo que existan inconvenientes excepcionales para la aceptación del pedido por parte de Green Valley Vivero, que le serán debidamente comunicados, recibirá un correo electrónico en el plazo de las 24 horas confirmando que la operación ha sido exitosa. Si el Usuario no recibe tal notificación vía correo electrónico deberá contactarse con el Centro de Atención al Cliente Green Valley Vivero a fin de constatar que no hubo errores de registro al ingresar la casilla de correo.
                              </p>

                              <h5>Métodos de Entrega.</h5>

                              <p>Actualmente el Usuario dispone 3 métodos de entrega de la mercadería: Envío a domicilio. Envío a Sucursal OCA. Retiro en Sucursal Green Valley Vivero.<br>

                              Cuando el método de entrega seleccionado sea “Envío a domicilio”, la compra deberá ser recepcionada preferentemente por el titular del método de pago utilizado, o bien por una persona autorizada que cumpla con las Condiciones de Uso del Sitio. El Usuario podrá designar una persona autorizada a recibir la mercadería y/o servicio adquirido en el domicilio de entrega indicado únicamente para la modalidad “Envío a domicilio”. En todos los casos, para que la mercadería y/o servicio sea entregado, la persona que recepciona deberá exhibir su DNI.<br>

                              En cualquiera de las modalidades de entrega, se le exhibirá al Usuario el estado de la mercadería y los accesorios que vienen con esta debiendo el Usuario (o la persona autorizada por este, en su caso) verificar que la mercadería entregada corresponde a los artículos incluidos en el pedido y en el remito que se le presentará en el acto de entrega. La firma del remito y/o la del comprobante de pago implicará declaración de conformidad con la mercadería entregada, sin perjuicio de los derechos que le pudieren corresponder en caso de que la misma resultara por algún motivo defectuosa.</p>

                              <h5>Medios de Pago.</h5>

                              <p>Hay dos formas de pago. La primera es a través de transferencia bancaria en pesos a nuestra cuenta bancaria. <br>
                              La segunda forma de pago es a traves de Mercado Pago. Es la plataforma encargada de gestionar las transacciones de pago proporcionando así sus propios medios de pago. El Usuario asume el compromiso de aceptar los términos y condiciones de la respectiva plataforma al hacer uso de los servicios de pago en nuestro Sitio.

                              Más información sobre Términos y Condiciones de Mercado Pago: <a href="https://www.mercadopago.com.ar/ayuda/terminos-y-condiciones_299" target="_blank">Términos y condiciones</a></p>


                              <h5>Prohibiciones al Usuario y sus responsabilidades.</h5>

                              <p>Está terminantemente prohibido al Usuario explotar de cualquier forma las informaciones adquiridas por medio del Sitio. No podrá reproducir los textos o imágenes de los anuncios para otros fines que los de su propio recordatorio personal. El Usuario se compromete a tomar a su cargo cualquier responsabilidad contractual o extracontractual que derive de actos como Usuario del Sitio y acepta mantener indemne a Green Valley Vivero, respecto de y contra cualquier reclamo por parte de terceros, derivado o relacionado con el uso inadecuado del Sitio o por la violación de las presentes Condiciones de Uso y sus respectivas modificaciones, o que surja de dicho uso y/o a causa de algún comentario publicado por el Usuario en el Sitio.</p>


                              <h5>Terminación.</h5>

                              <p>Estas Condiciones de Uso implican un contrato que entrará en vigor tan pronto el Usuario acepte las Condiciones de Uso y/o use los servicios del Sitio y permanecerán vigentes hasta que el presente contrato sea cancelado sea por el Usuario o por Green Valley Vivero. El Usuario puede rescindir este contrato en cualquier momento, siempre que lo haga para el futuro evitando el uso de este Sitio y/o siendo Usuario Registrado, renunciando a su registro siguiendo el procedimiento especialmente previsto para ello. Green Valley Vivero también puede rescindir este contrato en cualquier momento siendo válida la notificación de tal rescisión a los domicilios reales o electrónicos que el Usuario tuviere registrados en el Sitio. Asimismo Green Valley Vivero podrá cancelar sin previo aviso la condición de Usuario, y en consecuencia denegar el acceso a los Servicios del Sitio o a comprar por esta vía, si el Usuario no cumpliera con cualquier término o disposición de las presentes Condiciones de Uso. Esta cláusula se aplicará sea o no el Usuario un navegante registrado. Green Valley Vivero podrá en cualquier momento, temporal o permanentemente dar de baja este Sitio. Modificaciones en las Condiciones de Uso. En caso de que estas Condiciones de Uso sean modificadas, tales modificaciones serán publicadas en el Sitio, obrando en él la versión vigente al momento del inicio de cada sesión. Toda vez que por tratarse de un sitio Web abierto a los clientes en general, Green Valley Vivero carece de posibilidad de notificarle particularmente a cada uno de ellos, salvo mediante la publicación en el propio Sitio, por lo que el Usuario se compromete a verificar en forma las Condiciones de Uso con cualquier uso que haga del mismo, entendiéndose que al iniciar cada sesión acepta las que estén vigentes y publicadas en ese momento en la forma y con los efectos establecidos en las presentes Condiciones de Uso. General. Las Condiciones de Uso representan el acuerdo completo entre las partes y sustituyen a todos los acuerdos anteriores que pudieran existir entre ellas. Los títulos utilizados en estas Condiciones de Uso son sólo con fines de referencia y en ninguna manera definen o limitan el alcance de la disposición que titulan. Si cualquier disposición de las mismas se considerara inaplicable por cualquier razón, tal disposición deberá reformarse sólo en la medida necesaria para hacerla exigible y las demás condiciones del presente Acuerdo permanecerán en pleno vigor y efecto. La inacción de Green Valley Vivero con respecto a un incumplimiento de este acuerdo por el Usuario o por otros no constituye una renuncia y no limitará los derechos de Green Valley Vivero con respecto a dicho incumplimiento o infracciones posteriores. Ley aplicable, resolución de controversias, medidas procesales y notificaciones. Este contrato será gobernado por y se interpretará según la legislación vigente en la República Argentina. Cualquier conflicto relacionado con este contrato o con el uso que el Usuario haga de este Sitio será resuelto por los tribunales ordinarios competentes según la legislación vigente y aplicable a la relación de consumo existente entre las partes. En caso de que dicha legislación no defina una competencia específica, será competente la justicia nacional ordinaria en asuntos comerciales con asiento en la Córdoba, siendo aplicable esta disposición aunque el Usuario estuviera realmente domiciliado fuera de los límites de la Córdoba o de la República Argentina, por entenderse que este lugar ha sido el lugar de celebración del presente contrato. Salvo que lo contrario haya sido acordado previamente y por escrito firmado entre el Usuario y Green Valley Vivero, todas las notificaciones que se hagan a los usuarios en relación a las presentes Condiciones de Uso se publicarán en el Sitio y tendrán efecto desde la fecha de su publicación. Las notificaciones que el Usuario quiera dirigir a Green Valley Vivero deberán ser dirigidas a Estrada 123, Cordoba Capital – Argentina donde queda constituido el domicilio. </p>
                              <h5>Green Valley Vivero. Todos los derechos reservados 2019. </h5>



                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                  </div>

                  <div class="mt-1 form-group">
                    <label class="bg-light rounded-pill px-4 py-1 text-uppercase font-weight-bold" for="InputFile h6">Opcionalmente podés cargar tu foto de perfil</label>
                    <input class= "form-control-file" type="file" name="fotoperfil" value="" >
                  </div>

                <button type="submit" class="btn btn-dark rounded-pill py-2 btn-block mt-5">  {{ __('Confirmar') }}</button>
              </form>
          </div>
        </div>

      </div>
  </div>


@endsection

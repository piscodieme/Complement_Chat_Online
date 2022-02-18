@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container p-0">

		<!-- <h1 class="h3 mb-3">Messages</h1> -->

		<div class="card">
			<div class="row g-0">
				<div class="col-12 col-lg-5 col-xl-3 border-right">

					<div class="px-1 d-none d-md-block">
						<div class="d-flex align-items-center">

						</div>
					</div>
                    <div class="scroll-discussion p-1" id="others">
                        @foreach ($others as $other )
                            <button   class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool listBtn" onclick="changeUser({{ $other->id }})">
                                @if ( count($other->message) != 0)
                                   <div class="badge appel float-right">{{ count($other->message) }}</div>
                                @endif

                                <div class="d-flex align-items-start">
                                    <img src="/images/narutoBack.jpg" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                                    <div class="flex-grow-1 ml-3">
                                        {{ $other->fullname }}
                                        @if($other->online == 1)
                                            <div class="small"><span class="fas fa-circle chat-online" style="color: orange"> Online</span></div>
                                        @endif
                                    </div>
                                </div>
                            </button>
                        @endforeach
                    </div>
					<hr class="d-block d-lg-none mt-1 mb-0">
				</div>
				<div class="col-12 col-lg-7 col-xl-9">
					<div class="py-2 px-4 border-bottom d-none d-lg-block">
						<div class="d-flex align-items-center py-1">
							<div class="position-relative">
								<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
							</div>
							<div class="flex-grow-1 pl-3" id="utilisateur">

							</div>
							<div>
								<button class="btn mr-1 px-3 appel text-white"><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a></button>
								{{-- <button class="btn btn-lg mr-1 px-3 d-none d-md-inline-block appel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
								<button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button> --}}
							</div>
						</div>
					</div>

					<div class="position-relative">
						<div class="chat-messages p-4" id="chatMessage" scrollDown>




						</div>
					</div>

					<div class="flex-grow-0 py-3 px-4 border-top" id="divBtn">
                        <div id="input-send" class="input-group">
							<input id="input_send" type="text" class="form-control AnnulMarge" placeholder="Type your message">
							<button onclick="send()" id="btn_send" class="btn appel resize text-white" disabled  type="submit">Send</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
@endsection
<script>
  var currentUser = @json($user);
  var userss = @json($others);

  var userToDiscut = 0;
  async function getData(url){
      return await fetch(url).then((res) =>{
          return res.json();
      })
  }
  async function sendMessage(message,url) {
    return await fetch(url,{
        method : 'POST',
        headers : {
            'Content-Type' : 'application/json'
        },
        body : JSON.stringify({
            message : message,
        })
    }).then((res) =>{
          return res.json();
      })
  }
  /***/
  function send(){
      let message = document.getElementById('input_send');
          url = `http://127.0.0.1:8000/api/message/send/${currentUser.id}/${userToDiscut}`;
          sended = sendMessage(message.value,url);
          sended.then((res)=>{
              message.value = '';
          })
  }
  /*
   function de mise en jour de chat
  */
  function discution(user1){
      if(user1 != 0){
        let url = `http://127.0.0.1:8000/api/message/${currentUser.id}/${user1}`;
      let x = getData(url);
        x.then((res)=>{
            let chatMessage = document.getElementById('chatMessage');
            let html = '';
            for(const messagea of res.message){
                if(messagea.sender.id == currentUser.id){
                    let div = `<div class="chat-message-right pb-2">

                                        <div class="flex-shrink-1 bg-light py-2 px-2 mr-3 design shadow">
                                            <!-- <div class="font-weight-bold mb-1">You</div> -->
                                            ${messagea.message}
                                            <div class="m-1 ">
                                                <div class="text-muted small text-nowrap mt-2 reverseHeure">${messagea.created_at.substring(11, 16)}</div>
                                            </div>
                                        </div>
                                    </div>`;
                    html += div;

                }else{
                    let div = `<div class="chat-message-left pb-2">

                                        <div class="flex-shrink-1 py-2 px-2 ml-3 chat-color text-white design shadow">
                                            ${messagea.message}
                                            <div class="m-2">
                                            <div class="text-muted small mt-2 text-white">${messagea.created_at.substring(11, 16)}</div>
                                        </div>
                                        </div>
                                    </div>`;
                    html += div;
                }
            }
            chatMessage.innerHTML = html;

        })
        .catch((err)=>{
            console.log(err);
        })
      }

    }


  function others(user1){
      if(user1 != 0){
        let url = `http://127.0.0.1:8000/api/message/others/${currentUser.id}/${user1}`;
    let x = getData(url);
        x.then((res)=>{
            let othersdiv = document.getElementById('others');
            let html = '';
            for(const other of res.others){
                let nbrMsgNotRead = '';
                if (other.message.length > 0) {
                    nbrMsgNotRead = `<div class="badge appel float-right">${other.message.length}</div>`;
                }
                let online = '';
                if(online == 1){
                    online = `<div class="small"><span class="fas fa-circle chat-online" style="color: orange"> Online</span></div>`;
                }
                html+= `<button class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool" onclick="changeUser(${other.id})">
                            ${nbrMsgNotRead}
                                <div class="d-flex align-items-start">
                                    <img src="/images/narutoBack.jpg" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                                    <div class="flex-grow-1 ml-3">
                                        ${other.fullname}
                                        ${online}
                                    </div>
                                </div>
                            </button>`;
            }
            othersdiv.innerHTML = html;
        })
      }

  }

  function changeUser(user){
    userToDiscut = user;
    let selected = document.getElementById('utilisateur');

    let fullname = userss.find(x => x.id === user ).fullname
    selected.innerHTML = `<strong id="selected">${fullname}</strong>`;
  }
/*
 cette fonction permet de faire une appelle sequentiel des fonctions
 @others()  cette fonction contient la liste des autres utilisateur dans l'application
 @discution() cette function renvoie la  liste de discussion de l'utilsateur selectioné
   ****/
  var intervalID = setInterval(myCallback, 3000,userToDiscut );
    function myCallback(a)
            {
            // Your code here
            // Parameters are purely optional.
            a = userToDiscut;
            others(a);
            discution(a);

            }
</script>

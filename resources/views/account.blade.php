@extends('layouts.head')

@section('content')
<main class="content">
    <div class="container p-0">

		<!-- <h1 class="h3 mb-3">Messages</h1> -->

		<div class="card">
			<div class="row g-0">
				<div class="col-12 col-lg-5 col-xl-3 border-right">

					<div class="px-1 d-none d-md-block">
						<div class="d-flex align-items-center">
							<div class="flex-grow-1">
								<input type="text" class="form-control my-2" placeholder="Search...">
							</div>
							<div class="flex-grow-1">
								<input type="file" class="form-control my-2 chat-color" accept=".jpg, .jpeg, .png">
							</div>
						</div>
					</div>
                    <div class="scroll-discussion p-1">
					<a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="badge appel float-right">5</div>
						<div class="d-flex align-items-start">
							<img src="/images/narutoBack.jpg" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								Naruto Uzimaki
								<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="badge appel float-right">2</div>
						<div class="d-flex align-items-start">
							<img src="/images/sakura.jpg" class="rounded-circle mr-1" alt="William Harris" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								sakura Aruno
								<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="d-flex align-items-start">
							<img src="/images/sasuké.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								Sasuké Uchiwa
								<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="d-flex align-items-start">
							<img src="/images/kakashi.jpg" class="rounded-circle mr-1" alt="Christina Mason" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								Kakashi Sensei
								<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="d-flex align-items-start">
							<img src="/images/gaara.jpg" class="rounded-circle mr-1" alt="Fiona Green" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								Gaara du Dessert
								<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="d-flex align-items-start">
							<img src="/images/itachi.jpg" class="rounded-circle mr-1" alt="Doris Wilder" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								Itachi Uchiwa
								<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="d-flex align-items-start">
							<img src="/images/minato.jpg" class="rounded-circle mr-1" alt="Haley Kennedy" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								Minato Namikazé
								<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="d-flex align-items-start">
							<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Jennifer Chang" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								Jennifer Chang
								<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
							</div>
						</div>
					</a>
                    <a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="d-flex align-items-start">
							<img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle mr-1" alt="Doris Wilder" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								Doris Wilder
								<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="d-flex align-items-start">
							<img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle mr-1" alt="Haley Kennedy" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								Haley Kennedy
								<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item list-group-item-action border-0 shadow bg-light elmt-scrool">
						<div class="d-flex align-items-start">
							<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Jennifer Chang" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								Jennifer Chang
								<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
							</div>
						</div>
					</a>
                </div>
					<hr class="d-block d-lg-none mt-1 mb-0">
				</div>
				<div class="col-12 col-lg-7 col-xl-9">
					<div class="py-2 px-4 border-bottom d-none d-lg-block">
						<div class="d-flex align-items-center py-1">
							<div class="position-relative">
								<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
							</div>
							<div class="flex-grow-1 pl-3">
								<strong>Sharon Lessman</strong>
								<div class="text-muted small"><em>Typing...</em></div>
							</div>
							<div>
								<button class="btn mr-1 px-3 appel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>
								<button class="btn btn-lg mr-1 px-3 d-none d-md-inline-block appel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
								<button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
							</div>
						</div>
					</div>

					<div class="position-relative">
						<div class="chat-messages p-4">

							<div class="chat-message-right pb-4">
								<div class="m-2">
									<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
									<div class="text-muted small text-nowrap mt-2">2:33 am</div>
								</div>
								<div class="flex-shrink-1 bg-light rounded py-2 px-2 mr-3">
									<!-- <div class="font-weight-bold mb-1">You</div> -->
									Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
								</div>
							</div>

							<div class="chat-message-left pb-4">
								<div class="m-2">
									<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
									<div class="text-muted small text-nowrap mt-2">2:34 am</div>
								</div>
								<div class="flex-shrink-1 rounded py-2 px-2 ml-3 chat-color">
									<!-- <div class="font-weight-bold mb-1"><h5>Sharon Lessman</h5></div> -->
									Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
								</div>
							</div>

							
							<div class="chat-message-left pb-4">
								<div class="m-2">
									<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
									<div class="text-muted small text-nowrap">2:39 am</div>
								</div>
								<div class="flex-shrink-1 rounded py-2 px-2 ml-3 chat-color">
									<!-- <div class="font-weight-bold mb-1">Sharon Lessman</div> -->
									Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
								</div>
							</div>

							
						</div>
					</div>

					<div class="flex-grow-0 py-3 px-4 border-top">
						<div id="input-send" class="input-group">
							<input id="input-send" type="text" class="form-control AnnulMarge" placeholder="Type your message">
							<button class="btn appel resize text-white">Send</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
@endsection
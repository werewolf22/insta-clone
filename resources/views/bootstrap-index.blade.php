<x-main-layout>
    <x-slot name="title">Frontend Bootstrap</x-slot>
    <x-slot name="additionalScripts">
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
        defer></script>
    </x-slot>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#learn">What you'll learn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#questions">Questions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#instructors">Instructors</a>
                    </li>
                    
                </ul>
                
            </div>
        </div>
    </nav>


    <section class="text-center bg-dark text-light text-sm-start">
        <div class="container p-5 d-sm-flex justify-content-between align-item-center">
            <div>
                <h1>Become a <span class="text-warning">web developer</span></h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptate minus numquam explicabo aliquam? Optio quo unde tenetur debitis mollitia! Fugit officia quisquam maiores distinctio debitis libero veritatis, assumenda recusandae.</p>
                <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll-modal">Start the enrollment</button>
            </div>
            <img class="img-fluid w-100 d-none d-sm-block" src="/person-laptop.jpg" alt="">
        </div>

    </section>


    <section class="bg-primary text-light py-5">
        <div class="container d-flex flex-wrap justify-content-between align-item-center">
            <h3>Sign up our Newsletter</h3>
            <div class="input-group -c-signup-input-group">
                <input type="text" class="form-control" placeholder="Enter Email">
                <button class="btn btn-dark btn-lg" type="button">Button</button>
            </div>
        </div>
    </section>
    <section class="text-light text-center py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <i class="fa fa-laptop h1 mb-3"></i>
                            <h5 class="card-title mb-3">Virtual</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat laboriosam magnam eveniet debitis quaerat officiis.</p>
                            <a href="#" class="btn btn-primary">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <i class="fa-solid fa-square-person-confined h1 mb-3"></i>
                            <h5 class="card-title mb-3">Hybrid</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat laboriosam magnam eveniet debitis quaerat officiis.</p>
                            <a href="#" class="btn btn-dark">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <i class="fa fa-people-group h1 mb-3"></i>
                            <h5 class="card-title mb-3">In Person</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat laboriosam magnam eveniet debitis quaerat officiis.</p>
                            <a href="#" class="btn btn-primary">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="learn" class="py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <img src="/learning.webp" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <h2>Learn the Fundamentals</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus laborum nisi sapiente, quae dignissimos fuga.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates sint eligendi iure quibusdam, debitis adipisci.</p>
                    <a href="#" class="btn btn-light mt-3"><i class="fa-solid fa-chevron-right"></i> Read more</a>
                </div>
            </div>
        </div>
    </section>
    <section id="" class="bg-dark text-light py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <h2>Learn React</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus laborum nisi sapiente, quae dignissimos fuga.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates sint eligendi iure quibusdam, debitis adipisci.</p>
                    <a href="#" class="btn btn-light mt-3"><i class="fa-solid fa-chevron-right"></i> Read more</a>
                </div>
                <div class="col-md-6">
                    <img src="/learning.webp" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="questions" class="py-5">
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="question-one">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-accordion" aria-expanded="false" aria-controls="question-accordion">
                        What is the popular web tutorial?
                    </button>
                    </h2>
                    <div id="question-accordion" class="accordion-collapse collapse" data-bs-parent="#question-accordion">
                    <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum a vel hic expedita, iusto optio assumenda provident ex error cupiditate quas rerum facere necessitatibus molestiae? Ea fuga cupiditate porro ullam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quam molestiae optio alias provident cum numquam, autem sint error, est totam quaerat nemo itaque.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" >
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two" aria-expanded="false" aria-controls="question-two">
                        What is the popular web tutorial?
                    </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#question-accordion">
                    <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum a vel hic expedita, iusto optio assumenda provident ex error cupiditate quas rerum facere necessitatibus molestiae? Ea fuga cupiditate porro ullam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quam molestiae optio alias provident cum numquam, autem sint error, est totam quaerat nemo itaque.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" >
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three" aria-expanded="false" aria-controls="question-three">
                        What is the popular web tutorial?
                    </button>
                    </h2>
                    <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#question-accordion">
                    <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum a vel hic expedita, iusto optio assumenda provident ex error cupiditate quas rerum facere necessitatibus molestiae? Ea fuga cupiditate porro ullam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quam molestiae optio alias provident cum numquam, autem sint error, est totam quaerat nemo itaque.</div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="instructors" class="bg-primary text-center py-5">
        <div class="container">
            <h2>Our Instructors</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, repellendus.</p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="img-fluid rounded-circle mb-3">
                            <h3 class="card-title mb-3">John Doe</h3>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat laboriosam magnam eveniet debitis quaerat officiis.</p>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-twitter text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-facebook text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-instagram text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-linkedin text-dark"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="img-fluid rounded-circle mb-3">
                            <h3 class="card-title mb-3">John Doe</h3>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat laboriosam magnam eveniet debitis quaerat officiis.</p>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-twitter text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-facebook text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-instagram text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-linkedin text-dark"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="img-fluid rounded-circle mb-3">
                            <h3 class="card-title mb-3">John Doe</h3>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat laboriosam magnam eveniet debitis quaerat officiis.</p>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-twitter text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-facebook text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-instagram text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-linkedin text-dark"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="img-fluid rounded-circle mb-3">
                            <h3 class="card-title mb-3">John Doe</h3>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat laboriosam magnam eveniet debitis quaerat officiis.</p>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-twitter text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-facebook text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-instagram text-dark"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-linkedin text-dark"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item"><span class="fw-bold">Location: </span> An item</li>
                        <li class="list-group-item"><span class="fw-bold">Phone: </span>A second item</li>
                        <li class="list-group-item"><span class="fw-bold">Email: </span>A third item</li>
                        <li class="list-group-item"><span class="fw-bold">socials: </span>A fourth item</li>
                        <li class="list-group-item"><span class="fw-bold">Fax: </span>And a fifth one</li>
                    </ul>
                </div>
                <div class="col-md" id="map"></div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white text-center py-5 position-relative">
        <p>Copyright &copy; {{ date("Y") }} frontend bootcamp</p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="fa-regular fa-circle-up h1"></i>
        </a>
    </footer>
    <!-- enroll Modal -->
    <div class="modal fade" id="enroll-modal" tabindex="-1" aria-labelledby="enroll-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enroll-modal-label">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="container">
                            <div class="mb-3 row">
                                <label for="inputName" class="col-4 col-form-label">Name</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="" class="col-4 form-label">Email</label>
                              <div class="col-8">
                                <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
                                <small id="emailHelpId" class="form-text text-muted">we wont share your email</small>
                              </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Initialize and add the map
        function initMap() {
        // The location of kathmandu
        const kathmandu = { lat: -27.7172, lng: 85.3240 };
        // The map, centered at kathmandu
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: kathmandu,
        });
        // The marker, positioned at kathmandu
        const marker = new google.maps.Marker({
            position: kathmandu,
            map: map,
        });
        }

        window.initMap = initMap;
    </script>
</x-main-layout>
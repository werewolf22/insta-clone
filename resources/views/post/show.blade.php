<x-app-layout>
    <div class="py-5">
        <div class="container px-sm-3 px-lg-5 gy-5">
            <div class="p-4 p-sm-5 bg-white shadow rounded-3">
                <div class="max-w-xl">
                    <section class="row">
                        <div class="col-sm-8">
                            <img src="/storage/{{ $post->image }}" class="w-100"  alt="Post image">
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center">
                                <img src="/storage/{{ $post->user->profile->image }}" alt="Profile Image" class="rounded-circle " style="width: 20%;">
                                <a href="{{ route('profile.show', $post->user->id) }}" class="text-reset text-decoration-none"><h3 class="px-3">{{ $post->user->username }}</h3></a>
                                <a href="#" class="fs-3 text-decoration-none">Follow</a>
                            </div>
                            <hr>
                            <p class="mt-3"><a href="{{ route('profile.show', $post->user->id) }}" class="text-reset text-decoration-none"><span class="fs-3 me-3">{{ $post->user->username }}</span></a> {{ $post->caption }}</p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptates ducimus magni veritatis ut unde, modi quas soluta illo dolore aliquid culpa sunt iusto nam placeat ad quisquam rem dolor maxime blanditiis accusamus inventore mollitia ipsum ipsam! Error tenetur provident nesciunt esse sed architecto? Necessitatibus iste provident, repellendus fuga eligendi adipisci eos ducimus earum! Illum facere pariatur molestias repellendus! Quae a ullam facere. Quasi obcaecati consequatur sunt aut, fugit recusandae sapiente neque, autem iste voluptatum inventore nesciunt molestiae fuga dolore repellat esse eveniet. Id qui corporis obcaecati ab facilis, quod provident est autem labore eveniet unde ullam aut error excepturi!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quibusdam doloremque, modi dolorem eaque officiis ipsum ad porro. Asperiores ipsum sint id eius quas ab sequi facere non et alias. Praesentium quasi aut, quos quam facilis dolores quas explicabo exercitationem ratione impedit voluptatibus, eveniet quisquam fugit ipsum rem, hic nostrum culpa veritatis accusantium. Quos et, aut eos veritatis omnis dignissimos ex deleniti ipsam amet at, obcaecati consequatur consectetur, animi inventore aperiam. Voluptates, eveniet facere blanditiis dolore a illum cum tenetur? Explicabo, eveniet! Molestiae architecto, incidunt quaerat quo nihil vero ab quas dolores in repellat, impedit, distinctio quidem quia enim repudiandae. Amet esse quasi unde iusto aut, eius ut nulla alias perspiciatis tempora totam voluptates accusamus reprehenderit perferendis distinctio dolor voluptatem autem ipsam ad maxime sint. Tenetur quia reprehenderit unde similique, nobis ipsa alias in aut error! Cumque ad delectus, possimus impedit atque vero animi inventore expedita porro! Ducimus obcaecati voluptas sed ullam possimus nobis. Laudantium ullam perferendis quae dignissimos omnis quis repudiandae magnam accusamus, iure hic debitis facilis quos temporibus. Reprehenderit quae ex, laborum aut cumque, eaque aliquid ratione temporibus incidunt repudiandae aperiam vitae perspiciatis voluptatibus ad eos debitis doloribus suscipit vel ea itaque magnam quam. Accusamus optio officia nostrum?
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
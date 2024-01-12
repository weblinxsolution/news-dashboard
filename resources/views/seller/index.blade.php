@extends('seller.layout.main')
@section('seller-templete')
    <!-- content start -->
    <section>
        <div class="content-wrapper wrapper-adjust">
            <div class="wrapper-header">
                <div class="container-fluid d-flex justify-content-between">
                    <h3 class="font-weight-bold ml-lg-3">Website</h3>
                    <div class="my-auto">

                        <!-- modal1 start -->
                        <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal"><i
                                class="fa-solid fa-plane"></i> Turn vacation mode on</button>

                        <!--  View Details -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Turn vacation mode on</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <p class="text-center mb-0">Date</p>
                                                <div class=" mb-3">
                                                    <input type="date" class="form-control"
                                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <p class="text-center mb-0">Time</p>
                                                <div class="mb-3">
                                                    <input type="time" class="form-control"
                                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-auto text-center">
                                            <button type="button" class="btn bg-sidebar"><i class="fa-solid fa-plane"></i>
                                                Turn vacation mode on</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ Route('seller.addWeb') }}" class="btn bg-sidebar"><i class="fa-solid fa-plus"></i> Add
                            Web</a>
                    </div>
                </div>
            </div>
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible mb-0 mx-2 mt-3">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('success') }}
                </div>
            @endif
            <div class="container-fluid">
                <div class="">
                    <div class="card-body">

                        <!-- table 1 -->
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th scope="col">URL</th>
                                    <th scope="col">Categories</th>
                                    <th scope="col">Links</th>
                                    <th scope="col">DR</th>
                                    <th scope="col">DA</th>
                                    <th scope="col">PA</th>
                                    <th scope="col">CF</th>
                                    <th scope="col">TF</th>
                                    <th scope="col">CRedit</th>
                                    <th scope="col">Analytics</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($websites)
                                    @foreach ($websites as $web)
                                        <tr>
                                            <th scope="row">
                                                <a href="{{ $web->url }}" target="_blank"
                                                    class="text-dark">{{ $web->url }}</a>
                                            </th>
                                            <td> <i class="fa-solid fa-tag"></i> {{ $web->categories->count() }}</td>
                                            <td>{{ $web->max_link }} <i class="fa-solid fa-info-circle" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="
                                                @foreach ($web->type_admitteds as $type)
                                                {{ $type->type }} @endforeach

                                                 ">

                                                </i>
                                            </td>
                                            <td>{{ isset($web->traffic[0]->dr) ? $web->traffic[0]->dr : '0' }}</td>
                                            <td>{{ isset($web->traffic[0]->da) ? $web->traffic[0]->da : '0' }}</td>
                                            <td>{{ isset($web->traffic[0]->pa) ? $web->traffic[0]->pa : '0' }}</td>
                                            <td>{{ isset($web->traffic[0]->cf) ? $web->traffic[0]->cf : '0' }}</td>
                                            <td>{{ isset($web->traffic[0]->tf) ? $web->traffic[0]->tf : '0' }}</td>
                                            <td>{{ isset($web->traffic[0]->credit) ? $web->traffic[0]->credit : '0' }}</td>

                                            <td><i class="fa-solid fa-chart-simple"></i></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    {{-- <i data-target="#infoModal" data-toggle="modal"></i> --}}
                                                    <span style="font-size: medium;"
                                                        class="badge  {{ $web->status == 1 ? 'badge-success' : 'badge-warning' }}">{{ $web->status == 1 ? 'Approved' : 'Pending' }}</span>
                                                </div>
                                            </td>
                                            <!-- Button trigger modal 1 -->
                                            <td>
                                                @if ($web->status == 1)
                                                    <button class="btn bg-blue mr-2" data-toggle="modal"
                                                        data-target="#webDetail{{ $web->id }}"><i
                                                            class="fa-solid fa-eye"></i></button>
                                                @endif

                                                <a href="{{ Route('seller.editWeb',$web->id) }}" class="btn bg-success mr-2"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <button data-toggle="modal" data-target="#deleteModal{{ $web->id }}"
                                                    class="btn bg-danger mr-2"><i class="fa-solid fa-trash"></i></button>

                                            </td>

                                            @if ($web->traffic->count() > 0)
                                                <!-- Modal -->
                                                <div class="modal fade" id="webDetail{{ $web->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Website Detail
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        <div><span class="fw-bold">Medium: </span>
                                                                            {{ $web->traffic[0]->medium }}</div>
                                                                        <div><span class="fw-bold">URL: </span><a
                                                                                href="{{ $web->url }}" target="_blank"
                                                                                class="text-black">{{ $web->url }}</a>
                                                                        </div>
                                                                        <div><span class="fw-bold">Type: </span>
                                                                            {{-- @dd($web->categories) --}}
                                                                            @foreach ($web->categories as $catgy_id)
                                                                                @php
                                                                                    $catgy = App\Models\Categories::where('id', $catgy_id->catgy_id)->first();
                                                                                @endphp
                                                                                <span
                                                                                    class="badge badge-success">{{ $catgy->name }}</span>
                                                                            @endforeach
                                                                        </div>
                                                                        <div><span class="fw-bold">Country:
                                                                            </span>{{ $web->country }}</div>
                                                                        <div><span class="fw-bold">Language:
                                                                            </span>{{ $web->traffic[0]->language }}</div>
                                                                        <div><span class="fw-bold">Indicates Sponsored: </span>
                                                                            {{ $web->traffic[0]->sponsorship }}
                                                                        </div>
                                                                        <div><span class="fw-bold">IP:
                                                                            </span>{{ $web->traffic[0]->ipaddress }}</div>
                                                                        <div><span class="fw-bold">Maximum Links:
                                                                            </span>{{ $web->max_link }}</div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="border rounded mb-1">
                                                                            <div class="progress">
                                                                                <div class="progress-bar" role="progressbar"
                                                                                    style="width: 25%" aria-valuenow="25"
                                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- <div class="border rounded p-4">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="progress">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="progress-bar" role="progressbar"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            style="width: 25%" aria-valuenow="25"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div> -->
                                                                    </div>
                                                                </div>
                                                                <div class="mt-4">
                                                                    <label for="" class="mb-0">Accepted
                                                                        Projects</label>
                                                                    <div class="mt-2 border p-2">
                                                                        @foreach ($topic as $tpc)
                                                                            @php
                                                                                $admitted = $web->non_admitteds->where('topic_id', $tpc->id)->first();
                                                                            @endphp

                                                                            @if (!$admitted)
                                                                                <span
                                                                                    class="badge bg-green text-white">{{ $tpc->topic }}</span>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="mt-4">
                                                                    <label for="" class="mb-0">Rejected
                                                                        Projects</label>
                                                                    <div class="mt-2 border p-2">
                                                                        @foreach ($web->non_admitteds as $compare)
                                                                            <span class="badge bg-danger text-white">
                                                                                {{ $compare->topicInfo->topic }}
                                                                            </span>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="modal fade" id="infoModal" tabindex="-1"
                                                aria-labelledby="infoModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Verify your website
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="w-100 text-center">
                                                                <img src="assets/images/verify_website_code.png"
                                                                    class="w-auto mb-3" alt="image">
                                                                <h3 class="mb-3">Code</h3>
                                                                <p class="mb-2">Add this code between the head tags of your
                                                                    website:</p>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Recipient's username" id="copyCode"
                                                                        value="<meta name=&quot;publisuites-verify-code&quot; content=&quot;aHR0cHM6Ly9oZWxsb3dvcmxkLmNvbQ==&quot; />"
                                                                        readonly="" aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon2">
                                                                    <span class="input-group-text ml-2 cursor"
                                                                        onclick="copyCode()" id="basic-addon2"><i
                                                                            class="fa-solid fa-copy"></i></span>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <a href="finish.php"
                                                                        class="btn text-decoration-none bg-sidebar">Verify
                                                                        Now</a>
                                                                    <a href="finish.php"
                                                                        class="btn btn-secondary  text-decoration-none ">Verify
                                                                        later</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $web->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content rounded-0">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                            <button type="button" class="btn" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i class="fa fa-close text-dark"></i>

                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Are you Sure!</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-primary"
                                                                data-dismiss="modal">Close</button>

                                                            <a href="{{ Route('seller.webDeleteDb', $web->id) }}" class="btn bg-danger mr-2"><i class="fa-solid fa-trash"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                        <!-- <p class="text-center">You have not added any website</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function copyCode() {
            // Get the text field
            var copyText = document.getElementById("copyCode");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the Code: " + copyText.value);
        }
    </script>


    <script>
        // Initialize Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script>
@endsection

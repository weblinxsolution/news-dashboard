@extends('admin.layout.main')
@section('admin-templete')
    <!-- content start -->
    <section>
        <div class="content-wrapper wrapper-adjust">
            <div class="wrapper-header pt-3">
                <div class="container-fluid d-flex justify-content-between">
                    <h3 class="font-weight-bold ml-lg-3 mb-0">Website</h3>
                </div>
            </div>
            <div class="px-3">
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="container-fluid">
                <div class="">
                    <div class="card-body">

                        <!-- table 1 -->
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th scope="col">URL</th>
                                    <th scope="col">Categories</th>
                                    <th scope="col">Links</i></th>
                                    <th scope="col">DR</i></th>
                                    <th scope="col">DA</i></th>
                                    <th scope="col">PA</i></th>
                                    <th scope="col">CF</i></th>
                                    <th scope="col">TF</i></th>
                                    <th scope="col">CRedit</i></th>
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
                                                        class="badge {{ $web->status == 1 ? 'badge-success' : 'badge-warning' }}">{{ $web->status == 1 ? 'Approved' : 'Pending' }}</span>
                                                </div>
                                            </td>
                                            <!-- Button trigger modal 1 -->
                                            <td>
                                                @if ($web->traffic->count() > 0)
                                                    <button class="btn bg-blue mr-2" data-toggle="modal"
                                                        data-target="#webDetail{{ $web->id }}"><i
                                                            class="fa-solid fa-eye"></i></button>
                                                @endif


                                                @if ($web->traffic->count() > 0)
                                                    <a href="{{ Route('admin.approvedWebEdit', ['id' => $web->id]) }}"
                                                        class="btn bg-primary mr-2"><i class="fa fa-pen"></i> Edit</a>
                                                @else
                                                    <a href="{{ Route('admin.approvedWeb', ['id' => $web->id]) }}"1
                                                        class="btn bg-success mr-2"><i class="fa fa-check-circle"></i>
                                                        Approved</a>
                                                @endif

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
                                                                            @foreach ($web->categories as $catgy)
                                                                                <span
                                                                                    class="badge badge-success">{{ $catgy->catgyInfo->name }}</span>
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
                                                                                    aria-valuemin="0" aria-valuemax="100"></div>
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

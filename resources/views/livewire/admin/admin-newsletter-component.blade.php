<div>
    <style>
        nav svg {
            height: 20px;
        }


        td {
            color: rgb(209, 209, 209);
        }
    </style>

    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal" style="
    margin-top: 100px;
">
            <div class="w-full p-3">
                <!--Table Card-->
                {{-- <button
                    class="p-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded float-right">
                    <a href="{{ route('admin.addfaq') }}">Add New</a>
                </button> --}}

                <div class="bg-gray-900 border border-gray-800 rounded shadow">
                    <div class="border-b border-gray-800 p-3">
                        <h5 class="font-bold uppercase text-gray-600">People who are subscribed</h5>

                    </div>
                    <div class="p-5">
                        <div class="panel-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            <table class="table table-striped w-full p-5 text-gray-700">
                                <thead>
                                    <tr>
                                        <th class="text-left text-gray-600">Id</th>
                                        <th class="text-left text-gray-600">Email</th>
                                        <th class="text-left text-gray-600">IP</th>
                                        <th class="text-left text-gray-600">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($newsletters as $newsletter)
                                        <tr>
                                            <td>{{$newsletter->id}}</td>
                                            <td>{{$newsletter->email}}</td>
                                            <td>{{$newsletter->ip}}</td>
                                            <td>
                                                @if ($newsletter->status == 0)
                                                    <p style="color: red">Not Verified</p>
                                                @else
                                                <p style="color: green">Verified</p>
                                                @endif
    
                                            </td>
                                        </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                            {{$newsletters->links()}}
                        </div>
                    </div>
                </div>
                <!--/table Card-->
            </div>
        </div>
    </div>
</div>

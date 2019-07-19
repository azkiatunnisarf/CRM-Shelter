file gapenting tp buat nyimpen note

tabel call
@foreach($areas as $area)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $area->nama_area }}</td>
                                        <td>
                                            <a href="{{route('edit.area',$area->area_id)}}" class="btn btn-info btn-sm">
                                                <span class="fa fa-pencil">Edit</span>
                                            </a>
                                            <a href="{{route('delete.area',$area->area_id)}}" class="btn btn-danger btn-sm">
                                                <span class="fa fa-trash">Delete</span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    <!-- {{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }} -->
                                    <!-- <span class="hidden-xs"> {{ Auth::user()->nama_depan }}</span> -->
                                    <!-- {{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }} -->
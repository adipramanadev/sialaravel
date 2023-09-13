<style>
    table, td, tr{
        border: 1px solid black
    }
</style>
<a href="{{route('jurusan.create')}}" >Tambah</a>
<table >
    <tr>
        <td>NO</td>
        <td>Nama Jurusan</td>
        <td>Keterangan</td>
        <td>Aksi</td>
    </tr>
    <tr>
        @forelse ($jurusan as $item)
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->namajurusan }}</td>
            <td>{{ $item->keterangan }}</td>
            <td><a href="{{route('jurusan.destroy', $item->id)}}">Delete</a>
            | <a href="{{route('jurusan.edit', $item->id)}}">Edit</a></td>
    </tr>
        @empty
        <tr
            <td colspan="4">Data Tidak Ada</td>
        @endforelse
    </tr>

</table>

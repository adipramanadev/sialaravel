<style>
    table, td, tr{
        border: 1px solid black
    }
</style>
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
            <td><a href="#">Delete</a>
            | <a href="#">Edit</a></td>
    </tr>
        @empty
        <tr
            <td colspan="4">Data Tidak Ada</td>
        @endforelse
    </tr>

</table>

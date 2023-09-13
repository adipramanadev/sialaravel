<form action="{{route('jurusan.update', $jurusan->id)}}" method="post">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Nama Jurusan</td>
            <td><input type="text" value="{{$jurusan->namajurusan}}" name="namajurusan"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type="text" value="{{$jurusan->keterangan}}" name="keterangan"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>

@props(['listing'])

<tr class="border-gray-300">
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
        <a href="show.html">
            {{$listing['title']}}
        </a>
    </td>
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
        <a href="/listings/{{$listing['id']}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                class="fa-solid fa-pen-to-square"></i>
            Edit</a>
    </td>
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
        <form action="/listings/{{$listing['id']}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
        </form>
    </td>
</tr>
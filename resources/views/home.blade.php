<div>
    <div class="bg-slate-700">
        <div>
            @foreach($market as $market)
            <h1>{{$market->title}}</h1>
            <h1>{{$market->auction_day}}</h1>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Kg</th>
                    <th>Region</th>
                    <th>Auction Day</th>
                </tr>
                <tr>
                    <td>{{$market->RawData->name}}</td>
                    <td>{{$market->RawData->type}}</td>
                    <td>{{$market->RawData->kg}}</td>
                    <td>{{$market->RawData->region}}</td>
                    <td>{{$market->RawData->auction_day}}</td>

                </tr>

            </table>
            @endforeach
            <button><a href="/">back</a></button>
            <style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                }

                th, td {
                    border: 1px solid black;
                    padding: 5px;
                }

                th {
                    background-color: #ccc;
                }

                td {
                    text-align: center;
                }

                button{
                    margin: 10px;
                }

            </style>
        </div>
    </div>
</div>

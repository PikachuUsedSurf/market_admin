<div>
    <div class="bg-slate-700">
        <div>
            @foreach($market as $market)
            <h1>{{$market->title}}</h1>
            <h1>{{$market->updated_at}}</h1>
            @endforeach
            @foreach($raw as $rawdata)

            <table>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Kg</th>
                    <th>Region</th>
                    <th>Auction Day</th>
                </tr>
                <tr>
                    <td>{{$rawdata->name}}</td>
                    <td>{{$rawdata->type}}</td>
                    <td>{{$rawdata->kg}}</td>
                    <td>{{$rawdata->region}}</td>
                    <td>{{$market->auction_day}}</td>

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

<div>
    <div class="bg-slate-700">
        <div>
            <h1>Tittle</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Kg</th>
                    <th>Region</th>
                    <th>Auction Day</th>
                </tr>
                @foreach($market as $market)
                <tr>
                    <td>{{$market->name}}</td>
                    <td>{{$market->type}}</td>
                    <td>{{$market->kg}}</td>
                    <td>{{$market->region}}</td>
                    <td>{{$market->auction_day}}</td>

                </tr>
                @endforeach
            </table>


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

            </style>
        </div>
    </div>
</div>

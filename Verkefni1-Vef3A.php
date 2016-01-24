				Verkefni 1 VEF3A3U
1.	HTTP stendur fyrir Hypertext Transfer Protocol. Það er request-response protocol í client-server modelinu. T.d. væri vafrinn þinn client og tölvan sem hýsir vefsíðuna server. Clientinn sendir HTTP request skilaboð til serversins og serverinn skilar response message til clientsins. Response-ið inniheldur completion status upplýsingar um requestið og gæti líka innihaldið efni sem var beðið um í message body-inu.
Stateless protocol þýðir að þetta sé communications protocol sem höndlar hverja request algjörlega sér og tengist ekkert öðrum requests, þannig að samskiptin eru sér pör af request og response. Stateless protocol þarf ekki serverinn til að geyma session upplýsingar eða status yfir hvern einasta communications partner fyrir margar requests. Dæmi um þetta er að HTTP skilur hvert einasta request fyrir sig og gleymir þeim svo. Á meðan FTP safnar ýmsum upplýsingum um notandann og geymir það á server.

2.	Status codes sýna fram á hvort requestið hafi verið successful eða ekki og ef ekki gefur það upp ákveðin error sem sýna hvers vegna það gekk ekki.
a)	Þessir status codes eru ekki valid response við HTTP/1.0 request
b)	Þessir codes gefa í skyn að allt hafi tekist
c) Þessir codes gefa í skyn að user agent-inn þurfi að taka fleiri skref til þess að uppfylla requestið. User agentinn gæti tekið þau skref án þess að hafa samband við notandann.
    Þeir eru 300 - Multiple choices, 301  -  Moved Permanently, 302  -  Found, 303  -  See Other, 304  -  Not Modified, 305  -  Use Proxy, 306  -  (Unused), og 307  -  Temporary Redirect 
d) Þessir codes eru fyrir skipti þar sem það virðist að það sé eitthvað að hjá clientinum. Það er hægt að nota þá með öllum request methods.
Eitt þekktasta dæmið er 404 Not Found, sem þýðir að serverinn fann ekkert sem passar við Request-URI-ið. Engar upplýsingar fást um hvort þetta sé tímabundið eða permanent. Ef serverinn veit að þetta er ekki til ætti hann að nota 410 Gone.
e) Þetta er notað þegar serverinn veit að það er eitthvað error hjá honum eða ef hann getur ekki framkvæmt beiðnina. 500 Internal Server Error er dæmi um þetta, það er þegar serverinn encounterar eitthvað unexpected condition sem kemur í veg fyrir að hann geti framkvæmt beiðnina.

3.	Af því að vefsíður eru núna farnar að minify-a scripts, þá höndlaði HTTP það ekki svo vel. Nýjung í HTTP/2 er að það leyfir servernum að push-a efni. Einnig breyttu þeir hvernig gögnin eru framed og flutt á milli client og server.

4.	
A)	"Order": [
        {
            "crust-type": "original",
            "toppings": "cheese, pepperoni, garlic?",
            "status": "cooking",
            "customer": "John Smith, 555-5894"
        }
    ]
B)	<order>
        <crust>
            <type>Original</type>
        </crust>
        <toppings>
            <topping>Cheese</topping>
        <topping>Pepperoni</topping>
        <topping>Garlic</topping>
                </toppings>
        <status> 
        <statusIs>Cooking</statusIs>
        </status>
        <customer>
            <name>John Smith</name>
            <number>555-5894</number>
        </customer>
   </order>

5.	
<?php 
[
    "events": [
    {
    "location": "San Francisco, CA",
    "date": "May l",
    "map": "img/map-ca.png"
    },
    {
    "location" : "Austin, TX",
    "date" : "May 15",
    "map": "img/map-tx.png"
    },
    { "location": "New York, NY",
    "date": "May 30",
    "map": "img/map-ny.png"
    }
 ]
 ?>
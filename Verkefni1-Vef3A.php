				Verkefni 1 VEF3A3U
1.	HTTP stendur fyrir Hypertext Transfer Protocol. �a� er request-response protocol � client-server modelinu. T.d. v�ri vafrinn �inn client og t�lvan sem h�sir vefs��una server. Clientinn sendir HTTP request skilabo� til serversins og serverinn skilar response message til clientsins. Response-i� inniheldur completion status uppl�singar um requesti� og g�ti l�ka innihaldi� efni sem var be�i� um � message body-inu.
Stateless protocol ���ir a� �etta s� communications protocol sem h�ndlar hverja request algj�rlega s�r og tengist ekkert ��rum requests, �annig a� samskiptin eru s�r p�r af request og response. Stateless protocol �arf ekki serverinn til a� geyma session uppl�singar e�a status yfir hvern einasta communications partner fyrir margar requests. D�mi um �etta er a� HTTP skilur hvert einasta request fyrir sig og gleymir �eim svo. � me�an FTP safnar �msum uppl�singum um notandann og geymir �a� � server.

2.	Status codes s�na fram � hvort requesti� hafi veri� successful e�a ekki og ef ekki gefur �a� upp �kve�in error sem s�na hvers vegna �a� gekk ekki.
a)	�essir status codes eru ekki valid response vi� HTTP/1.0 request
b)	�essir codes gefa � skyn a� allt hafi tekist
c) �essir codes gefa � skyn a� user agent-inn �urfi a� taka fleiri skref til �ess a� uppfylla requesti�. User agentinn g�ti teki� �au skref �n �ess a� hafa samband vi� notandann.
    �eir eru 300 - Multiple choices, 301  -  Moved Permanently, 302  -  Found, 303  -  See Other, 304  -  Not Modified, 305  -  Use Proxy, 306  -  (Unused), og 307  -  Temporary Redirect 
d) �essir codes eru fyrir skipti �ar sem �a� vir�ist a� �a� s� eitthva� a� hj� clientinum. �a� er h�gt a� nota �� me� �llum request methods.
Eitt �ekktasta d�mi� er 404 Not Found, sem ���ir a� serverinn fann ekkert sem passar vi� Request-URI-i�. Engar uppl�singar f�st um hvort �etta s� t�mabundi� e�a permanent. Ef serverinn veit a� �etta er ekki til �tti hann a� nota 410 Gone.
e) �etta er nota� �egar serverinn veit a� �a� er eitthva� error hj� honum e�a ef hann getur ekki framkv�mt bei�nina. 500 Internal Server Error er d�mi um �etta, �a� er �egar serverinn encounterar eitthva� unexpected condition sem kemur � veg fyrir a� hann geti framkv�mt bei�nina.

3.	Af �v� a� vefs��ur eru n�na farnar a� minify-a scripts, �� h�ndla�i HTTP �a� ekki svo vel. N�jung � HTTP/2 er a� �a� leyfir servernum a� push-a efni. Einnig breyttu �eir hvernig g�gnin eru framed og flutt � milli client og server.

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
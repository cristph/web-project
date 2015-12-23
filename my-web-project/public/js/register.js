/**
 * Created by XXH on 2015/11/13.
 */

function Check(){
    var psw = document.getElementById("password").value;
    if (psw.length<6){
        alert('your password is not strong enough!');
        return false;
    }
    return true;
}

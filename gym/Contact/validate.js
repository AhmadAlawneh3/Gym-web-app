function val(){
    valiname()
    valiphone()

}

addEventListener("")
function valiname()
{
    if(document.getElementById("name").value !='null'|| document.getElementById("name").value !="")
    {
        var name= document.getElementById("name").value;
        if (name.length<3)
        {
            document.getElementById("nameErr").innerHTML= "Error: Name should be 3 character or more.";
        }
        else
        {
            document.getElementById("nameErr").innerHTML= "";
        }
    }
    else
    {
        document.getElementById("nameErr").innerHTML= "Error: Name can not be left blank.";
    }
}
function valiphone(e)
{
    var name= document.getElementById("phone").value;
    if(Number(name))
    {
        if (name.length<10 || name.length>10)
        {
            document.getElementById("phoneErr").innerHTML= "Error: Phone number should be 10 digits."; 
            e.preventDefault();
        }
        else
        {
            document.getElementById("phoneErr").innerHTML= ""; 
        }
    }
    else
    {
        
    }
}



let flag=0;
    function nform()
    {
        let n=document.getElementById("np").value;
        if(n=="")
        {
            document.getElementById("nerror").innerHTML="*Name can't be blank!";
            
        }
        else if(n.length<3)
            {
            document.getElementById("nerror").innerHTML="* Name Must be of at least 3 character";
            
            }
        else if(n.length>2)
        {
        
            if(n.charCodeAt(0)>=65 && n.charCodeAt(0)<=90 && n.charCodeAt(1)>=65 && n.charCodeAt(1)<=90 && n.charCodeAt(2)>=65 && n.charCodeAt(2)<=90 && n.charCodeAt(3)>=65 && n.charCodeAt(3)<=90)
            {
            document.getElementById("nerror").innerHTML="";
            
            }
            else{
            document.getElementById("nerror").innerHTML="* must be capital letter!!";
            
            }       
        }
        else{
            document.getElementById("nerror").innerHTML="* must be alpha charcter";
        }
    }


    function dform(){
        let d=document.getElementById("dp").value;
        if(d=="")
        {
            document.getElementById("derror").innerHTML="*DOB can't be blank!";
            
        }
        else
        {
            document.getElementById("derror").innerHTML="";
        }
        return false;
        
    }


    function cform(){
        let p=document.getElementById("con").value;
        if(p=="")
        {
            document.getElementById("cerror").innerHTML="*Phone can't be blank!";
        }
        else if(p.length<10 || p.length>10)
            {
            document.getElementById("cerror").innerHTML="* phone no Must be of at least 10 character";    
            }
        else if(isNaN(p))
        {
            document.getElementById("cerror").innerHTML="* phone no Must be in digit!!";   
        }        
        else if(p.charCodeAt(0)==32 || p.charCodeAt(1)==32 || p.charCodeAt(2)==32 || p.charCodeAt(3)==32 || p.charCodeAt(4)==32 || p.charCodeAt(5)==32 || p.charCodeAt(6)==32 || p.charCodeAt(7)==32 || p.charCodeAt(8)==32 || p.charCodeAt(9)==32)
        {
            document.getElementById("cerror").innerHTML="* white space is not allowed!!";       
        }
        else{
            document.getElementById("cerror").innerHTML="";   
        }
        return false;
    }


    function eform(){
        let e=document.getElementById("ep").value;
        if(e=="")
            {
                document.getElementById("eerror").innerHTML="*Email can't be blank!";
              
            }
            else
            {
                document.getElementById("eerror").innerHTML="";
            }
            return false;
        }


        function aform(){
            let a=document.getElementById("ap").value;
            if(a=="")
                {
                    document.getElementById("aerror").innerHTML="*Age can't be blank!";
                    alert("DOB can't be blank")   
                }
                else
                {
                    document.getElementById("aerror").innerHTML="";
                }
                return false;
            }


        function gform(){
            let g=document.getElementById("gp").value;
            if(g=="")
                {
                    document.getElementById("gerror").innerHTML="*field can't be blank!";
                }
                else
                {
                    document.getElementById("gerror").innerHTML="";
                }
                return false;
        }


        function adform(){
            let ad=document.getElementById("adp").value;
            if(ad=="")
                {
                    document.getElementById("aderror").innerHTML="*Address can't be blank!"; 
                }
                else
                {
                    document.getElementById("aderror").innerHTML="";
                    // flag=1;
                }
                return false;
        }
    

    function fsubmit()
    {
        if(flag==1)
        {
            return true;
            function slip(){
                location.href="slip.php";
            }
            slip()
        }
        else{
            return false;
        }
    }

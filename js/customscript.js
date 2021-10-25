function CalcularVenta()
{

    var vc = document.f1.vc.value;
    var ut = document.f1.ut.value;
    var i = document.f1.i.value;

    var vv = document.f1.vv.value;
    var gn = document.f1.gn.value;

    gn=(parseFloat(ut)/100)*parseFloat(vc);
    document.f1.gn.value=gn;

    vv=((parseFloat(vc)*(parseFloat(i)/100))+(parseFloat(ut)/100)*parseFloat(vc))+parseFloat(vc);
    document.f1.vv.value=vv;


}

function Convertir()
{
    var a = document.f2.a.value;
    var b = document.f2.b1.value;
    var x = document.f2.b2.value;
    var r = document.f2.c.value;
    r=(parseFloat(a)*parseFloat(x))/parseFloat(b);
   document.f2.c.value=r;
}
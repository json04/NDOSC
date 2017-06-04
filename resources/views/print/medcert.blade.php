<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_002{font-family:Times,serif;font-size:11.3px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Times,serif;font-size:11.3px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_006{font-family:Times,serif;font-size:15.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_006{font-family:Times,serif;font-size:15.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_007{font-family:Times,serif;font-size:11.3px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_007{font-family:Times,serif;font-size:11.3px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_012{font-family:Times,serif;font-size:11.3px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_012{font-family:Times,serif;font-size:11.3px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_010{font-family:"Calibri",serif;font-size:9.4px;color:rgb(142,170,219);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_010{font-family:"Calibri",serif;font-size:9.4px;color:rgb(142,170,219);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_011{font-family:"Calibri",serif;font-size:9.4px;color:rgb(46,83,150);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_011{font-family:"Calibri",serif;font-size:9.4px;color:rgb(46,83,150);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="Medical Certificate_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="../public/css/Request_files/medcert-background.jpg" width=612 height=792></div>
<div style="position:absolute;left:423.72px;top:136.45px" class="cls_002"><span class="cls_002"><strong>DATE:</strong> {{$dates->date}}</span></div>
<div style="position:absolute;left:181.32px;top:201.01px" class="cls_006"><span class="cls_006">M E D I C A L   C E R T I F I C A T E</span></div>
<div style="position:absolute;left:93.60px;top:263.53px" class="cls_002"><span class="cls_002">TO WHOM IT MAY CONCERN:</span></div>
<div style="position:absolute;left:93.60px;top:295.81px" class="container"><span class="cls_002">
This is to certify that <strong>{{$dates->patients->firstname}} {{$dates->patients->middlename}} {{$dates->patients->lastname}}</strong>, {{$dates->patients->age}} years old, {{$dates->patients->sex}}, {{$dates->patients->civilstatus}}, and a
resident of <br>{{$dates->patients->address}}, was examined/treated in this clinic on
@foreach($dateconsultations as $consult){{$consult}}@endforeach<br> with the following findings
</span></div>
<div style="position:absolute;left:93.60px;top:350.85px" class="cls_002"><span class="cls_002">IMPRESSION/DIAGNOSIS:</span></div>
<div style="position:absolute;left:90.00px;top:355.17px" class="cls_007"><span class="cls_007">
@foreach($impressions as $assessment){!!$assessment!!}@endforeach<br> 
</span></div>
<div style="position:absolute;left:93.60px;top:445.49px" class="cls_002"><span class="cls_002">PROCEDURE DONE:</span></div>
<div style="position:absolute;left:127.44px;top:458.73px" class="cls_002"><span class="cls_002">
@foreach($procedures as $procedure){{$procedure}}@endforeach
</span></div>
<div style="position:absolute;left:93.60px;top:486.37px" class="cls_002"><span class="cls_002">RECOMMENDATION:</span></div>
<div style="position:absolute;left:127.44px;top:499.33px" class="cls_002"><span class="cls_002">
@foreach($recommendations as $recommend){{$recommend}}@endforeach
</span></div>
<div style="position:absolute;left:347.52px;top:528.21px" class="cls_002"><span class="cls_002">____________________________</span></div>
<div style="position:absolute;left:347.52px;top:541.53px" class="cls_007"><span class="cls_007">Jeremiah R. Morales MD, FPOA</span></div>
<div style="position:absolute;left:347.52px;top:554.13px" class="cls_002"><span class="cls_002">Lic. N</span><span class="cls_012">o</span><span class="cls_002">. 103836</span></div>
<div style="position:absolute;left:347.52px;top:567.21px" class="cls_002"><span class="cls_002">Attending Physician</span></div>
<div style="position:absolute;left:93.60px;top:620.73px" class="cls_010"><span class="cls_010">-----------------------------------------------------------------------------------------------------------------------------------------</span></div>
<div style="position:absolute;left:93.60px;top:630.25px" class="cls_011"><span class="cls_011">Clinic Address:</span></div>
<div style="position:absolute;left:93.60px;top:650.05px" class="cls_011"><span class="cls_011">Panabo City:  Rm 2-2Q Medical Arts Building, Rivera Medical Center Incorporated, 7302 National Highway, San</span></div>
<div style="position:absolute;left:93.60px;top:662.57px" class="cls_011"><span class="cls_011">Francisco, Panabo City, Davao del Norte; Contact Numbers:  (084) 628 5234; +63933119941</span></div>
<div style="position:absolute;left:93.60px;top:680.49px" class="cls_011"><span class="cls_011">Davao City:   Rm S215, Health Science &amp; Wellness Center,  Metro Davao Medical &amp; Research Center, Km 4, JP</span></div>
<div style="position:absolute;left:93.60px;top:692.01px" class="cls_011"><span class="cls_011">Laurel Ave., Bajada, Davao City; Contact Numbers: (082) 287 7777 (loc 2215); +639227566591</span></div>
</div>

</body>
</html>

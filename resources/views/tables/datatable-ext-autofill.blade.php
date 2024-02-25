@extends('layouts.simple.master')
@section('title', 'Auto fill')

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/datatables.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/datatable-extension.css">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Autofill<span>Datatables</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Tables</li>
	<li class="breadcrumb-item">Extension Data Tables</li>
    <li class="breadcrumb-item active">Auto fill</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Autofill</h5>
               <span>AutoFill gives an Excel like option to a DataTable to click and drag over multiple cells, filling in information over the selected cells and incrementing numbers as needed.</span>
            </div>
            <div class="card-body">
               <div class="dt-ext table-responsive">
                  <table class="display" id="auto-fill">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>$320.800,00</td>
                        </tr>
                        <tr>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>63</td>
                           <td>2011/07/25</td>
                           <td>$170.750,00</td>
                        </tr>
                        <tr>
                           <td>Ashton Cox</td>
                           <td>Junior Technical Author</td>
                           <td>San Francisco</td>
                           <td>66</td>
                           <td>2009/01/12</td>
                           <td>$86.000,00</td>
                        </tr>
                        <tr>
                           <td>Cedric Kelly</td>
                           <td>Senior Javascript Developer</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>2012/03/29</td>
                           <td>$433.060,00</td>
                        </tr>
                        <tr>
                           <td>Airi Satou</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>33</td>
                           <td>2008/11/28</td>
                           <td>$162.700,00</td>
                        </tr>
                        <tr>
                           <td>Brielle Williamson</td>
                           <td>Integration Specialist</td>
                           <td>New York</td>
                           <td>61</td>
                           <td>2012/12/02</td>
                           <td>$372.000,00</td>
                        </tr>
                        <tr>
                           <td>Herrod Chandler</td>
                           <td>Sales Assistant</td>
                           <td>San Francisco</td>
                           <td>59</td>
                           <td>2012/08/06</td>
                           <td>$137.500,00</td>
                        </tr>
                        <tr>
                           <td>Rhona Davidson</td>
                           <td>Integration Specialist</td>
                           <td>Tokyo</td>
                           <td>55</td>
                           <td>2010/10/14</td>
                           <td>$327.900,00</td>
                        </tr>
                        <tr>
                           <td>Colleen Hurst</td>
                           <td>Javascript Developer</td>
                           <td>San Francisco</td>
                           <td>39</td>
                           <td>2009/09/15</td>
                           <td>$205.500,00</td>
                        </tr>
                        <tr>
                           <td>Sonya Frost</td>
                           <td>Software Engineer</td>
                           <td>Edinburgh</td>
                           <td>23</td>
                           <td>2008/12/13</td>
                           <td>$103.600,00</td>
                        </tr>
                        <tr>
                           <td>Jena Gaines</td>
                           <td>Office Manager</td>
                           <td>London</td>
                           <td>30</td>
                           <td>2008/12/19</td>
                           <td>$90.560,00</td>
                        </tr>
                        <tr>
                           <td>Quinn Flynn</td>
                           <td>Support Lead</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>2013/03/03</td>
                           <td>$342.000,00</td>
                        </tr>
                        <tr>
                           <td>Charde Marshall</td>
                           <td>Regional Director</td>
                           <td>San Francisco</td>
                           <td>36</td>
                           <td>2008/10/16</td>
                           <td>$470.600,00</td>
                        </tr>
                        <tr>
                           <td>Haley Kennedy</td>
                           <td>Senior Marketing Designer</td>
                           <td>London</td>
                           <td>43</td>
                           <td>2012/12/18</td>
                           <td>$313.500,00</td>
                        </tr>
                        <tr>
                           <td>Tatyana Fitzpatrick</td>
                           <td>Regional Director</td>
                           <td>London</td>
                           <td>19</td>
                           <td>2010/03/17</td>
                           <td>$385.750,00</td>
                        </tr>
                        <tr>
                           <td>Michael Silva</td>
                           <td>Marketing Designer</td>
                           <td>London</td>
                           <td>66</td>
                           <td>2012/11/27</td>
                           <td>$198.500,00</td>
                        </tr>
                        <tr>
                           <td>Paul Byrd</td>
                           <td>Chief Financial Officer (CFO)</td>
                           <td>New York</td>
                           <td>64</td>
                           <td>2010/06/09</td>
                           <td>$725.000,00</td>
                        </tr>
                        <tr>
                           <td>Gloria Little</td>
                           <td>Systems Administrator</td>
                           <td>New York</td>
                           <td>59</td>
                           <td>2009/04/10</td>
                           <td>$237.500,00</td>
                        </tr>
                        <tr>
                           <td>Bradley Greer</td>
                           <td>Software Engineer</td>
                           <td>London</td>
                           <td>41</td>
                           <td>2012/10/13</td>
                           <td>$132.000,00</td>
                        </tr>
                        <tr>
                           <td>Dai Rios</td>
                           <td>Personnel Lead</td>
                           <td>Edinburgh</td>
                           <td>35</td>
                           <td>2012/09/26</td>
                           <td>$217.500,00</td>
                        </tr>
                        <tr>
                           <td>Jenette Caldwell</td>
                           <td>Development Lead</td>
                           <td>New York</td>
                           <td>30</td>
                           <td>2011/09/03</td>
                           <td>$345.000,00</td>
                        </tr>
                        <tr>
                           <td>Yuri Berry</td>
                           <td>Chief Marketing Officer (CMO)</td>
                           <td>New York</td>
                           <td>40</td>
                           <td>2009/06/25</td>
                           <td>$675.000,00</td>
                        </tr>
                        <tr>
                           <td>Caesar Vance</td>
                           <td>Pre-Sales Support</td>
                           <td>New York</td>
                           <td>21</td>
                           <td>2011/12/12</td>
                           <td>$106.450,00</td>
                        </tr>
                        <tr>
                           <td>Doris Wilder</td>
                           <td>Sales Assistant</td>
                           <td>Sidney</td>
                           <td>23</td>
                           <td>2010/09/20</td>
                           <td>$85.600,00</td>
                        </tr>
                        <tr>
                           <td>Angelica Ramos</td>
                           <td>Chief Executive Officer (CEO)</td>
                           <td>London</td>
                           <td>47</td>
                           <td>2009/10/09</td>
                           <td>$1.200.000,00</td>
                        </tr>
                        <tr>
                           <td>Gavin Joyce</td>
                           <td>Developer</td>
                           <td>Edinburgh</td>
                           <td>42</td>
                           <td>2010/12/22</td>
                           <td>$92.575,00</td>
                        </tr>
                        <tr>
                           <td>Jennifer Chang</td>
                           <td>Regional Director</td>
                           <td>Singapore</td>
                           <td>28</td>
                           <td>2010/11/14</td>
                           <td>$357.650,00</td>
                        </tr>
                        <tr>
                           <td>Brenden Wagner</td>
                           <td>Software Engineer</td>
                           <td>San Francisco</td>
                           <td>28</td>
                           <td>2011/06/07</td>
                           <td>$206.850,00</td>
                        </tr>
                        <tr>
                           <td>Fiona Green</td>
                           <td>Chief Operating Officer (COO)</td>
                           <td>San Francisco</td>
                           <td>48</td>
                           <td>2010/03/11</td>
                           <td>$850.000,00</td>
                        </tr>
                        <tr>
                           <td>Shou Itou</td>
                           <td>Regional Marketing</td>
                           <td>Tokyo</td>
                           <td>20</td>
                           <td>2011/08/14</td>
                           <td>$163.000,00</td>
                        </tr>
                        <tr>
                           <td>Michelle House</td>
                           <td>Integration Specialist</td>
                           <td>Sidney</td>
                           <td>37</td>
                           <td>2011/06/02</td>
                           <td>$95.400,00</td>
                        </tr>
                        <tr>
                           <td>Suki Burks</td>
                           <td>Developer</td>
                           <td>London</td>
                           <td>53</td>
                           <td>2009/10/22</td>
                           <td>$114.500,00</td>
                        </tr>
                        <tr>
                           <td>Prescott Bartlett</td>
                           <td>Technical Author</td>
                           <td>London</td>
                           <td>27</td>
                           <td>2011/05/07</td>
                           <td>$145.000,00</td>
                        </tr>
                        <tr>
                           <td>Gavin Cortez</td>
                           <td>Team Leader</td>
                           <td>San Francisco</td>
                           <td>22</td>
                           <td>2008/10/26</td>
                           <td>$235.500,00</td>
                        </tr>
                        <tr>
                           <td>Martena Mccray</td>
                           <td>Post-Sales support</td>
                           <td>Edinburgh</td>
                           <td>46</td>
                           <td>2011/03/09</td>
                           <td>$324.050,00</td>
                        </tr>
                        <tr>
                           <td>Unity Butler</td>
                           <td>Marketing Designer</td>
                           <td>San Francisco</td>
                           <td>47</td>
                           <td>2009/12/09</td>
                           <td>$85.675,00</td>
                        </tr>
                        <tr>
                           <td>Howard Hatfield</td>
                           <td>Office Manager</td>
                           <td>San Francisco</td>
                           <td>51</td>
                           <td>2008/12/16</td>
                           <td>$164.500,00</td>
                        </tr>
                        <tr>
                           <td>Hope Fuentes</td>
                           <td>Secretary</td>
                           <td>San Francisco</td>
                           <td>41</td>
                           <td>2010/02/12</td>
                           <td>$109.850,00</td>
                        </tr>
                        <tr>
                           <td>Vivian Harrell</td>
                           <td>Financial Controller</td>
                           <td>San Francisco</td>
                           <td>62</td>
                           <td>2009/02/14</td>
                           <td>$452.500,00</td>
                        </tr>
                        <tr>
                           <td>Timothy Mooney</td>
                           <td>Office Manager</td>
                           <td>London</td>
                           <td>37</td>
                           <td>2008/12/11</td>
                           <td>$136.200,00</td>
                        </tr>
                        <tr>
                           <td>Jackson Bradshaw</td>
                           <td>Director</td>
                           <td>New York</td>
                           <td>65</td>
                           <td>2008/09/26</td>
                           <td>$645.750,00</td>
                        </tr>
                        <tr>
                           <td>Olivia Liang</td>
                           <td>Support Engineer</td>
                           <td>Singapore</td>
                           <td>64</td>
                           <td>2011/02/03</td>
                           <td>$234.500,00</td>
                        </tr>
                        <tr>
                           <td>Bruno Nash</td>
                           <td>Software Engineer</td>
                           <td>London</td>
                           <td>38</td>
                           <td>2011/05/03</td>
                           <td>$163.500,00</td>
                        </tr>
                        <tr>
                           <td>Sakura Yamamoto</td>
                           <td>Support Engineer</td>
                           <td>Tokyo</td>
                           <td>37</td>
                           <td>2009/08/19</td>
                           <td>$139.575,00</td>
                        </tr>
                        <tr>
                           <td>Thor Walton</td>
                           <td>Developer</td>
                           <td>New York</td>
                           <td>61</td>
                           <td>2013/08/11</td>
                           <td>$98.540,00</td>
                        </tr>
                        <tr>
                           <td>Finn Camacho</td>
                           <td>Support Engineer</td>
                           <td>San Francisco</td>
                           <td>47</td>
                           <td>2009/07/07</td>
                           <td>$87.500,00</td>
                        </tr>
                        <tr>
                           <td>Serge Baldwin</td>
                           <td>Data Coordinator</td>
                           <td>Singapore</td>
                           <td>64</td>
                           <td>2012/04/09</td>
                           <td>$138.575,00</td>
                        </tr>
                        <tr>
                           <td>Zenaida Frank</td>
                           <td>Software Engineer</td>
                           <td>New York</td>
                           <td>63</td>
                           <td>2010/01/04</td>
                           <td>$125.250,00</td>
                        </tr>
                        <tr>
                           <td>Zorita Serrano</td>
                           <td>Software Engineer</td>
                           <td>San Francisco</td>
                           <td>56</td>
                           <td>2012/06/01</td>
                           <td>$115.000,00</td>
                        </tr>
                        <tr>
                           <td>Jennifer Acosta</td>
                           <td>Junior Javascript Developer</td>
                           <td>Edinburgh</td>
                           <td>43</td>
                           <td>2013/02/01</td>
                           <td>$75.650,00</td>
                        </tr>
                        <tr>
                           <td>Cara Stevens</td>
                           <td>Sales Assistant</td>
                           <td>New York</td>
                           <td>46</td>
                           <td>2011/12/06</td>
                           <td>$145.600,00</td>
                        </tr>
                        <tr>
                           <td>Hermione Butler</td>
                           <td>Regional Director</td>
                           <td>London</td>
                           <td>47</td>
                           <td>2011/03/21</td>
                           <td>$356.250,00</td>
                        </tr>
                        <tr>
                           <td>Lael Greer</td>
                           <td>Systems Administrator</td>
                           <td>London</td>
                           <td>21</td>
                           <td>2009/02/27</td>
                           <td>$103.500,00</td>
                        </tr>
                        <tr>
                           <td>Jonas Alexander</td>
                           <td>Developer</td>
                           <td>San Francisco</td>
                           <td>30</td>
                           <td>2010/07/14</td>
                           <td>$86.500,00</td>
                        </tr>
                        <tr>
                           <td>Shad Decker</td>
                           <td>Regional Director</td>
                           <td>Edinburgh</td>
                           <td>51</td>
                           <td>2008/11/13</td>
                           <td>$183.000,00</td>
                        </tr>
                        <tr>
                           <td>Michael Bruce</td>
                           <td>Javascript Developer</td>
                           <td>Singapore</td>
                           <td>29</td>
                           <td>2011/06/27</td>
                           <td>$183.000,00</td>
                        </tr>
                        <tr>
                           <td>Donna Snider</td>
                           <td>Customer Support</td>
                           <td>New York</td>
                           <td>27</td>
                           <td>2011/01/25</td>
                           <td>$112.000,00</td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>KeyTable integration</h5>
               <span>If you are looking to emulate the UI of spreadsheet programs such as Excel with DataTables, the combination of KeyTable and AutoFill will take you a long way there!</span>
            </div>
            <div class="card-body">
               <div class="dt-ext table-responsive">
                  <table class="display" id="keytable">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>$320.800,00</td>
                        </tr>
                        <tr>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>63</td>
                           <td>2011/07/25</td>
                           <td>$170.750,00</td>
                        </tr>
                        <tr>
                           <td>Ashton Cox</td>
                           <td>Junior Technical Author</td>
                           <td>San Francisco</td>
                           <td>66</td>
                           <td>2009/01/12</td>
                           <td>$86.000,00</td>
                        </tr>
                        <tr>
                           <td>Cedric Kelly</td>
                           <td>Senior Javascript Developer</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>2012/03/29</td>
                           <td>$433.060,00</td>
                        </tr>
                        <tr>
                           <td>Airi Satou</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>33</td>
                           <td>2008/11/28</td>
                           <td>$162.700,00</td>
                        </tr>
                        <tr>
                           <td>Brielle Williamson</td>
                           <td>Integration Specialist</td>
                           <td>New York</td>
                           <td>61</td>
                           <td>2012/12/02</td>
                           <td>$372.000,00</td>
                        </tr>
                        <tr>
                           <td>Herrod Chandler</td>
                           <td>Sales Assistant</td>
                           <td>San Francisco</td>
                           <td>59</td>
                           <td>2012/08/06</td>
                           <td>$137.500,00</td>
                        </tr>
                        <tr>
                           <td>Rhona Davidson</td>
                           <td>Integration Specialist</td>
                           <td>Tokyo</td>
                           <td>55</td>
                           <td>2010/10/14</td>
                           <td>$327.900,00</td>
                        </tr>
                        <tr>
                           <td>Colleen Hurst</td>
                           <td>Javascript Developer</td>
                           <td>San Francisco</td>
                           <td>39</td>
                           <td>2009/09/15</td>
                           <td>$205.500,00</td>
                        </tr>
                        <tr>
                           <td>Sonya Frost</td>
                           <td>Software Engineer</td>
                           <td>Edinburgh</td>
                           <td>23</td>
                           <td>2008/12/13</td>
                           <td>$103.600,00</td>
                        </tr>
                        <tr>
                           <td>Jena Gaines</td>
                           <td>Office Manager</td>
                           <td>London</td>
                           <td>30</td>
                           <td>2008/12/19</td>
                           <td>$90.560,00</td>
                        </tr>
                        <tr>
                           <td>Quinn Flynn</td>
                           <td>Support Lead</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>2013/03/03</td>
                           <td>$342.000,00</td>
                        </tr>
                        <tr>
                           <td>Charde Marshall</td>
                           <td>Regional Director</td>
                           <td>San Francisco</td>
                           <td>36</td>
                           <td>2008/10/16</td>
                           <td>$470.600,00</td>
                        </tr>
                        <tr>
                           <td>Haley Kennedy</td>
                           <td>Senior Marketing Designer</td>
                           <td>London</td>
                           <td>43</td>
                           <td>2012/12/18</td>
                           <td>$313.500,00</td>
                        </tr>
                        <tr>
                           <td>Tatyana Fitzpatrick</td>
                           <td>Regional Director</td>
                           <td>London</td>
                           <td>19</td>
                           <td>2010/03/17</td>
                           <td>$385.750,00</td>
                        </tr>
                        <tr>
                           <td>Michael Silva</td>
                           <td>Marketing Designer</td>
                           <td>London</td>
                           <td>66</td>
                           <td>2012/11/27</td>
                           <td>$198.500,00</td>
                        </tr>
                        <tr>
                           <td>Paul Byrd</td>
                           <td>Chief Financial Officer (CFO)</td>
                           <td>New York</td>
                           <td>64</td>
                           <td>2010/06/09</td>
                           <td>$725.000,00</td>
                        </tr>
                        <tr>
                           <td>Gloria Little</td>
                           <td>Systems Administrator</td>
                           <td>New York</td>
                           <td>59</td>
                           <td>2009/04/10</td>
                           <td>$237.500,00</td>
                        </tr>
                        <tr>
                           <td>Bradley Greer</td>
                           <td>Software Engineer</td>
                           <td>London</td>
                           <td>41</td>
                           <td>2012/10/13</td>
                           <td>$132.000,00</td>
                        </tr>
                        <tr>
                           <td>Dai Rios</td>
                           <td>Personnel Lead</td>
                           <td>Edinburgh</td>
                           <td>35</td>
                           <td>2012/09/26</td>
                           <td>$217.500,00</td>
                        </tr>
                        <tr>
                           <td>Jenette Caldwell</td>
                           <td>Development Lead</td>
                           <td>New York</td>
                           <td>30</td>
                           <td>2011/09/03</td>
                           <td>$345.000,00</td>
                        </tr>
                        <tr>
                           <td>Yuri Berry</td>
                           <td>Chief Marketing Officer (CMO)</td>
                           <td>New York</td>
                           <td>40</td>
                           <td>2009/06/25</td>
                           <td>$675.000,00</td>
                        </tr>
                        <tr>
                           <td>Caesar Vance</td>
                           <td>Pre-Sales Support</td>
                           <td>New York</td>
                           <td>21</td>
                           <td>2011/12/12</td>
                           <td>$106.450,00</td>
                        </tr>
                        <tr>
                           <td>Doris Wilder</td>
                           <td>Sales Assistant</td>
                           <td>Sidney</td>
                           <td>23</td>
                           <td>2010/09/20</td>
                           <td>$85.600,00</td>
                        </tr>
                        <tr>
                           <td>Angelica Ramos</td>
                           <td>Chief Executive Officer (CEO)</td>
                           <td>London</td>
                           <td>47</td>
                           <td>2009/10/09</td>
                           <td>$1.200.000,00</td>
                        </tr>
                        <tr>
                           <td>Gavin Joyce</td>
                           <td>Developer</td>
                           <td>Edinburgh</td>
                           <td>42</td>
                           <td>2010/12/22</td>
                           <td>$92.575,00</td>
                        </tr>
                        <tr>
                           <td>Jennifer Chang</td>
                           <td>Regional Director</td>
                           <td>Singapore</td>
                           <td>28</td>
                           <td>2010/11/14</td>
                           <td>$357.650,00</td>
                        </tr>
                        <tr>
                           <td>Brenden Wagner</td>
                           <td>Software Engineer</td>
                           <td>San Francisco</td>
                           <td>28</td>
                           <td>2011/06/07</td>
                           <td>$206.850,00</td>
                        </tr>
                        <tr>
                           <td>Fiona Green</td>
                           <td>Chief Operating Officer (COO)</td>
                           <td>San Francisco</td>
                           <td>48</td>
                           <td>2010/03/11</td>
                           <td>$850.000,00</td>
                        </tr>
                        <tr>
                           <td>Shou Itou</td>
                           <td>Regional Marketing</td>
                           <td>Tokyo</td>
                           <td>20</td>
                           <td>2011/08/14</td>
                           <td>$163.000,00</td>
                        </tr>
                        <tr>
                           <td>Michelle House</td>
                           <td>Integration Specialist</td>
                           <td>Sidney</td>
                           <td>37</td>
                           <td>2011/06/02</td>
                           <td>$95.400,00</td>
                        </tr>
                        <tr>
                           <td>Suki Burks</td>
                           <td>Developer</td>
                           <td>London</td>
                           <td>53</td>
                           <td>2009/10/22</td>
                           <td>$114.500,00</td>
                        </tr>
                        <tr>
                           <td>Prescott Bartlett</td>
                           <td>Technical Author</td>
                           <td>London</td>
                           <td>27</td>
                           <td>2011/05/07</td>
                           <td>$145.000,00</td>
                        </tr>
                        <tr>
                           <td>Gavin Cortez</td>
                           <td>Team Leader</td>
                           <td>San Francisco</td>
                           <td>22</td>
                           <td>2008/10/26</td>
                           <td>$235.500,00</td>
                        </tr>
                        <tr>
                           <td>Martena Mccray</td>
                           <td>Post-Sales support</td>
                           <td>Edinburgh</td>
                           <td>46</td>
                           <td>2011/03/09</td>
                           <td>$324.050,00</td>
                        </tr>
                        <tr>
                           <td>Unity Butler</td>
                           <td>Marketing Designer</td>
                           <td>San Francisco</td>
                           <td>47</td>
                           <td>2009/12/09</td>
                           <td>$85.675,00</td>
                        </tr>
                        <tr>
                           <td>Howard Hatfield</td>
                           <td>Office Manager</td>
                           <td>San Francisco</td>
                           <td>51</td>
                           <td>2008/12/16</td>
                           <td>$164.500,00</td>
                        </tr>
                        <tr>
                           <td>Hope Fuentes</td>
                           <td>Secretary</td>
                           <td>San Francisco</td>
                           <td>41</td>
                           <td>2010/02/12</td>
                           <td>$109.850,00</td>
                        </tr>
                        <tr>
                           <td>Vivian Harrell</td>
                           <td>Financial Controller</td>
                           <td>San Francisco</td>
                           <td>62</td>
                           <td>2009/02/14</td>
                           <td>$452.500,00</td>
                        </tr>
                        <tr>
                           <td>Timothy Mooney</td>
                           <td>Office Manager</td>
                           <td>London</td>
                           <td>37</td>
                           <td>2008/12/11</td>
                           <td>$136.200,00</td>
                        </tr>
                        <tr>
                           <td>Jackson Bradshaw</td>
                           <td>Director</td>
                           <td>New York</td>
                           <td>65</td>
                           <td>2008/09/26</td>
                           <td>$645.750,00</td>
                        </tr>
                        <tr>
                           <td>Olivia Liang</td>
                           <td>Support Engineer</td>
                           <td>Singapore</td>
                           <td>64</td>
                           <td>2011/02/03</td>
                           <td>$234.500,00</td>
                        </tr>
                        <tr>
                           <td>Bruno Nash</td>
                           <td>Software Engineer</td>
                           <td>London</td>
                           <td>38</td>
                           <td>2011/05/03</td>
                           <td>$163.500,00</td>
                        </tr>
                        <tr>
                           <td>Sakura Yamamoto</td>
                           <td>Support Engineer</td>
                           <td>Tokyo</td>
                           <td>37</td>
                           <td>2009/08/19</td>
                           <td>$139.575,00</td>
                        </tr>
                        <tr>
                           <td>Thor Walton</td>
                           <td>Developer</td>
                           <td>New York</td>
                           <td>61</td>
                           <td>2013/08/11</td>
                           <td>$98.540,00</td>
                        </tr>
                        <tr>
                           <td>Finn Camacho</td>
                           <td>Support Engineer</td>
                           <td>San Francisco</td>
                           <td>47</td>
                           <td>2009/07/07</td>
                           <td>$87.500,00</td>
                        </tr>
                        <tr>
                           <td>Serge Baldwin</td>
                           <td>Data Coordinator</td>
                           <td>Singapore</td>
                           <td>64</td>
                           <td>2012/04/09</td>
                           <td>$138.575,00</td>
                        </tr>
                        <tr>
                           <td>Zenaida Frank</td>
                           <td>Software Engineer</td>
                           <td>New York</td>
                           <td>63</td>
                           <td>2010/01/04</td>
                           <td>$125.250,00</td>
                        </tr>
                        <tr>
                           <td>Zorita Serrano</td>
                           <td>Software Engineer</td>
                           <td>San Francisco</td>
                           <td>56</td>
                           <td>2012/06/01</td>
                           <td>$115.000,00</td>
                        </tr>
                        <tr>
                           <td>Jennifer Acosta</td>
                           <td>Junior Javascript Developer</td>
                           <td>Edinburgh</td>
                           <td>43</td>
                           <td>2013/02/01</td>
                           <td>$75.650,00</td>
                        </tr>
                        <tr>
                           <td>Cara Stevens</td>
                           <td>Sales Assistant</td>
                           <td>New York</td>
                           <td>46</td>
                           <td>2011/12/06</td>
                           <td>$145.600,00</td>
                        </tr>
                        <tr>
                           <td>Hermione Butler</td>
                           <td>Regional Director</td>
                           <td>London</td>
                           <td>47</td>
                           <td>2011/03/21</td>
                           <td>$356.250,00</td>
                        </tr>
                        <tr>
                           <td>Lael Greer</td>
                           <td>Systems Administrator</td>
                           <td>London</td>
                           <td>21</td>
                           <td>2009/02/27</td>
                           <td>$103.500,00</td>
                        </tr>
                        <tr>
                           <td>Jonas Alexander</td>
                           <td>Developer</td>
                           <td>San Francisco</td>
                           <td>30</td>
                           <td>2010/07/14</td>
                           <td>$86.500,00</td>
                        </tr>
                        <tr>
                           <td>Shad Decker</td>
                           <td>Regional Director</td>
                           <td>Edinburgh</td>
                           <td>51</td>
                           <td>2008/11/13</td>
                           <td>$183.000,00</td>
                        </tr>
                        <tr>
                           <td>Michael Bruce</td>
                           <td>Javascript Developer</td>
                           <td>Singapore</td>
                           <td>29</td>
                           <td>2011/06/27</td>
                           <td>$183.000,00</td>
                        </tr>
                        <tr>
                           <td>Donna Snider</td>
                           <td>Customer Support</td>
                           <td>New York</td>
                           <td>27</td>
                           <td>2011/01/25</td>
                           <td>$112.000,00</td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Column selector</h5>
               <span>AutoFill provides the ability to determine what columns it should be enabled upon through the autoFill.columns option. This will accept any value allowed by the column-selector data type, such as an array of column indexes, class names, or as shown in this case a jQuery selector.</span>
            </div>
            <div class="card-body">
               <div class="dt-ext table-responsive">
                  <table class="display" id="column-selector">
                     <thead>
                        <tr>
                           <th></th>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Salary</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td></td>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>$320,800</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>63</td>
                           <td>$170,750</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Ashton Cox</td>
                           <td>Junior Technical Author</td>
                           <td>San Francisco</td>
                           <td>66</td>
                           <td>$86,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Cedric Kelly</td>
                           <td>Senior Javascript Developer</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>$433,060</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Airi Satou</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>33</td>
                           <td>$162,700</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Brielle Williamson</td>
                           <td>Integration Specialist</td>
                           <td>New York</td>
                           <td>61</td>
                           <td>$372,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Herrod Chandler</td>
                           <td>Sales Assistant</td>
                           <td>San Francisco</td>
                           <td>59</td>
                           <td>$137,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Rhona Davidson</td>
                           <td>Integration Specialist</td>
                           <td>Tokyo</td>
                           <td>55</td>
                           <td>$327,900</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Colleen Hurst</td>
                           <td>Javascript Developer</td>
                           <td>San Francisco</td>
                           <td>39</td>
                           <td>$205,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Sonya Frost</td>
                           <td>Software Engineer</td>
                           <td>Edinburgh</td>
                           <td>23</td>
                           <td>$103,600</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Jena Gaines</td>
                           <td>Office Manager</td>
                           <td>London</td>
                           <td>30</td>
                           <td>$90,560</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Quinn Flynn</td>
                           <td>Support Lead</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>$342,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Charde Marshall</td>
                           <td>Regional Director</td>
                           <td>San Francisco</td>
                           <td>36</td>
                           <td>$470,600</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Haley Kennedy</td>
                           <td>Senior Marketing Designer</td>
                           <td>London</td>
                           <td>43</td>
                           <td>$313,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Tatyana Fitzpatrick</td>
                           <td>Regional Director</td>
                           <td>London</td>
                           <td>19</td>
                           <td>$385,750</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Michael Silva</td>
                           <td>Marketing Designer</td>
                           <td>London</td>
                           <td>66</td>
                           <td>$198,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Paul Byrd</td>
                           <td>Chief Financial Officer (CFO)</td>
                           <td>New York</td>
                           <td>64</td>
                           <td>$725,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Gloria Little</td>
                           <td>Systems Administrator</td>
                           <td>New York</td>
                           <td>59</td>
                           <td>$237,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Bradley Greer</td>
                           <td>Software Engineer</td>
                           <td>London</td>
                           <td>41</td>
                           <td>$132,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Dai Rios</td>
                           <td>Personnel Lead</td>
                           <td>Edinburgh</td>
                           <td>35</td>
                           <td>$217,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Jenette Caldwell</td>
                           <td>Development Lead</td>
                           <td>New York</td>
                           <td>30</td>
                           <td>$345,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Yuri Berry</td>
                           <td>Chief Marketing Officer (CMO)</td>
                           <td>New York</td>
                           <td>40</td>
                           <td>$675,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Caesar Vance</td>
                           <td>Pre-Sales Support</td>
                           <td>New York</td>
                           <td>21</td>
                           <td>$106,450</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Doris Wilder</td>
                           <td>Sales Assistant</td>
                           <td>Sidney</td>
                           <td>23</td>
                           <td>$85,600</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Angelica Ramos</td>
                           <td>Chief Executive Officer (CEO)</td>
                           <td>London</td>
                           <td>47</td>
                           <td>$1,200,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Gavin Joyce</td>
                           <td>Developer</td>
                           <td>Edinburgh</td>
                           <td>42</td>
                           <td>$92,575</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Jennifer Chang</td>
                           <td>Regional Director</td>
                           <td>Singapore</td>
                           <td>28</td>
                           <td>$357,650</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Brenden Wagner</td>
                           <td>Software Engineer</td>
                           <td>San Francisco</td>
                           <td>28</td>
                           <td>$206,850</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Fiona Green</td>
                           <td>Chief Operating Officer (COO)</td>
                           <td>San Francisco</td>
                           <td>48</td>
                           <td>$850,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Shou Itou</td>
                           <td>Regional Marketing</td>
                           <td>Tokyo</td>
                           <td>20</td>
                           <td>$163,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Michelle House</td>
                           <td>Integration Specialist</td>
                           <td>Sidney</td>
                           <td>37</td>
                           <td>$95,400</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Suki Burks</td>
                           <td>Developer</td>
                           <td>London</td>
                           <td>53</td>
                           <td>$114,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Prescott Bartlett</td>
                           <td>Technical Author</td>
                           <td>London</td>
                           <td>27</td>
                           <td>$145,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Gavin Cortez</td>
                           <td>Team Leader</td>
                           <td>San Francisco</td>
                           <td>22</td>
                           <td>$235,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Martena Mccray</td>
                           <td>Post-Sales support</td>
                           <td>Edinburgh</td>
                           <td>46</td>
                           <td>$324,050</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Unity Butler</td>
                           <td>Marketing Designer</td>
                           <td>San Francisco</td>
                           <td>47</td>
                           <td>$85,675</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Howard Hatfield</td>
                           <td>Office Manager</td>
                           <td>San Francisco</td>
                           <td>51</td>
                           <td>$164,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Hope Fuentes</td>
                           <td>Secretary</td>
                           <td>San Francisco</td>
                           <td>41</td>
                           <td>$109,850</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Vivian Harrell</td>
                           <td>Financial Controller</td>
                           <td>San Francisco</td>
                           <td>62</td>
                           <td>$452,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Timothy Mooney</td>
                           <td>Office Manager</td>
                           <td>London</td>
                           <td>37</td>
                           <td>$136,200</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Jackson Bradshaw</td>
                           <td>Director</td>
                           <td>New York</td>
                           <td>65</td>
                           <td>$645,750</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Olivia Liang</td>
                           <td>Support Engineer</td>
                           <td>Singapore</td>
                           <td>64</td>
                           <td>$234,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Bruno Nash</td>
                           <td>Software Engineer</td>
                           <td>London</td>
                           <td>38</td>
                           <td>$163,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Sakura Yamamoto</td>
                           <td>Support Engineer</td>
                           <td>Tokyo</td>
                           <td>37</td>
                           <td>$139,575</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Thor Walton</td>
                           <td>Developer</td>
                           <td>New York</td>
                           <td>61</td>
                           <td>$98,540</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Finn Camacho</td>
                           <td>Support Engineer</td>
                           <td>San Francisco</td>
                           <td>47</td>
                           <td>$87,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Serge Baldwin</td>
                           <td>Data Coordinator</td>
                           <td>Singapore</td>
                           <td>64</td>
                           <td>$138,575</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Zenaida Frank</td>
                           <td>Software Engineer</td>
                           <td>New York</td>
                           <td>63</td>
                           <td>$125,250</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Zorita Serrano</td>
                           <td>Software Engineer</td>
                           <td>San Francisco</td>
                           <td>56</td>
                           <td>$115,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Jennifer Acosta</td>
                           <td>Junior Javascript Developer</td>
                           <td>Edinburgh</td>
                           <td>43</td>
                           <td>$75,650</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Cara Stevens</td>
                           <td>Sales Assistant</td>
                           <td>New York</td>
                           <td>46</td>
                           <td>$145,600</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Hermione Butler</td>
                           <td>Regional Director</td>
                           <td>London</td>
                           <td>47</td>
                           <td>$356,250</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Lael Greer</td>
                           <td>Systems Administrator</td>
                           <td>London</td>
                           <td>21</td>
                           <td>$103,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Jonas Alexander</td>
                           <td>Developer</td>
                           <td>San Francisco</td>
                           <td>30</td>
                           <td>$86,500</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Shad Decker</td>
                           <td>Regional Director</td>
                           <td>Edinburgh</td>
                           <td>51</td>
                           <td>$183,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Michael Bruce</td>
                           <td>Javascript Developer</td>
                           <td>Singapore</td>
                           <td>29</td>
                           <td>$183,000</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td>Donna Snider</td>
                           <td>Customer Support</td>
                           <td>New York</td>
                           <td>27</td>
                           <td>$112,000</td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th></th>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Salary</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Scrolling DataTable</h5>
               <span>AWhen dragging an AutoFill handle, the table (if DataTables scrolling is enabled) or the window will be automatically scrolled, as you approach the edge of the scrolling component. The example below shows the effect with DataTables scrolling (and also window if needed).</span>
            </div>
            <div class="card-body">
               <div class="dt-ext table-responsive">
                  <table class="display" id="scrolling-datatable">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>$320.800,00</td>
                        </tr>
                        <tr>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>63</td>
                           <td>2011/07/25</td>
                           <td>$170.750,00</td>
                        </tr>
                        <tr>
                           <td>Ashton Cox</td>
                           <td>Junior Technical Author</td>
                           <td>San Francisco</td>
                           <td>66</td>
                           <td>2009/01/12</td>
                           <td>$86.000,00</td>
                        </tr>
                        <tr>
                           <td>Cedric Kelly</td>
                           <td>Senior Javascript Developer</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>2012/03/29</td>
                           <td>$433.060,00</td>
                        </tr>
                        <tr>
                           <td>Airi Satou</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>33</td>
                           <td>2008/11/28</td>
                           <td>$162.700,00</td>
                        </tr>
                        <tr>
                           <td>Brielle Williamson</td>
                           <td>Integration Specialist</td>
                           <td>New York</td>
                           <td>61</td>
                           <td>2012/12/02</td>
                           <td>$372.000,00</td>
                        </tr>
                        <tr>
                           <td>Herrod Chandler</td>
                           <td>Sales Assistant</td>
                           <td>San Francisco</td>
                           <td>59</td>
                           <td>2012/08/06</td>
                           <td>$137.500,00</td>
                        </tr>
                        <tr>
                           <td>Rhona Davidson</td>
                           <td>Integration Specialist</td>
                           <td>Tokyo</td>
                           <td>55</td>
                           <td>2010/10/14</td>
                           <td>$327.900,00</td>
                        </tr>
                        <tr>
                           <td>Colleen Hurst</td>
                           <td>Javascript Developer</td>
                           <td>San Francisco</td>
                           <td>39</td>
                           <td>2009/09/15</td>
                           <td>$205.500,00</td>
                        </tr>
                        <tr>
                           <td>Sonya Frost</td>
                           <td>Software Engineer</td>
                           <td>Edinburgh</td>
                           <td>23</td>
                           <td>2008/12/13</td>
                           <td>$103.600,00</td>
                        </tr>
                        <tr>
                           <td>Jena Gaines</td>
                           <td>Office Manager</td>
                           <td>London</td>
                           <td>30</td>
                           <td>2008/12/19</td>
                           <td>$90.560,00</td>
                        </tr>
                        <tr>
                           <td>Quinn Flynn</td>
                           <td>Support Lead</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>2013/03/03</td>
                           <td>$342.000,00</td>
                        </tr>
                        <tr>
                           <td>Charde Marshall</td>
                           <td>Regional Director</td>
                           <td>San Francisco</td>
                           <td>36</td>
                           <td>2008/10/16</td>
                           <td>$470.600,00</td>
                        </tr>
                        <tr>
                           <td>Haley Kennedy</td>
                           <td>Senior Marketing Designer</td>
                           <td>London</td>
                           <td>43</td>
                           <td>2012/12/18</td>
                           <td>$313.500,00</td>
                        </tr>
                        <tr>
                           <td>Tatyana Fitzpatrick</td>
                           <td>Regional Director</td>
                           <td>London</td>
                           <td>19</td>
                           <td>2010/03/17</td>
                           <td>$385.750,00</td>
                        </tr>
                        <tr>
                           <td>Michael Silva</td>
                           <td>Marketing Designer</td>
                           <td>London</td>
                           <td>66</td>
                           <td>2012/11/27</td>
                           <td>$198.500,00</td>
                        </tr>
                        <tr>
                           <td>Paul Byrd</td>
                           <td>Chief Financial Officer (CFO)</td>
                           <td>New York</td>
                           <td>64</td>
                           <td>2010/06/09</td>
                           <td>$725.000,00</td>
                        </tr>
                        <tr>
                           <td>Gloria Little</td>
                           <td>Systems Administrator</td>
                           <td>New York</td>
                           <td>59</td>
                           <td>2009/04/10</td>
                           <td>$237.500,00</td>
                        </tr>
                        <tr>
                           <td>Bradley Greer</td>
                           <td>Software Engineer</td>
                           <td>London</td>
                           <td>41</td>
                           <td>2012/10/13</td>
                           <td>$132.000,00</td>
                        </tr>
                        <tr>
                           <td>Dai Rios</td>
                           <td>Personnel Lead</td>
                           <td>Edinburgh</td>
                           <td>35</td>
                           <td>2012/09/26</td>
                           <td>$217.500,00</td>
                        </tr>
                        <tr>
                           <td>Jenette Caldwell</td>
                           <td>Development Lead</td>
                           <td>New York</td>
                           <td>30</td>
                           <td>2011/09/03</td>
                           <td>$345.000,00</td>
                        </tr>
                        <tr>
                           <td>Yuri Berry</td>
                           <td>Chief Marketing Officer (CMO)</td>
                           <td>New York</td>
                           <td>40</td>
                           <td>2009/06/25</td>
                           <td>$675.000,00</td>
                        </tr>
                        <tr>
                           <td>Caesar Vance</td>
                           <td>Pre-Sales Support</td>
                           <td>New York</td>
                           <td>21</td>
                           <td>2011/12/12</td>
                           <td>$106.450,00</td>
                        </tr>
                        <tr>
                           <td>Doris Wilder</td>
                           <td>Sales Assistant</td>
                           <td>Sidney</td>
                           <td>23</td>
                           <td>2010/09/20</td>
                           <td>$85.600,00</td>
                        </tr>
                        <tr>
                           <td>Angelica Ramos</td>
                           <td>Chief Executive Officer (CEO)</td>
                           <td>London</td>
                           <td>47</td>
                           <td>2009/10/09</td>
                           <td>$1.200.000,00</td>
                        </tr>
                        <tr>
                           <td>Gavin Joyce</td>
                           <td>Developer</td>
                           <td>Edinburgh</td>
                           <td>42</td>
                           <td>2010/12/22</td>
                           <td>$92.575,00</td>
                        </tr>
                        <tr>
                           <td>Jennifer Chang</td>
                           <td>Regional Director</td>
                           <td>Singapore</td>
                           <td>28</td>
                           <td>2010/11/14</td>
                           <td>$357.650,00</td>
                        </tr>
                        <tr>
                           <td>Brenden Wagner</td>
                           <td>Software Engineer</td>
                           <td>San Francisco</td>
                           <td>28</td>
                           <td>2011/06/07</td>
                           <td>$206.850,00</td>
                        </tr>
                        <tr>
                           <td>Fiona Green</td>
                           <td>Chief Operating Officer (COO)</td>
                           <td>San Francisco</td>
                           <td>48</td>
                           <td>2010/03/11</td>
                           <td>$850.000,00</td>
                        </tr>
                        <tr>
                           <td>Shou Itou</td>
                           <td>Regional Marketing</td>
                           <td>Tokyo</td>
                           <td>20</td>
                           <td>2011/08/14</td>
                           <td>$163.000,00</td>
                        </tr>
                        <tr>
                           <td>Michelle House</td>
                           <td>Integration Specialist</td>
                           <td>Sidney</td>
                           <td>37</td>
                           <td>2011/06/02</td>
                           <td>$95.400,00</td>
                        </tr>
                        <tr>
                           <td>Suki Burks</td>
                           <td>Developer</td>
                           <td>London</td>
                           <td>53</td>
                           <td>2009/10/22</td>
                           <td>$114.500,00</td>
                        </tr>
                        <tr>
                           <td>Prescott Bartlett</td>
                           <td>Technical Author</td>
                           <td>London</td>
                           <td>27</td>
                           <td>2011/05/07</td>
                           <td>$145.000,00</td>
                        </tr>
                        <tr>
                           <td>Gavin Cortez</td>
                           <td>Team Leader</td>
                           <td>San Francisco</td>
                           <td>22</td>
                           <td>2008/10/26</td>
                           <td>$235.500,00</td>
                        </tr>
                        <tr>
                           <td>Martena Mccray</td>
                           <td>Post-Sales support</td>
                           <td>Edinburgh</td>
                           <td>46</td>
                           <td>2011/03/09</td>
                           <td>$324.050,00</td>
                        </tr>
                        <tr>
                           <td>Unity Butler</td>
                           <td>Marketing Designer</td>
                           <td>San Francisco</td>
                           <td>47</td>
                           <td>2009/12/09</td>
                           <td>$85.675,00</td>
                        </tr>
                        <tr>
                           <td>Howard Hatfield</td>
                           <td>Office Manager</td>
                           <td>San Francisco</td>
                           <td>51</td>
                           <td>2008/12/16</td>
                           <td>$164.500,00</td>
                        </tr>
                        <tr>
                           <td>Hope Fuentes</td>
                           <td>Secretary</td>
                           <td>San Francisco</td>
                           <td>41</td>
                           <td>2010/02/12</td>
                           <td>$109.850,00</td>
                        </tr>
                        <tr>
                           <td>Vivian Harrell</td>
                           <td>Financial Controller</td>
                           <td>San Francisco</td>
                           <td>62</td>
                           <td>2009/02/14</td>
                           <td>$452.500,00</td>
                        </tr>
                        <tr>
                           <td>Timothy Mooney</td>
                           <td>Office Manager</td>
                           <td>London</td>
                           <td>37</td>
                           <td>2008/12/11</td>
                           <td>$136.200,00</td>
                        </tr>
                        <tr>
                           <td>Jackson Bradshaw</td>
                           <td>Director</td>
                           <td>New York</td>
                           <td>65</td>
                           <td>2008/09/26</td>
                           <td>$645.750,00</td>
                        </tr>
                        <tr>
                           <td>Olivia Liang</td>
                           <td>Support Engineer</td>
                           <td>Singapore</td>
                           <td>64</td>
                           <td>2011/02/03</td>
                           <td>$234.500,00</td>
                        </tr>
                        <tr>
                           <td>Bruno Nash</td>
                           <td>Software Engineer</td>
                           <td>London</td>
                           <td>38</td>
                           <td>2011/05/03</td>
                           <td>$163.500,00</td>
                        </tr>
                        <tr>
                           <td>Sakura Yamamoto</td>
                           <td>Support Engineer</td>
                           <td>Tokyo</td>
                           <td>37</td>
                           <td>2009/08/19</td>
                           <td>$139.575,00</td>
                        </tr>
                        <tr>
                           <td>Thor Walton</td>
                           <td>Developer</td>
                           <td>New York</td>
                           <td>61</td>
                           <td>2013/08/11</td>
                           <td>$98.540,00</td>
                        </tr>
                        <tr>
                           <td>Finn Camacho</td>
                           <td>Support Engineer</td>
                           <td>San Francisco</td>
                           <td>47</td>
                           <td>2009/07/07</td>
                           <td>$87.500,00</td>
                        </tr>
                        <tr>
                           <td>Serge Baldwin</td>
                           <td>Data Coordinator</td>
                           <td>Singapore</td>
                           <td>64</td>
                           <td>2012/04/09</td>
                           <td>$138.575,00</td>
                        </tr>
                        <tr>
                           <td>Zenaida Frank</td>
                           <td>Software Engineer</td>
                           <td>New York</td>
                           <td>63</td>
                           <td>2010/01/04</td>
                           <td>$125.250,00</td>
                        </tr>
                        <tr>
                           <td>Zorita Serrano</td>
                           <td>Software Engineer</td>
                           <td>San Francisco</td>
                           <td>56</td>
                           <td>2012/06/01</td>
                           <td>$115.000,00</td>
                        </tr>
                        <tr>
                           <td>Jennifer Acosta</td>
                           <td>Junior Javascript Developer</td>
                           <td>Edinburgh</td>
                           <td>43</td>
                           <td>2013/02/01</td>
                           <td>$75.650,00</td>
                        </tr>
                        <tr>
                           <td>Cara Stevens</td>
                           <td>Sales Assistant</td>
                           <td>New York</td>
                           <td>46</td>
                           <td>2011/12/06</td>
                           <td>$145.600,00</td>
                        </tr>
                        <tr>
                           <td>Hermione Butler</td>
                           <td>Regional Director</td>
                           <td>London</td>
                           <td>47</td>
                           <td>2011/03/21</td>
                           <td>$356.250,00</td>
                        </tr>
                        <tr>
                           <td>Lael Greer</td>
                           <td>Systems Administrator</td>
                           <td>London</td>
                           <td>21</td>
                           <td>2009/02/27</td>
                           <td>$103.500,00</td>
                        </tr>
                        <tr>
                           <td>Jonas Alexander</td>
                           <td>Developer</td>
                           <td>San Francisco</td>
                           <td>30</td>
                           <td>2010/07/14</td>
                           <td>$86.500,00</td>
                        </tr>
                        <tr>
                           <td>Shad Decker</td>
                           <td>Regional Director</td>
                           <td>Edinburgh</td>
                           <td>51</td>
                           <td>2008/11/13</td>
                           <td>$183.000,00</td>
                        </tr>
                        <tr>
                           <td>Michael Bruce</td>
                           <td>Javascript Developer</td>
                           <td>Singapore</td>
                           <td>29</td>
                           <td>2011/06/27</td>
                           <td>$183.000,00</td>
                        </tr>
                        <tr>
                           <td>Donna Snider</td>
                           <td>Customer Support</td>
                           <td>New York</td>
                           <td>27</td>
                           <td>2011/01/25</td>
                           <td>$112.000,00</td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{route('/')}}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/jszip.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatable-extension/custom.js"></script>
@endsection
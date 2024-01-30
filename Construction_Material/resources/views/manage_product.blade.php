<?php
include '../resources/views/root/header.blade.php';
?>

</header>
<style>

    .s1{
        color: var(--Theme-Color-Dark, #464255);
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Inter;
        font-size: 30px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    .s2{
        color: #939393;
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Barlow;
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .r1{
        display: flex;
        width: 422px;
        height: 108px;
        padding: 20px;
        align-items: flex-start;
        gap: 10px;
        flex-shrink: 0;
        border-radius: 10px;
        background: var(--white, #FFF);
        position: relative;
    }
    button{
        display: flex;
        width: 229px;
        
        padding-top: 11px;
        padding-right: 21px;
        padding-bottom: 10px;
        padding-left: 21px;
        /* padding: 11px 21px 10px 21px; */
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        background: #F60;
        border: none;
    }
    .add{
        color: #FFF;
        font-family: Inter;
        font-size: 22px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    .box svg{
        position: absolute;
        bottom:3px;
    }
</style>

<body>
    
    <div class="container" style="background: #F0F2F5; height:1307px; width:1599px;float:right;">
        <div class="row">
            <div class="col-xl-12" style="width: 290px;">
                <p class="s1">Manage Product</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12" style="width: 464px;">
                <p class="s2">Hi, Samantha. Welcome back  to CAMEAGLE Admin!</p>
            </div>
        </div>
        <div class="row" >
           <div class="r1 d-flex justify-content-center align-center mt-1" style="margin-left: 20px;" >
                <div class="col-xl-3  m-0" style="width:32%;">            
                      <div class="box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="107" margin-bottom="3px" height="107" viewBox="0 0 107 107" fill="none">
                            <path d="M53.5003 13.375L54.1292 12.1172L53.5003 11.8028L52.8714 12.1172L53.5003 13.375ZM93.6253 33.4375H95.0316V32.5684L94.2542 32.1797L93.6253 33.4375ZM93.6253 73.5625L94.2542 74.8203L95.0316 74.4316V73.5625H93.6253ZM53.5003 93.625L52.8714 94.8828L53.5003 95.1972L54.1292 94.8828L53.5003 93.625ZM13.3753 73.5625H11.9691V74.4316L12.7464 74.8203L13.3753 73.5625ZM13.3753 33.4375L12.7464 32.1797L11.9691 32.5684V33.4375H13.3753ZM74.3858 57.9583C74.3858 58.735 75.0154 59.3646 75.792 59.3646C76.5687 59.3646 77.1983 58.735 77.1983 57.9583H74.3858ZM75.792 42.3542H77.1983V41.4851L76.4209 41.0964L75.792 42.3542ZM36.2959 21.0339C35.6012 20.6865 34.7565 20.9681 34.4092 21.6628C34.0619 22.3574 34.3435 23.2021 35.0381 23.5495L36.2959 21.0339ZM52.0941 91.3958C52.0941 92.1725 52.7237 92.8021 53.5003 92.8021C54.277 92.8021 54.9066 92.1725 54.9066 91.3958H52.0941ZM52.8714 14.6328L92.9964 34.6953L94.2542 32.1797L54.1292 12.1172L52.8714 14.6328ZM92.2191 33.4375V73.5625H95.0316V33.4375H92.2191ZM92.9964 72.3047L52.8714 92.3672L54.1292 94.8828L94.2542 74.8203L92.9964 72.3047ZM54.1292 92.3672L14.0042 72.3047L12.7464 74.8203L52.8714 94.8828L54.1292 92.3672ZM14.7816 73.5625V33.4375H11.9691V73.5625H14.7816ZM14.0042 34.6953L54.1292 14.6328L52.8714 12.1172L12.7464 32.1797L14.0042 34.6953ZM92.9964 32.1797L52.8714 52.2422L54.1292 54.7578L94.2542 34.6953L92.9964 32.1797ZM54.1292 52.2422L14.0042 32.1797L12.7464 34.6953L52.8714 54.7578L54.1292 52.2422ZM77.1983 57.9583V42.3542H74.3858V57.9583H77.1983ZM76.4209 41.0964L36.2959 21.0339L35.0381 23.5495L75.1631 43.612L76.4209 41.0964ZM54.9066 91.3958V53.5H52.0941V91.3958H54.9066Z" fill="#FF6600"/>
                        </svg>
                      </div>
                </div>
                <div class="col-xl-8">
                <div class="infor mt-1">
                    <span >
                        <button style="width:229px;" type="button">
                            <span style="float: left;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <path d="M22 40.3334C32.0833 40.3334 40.3333 32.0834 40.3333 22.0001C40.3333 11.9167 32.0833 3.66675 22 3.66675C11.9167 3.66675 3.66667 11.9167 3.66667 22.0001C3.66667 32.0834 11.9167 40.3334 22 40.3334Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.6667 22H29.3333" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 29.3334V14.6667" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="add">Add Product</span>
                        </button>
                    </span>
                </div>
                </div>
           </div>
        </div>
        <div class="row mt-5">
            <table id="example" class="table table-striped" style="width:100%">
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
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012-08-06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010-10-14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009-09-15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008-12-13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008-12-19</td>
                        <td>$90,560</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013-03-03</td>
                        <td>$342,000</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008-10-16</td>
                        <td>$470,600</td>
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012-12-18</td>
                        <td>$313,500</td>
                    </tr>
                    <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010-03-17</td>
                        <td>$385,750</td>
                    </tr>
                    <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012-11-27</td>
                        <td>$198,500</td>
                    </tr>
                    <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010-06-09</td>
                        <td>$725,000</td>
                    </tr>
                    <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009-04-10</td>
                        <td>$237,500</td>
                    </tr>
                    <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012-10-13</td>
                        <td>$132,000</td>
                    </tr>
                    <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012-09-26</td>
                        <td>$217,500</td>
                    </tr>
                    <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011-09-03</td>
                        <td>$345,000</td>
                    </tr>
                    <tr>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009-06-25</td>
                        <td>$675,000</td>
                    </tr>
                    <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011-12-12</td>
                        <td>$106,450</td>
                    </tr>
                    <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sydney</td>
                        <td>23</td>
                        <td>2010-09-20</td>
                        <td>$85,600</td>
                    </tr>
                    <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009-10-09</td>
                        <td>$1,200,000</td>
                    </tr>
                    <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010-12-22</td>
                        <td>$92,575</td>
                    </tr>
                    <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010-11-14</td>
                        <td>$357,650</td>
                    </tr>
                    <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011-06-07</td>
                        <td>$206,850</td>
                    </tr>
                    <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010-03-11</td>
                        <td>$850,000</td>
                    </tr>
                    <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011-08-14</td>
                        <td>$163,000</td>
                    </tr>
                    <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sydney</td>
                        <td>37</td>
                        <td>2011-06-02</td>
                        <td>$95,400</td>
                    </tr>
                    <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009-10-22</td>
                        <td>$114,500</td>
                    </tr>
                    <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011-05-07</td>
                        <td>$145,000</td>
                    </tr>
                    <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008-10-26</td>
                        <td>$235,500</td>
                    </tr>
                    <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011-03-09</td>
                        <td>$324,050</td>
                    </tr>
                    <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009-12-09</td>
                        <td>$85,675</td>
                    </tr>
                    <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008-12-16</td>
                        <td>$164,500</td>
                    </tr>
                    <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010-02-12</td>
                        <td>$109,850</td>
                    </tr>
                    <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009-02-14</td>
                        <td>$452,500</td>
                    </tr>
                    <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008-12-11</td>
                        <td>$136,200</td>
                    </tr>
                    <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008-09-26</td>
                        <td>$645,750</td>
                    </tr>
                    <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011-02-03</td>
                        <td>$234,500</td>
                    </tr>
                    <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011-05-03</td>
                        <td>$163,500</td>
                    </tr>
                    <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009-08-19</td>
                        <td>$139,575</td>
                    </tr>
                    <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013-08-11</td>
                        <td>$98,540</td>
                    </tr>
                    <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009-07-07</td>
                        <td>$87,500</td>
                    </tr>
                    <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012-04-09</td>
                        <td>$138,575</td>
                    </tr>
                    <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010-01-04</td>
                        <td>$125,250</td>
                    </tr>
                    <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012-06-01</td>
                        <td>$115,000</td>
                    </tr>
                    <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013-02-01</td>
                        <td>$75,650</td>
                    </tr>
                    <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011-12-06</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011-03-21</td>
                        <td>$356,250</td>
                    </tr>
                    <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009-02-27</td>
                        <td>$103,500</td>
                    </tr>
                    <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010-07-14</td>
                        <td>$86,500</td>
                    </tr>
                    <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008-11-13</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011-06-27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011-01-25</td>
                        <td>$112,000</td>
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


    

</body>
</html>

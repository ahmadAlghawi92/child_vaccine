@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Recommended Vaccines by Age
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">FAQ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="callout callout-info">
            <p>Vaccination is one of the best ways parents can protect infants, children,<br> and teens from 16 potentially harmful diseases that can be very serious, may require hospitalization, or even be deadly.</p>
         <P>And immunizations are not just for children. Protection from some childhood vaccines can wear off over time. <br>Adults may also be at risk for vaccine-preventable disease due to age, job, lifestyle, travel, or health conditions.

        </P>

<p>Review the tabs below to learn what other vaccines you and your family may need.<span>
     Check with your family’s healthcare professionals to make sure everyone is up to date on recommended vaccines.
</span>
</p>
        </div>
        <div class="row">

            <div class="col-12" id="accordion">

                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                Birth
                            </h4>
                        </div>
                    </a>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
    <p>Before leaving the hospital or birthing center, your baby receives the first of 3 doses of the vaccine that protects against
        <a href="https://www.cdc.gov/vaccines/vpd/hepb/public/index.html">Hepatitis B</a> . Hepatitis B virus can cause chronic swelling of the liver and possible lifelong complications. It’s important to protect infants and young children from hepatitis B because they are more likely than adults to develop incurable chronic (long term) infection that can result in liver damage and liver cancer.
    </p>

                        </div>
                    </div>
                </div>

                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                1 To  2 Months
                            </h4>
                        </div>
                    </a>
                    <div id="collapseTwo" class="collapse " data-parent="#accordion">
                        <div class="card-body">

                            <p> Protect your baby by providing immunity early in life. Starting at 1 to 2 months of age, your baby receives the following vaccines to develop immunity from potentially harmful diseases:

                            </p>
                            <ul>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/hepb/public/index.html">Hepatitis B</a> (2nd dose)</li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/dtap-tdap-td/public/index.html">Diphtheria, tetanus, and whooping cough (pertussis) (DTaP)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/hib/public/index.html"><em>Haemophilus influenzae</em> type b (Hib)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/polio/public/index.html">Polio (IPV)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/pneumo/public/index.html">Pneumococcal (PCV)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/rotavirus/public/index.html">Rotavirus (RV)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                              4 Months                          </h4>
                        </div>
                    </a>
                    <div id="collapseThree" class="collapse  " data-parent="#accordion">
                        <div class="card-body">
                            <p>Protect your baby by providing immunity early in life. Stay on track with the recommended vaccine schedule. At 6 months of age, your baby receives the following vaccines to develop immunity from potentially harmful diseases:
                            </p>
                            <ul>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/dtap-tdap-td/public/index.html">Diphtheria, tetanus, and whooping cough (pertussis) (DTaP)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/hib/public/index.html"><em>Haemophilus influenzae</em> type b (Hib)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/polio/public/index.html">Polio (IPV)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/pneumo/public/index.html">Pneumococcal (PCV)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/rotavirus/public/index.html">Rotavirus (RV)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/hepb/public/index.html">Hepatitis B (HepB)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        6 Months                          </h4>
                                </div>
                            </a>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Protect your baby by providing immunity early in life. Stay on track with the recommended vaccine schedule. At 6 months of age, your baby receives the following vaccines to develop immunity from potentially harmful diseases:
                                    </p>
                                    <ul>
                                        <li><a href="https://www.cdc.gov/hepatitis/hbv/bfaq.htm?CDC_AA_refVal=https%3A%2F%2Fwww.cdc.gov%2Fvaccines%2Fvpd%2Fhepb%2Fpublic%2Findex.html#prevention">Diphtheria, tetanus, and whooping cough (pertussis) (DTaP)</a></li>
                                        <li><a href="https://www.cdc.gov/vaccines/vpd/dtap-tdap-td/public/index.html"><em>Haemophilus influenzae</em> type b (Hib)</a></li>
                                        <li><a href="https://www.cdc.gov/vaccines/vpd/hib/public/index.html">Polio (IPV)</a></li>
                                        <li><a href="https://www.cdc.gov/vaccines/vpd/pneumo/public/index.html">Pneumococcal (PCV)</a></li>
                                        <li><a href="https://www.cdc.gov/vaccines/vpd/rotavirus/public/index.html">Rotavirus (RV)</a></li>
                                        <li><a href="https://www.cdc.gov/vaccines/vpd/flu/public/index.html">Influenza (flu)</a></li>
                                    </ul>
                                </div>
                                </div>
                                </div>
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                7-11 Months
                            </h4>
                        </div>
                    </a>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>There are usually no vaccinations scheduled between 7 and 11 months of age. However, if your baby has missed an earlier vaccination, now is a good time to “catch up.”

                            </p><p> Babies 6 months and older should receive <a href="https://www.cdc.gov/vaccines/vpd/flu/public/index.html">flu vaccination</a> every flu season.</p>

                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                12 To 24 Months                        </h4>
                        </div>
                    </a>
                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>By following the recommended schedule and fully immunizing your child by 2 years of age, your child should be protected against 14 vaccine preventable diseases. Between 12 and 23 months of age, your child receives the following vaccines to continue developing immunity from potentially harmful diseases:

                            </p>
                            <ul>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/varicella/public/index.html">Chickenpox (Varicella)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/dtap-tdap-td/public/index.html">Diphtheria, tetanus, and whooping cough (pertussis) (DTaP)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/hib/public/index.html"><em>Haemophilus influenzae</em> type b (Hib)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/mmr/public/index.html">Measles, mumps, rubella (MMR)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/polio/public/index.html">Polio (IPV) (between 6 through 18 months)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/pneumo/public/index.html">Pneumococcal (PCV)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/hepa/public/index.html">Hepatitis A (HepA)</a></li>
                                <li><a href="https://www.cdc.gov/vaccines/vpd/hepb/public/index.html">Hepatitis B (HepB)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </section>
    <!-- /.content -->



@endsection

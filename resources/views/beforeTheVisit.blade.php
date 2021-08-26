@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>The visits</h1>
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
        <div class="row">
            <div class="col-12" id="accordion">
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                Before the visit
                            </h4>
                        </div>
                    </a>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <strong >
                                Read about the vaccines your child is getting.
                            </strong>
                            <ul>
                        <li> Read vaccine materials you received from your child’s healthcare professional and write down any questions you may have.</li>
<li> Get a list of vaccines your child may need.</li>
                    <li>Learn more about the benefits and risks of the vaccines that your child will receive by reviewing the Vaccine Information Statements. You can also request Vaccine Information Statements at the doctor’s office.</li>
<li>Find your child’s personal immunization record and bring it to your appointment. An up-to-date record tells your doctor exactly what shots your child has already received.</li>
                </ul>
                        </div>
                    </div>
                </div>

                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                At the doctor’s office
                            </h4>
                        </div>
                    </a>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">

 <p> <strong> If you have questions about vaccination, ask your child’s doctor or healthcare professional.
     </strong>Your child’s doctor will give you Vaccine Information Statements for the vaccines that your child will be getting that day.
     Vaccine Information Statements include information about the risks and benefits of each vaccine. If your doctor doesn’t give you one
     , you can request one.</p>
<ul>
    <li>Distract and comfort your child by cuddling, singing, or talking softly.</li>
<li>Smile and make eye contact with your child. Let your child know that everything is ok.</li>
    <li>Comfort your child with a favorite toy or book. A blanket that smells familiar will help your child feel more comfortable.</li>
<li> Hold your child firmly on your lap, whenever possible.</li>




</ul>
                         </div>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                After the shots                            </h4>
                        </div>
                    </a>
                    <div id="collapseThree" class="collapse  show" data-parent="#accordion">
                        <div class="card-body">
                            <p>Sometimes children experience mild reactions from shots, such as pain at the injection site, a rash or a fever.<br><strong>These reactions are normal and will soon go away. These tips will help you identify and minimize mild side effects:</strong></p>
                       <ul>
                           <li>	Read the Vaccine Information Sheet(s) your child’s doctor gave you to learn about side effects your child may experience.</li>
<li> 	Use a cool, damp cloth to help reduce redness, soreness and/or swelling at in the place where the shot was given.</li>
                 <li> 	Reduce fever with a cool sponge bath.</li>
<li> 	Offer liquids more often. It is normal for some children to eat less during the 24 hours after getting vaccines.</li>
<li> 	Ask your child’s doctor if you can give your child a non-aspirin pain reliever.</li>
<li> 	Pay extra attention to your child for a few days. If you see something that concerns you, call your child’s doctor.</li>
<li> 	Distract and comfort your child by cuddling, singing, or talking softly.</li>
<li> 	Smile and make eye contact with your child. Let your child know that everything is ok.</li>
<li> 	Comfort your child with a favorite toy or book. A blanket that smells familiar will help your child feel more comfortable.</li>
<li> 	Hold your child firmly on your lap, whenever possible.</li>


                       </ul>
                            <p><strong>Once your child has received all of the shots, be especially supportive .</strong>   Hold and cuddle your child. A soothing voice, combined with praise and hugs will help reassure the child that everything is okay.
                                Additionally, babies can be soothed through swaddling, skin-to-skin contact, and breastfeeding. If older than 6 months, babies can also be given a sweet beverage.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->



@endsection

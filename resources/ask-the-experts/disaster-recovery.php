<!doctype html>
<html lang="en">

  <head>    
    <meta charset="utf-8">
   <meta name="keywords" content="disaster recovery small business">
    <meta name="description" content="Trust Computrad’s comprehensive solution for disaster recovery for small businesses producing the best results.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Computrad">
<?php include '../../inc/modules/headinglinks.php'; ?>
    <title>Disaster Recovery For Small Business | Computrad</title>
  </head>

  <body>
<?php include '../../inc/modules/navbar.php'; ?>

      <div class="content-wrap">
        <section id="main-services" class="section main-feature-gray first-section">
          <div class="container">

            <div class="row">   
              <div class="col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="feature-item">
                  <h1 class="section-title">Disaster Recovery</h1>
                  <p>Computrad’s comprehensive solution, with its unique ability to guarantee WAN application performance whatever happens, is the ultimate companion to your disaster recovery compliant datacenter design.</p>
                  <h2>The Issue</h2>
                  <p>You are in charge of a large international organisation’s network. Your organisation has recently decided to upgrade its disaster recovery capabilities. Primary datacenters are backed up by secondary datacenters hosting replicas of the business critical applications. The secondary datacenters must be ready to deliver the content so that each end-user in the company needs to maintain productivity in the event of a disaster.</p>
                  <p>There are three main issues that impact WAN design and capabilities when considering disaster recovery. Firstly, the requirement to deal with the sudden change in traffic flow over the WAN caused by a switch to the backup datacentres. Secondly, the increased strain put on the WAN to deliver the goal of datacenter to datacentre replication, which is mandatory for a smooth transition between primary and backup datacentres. Thirdly, when companies deploy “active-active” disaster recovery, both datacentres are active simultaneously. A branch office or remote site can therefore be receiving flows from two different locations, thus creating “meshed flows” where multiple traffic sources are competing for resources at the destination site.</p>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-4 wow fadeInRight main-section-img-div" data-wow-duration="1000ms" data-wow-delay="300ms">
                <img src="../../inc/img/section-images/network-security.jpg" class="img-responsive" alt="Disaster Recovery For Small Business">
              </div>  

            </div>

          </div>
        </section>


         <section id="main-services" class="section">
          <div class="container">


            <div class="row">   
              <div class="col-md-4 col-sm-4 wow fadeInLeft main-section-img-div" data-wow-duration="1000ms" data-wow-delay="300ms">
                <img src="../../inc/img/section-images/whiteboard.jpg" class="img-responsive" alt="Disaster Recovery For Small Business">
              </div>    

              <div class="col-md-8 col-sm-8 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="feature-item">
                  <p>Redirecting thousands of users from a primary datacenter to a backup represents a huge shift in terms of the WAN traffic flow. Traditional QoS mechanisms, such as MPLS Class of Service, simply cannot deal with these sudden changes automatically. Manual intervention is required to reconfigure the QoS parameters to match the new situation.</p>
                  <p>Datacentre replication is also pushing the network to the limit. The secondary datacentre must keep an up to date version of all application content and states. To do so, high speed links are used between the geographically distant datacentres known as fat pipes. These fat pipes can suffer from extreme Bandwidth Delay Product problems where the full bandwidth cannot be used due to TCP limitations. Over these fat pipes, backup applications (EMC, Network Appliance, Legato, Veritas, Tivoli, Microsoft, CommVault, DoubleTake, CA …) or virtual machine transfers (VMware, Microsoft, etc.) are used to perform the data replication. They all rely on the TCP protocol, which is not optimised for fat pipes and most of them do not fully optimise their bandwidth requirements with application level compression. As a result, datacentre replications are slow and business continuity is jeopardized.</p>
                  <p>Active-Active DR creates “meshed flows”. Branch offices can receive flows from both datacenters at the same time. Following Dual use DR principles, critical applications are handled by one datacenter and less critical application by the other. In such deployments, non critical applications can easily use all the available resources at the branch and thus jeopardize the performance of critical applications. With tactical solutions, competition between flows coming from both datacenters can only be handled by a device at the branch, necessitating a device at every single branch in the network. In most cases, the costs involved with such a massive hardware deployment are clearly incompatible with the benefits of using Active-Active DR.</p>
                </div>
              </div>
              
            </div>

          </div>
        </section>

        <section id="main-services" class="section main-feature-gray">
          <div class="container">


            <div class="row">   
                 

              <div class="col-md-8 col-sm-8 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="feature-item">
                  <h2>The Solution</h2>
                  <p>Computrad offer a solution that deals with the three main WAN related disaster recovery challenges. The global, dynamic nature of its Optimisation functions make it capable of fully controlling meshed flows. This control can be achieved globally, without the need to put devices in every branch, only in the datacentres. Its ability to reassess the optimal traffic management policies every second and its layer 7 classification capabilities facilitate an immediate, automated reconfiguration of QoS across the whole network to cope with a sudden change in the traffic matrix.</p>
                  <p>Finally, the Intelligent Acceleration features of the System mitigate both the bandwidth and TCP limitations of backup applications for much faster data replication. TCP Acceleration enables full use of fat pipes and the Multi-Level Redundancy Elimination dramatically compresses the backup flows, generating a massive “virtual” bandwidth capacity which is available for the backups. As a result, the disaster recovery capabilities are not impaired or impacted by the WAN.</p>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 wow fadeInLeft main-section-img-div" data-wow-duration="1000ms" data-wow-delay="300ms">
                <img src="../../inc/img/section-images/devices.jpg" class="img-responsive" alt="Disaster Recovery For Small Business">
              </div> 
              
            </div>

          </div>
        </section>


        <section id="cta">
          <div class="container">
            <div class="row text-center">         
                <h3 class="title-small wow bounce" data-wow-duration="1000ms" data-wow-delay="300ms">Interested in our services?</h3>
                 <a href="#contact" class="btn btn-lg btn-border">Contact Us</a>
              </div>
          </div>
        </section>



<?php include '../../inc/modules/footer.php'; ?>
<?php include '../../inc/modules/js_plus.php'; ?>


  </body>

</html>

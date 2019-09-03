<?php include('Layout/header.php') ?>
    <header class="header-innerpages">
        <?php include('Layout/navbar.php') ?>

        <div class="clearfix"></div>

        <div class="headertxttwocol cpuinnerheaderbg stroageinnerheader">
            <div class="container">
                <div class="inner-header-head">
                    <h2><strong>Robust. Scalable.</strong> Infiniband based HPC<br>
                        architecture for extreme throughput and IOPs.</h2>
                </div>
            </div>
        </div>

    </header>

    <main class="content_section">


        <div class="container">
            <div class="whyleanfa pageheadparaall strogeulli">
                <h2>Storage</h2>
                <p>Cutting-edge storage.</p>
                <div class="bare_ihti">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Full enterprise grade NVMe<br>
                                Storage</h3>
                            <p>
                                <ul class="listcircle">
                                    <li>Up to 732,000 IOP/s random writes
                                    </li>
                                    <li>Up to 6,708,000 IOP/s random reads
                                    </li>
                                    <li>Up to 76.8 GB/s sequential read throughput
                                    </li>
                                    <li>Up to 14.4 GB/s sequential write throughput
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <img src="assets/img/object-NVMe.png" class="img-responsive serviceleftimg" alt="services">
                        </div>
                    </div>
                </div>

                <div class="bare_ihti">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="assets/img/object-Speed.png" class="img-responsive serviceleftimg" alt="services">
                        </div>
                        <div class="col-sm-6">
                            <h3>200Gb/s Infiniband<br>
                                network speed</h3>
                            <p>
                                <ul class="listcircle">
                                    <li>NVMe over Fabric (NVMf) Target Offloads
                                    </li>
                                    <li>Hardware offloads for VXLAN encapsulated traffic
                                    </li>
                                    <li>Sub-700 nanosecond latency
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bare_ihti">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>We use GlusterFS!
                            </h3>
                            <p>
                                <ul class="listcircle">
                                    <li>Fully POSIX compatible
                                    </li>
                                    <li>Provides replication, quotas, geo-replication, snapshots
                                        and bitrot detection. </li>
                                    <li>Scales to petabytes
                                    </li>
                                    <li>Handles thousands of clients
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <img src="assets/img/object-glusterfs.png" class="img-responsive serviceleftimg" alt="services">
                        </div>
                    </div>
                </div>

            </div>
        </div>



<?php 
include('Layout/footer.php');
?>
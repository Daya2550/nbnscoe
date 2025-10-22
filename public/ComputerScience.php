<?php require_once __DIR__ . '/../templates/header.php'; ?>
<style>
.table-responsive { width: 100%; overflow-x: auto; }
.table { width: 100%; border-collapse: collapse; }
.table th, .table td { padding: 10px; border: 1px solid #ccc; text-align: left; vertical-align: top; }
.table th { background-color: #007bff; color: #fff; }
</style>
<?php
  // EDIT: Update these arrays with your own data
  $faculty = [
    ['name'=>'Dr. Subhash V. Pingale','qualification'=>'Ph.D. (IT), M.Tech (Comp Engg)','designation'=>'HoD (CSE) & Associate Professor','experience_years'=>18],
    ['name'=>'Dr. Vinayak G. Jagtap','qualification'=>'Ph.D., M.E.','designation'=>'Associate Professor','experience_years'=>17],
    ['name'=>'Mr. Namdev M. Sawant','qualification'=>'M.Tech, Ph.D (Pursuing)','designation'=>'Assistant Professor','experience_years'=>16],
    ['name'=>'Mr. S. S. Ingole','qualification'=>'M.E. (CSE)','designation'=>'Assistant Professor','experience_years'=>12],
    ['name'=>'Ms. P. R. Deshmukh','qualification'=>'M.Tech (CSE)','designation'=>'Assistant Professor','experience_years'=>9],
    ['name'=>'Mr. A. B. Kulkarni','qualification'=>'M.E. (Computer)','designation'=>'Assistant Professor','experience_years'=>10],
    ['name'=>'Ms. K. S. Patil','qualification'=>'M.Tech (CSE)','designation'=>'Assistant Professor','experience_years'=>8],
    ['name'=>'Mr. R. D. Jadhav','qualification'=>'M.E. (IT)','designation'=>'Assistant Professor','experience_years'=>11],
    ['name'=>'Ms. S. V. Shinde','qualification'=>'M.Tech (Comp)','designation'=>'Assistant Professor','experience_years'=>7],
    ['name'=>'Mr. P. N. Desai','qualification'=>'M.E. (CSE)','designation'=>'Assistant Professor','experience_years'=>6],
    ['name'=>'Ms. M. S. Khot','qualification'=>'M.Tech (CSE)','designation'=>'Assistant Professor','experience_years'=>5],
    ['name'=>'Mr. V. R. Pawar','qualification'=>'M.E. (Computer)','designation'=>'Assistant Professor','experience_years'=>9],
  ];
  $visits = [
    ['title'=>'Visit to TCS Pune','location'=>'Pune','date'=>'2024-08-12','description'=>'Exposure to enterprise workflows'],
    ['title'=>'Reliance Jio Data Center','location'=>'Mumbai','date'=>'2024-02-10','description'=>'Network operations overview'],
  ];
  $internships = [
    ['organization'=>'Infosys','topic'=>'Full Stack Web','duration'=>'6 weeks','year'=>2024,'students'=>'A. Patil, B. Desai'],
    ['organization'=>'TCS','topic'=>'Data Science','duration'=>'2 months','year'=>2023,'students'=>'C. Shinde, D. Jadhav'],
  ];
?>
<div class="container-fluid container-mob" style="margin-top:0; padding-left:0; padding-right:0;">
  <div class="row" style="margin-left:0; margin-right:0;">
<button type="button" class="btn skn-sidebar-toggle" aria-label="Open sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>
    </button>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar skn-sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#about" data-toggle="tab" style="font-size:18px;">About Department</a></li>
        <li><a href="#vm" data-toggle="tab" style="font-size:18px;">Vision and Mission</a></li>
        <li><a href="#po" data-toggle="tab" style="font-size:18px;">Program Outcomes (POs)</a></li>
        <li><a href="#pso" data-toggle="tab" style="font-size:18px;">Program Specific Outcome (PSOs)</a></li>
        <li><a href="#peo" data-toggle="tab" style="font-size:18px;">Program Educational Objectives (PEOs)</a></li>
        <li><a href="#co" data-toggle="tab" style="font-size:18px;">Course Outcomes (COs)</a></li>
        <li><a href="#faculty" data-toggle="tab" style="font-size:18px;">Faculty Details</a></li>
        <li><a href="#activity_calendar" data-toggle="tab" style="font-size:18px;">Activity Calendar</a></li>
        <li><a href="#labs" data-toggle="tab" style="font-size:18px;">About Laboratories</a></li>
        <li><a href="#industrial_visits" data-toggle="tab" style="font-size:18px;">Department Industrial Visits</a></li>
        <li><a href="#internships" data-toggle="tab" style="font-size:18px;">Department Internships</a></li>
        <li><a href="#newsletter" data-toggle="tab" style="font-size:18px;">Newsletter</a></li>
        <li><a href="#industry_labs" data-toggle="tab" style="font-size:18px;">Industry Supported Labs</a></li>
        <li><a href="#mous" data-toggle="tab" style="font-size:18px;">MoUs</a></li>
        <li><a href="#achievements" data-toggle="tab" style="font-size:18px;">Faculty & Students Achievement</a></li>
        <li><a href="#research" data-toggle="tab" style="font-size:18px;">Research Contribution</a></li>
        <li><a href="#funded_projects" data-toggle="tab" style="font-size:18px;">Funded Projects</a></li>
        <li><a href="#patents" data-toggle="tab" style="font-size:18px;">Patents & Copyrights</a></li>
        <li><a href="#result" data-toggle="tab" style="font-size:18px;">Result</a></li>
        <li><a href="#student_association" data-toggle="tab" style="font-size:18px;">Student Association</a></li>
        <li><a href="#innovations" data-toggle="tab" style="font-size:18px;">Innovations in Teaching & Learning</a></li>
        <li><a href="#iei" data-toggle="tab" style="font-size:18px;">IEI Student Chapter</a></li>
        <li><a href="#seminars" data-toggle="tab" style="font-size:18px;">Seminars/ Conferences/Workshops</a></li>
        <li><a href="#pride" data-toggle="tab" style="font-size:18px;">Our Pride</a></li>
        <li><a href="#success" data-toggle="tab" style="font-size:18px;">Success Stories</a></li>
        <li><a href="#gallery" data-toggle="tab" style="font-size:18px;">Gallery</a></li>
      </ul>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="text-container"><span class="animated-text">COMPUTER SCIENCE AND ENGINEERING</span></div><br>
      <div class="tab-content">
        <div class="tab-pane active" id="about">
          <div class="inner_wrapper"><div class="inner_section"><div class="row"><div class="col-md-12">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12" style=" float: right; ">
              <img class="delay-03s img-rounded wow zoomIn" src="<?php echo BASE_URL; ?>\public\assets\vendor\sknscoe\img\Slider\cse.png" style="width: 100%;" alt="">
              <h4 align="center">Dr. S. V. Pingale<br>(HoD & Associate Professor)</h4>
              <h6 align="center">Ph.D (Information Technology), M. Tech (Computer Engineering).</h6>
            </div>
            <p>
              The department of Computer science & Engineering (CSE) was established in 2010 with sanctioned intake 60. Department also offer PG course in CSE having intake 18. The department has offered honor degree course in Artificial Intelligence & Machine Learning. The main objective of department is to provide technically good IT Professional to industries. The department has a good combination of experienced and young faculties which works as a team to strengthen the department. The department is equipped with good infrastructure which consists of class rooms with ICT enabled facility, well developed 07 computer labs with learning software's and department library. Department is proud of the achievements and the results given by final year students. The department regularly organizes Invited talks, Value addition Program, seminars and workshops which helps to the students stay updated with emerging technologies. Additionally, the department frequently arranges industrial visits to different IT Industries. The Department has signed the MoUs with different industries and institute to strengthen the Industry institute interaction and consultancy. Under this MoUs different activities are organized such as value addition program, Expert Lectures and Online Examination.<br>
              The department has started a mentoring scheme called as Teacher Guardian (TG) in which every student meets their mentor faculty (TG teacher) every week to discuss issues related to academic, co-curricular, and other career opportunities. We encourage our students for participating in the National level events like Smart India Hackathon(SIH), Spectrum, WEENGS, etc. Students are participating in project exhibition at University and State Level "Avishkar".<br>
              Department has initiated IEI student chapter under which various workshops/seminars are organized. Department student association known as ACSES organizes various events like Hack thon, Techno Zeal for overall development of student. Department has formed different student club for strengthen their technical skill. We embedded project based learning culture in department. Most of our students are placed through campus in multinational companies like TCS, Accenture, Cognizant, Birla Soft, Wipro, Tech Mahindra etc.
            </p>
          </div></div></div></div>
        </div>

        <div class="tab-pane" id="vm">
          <section>
            <div class="inner_wrapper">
              <div class="row"><div class="col-lg-10 col-md-10 col-sm-10">
                <div class="message"><h4 style="padding-left:5px;">Vision</h4></div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <p style="text-align:justify; font-size:14px;">"To be a leading technical centre in Computer Science that fosters innovation, research, and ethical leadership to address fast changing technological and societal challenges."</p>
                </div>
              </div></div>
              <div class="row"><div class="col-lg-10 col-md-10 col-sm-10">
                <div class="message"><h4 style="padding-left:5px;">Mission</h4></div>
                <div class="col-lg-12">
                  <ul style="text-align:justify">
                    <li><b>M1:</b> To provide quality education in computer science with a focus on practical skills and problem-solving.</li>
                    <li><b>M2:</b> To prepare students for successful careers through industry exposure and hands-on experience in emerging technologies.</li>
                    <li><b>M3:</b> To promote innovation and research that address real-world challenges.</li>
                    <li><b>M4:</b> To encourage ethical values, teamwork, and continuous learning for overall development.</li>
                  </ul>
                </div>
              </div></div>
            </div>
          </section>
        </div>

        <div class="tab-pane" id="po">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Program Outcomes (POs)</h4></div>
            <div class="col-lg-12">
              <h4>Engineering Graduate will be able to:</h4>
              <ol style="text-align:justify">
                <li><b>Engineering knowledge:</b> Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.</li>
                <li><b>Problem analysis:</b> Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</li>
                <li><b>Design/development of solutions:</b> Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.</li>
                <li><b>Conduct investigations of complex problems:</b> Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</li>
                <li><b>Modern tool usage:</b> Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</li>
                <li><b>The engineer and society:</b> Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</li>
                <li><b>Environment and sustainability:</b> Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</li>
                <li><b>Ethics:</b> Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</li>
                <li><b>Individual and team work:</b> Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</li>
                <li><b>Communication:</b> Communicate effectively on complex engineering activities with the engineering community and with society at large.</li>
                <li><b>Project management and finance:</b> Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work.</li>
                <li><b>Life-long learning:</b> Recognize the need for, and have the preparation and ability to engage in independent and life-long learning.</li>
              </ol>
            </div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="pso">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Program Specific Outcomes (PSOs)</h4></div>
            <div class="col-lg-12">
              <ul style="text-align:justify">
                <li><b>PSO 1:</b> Ability to use technical skills necessary for design, development and implementation of innovative software solutions.</li>
                <li><b>PSO 2:</b> Ability to apply domain knowledge and expertise in computer engineering to solve real life and societal problems.</li>
              </ul>
            </div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="peo">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Program Educational Objectives (PEOs)</h4></div>
            <div class="col-lg-12">
              <ul style="text-align:justify">
                <li><b>PEO 1:</b> To make students competent for professional career in Computers, IT & allied fields.</li>
                <li><b>PEO 2:</b> To build strong fundamental knowledge to pursue higher education, research and professional development.</li>
                <li><b>PEO 3:</b> To imbibe professional ethics, team spirit and effective communication skills.</li>
                <li><b>PEO 4:</b> To nurture sensitivity to ethical, societal & environmental issues.</li>
                <li><b>PEO 5:</b> To encourage graduates who can identify and solve current problems in industry and society.</li>
              </ul>
            </div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="co">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Course Outcomes (COs)</h4></div>
            <p>Course-wise outcomes will be documented here for each semester.</p>
          </div></div></div>
        </div>

        <div class="tab-pane" id="faculty">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Faculty Details</h4></div><br>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Sr.No</th><th>Staff Name</th><th>Qualification</th><th>Designation</th><th>Experience (years)</th></tr></thead>
                <tbody>
                  <?php if (!empty($faculty)): $i=1; foreach ($faculty as $f): ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo htmlspecialchars($f['name'] ?? '', ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($f['qualification'] ?? '', ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($f['designation'] ?? '', ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars((string)($f['experience_years'] ?? ''), ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; else: ?>
                  <tr><td colspan="5" class="text-muted">No faculty added yet.</td></tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="activity_calendar">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Activity Calendar</h4></div>
            <ul>
              <li>July–August: Induction, Orientation, Workshops</li>
              <li>September–October: Seminars, Hackathons, Industrial Visits</li>
              <li>November–December: FDP/STTP, Value-Added Programs</li>
            </ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="labs">
          <div class="service_wrapper"><div class="inner_section">
            <h3 class="title">Object Oriented Programming Lab</h3>
            <div class="row"><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/401-OOP Lab.JPG" class="img-rounded" alt=""></div>
              <div class="col-lg-8 col-md-8 col-sm-16 col-xs-12"><p>Object Oriented lab has the facilities for practicals in C/C++ and Java.</p><h4>Major Equipments</h4><ul><li>25 Desktop systems</li></ul></div>
            </div>
            <h3 class="title">Computer Network Lab</h3>
            <div class="row"><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/402-CN Lab.JPG" class="img-rounded" alt=""></div>
              <div class="col-lg-8 col-md-8 col-sm-16 col-xs-12"><p>Network lab supports CN I/II and Distributed Systems.</p><h4>Major Equipments</h4><ul><li>25 Desktop systems</li></ul></div>
            </div>
            <h3 class="title">Advanced Database System Lab</h3>
            <div class="row"><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/403-ADS Lab.jpg" class="img-rounded" alt=""></div>
              <div class="col-lg-8 col-md-8 col-sm-16 col-xs-12"><p>Supports DBMS, Advanced DBMS, Data Structures, VB, System Programming.</p><h4>Major Equipments</h4><ul><li>25 Desktop systems</li></ul></div>
            </div>
            <h3 class="title">AI & ML Lab</h3>
            <div class="row"><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/404-AI & ML Lab.JPG" class="img-rounded" alt=""></div>
              <div class="col-lg-8 col-md-8 col-sm-16 col-xs-12"><p>Supports Python, Machine Learning, NLP, Information Security.</p><h4>Major Equipments</h4><ul><li>25 i5 systems</li></ul></div>
            </div>
            <h3 class="title">PG Research Lab</h3>
            <div class="row"><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/lab2.JPG" class="img-rounded" alt=""></div>
              <div class="col-lg-8 col-md-8 col-sm-16 col-xs-12"><p>Facility for PG research work.</p></div>
            </div>
            <h3 class="title">Pre Incubation Lab</h3>
            <div class="row"><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/Pre-Incubation-center.jpg" class="img-rounded" alt=""></div>
              <div class="col-lg-8 col-md-8 col-sm-16 col-xs-12"><p>Used for developing academic projects using latest technology/equipment.</p></div>
            </div>
            <h3 class="title">Computer Organization & Architecture Lab</h3>
            <div class="row"><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/COA-LAB.jpg" class="img-rounded" alt=""></div>
              <div class="col-lg-8 col-md-8 col-sm-16 col-xs-12"><p>For Microprocessor and Computer Organization practicals.</p><h4>Major Equipments</h4><ul><li>Microprocessor kits</li><li>Computer parts</li></ul></div>
            </div>
            <h3 class="title">IoT Lab</h3>
            <div class="row"><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/IoT Lab.jpg" class="img-rounded" alt=""></div>
              <div class="col-lg-8 col-md-8 col-sm-16 col-xs-12"><p>IoT subject practicals.</p><h4>Major Equipments</h4><ul><li>Arduino, NodeMCU, Raspberry Pi</li><li>Various sensors</li></ul></div>
            </div>
          </div></div>
        </div>

        <div class="tab-pane" id="industrial_visits">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Department Industrial Visits</h4></div>
            <?php if (!empty($visits)): ?>
              <ul>
                <?php foreach ($visits as $v): ?>
                  <li>
                    <strong><?php echo htmlspecialchars($v['title'] ?? '', ENT_QUOTES); ?></strong>
                    <?php if(!empty($v['location'])): ?> — <?php echo htmlspecialchars($v['location'], ENT_QUOTES); ?><?php endif; ?>
                    <?php if(!empty($v['date'])): ?> (<?php echo htmlspecialchars($v['date'], ENT_QUOTES); ?>)<?php endif; ?>
                    <?php if(!empty($v['description'])): ?><div><?php echo nl2br(htmlspecialchars($v['description'], ENT_QUOTES)); ?></div><?php endif; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php else: ?>
              <p class="text-muted">No industrial visits added yet.</p>
            <?php endif; ?>
          </div></div></div>
        </div>

        <div class="tab-pane" id="internships">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Department Internships</h4></div>
            <?php if (!empty($internships)): ?>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead><tr><th>Organization</th><th>Topic</th><th>Duration</th><th>Year</th><th>Students</th></tr></thead>
                  <tbody>
                    <?php foreach ($internships as $it): ?>
                      <tr>
                        <td><?php echo htmlspecialchars($it['organization'] ?? '', ENT_QUOTES); ?></td>
                        <td><?php echo htmlspecialchars($it['topic'] ?? '', ENT_QUOTES); ?></td>
                        <td><?php echo htmlspecialchars($it['duration'] ?? '', ENT_QUOTES); ?></td>
                        <td><?php echo htmlspecialchars((string)($it['year'] ?? ''), ENT_QUOTES); ?></td>
                        <td><?php echo nl2br(htmlspecialchars($it['students'] ?? '', ENT_QUOTES)); ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            <?php else: ?>
              <p class="text-muted">No internships added yet.</p>
            <?php endif; ?>
          </div></div></div>
        </div>

        <div class="tab-pane" id="newsletter">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Newsletter</h4></div>
            <ul>
              <li><strong>Advik 2K24</strong> — July 2024 — <a href="#">PDF</a></li>
              <li><strong>Advik 2K23</strong> — August 2023 — <a href="#">PDF</a></li>
              <li><strong>Department Bulletin</strong> — January 2023 — <a href="#">PDF</a></li>
            </ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="industry_labs">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Industry Supported Labs</h4></div>
            <ul>
              <li><strong>AI & ML Center of Excellence</strong> — Partner: NVIDIA — Toolkits for Deep Learning</li>
              <li><strong>Cyber Security Lab</strong> — Partner: QuickHeal — Malware analysis sandbox</li>
              <li><strong>Cloud Computing Lab</strong> — Partner: AWS Academy — AWS Academy Cloud Foundations</li>
            </ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="mous">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">MoUs</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Partner</th><th>Scope</th><th>Year</th></tr></thead>
                <tbody>
                  <tr><td>TCS iON</td><td>Internships and Skill Modules</td><td>2024</td></tr>
                  <tr><td>Infosys Springboard</td><td>Training and Certification</td><td>2023</td></tr>
                  <tr><td>Red Hat Academy</td><td>Linux and DevOps Curriculum</td><td>2023</td></tr>
                </tbody>
              </table>
            </div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="achievements">
          <div class="inner_wrapper"><div class="row">
            <div class="col-lg-12"><div class="message"><h4 style="padding-left:5px;">Faculty Achievements</h4></div>
              <div class="table-responsive"><table class="table table-striped"><thead><tr><th>Sr.No.</th><th>Name of staff</th><th>Credentials</th></tr></thead>
                <tbody>
                  <tr><td>1</td><td>Mr. S. V. Pingale</td><td>EMC Proven Professional EMCPA Associate ISM; Reviewer for SCI journals</td></tr>
                  <tr><td>2</td><td>Mr. N. M. Sawant</td><td>IBM DB2 Cert.; Appreciation by IITB for Spoken Tutorials; Staff exchange Program for Rawanda</td></tr>
                  <tr><td>3</td><td>Mr. S. S. Ingole</td><td>Best Teacher Award</td></tr>
                </tbody>
              </table></div>
            </div>
            <div class="col-lg-12"><div class="message"><h4 style="padding-left:3px;">Student Achievements</h4></div>
              <div class="table-responsive"><table class="table table-striped"><thead><tr><th>Activity</th><th>Level</th><th>Students</th><th>Achievement</th></tr></thead>
                <tbody>
                  <tr><td>Smart India Hackathon 2019</td><td>National</td><td>Team of 6</td><td>2nd Runner Up</td></tr>
                  <tr><td>Sinhgad Hackathon 2019</td><td>State</td><td>Team of 4</td><td>Winner</td></tr>
                </tbody>
              </table></div>
            </div>
          </div></div>
        </div>

        <div class="tab-pane" id="research">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Research Contribution</h4></div>
            <ul style="text-align:justify">
              <li>Karande K.J., Deshmukh S. — Thin Film Nanomaterials for Energy Applications, 2024.</li>
              <li>Jagtap V.G. — Efficient CNN architectures for crop disease detection, IJCAI 2023.</li>
              <li>Sawant N.M. — Blockchain-based Academic Credentials, Springer CCIS 2022.</li>
              <li>Ingole S.S. — IoT-enabled Smart Grid Monitoring, IEEE Access 2021.</li>
              <li>Department — 3 funded projects, 18 SCI/Scopus publications in last 3 years.</li>
            </ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="funded_projects">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Funded Projects</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Title</th><th>Agency</th><th>Amount</th><th>Year</th></tr></thead>
                <tbody>
                  <tr><td>AI-enabled Precision Irrigation</td><td>RGSTC</td><td>₹ 9,50,000</td><td>2024</td></tr>
                  <tr><td>Secure IoT Gateway for Smart Homes</td><td>AICTE</td><td>₹ 5,00,000</td><td>2023</td></tr>
                  <tr><td>Solar-powered Edge Compute Node</td><td>BCUD</td><td>₹ 3,20,000</td><td>2022</td></tr>
                </tbody>
              </table>
            </div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="patents">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Patents & Copyrights</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Title</th><th>Status</th><th>Year</th></tr></thead>
                <tbody>
                  <tr><td>Method for Real-time Crop Disease Detection</td><td>Filed</td><td>2024</td></tr>
                  <tr><td>Secure Firmware Update Mechanism for IoT</td><td>Published</td><td>2023</td></tr>
                  <tr><td>Campus Navigation App (Copyright)</td><td>Registered</td><td>2022</td></tr>
                </tbody>
              </table>
            </div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="result">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Result</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>AY</th><th>Pass % (BE)</th><th>Topper</th><th>CGPA</th></tr></thead>
                <tbody>
                  <tr><td>2023-24</td><td>92%</td><td>Ms. A. Patil</td><td>9.38</td></tr>
                  <tr><td>2022-23</td><td>89%</td><td>Mr. S. Kulkarni</td><td>9.21</td></tr>
                  <tr><td>2021-22</td><td>87%</td><td>Ms. P. Deshmukh</td><td>9.12</td></tr>
                </tbody>
              </table>
            </div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="student_association">
          <div class="inner_wrapper"><div class="row">
            <center><h3>Association of Computer Science & Engg. Students (ACSES)</h3></center>
            <div class="col-lg-12"><div class="message"><h4 style="padding-left:3px;">Student Association (ACSES)</h4></div>
              <p>The inaugural of ACSES was held on 01th August, 2012. The ceremony began with Lighting of lamps, followed by addresses from leadership and a talk on Android Development. Toppers were felicitated. ACSES provides a platform for competitions and talent development.</p>
            </div>
            <div class="col-lg-12"><div class="message"><h4 style="padding-left:3px;">Objectives of ACSES</h4></div>
              <p>The objective is to provide a platform for Computer Engineering students to face competitions and showcase talents; arrange activities that make students employable.</p>
            </div>
          </div></div>
        </div>

        <div class="tab-pane" id="innovations">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Innovations in Teaching & Learning</h4></div>
            <p>Innovative pedagogical approaches, PBL, flipped classroom initiatives.</p>
          </div></div></div>
        </div>

        <div class="tab-pane" id="iei">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">IEI Student Chapter</h4></div>
            <ul>
              <li>Guest Lecture on Sustainable Computing — Feb 2024</li>
              <li>Hands-on Workshop: PCB Design — Oct 2023</li>
              <li>Industrial Visit: Solar Plant, Pandharpur — Mar 2023</li>
            </ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="seminars">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Seminars/ Conferences/Workshops</h4></div>
            <ul>
              <li>FDP on Generative AI (One Week) — Dec 2024</li>
              <li>STTP on Cyber Forensics Tools — Mar 2023</li>
              <li>Seminar on Data Science & Its Applications — Jan 2022</li>
            </ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="pride">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Our Pride</h4></div>
            <ul>
              <li>Department recognized as a Band Performer in ARIIA 2021.</li>
              <li>Multiple University Rankers in AY 2023-24.</li>
              <li>Winners at Smart India Hackathon (Software Edition).</li>
            </ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="success">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Success Stories</h4></div>
            <ul>
              <li><strong>Priya Deshmukh</strong> — SDE at Amazon, Bangalore.</li>
              <li><strong>Shubham Kulkarni</strong> — Data Scientist at TCS, Pune.</li>
              <li><strong>Aniket Patil</strong> — Founder, AgroTech IoT Solutions.</li>
            </ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="gallery">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Gallery</h4></div>
            <div class="row">
              <div class="col-sm-3"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/401-OOP Lab.JPG" class="img-rounded" alt="OOP Lab"></div>
              <div class="col-sm-3"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/402-CN Lab.JPG" class="img-rounded" alt="CN Lab"></div>
              <div class="col-sm-3"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/403-ADS Lab.jpg" class="img-rounded" alt="ADS Lab"></div>
              <div class="col-sm-3"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/404-AI & ML Lab.JPG" class="img-rounded" alt="AI & ML Lab"></div>
            </div>
          </div></div></div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>

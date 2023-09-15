<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Coop</title>
</head>

<body>
  <div class="container">
    <div class="row" style="margin: 2rem 0 2rem 0 ">
      <div class='col' style="border: 1px solid black">
        <div style="display: flex; align-items: center">
          <div>
            <img src="https://archives.oarit.rmuti.ac.th/wp-content/uploads/2015/01/RMUTI_KORAT.png"
              alt="Responsive Image" style="max-width: 50px">
          </div>
          <div>มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</div>
          <div style=" margin-left: auto;">
            RMUTI-Coop14
          </div>
        </div>
        <div style="display:flex; justify-content: center">
          <p><b>แบบประเมินความพึงพอใจของสถานประกอบการต่อการรับนักศึกษา</b></p>
        </div>

        <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(0, 0, 0)">

        <div>
          <p>(ผู้ให้ข้อมูล:<u>ผุ้จัดการฝ่ายบุคคลและ/หรือผู้นิเทศงานในสถานประกอบการ</u>)</p>
        </div>
        <br>
        <h6><b>ข้อมูลทั้วไป</b></h6>

        <div class="row">
          <div class="col-md-8" style="padding-right: 0">
            <div class="form-group">
              <div style="display: flex;justify-items: center ;align-items: flex-end">
                <label for="studentId" style="white-space: nowrap; margin: 0">ชื่อ-สกุล(นักสึกษา)</label>
                <input type="text" class="form-control" id="studentId" style="border: 0; border-bottom: 2px dotted;">
              </div>
            </div>
          </div>
          <div class="col-md-4" style="padding-left: 0">
            <div class="form-group">
              <div style="display: flex;justify-items: center ;align-items: flex-end">
                <label for="studentId" style="white-space: nowrap; margin: 0">รหัสนักศึกษา</label>
                <input type="text" class="form-control" id="studentId" style="border: 0; border-bottom: 2px dotted;">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div style="display: flex;justify-items: center ;align-items: flex-end">
                <label for="studentId" style="white-space: nowrap; margin: 0">ชื่อสภานประกอบการ</label>
                <input type="text" class="form-control" id="studentId" style="border: 0; border-bottom: 2px dotted;">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div style="display: flex;justify-items: center ;align-items: flex-end">
                <label for="studentId" style="white-space: nowrap; margin: 0">ชื่อ-สกุล(ผู้ประเมิน)</label>
                <input type="text" class="form-control" id="studentId" style="border: 0; border-bottom: 2px dotted;">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-7" style="padding-right: 0">
            <div class="form-group">
              <div style="display: flex;justify-items: center ;align-items: flex-end">
                <label for="studentId" style="white-space: nowrap; margin: 0">ตำแหน่ง</label>
                <input type="text" class="form-control" id="studentId" style="border: 0; border-bottom: 2px dotted;">
              </div>
            </div>
          </div>
          <div class="col-md-5" style="padding-left: 0">
            <div class="form-group">
              <div style="display: flex;justify-items: center ;align-items: flex-end">
                <label for="studentId" style="white-space: nowrap; margin: 0">แผนก</label>
                <input type="text" class="form-control" id="studentId" style="border: 0; border-bottom: 2px dotted;">
              </div>
            </div>
          </div>
        </div>

        <div style="display: flex;align-items: flex-end">
          <p>
            <b>
              <u>คำชี้แจง</u> &nbsp;
            </b>
          </p>
          <p>โปรดแสดงความคิดเห็นต่อการปำิบัติงานของนักศึกาา ตามเกณฆ์การประเมินดังต่อไปนี้</p>
        </div>

        <div style="display: flex;justify-content: space-between">
          <div>
            5 หมายถึง มากที่สุด
          </div>
          <div>
            4 หมายถึง มาก
          </div>
          <div>
            3 หมายถึง ปานกลาง
          </div>
          <div>
            2 หมายถึง น้อย
          </div>
          <div>
            1 หมายถึง น้อยที่สุด
          </div>
        </div>
        <div>
          <p>
            <b>
              โปรดทำเครื่องหมาย <i class="bi bi-check"></i> ในช่องที่ต้องการ
            </b>
          </p>
        </div>

        <table class="table table-bordered">

          <tr class="text-center">
            <th rowspan="2">หัวข้อการประเมิน</th>
            <th colspan="5">ระดับความเห็น</th>

          </tr>
          <tr class="text-center">
            <th>5</th>
            <th>4</th>
            <th>3</th>
            <th>2</th>
            <th>1</th>

          </tr>
          <tr style="text-align: center;">
            <td style="text-align: start;">1.ประโยชน์ที่ได้รับจากนักศึกษาสหกิจศึกษา</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="5" name="rating1">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="4" name="rating1">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="3" name="rating1">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="2" name="rating1">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="1" name="rating1">
              </div>
            </td>
          </tr>

          <tr style="text-align: center;">
            <td style="text-align: start;">2.ระดับความพึงพอใจต่อการปฏิบัติงานสหกิจของนักศึกษา</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="5" name="rating2">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="4" name="rating2">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="3" name="rating2">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="2" name="rating2">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="1" name="rating2">
              </div>
            </td>
          </tr>
          <tr style="text-align: center;">
            <td style="text-align: start;">3.ความเหมาะสมของระยะเวลาการปฎิบัติงานสหกิจศึกษา</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="5" name="rating3">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="4" name="rating3">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="3" name="rating3">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="2" name="rating3">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="1" name="rating3">
              </div>
            </td>
          </tr>
          <tr style="text-align: center;">
            <td style="text-align: start;">4.ความเหมาะสมของช่วงเวลาการปฎิบัติงานสหกิจศึกษา</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="5" name="rating4">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="4" name="rating4">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="3" name="rating4">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="2" name="rating4">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="1" name="rating4">
              </div>
            </td>
          </tr>
          <tr style="text-align: center;">
            <td style="text-align: start;">5.ประสิทธิภาพการทำงานของนักศึกษา</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="5" name="rating5">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="4" name="rating5">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="3" name="rating5">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="2" name="rating5">
              </div>
            </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="1" name="rating5">
              </div>
            </td>
          </tr>
          <tr>
            <td>คะแนนเฉลี่ย (ผลรวมคะเเนนข้อ 1-5 หารด้วย 5)</td>
            <td colspan="5"></td>

          </tr>
        </table>

        <div>
          <p>
            <b>
              ข้อคิดเห็นเพิ่มเติม/Other Comments
            </b>
          </p>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div style="display: flex;justify-items: center ;align-items: flex-end">
                <input type="text" class="form-control" name="comment" style="border: 0; border-bottom: 2px dotted;">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div style="border: 1px solid black; padding: 10px ">
              <p>คณะวิศวกรรมศาสตร์และดทคโนโลยี</p>
              <p>มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</p>
              <p>774 ถ.สุรนารายณ์ ต.ในเมือง อ.เมือง</p>
              <p>จ.นครราชสีมา 30000</p>
              <p>โทรศัพท์ 0 44223 3073</p>
              <p>โทรศัพท์ 0 44223 3074</p>
            </div>
          </div>

          <div class="col-md-6">
            <div style="border: 1px solid black; padding: 50px 0 0 30px">
              <div></div>
              <label>ลงชื่อ</label>
              <input type="text" class="form-control" name="comment" style="border: 0; border-bottom: 2px dotted;">

              <div class="form-group">
                <div style="display: flex;justify-items: center ;align-items: flex-end">
                  <label for="studentId" style="white-space: nowrap; margin: 0">ตำแหน่ง</label>
                  <input type="text" class="form-control" id="studentId" style="border: 0; border-bottom: 2px dotted;">
                </div>
              </div>

              <div class="row">
                <div class="col-md-4" style="padding-right: 0">
                  <div class="form-group">
                    <div style="display: flex;justify-items: center ;align-items: flex-end">
                      <label for="studentId" style="white-space: nowrap; margin: 0">วัน</label>
                      <input type="text" class="form-control" id="studentId"
                        style="border: 0; border-bottom: 2px dotted;">
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="padding-left: 0">
                  <div class="form-group">
                    <div style="display: flex;justify-items: center ;align-items: flex-end">
                      <label for="studentId" style="white-space: nowrap; margin: 0">เดือน</label>
                      <input type="text" class="form-control" id="studentId"
                        style="border: 0; border-bottom: 2px dotted;">
                    </div>
                  </div>
                </div>

                <div class="col-md-4" style="padding-left: 0">
                  <div class="form-group">
                    <div style="display: flex;justify-items: center ;align-items: flex-end">
                      <label for="studentId" style="white-space: nowrap; margin: 0">ปี</label>
                      <input type="text" class="form-control" id="studentId"
                        style="border: 0; border-bottom: 2px dotted;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div style="margin-top: 3rem">
          <div class="text-center">
            <p> โปรดส่งคืนเจ้าหน้าที่สหกิจศึกาาประจำวิชา เมื่อสิ้นสุดการปำิบันงานของนักศึกษา</p>

          </div>
        </div>

      </div>
    </div>

  </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>
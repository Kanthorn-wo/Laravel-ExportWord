<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>กยศ.</title>

  <style>
    .center-col-row {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .content-div {
      border: 1px solid black;
      display: inline-block;
      text-align: left;
    }

    .center-div {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class='col' style="border: 1px solid black ; margin: 20px 0 20px 0">
        <div class="center-col-row" style="margin-top: 20px">
          <div>
            <img src="https://archives.oarit.rmuti.ac.th/wp-content/uploads/2015/01/RMUTI_KORAT.png"
              alt="Responsive Image" style="max-width:90px">
          </div>
          <div style="margin-top: auto;">
            <img
              src="https://www.studentloan.or.th/sites/default/files/user/images/logo%E0%B8%81%E0%B8%A2%E0%B8%A8%20%E0%B8%A2%E0%B9%88%E0%B8%AD%20%282%29-01_2.jpg"
              alt="Responsive Image" style="max-width:130px">
          </div>


        </div>

        <div class="center-div" style="margin-top: 20px">
          <div class="center-col-row">
            <h5>
              <p>แบบยืนยันความประสงค์ขอกู้ยืมเงินกองทุนเงินให้กู้ยืมเพื่อการศึกษา</p>
              <p>มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน นครราชสีมา ประจำปีการศึกษา {{now()->thaidate('Y') }}</p>
              <p style="color: red">สำหรับผู้กู้ยืมรายเก่าเลื่อนชั้นปี (รหัสนักศึกษาขึ้นต้นด้วย ) {{
                now()->thaidate('y')-4 }}-{{
                now()->thaidate('y')-1 }}</p>
            </h5>
          </div>
        </div>


        <form action="{{ route('send.form', ['id' => $user->id]) }}" method="post" id="form-comment">
          @csrf
          <div style="margin: 0 100px 50px 100px">
            <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(0, 0, 0)">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group" style="padding-right: 0">
                  <div style="display: flex;justify-items: center ;align-items: flex-end">
                    <label for="studentId" style="white-space: nowrap; margin: 0">ชื่อ</label>
                    <input type="text" class="form-control" value="{{ $user->fname }}"
                      style="border: 0; border-bottom: 2px dotted;">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <div style="display: flex;justify-items: center ;align-items: flex-end">
                    <label for="studentId" style="white-space: nowrap; margin: 0">สกุล</label>
                    <input type="text" class="form-control" value="{{ $user->lname }}" style=" border: 0; border-bottom: 2px
                    dotted;">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <div style="display: flex;justify-items: center ;align-items: flex-end">
                    <label for="studentId" style="white-space: nowrap; margin: 0">เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control" value="{{ $user->tel }}"
                      style="border: 0; border-bottom: 2px dotted;">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group" style="padding-right: 0">
                  <div style="display: flex;justify-items: center ;align-items: flex-end">
                    <label for="studentId" style="white-space: nowrap; margin: 0">รหัสบัตรประจำตัวประชาชน</label>
                    <input type="text" class="form-control" value="{{ $user->personal_id }}" style=" border: 0;
                    border-bottom: 2px dotted;">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div style="display: flex;justify-items: center ;align-items: flex-end">
                    <label for="studentId" style="white-space: nowrap; margin: 0">รหัสนักศึกษา</label>
                    <input type="text" class="form-control" value="{{ $user->student_id }}"
                      style="border: 0; border-bottom: 2px dotted;">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group" style="padding-right: 0">
                  <div style="display: flex;justify-items: center ;align-items: flex-end">
                    <label for="studentId" style="white-space: nowrap; margin: 0">คณะ</label>
                    <input type="text" class="form-control" value="วิศวะกรรมศาสตร์และเทคโนโลยี" style=" border: 0;
                      border-bottom: 2px dotted;">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div style="display: flex;justify-items: center ;align-items: flex-end">
                    <label for="studentId" style="white-space: nowrap; margin: 0">สาขาวิชา</label>
                    <input type="text" class="form-control" value="วิศวกรรมคอมพิวเอตร์"
                      style="border: 0; border-bottom: 2px dotted;">
                  </div>
                </div>
              </div>
            </div>

            <div>
              <h5>
                โปรดใส่เครื่องหมาย √ ตามความประสงค์ขอกู้ยืมและใส่จ านวนเงินตามความเป็นจริง
              </h5>
            </div>

            <div style="margin-top: 20px">
              <ul style="list-style-type: none;">
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="true" name="loan_1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      ความประสงค์ขอกู้ยืมเรียนภาคเรียนที่ 1/{{now()->thaidate('Y') }}
                    </label>
                  </div>
                </li>
                <ul style="list-style-type: none;">
                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="true" name="term_expenses_1"
                        id="toggleCheckbox">
                      <label class="form-check-label" for="flexCheckDefault">
                        ค่าเล่าเรียน จำนวน <input type="text" id="textInput" readonly name="term_expenses_amout_1"
                          style="border: 0; border-bottom: 2px dotted;">บาท (ตามสถานศึกษาเรียกเก็บ)

                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="true" id="flexCheckDefault"
                        name="cost_living_1">
                      <label class="form-check-label" for="flexCheckDefault">
                        ค่าใช้จ่ายรายเดือน (3,000 บาท x 6 เดือน) รวมเป็นเงิน 18,000 บาท
                      </label>
                    </div>
                  </li>
                  <ul style="list-style-type: none;">
                    <li>
                      รวมเงินกู้ยืมในภาคเรียนที่ 1/{{now()->thaidate('Y') }} <input type="text" id="textInput" readonly
                        style="border: 0; border-bottom: 2px dotted;"> บาท
                    </li>
                  </ul>
                </ul>
                </li>

              </ul>
            </div>
            {{-- term2 --}}
            <div style="margin-top: 20px">
              <ul style="list-style-type: none;">
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="true" name="loan_2" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      ความประสงค์ขอกู้ยืมเรียนภาคเรียนที่ 2/{{now()->thaidate('Y') }}
                    </label>
                  </div>
                </li>
                <ul style="list-style-type: none;">
                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="true" name="term_expenses_2"
                        id="toggleCheckbox2">
                      <label class="form-check-label" for="flexCheckDefault">
                        ค่าเล่าเรียน จำนวน
                        <input type="text" id="textInput2" readonly name="term_expenses_amout_2"
                          style="border: 0; border-bottom: 2px dotted;">
                        บาท (ตามสถานศึกษาเรียกเก็บ)

                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="true" name="cost_living_2"
                        id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        ค่าใช้จ่ายรายเดือน (3,000 บาท x 6 เดือน) รวมเป็นเงิน 18,000 บาท
                      </label>
                    </div>
                  </li>
                  <ul style="list-style-type: none;">
                    <li>
                      รวมเงินกู้ยืมในภาคเรียนที่ 2/{{now()->thaidate('Y') }}
                      <input type="text" readonly style="border: 0; border-bottom: 2px dotted;">
                      บาท
                    </li>
                  </ul>
                </ul>
                </li>

              </ul>
            </div>

            <div style="display: flex; justify-content: flex-end">
              <div style=" max-width: 500px; margin-top: 80px; text-align: center;">
                <div class="center-col-row">
                  <p>นักศึกษา</p>
                  &nbsp;
                  <p style="border-bottom: 2px dotted;">
                    {{ $user->fname }}
                    {{ $user->lname }}
                  </p>
                  &nbsp;
                  <p>ลงชื่อ</p>
                </div>

                <div>
                  <p style="display: inline-block; border-bottom: 2px dotted;">
                    (
                    {{ $user->fname }}
                    {{ $user->lname }}
                    )
                  </p>
                </div>

                <div class="center-col-row">
                  <p>วันที่</p>
                  &nbsp;
                  <p style="border-bottom: 2px dotted;">
                    {{now()->thaidate('d')}}
                  </p>
                  &nbsp;
                  <p>เดือน</p>
                  &nbsp;
                  <p style="border-bottom: 2px dotted;">
                    {{now()->thaidate('F')}}
                  </p>
                  &nbsp;
                  <p>
                    {{now()->thaidate('Y')}}
                  </p>
                </div>
              </div>

            </div>
            <div style="text-align: center; margin-top: 50px">
              <input type="submit" value="บันทึก" class="btn btn-primary ">
            </div>
          </div>

        </form>

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

  <script>
    const toggleCheckbox = document.getElementById("toggleCheckbox");
    const textInput = document.getElementById("textInput");

    toggleCheckbox.addEventListener("change", function () {
      if (toggleCheckbox.checked) {
          textInput.readOnly = false; // Allow user input
      } else {
          textInput.readOnly = true;  // Make input read-only
          textInput.value = ""
      }
  });
  </script>

  <script>
    const toggleCheckbox2 = document.getElementById("toggleCheckbox2");
    const textInput2 = document.getElementById("textInput2"); 

    toggleCheckbox2.addEventListener("change", function () {
        if (toggleCheckbox2.checked) {
            textInput2.readOnly = false; 
        } else {
            textInput2.readOnly = true;  
            textInput2.value = "";
        }
    });
  </script>

</body>

</html>
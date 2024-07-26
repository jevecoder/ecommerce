<?php
include 'connection.php';

if (isset($_POST['signUp'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  if ($password !== $confirmPassword) {
      echo "<script>
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Passwords do not match!'
              });
            </script>";
  } else {
      // Check if the email already exists
      $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
          // Email already exists
          echo "<script>
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Email is already registered!'
          }).then(() => {
              document.getElementById('signup-form').reset(); // Reset the form
          });
        </script>";

      } else {
          // Hash the password
          $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
          $role = 'user'; // Default role

          // Insert new user into database
          $stmt = $conn->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, ?)");
          $stmt->bind_param("sss", $email, $hashedPassword, $role);

          try {
              if ($stmt->execute()) {
                  echo "<script>
                          Swal.fire({
                              icon: 'success',
                              title: 'Registration successful!',
                              showConfirmButton: false,
                              timer: 1500
                          }).then(() => {
                              window.location.href = 'index.php'; // Redirect to login page or any other page
                          });
                        </script>";
              } else {
                  echo "<script>
                          Swal.fire({
                              icon: 'error',
                              title: 'Oops...',
                              text: 'Error: Registration failed.'
                          });
                        </script>";
              }
          } catch (mysqli_sql_exception $e) {
              // Catch duplicate entry error
              if ($e->getCode() === '1062') { // MySQL error code for duplicate entry
                  echo "<script>
                          Swal.fire({
                              icon: 'error',
                              title: 'Oops...',
                              text: 'Email is already registered!'
                          });
                        </script>";
              } else {
                  echo "<script>
                          Swal.fire({
                              icon: 'error',
                              title: 'Oops...',
                              text: 'Error: " . $e->getMessage() . "'
                          });
                        </script>";
              }
          }
      }

      $stmt->close();
  }
}



if (isset($_POST['signIn'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();

      // Verify the password
      if (password_verify($password, $user['password'])) {
          $_SESSION['user_id'] = $user['id'];
          $_SESSION['user_role'] = $user['role'];
          $_SESSION['user_email'] = $user['email']; // Set the email

          // Redirect or handle user based on role
          if ($user['role'] === 'admin') {
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Login Successful!',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = 'index.php'; // Redirect to admin page
            });
          </script>";
    exit(); // Ensure the script stops executing after redirect
          } else {
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Login Successful!',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = 'index.php'; // Redirect to admin page
            });
          </script>";
    exit(); // Ensure the script stops executing after redirect
          }
      } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Invalid Email Or Password!'
        });
      </script>";
      }
  } else {
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Invalid Email Or Password!'
    });
  </script>";
  }

  $stmt->close();
}
?>


<header>
        <div class="fixed top-0 left-0 right-0 z-40 px-6 mx-auto bg-black opacity-80 py-7">
            <div class="flex items-center justify-between">
                <div class="w-full text-3xl font-semibold text-gray-300 md:text-center">
                    THE GIL OF GAMERS
                </div>
                <nav :class="isOpen ? '' : 'hidden'" class="relative sm:flex sm:justify-center sm:items-center">
                <div class="flex flex-col sm:flex-row" x-data="{ open: false,
                                                                    timer: null,
                                                                    show() {
                                                                        clearTimeout(this.timer);
                                                                        this.open = true;
                                                                    },
                                                                    hide() {
                                                                        this.timer = setTimeout(() => {
                                                                            this.open = false;
                                                                        }, 1000); // Adjust the delay time (in milliseconds) here
                                                                    }
                                                                }">
                    <a class="font-semibold text-gray-300 hover:text-white sm:mx-3 sm:mt-0" href="#">HOME</a>
    <a @mouseover="show" @mouseleave="hide" class="font-semibold text-gray-300 hover:text-white sm:mx-3 sm:mt-0" href="#">SHOP</a>

    <div x-show="open" x-transition @mouseover="show" @mouseleave="hide" class="absolute w-auto mt-6 text-center bg-black rounded-md shadow-lg pt-9 left-14">
        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-700">Product 1</a>
        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-700">Product 2</a>
        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-700">Product 3</a>
    </div>
                    <a class="font-semibold text-gray-300 hover:text-white sm:mx-3 sm:mt-0" href="#">ABOUT</a>
                    <a class="font-semibold text-gray-300 hover:text-white sm:mx-3 sm:mt-0" href="#">FORUM</a>
                    <a class="font-semibold text-gray-300 hover:text-white sm:mx-3 sm:mt-0" href="#">CONTACT</a>
                    <a class="font-semibold text-gray-300 hover:text-white sm:mx-3 sm:mt-0" href="#">GALLERY</a>
                </div>
            </nav>





                <div class="flex items-center justify-center w-full gap-4">
                <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])): ?>
                  <div :class="isOpen ? '' : 'hidden'" class="relative sm:flex sm:justify-center sm:items-center">
                  <div class="flex flex-col sm:flex-row" x-data="{ open: false,
                                                                    timer: null,
                                                                    show() {
                                                                        clearTimeout(this.timer);
                                                                        this.open = true;
                                                                    },
                                                                    hide() {
                                                                        this.timer = setTimeout(() => {
                                                                            this.open = false;
                                                                        }, 1000); // Adjust the delay time (in milliseconds) here
                                                                    }
                                                                }">
                    <img @mouseover="show" @mouseleave="hide" class="rounded-full w-9 h-9" src="./public/image-removebg-preview.png" alt="Rounded avatar">
                    <div x-show="open" x-transition @mouseover="show" @mouseleave="hide" class="absolute w-auto text-center bg-black rounded-md shadow-lg mt-7 -left-6 pt-9">
                    <a href="profile.php" class="block px-4 py-2 text-white hover:bg-gray-700">Profile</a>
                    
                    <script>
                      function confirmLogout(event) {
        event.preventDefault(); // Prevent default behavior (i.e., following the link)

        Swal.fire({
            icon: 'question',
            title: 'Are you sure you want to log out?',
            showCancelButton: true,
            confirmButtonText: 'Yes, Log Out',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to logout.php after confirmation
                window.location.href = 'logout.php';
            }
        });

        return false; // Prevent the link from being followed
    }
                    </script>
            <?php if ($_SESSION['user_role'] === 'admin'): ?>
                    <a href="./admin/admin_dashboard.php" class="block px-4 py-2 text-white hover:bg-gray-700">Management</a>
                <?php endif; ?>
                <a href="logout.php" onclick="return confirmLogout(event);" class="block px-4 py-2 text-white hover:bg-gray-700">Exit</a>
            </div>
            </div>
            </div>
        <?php else: ?>
            <button class="font-semibold text-gray-300 hover:text-white sm:mx-3 sm:mt-0" onclick="openModal()" type="button">Log In</button>
        <?php endif; ?>

                    <button @click="cartOpen = !cartOpen" class="flex flex-row gap-1 mx-4 text-gray-600 focus:outline-none sm:mx-0">
                        <svg class="w-5 h-5 mt-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <p>0</p>
                    </button>

                    <div class="flex sm:hidden">
                        <button @click="isOpen = !isOpen" type="button" class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </header>

    <!-- Login and Register Modal -->
    <div id="authModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>

    <!-- Login Section -->
    <div id="loginSection">
      <h2>Login</h2>
      <form action="" method="post" id="loginForm">
        <div class="grid grid-rows-2">
          <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
              <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0">
                Email
              </label>
            </div>
            <div class="md:w-2/3">
              <div class="relative">
                <input name="email" class="w-full px-4 py-2 pr-10 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-purple-500" type="email" required>
              </div>
            </div>
          </div>

          <div class="relative mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
              <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0" for="loginPassword">
                Password
              </label>
            </div>
            <div class="md:w-2/3">
              <div class="relative">
                <input id="loginPassword" name="password" class="w-full px-4 py-2 pr-10 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-purple-500" type="password" placeholder="******************" required>
                <div id="toggleLoginPassword" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                  <i id="loginEyeIcon" class="text-gray-500 fas fa-eye"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button type="submit" value="sign in" name="signIn" class="px-4 py-2 font-bold text-white bg-purple-500 rounded shadow hover:bg-purple-400 focus:shadow-outline focus:outline-none" onclick="login()">Login</button>
      </form>
      <p>Don't have an account? <a href="#" id="showRegister">Register</a></p>
    </div>

    <!-- Register Section -->
    <div id="registerSection" style="display:none;">
      <h2>Register</h2>
      <form action="" method="post" id="registerForm">
        <div class="grid grid-rows-2">
          <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
              <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0" for="registerEmail">
                Email
              </label>
            </div>
            <div class="md:w-2/3">
              <input id="registerEmail" name="email" class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-purple-500" type="email" required>
            </div>
          </div>

          <div class="relative mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
              <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0" for="registerPassword">
                Password
              </label>
            </div>
            <div class="md:w-2/3">
              <div class="relative">
                <input id="registerPassword" name="password" class="w-full px-4 py-2 pr-10 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-purple-500" type="password" placeholder="******************" required>
                <div id="toggleRegisterPassword" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                  <i id="registerEyeIcon" class="text-gray-500 fas fa-eye"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="relative mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
              <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0" for="registerConfirmPassword">
                Confirm Password
              </label>
            </div>
            <div class="md:w-2/3">
              <div class="relative">
                <input id="registerConfirmPassword" name="confirmPassword" class="w-full px-4 py-2 pr-10 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-purple-500" type="password" placeholder="******************" required>
                <div id="toggleConfirmPassword" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                  <i id="confirmEyeIcon" class="text-gray-500 fas fa-eye"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button type="submit" value="sign up" name="signUp" class="px-4 py-2 font-bold text-white bg-purple-500 rounded shadow hover:bg-purple-400 focus:shadow-outline focus:outline-none" onclick="register()">Register</button>
      </form>
      <p>Already have an account? <a href="#" id="showLogin">Login</a></p>
    </div>
  </div>
</div>

<script>
// Toggle Password Visibility for Login
document.getElementById('toggleLoginPassword').addEventListener('click', function () {
    const passwordField = document.getElementById('loginPassword');
    const eyeIcon = document.getElementById('loginEyeIcon');

    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      eyeIcon.classList.remove('fa-eye');
      eyeIcon.classList.add('fa-eye-slash');
    } else {
      passwordField.type = 'password';
      eyeIcon.classList.remove('fa-eye-slash');
      eyeIcon.classList.add('fa-eye');
    }
  });

  // Toggle Password Visibility for Registration
  document.getElementById('toggleRegisterPassword').addEventListener('click', function () {
    const passwordField = document.getElementById('registerPassword');
    const eyeIcon = document.getElementById('registerEyeIcon');

    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      eyeIcon.classList.remove('fa-eye');
      eyeIcon.classList.add('fa-eye-slash');
    } else {
      passwordField.type = 'password';
      eyeIcon.classList.remove('fa-eye-slash');
      eyeIcon.classList.add('fa-eye');
    }
  });

  // Toggle Password Visibility for Confirm Password
  document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
    const passwordField = document.getElementById('registerConfirmPassword');
    const eyeIcon = document.getElementById('confirmEyeIcon');

    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      eyeIcon.classList.remove('fa-eye');
      eyeIcon.classList.add('fa-eye-slash');
    } else {
      passwordField.type = 'password';
      eyeIcon.classList.remove('fa-eye-slash');
      eyeIcon.classList.add('fa-eye');
    }
  });




    function openModal() {
    document.getElementById('authModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('authModal').style.display = 'none';
}

// Close the modal when clicking on the close button
document.querySelector('.modal .close').addEventListener('click', closeModal);

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === document.getElementById('authModal')) {
        closeModal();
    }
});

document.getElementById('showRegister').addEventListener('click', function() {
    document.getElementById('loginSection').style.display = 'none';
    document.getElementById('registerSection').style.display = 'block';
});

document.getElementById('showLogin').addEventListener('click', function() {
    document.getElementById('loginSection').style.display = 'block';
    document.getElementById('registerSection').style.display = 'none';
});

</script>



<style>
 /* Modal Styles */
.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    /* overflow: auto; */
    background-color: rgba(0, 0, 0, 0.4); /* Black background with opacity */
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from top and center */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    max-width: 500px;
}

/* Close button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

</style>
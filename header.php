<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <?php wp_head()?>
  </head>
  <body>
      
      <header class="header">
        <div class="container">
          <div class="header__wrapper d--flex justify--between align--center">
            <?php the_custom_logo() ?>
            <nav class="nav">
              <ul class="d--flex">
                <?php wp_menu_li() ?>
              </ul>
            </nav>

            <div class="toggle__menu">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </header>

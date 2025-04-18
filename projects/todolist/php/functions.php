<?php
function waiter(){
    insertT();
    deleteT();
    editT();
}

function insertT(){
    if (!empty($_GET['items'])) {
        $insert = new insert($_GET['items']);
        if ($insert->insertTask()) {
            echo '<div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congratulations! You have successfully added a task.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        } else {
            echo '<div class="col-md-12 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> Inserted Task Error!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        }
    }
}

function deleteT(){
    if (!empty($_GET['delete'])) {
        $delete = new delete($_GET['delete']);
        if ($delete->deleteTask()) {
            echo '<div class="col-md-12 alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Congratulations! You have successfully deleted a task.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        } else {
            echo '<div class="col-md-12 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> Delete Task Error!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        }
    }
}

function editT(){
    if (!empty($_GET['edit'])) {
        $edit = new edit($_GET['edit']);
        if ($edit->editTask()) {
            echo '<div class="col-md-12 alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Congratulations! You have successfully completed the task.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        } else {
            echo '<div class="col-md-12 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> Task Completion Error!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        }
    }
}

function viewTable(){
    $view = new view();
    $view->viewData();
    $view->viewCompletedData();
}
 ?>

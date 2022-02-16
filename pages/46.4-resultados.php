<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- card panel -->
                <section class="card-panel">

                    <!-- header votings -->
                    <?php require('_includes/_headerVoting.php'); ?>
                    <!-- end header votings -->

                    <!-- alert instructions -->
                    <?php require('_includes/_alertVote.php'); ?>
                    <!-- end instructions -->

                    <!-- steps avaliação -->
                    <?php
                        $stepCurrent = 4;
                        require('_includes/_stepsVoting.php');
                    ?>
                    <!-- end steps avaliação -->
                </section>
                <!-- end card panel -->

                <!-- card avaliacao -->
                <section class="row">
                    <div class="col-12">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="fw-600">4. RESULTADOS</label>
                                <textarea name="bem_estar" rows="16" class="form-control border-1-black" required>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</textarea>
                            </div>

                            <!-- Voting Notes  -->
                            <?php require('_includes/_votingNotes.php'); ?>
                            <!-- End Voting Notes  -->

                            <!-- Buttons Voting Notes  -->
                            <?php require('_includes/_buttonsVotingNotes.php'); ?>
                            <!-- End Buttons Voting Notes  -->

                            
                            
                            
                        </form>
                        
                    </div>
                </section>
                <!-- end card avaliacao -->

            </div>
        </div>
    </div>
</main>
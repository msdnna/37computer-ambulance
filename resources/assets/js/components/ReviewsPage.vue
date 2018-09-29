<template id="reviews-page">
    <main>
        <div class="container">
            <!-- Плитка отзывов -->
            <section>
                <h2 class="my-4 h3 text-center con-page-title">ОТЗЫВЫ</h2>
                <div class="row features-small wow fadeIn">
                    <!-- Получаем массив элементов из базы данных методом filteredReviews -->
                    <div class="col-xl-3 col-lg-6 con-block" v-for="(review) in filteredReviews">
                        <div class="row">
                            <div class="col-10 pl-3 con-text">
                                <!-- Название выносим переменной reviews.name, а описание review.review. Дата вынесена как review.created_at -->
                                <h5 class="feature-title font-bold con-title-leftr">{{ review.name }} <font class="con-date-leftr">{{ review.created_at }}</font></h5>
                                <p class="grey-text con-desc-leftr" v-html="review.review"></p>
                            </div>
                            <!-- Фантомный блок, нужен для закраски блока в синий цвет -->
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-comments-o fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Модальное окно создания отзыва -->
            <div class="modal fade right" id="create-review" tabindex="-1" role="dialog" aria-labelledby="createReviewModal" aria-hidden="true">
                <div class="modal-dialog modal-notify modal-info modal-side modal-bottom-right" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header">
                            <p class="heading">Добавить новый отзыв</p>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color: #fff;">&times;</span>
                            </button>
                        </div>
                        <!-- Form addReview method -->
                        <form v-on:submit.prevent = "addReview">
                            <!--Body-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="add-name">Ваше имя</label>
                                    <input id="add-name" v-model="review.name" class="form-control" placeholder="Введите Ваше имя" maxlength="26" autocomplete="off" required />
                                </div>
                                <div class="form-group">
                                    <label for="add-review">Отзыв</label>
                                    <textarea class="form-control" rows="4" placeholder="Напишите Ваш отзыв" maxlength="100" autocomplete="off" style="resize: none;" v-model="review.review"></textarea>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-bottom-outline-primary waves-effect" onclick="
                                    alert('Спасибо! Ваш отзыв появится после проверки модератором.');
                                    $('#create-review').modal('hide');
                                    $('body').removeClass('modal-open');
                                    $('.modal-backdrop').remove();">
                                    <i class="fa fa-check mr-1 con-fa-icon"></i>
                                    Отправить
                                </button>
                                <router-link class="btn btn-bottom-outline-danger waves-effect" data-dismiss="modal" v-bind:to="'/show/reviews'">Назад</router-link>
                            </div>
                        </form>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!-- Кнопка вызова модального окна - добавить новый отзыв -->
            <a id="btn-create-review" class="btn purple-gradient btn-lg waves-effect waves-light" style="border-radius: 50%; padding: 1rem 1.3rem;" href="" data-toggle="modal" data-target="#create-review">
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </main>
</template>

<script>
    export default {
        name: "ReviewsPage",
        data: function() {
            return { reviews: '', review: { name: '', review: '' }};
        },
        created: function() {
            let uri = 'https://37computer-ambulance.ru/reviews';
            Axios.get(uri).then((response) => {
                this.reviews = response.data
            });
        },
        computed: {
            filteredReviews: function() {
                if(this.reviews.length) {
                    return this.reviews;
                }
            }
        },
        mounted: function(){
            $(".btn-create-review").click(function() {
                $("#createReviewModal").modal('show');
            });
        },
        methods: {
            addReview: function() {
                let uri = 'https://37computer-ambulance.ru/reviews';
                Axios.post(uri, this.review).then((response) => {
                    this.$router.push({ name: 'ReviewsPage' })
                })
            }
        }
    }
</script>

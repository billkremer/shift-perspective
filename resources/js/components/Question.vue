<template>
    <div class="light-outline text-center">
        <p class="question-text">{{question.question}}</p>
        <div class="radio-stretch">
        <span class="text-danger">Disagree</span>

        <input type="radio" :id="questionId + 1" 
            :name="questionName" value="1" required="required">
        <label :for="questionId + 1" class="sr-only sr-only-focusable" aria-label="Completely Disagree">1, </label>

        <input type="radio" :id="questionId + 2"
            :name="questionName" value="2" required="required">
        <label :for="questionId + 2" class="sr-only sr-only-focusable" aria-label="Strongly Disagree">2</label>

        <input type="radio" :id="questionId + 3"
            :name="questionName" value="3" required="required">
        <label :for="questionId + 3" class="sr-only sr-only-focusable" aria-label="Disagree Somewhat">3</label>

        <input type="radio" :id="questionId + 4"
            :name="questionName" value="4" required="required">
        <label :for="questionId + 4" class="sr-only sr-only-focusable" aria-label="Neutral">4</label>

        <input type="radio" :id="questionId + 5"
            :name="questionName" value="5" required="required">
        <label :for="questionId + 5" class="sr-only sr-only-focusable" aria-label="Agree Somewhat">5</label>

        <input type="radio" :id="questionId + 6"
            :name="questionName" value="6" required="required">
        <label :for="questionId + 6" class="sr-only sr-only-focusable" aria-label="Strongly Agree">6</label>

        <input type="radio" :id="questionId + 7"
            :name="questionName" value="7" required="required">
        <label :for="questionId + 7" class="sr-only sr-only-focusable" aria-label="Completely Agree">7</label>

        <span class="text-success">Agree</span>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.$nextTick(function () {
                // console.log('Component mounted.', this.question)
        
            });
        },

        data: function () {
            return {
                questionId: 'question' + this.question.id + 'Answer',
                questionName: 'questionAnswer-' + this.question.id,

            }
        },

        props: ['question'],

    }
</script>

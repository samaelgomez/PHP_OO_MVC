<template>
  <div id="container">
    <JqxHeatMap ref="myHeatMap" :source="source" :xAxis="xAxis" :yAxis="yAxis" :title="title"></JqxHeatMap>

    <div class="options">
      <JqxCheckBox
        @change="onCheckedXAxis($event)"
        :width="170"
        :height="25"
        :checked="true"
      >Reverse X-Axis Origin</JqxCheckBox>
      <JqxCheckBox
        @change="onCheckedYAxis($event)"
        :width="170"
        :height="25"
        :checked="true"
      >Reverse Y-Axis Origin</JqxCheckBox>
    </div>
  </div>
</template>

<script>
import JqxHeatMap from "jqwidgets-scripts/jqwidgets-vue/vue_jqxheatmap.vue";
import JqxCheckBox from "jqwidgets-scripts/jqwidgets-vue/vue_jqxcheckbox.vue";

export default {
  components: {
    JqxHeatMap,
    JqxCheckBox
  },
  data: function() {
    return {
      source: [
        [89, 39, 94, 55, 3],
        [53, 38, 26, 68, 33],
        [22, 0, 66, 90, 78],
        [97, 68, 68, 3, 99],
        [47, 47, 88, 6, 1],
        [73, 23, 3, 79, 100],
        [21, 86, 13, 33, 0],
        [53, 81, 95, 79, 66],
        [74, 68, 88, 51, 43],
        [10, 12, 78, 14, 21],
        [55, 58, 12, 82, 99],
        [88, 23, 86, 59, 53]
      ],
      xAxis: {
        labels: [
          "John",
          "Marry",
          "Alba",
          "Steven",
          "Josh",
          "Alica",
          "Robert",
          "Kim",
          "Ann",
          "Paul",
          "Regina",
          "Dorothy"
        ],
        isInversed: true
      },
      yAxis: {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri"],
        isInversed: true
      },
      title: "Car sales revenue per employee(in 1000 &euro;)"
    };
  },
  methods: {
    onCheckedXAxis: function(event) {
      let value = event.args.checked;
      this.$refs.myHeatMap.reverseXAxisPosition(value);
    },
    onCheckedYAxis: function(event) {
      let value = event.args.checked;
      this.$refs.myHeatMap.reverseYAxisPosition(value);
    }
  }
};
</script>

<style>
#container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

#container > :first-child {
  width: 100%;
  max-width: 1000px;
}

.options {
  margin: 50px;
}

.options > :first-child {
  margin-bottom: 20px;
}
</style>
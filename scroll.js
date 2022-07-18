import "https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js";

const scrollTracker = document.querySelector(".scroll-tracker");

const animatedPre = document.querySelector(".code-wrapper");

const scrollTrackingTimeline = new ScrollTimeline({
  source: document.scrollingElement,
  orientation: "block",
  scrollOffsets: [CSS.percent(20), CSS.percent(80)],
});

const animatedPreTimeline = new ScrollTimeline({
  scrollOffsets: [
    { target: animatedPre, edge: "end", threshold: "1" },
    { target: animatedPre, edge: "start", threshold: "1" },
  ],
});

scrollTracker.animate(
  {
    transform: ["scaleX(0)", "scaleX(1)"],
  },
  {
    duration: 1,
    timeline: scrollTrackingTimeline,
  }
);

animatedPre.animate(
  {
    transform: [
      "perspective(1000px) rotateX(45deg)",
      "perspective(1000px) rotate(0)",
    ],
    opacity: ["0", "1"],
  },
  {
    duration: 1,
    timeline: animatedPreTimeline,
  }
);

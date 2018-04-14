YUI().use(
  'aui-scheduler',
  function(Y) {
    var events = [
      {
        content: 'Partial Lunar Eclipse',
        endDate: new Date(2013, 3, 25, 5),
        startDate: new Date(2013, 3, 25, 1)
      }
    ];

    var weekView = new Y.SchedulerWeekView();

    new Y.Scheduler(
      {
        activeView: weekView,
        boundingBox: '#myScheduler',
        date: new Date(2013, 3, 25),
        items: events,
        render: true,
        views: [weekView]
      }
    );
  }
);
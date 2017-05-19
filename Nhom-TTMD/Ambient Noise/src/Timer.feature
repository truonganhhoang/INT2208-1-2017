Fearture: Testing UI, theme, count down and button in Timer router

Background:
Given   : Ran is being in timer page in beta version
When    : Ran see 3 button to change router
And     : Ran see 8 button timer include 7 button time was set and 1 button custom time
And     : 1 button dialog choose noise
And     : Ran click on 1 minutes
Then    : Time count down from 60 seconds
When    : Time count down is over, a messenger "Time out!" appear 
And     : Audio is stoped

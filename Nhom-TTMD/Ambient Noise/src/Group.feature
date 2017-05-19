Fearture: Testing UI, theme, count down and button in Group router

Background:
Given   : Ran is being in group page in beta version
When    : Ran see 3 button to change router
And     : Ran see 7 button timer include 6 button have group was set, 1 button use to create group and 1 button to clear all noise
And     : Ran click on button sea
Then    : Sea sound is activated
When    : Ran click on button Clear Noise
Then    : Audio is stoped
When    : Ran click on button Create your own
Then    : A dialog appear to choose audio 
When    : Ran choose Rain, Cafe, Wind, Sea
And     : Ran type "creative" in text field name "Sound name:"
And     : Ran press button summit
Then    : A new button name "creative" apear above Create your own button
When    : Ran click on button creative
Then    : Audio include Rain, Cafe, Wind, Sea is activated
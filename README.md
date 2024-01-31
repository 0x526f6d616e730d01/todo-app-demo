# TODO App

Having not used Laravel much in a little while, I was pleasantly reminded about how easy it becomes to create migrations. What became less pleasant was an issue with the ORM of which I wasn't able to identify, and it's for this reason I regret to inform the task is only half complete. I believe it's a simple fix but I didn't quite have time to fully drill down into it.

I have a similar project to this that I would be more than willing to demonstrate which is a spin on the CRUD system as a HR app with a few tweaks such as serverside validation. This one is mostly complete although I wasn't able to tackle an issue with CSRF tokens that I wasn't able to finish in the time period, being unfamiliar with specifically how they are implemented in Laravel.

For some reason on the index page, calls to `TodoCard::all()` correctly report all of the data, but adding `TodoCard` as a parameter to a function seems to not correctly map an object, which leads to the `{{ route('todo.update', ['todo' => $card]) }}` call failing, reporting a missing parameter. On the same implementation in the other project, when data is missing it correctly responds a 404. I believe it's more likely than not that I've simply missed a call to correctly associate `TodoCard` with IDs somewhere.

For the UI, it's loosely modelled from Google Keep, I wanted to include an input field to easily add cards and a popup for editing them but I wasn't able to achieve this within the timescale. When working on this normally, I would like to plan it out in sketches or Affinity Designer, also because this wasn't using any styling library or design system, some parts are a tad inconsistent.

Doing it again, I would definitely want to solidify my nomenclature first as there's references to cards, todos, and stickies in different places which can make different parts of the code hard and styling hard to follow.

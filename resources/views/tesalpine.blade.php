<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Alpine.js</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div x-data="{name: 'Arista Adiguna'}" class="container mx-auto w-1/2 px-4 text-center mt-10 bg-lime-600 rounded-lg shadow-lg">
        <h1 class="font-mono text-white ">Apa Kabar <span x-text="name"></span></h1>
    </div>

    <div class="container mx-auto w-1/4 text-center mt-5 bg-lime-300 p-10 rounded-xl shadow">
        <div x-data="{open: false}">
            <button @click="open = !open" x-text="open ? 'Close' : 'Open' " class="py-2 px-5 bg-slate-500 text-white rounded-mg">Open</button>

            <div x-show="open" x-transition.duration.500ms class="w-3/4 mx-auto mt-4 p-5 bg-blue-400 rounded-mg text-white">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur iure laudantium qui dolore corrupti, error doloribus? Laborum rerum harum ex sint molestias at neque, omnis obcaecati quidem aliquid iure accusantium.
            </div>
        </div>
    </div>

    <div x-data="{input: '', todos:['Gaming']}" class="mx-auto flex flex-col items-center justify-center mt-5 p-4 bg-red-500 w-1/2 text-center">
        <h1 class="">My To Do List</h1>
        <div class="flex w-full">
            <input x-model="input" type="text" placeholder="Input....." class="flex-1 pl-2">
            <button @click="input != '' ?  todos.push(input) : alert('Input Something')" class="bg-gray-400 w-32"><span><b>Add</b></span></button>
        </div>

        <ul class="mx-auto flex flex-col items-start justify-start w-full text-center pl-0 mt-1">
            <template x-for="todo in todos">
                <li class="odd:bg-white even:bg-slate-400 w-full">
                    <span x-text="todo"></span>
                    <button @click="console.log( todos.filter((value) => value != todo))">x</button>
                </li>
            </template>
        </ul>
    </div>

    <div x-init="console.log('I\'m being initialized!')"></div>

    <!-- <div x-data="{ message: '' }">
        <input type="text" x-model="message">

        <button x-on:click="message = 'changed'">Change Message</button>
    </div> -->

    <!-- <ul x-data="{ colors: ['Red', 'Orange', 'Yellow'] }">
        <template x-for="(color, index) in colors">
            <li>
                <span x-text="index + ': '"></span>
                <span x-text="color"></span>
            </li>
        </template>
    </ul> -->

    <!-- <div x-data @foo="alert('Button Was Clicked!')">
        <button @click="$dispatch('foo')">...</button>
    </div> -->

    <div x-data="{ number: 5 }">
        <div x-data="{ count: 0 }" x-modelable="count" x-model="number">
            <button @click="count++">Increment</button>

        </div>

        Number: <span x-text="number"></span>
    </div>
</body>

</html>
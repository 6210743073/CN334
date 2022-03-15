@extends('layouts.app')

@section('content')

@include('layouts.Herosection')
@include('layouts.Timeline')
<section class="lg:py-12 lg:flex lg:justify-center">
    <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
        <div class="lg:w-1/2">
            <div class="h-full bg-cover rounded-l-lg " style="background-image:url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')"></div>
        </div>

        <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">EXPERIENCE</h2>
            <p class="mt-4 text-gray-600 dark:text-gray-400">As for the time from 8 pm-6 pm,
                I will use it to develop a website that interests me. To improve my skills, I tried new tools that I had never used and continued to monitor my results.</p>

            <div class="mt-8">
                <a href="/blog" class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700">WORK EXPERIENCE</a>
            </div>
        </div>
    </div>
</section>
<section class="dark:bg-coolGray-800 dark:text-coolGray-100">
    <div class="container p-6 mx-auto space-y-6 text-center lg:p-8 lg:space-y-8">
        <h2 class="text-3xl font-bold">Fully compatible with</h2>
        <div class="flex flex-wrap justify-center lg:justify-between">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Angular" class="w-12 h-12 mx-10 my-6 fill-current md:mx-12 lg:m-0 dark:text-coolGray-400">
             
                <path d="M13.24 16.859h5.51l-2.755-6.542zM15.995 0.010l-15.078 5.307 2.297 19.677 12.781 6.995 12.786-6.984 2.297-19.688-15.083-5.302zM25.406 24.406h-3.516l-1.896-4.667h-8l-1.896 4.667h-3.516l9.411-20.865z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Plain HTML" class="w-12 h-12 mx-10 my-6 fill-current md:mx-12 lg:m-0 dark:text-coolGray-400">
               
                <path d="M2 0h28l-2.547 28.75-11.484 3.25-11.417-3.25zM11.375 13l-0.307-3.625 13.411 0.005 0.307-3.495-17.573-0.005 0.932 10.682h12.167l-0.432 4.568-3.88 1.068-3.938-1.078-0.255-2.813h-3.479l0.443 5.563 7.229 1.932 7.172-1.927 0.99-10.875z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Next.js" class="w-12 h-12 mx-10 my-6 fill-current md:mx-12 lg:m-0 dark:text-coolGray-400">
                
                <path d="M23.749 30.005c-0.119 0.063-0.109 0.083 0.005 0.025 0.037-0.015 0.068-0.036 0.095-0.061 0-0.021 0-0.021-0.1 0.036zM23.989 29.875c-0.057 0.047-0.057 0.047 0.011 0.016 0.036-0.021 0.068-0.041 0.068-0.047 0-0.027-0.016-0.021-0.079 0.031zM24.145 29.781c-0.057 0.047-0.057 0.047 0.011 0.016 0.037-0.021 0.068-0.043 0.068-0.048 0-0.025-0.016-0.020-0.079 0.032zM24.303 29.688c-0.057 0.047-0.057 0.047 0.009 0.015 0.037-0.020 0.068-0.041 0.068-0.047 0-0.025-0.016-0.020-0.077 0.032zM24.516 29.547c-0.109 0.073-0.147 0.12-0.047 0.068 0.067-0.041 0.181-0.131 0.161-0.131-0.043 0.016-0.079 0.043-0.115 0.063zM14.953 0.011c-0.073 0.005-0.292 0.025-0.484 0.041-4.548 0.412-8.803 2.86-11.5 6.631-1.491 2.067-2.459 4.468-2.824 6.989-0.129 0.88-0.145 1.14-0.145 2.333 0 1.192 0.016 1.448 0.145 2.328 0.871 6.011 5.147 11.057 10.943 12.927 1.043 0.333 2.136 0.563 3.381 0.704 0.484 0.052 2.577 0.052 3.061 0 2.152-0.24 3.969-0.771 5.767-1.688 0.276-0.14 0.328-0.177 0.291-0.208-0.88-1.161-1.744-2.323-2.609-3.495l-2.557-3.453-3.203-4.745c-1.068-1.588-2.14-3.172-3.229-4.744-0.011 0-0.025 2.109-0.031 4.681-0.011 4.505-0.011 4.688-0.068 4.792-0.057 0.125-0.151 0.229-0.276 0.287-0.099 0.047-0.188 0.057-0.661 0.057h-0.541l-0.141-0.088c-0.088-0.057-0.161-0.136-0.208-0.229l-0.068-0.141 0.005-6.271 0.011-6.271 0.099-0.125c0.063-0.077 0.141-0.14 0.229-0.187 0.131-0.063 0.183-0.073 0.724-0.073 0.635 0 0.74 0.025 0.907 0.208 1.296 1.932 2.588 3.869 3.859 5.812 2.079 3.152 4.917 7.453 6.312 9.563l2.537 3.839 0.125-0.083c1.219-0.813 2.328-1.781 3.285-2.885 2.016-2.308 3.324-5.147 3.767-8.177 0.129-0.88 0.145-1.141 0.145-2.333 0-1.193-0.016-1.448-0.145-2.328-0.871-6.011-5.147-11.057-10.943-12.928-1.084-0.343-2.199-0.577-3.328-0.697-0.303-0.031-2.371-0.068-2.631-0.041zM21.5 9.688c0.151 0.072 0.265 0.208 0.317 0.364 0.027 0.084 0.032 1.823 0.027 5.74l-0.011 5.624-0.989-1.52-0.995-1.521v-4.083c0-2.647 0.011-4.131 0.025-4.204 0.047-0.167 0.161-0.307 0.313-0.395 0.124-0.063 0.172-0.068 0.667-0.068 0.463 0 0.541 0.005 0.645 0.063z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50" style=" fill:#000000;">
                <path d="M 43.335938 4 L 6.667969 4 C 5.195313 4 4 5.195313 4 6.667969 L 4 43.332031 C 4 44.804688 5.195313 46 6.667969 46 L 43.332031 46 C 44.804688 46 46 44.804688 46 43.335938 L 46 6.667969 C 46 5.195313 44.804688 4 43.335938 4 Z M 27 36.183594 C 27 40.179688 24.65625 42 21.234375 42 C 18.140625 42 15.910156 39.925781 15 38 L 18.144531 36.097656 C 18.75 37.171875 19.671875 38 21 38 C 22.269531 38 23 37.503906 23 35.574219 L 23 23 L 27 23 Z M 35.675781 42 C 32.132813 42 30.121094 40.214844 29 38 L 32 36 C 32.816406 37.335938 33.707031 38.613281 35.589844 38.613281 C 37.171875 38.613281 38 37.824219 38 36.730469 C 38 35.425781 37.140625 34.960938 35.402344 34.199219 L 34.449219 33.789063 C 31.695313 32.617188 29.863281 31.148438 29.863281 28.039063 C 29.863281 25.179688 32.046875 23 35.453125 23 C 37.878906 23 39.621094 23.84375 40.878906 26.054688 L 37.910156 27.964844 C 37.253906 26.789063 36.550781 26.328125 35.453125 26.328125 C 34.335938 26.328125 33.628906 27.039063 33.628906 27.964844 C 33.628906 29.109375 34.335938 29.570313 35.972656 30.28125 L 36.925781 30.691406 C 40.171875 32.078125 42 33.496094 42 36.683594 C 42 40.117188 39.300781 42 35.675781 42 Z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="React" class="w-12 h-12 mx-10 my-6 fill-current md:mx-12 lg:m-0 dark:text-coolGray-400">
                
                <path d="M16 13.146c-1.573 0-2.854 1.281-2.854 2.854s1.281 2.854 2.854 2.854c1.573 0 2.854-1.281 2.854-2.854s-1.281-2.854-2.854-2.854zM8.010 21.672l-0.63-0.156c-4.688-1.188-7.38-3.198-7.38-5.521s2.693-4.333 7.38-5.521l0.63-0.156 0.177 0.625c0.474 1.635 1.083 3.229 1.818 4.771l0.135 0.281-0.135 0.286c-0.734 1.536-1.344 3.13-1.818 4.771zM7.089 11.932c-3.563 1-5.75 2.536-5.75 4.063s2.188 3.057 5.75 4.063c0.438-1.391 0.964-2.745 1.578-4.063-0.615-1.318-1.141-2.672-1.578-4.063zM23.99 21.672l-0.177-0.625c-0.474-1.635-1.083-3.229-1.818-4.766l-0.135-0.286 0.135-0.286c0.734-1.536 1.344-3.13 1.818-4.771l0.177-0.62 0.63 0.156c4.688 1.188 7.38 3.198 7.38 5.521s-2.693 4.333-7.38 5.521zM23.333 15.995c0.641 1.385 1.172 2.745 1.578 4.063 3.568-1.005 5.75-2.536 5.75-4.063s-2.188-3.057-5.75-4.063c-0.438 1.385-0.964 2.745-1.578 4.063zM7.078 11.927l-0.177-0.625c-1.318-4.646-0.917-7.979 1.099-9.141 1.979-1.141 5.151 0.208 8.479 3.625l0.453 0.464-0.453 0.464c-1.182 1.229-2.26 2.552-3.229 3.958l-0.182 0.255-0.313 0.026c-1.703 0.135-3.391 0.406-5.047 0.813zM9.609 3.089c-0.359 0-0.677 0.073-0.943 0.229-1.323 0.766-1.557 3.422-0.646 7.005 1.422-0.318 2.859-0.542 4.313-0.672 0.833-1.188 1.75-2.323 2.734-3.391-2.078-2.026-4.047-3.172-5.458-3.172zM22.396 30.234c-0.005 0-0.005 0 0 0-1.901 0-4.344-1.427-6.875-4.031l-0.453-0.464 0.453-0.464c1.182-1.229 2.26-2.552 3.229-3.958l0.177-0.255 0.313-0.031c1.703-0.13 3.391-0.401 5.052-0.813l0.63-0.156 0.177 0.625c1.318 4.646 0.917 7.974-1.099 9.135-0.49 0.281-1.042 0.422-1.604 0.411zM16.932 25.729c2.078 2.026 4.047 3.172 5.458 3.172h0.005c0.354 0 0.672-0.078 0.938-0.229 1.323-0.766 1.563-3.422 0.646-7.005-1.422 0.318-2.865 0.542-4.313 0.667-0.833 1.193-1.75 2.323-2.734 3.396zM24.922 11.927l-0.63-0.161c-1.661-0.406-3.349-0.677-5.052-0.813l-0.313-0.026-0.177-0.255c-0.969-1.406-2.047-2.729-3.229-3.958l-0.453-0.464 0.453-0.464c3.328-3.417 6.5-4.766 8.479-3.625 2.016 1.161 2.417 4.495 1.099 9.141zM19.667 9.651c1.521 0.141 2.969 0.365 4.313 0.672 0.917-3.583 0.677-6.24-0.646-7.005-1.318-0.76-3.797 0.406-6.401 2.943 0.984 1.073 1.896 2.203 2.734 3.391zM9.609 30.234c-0.563 0.010-1.12-0.13-1.609-0.411-2.016-1.161-2.417-4.49-1.099-9.135l0.177-0.625 0.63 0.156c1.542 0.391 3.24 0.661 5.047 0.813l0.313 0.031 0.177 0.255c0.969 1.406 2.047 2.729 3.229 3.958l0.453 0.464-0.453 0.464c-2.526 2.604-4.969 4.031-6.865 4.031zM8.021 21.667c-0.917 3.583-0.677 6.24 0.646 7.005 1.318 0.75 3.792-0.406 6.401-2.943-0.984-1.073-1.901-2.203-2.734-3.396-1.453-0.125-2.891-0.349-4.313-0.667zM16 22.505c-1.099 0-2.224-0.047-3.354-0.141l-0.313-0.026-0.182-0.26c-0.635-0.917-1.24-1.859-1.797-2.828-0.563-0.969-1.078-1.958-1.557-2.969l-0.135-0.286 0.135-0.286c0.479-1.010 0.995-2 1.557-2.969 0.552-0.953 1.156-1.906 1.797-2.828l0.182-0.26 0.313-0.026c2.234-0.188 4.479-0.188 6.708 0l0.313 0.026 0.182 0.26c1.276 1.833 2.401 3.776 3.354 5.797l0.135 0.286-0.135 0.286c-0.953 2.021-2.073 3.964-3.354 5.797l-0.182 0.26-0.313 0.026c-1.125 0.094-2.255 0.141-3.354 0.141zM13.073 21.057c1.969 0.151 3.885 0.151 5.859 0 1.099-1.609 2.078-3.302 2.927-5.063-0.844-1.76-1.823-3.453-2.932-5.063-1.948-0.151-3.906-0.151-5.854 0-1.109 1.609-2.089 3.302-2.932 5.063 0.849 1.76 1.828 3.453 2.932 5.063z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50" style=" fill:#000000;">
                <path d="M45,4H5C4.447,4,4,4.448,4,5v40c0,0.552,0.447,1,1,1h40c0.553,0,1-0.448,1-1V5C46,4.448,45.553,4,45,4z M29,26.445h-5V42h-4	V26.445h-5V23h14V26.445z M30.121,41.112v-4.158c0,0,2.271,1.712,4.996,1.712c2.725,0,2.62-1.782,2.62-2.026	c0-2.586-7.721-2.586-7.721-8.315c0-7.791,11.25-4.717,11.25-4.717l-0.14,3.704c0,0-1.887-1.258-4.018-1.258s-2.9,1.013-2.9,2.096	c0,2.795,7.791,2.516,7.791,8.141C42,44.955,30.121,41.112,30.121,41.112z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50" style=" fill:#000000;">
                <path d="M 16.851562 0.01171875 C 16.72325 0.030984375 16.595766 0.074484375 16.478516 0.14648438 C 16.006516 0.43448438 15.858484 1.0504844 16.146484 1.5214844 L 17.787109 4.203125 C 14.836798 6.1839524 12.737788 9.3350589 12.169922 13 L 37.830078 13 C 37.262801 9.3350589 35.163102 6.1839524 32.212891 4.203125 L 33.853516 1.5214844 C 34.141516 1.0504844 33.993484 0.43448437 33.521484 0.14648438 C 33.049484 -0.14151562 32.434484 0.007515625 32.146484 0.47851562 L 30.472656 3.2148438 C 28.809508 2.4391021 26.957877 2 25 2 C 23.042123 2 21.190519 2.4391021 19.527344 3.2148438 L 17.853516 0.47851562 C 17.636766 0.12526562 17.2365 -0.046078125 16.851562 0.01171875 z M 8 5 C 5.794 5 4 6.794 4 9 C 4 11.206 5.794 13 8 13 L 10.148438 13 C 10.558437 9.946 11.888563 7.187 13.851562 5 L 8 5 z M 19.5 7 C 20.328 7 21 7.672 21 8.5 C 21 9.328 20.328 10 19.5 10 C 18.672 10 18 9.328 18 8.5 C 18 7.672 18.672 7 19.5 7 z M 30.5 7 C 31.328 7 32 7.672 32 8.5 C 32 9.328 31.328 10 30.5 10 C 29.672 10 29 9.328 29 8.5 C 29 7.672 29.672 7 30.5 7 z M 4 13.460938 L 4 39 C 4 41.757 6.243 44 9 44 L 13.279297 44 L 12.849609 44.912109 C 12.060609 46.589109 12.653219 48.612578 14.199219 49.517578 C 14.738219 49.832578 15.350703 50 15.970703 50 C 17.339703 50 18.596781 49.206563 19.175781 47.976562 L 21.037109 44 L 28.962891 44 L 30.820312 47.970703 C 31.402312 49.205703 32.660297 50 34.029297 50 C 34.649297 50 35.261781 49.832578 35.800781 49.517578 C 37.346781 48.612578 37.940391 46.589109 37.150391 44.912109 L 36.720703 44 L 39 44 L 39 24 C 39 23.448 39.447 23 40 23 L 44 23 C 46.206 23 48 21.206 48 19 C 48 16.794 46.206 15 44 15 L 40 15 L 12 15 L 8 15 C 6.462 15 5.063 14.414937 4 13.460938 z M 25 20 C 25.553 20 26 20.448 26 21 L 26 23.142578 C 27.721 23.589578 29 25.142 29 27 C 29 28.098 28.554938 29.093406 27.835938 29.816406 L 35.341797 45.763672 C 35.680797 46.483672 35.476016 47.391969 34.791016 47.792969 C 34.549016 47.934969 34.286297 48 34.029297 48 C 33.466297 48 32.888813 47.666047 32.632812 47.123047 L 31.171875 44 L 27.130859 35.363281 C 26.284859 33.555281 23.715141 33.555281 22.869141 35.363281 L 18.828125 44 L 17.367188 47.123047 C 17.111187 47.666047 16.533703 48 15.970703 48 C 15.713703 48 15.450984 47.934969 15.208984 47.792969 C 14.522984 47.391969 14.320203 46.484625 14.658203 45.765625 L 22.162109 29.816406 C 21.444109 29.092406 21 28.098 21 27 C 21 25.142 22.279 23.589578 24 23.142578 L 24 21 C 24 20.448 24.447 20 25 20 z M 48 23.460938 C 46.937 24.414938 45.538 25 44 25 L 41 25 L 41 45 L 41 49 C 41 49.552 41.447 50 42 50 L 43 50 C 45.757 50 48 47.757 48 45 L 48 23.460938 z M 25 25 A 2 2 0 0 0 25 29 A 2 2 0 0 0 25 25 z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 24 24" style=" fill:#000000;">
                <path d="M 11.5 2 C 8.416 2 6 5.5822969 6 10.154297 C 6 12.224297 6.5020781 14.081906 7.3300781 15.503906 C 7.2830781 15.662906 7.25 15.826 7.25 16 C 7.25 16.966 8.034 17.75 9 17.75 C 9.966 17.75 10.75 16.966 10.75 16 C 10.75 15.034 9.966 14.25 9 14.25 C 8.976 14.25 8.9536875 14.256813 8.9296875 14.257812 C 8.3596875 13.159813 8 11.719297 8 10.154297 C 8 6.8182969 9.603 4 11.5 4 C 12.662 4 13.711563 5.0585313 14.351562 6.6445312 C 14.481563 6.9655312 14.752797 7.2014375 15.091797 7.2734375 C 15.100797 7.2754375 15.108188 7.2763437 15.117188 7.2773438 C 15.878187 7.4423438 16.523375 6.6751719 16.234375 5.9511719 C 15.285375 3.5671719 13.54 2 11.5 2 z M 11.375 8.5 C 10.409 8.5 9.625 9.284 9.625 10.25 C 9.625 11.216 10.409 12 11.375 12 C 12.062 12 12.6505 11.601391 12.9375 11.025391 C 14.2305 11.083391 15.669344 11.458359 17.027344 12.193359 C 18.987344 13.255359 20.465813 14.885219 20.882812 16.449219 C 21.097812 17.252219 21.021156 17.957922 20.660156 18.544922 C 19.998156 19.621922 18.486703 20.103516 16.720703 19.978516 C 16.434703 19.958516 16.157219 20.051047 15.949219 20.248047 C 15.943219 20.254047 15.937641 20.259625 15.931641 20.265625 C 15.315641 20.844625 15.652141 21.907516 16.494141 21.978516 C 16.744141 21.998516 16.990375 22 17.234375 22 C 19.468375 22 21.383281 21.184797 22.363281 19.591797 C 23.016281 18.532797 23.171453 17.268594 22.814453 15.933594 C 22.250453 13.826594 20.441516 11.769547 17.978516 10.435547 C 16.179516 9.4605469 14.307281 9.0066719 12.613281 9.0136719 C 12.296281 8.6956719 11.859 8.5 11.375 8.5 z M 3.4238281 12.769531 C 3.1634023 12.776 2.9033906 12.884906 2.7128906 13.113281 C 1.9768906 13.997281 1.4475 14.959594 1.1875 15.933594 C 0.8305 17.268594 0.98471875 18.533797 1.6367188 19.591797 C 2.6157188 21.184797 4.530625 22 6.765625 22 C 8.457625 22 10.333 21.536453 12.125 20.564453 C 13.835 19.638453 15.216656 18.362844 16.097656 16.964844 C 16.897656 16.803844 17.5 16.097 17.5 15.25 C 17.5 14.284 16.716 13.5 15.75 13.5 C 14.784 13.5 14 14.284 14 15.25 C 14 15.576 14.095953 15.878625 14.251953 16.140625 C 13.544953 17.155625 12.468828 18.105641 11.173828 18.806641 C 8.0548281 20.495641 4.4658438 20.374969 3.3398438 18.542969 C 2.9788438 17.955969 2.9041406 17.252219 3.1191406 16.449219 C 3.3001406 15.773219 3.6828437 15.084547 4.2148438 14.435547 C 4.4228438 14.181547 4.502875 13.855109 4.421875 13.537109 C 4.419875 13.529109 4.4160625 13.520672 4.4140625 13.513672 C 4.2928125 13.033047 3.8578711 12.75875 3.4238281 12.769531 z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 24 24" style=" fill:#000000;">
                <path d="M 3.125 1 C 2.219 1 1.5030625 1.4805 1.1640625 2.3125 C 1.0570625 2.5695 1.0029531 2.8420469 1.0019531 3.1230469 C 1.0009531 4.0540469 1.6009375 4.8097188 1.9609375 5.2617188 C 2.0239375 5.3407187 2.080625 5.4110938 2.140625 5.4960938 L 2.3027344 5.7109375 C 2.4637344 5.9219375 2.6470781 6.16125 2.7050781 6.28125 C 2.7240781 6.33625 2.7492031 6.4326875 2.7832031 6.5546875 C 2.9402031 7.1196875 3.2332187 8.16975 3.6992188 8.96875 C 3.8872187 9.29075 4.1517969 9.6954687 4.3417969 9.9804688 C 4.2147969 10.616469 4 11.788 4 12.5 C 4 13.75 4.2592188 14.753875 4.8242188 15.671875 C 5.0332187 15.999875 5.671 17 6.75 17 C 7.133 17 7.7694062 16.850391 7.9414062 15.900391 C 8.7064063 16.887391 10 18.125 12 19 C 12 19 8.2507969 14.625438 7.5917969 11.898438 C 7.5917969 11.898437 6.874625 12.625375 6.265625 14.109375 C 6.083625 13.651375 6 13.135 6 12.5 C 6 11.873 6.2758125 10.471375 6.3828125 9.984375 L 6.4765625 9.5605469 L 6.2304688 9.203125 C 6.2264687 9.196125 5.7227344 8.4688906 5.4277344 7.9628906 C 5.0917344 7.3868906 4.8439375 6.4955781 4.7109375 6.0175781 C 4.6459375 5.7845781 4.594875 5.6159531 4.546875 5.5019531 C 4.371875 5.1229531 4.115625 4.7900937 3.890625 4.4960938 L 3.765625 4.3300781 C 3.702625 4.2390781 3.6193906 4.133625 3.5253906 4.015625 C 3.3423906 3.785625 3.0017188 3.3570312 3.0117188 3.0820312 L 3.1230469 3.0039062 L 3.125 3 C 3.92 3 4.9440781 3.5643437 5.3300781 3.7773438 C 5.4560781 3.8463438 5.5486563 3.8940156 5.5976562 3.9160156 L 5.7714844 3.9921875 L 6.1132812 4.0039062 C 6.5602813 4.0139062 7.9189063 4.0456875 8.8789062 4.4296875 C 10.629906 5.1296875 11.598031 5.830375 12.582031 7.109375 C 14.906031 10.131375 15.763484 14.044984 15.771484 14.083984 L 15.896484 14.648438 L 16.443359 14.826172 C 16.462359 14.833172 17.992922 15.344641 19.419922 16.681641 C 17.624922 17.125641 17 18 17 18 C 17 18 17.476 18.928 19.75 20.375 C 21.125 21.25 21.875 21.875 23 23 C 23 23 21.875688 20.499813 20.304688 18.507812 C 21.500687 18.124813 22.970703 17.925781 22.970703 17.925781 L 22.060547 16.664062 C 20.562547 14.587063 18.553656 13.538859 17.597656 13.130859 C 17.265656 11.864859 16.262969 8.614625 14.167969 5.890625 C 12.968969 4.331625 11.693094 3.3993125 9.6210938 2.5703125 C 8.3940937 2.0803125 6.9187188 2.0218594 6.2617188 2.0058594 C 5.6867187 1.6898594 4.409 1 3.125 1 z M 7.1875 5 C 7.1875 5 6.75 5 6.25 5.125 L 7.625 6.9980469 C 8 6.5000469 8 5.9179688 8 5.9179688 C 8 5.9179688 7.7505 5.25 7.1875 5 z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 32 32" style=" fill:#000000;">
                <path d="M 7.5566406 5.0058594 C 6.8996406 5.0338594 1.8892031 5.4591875 1.5332031 5.4921875 C 1.1772031 5.5211875 0.784625 5.6858281 1.140625 6.5488281 C 1.496625 7.4118281 7.1857031 19.951406 7.3457031 20.316406 C 7.5047031 20.680406 7.9178125 21.275156 8.8828125 21.035156 C 9.8718125 20.791156 13.302734 19.874094 15.177734 19.371094 C 16.166734 21.207094 18.1875 24.928938 18.5625 25.460938 C 19.0595 26.174937 19.405922 26.053453 20.169922 25.814453 C 20.769922 25.627453 29.525922 22.407141 29.919922 22.244141 C 30.313922 22.076141 30.556062 21.961688 30.289062 21.554688 C 30.092063 21.257687 27.781266 18.092594 26.572266 16.433594 C 27.402266 16.208594 30.350063 15.407406 30.664062 15.316406 C 31.033063 15.219406 31.084812 15.038594 30.882812 14.808594 C 30.685813 14.578594 27.940031 11.064703 27.457031 10.470703 C 26.974031 9.8767031 26.734453 9.9804375 26.439453 10.023438 C 26.139453 10.066437 22.666672 10.665422 22.263672 10.732422 C 21.860672 10.804422 21.607469 10.967266 21.855469 11.322266 C 22.075469 11.638266 24.359234 14.952641 24.865234 15.681641 L 15.785156 17.904297 L 8.5605469 5.5605469 C 8.2745469 5.1245469 8.2126406 4.9718594 7.5566406 5.0058594 z M 7.4433594 5.8632812 C 7.6123594 5.8532813 7.5932969 5.8910937 7.6542969 5.9960938 C 7.6542969 5.9960938 14.319641 17.760797 14.431641 17.966797 C 14.553641 18.172797 14.484953 18.235766 14.376953 18.259766 C 14.268953 18.283766 9.1821563 19.528797 8.9101562 19.591797 C 8.6381562 19.653797 8.6384688 19.625297 8.6054688 19.529297 C 8.5724688 19.433297 2.5605625 6.7449375 2.4765625 6.5859375 C 2.3925625 6.4279375 2.3965625 6.3027344 2.4765625 6.3027344 C 2.5565625 6.3027344 7.2793594 5.8722812 7.4433594 5.8632812 z M 26.771484 10.845703 C 26.838859 10.861328 26.909641 10.911797 26.994141 11.029297 C 27.163141 11.264297 29.459828 14.240469 29.548828 14.355469 C 29.632828 14.466469 29.482156 14.534031 29.285156 14.582031 C 29.088156 14.625031 25.835938 15.449219 25.835938 15.449219 L 23.177734 11.720703 C 23.102734 11.610703 23.042469 11.504469 23.230469 11.480469 C 23.417469 11.456469 26.436266 10.894234 26.572266 10.865234 C 26.640266 10.848234 26.704109 10.830078 26.771484 10.845703 z M 25.527344 16.617188 C 25.590094 16.624312 25.642891 16.66875 25.712891 16.78125 C 25.849891 17.01225 28.63875 20.881719 28.71875 21.011719 C 28.79875 21.140719 28.881047 21.227359 28.623047 21.318359 C 28.370047 21.414359 20.014469 24.295188 19.855469 24.367188 C 19.691469 24.439187 19.563422 24.462391 19.357422 24.150391 C 19.151422 23.838391 16.433594 19.03125 16.433594 19.03125 L 25.28125 16.677734 C 25.39125 16.641734 25.464594 16.610063 25.527344 16.617188 z"></path>
            </svg>
        </div>
    </div>
</section>
@endsection
@extends('app')
@section('class', 'main-page-page')

@section('content')
    <div class="catalog-division container my-content">
        <div class="title-wrap">
            <div class="h1 title-section">Каталог</div>
            <div class="more">
                <span>Дивитись повністю</span>
                <svg class="icon">
                    <use xlink:href="/images/sprites/sprite.svg#arrow"></use>
                </svg>
            </div>
        </div>
        <div class="catalog-section-mesh">
            @for ($i = 1; $i <= 9; $i++)
                <div class="catalog-section-card">
                    <a class="catalog-section-card__link" href="#"></a>
                    <div class="catalog-section-card__image">
                        <img src="https://picsum.photos/400/400" alt="#">
                    </div>
                    <div class="catalog-section-card__info">
                        <div class="catalog-section-card__title">
                            {{ fake()->sentence(2) }}
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="benefits-division container my-content">
        <div class="h1 title-section">Працювати з <span>Dirom</span> <div class="label">– це отримувати чесний та відповідальний сервіс</div></div>
        <div class="benefits-mesh">
            @for ($i = 1; $i <= 4; $i++)
            <div class="benefit-card">
                <div class="benefit-card__image">
                    <img src="https://picsum.photos/355/450" alt="#">
                </div>
                <div class="benefit-card__info">
                    <div class="benefit-card__title">
                        {{ fake()->sentence(5) }}
                    </div>
                    <div class="benefit-card__text">
                        {{ fake()->sentence(10) }}
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    <div class="seo-division container my-content">
        <div class="seo-text ckeditor">
            <h1>Більше про <span>компанію</span></h1>
            <ul>
                <li>{{ fake()->text() }}</li>
                <li>{{ fake()->text() }}</li>
                <li>{{ fake()->text() }}</li>
            </ul>
            <p>{{ fake()->text(1000) }}</p>
            <p>{{ fake()->text(1000) }}</p>
            <p>{{ fake()->text(1000) }}</p>
            <p>{{ fake()->text(1000) }}</p>
            <p>{{ fake()->text(1000) }}</p>
        </div>
    </div>
@endsection



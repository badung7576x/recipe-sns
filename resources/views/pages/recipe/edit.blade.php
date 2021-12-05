@extends('layouts.master')
@section('content')
  <div class="l-contents">
    <div class="l-contents__right">
      <section class="c-side-block--user">
        <div class="inner">
          <div class="p-user-profile--side">
            <img src="{{ asset('images/common/avatar.png') }}" class="p-user-profile--side__image" width="500" height="500" />
            <div class="p-user-profile--side__contents">
              <h2 class="p-user-profile--side__name">{{ $user->fullname ?? '' }}</h2>
              <ul class="p-user-profile__follow">
                <li style="margin-left: 5%; width: 85%;"><a href="#">レシピ数<span>{{ $recipeCounts }}</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="l-contents__right" style="width: 760px">
      <section class="c-side-block--user margin-L10" style="height: max-content;">
        <div class="inner">
          <div class="p-user-profile--side">
            <div class="p-user-profile--side__contents">
              <div class="p-user-profile--side__heading01" style="font-size: 25px">
                自己紹介
                <div class="btn btnLarge" style="float:right;">
                  <a href="#" class="btn-inner">編集</a>
                </div>
              </div>
              <div class="p-user-profile--side__contents--text margin-T40">
                <p>無し</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div class="l-contents">
    <div class="l-contents__main">
      <div class="p-user--recipe">
        <section class="p-user__inner" id="p-user__recipe">
          <h2>リスト ＞ レシピを編集する</h2><br><br>
          <div class="c-top-heading">
            <h2 style="font-size: 26px; font-weight: bold;">レシピを編集する</h2>
          </div>
          @if (session()->has('success'))
            <p style="color: green;margin-left: 0; margin-bottom: 20px; text-align:center; font-size: 22px">
              {{ session('success') }}
            </p>
          @endif

          <form style="font-size: large; margin-left: 15rem" action="{{ route('recipe.update', $recipe->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <table class="create-recipe">
              <tr>
                <td class="create-recipe-td" colspan="2" style="font-size: 20px; font-weight: bold;">
                  料理のイメージ
                  <hr>
                </td>
              </tr>
              <tr>
                <td class="create-recipe-td" colspan="2" style="font-size: 20px;">
                  <input id="image-input" type="file" class="form-control" name="image"><br>
                  <img src="{{ $recipe->image }}" id="image-preview" width="100%" />
                  @error('image')
                    <p class="error-msg" style="margin-left: 0; margin-bottom: 20px">
                      {{ $message }}
                    </p>
                  @enderror
                </td>
              </tr>
              <tr>
                <td colspan="2" style="font-size: 20px; font-weight: bold;">
                  料理の情報
                  <hr>
                </td>
              </tr>
              <tr>
                <td class="create-recipe-td">料理の名前<span style="color: red;">*</span></td>
                <td>
                  <input type="text" name="name" class="create-recipe-input" value="{{ old('name', $recipe->name) }}" />
                  @error('name')
                    <p class="error-msg" role="alert">
                      {{ $message }}
                    </p>
                  @enderror
                </td>
              </tr>
              <tr>
                <td class="create-recipe-td">予定時間<span style="color: red;">*</span></td>
                <td>
                  <input type="number" name="cooking_time" class="create-recipe-input" value="{{ old('cooking_time', $recipe->cooking_time) }}" />
                  @error('cooking_time')
                    <p class="error-msg" role="alert">
                      {{ $message }}
                    </p>
                  @enderror
                </td>
              </tr>
            </table>
            <br>
            <table class="create-recipe">
              <tr>
                <td colspan="3" style="font-size: 20px; font-weight: bold;">
                  材料
                  <hr>
                </td>
              </tr>
              <tr>
                <td class="create-recipe-td">材料名<span style="color: red;">*</span></td>
                <td style="padding-left: 10px">量<span style="color: red;">*</span></td>
                <td style="">単位<span style="color: red;">*</span></td>
              </tr>
              @foreach ($recipe->recipe_materials as $material)
                <tr>
                  @php $i = $loop->iteration @endphp
                  <td>
                    <input type="text" name="material_name[]" value="{{ old('material_name.' . ($i - 1), $material->name) }}" />
                    @error('material_name.' . ($i - 1))
                      <p class="error-msg" style="margin-left: 0;">
                        {{ $message }}
                      </p>
                    @enderror
                  </td>
                  <td>
                    <input type="number" name="material_quantity[]" class="ml-10" value="{{ old('material_quantity.' . ($i - 1), $material->quantity) }}" />
                    @error('material_quantity.' . ($i - 1))
                      <p class="error-msg" role="alert">
                        {{ $message }}
                      </p>
                    @enderror
                  </td>
                  <td>
                    <input type="text" name="material_unit[]" value="{{ old('material_unit.' . ($i - 1), $material->unit) }}" />
                    @error('material_unit.' . ($i - 1))
                      <p class=" error-msg" role="alert">
                        {{ $message }}
                      </p>
                    @enderror
                  </td>
                </tr>
              @endforeach
              @php $i = $i + 1 @endphp
              @for($i; $i <= 5; $i++)
                <tr>
                  <td>
                    <input type="text" name="material_name[]" value="{{ old('material_name.' . ($i - 1), '') }}" />
                    @error('material_name.' . ($i - 1))
                      <p class="error-msg" style="margin-left: 0;">
                        {{ $message }}
                      </p>
                    @enderror
                  </td>
                  <td>
                    <input type="number" name="material_quantity[]" class="ml-10" value="{{ old('material_quantity.' . ($i - 1), '') }}" />
                    @error('material_quantity.' . ($i - 1))
                      <p class="error-msg" role="alert">
                        {{ $message }}
                      </p>
                    @enderror
                  </td>
                  <td>
                    <input type="text" name="material_unit[]" value="{{ old('material_unit.' . ($i - 1), '') }}" />
                    @error('material_unit.' . ($i - 1))
                      <p class=" error-msg" role="alert">
                        {{ $message }}
                      </p>
                    @enderror
                  </td>
                </tr>
              @endfor
              {{-- <tr style="cursor: pointer; " class="create-recipe-add-material">
                <td colspan="3" style="text-align: center; ">
                  +
                </td>
              </tr> --}}
            </table>

            <table class="create-recipe margin-T10">
              <tr>
                <td colspan="2" style="font-size: 20px; font-weight: bold;">
                  やり方の順番
                  <hr>
                </td>
              </tr>
              <tr>
                <td class="create-recipe-td">ステップ名</td>
                <td style="padding: 1rem;">説明<span style="color: red;">*</span></td>
              </tr>
              @foreach ($recipe->recipe_steps as $step)
                @php $i = $loop->iteration @endphp
                <tr>
                  <td class="create-recipe-td recipe-step">{{ $i }}</td>
                  <td><input type="text" name="step_description[]" class="create-recipe-input" value="{{ old('step_description.' . ($i - 1), $step->description) }}" /></td>
                </tr>
              @endforeach
              @php $i = $i + 1 @endphp
              @for ($i; $i <= 5; $i++)
                <tr>
                  <td class="create-recipe-td recipe-step">{{ $i }}</td>
                  <td><input type="text" name="step_description[]" class="create-recipe-input" value="{{ old('step_description.' . ($i - 1)) }}" /></td>
                </tr>
              @endfor
              {{-- <tr style="cursor: pointer; " class="create-recipe-add-step">
                <td colspan="2" style="text-align: center; ">
                  +
                </td>
              </tr> --}}
            </table>
            <br>
            <div style="width: 690px;">
              <header style="font-size: 20px; font-weight: bold;"><i class="icon-memo"></i>ノート</header>
              <hr>
              <textarea style="height: 200px;" name="note">{{ old('note', $recipe->note) }}</textarea>
            </div>
            <button type="submit" class="btn btnLarge"><span class="btn-inner">保存</span></button>
          </form>
        </section>
      </div>

    </div>
  </div>
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        let reader = new FileReader()
        reader.onload = function(e) {
          $('#image-preview').attr('src', e.target.result)
        }
        reader.readAsDataURL(input.files[0])
      }
    }
    $("#image-input").change(function() {
      readURL(this)
    })
  </script>
@endsection

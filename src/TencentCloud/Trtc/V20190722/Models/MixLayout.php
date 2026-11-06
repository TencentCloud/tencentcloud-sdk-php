<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户自定义混流布局参数列表。
 *
 * @method integer getTop() 获取<p>画布上该画面左上角的 y 轴坐标，取值范围 [0, 1920]，不能超过画布的高。</p>
 * @method void setTop(integer $Top) 设置<p>画布上该画面左上角的 y 轴坐标，取值范围 [0, 1920]，不能超过画布的高。</p>
 * @method integer getLeft() 获取<p>画布上该画面左上角的 x 轴坐标，取值范围 [0, 1920]，不能超过画布的宽。</p>
 * @method void setLeft(integer $Left) 设置<p>画布上该画面左上角的 x 轴坐标，取值范围 [0, 1920]，不能超过画布的宽。</p>
 * @method integer getWidth() 获取<p>画布上该画面宽度的相对值，取值范围 [0, 1920]，与Left相加不应超过画布的宽。</p>
 * @method void setWidth(integer $Width) 设置<p>画布上该画面宽度的相对值，取值范围 [0, 1920]，与Left相加不应超过画布的宽。</p>
 * @method integer getHeight() 获取<p>画布上该画面高度的相对值，取值范围 [0, 1920]，与Top相加不应超过画布的高。</p>
 * @method void setHeight(integer $Height) 设置<p>画布上该画面高度的相对值，取值范围 [0, 1920]，与Top相加不应超过画布的高。</p>
 * @method string getUserId() 获取<p>字符串内容为待显示在该画面的主播对应的UserId，如果不指定，会按照主播加入房间的顺序匹配。</p>
 * @method void setUserId(string $UserId) 设置<p>字符串内容为待显示在该画面的主播对应的UserId，如果不指定，会按照主播加入房间的顺序匹配。</p>
 * @method integer getAlpha() 获取<p>画布的透明度值，取值范围[0, 255]。0表示不透明，255表示全透明。默认值为0。</p>
 * @method void setAlpha(integer $Alpha) 设置<p>画布的透明度值，取值范围[0, 255]。0表示不透明，255表示全透明。默认值为0。</p>
 * @method integer getRenderMode() 获取<p>画布上该画面的渲染模式</p><p>枚举值：</p><ul><li>0： 拉伸模式，这个模式下整个视频内容会全部显示，并填满子画面，在源视频和目的视频宽高比不一致的时候，画面不会缺少内容，但是画面可能产生形变；</li><li>1： 剪裁模式（默认），这个模式下会严格按照目的视频的宽高比对源视频剪裁之后再拉伸，并填满子画面画布，在源视频和目的视频宽高比不一致的时候，画面保持不变形，但是会被剪裁；</li><li>2： 填黑模式，这个模式下会严格保持源视频的宽高比进行等比缩放，在源视频和目的视频宽高比不一致的时候，画面的上下侧边缘或者左右侧边缘会露出子画面画布的背景；</li><li>3： 智能拉伸模式，这个模式类似剪裁模式，区别是在源视频和目的视频宽高比不一致的时候，限制了最大剪裁比例为画面的宽度或者高度的20%；</li></ul>
 * @method void setRenderMode(integer $RenderMode) 设置<p>画布上该画面的渲染模式</p><p>枚举值：</p><ul><li>0： 拉伸模式，这个模式下整个视频内容会全部显示，并填满子画面，在源视频和目的视频宽高比不一致的时候，画面不会缺少内容，但是画面可能产生形变；</li><li>1： 剪裁模式（默认），这个模式下会严格按照目的视频的宽高比对源视频剪裁之后再拉伸，并填满子画面画布，在源视频和目的视频宽高比不一致的时候，画面保持不变形，但是会被剪裁；</li><li>2： 填黑模式，这个模式下会严格保持源视频的宽高比进行等比缩放，在源视频和目的视频宽高比不一致的时候，画面的上下侧边缘或者左右侧边缘会露出子画面画布的背景；</li><li>3： 智能拉伸模式，这个模式类似剪裁模式，区别是在源视频和目的视频宽高比不一致的时候，限制了最大剪裁比例为画面的宽度或者高度的20%；</li></ul>
 * @method integer getMediaId() 获取<p>对应订阅流的主辅路标识：<br>0：主流（默认）；<br>1：辅流；</p>
 * @method void setMediaId(integer $MediaId) 设置<p>对应订阅流的主辅路标识：<br>0：主流（默认）；<br>1：辅流；</p>
 * @method integer getImageLayer() 获取<p>该画布的图层顺序, 这个值越小表示图层越靠后。默认值为0。</p>
 * @method void setImageLayer(integer $ImageLayer) 设置<p>该画布的图层顺序, 这个值越小表示图层越靠后。默认值为0。</p>
 * @method string getSubBackgroundImage() 获取<p>图片的url地址， 只支持jpg, png, jpeg，图片分辨率限制不超过2K，图片大小限制不超过5MB。注意，url必须携带格式后缀，url内只支持特定的字符串, 范围是a-z A-Z 0-9 &#39;-&#39;, &#39;.&#39;, &#39;_&#39;, &#39;~&#39;, &#39;:&#39;, &#39;/&#39;, &#39;?&#39;, &#39;#&#39;, &#39;[&#39;, &#39;]&#39; &#39;@&#39;, &#39;!&#39;, &#39;&amp;&#39;, &#39;(&#39;, &#39;)&#39;, &#39;*&#39;, &#39;+&#39;, &#39;,&#39;, &#39;%&#39;, &#39;=&#39;</p>
 * @method void setSubBackgroundImage(string $SubBackgroundImage) 设置<p>图片的url地址， 只支持jpg, png, jpeg，图片分辨率限制不超过2K，图片大小限制不超过5MB。注意，url必须携带格式后缀，url内只支持特定的字符串, 范围是a-z A-Z 0-9 &#39;-&#39;, &#39;.&#39;, &#39;_&#39;, &#39;~&#39;, &#39;:&#39;, &#39;/&#39;, &#39;?&#39;, &#39;#&#39;, &#39;[&#39;, &#39;]&#39; &#39;@&#39;, &#39;!&#39;, &#39;&amp;&#39;, &#39;(&#39;, &#39;)&#39;, &#39;*&#39;, &#39;+&#39;, &#39;,&#39;, &#39;%&#39;, &#39;=&#39;</p>
 */
class MixLayout extends AbstractModel
{
    /**
     * @var integer <p>画布上该画面左上角的 y 轴坐标，取值范围 [0, 1920]，不能超过画布的高。</p>
     */
    public $Top;

    /**
     * @var integer <p>画布上该画面左上角的 x 轴坐标，取值范围 [0, 1920]，不能超过画布的宽。</p>
     */
    public $Left;

    /**
     * @var integer <p>画布上该画面宽度的相对值，取值范围 [0, 1920]，与Left相加不应超过画布的宽。</p>
     */
    public $Width;

    /**
     * @var integer <p>画布上该画面高度的相对值，取值范围 [0, 1920]，与Top相加不应超过画布的高。</p>
     */
    public $Height;

    /**
     * @var string <p>字符串内容为待显示在该画面的主播对应的UserId，如果不指定，会按照主播加入房间的顺序匹配。</p>
     */
    public $UserId;

    /**
     * @var integer <p>画布的透明度值，取值范围[0, 255]。0表示不透明，255表示全透明。默认值为0。</p>
     */
    public $Alpha;

    /**
     * @var integer <p>画布上该画面的渲染模式</p><p>枚举值：</p><ul><li>0： 拉伸模式，这个模式下整个视频内容会全部显示，并填满子画面，在源视频和目的视频宽高比不一致的时候，画面不会缺少内容，但是画面可能产生形变；</li><li>1： 剪裁模式（默认），这个模式下会严格按照目的视频的宽高比对源视频剪裁之后再拉伸，并填满子画面画布，在源视频和目的视频宽高比不一致的时候，画面保持不变形，但是会被剪裁；</li><li>2： 填黑模式，这个模式下会严格保持源视频的宽高比进行等比缩放，在源视频和目的视频宽高比不一致的时候，画面的上下侧边缘或者左右侧边缘会露出子画面画布的背景；</li><li>3： 智能拉伸模式，这个模式类似剪裁模式，区别是在源视频和目的视频宽高比不一致的时候，限制了最大剪裁比例为画面的宽度或者高度的20%；</li></ul>
     */
    public $RenderMode;

    /**
     * @var integer <p>对应订阅流的主辅路标识：<br>0：主流（默认）；<br>1：辅流；</p>
     */
    public $MediaId;

    /**
     * @var integer <p>该画布的图层顺序, 这个值越小表示图层越靠后。默认值为0。</p>
     */
    public $ImageLayer;

    /**
     * @var string <p>图片的url地址， 只支持jpg, png, jpeg，图片分辨率限制不超过2K，图片大小限制不超过5MB。注意，url必须携带格式后缀，url内只支持特定的字符串, 范围是a-z A-Z 0-9 &#39;-&#39;, &#39;.&#39;, &#39;_&#39;, &#39;~&#39;, &#39;:&#39;, &#39;/&#39;, &#39;?&#39;, &#39;#&#39;, &#39;[&#39;, &#39;]&#39; &#39;@&#39;, &#39;!&#39;, &#39;&amp;&#39;, &#39;(&#39;, &#39;)&#39;, &#39;*&#39;, &#39;+&#39;, &#39;,&#39;, &#39;%&#39;, &#39;=&#39;</p>
     */
    public $SubBackgroundImage;

    /**
     * @param integer $Top <p>画布上该画面左上角的 y 轴坐标，取值范围 [0, 1920]，不能超过画布的高。</p>
     * @param integer $Left <p>画布上该画面左上角的 x 轴坐标，取值范围 [0, 1920]，不能超过画布的宽。</p>
     * @param integer $Width <p>画布上该画面宽度的相对值，取值范围 [0, 1920]，与Left相加不应超过画布的宽。</p>
     * @param integer $Height <p>画布上该画面高度的相对值，取值范围 [0, 1920]，与Top相加不应超过画布的高。</p>
     * @param string $UserId <p>字符串内容为待显示在该画面的主播对应的UserId，如果不指定，会按照主播加入房间的顺序匹配。</p>
     * @param integer $Alpha <p>画布的透明度值，取值范围[0, 255]。0表示不透明，255表示全透明。默认值为0。</p>
     * @param integer $RenderMode <p>画布上该画面的渲染模式</p><p>枚举值：</p><ul><li>0： 拉伸模式，这个模式下整个视频内容会全部显示，并填满子画面，在源视频和目的视频宽高比不一致的时候，画面不会缺少内容，但是画面可能产生形变；</li><li>1： 剪裁模式（默认），这个模式下会严格按照目的视频的宽高比对源视频剪裁之后再拉伸，并填满子画面画布，在源视频和目的视频宽高比不一致的时候，画面保持不变形，但是会被剪裁；</li><li>2： 填黑模式，这个模式下会严格保持源视频的宽高比进行等比缩放，在源视频和目的视频宽高比不一致的时候，画面的上下侧边缘或者左右侧边缘会露出子画面画布的背景；</li><li>3： 智能拉伸模式，这个模式类似剪裁模式，区别是在源视频和目的视频宽高比不一致的时候，限制了最大剪裁比例为画面的宽度或者高度的20%；</li></ul>
     * @param integer $MediaId <p>对应订阅流的主辅路标识：<br>0：主流（默认）；<br>1：辅流；</p>
     * @param integer $ImageLayer <p>该画布的图层顺序, 这个值越小表示图层越靠后。默认值为0。</p>
     * @param string $SubBackgroundImage <p>图片的url地址， 只支持jpg, png, jpeg，图片分辨率限制不超过2K，图片大小限制不超过5MB。注意，url必须携带格式后缀，url内只支持特定的字符串, 范围是a-z A-Z 0-9 &#39;-&#39;, &#39;.&#39;, &#39;_&#39;, &#39;~&#39;, &#39;:&#39;, &#39;/&#39;, &#39;?&#39;, &#39;#&#39;, &#39;[&#39;, &#39;]&#39; &#39;@&#39;, &#39;!&#39;, &#39;&amp;&#39;, &#39;(&#39;, &#39;)&#39;, &#39;*&#39;, &#39;+&#39;, &#39;,&#39;, &#39;%&#39;, &#39;=&#39;</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Alpha",$param) and $param["Alpha"] !== null) {
            $this->Alpha = $param["Alpha"];
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("MediaId",$param) and $param["MediaId"] !== null) {
            $this->MediaId = $param["MediaId"];
        }

        if (array_key_exists("ImageLayer",$param) and $param["ImageLayer"] !== null) {
            $this->ImageLayer = $param["ImageLayer"];
        }

        if (array_key_exists("SubBackgroundImage",$param) and $param["SubBackgroundImage"] !== null) {
            $this->SubBackgroundImage = $param["SubBackgroundImage"];
        }
    }
}

<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getTop() 获取画布上该画面左上角的 y 轴坐标，取值范围 [0, 1920]，不能超过画布的高。
 * @method void setTop(integer $Top) 设置画布上该画面左上角的 y 轴坐标，取值范围 [0, 1920]，不能超过画布的高。
 * @method integer getLeft() 获取画布上该画面左上角的 x 轴坐标，取值范围 [0, 1920]，不能超过画布的宽。
 * @method void setLeft(integer $Left) 设置画布上该画面左上角的 x 轴坐标，取值范围 [0, 1920]，不能超过画布的宽。
 * @method integer getWidth() 获取画布上该画面宽度的相对值，取值范围 [0, 1920]，与Left相加不应超过画布的宽。
 * @method void setWidth(integer $Width) 设置画布上该画面宽度的相对值，取值范围 [0, 1920]，与Left相加不应超过画布的宽。
 * @method integer getHeight() 获取画布上该画面高度的相对值，取值范围 [0, 1920]，与Top相加不应超过画布的高。
 * @method void setHeight(integer $Height) 设置画布上该画面高度的相对值，取值范围 [0, 1920]，与Top相加不应超过画布的高。
 * @method string getUserId() 获取字符串内容为待显示在该画面的主播对应的UserId，如果不指定，会按照主播加入房间的顺序匹配。
 * @method void setUserId(string $UserId) 设置字符串内容为待显示在该画面的主播对应的UserId，如果不指定，会按照主播加入房间的顺序匹配。
 * @method integer getAlpha() 获取画布的透明度值，取值范围[0, 255]。0表示不透明，255表示全透明。默认值为0。
 * @method void setAlpha(integer $Alpha) 设置画布的透明度值，取值范围[0, 255]。0表示不透明，255表示全透明。默认值为0。
 * @method integer getRenderMode() 获取0 ：拉伸模式，这个模式下整个视频内容会全部显示，并填满子画面，在源视频和目的视频宽高比不一致的时候，画面不会缺少内容，但是画面可能产生形变；

1 ：剪裁模式（默认），这个模式下会严格按照目的视频的宽高比对源视频剪裁之后再拉伸，并填满子画面画布，在源视频和目的视频宽高比不一致的时候，画面保持不变形，但是会被剪裁；

2 ：填黑模式，这个模式下会严格保持源视频的宽高比进行等比缩放，在源视频和目的视频宽高比不一致的时候，画面的上下侧边缘或者左右侧边缘会露出子画面画布的背景；

3 ：智能拉伸模式，这个模式类似剪裁模式，区别是在源视频和目的视频宽高比不一致的时候，限制了最大剪裁比例为画面的宽度或者高度的20%；
 * @method void setRenderMode(integer $RenderMode) 设置0 ：拉伸模式，这个模式下整个视频内容会全部显示，并填满子画面，在源视频和目的视频宽高比不一致的时候，画面不会缺少内容，但是画面可能产生形变；

1 ：剪裁模式（默认），这个模式下会严格按照目的视频的宽高比对源视频剪裁之后再拉伸，并填满子画面画布，在源视频和目的视频宽高比不一致的时候，画面保持不变形，但是会被剪裁；

2 ：填黑模式，这个模式下会严格保持源视频的宽高比进行等比缩放，在源视频和目的视频宽高比不一致的时候，画面的上下侧边缘或者左右侧边缘会露出子画面画布的背景；

3 ：智能拉伸模式，这个模式类似剪裁模式，区别是在源视频和目的视频宽高比不一致的时候，限制了最大剪裁比例为画面的宽度或者高度的20%；
 * @method integer getMediaId() 获取对应订阅流的主辅路标识：
0：主流（默认）；
1：辅流；
 * @method void setMediaId(integer $MediaId) 设置对应订阅流的主辅路标识：
0：主流（默认）；
1：辅流；
 * @method integer getImageLayer() 获取该画布的图层顺序, 这个值越小表示图层越靠后。默认值为0。
 * @method void setImageLayer(integer $ImageLayer) 设置该画布的图层顺序, 这个值越小表示图层越靠后。默认值为0。
 * @method string getSubBackgroundImage() 获取图片的url地址， 只支持jpg， png，大小限制不超过5M，宽高比不一致的处理方案同 RenderMode。
 * @method void setSubBackgroundImage(string $SubBackgroundImage) 设置图片的url地址， 只支持jpg， png，大小限制不超过5M，宽高比不一致的处理方案同 RenderMode。
 */
class MixLayout extends AbstractModel
{
    /**
     * @var integer 画布上该画面左上角的 y 轴坐标，取值范围 [0, 1920]，不能超过画布的高。
     */
    public $Top;

    /**
     * @var integer 画布上该画面左上角的 x 轴坐标，取值范围 [0, 1920]，不能超过画布的宽。
     */
    public $Left;

    /**
     * @var integer 画布上该画面宽度的相对值，取值范围 [0, 1920]，与Left相加不应超过画布的宽。
     */
    public $Width;

    /**
     * @var integer 画布上该画面高度的相对值，取值范围 [0, 1920]，与Top相加不应超过画布的高。
     */
    public $Height;

    /**
     * @var string 字符串内容为待显示在该画面的主播对应的UserId，如果不指定，会按照主播加入房间的顺序匹配。
     */
    public $UserId;

    /**
     * @var integer 画布的透明度值，取值范围[0, 255]。0表示不透明，255表示全透明。默认值为0。
     */
    public $Alpha;

    /**
     * @var integer 0 ：拉伸模式，这个模式下整个视频内容会全部显示，并填满子画面，在源视频和目的视频宽高比不一致的时候，画面不会缺少内容，但是画面可能产生形变；

1 ：剪裁模式（默认），这个模式下会严格按照目的视频的宽高比对源视频剪裁之后再拉伸，并填满子画面画布，在源视频和目的视频宽高比不一致的时候，画面保持不变形，但是会被剪裁；

2 ：填黑模式，这个模式下会严格保持源视频的宽高比进行等比缩放，在源视频和目的视频宽高比不一致的时候，画面的上下侧边缘或者左右侧边缘会露出子画面画布的背景；

3 ：智能拉伸模式，这个模式类似剪裁模式，区别是在源视频和目的视频宽高比不一致的时候，限制了最大剪裁比例为画面的宽度或者高度的20%；
     */
    public $RenderMode;

    /**
     * @var integer 对应订阅流的主辅路标识：
0：主流（默认）；
1：辅流；
     */
    public $MediaId;

    /**
     * @var integer 该画布的图层顺序, 这个值越小表示图层越靠后。默认值为0。
     */
    public $ImageLayer;

    /**
     * @var string 图片的url地址， 只支持jpg， png，大小限制不超过5M，宽高比不一致的处理方案同 RenderMode。
     */
    public $SubBackgroundImage;

    /**
     * @param integer $Top 画布上该画面左上角的 y 轴坐标，取值范围 [0, 1920]，不能超过画布的高。
     * @param integer $Left 画布上该画面左上角的 x 轴坐标，取值范围 [0, 1920]，不能超过画布的宽。
     * @param integer $Width 画布上该画面宽度的相对值，取值范围 [0, 1920]，与Left相加不应超过画布的宽。
     * @param integer $Height 画布上该画面高度的相对值，取值范围 [0, 1920]，与Top相加不应超过画布的高。
     * @param string $UserId 字符串内容为待显示在该画面的主播对应的UserId，如果不指定，会按照主播加入房间的顺序匹配。
     * @param integer $Alpha 画布的透明度值，取值范围[0, 255]。0表示不透明，255表示全透明。默认值为0。
     * @param integer $RenderMode 0 ：拉伸模式，这个模式下整个视频内容会全部显示，并填满子画面，在源视频和目的视频宽高比不一致的时候，画面不会缺少内容，但是画面可能产生形变；

1 ：剪裁模式（默认），这个模式下会严格按照目的视频的宽高比对源视频剪裁之后再拉伸，并填满子画面画布，在源视频和目的视频宽高比不一致的时候，画面保持不变形，但是会被剪裁；

2 ：填黑模式，这个模式下会严格保持源视频的宽高比进行等比缩放，在源视频和目的视频宽高比不一致的时候，画面的上下侧边缘或者左右侧边缘会露出子画面画布的背景；

3 ：智能拉伸模式，这个模式类似剪裁模式，区别是在源视频和目的视频宽高比不一致的时候，限制了最大剪裁比例为画面的宽度或者高度的20%；
     * @param integer $MediaId 对应订阅流的主辅路标识：
0：主流（默认）；
1：辅流；
     * @param integer $ImageLayer 该画布的图层顺序, 这个值越小表示图层越靠后。默认值为0。
     * @param string $SubBackgroundImage 图片的url地址， 只支持jpg， png，大小限制不超过5M，宽高比不一致的处理方案同 RenderMode。
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

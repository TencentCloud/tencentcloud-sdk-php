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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用混流布局参数。
 *
 * @method integer getImageLayer() 获取<p>输入图层。取值范围[1，16]。<br>1)背景流（即大主播画面或画布）的 image_layer 填1。<br>2)纯音频混流，该参数也需填。<br>注意：不同输入，该值不可重复</p>
 * @method void setImageLayer(integer $ImageLayer) 设置<p>输入图层。取值范围[1，16]。<br>1)背景流（即大主播画面或画布）的 image_layer 填1。<br>2)纯音频混流，该参数也需填。<br>注意：不同输入，该值不可重复</p>
 * @method integer getInputType() 获取<p>输入类型。取值范围[0，5]。<br>不填默认为0。<br>0表示输入流为音视频。<br>2表示输入流为图片。<br>3表示输入流为画布。<br>4表示输入流为音频。<br>5表示输入流为纯视频。</p>
 * @method void setInputType(integer $InputType) 设置<p>输入类型。取值范围[0，5]。<br>不填默认为0。<br>0表示输入流为音视频。<br>2表示输入流为图片。<br>3表示输入流为画布。<br>4表示输入流为音频。<br>5表示输入流为纯视频。</p>
 * @method float getImageHeight() 获取<p>输入画面在输出时的高度。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为输入流的高度。<br>使用百分比时，期望输出为（百分比 * 背景高）。</p>
 * @method void setImageHeight(float $ImageHeight) 设置<p>输入画面在输出时的高度。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为输入流的高度。<br>使用百分比时，期望输出为（百分比 * 背景高）。</p>
 * @method float getImageWidth() 获取<p>输入画面在输出时的宽度。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为输入流的宽度。<br>使用百分比时，期望输出为（百分比 * 背景宽）。</p>
 * @method void setImageWidth(float $ImageWidth) 设置<p>输入画面在输出时的宽度。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为输入流的宽度。<br>使用百分比时，期望输出为（百分比 * 背景宽）。</p>
 * @method float getLocationX() 获取<p>输入在输出画面的X偏移。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为0。<br>相对于大主播背景画面左上角的横向偏移。<br>使用百分比时，期望输出为（百分比 * 背景宽）。</p>
 * @method void setLocationX(float $LocationX) 设置<p>输入在输出画面的X偏移。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为0。<br>相对于大主播背景画面左上角的横向偏移。<br>使用百分比时，期望输出为（百分比 * 背景宽）。</p>
 * @method float getLocationY() 获取<p>输入在输出画面的Y偏移。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为0。<br>相对于大主播背景画面左上角的纵向偏移。<br>使用百分比时，期望输出为（百分比 * 背景宽）</p>
 * @method void setLocationY(float $LocationY) 设置<p>输入在输出画面的Y偏移。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为0。<br>相对于大主播背景画面左上角的纵向偏移。<br>使用百分比时，期望输出为（百分比 * 背景宽）</p>
 * @method string getColor() 获取<p>当InputType为3(画布)时，该值表示画布的颜色。<br>常用的颜色有：<br>红色：0xCC0033。<br>黄色：0xCC9900。<br>绿色：0xCCCC33。<br>蓝色：0x99CCFF。<br>黑色：0x000000。<br>白色：0xFFFFFF。<br>灰色：0x999999。</p>
 * @method void setColor(string $Color) 设置<p>当InputType为3(画布)时，该值表示画布的颜色。<br>常用的颜色有：<br>红色：0xCC0033。<br>黄色：0xCC9900。<br>绿色：0xCCCC33。<br>蓝色：0x99CCFF。<br>黑色：0x000000。<br>白色：0xFFFFFF。<br>灰色：0x999999。</p>
 * @method integer getWatermarkId() 获取<p>当InputType为2(图片)时，该值是水印ID。</p>
 * @method void setWatermarkId(integer $WatermarkId) 设置<p>当InputType为2(图片)时，该值是水印ID。</p>
 * @method string getWebPageUrl() 获取<p>当InputType为8时，该值是动效贴片的URL</p>
 * @method void setWebPageUrl(string $WebPageUrl) 设置<p>当InputType为8时，该值是动效贴片的URL</p>
 */
class CommonMixLayoutParams extends AbstractModel
{
    /**
     * @var integer <p>输入图层。取值范围[1，16]。<br>1)背景流（即大主播画面或画布）的 image_layer 填1。<br>2)纯音频混流，该参数也需填。<br>注意：不同输入，该值不可重复</p>
     */
    public $ImageLayer;

    /**
     * @var integer <p>输入类型。取值范围[0，5]。<br>不填默认为0。<br>0表示输入流为音视频。<br>2表示输入流为图片。<br>3表示输入流为画布。<br>4表示输入流为音频。<br>5表示输入流为纯视频。</p>
     */
    public $InputType;

    /**
     * @var float <p>输入画面在输出时的高度。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为输入流的高度。<br>使用百分比时，期望输出为（百分比 * 背景高）。</p>
     */
    public $ImageHeight;

    /**
     * @var float <p>输入画面在输出时的宽度。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为输入流的宽度。<br>使用百分比时，期望输出为（百分比 * 背景宽）。</p>
     */
    public $ImageWidth;

    /**
     * @var float <p>输入在输出画面的X偏移。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为0。<br>相对于大主播背景画面左上角的横向偏移。<br>使用百分比时，期望输出为（百分比 * 背景宽）。</p>
     */
    public $LocationX;

    /**
     * @var float <p>输入在输出画面的Y偏移。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为0。<br>相对于大主播背景画面左上角的纵向偏移。<br>使用百分比时，期望输出为（百分比 * 背景宽）</p>
     */
    public $LocationY;

    /**
     * @var string <p>当InputType为3(画布)时，该值表示画布的颜色。<br>常用的颜色有：<br>红色：0xCC0033。<br>黄色：0xCC9900。<br>绿色：0xCCCC33。<br>蓝色：0x99CCFF。<br>黑色：0x000000。<br>白色：0xFFFFFF。<br>灰色：0x999999。</p>
     */
    public $Color;

    /**
     * @var integer <p>当InputType为2(图片)时，该值是水印ID。</p>
     */
    public $WatermarkId;

    /**
     * @var string <p>当InputType为8时，该值是动效贴片的URL</p>
     */
    public $WebPageUrl;

    /**
     * @param integer $ImageLayer <p>输入图层。取值范围[1，16]。<br>1)背景流（即大主播画面或画布）的 image_layer 填1。<br>2)纯音频混流，该参数也需填。<br>注意：不同输入，该值不可重复</p>
     * @param integer $InputType <p>输入类型。取值范围[0，5]。<br>不填默认为0。<br>0表示输入流为音视频。<br>2表示输入流为图片。<br>3表示输入流为画布。<br>4表示输入流为音频。<br>5表示输入流为纯视频。</p>
     * @param float $ImageHeight <p>输入画面在输出时的高度。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为输入流的高度。<br>使用百分比时，期望输出为（百分比 * 背景高）。</p>
     * @param float $ImageWidth <p>输入画面在输出时的宽度。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为输入流的宽度。<br>使用百分比时，期望输出为（百分比 * 背景宽）。</p>
     * @param float $LocationX <p>输入在输出画面的X偏移。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为0。<br>相对于大主播背景画面左上角的横向偏移。<br>使用百分比时，期望输出为（百分比 * 背景宽）。</p>
     * @param float $LocationY <p>输入在输出画面的Y偏移。取值范围：<br>像素：[0，2000]<br>百分比：[0.01，0.99]<br>不填默认为0。<br>相对于大主播背景画面左上角的纵向偏移。<br>使用百分比时，期望输出为（百分比 * 背景宽）</p>
     * @param string $Color <p>当InputType为3(画布)时，该值表示画布的颜色。<br>常用的颜色有：<br>红色：0xCC0033。<br>黄色：0xCC9900。<br>绿色：0xCCCC33。<br>蓝色：0x99CCFF。<br>黑色：0x000000。<br>白色：0xFFFFFF。<br>灰色：0x999999。</p>
     * @param integer $WatermarkId <p>当InputType为2(图片)时，该值是水印ID。</p>
     * @param string $WebPageUrl <p>当InputType为8时，该值是动效贴片的URL</p>
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
        if (array_key_exists("ImageLayer",$param) and $param["ImageLayer"] !== null) {
            $this->ImageLayer = $param["ImageLayer"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("WatermarkId",$param) and $param["WatermarkId"] !== null) {
            $this->WatermarkId = $param["WatermarkId"];
        }

        if (array_key_exists("WebPageUrl",$param) and $param["WebPageUrl"] !== null) {
            $this->WebPageUrl = $param["WebPageUrl"];
        }
    }
}

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
 * 混流布局参数。
 *
 * @method UserMediaStream getUserMediaStream() 获取用户媒体流参数。不填时腾讯云后台按照上行主播的进房顺序自动填充。
 * @method void setUserMediaStream(UserMediaStream $UserMediaStream) 设置用户媒体流参数。不填时腾讯云后台按照上行主播的进房顺序自动填充。
 * @method integer getImageWidth() 获取子画面在输出时的宽度，单位为像素值，不填默认为0。
 * @method void setImageWidth(integer $ImageWidth) 设置子画面在输出时的宽度，单位为像素值，不填默认为0。
 * @method integer getImageHeight() 获取子画面在输出时的高度，单位为像素值，不填默认为0。
 * @method void setImageHeight(integer $ImageHeight) 设置子画面在输出时的高度，单位为像素值，不填默认为0。
 * @method integer getLocationX() 获取子画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
 * @method void setLocationX(integer $LocationX) 设置子画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
 * @method integer getLocationY() 获取子画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
 * @method void setLocationY(integer $LocationY) 设置子画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
 * @method integer getZOrder() 获取子画面在输出时的层级，不填默认为0。
 * @method void setZOrder(integer $ZOrder) 设置子画面在输出时的层级，不填默认为0。
 * @method integer getRenderMode() 获取子画面在输出时的显示模式：0为裁剪，1为缩放并显示背景，2为缩放并显示黑底。不填默认为0。
 * @method void setRenderMode(integer $RenderMode) 设置子画面在输出时的显示模式：0为裁剪，1为缩放并显示背景，2为缩放并显示黑底。不填默认为0。
 * @method string getBackGroundColor() 获取【此参数配置无效，暂不支持】子画面的背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
 * @method void setBackGroundColor(string $BackGroundColor) 设置【此参数配置无效，暂不支持】子画面的背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
 * @method string getBackgroundImageUrl() 获取子画面的占位图片url，填写该参数，当用户关闭摄像头或未进入TRTC房间时，会在布局位置填充为指定图片。若指定图片与布局位置尺寸比例不一致，则会对图片进行拉伸处理，优先级高于BackGroundColor。支持png、jpg、jpeg、bmp、gif、webm格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，占位图片将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，占位图片将不会生效。
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) 设置子画面的占位图片url，填写该参数，当用户关闭摄像头或未进入TRTC房间时，会在布局位置填充为指定图片。若指定图片与布局位置尺寸比例不一致，则会对图片进行拉伸处理，优先级高于BackGroundColor。支持png、jpg、jpeg、bmp、gif、webm格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，占位图片将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，占位图片将不会生效。
 * @method McuCustomCrop getCustomCrop() 获取客户自定义裁剪，针对原始输入流裁剪
 * @method void setCustomCrop(McuCustomCrop $CustomCrop) 设置客户自定义裁剪，针对原始输入流裁剪
 * @method integer getBackgroundRenderMode() 获取子背景图在输出时的显示模式：0为裁剪，1为缩放并显示背景，2为缩放并显示黑底，3为变比例伸缩，4为自定义渲染。不填默认为3。
 * @method void setBackgroundRenderMode(integer $BackgroundRenderMode) 设置子背景图在输出时的显示模式：0为裁剪，1为缩放并显示背景，2为缩放并显示黑底，3为变比例伸缩，4为自定义渲染。不填默认为3。
 * @method string getTransparentUrl() 获取子画面的透明模版url，指向一张包含透明通道的模板图片。填写该参数，后台混流时会提取该模板图片的透明通道，将其缩放作为目标画面的透明通道，再和其他画面进行混合。您可以通过透明模版实现目标画面的半透明效果和任意形状裁剪（如圆角、星形、心形等）。 支持png格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，模板图片宽高比应接近目标画面宽高比，以避免缩放适配目标画面时出现模板效果变形；2，透明模版只有RenderMode为0（裁剪）时才生效；3，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，透明模板将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，透明模版将不会生效。
 * @method void setTransparentUrl(string $TransparentUrl) 设置子画面的透明模版url，指向一张包含透明通道的模板图片。填写该参数，后台混流时会提取该模板图片的透明通道，将其缩放作为目标画面的透明通道，再和其他画面进行混合。您可以通过透明模版实现目标画面的半透明效果和任意形状裁剪（如圆角、星形、心形等）。 支持png格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，模板图片宽高比应接近目标画面宽高比，以避免缩放适配目标画面时出现模板效果变形；2，透明模版只有RenderMode为0（裁剪）时才生效；3，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，透明模板将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，透明模版将不会生效。
 * @method McuBackgroundCustomRender getBackgroundCustomRender() 获取子背景图的自定义渲染参数，当BackgroundRenderMode为4时必须配置。
 * @method void setBackgroundCustomRender(McuBackgroundCustomRender $BackgroundCustomRender) 设置子背景图的自定义渲染参数，当BackgroundRenderMode为4时必须配置。
 * @method integer getBackGroundColorMode() 获取子背景色生效模式，默认值为0表示均不生效。
bit0:占位图缩放是否生效。
bit1:上行流缩放是否生效。
您可以将相应bit位置1启动生效，例如：
0(00)表示子背景色不生效。
1(01)表示子背景色只在占位图缩放时生效。
2(10)表示子背景色只在上行流缩放时生效。
3(11)表示子背景色在占位图缩放和上行流缩放时均生效。

 * @method void setBackGroundColorMode(integer $BackGroundColorMode) 设置子背景色生效模式，默认值为0表示均不生效。
bit0:占位图缩放是否生效。
bit1:上行流缩放是否生效。
您可以将相应bit位置1启动生效，例如：
0(00)表示子背景色不生效。
1(01)表示子背景色只在占位图缩放时生效。
2(10)表示子背景色只在上行流缩放时生效。
3(11)表示子背景色在占位图缩放和上行流缩放时均生效。
 */
class McuLayout extends AbstractModel
{
    /**
     * @var UserMediaStream 用户媒体流参数。不填时腾讯云后台按照上行主播的进房顺序自动填充。
     */
    public $UserMediaStream;

    /**
     * @var integer 子画面在输出时的宽度，单位为像素值，不填默认为0。
     */
    public $ImageWidth;

    /**
     * @var integer 子画面在输出时的高度，单位为像素值，不填默认为0。
     */
    public $ImageHeight;

    /**
     * @var integer 子画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
     */
    public $LocationX;

    /**
     * @var integer 子画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
     */
    public $LocationY;

    /**
     * @var integer 子画面在输出时的层级，不填默认为0。
     */
    public $ZOrder;

    /**
     * @var integer 子画面在输出时的显示模式：0为裁剪，1为缩放并显示背景，2为缩放并显示黑底。不填默认为0。
     */
    public $RenderMode;

    /**
     * @var string 【此参数配置无效，暂不支持】子画面的背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
     */
    public $BackGroundColor;

    /**
     * @var string 子画面的占位图片url，填写该参数，当用户关闭摄像头或未进入TRTC房间时，会在布局位置填充为指定图片。若指定图片与布局位置尺寸比例不一致，则会对图片进行拉伸处理，优先级高于BackGroundColor。支持png、jpg、jpeg、bmp、gif、webm格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，占位图片将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，占位图片将不会生效。
     */
    public $BackgroundImageUrl;

    /**
     * @var McuCustomCrop 客户自定义裁剪，针对原始输入流裁剪
     */
    public $CustomCrop;

    /**
     * @var integer 子背景图在输出时的显示模式：0为裁剪，1为缩放并显示背景，2为缩放并显示黑底，3为变比例伸缩，4为自定义渲染。不填默认为3。
     */
    public $BackgroundRenderMode;

    /**
     * @var string 子画面的透明模版url，指向一张包含透明通道的模板图片。填写该参数，后台混流时会提取该模板图片的透明通道，将其缩放作为目标画面的透明通道，再和其他画面进行混合。您可以通过透明模版实现目标画面的半透明效果和任意形状裁剪（如圆角、星形、心形等）。 支持png格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，模板图片宽高比应接近目标画面宽高比，以避免缩放适配目标画面时出现模板效果变形；2，透明模版只有RenderMode为0（裁剪）时才生效；3，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，透明模板将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，透明模版将不会生效。
     */
    public $TransparentUrl;

    /**
     * @var McuBackgroundCustomRender 子背景图的自定义渲染参数，当BackgroundRenderMode为4时必须配置。
     */
    public $BackgroundCustomRender;

    /**
     * @var integer 子背景色生效模式，默认值为0表示均不生效。
bit0:占位图缩放是否生效。
bit1:上行流缩放是否生效。
您可以将相应bit位置1启动生效，例如：
0(00)表示子背景色不生效。
1(01)表示子背景色只在占位图缩放时生效。
2(10)表示子背景色只在上行流缩放时生效。
3(11)表示子背景色在占位图缩放和上行流缩放时均生效。

     */
    public $BackGroundColorMode;

    /**
     * @param UserMediaStream $UserMediaStream 用户媒体流参数。不填时腾讯云后台按照上行主播的进房顺序自动填充。
     * @param integer $ImageWidth 子画面在输出时的宽度，单位为像素值，不填默认为0。
     * @param integer $ImageHeight 子画面在输出时的高度，单位为像素值，不填默认为0。
     * @param integer $LocationX 子画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
     * @param integer $LocationY 子画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
     * @param integer $ZOrder 子画面在输出时的层级，不填默认为0。
     * @param integer $RenderMode 子画面在输出时的显示模式：0为裁剪，1为缩放并显示背景，2为缩放并显示黑底。不填默认为0。
     * @param string $BackGroundColor 【此参数配置无效，暂不支持】子画面的背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
     * @param string $BackgroundImageUrl 子画面的占位图片url，填写该参数，当用户关闭摄像头或未进入TRTC房间时，会在布局位置填充为指定图片。若指定图片与布局位置尺寸比例不一致，则会对图片进行拉伸处理，优先级高于BackGroundColor。支持png、jpg、jpeg、bmp、gif、webm格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，占位图片将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，占位图片将不会生效。
     * @param McuCustomCrop $CustomCrop 客户自定义裁剪，针对原始输入流裁剪
     * @param integer $BackgroundRenderMode 子背景图在输出时的显示模式：0为裁剪，1为缩放并显示背景，2为缩放并显示黑底，3为变比例伸缩，4为自定义渲染。不填默认为3。
     * @param string $TransparentUrl 子画面的透明模版url，指向一张包含透明通道的模板图片。填写该参数，后台混流时会提取该模板图片的透明通道，将其缩放作为目标画面的透明通道，再和其他画面进行混合。您可以通过透明模版实现目标画面的半透明效果和任意形状裁剪（如圆角、星形、心形等）。 支持png格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，模板图片宽高比应接近目标画面宽高比，以避免缩放适配目标画面时出现模板效果变形；2，透明模版只有RenderMode为0（裁剪）时才生效；3，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，透明模板将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，透明模版将不会生效。
     * @param McuBackgroundCustomRender $BackgroundCustomRender 子背景图的自定义渲染参数，当BackgroundRenderMode为4时必须配置。
     * @param integer $BackGroundColorMode 子背景色生效模式，默认值为0表示均不生效。
bit0:占位图缩放是否生效。
bit1:上行流缩放是否生效。
您可以将相应bit位置1启动生效，例如：
0(00)表示子背景色不生效。
1(01)表示子背景色只在占位图缩放时生效。
2(10)表示子背景色只在上行流缩放时生效。
3(11)表示子背景色在占位图缩放和上行流缩放时均生效。
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
        if (array_key_exists("UserMediaStream",$param) and $param["UserMediaStream"] !== null) {
            $this->UserMediaStream = new UserMediaStream();
            $this->UserMediaStream->deserialize($param["UserMediaStream"]);
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }

        if (array_key_exists("ZOrder",$param) and $param["ZOrder"] !== null) {
            $this->ZOrder = $param["ZOrder"];
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("BackGroundColor",$param) and $param["BackGroundColor"] !== null) {
            $this->BackGroundColor = $param["BackGroundColor"];
        }

        if (array_key_exists("BackgroundImageUrl",$param) and $param["BackgroundImageUrl"] !== null) {
            $this->BackgroundImageUrl = $param["BackgroundImageUrl"];
        }

        if (array_key_exists("CustomCrop",$param) and $param["CustomCrop"] !== null) {
            $this->CustomCrop = new McuCustomCrop();
            $this->CustomCrop->deserialize($param["CustomCrop"]);
        }

        if (array_key_exists("BackgroundRenderMode",$param) and $param["BackgroundRenderMode"] !== null) {
            $this->BackgroundRenderMode = $param["BackgroundRenderMode"];
        }

        if (array_key_exists("TransparentUrl",$param) and $param["TransparentUrl"] !== null) {
            $this->TransparentUrl = $param["TransparentUrl"];
        }

        if (array_key_exists("BackgroundCustomRender",$param) and $param["BackgroundCustomRender"] !== null) {
            $this->BackgroundCustomRender = new McuBackgroundCustomRender();
            $this->BackgroundCustomRender->deserialize($param["BackgroundCustomRender"]);
        }

        if (array_key_exists("BackGroundColorMode",$param) and $param["BackGroundColorMode"] !== null) {
            $this->BackGroundColorMode = $param["BackGroundColorMode"];
        }
    }
}

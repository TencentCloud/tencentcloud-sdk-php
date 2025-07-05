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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitMemeJob请求参数结构体
 *
 * @method string getPose() 获取表情模板。
请在 [表情动图模板列表](https://cloud.tencent.com/document/product/1668/115327)  中选择期望的模板，传入 Pose 名称。
 * @method void setPose(string $Pose) 设置表情模板。
请在 [表情动图模板列表](https://cloud.tencent.com/document/product/1668/115327)  中选择期望的模板，传入 Pose 名称。
 * @method string getInputImage() 获取人像参考图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method void setInputImage(string $InputImage) 设置人像参考图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method string getInputUrl() 获取人像参考图 Url。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method void setInputUrl(string $InputUrl) 设置人像参考图 Url。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method integer getResolution() 获取生成分辨率。
真人类型支持256、512，默认为256，
卡通类型仅支持512。
 * @method void setResolution(integer $Resolution) 设置生成分辨率。
真人类型支持256、512，默认为256，
卡通类型仅支持512。
 * @method string getText() 获取自定义文案。
仅对真人类型的 Pose 生效，将在生成的表情动图中显示指定的文字。如果传入的字符串长度大于10，只截取前10个显示。
如果不传，默认使用自带的文案。
如果 text = "" 空字符串，代表不在表情动图中添加文案。
 * @method void setText(string $Text) 设置自定义文案。
仅对真人类型的 Pose 生效，将在生成的表情动图中显示指定的文字。如果传入的字符串长度大于10，只截取前10个显示。
如果不传，默认使用自带的文案。
如果 text = "" 空字符串，代表不在表情动图中添加文案。
 * @method boolean getHaircut() 获取头发遮罩开关。
true：裁剪过长的头发。
false：不裁剪过长的头发。
仅对卡通类型的 Pose 生效，默认为 false。
 * @method void setHaircut(boolean $Haircut) 设置头发遮罩开关。
true：裁剪过长的头发。
false：不裁剪过长的头发。
仅对卡通类型的 Pose 生效，默认为 false。
 * @method integer getLogoAdd() 获取为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图是 AI 生成的图片。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图是 AI 生成的图片。
 * @method LogoParam getLogoParam() 获取标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 */
class SubmitMemeJobRequest extends AbstractModel
{
    /**
     * @var string 表情模板。
请在 [表情动图模板列表](https://cloud.tencent.com/document/product/1668/115327)  中选择期望的模板，传入 Pose 名称。
     */
    public $Pose;

    /**
     * @var string 人像参考图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     */
    public $InputImage;

    /**
     * @var string 人像参考图 Url。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     */
    public $InputUrl;

    /**
     * @var integer 生成分辨率。
真人类型支持256、512，默认为256，
卡通类型仅支持512。
     */
    public $Resolution;

    /**
     * @var string 自定义文案。
仅对真人类型的 Pose 生效，将在生成的表情动图中显示指定的文字。如果传入的字符串长度大于10，只截取前10个显示。
如果不传，默认使用自带的文案。
如果 text = "" 空字符串，代表不在表情动图中添加文案。
     */
    public $Text;

    /**
     * @var boolean 头发遮罩开关。
true：裁剪过长的头发。
false：不裁剪过长的头发。
仅对卡通类型的 Pose 生效，默认为 false。
     */
    public $Haircut;

    /**
     * @var integer 为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图是 AI 生成的图片。
     */
    public $LogoAdd;

    /**
     * @var LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     */
    public $LogoParam;

    /**
     * @param string $Pose 表情模板。
请在 [表情动图模板列表](https://cloud.tencent.com/document/product/1668/115327)  中选择期望的模板，传入 Pose 名称。
     * @param string $InputImage 人像参考图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     * @param string $InputUrl 人像参考图 Url。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     * @param integer $Resolution 生成分辨率。
真人类型支持256、512，默认为256，
卡通类型仅支持512。
     * @param string $Text 自定义文案。
仅对真人类型的 Pose 生效，将在生成的表情动图中显示指定的文字。如果传入的字符串长度大于10，只截取前10个显示。
如果不传，默认使用自带的文案。
如果 text = "" 空字符串，代表不在表情动图中添加文案。
     * @param boolean $Haircut 头发遮罩开关。
true：裁剪过长的头发。
false：不裁剪过长的头发。
仅对卡通类型的 Pose 生效，默认为 false。
     * @param integer $LogoAdd 为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图是 AI 生成的图片。
     * @param LogoParam $LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
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
        if (array_key_exists("Pose",$param) and $param["Pose"] !== null) {
            $this->Pose = $param["Pose"];
        }

        if (array_key_exists("InputImage",$param) and $param["InputImage"] !== null) {
            $this->InputImage = $param["InputImage"];
        }

        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Haircut",$param) and $param["Haircut"] !== null) {
            $this->Haircut = $param["Haircut"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }
    }
}

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
 * GenerateAvatar请求参数结构体
 *
 * @method string getType() 获取<p>图像类型，默认为人像。<br>human：人像头像，仅支持人像图片输入，建议避免上传无人、多人、人像过小的图片。<br>pet：萌宠贴纸，仅支持动物图片输入，建议避免上传无动物、多动物、动物过小的图片。</p>
 * @method void setType(string $Type) 设置<p>图像类型，默认为人像。<br>human：人像头像，仅支持人像图片输入，建议避免上传无人、多人、人像过小的图片。<br>pet：萌宠贴纸，仅支持动物图片输入，建议避免上传无动物、多动物、动物过小的图片。</p>
 * @method string getStyle() 获取<p>头像风格，仅在人像模式下生效。<br>若使用人像模式，请在  <a href="https://cloud.tencent.com/document/product/1668/107741">百变头像风格列表</a> 中选择期望的风格，传入风格编号，不传默认使用 flower 风格。<br>若使用萌宠贴纸模式，无需选择风格，该参数不生效。</p>
 * @method void setStyle(string $Style) 设置<p>头像风格，仅在人像模式下生效。<br>若使用人像模式，请在  <a href="https://cloud.tencent.com/document/product/1668/107741">百变头像风格列表</a> 中选择期望的风格，传入风格编号，不传默认使用 flower 风格。<br>若使用萌宠贴纸模式，无需选择风格，该参数不生效。</p>
 * @method string getInputImage() 获取<p>输入图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setInputImage(string $InputImage) 设置<p>输入图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method string getInputUrl() 获取<p>输入图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setInputUrl(string $InputUrl) 设置<p>输入图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method integer getFilter() 获取<p>输入人像图的质量检测开关，默认开启，仅在人像模式下生效。<br>1：开启<br>0：关闭<br>建议开启检测，可提升生成效果，关闭检测可能因输入图像质量较差导致生成效果受损。<br>开启后，将增强对输入图像的质量要求，如果输入图像单边分辨率&lt;500、图像中人脸占比较小、存在多人、没有检测到人脸、人脸不完整、人脸遮挡等，将被拦截。<br>关闭后，将降低对输入图像的质量要求，如果图像中没有检测到人脸或人脸占比过小等，将被拦截。</p>
 * @method void setFilter(integer $Filter) 设置<p>输入人像图的质量检测开关，默认开启，仅在人像模式下生效。<br>1：开启<br>0：关闭<br>建议开启检测，可提升生成效果，关闭检测可能因输入图像质量较差导致生成效果受损。<br>开启后，将增强对输入图像的质量要求，如果输入图像单边分辨率&lt;500、图像中人脸占比较小、存在多人、没有检测到人脸、人脸不完整、人脸遮挡等，将被拦截。<br>关闭后，将降低对输入图像的质量要求，如果图像中没有检测到人脸或人脸占比过小等，将被拦截。</p>
 * @method integer getLogoAdd() 获取<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method string getRspImgType() 获取<p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。</p>
 * @method void setRspImgType(string $RspImgType) 设置<p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。</p>
 */
class GenerateAvatarRequest extends AbstractModel
{
    /**
     * @var string <p>图像类型，默认为人像。<br>human：人像头像，仅支持人像图片输入，建议避免上传无人、多人、人像过小的图片。<br>pet：萌宠贴纸，仅支持动物图片输入，建议避免上传无动物、多动物、动物过小的图片。</p>
     */
    public $Type;

    /**
     * @var string <p>头像风格，仅在人像模式下生效。<br>若使用人像模式，请在  <a href="https://cloud.tencent.com/document/product/1668/107741">百变头像风格列表</a> 中选择期望的风格，传入风格编号，不传默认使用 flower 风格。<br>若使用萌宠贴纸模式，无需选择风格，该参数不生效。</p>
     */
    public $Style;

    /**
     * @var string <p>输入图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $InputImage;

    /**
     * @var string <p>输入图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $InputUrl;

    /**
     * @var integer <p>输入人像图的质量检测开关，默认开启，仅在人像模式下生效。<br>1：开启<br>0：关闭<br>建议开启检测，可提升生成效果，关闭检测可能因输入图像质量较差导致生成效果受损。<br>开启后，将增强对输入图像的质量要求，如果输入图像单边分辨率&lt;500、图像中人脸占比较小、存在多人、没有检测到人脸、人脸不完整、人脸遮挡等，将被拦截。<br>关闭后，将降低对输入图像的质量要求，如果图像中没有检测到人脸或人脸占比过小等，将被拦截。</p>
     */
    public $Filter;

    /**
     * @var integer <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     */
    public $LogoParam;

    /**
     * @var string <p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。</p>
     */
    public $RspImgType;

    /**
     * @param string $Type <p>图像类型，默认为人像。<br>human：人像头像，仅支持人像图片输入，建议避免上传无人、多人、人像过小的图片。<br>pet：萌宠贴纸，仅支持动物图片输入，建议避免上传无动物、多动物、动物过小的图片。</p>
     * @param string $Style <p>头像风格，仅在人像模式下生效。<br>若使用人像模式，请在  <a href="https://cloud.tencent.com/document/product/1668/107741">百变头像风格列表</a> 中选择期望的风格，传入风格编号，不传默认使用 flower 风格。<br>若使用萌宠贴纸模式，无需选择风格，该参数不生效。</p>
     * @param string $InputImage <p>输入图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param string $InputUrl <p>输入图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param integer $Filter <p>输入人像图的质量检测开关，默认开启，仅在人像模式下生效。<br>1：开启<br>0：关闭<br>建议开启检测，可提升生成效果，关闭检测可能因输入图像质量较差导致生成效果受损。<br>开启后，将增强对输入图像的质量要求，如果输入图像单边分辨率&lt;500、图像中人脸占比较小、存在多人、没有检测到人脸、人脸不完整、人脸遮挡等，将被拦截。<br>关闭后，将降低对输入图像的质量要求，如果图像中没有检测到人脸或人脸占比过小等，将被拦截。</p>
     * @param integer $LogoAdd <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     * @param string $RspImgType <p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("InputImage",$param) and $param["InputImage"] !== null) {
            $this->InputImage = $param["InputImage"];
        }

        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }
    }
}

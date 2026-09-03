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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitQuestionSplitJob请求参数结构体
 *
 * @method array getImageUrlList() 获取<p>批量ImageUrl图片入口。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p><p>入参限制：要求pdf只能有一个url或base64</p>
 * @method void setImageUrlList(array $ImageUrlList) 设置<p>批量ImageUrl图片入口。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p><p>入参限制：要求pdf只能有一个url或base64</p>
 * @method array getImageBase64List() 获取<p>批量base64图片入口。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p><p>入参限制：要求pdf只能有一个url或base64</p>
 * @method void setImageBase64List(array $ImageBase64List) 设置<p>批量base64图片入口。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p><p>入参限制：要求pdf只能有一个url或base64</p>
 * @method string getModelType() 获取<p>选择切题模型</p><p>枚举值：</p><ul><li>youtu_crop： 轻量化切题模型，运算速度更快，适合常规切题</li><li>youtu_crop_pro： 属于切题精调大模型，针对双栏、跨栏等复杂版式识别精度大幅提升，但推理耗时更长</li></ul><p>默认值：youtu_crop</p>
 * @method void setModelType(string $ModelType) 设置<p>选择切题模型</p><p>枚举值：</p><ul><li>youtu_crop： 轻量化切题模型，运算速度更快，适合常规切题</li><li>youtu_crop_pro： 属于切题精调大模型，针对双栏、跨栏等复杂版式识别精度大幅提升，但推理耗时更长</li></ul><p>默认值：youtu_crop</p>
 */
class SubmitQuestionSplitJobRequest extends AbstractModel
{
    /**
     * @var array <p>批量ImageUrl图片入口。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p><p>入参限制：要求pdf只能有一个url或base64</p>
     */
    public $ImageUrlList;

    /**
     * @var array <p>批量base64图片入口。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p><p>入参限制：要求pdf只能有一个url或base64</p>
     */
    public $ImageBase64List;

    /**
     * @var string <p>选择切题模型</p><p>枚举值：</p><ul><li>youtu_crop： 轻量化切题模型，运算速度更快，适合常规切题</li><li>youtu_crop_pro： 属于切题精调大模型，针对双栏、跨栏等复杂版式识别精度大幅提升，但推理耗时更长</li></ul><p>默认值：youtu_crop</p>
     */
    public $ModelType;

    /**
     * @param array $ImageUrlList <p>批量ImageUrl图片入口。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p><p>入参限制：要求pdf只能有一个url或base64</p>
     * @param array $ImageBase64List <p>批量base64图片入口。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p><p>入参限制：要求pdf只能有一个url或base64</p>
     * @param string $ModelType <p>选择切题模型</p><p>枚举值：</p><ul><li>youtu_crop： 轻量化切题模型，运算速度更快，适合常规切题</li><li>youtu_crop_pro： 属于切题精调大模型，针对双栏、跨栏等复杂版式识别精度大幅提升，但推理耗时更长</li></ul><p>默认值：youtu_crop</p>
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
        if (array_key_exists("ImageUrlList",$param) and $param["ImageUrlList"] !== null) {
            $this->ImageUrlList = $param["ImageUrlList"];
        }

        if (array_key_exists("ImageBase64List",$param) and $param["ImageBase64List"] !== null) {
            $this->ImageBase64List = $param["ImageBase64List"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }
    }
}

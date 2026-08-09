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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectFaceSimilarity请求参数结构体
 *
 * @method string getImageA() 获取<p>A 图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中置信度最高的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method void setImageA(string $ImageA) 设置<p>A 图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中置信度最高的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method string getImageB() 获取<p>B 图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中置信度最高的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method void setImageB(string $ImageB) 设置<p>B 图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中置信度最高的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method string getUrlA() 获取<p>A 图片的 Url。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>A 图片的 Url、Image必须提供一个，如果都提供，只使用 Url。 </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method void setUrlA(string $UrlA) 设置<p>A 图片的 Url。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>A 图片的 Url、Image必须提供一个，如果都提供，只使用 Url。 </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method string getUrlB() 获取<p>B 图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>B 图片的 Url、Image必须提供一个，如果都提供，只使用 Url。 </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method void setUrlB(string $UrlB) 设置<p>B 图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>B 图片的 Url、Image必须提供一个，如果都提供，只使用 Url。 </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method integer getQualityControl() 获取<p>图片质量控制。 </p><ul><li><p>取值范围：<br>0: 不进行控制；<br>1: 较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况；<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况；<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况；<br>4: 很高的质量要求，各个维度均为最好或最多，在某一维度上存在轻微问题；<br>默认 0。 </p></li><li><p>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</p></li></ul>
 * @method void setQualityControl(integer $QualityControl) 设置<p>图片质量控制。 </p><ul><li><p>取值范围：<br>0: 不进行控制；<br>1: 较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况；<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况；<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况；<br>4: 很高的质量要求，各个维度均为最好或最多，在某一维度上存在轻微问题；<br>默认 0。 </p></li><li><p>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</p></li></ul>
 */
class DetectFaceSimilarityRequest extends AbstractModel
{
    /**
     * @var string <p>A 图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中置信度最高的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     */
    public $ImageA;

    /**
     * @var string <p>B 图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中置信度最高的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     */
    public $ImageB;

    /**
     * @var string <p>A 图片的 Url。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>A 图片的 Url、Image必须提供一个，如果都提供，只使用 Url。 </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     */
    public $UrlA;

    /**
     * @var string <p>B 图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>B 图片的 Url、Image必须提供一个，如果都提供，只使用 Url。 </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     */
    public $UrlB;

    /**
     * @var integer <p>图片质量控制。 </p><ul><li><p>取值范围：<br>0: 不进行控制；<br>1: 较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况；<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况；<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况；<br>4: 很高的质量要求，各个维度均为最好或最多，在某一维度上存在轻微问题；<br>默认 0。 </p></li><li><p>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</p></li></ul>
     */
    public $QualityControl;

    /**
     * @param string $ImageA <p>A 图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中置信度最高的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     * @param string $ImageB <p>B 图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中置信度最高的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     * @param string $UrlA <p>A 图片的 Url。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>A 图片的 Url、Image必须提供一个，如果都提供，只使用 Url。 </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     * @param string $UrlB <p>B 图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>B 图片的 Url、Image必须提供一个，如果都提供，只使用 Url。 </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     * @param integer $QualityControl <p>图片质量控制。 </p><ul><li><p>取值范围：<br>0: 不进行控制；<br>1: 较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况；<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况；<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况；<br>4: 很高的质量要求，各个维度均为最好或最多，在某一维度上存在轻微问题；<br>默认 0。 </p></li><li><p>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</p></li></ul>
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
        if (array_key_exists("ImageA",$param) and $param["ImageA"] !== null) {
            $this->ImageA = $param["ImageA"];
        }

        if (array_key_exists("ImageB",$param) and $param["ImageB"] !== null) {
            $this->ImageB = $param["ImageB"];
        }

        if (array_key_exists("UrlA",$param) and $param["UrlA"] !== null) {
            $this->UrlA = $param["UrlA"];
        }

        if (array_key_exists("UrlB",$param) and $param["UrlB"] !== null) {
            $this->UrlB = $param["UrlB"];
        }

        if (array_key_exists("QualityControl",$param) and $param["QualityControl"] !== null) {
            $this->QualityControl = $param["QualityControl"];
        }
    }
}

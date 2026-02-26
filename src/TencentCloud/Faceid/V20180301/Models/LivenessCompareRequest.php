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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LivenessCompare请求参数结构体
 *
 * @method string getLivenessType() 获取<p>活体检测类型。</p><ul><li>取值：LIP/ACTION/SILENT。</li><li>LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。</li></ul>
 * @method void setLivenessType(string $LivenessType) 设置<p>活体检测类型。</p><ul><li>取值：LIP/ACTION/SILENT。</li><li>LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。</li></ul>
 * @method string getImageBase64() 获取<p>用于人脸比对的照片的Base64值。</p><ul><li>Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageBase64。</li></ul>
 * @method void setImageBase64(string $ImageBase64) 设置<p>用于人脸比对的照片的Base64值。</p><ul><li>Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageBase64。</li></ul>
 * @method string getImageUrl() 获取<p>用于人脸比对照片的URL地址。</p><ul><li>图片下载后经Base64编码后的数据大小不超过3M，仅支持jpg、png格式。</li><li>图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageBase64。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
 * @method void setImageUrl(string $ImageUrl) 设置<p>用于人脸比对照片的URL地址。</p><ul><li>图片下载后经Base64编码后的数据大小不超过3M，仅支持jpg、png格式。</li><li>图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageBase64。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
 * @method string getValidateData() 获取<p>验证数据。</p><ul><li>数字模式传参：传数字验证码，验证码需先调用<a href="https://cloud.tencent.com/document/product/1007/31821">获取数字验证码接口</a>得到；</li><li>动作模式传参：传动作顺序，动作顺序需先调用<a href="https://cloud.tencent.com/document/product/1007/31822">获取动作顺序接口</a>得到；</li><li>静默模式传参：空。</li></ul>
 * @method void setValidateData(string $ValidateData) 设置<p>验证数据。</p><ul><li>数字模式传参：传数字验证码，验证码需先调用<a href="https://cloud.tencent.com/document/product/1007/31821">获取数字验证码接口</a>得到；</li><li>动作模式传参：传动作顺序，动作顺序需先调用<a href="https://cloud.tencent.com/document/product/1007/31822">获取动作顺序接口</a>得到；</li><li>静默模式传参：空。</li></ul>
 * @method string getOptional() 获取<p>额外配置，传入JSON字符串。</p><ul><li>格式如下：<br>{<br>&quot;BestFrameNum&quot;: 2  //需要返回多张最佳截图，取值范围2-10<br>}</li></ul>
 * @method void setOptional(string $Optional) 设置<p>额外配置，传入JSON字符串。</p><ul><li>格式如下：<br>{<br>&quot;BestFrameNum&quot;: 2  //需要返回多张最佳截图，取值范围2-10<br>}</li></ul>
 * @method string getVideoBase64() 获取<p>用于活体检测的视频，视频的Base64值。</p><ul><li>Base64编码后的大小不超过8M，支持mp4、avi、flv格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。</li></ul>
 * @method void setVideoBase64(string $VideoBase64) 设置<p>用于活体检测的视频，视频的Base64值。</p><ul><li>Base64编码后的大小不超过8M，支持mp4、avi、flv格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。</li></ul>
 * @method string getVideoUrl() 获取<p>用于活体检测的视频Url 地址。</p><ul><li>视频下载后经Base64编码后不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。</li><li>视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。</li><li>建议视频存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议视频存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
 * @method void setVideoUrl(string $VideoUrl) 设置<p>用于活体检测的视频Url 地址。</p><ul><li>视频下载后经Base64编码后不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。</li><li>视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。</li><li>建议视频存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议视频存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
 */
class LivenessCompareRequest extends AbstractModel
{
    /**
     * @var string <p>活体检测类型。</p><ul><li>取值：LIP/ACTION/SILENT。</li><li>LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。</li></ul>
     */
    public $LivenessType;

    /**
     * @var string <p>用于人脸比对的照片的Base64值。</p><ul><li>Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageBase64。</li></ul>
     */
    public $ImageBase64;

    /**
     * @var string <p>用于人脸比对照片的URL地址。</p><ul><li>图片下载后经Base64编码后的数据大小不超过3M，仅支持jpg、png格式。</li><li>图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageBase64。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
     */
    public $ImageUrl;

    /**
     * @var string <p>验证数据。</p><ul><li>数字模式传参：传数字验证码，验证码需先调用<a href="https://cloud.tencent.com/document/product/1007/31821">获取数字验证码接口</a>得到；</li><li>动作模式传参：传动作顺序，动作顺序需先调用<a href="https://cloud.tencent.com/document/product/1007/31822">获取动作顺序接口</a>得到；</li><li>静默模式传参：空。</li></ul>
     */
    public $ValidateData;

    /**
     * @var string <p>额外配置，传入JSON字符串。</p><ul><li>格式如下：<br>{<br>&quot;BestFrameNum&quot;: 2  //需要返回多张最佳截图，取值范围2-10<br>}</li></ul>
     */
    public $Optional;

    /**
     * @var string <p>用于活体检测的视频，视频的Base64值。</p><ul><li>Base64编码后的大小不超过8M，支持mp4、avi、flv格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。</li></ul>
     */
    public $VideoBase64;

    /**
     * @var string <p>用于活体检测的视频Url 地址。</p><ul><li>视频下载后经Base64编码后不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。</li><li>视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。</li><li>建议视频存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议视频存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
     */
    public $VideoUrl;

    /**
     * @param string $LivenessType <p>活体检测类型。</p><ul><li>取值：LIP/ACTION/SILENT。</li><li>LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。</li></ul>
     * @param string $ImageBase64 <p>用于人脸比对的照片的Base64值。</p><ul><li>Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageBase64。</li></ul>
     * @param string $ImageUrl <p>用于人脸比对照片的URL地址。</p><ul><li>图片下载后经Base64编码后的数据大小不超过3M，仅支持jpg、png格式。</li><li>图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageBase64。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
     * @param string $ValidateData <p>验证数据。</p><ul><li>数字模式传参：传数字验证码，验证码需先调用<a href="https://cloud.tencent.com/document/product/1007/31821">获取数字验证码接口</a>得到；</li><li>动作模式传参：传动作顺序，动作顺序需先调用<a href="https://cloud.tencent.com/document/product/1007/31822">获取动作顺序接口</a>得到；</li><li>静默模式传参：空。</li></ul>
     * @param string $Optional <p>额外配置，传入JSON字符串。</p><ul><li>格式如下：<br>{<br>&quot;BestFrameNum&quot;: 2  //需要返回多张最佳截图，取值范围2-10<br>}</li></ul>
     * @param string $VideoBase64 <p>用于活体检测的视频，视频的Base64值。</p><ul><li>Base64编码后的大小不超过8M，支持mp4、avi、flv格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。</li></ul>
     * @param string $VideoUrl <p>用于活体检测的视频Url 地址。</p><ul><li>视频下载后经Base64编码后不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。</li><li>视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。</li><li>建议视频存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议视频存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
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
        if (array_key_exists("LivenessType",$param) and $param["LivenessType"] !== null) {
            $this->LivenessType = $param["LivenessType"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ValidateData",$param) and $param["ValidateData"] !== null) {
            $this->ValidateData = $param["ValidateData"];
        }

        if (array_key_exists("Optional",$param) and $param["Optional"] !== null) {
            $this->Optional = $param["Optional"];
        }

        if (array_key_exists("VideoBase64",$param) and $param["VideoBase64"] !== null) {
            $this->VideoBase64 = $param["VideoBase64"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }
    }
}

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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LivenessRecognition请求参数结构体
 *
 * @method string getIdCard() 获取身份证号。
 * @method void setIdCard(string $IdCard) 设置身份证号。
 * @method string getName() 获取姓名。
- 中文请使用UTF-8编码。
 * @method void setName(string $Name) 设置姓名。
- 中文请使用UTF-8编码。
 * @method string getLivenessType() 获取活体检测类型。
- 取值：LIP/ACTION/SILENT。
- LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
 * @method void setLivenessType(string $LivenessType) 设置活体检测类型。
- 取值：LIP/ACTION/SILENT。
- LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
 * @method string getVideoBase64() 获取用于活体检测的视频，视频的BASE64值；
BASE64编码后的大小不超过8M，支持mp4、avi、flv格式。
 * @method void setVideoBase64(string $VideoBase64) 设置用于活体检测的视频，视频的BASE64值；
BASE64编码后的大小不超过8M，支持mp4、avi、flv格式。
 * @method string getVideoUrl() 获取用于活体检测的视频Url 地址。
- 视频下载后经Base64编码不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。
- 视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。
- 建议视频存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议视频存储于腾讯云。
- 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setVideoUrl(string $VideoUrl) 设置用于活体检测的视频Url 地址。
- 视频下载后经Base64编码不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。
- 视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。
- 建议视频存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议视频存储于腾讯云。
- 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method string getValidateData() 获取验证数据。
- 数字模式传参：传数字验证码，验证码需先调用<a href="https://cloud.tencent.com/document/product/1007/31821">获取数字验证码接口</a>得到；
- 动作模式传参：传动作顺序，动作顺序需先调用<a href="https://cloud.tencent.com/document/product/1007/31822">获取动作顺序接口</a>得到；
- 静默模式传参：空。
 * @method void setValidateData(string $ValidateData) 设置验证数据。
- 数字模式传参：传数字验证码，验证码需先调用<a href="https://cloud.tencent.com/document/product/1007/31821">获取数字验证码接口</a>得到；
- 动作模式传参：传动作顺序，动作顺序需先调用<a href="https://cloud.tencent.com/document/product/1007/31822">获取动作顺序接口</a>得到；
- 静默模式传参：空。
 * @method string getOptional() 获取额外配置，传入JSON字符串。
- 格式如下：
{
"BestFrameNum": 2  //需要返回多张最佳截图，取值范围2-10
}
 * @method void setOptional(string $Optional) 设置额外配置，传入JSON字符串。
- 格式如下：
{
"BestFrameNum": 2  //需要返回多张最佳截图，取值范围2-10
}
 * @method Encryption getEncryption() 获取敏感数据加密信息。
- 对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method void setEncryption(Encryption $Encryption) 设置敏感数据加密信息。
- 对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 */
class LivenessRecognitionRequest extends AbstractModel
{
    /**
     * @var string 身份证号。
     */
    public $IdCard;

    /**
     * @var string 姓名。
- 中文请使用UTF-8编码。
     */
    public $Name;

    /**
     * @var string 活体检测类型。
- 取值：LIP/ACTION/SILENT。
- LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
     */
    public $LivenessType;

    /**
     * @var string 用于活体检测的视频，视频的BASE64值；
BASE64编码后的大小不超过8M，支持mp4、avi、flv格式。
     */
    public $VideoBase64;

    /**
     * @var string 用于活体检测的视频Url 地址。
- 视频下载后经Base64编码不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。
- 视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。
- 建议视频存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议视频存储于腾讯云。
- 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $VideoUrl;

    /**
     * @var string 验证数据。
- 数字模式传参：传数字验证码，验证码需先调用<a href="https://cloud.tencent.com/document/product/1007/31821">获取数字验证码接口</a>得到；
- 动作模式传参：传动作顺序，动作顺序需先调用<a href="https://cloud.tencent.com/document/product/1007/31822">获取动作顺序接口</a>得到；
- 静默模式传参：空。
     */
    public $ValidateData;

    /**
     * @var string 额外配置，传入JSON字符串。
- 格式如下：
{
"BestFrameNum": 2  //需要返回多张最佳截图，取值范围2-10
}
     */
    public $Optional;

    /**
     * @var Encryption 敏感数据加密信息。
- 对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
     */
    public $Encryption;

    /**
     * @param string $IdCard 身份证号。
     * @param string $Name 姓名。
- 中文请使用UTF-8编码。
     * @param string $LivenessType 活体检测类型。
- 取值：LIP/ACTION/SILENT。
- LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
     * @param string $VideoBase64 用于活体检测的视频，视频的BASE64值；
BASE64编码后的大小不超过8M，支持mp4、avi、flv格式。
     * @param string $VideoUrl 用于活体检测的视频Url 地址。
- 视频下载后经Base64编码不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。
- 视频的 VideoUrl、VideoBase64 必须提供一个，如果都提供，只使用 VideoBase64。
- 建议视频存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议视频存储于腾讯云。
- 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param string $ValidateData 验证数据。
- 数字模式传参：传数字验证码，验证码需先调用<a href="https://cloud.tencent.com/document/product/1007/31821">获取数字验证码接口</a>得到；
- 动作模式传参：传动作顺序，动作顺序需先调用<a href="https://cloud.tencent.com/document/product/1007/31822">获取动作顺序接口</a>得到；
- 静默模式传参：空。
     * @param string $Optional 额外配置，传入JSON字符串。
- 格式如下：
{
"BestFrameNum": 2  //需要返回多张最佳截图，取值范围2-10
}
     * @param Encryption $Encryption 敏感数据加密信息。
- 对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
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
        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LivenessType",$param) and $param["LivenessType"] !== null) {
            $this->LivenessType = $param["LivenessType"];
        }

        if (array_key_exists("VideoBase64",$param) and $param["VideoBase64"] !== null) {
            $this->VideoBase64 = $param["VideoBase64"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("ValidateData",$param) and $param["ValidateData"] !== null) {
            $this->ValidateData = $param["ValidateData"];
        }

        if (array_key_exists("Optional",$param) and $param["Optional"] !== null) {
            $this->Optional = $param["Optional"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}

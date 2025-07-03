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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GeneralHandwritingOCR请求参数结构体
 *
 * @method string getImageBase64() 获取图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method string getImageUrl() 获取图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method string getScene() 获取场景字段，默认不用填写。
可选值:only_hw  表示只输出手写体识别结果，过滤印刷体。
 * @method void setScene(string $Scene) 设置场景字段，默认不用填写。
可选值:only_hw  表示只输出手写体识别结果，过滤印刷体。
 * @method boolean getEnableWordPolygon() 获取是否开启单字的四点定位坐标输出，默认值为false。
 * @method void setEnableWordPolygon(boolean $EnableWordPolygon) 设置是否开启单字的四点定位坐标输出，默认值为false。
 * @method boolean getEnableDetectText() 获取文本检测开关，默认值为true。
设置为false表示直接进行单行识别，可适用于识别单行手写体签名场景。
 * @method void setEnableDetectText(boolean $EnableDetectText) 设置文本检测开关，默认值为true。
设置为false表示直接进行单行识别，可适用于识别单行手写体签名场景。
 */
class GeneralHandwritingOCRRequest extends AbstractModel
{
    /**
     * @var string 图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var string 图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var string 场景字段，默认不用填写。
可选值:only_hw  表示只输出手写体识别结果，过滤印刷体。
     */
    public $Scene;

    /**
     * @var boolean 是否开启单字的四点定位坐标输出，默认值为false。
     */
    public $EnableWordPolygon;

    /**
     * @var boolean 文本检测开关，默认值为true。
设置为false表示直接进行单行识别，可适用于识别单行手写体签名场景。
     */
    public $EnableDetectText;

    /**
     * @param string $ImageBase64 图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param string $ImageUrl 图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param string $Scene 场景字段，默认不用填写。
可选值:only_hw  表示只输出手写体识别结果，过滤印刷体。
     * @param boolean $EnableWordPolygon 是否开启单字的四点定位坐标输出，默认值为false。
     * @param boolean $EnableDetectText 文本检测开关，默认值为true。
设置为false表示直接进行单行识别，可适用于识别单行手写体签名场景。
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("EnableWordPolygon",$param) and $param["EnableWordPolygon"] !== null) {
            $this->EnableWordPolygon = $param["EnableWordPolygon"];
        }

        if (array_key_exists("EnableDetectText",$param) and $param["EnableDetectText"] !== null) {
            $this->EnableDetectText = $param["EnableDetectText"];
        }
    }
}

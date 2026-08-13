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
 * ClassifyDetectOCR请求参数结构体
 *
 * @method string getImageBase64() 获取<p>图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
 * @method string getImageUrl() 获取<p>图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
 * @method array getDiscernType() 获取<p>可以指定要识别的票证类型,指定后不出现在此列表的票证将不返回类型。不指定时默认返回所有支持类别票证的识别信息。</p><p>以下是当前支持的类型：<br>IDCardFront: 身份证正面识别<br>IDCardBack: 身份证背面识别<br>Passport: 护照<br>BusinessCard: 名片识别<br>BankCard: 银行卡识别<br>VehicleLicenseFront: 行驶证主页识别<br>VehicleLicenseBack: 行驶证副页识别<br>DriverLicenseFront: 驾驶证主页识别<br>DriverLicenseBack: 驾驶证副页识别<br>PermitFront: 港澳台通行证正面<br>ResidenceBooklet: 户口本资料页<br>MainlandPermitFront: 港澳台来往内地通行证正面<br>HmtResidentPermitFront: 港澳台居住证正面<br>HmtResidentPermitBack: 港澳台居住证背面<br>EstateCert: 不动产证<br>BizLicense: 营业执照<br>ForeignPermanentResidentFront: 外国人永居证正面识别<br>ForeignPermanentResidentBack: 外国人永居证背面识别<br>RoadTransportQualificationCert: 道路运输从业资格证识别<br>RoadTransportPermit: 道路运输证识别</p>
 * @method void setDiscernType(array $DiscernType) 设置<p>可以指定要识别的票证类型,指定后不出现在此列表的票证将不返回类型。不指定时默认返回所有支持类别票证的识别信息。</p><p>以下是当前支持的类型：<br>IDCardFront: 身份证正面识别<br>IDCardBack: 身份证背面识别<br>Passport: 护照<br>BusinessCard: 名片识别<br>BankCard: 银行卡识别<br>VehicleLicenseFront: 行驶证主页识别<br>VehicleLicenseBack: 行驶证副页识别<br>DriverLicenseFront: 驾驶证主页识别<br>DriverLicenseBack: 驾驶证副页识别<br>PermitFront: 港澳台通行证正面<br>ResidenceBooklet: 户口本资料页<br>MainlandPermitFront: 港澳台来往内地通行证正面<br>HmtResidentPermitFront: 港澳台居住证正面<br>HmtResidentPermitBack: 港澳台居住证背面<br>EstateCert: 不动产证<br>BizLicense: 营业执照<br>ForeignPermanentResidentFront: 外国人永居证正面识别<br>ForeignPermanentResidentBack: 外国人永居证背面识别<br>RoadTransportQualificationCert: 道路运输从业资格证识别<br>RoadTransportPermit: 道路运输证识别</p>
 */
class ClassifyDetectOCRRequest extends AbstractModel
{
    /**
     * @var string <p>图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     */
    public $ImageUrl;

    /**
     * @var array <p>可以指定要识别的票证类型,指定后不出现在此列表的票证将不返回类型。不指定时默认返回所有支持类别票证的识别信息。</p><p>以下是当前支持的类型：<br>IDCardFront: 身份证正面识别<br>IDCardBack: 身份证背面识别<br>Passport: 护照<br>BusinessCard: 名片识别<br>BankCard: 银行卡识别<br>VehicleLicenseFront: 行驶证主页识别<br>VehicleLicenseBack: 行驶证副页识别<br>DriverLicenseFront: 驾驶证主页识别<br>DriverLicenseBack: 驾驶证副页识别<br>PermitFront: 港澳台通行证正面<br>ResidenceBooklet: 户口本资料页<br>MainlandPermitFront: 港澳台来往内地通行证正面<br>HmtResidentPermitFront: 港澳台居住证正面<br>HmtResidentPermitBack: 港澳台居住证背面<br>EstateCert: 不动产证<br>BizLicense: 营业执照<br>ForeignPermanentResidentFront: 外国人永居证正面识别<br>ForeignPermanentResidentBack: 外国人永居证背面识别<br>RoadTransportQualificationCert: 道路运输从业资格证识别<br>RoadTransportPermit: 道路运输证识别</p>
     */
    public $DiscernType;

    /**
     * @param string $ImageBase64 <p>图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。</p>
     * @param string $ImageUrl <p>图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。</p>
     * @param array $DiscernType <p>可以指定要识别的票证类型,指定后不出现在此列表的票证将不返回类型。不指定时默认返回所有支持类别票证的识别信息。</p><p>以下是当前支持的类型：<br>IDCardFront: 身份证正面识别<br>IDCardBack: 身份证背面识别<br>Passport: 护照<br>BusinessCard: 名片识别<br>BankCard: 银行卡识别<br>VehicleLicenseFront: 行驶证主页识别<br>VehicleLicenseBack: 行驶证副页识别<br>DriverLicenseFront: 驾驶证主页识别<br>DriverLicenseBack: 驾驶证副页识别<br>PermitFront: 港澳台通行证正面<br>ResidenceBooklet: 户口本资料页<br>MainlandPermitFront: 港澳台来往内地通行证正面<br>HmtResidentPermitFront: 港澳台居住证正面<br>HmtResidentPermitBack: 港澳台居住证背面<br>EstateCert: 不动产证<br>BizLicense: 营业执照<br>ForeignPermanentResidentFront: 外国人永居证正面识别<br>ForeignPermanentResidentBack: 外国人永居证背面识别<br>RoadTransportQualificationCert: 道路运输从业资格证识别<br>RoadTransportPermit: 道路运输证识别</p>
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

        if (array_key_exists("DiscernType",$param) and $param["DiscernType"] !== null) {
            $this->DiscernType = $param["DiscernType"];
        }
    }
}

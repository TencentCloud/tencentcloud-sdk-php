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
 * RecognizeGeneralCardWarn请求参数结构体
 *
 * @method string getImageUrl() 获取图片链接
 * @method void setImageUrl(string $ImageUrl) 设置图片链接
 * @method string getImageBase64() 获取图片base64
 * @method void setImageBase64(string $ImageBase64) 设置图片base64
 * @method string getCardType() 获取卡证类型参数，包含以下范围：  
General：通用卡证
IDCard：身份证 
Passport：护照 
BankCard：银行卡
VehicleLicense：行驶证
DriverLicense：驾驶证
BizLicense：营业执照 
HmtResidentPermit：港澳台居住证
ForeignPermanentResident：外国人永居证
MainlandPermit：港澳台来往内地通行证
SocialSecurityCard：社保卡
 * @method void setCardType(string $CardType) 设置卡证类型参数，包含以下范围：  
General：通用卡证
IDCard：身份证 
Passport：护照 
BankCard：银行卡
VehicleLicense：行驶证
DriverLicense：驾驶证
BizLicense：营业执照 
HmtResidentPermit：港澳台居住证
ForeignPermanentResident：外国人永居证
MainlandPermit：港澳台来往内地通行证
SocialSecurityCard：社保卡
 * @method boolean getIsPdf() 获取是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
 * @method void setIsPdf(boolean $IsPdf) 设置是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
 * @method integer getPdfPageNumber() 获取需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
 */
class RecognizeGeneralCardWarnRequest extends AbstractModel
{
    /**
     * @var string 图片链接
     */
    public $ImageUrl;

    /**
     * @var string 图片base64
     */
    public $ImageBase64;

    /**
     * @var string 卡证类型参数，包含以下范围：  
General：通用卡证
IDCard：身份证 
Passport：护照 
BankCard：银行卡
VehicleLicense：行驶证
DriverLicense：驾驶证
BizLicense：营业执照 
HmtResidentPermit：港澳台居住证
ForeignPermanentResident：外国人永居证
MainlandPermit：港澳台来往内地通行证
SocialSecurityCard：社保卡
     */
    public $CardType;

    /**
     * @var boolean 是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
     */
    public $IsPdf;

    /**
     * @var integer 需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
     */
    public $PdfPageNumber;

    /**
     * @param string $ImageUrl 图片链接
     * @param string $ImageBase64 图片base64
     * @param string $CardType 卡证类型参数，包含以下范围：  
General：通用卡证
IDCard：身份证 
Passport：护照 
BankCard：银行卡
VehicleLicense：行驶证
DriverLicense：驾驶证
BizLicense：营业执照 
HmtResidentPermit：港澳台居住证
ForeignPermanentResident：外国人永居证
MainlandPermit：港澳台来往内地通行证
SocialSecurityCard：社保卡
     * @param boolean $IsPdf 是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
     * @param integer $PdfPageNumber 需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("IsPdf",$param) and $param["IsPdf"] !== null) {
            $this->IsPdf = $param["IsPdf"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }
    }
}

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
 * @method string getImageUrl() 获取<p>图片链接</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片链接</p>
 * @method string getImageBase64() 获取<p>图片base64</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片base64</p>
 * @method string getCardType() 获取<p>卡证类型参数，选填，不填则默认为General，枚举值：<br>（如输入图片的卡证类型明确，建议填入，可降低请求耗时）</p><p>General：系统自动分类/其他类型<br>IDCard：身份证<br>Passport：护照<br>BankCard：银行卡<br>VehicleLicense：行驶证<br>DriverLicense：驾驶证<br>BizLicense：营业执照<br>HmtResidentPermit：港澳台居住证<br>ForeignPermanentResident：外国人永居证<br>MainlandPermit：港澳台来往内地通行证<br>SocialSecurityCard：社保卡</p>
 * @method void setCardType(string $CardType) 设置<p>卡证类型参数，选填，不填则默认为General，枚举值：<br>（如输入图片的卡证类型明确，建议填入，可降低请求耗时）</p><p>General：系统自动分类/其他类型<br>IDCard：身份证<br>Passport：护照<br>BankCard：银行卡<br>VehicleLicense：行驶证<br>DriverLicense：驾驶证<br>BizLicense：营业执照<br>HmtResidentPermit：港澳台居住证<br>ForeignPermanentResident：外国人永居证<br>MainlandPermit：港澳台来往内地通行证<br>SocialSecurityCard：社保卡</p>
 * @method boolean getIsPdf() 获取<p>是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。</p>
 * @method void setIsPdf(boolean $IsPdf) 设置<p>是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。</p>
 * @method integer getPdfPageNumber() 获取<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。</p>
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。</p>
 */
class RecognizeGeneralCardWarnRequest extends AbstractModel
{
    /**
     * @var string <p>图片链接</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>图片base64</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>卡证类型参数，选填，不填则默认为General，枚举值：<br>（如输入图片的卡证类型明确，建议填入，可降低请求耗时）</p><p>General：系统自动分类/其他类型<br>IDCard：身份证<br>Passport：护照<br>BankCard：银行卡<br>VehicleLicense：行驶证<br>DriverLicense：驾驶证<br>BizLicense：营业执照<br>HmtResidentPermit：港澳台居住证<br>ForeignPermanentResident：外国人永居证<br>MainlandPermit：港澳台来往内地通行证<br>SocialSecurityCard：社保卡</p>
     */
    public $CardType;

    /**
     * @var boolean <p>是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。</p>
     */
    public $IsPdf;

    /**
     * @var integer <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。</p>
     */
    public $PdfPageNumber;

    /**
     * @param string $ImageUrl <p>图片链接</p>
     * @param string $ImageBase64 <p>图片base64</p>
     * @param string $CardType <p>卡证类型参数，选填，不填则默认为General，枚举值：<br>（如输入图片的卡证类型明确，建议填入，可降低请求耗时）</p><p>General：系统自动分类/其他类型<br>IDCard：身份证<br>Passport：护照<br>BankCard：银行卡<br>VehicleLicense：行驶证<br>DriverLicense：驾驶证<br>BizLicense：营业执照<br>HmtResidentPermit：港澳台居住证<br>ForeignPermanentResident：外国人永居证<br>MainlandPermit：港澳台来往内地通行证<br>SocialSecurityCard：社保卡</p>
     * @param boolean $IsPdf <p>是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。</p>
     * @param integer $PdfPageNumber <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。</p>
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

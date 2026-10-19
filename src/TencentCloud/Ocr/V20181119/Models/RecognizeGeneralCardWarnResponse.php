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
 * RecognizeGeneralCardWarn返回参数结构体
 *
 * @method string getCardType() 获取<p>卡证类型参数，枚举值：<br>（如入参CardType未填或填入General，返回自动分类的卡证类型，未能分类的其他类型返回General；如入参CardType填入General以外的值，则不进行自动分类、返回相同的值）</p><p>General：其他类型<br>IDCard：身份证<br>Passport：护照<br>BankCard：银行卡<br>VehicleLicense：行驶证<br>DriverLicense：驾驶证<br>BizLicense：营业执照<br>HmtResidentPermit：港澳台居住证<br>ForeignPermanentResident：外国人永居证<br>MainlandPermit：港澳台来往内地通行证<br>SocialSecurityCard：社保卡</p>
 * @method void setCardType(string $CardType) 设置<p>卡证类型参数，枚举值：<br>（如入参CardType未填或填入General，返回自动分类的卡证类型，未能分类的其他类型返回General；如入参CardType填入General以外的值，则不进行自动分类、返回相同的值）</p><p>General：其他类型<br>IDCard：身份证<br>Passport：护照<br>BankCard：银行卡<br>VehicleLicense：行驶证<br>DriverLicense：驾驶证<br>BizLicense：营业执照<br>HmtResidentPermit：港澳台居住证<br>ForeignPermanentResident：外国人永居证<br>MainlandPermit：港澳台来往内地通行证<br>SocialSecurityCard：社保卡</p>
 * @method GeneralCardWarnInfo getBlur() 获取<p>模糊信息</p>
 * @method void setBlur(GeneralCardWarnInfo $Blur) 设置<p>模糊信息</p>
 * @method GeneralCardWarnInfo getBorderIncomplete() 获取<p>边框不完整信息</p>
 * @method void setBorderIncomplete(GeneralCardWarnInfo $BorderIncomplete) 设置<p>边框不完整信息</p>
 * @method GeneralCardWarnInfo getCopy() 获取<p>复印件信息</p>
 * @method void setCopy(GeneralCardWarnInfo $Copy) 设置<p>复印件信息</p>
 * @method GeneralCardWarnInfo getPs() 获取<p>ps篡改信息</p>
 * @method void setPs(GeneralCardWarnInfo $Ps) 设置<p>ps篡改信息</p>
 * @method GeneralCardWarnInfo getReflection() 获取<p>反光信息</p>
 * @method void setReflection(GeneralCardWarnInfo $Reflection) 设置<p>反光信息</p>
 * @method GeneralCardWarnInfo getReprint() 获取<p>翻拍件信息</p>
 * @method void setReprint(GeneralCardWarnInfo $Reprint) 设置<p>翻拍件信息</p>
 * @method GeneralCardWarnInfo getScreenshot() 获取<p>是否截图</p>
 * @method void setScreenshot(GeneralCardWarnInfo $Screenshot) 设置<p>是否截图</p>
 * @method GeneralCardWarnInfo getCover() 获取<p>是否遮挡</p>
 * @method void setCover(GeneralCardWarnInfo $Cover) 设置<p>是否遮挡</p>
 * @method GeneralCardWarnInfo getOverlap() 获取<p>是否重叠</p>
 * @method void setOverlap(GeneralCardWarnInfo $Overlap) 设置<p>是否重叠</p>
 * @method GeneralCardWarnInfo getWatermark() 获取<p>是否水印</p>
 * @method void setWatermark(GeneralCardWarnInfo $Watermark) 设置<p>是否水印</p>
 * @method GeneralCardWarnInfo getElectron() 获取<p>是否电子证照（目前仅支持电子身份证、电子营业执照识别</p>
 * @method void setElectron(GeneralCardWarnInfo $Electron) 设置<p>是否电子证照（目前仅支持电子身份证、电子营业执照识别</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeGeneralCardWarnResponse extends AbstractModel
{
    /**
     * @var string <p>卡证类型参数，枚举值：<br>（如入参CardType未填或填入General，返回自动分类的卡证类型，未能分类的其他类型返回General；如入参CardType填入General以外的值，则不进行自动分类、返回相同的值）</p><p>General：其他类型<br>IDCard：身份证<br>Passport：护照<br>BankCard：银行卡<br>VehicleLicense：行驶证<br>DriverLicense：驾驶证<br>BizLicense：营业执照<br>HmtResidentPermit：港澳台居住证<br>ForeignPermanentResident：外国人永居证<br>MainlandPermit：港澳台来往内地通行证<br>SocialSecurityCard：社保卡</p>
     */
    public $CardType;

    /**
     * @var GeneralCardWarnInfo <p>模糊信息</p>
     */
    public $Blur;

    /**
     * @var GeneralCardWarnInfo <p>边框不完整信息</p>
     */
    public $BorderIncomplete;

    /**
     * @var GeneralCardWarnInfo <p>复印件信息</p>
     */
    public $Copy;

    /**
     * @var GeneralCardWarnInfo <p>ps篡改信息</p>
     */
    public $Ps;

    /**
     * @var GeneralCardWarnInfo <p>反光信息</p>
     */
    public $Reflection;

    /**
     * @var GeneralCardWarnInfo <p>翻拍件信息</p>
     */
    public $Reprint;

    /**
     * @var GeneralCardWarnInfo <p>是否截图</p>
     */
    public $Screenshot;

    /**
     * @var GeneralCardWarnInfo <p>是否遮挡</p>
     */
    public $Cover;

    /**
     * @var GeneralCardWarnInfo <p>是否重叠</p>
     */
    public $Overlap;

    /**
     * @var GeneralCardWarnInfo <p>是否水印</p>
     */
    public $Watermark;

    /**
     * @var GeneralCardWarnInfo <p>是否电子证照（目前仅支持电子身份证、电子营业执照识别</p>
     */
    public $Electron;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CardType <p>卡证类型参数，枚举值：<br>（如入参CardType未填或填入General，返回自动分类的卡证类型，未能分类的其他类型返回General；如入参CardType填入General以外的值，则不进行自动分类、返回相同的值）</p><p>General：其他类型<br>IDCard：身份证<br>Passport：护照<br>BankCard：银行卡<br>VehicleLicense：行驶证<br>DriverLicense：驾驶证<br>BizLicense：营业执照<br>HmtResidentPermit：港澳台居住证<br>ForeignPermanentResident：外国人永居证<br>MainlandPermit：港澳台来往内地通行证<br>SocialSecurityCard：社保卡</p>
     * @param GeneralCardWarnInfo $Blur <p>模糊信息</p>
     * @param GeneralCardWarnInfo $BorderIncomplete <p>边框不完整信息</p>
     * @param GeneralCardWarnInfo $Copy <p>复印件信息</p>
     * @param GeneralCardWarnInfo $Ps <p>ps篡改信息</p>
     * @param GeneralCardWarnInfo $Reflection <p>反光信息</p>
     * @param GeneralCardWarnInfo $Reprint <p>翻拍件信息</p>
     * @param GeneralCardWarnInfo $Screenshot <p>是否截图</p>
     * @param GeneralCardWarnInfo $Cover <p>是否遮挡</p>
     * @param GeneralCardWarnInfo $Overlap <p>是否重叠</p>
     * @param GeneralCardWarnInfo $Watermark <p>是否水印</p>
     * @param GeneralCardWarnInfo $Electron <p>是否电子证照（目前仅支持电子身份证、电子营业执照识别</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("Blur",$param) and $param["Blur"] !== null) {
            $this->Blur = new GeneralCardWarnInfo();
            $this->Blur->deserialize($param["Blur"]);
        }

        if (array_key_exists("BorderIncomplete",$param) and $param["BorderIncomplete"] !== null) {
            $this->BorderIncomplete = new GeneralCardWarnInfo();
            $this->BorderIncomplete->deserialize($param["BorderIncomplete"]);
        }

        if (array_key_exists("Copy",$param) and $param["Copy"] !== null) {
            $this->Copy = new GeneralCardWarnInfo();
            $this->Copy->deserialize($param["Copy"]);
        }

        if (array_key_exists("Ps",$param) and $param["Ps"] !== null) {
            $this->Ps = new GeneralCardWarnInfo();
            $this->Ps->deserialize($param["Ps"]);
        }

        if (array_key_exists("Reflection",$param) and $param["Reflection"] !== null) {
            $this->Reflection = new GeneralCardWarnInfo();
            $this->Reflection->deserialize($param["Reflection"]);
        }

        if (array_key_exists("Reprint",$param) and $param["Reprint"] !== null) {
            $this->Reprint = new GeneralCardWarnInfo();
            $this->Reprint->deserialize($param["Reprint"]);
        }

        if (array_key_exists("Screenshot",$param) and $param["Screenshot"] !== null) {
            $this->Screenshot = new GeneralCardWarnInfo();
            $this->Screenshot->deserialize($param["Screenshot"]);
        }

        if (array_key_exists("Cover",$param) and $param["Cover"] !== null) {
            $this->Cover = new GeneralCardWarnInfo();
            $this->Cover->deserialize($param["Cover"]);
        }

        if (array_key_exists("Overlap",$param) and $param["Overlap"] !== null) {
            $this->Overlap = new GeneralCardWarnInfo();
            $this->Overlap->deserialize($param["Overlap"]);
        }

        if (array_key_exists("Watermark",$param) and $param["Watermark"] !== null) {
            $this->Watermark = new GeneralCardWarnInfo();
            $this->Watermark->deserialize($param["Watermark"]);
        }

        if (array_key_exists("Electron",$param) and $param["Electron"] !== null) {
            $this->Electron = new GeneralCardWarnInfo();
            $this->Electron->deserialize($param["Electron"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
 * HKIDCardOCR返回参数结构体
 *
 * @method string getCnName() 获取<p>中文姓名</p>
 * @method void setCnName(string $CnName) 设置<p>中文姓名</p>
 * @method string getEnName() 获取<p>英文姓名</p>
 * @method void setEnName(string $EnName) 设置<p>英文姓名</p>
 * @method string getTelexCode() 获取<p>中文姓名对应电码</p>
 * @method void setTelexCode(string $TelexCode) 设置<p>中文姓名对应电码</p>
 * @method string getSex() 获取<p>性别 ：“男M”或“女F”</p>
 * @method void setSex(string $Sex) 设置<p>性别 ：“男M”或“女F”</p>
 * @method string getBirthday() 获取<p>出生日期</p>
 * @method void setBirthday(string $Birthday) 设置<p>出生日期</p>
 * @method integer getPermanent() 获取<p>永久性居民身份证。<br>0：非永久；<br>1：永久；<br>-1：未知。</p>
 * @method void setPermanent(integer $Permanent) 设置<p>永久性居民身份证。<br>0：非永久；<br>1：永久；<br>-1：未知。</p>
 * @method string getIdNum() 获取<p>身份证号码</p>
 * @method void setIdNum(string $IdNum) 设置<p>身份证号码</p>
 * @method string getSymbol() 获取<p>证件符号，出生日期下的符号，例如&quot;***AZ&quot;</p>
 * @method void setSymbol(string $Symbol) 设置<p>证件符号，出生日期下的符号，例如&quot;***AZ&quot;</p>
 * @method string getFirstIssueDate() 获取<p>首次签发日期</p>
 * @method void setFirstIssueDate(string $FirstIssueDate) 设置<p>首次签发日期</p>
 * @method string getCurrentIssueDate() 获取<p>最近领用日期</p>
 * @method void setCurrentIssueDate(string $CurrentIssueDate) 设置<p>最近领用日期</p>
 * @method integer getFakeDetectResult() 获取<p>真假判断。<br>0：无法判断（图像模糊、不完整、反光、过暗等导致无法判断）；<br>1：假；<br>2：真。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeDetectResult(integer $FakeDetectResult) 设置<p>真假判断。<br>0：无法判断（图像模糊、不完整、反光、过暗等导致无法判断）；<br>1：假；<br>2：真。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHeadImage() 获取<p>Base64编码的证件左侧人像大图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadImage(string $HeadImage) 设置<p>Base64编码的证件左侧人像大图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSmallHeadImage() 获取<p>Base64编码的证件右侧人像小图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmallHeadImage(string $SmallHeadImage) 设置<p>Base64编码的证件右侧人像小图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWarningCode() 获取<p>该字段已废弃， 将固定返回空数组，不建议使用。</p>
 * @method void setWarningCode(array $WarningCode) 设置<p>该字段已废弃， 将固定返回空数组，不建议使用。</p>
 * @method array getWarnCardInfos() 获取<p>该字段仅对国际站请求起作用，国内站该字段将固定返回空数组。国际站告警码如下：    告警码-9101 证件边框不完整告警-9102 证件复印件告警-9103 证件翻拍告警-9104 证件PS告警-9107 证件反光告警-9108 证件模糊告警-9109 告警能力未开通</p>
 * @method void setWarnCardInfos(array $WarnCardInfos) 设置<p>该字段仅对国际站请求起作用，国内站该字段将固定返回空数组。国际站告警码如下：    告警码-9101 证件边框不完整告警-9102 证件复印件告警-9103 证件翻拍告警-9104 证件PS告警-9107 证件反光告警-9108 证件模糊告警-9109 告警能力未开通</p>
 * @method string getWindowEmbeddedText() 获取<p>证件透明视窗内的文本信息</p>
 * @method void setWindowEmbeddedText(string $WindowEmbeddedText) 设置<p>证件透明视窗内的文本信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class HKIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string <p>中文姓名</p>
     */
    public $CnName;

    /**
     * @var string <p>英文姓名</p>
     */
    public $EnName;

    /**
     * @var string <p>中文姓名对应电码</p>
     */
    public $TelexCode;

    /**
     * @var string <p>性别 ：“男M”或“女F”</p>
     */
    public $Sex;

    /**
     * @var string <p>出生日期</p>
     */
    public $Birthday;

    /**
     * @var integer <p>永久性居民身份证。<br>0：非永久；<br>1：永久；<br>-1：未知。</p>
     */
    public $Permanent;

    /**
     * @var string <p>身份证号码</p>
     */
    public $IdNum;

    /**
     * @var string <p>证件符号，出生日期下的符号，例如&quot;***AZ&quot;</p>
     */
    public $Symbol;

    /**
     * @var string <p>首次签发日期</p>
     */
    public $FirstIssueDate;

    /**
     * @var string <p>最近领用日期</p>
     */
    public $CurrentIssueDate;

    /**
     * @var integer <p>真假判断。<br>0：无法判断（图像模糊、不完整、反光、过暗等导致无法判断）；<br>1：假；<br>2：真。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $FakeDetectResult;

    /**
     * @var string <p>Base64编码的证件左侧人像大图</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadImage;

    /**
     * @var string <p>Base64编码的证件右侧人像小图</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmallHeadImage;

    /**
     * @var array <p>该字段已废弃， 将固定返回空数组，不建议使用。</p>
     * @deprecated
     */
    public $WarningCode;

    /**
     * @var array <p>该字段仅对国际站请求起作用，国内站该字段将固定返回空数组。国际站告警码如下：    告警码-9101 证件边框不完整告警-9102 证件复印件告警-9103 证件翻拍告警-9104 证件PS告警-9107 证件反光告警-9108 证件模糊告警-9109 告警能力未开通</p>
     */
    public $WarnCardInfos;

    /**
     * @var string <p>证件透明视窗内的文本信息</p>
     */
    public $WindowEmbeddedText;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CnName <p>中文姓名</p>
     * @param string $EnName <p>英文姓名</p>
     * @param string $TelexCode <p>中文姓名对应电码</p>
     * @param string $Sex <p>性别 ：“男M”或“女F”</p>
     * @param string $Birthday <p>出生日期</p>
     * @param integer $Permanent <p>永久性居民身份证。<br>0：非永久；<br>1：永久；<br>-1：未知。</p>
     * @param string $IdNum <p>身份证号码</p>
     * @param string $Symbol <p>证件符号，出生日期下的符号，例如&quot;***AZ&quot;</p>
     * @param string $FirstIssueDate <p>首次签发日期</p>
     * @param string $CurrentIssueDate <p>最近领用日期</p>
     * @param integer $FakeDetectResult <p>真假判断。<br>0：无法判断（图像模糊、不完整、反光、过暗等导致无法判断）；<br>1：假；<br>2：真。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HeadImage <p>Base64编码的证件左侧人像大图</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SmallHeadImage <p>Base64编码的证件右侧人像小图</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WarningCode <p>该字段已废弃， 将固定返回空数组，不建议使用。</p>
     * @param array $WarnCardInfos <p>该字段仅对国际站请求起作用，国内站该字段将固定返回空数组。国际站告警码如下：    告警码-9101 证件边框不完整告警-9102 证件复印件告警-9103 证件翻拍告警-9104 证件PS告警-9107 证件反光告警-9108 证件模糊告警-9109 告警能力未开通</p>
     * @param string $WindowEmbeddedText <p>证件透明视窗内的文本信息</p>
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
        if (array_key_exists("CnName",$param) and $param["CnName"] !== null) {
            $this->CnName = $param["CnName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("TelexCode",$param) and $param["TelexCode"] !== null) {
            $this->TelexCode = $param["TelexCode"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Permanent",$param) and $param["Permanent"] !== null) {
            $this->Permanent = $param["Permanent"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("FirstIssueDate",$param) and $param["FirstIssueDate"] !== null) {
            $this->FirstIssueDate = $param["FirstIssueDate"];
        }

        if (array_key_exists("CurrentIssueDate",$param) and $param["CurrentIssueDate"] !== null) {
            $this->CurrentIssueDate = $param["CurrentIssueDate"];
        }

        if (array_key_exists("FakeDetectResult",$param) and $param["FakeDetectResult"] !== null) {
            $this->FakeDetectResult = $param["FakeDetectResult"];
        }

        if (array_key_exists("HeadImage",$param) and $param["HeadImage"] !== null) {
            $this->HeadImage = $param["HeadImage"];
        }

        if (array_key_exists("SmallHeadImage",$param) and $param["SmallHeadImage"] !== null) {
            $this->SmallHeadImage = $param["SmallHeadImage"];
        }

        if (array_key_exists("WarningCode",$param) and $param["WarningCode"] !== null) {
            $this->WarningCode = $param["WarningCode"];
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("WindowEmbeddedText",$param) and $param["WindowEmbeddedText"] !== null) {
            $this->WindowEmbeddedText = $param["WindowEmbeddedText"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

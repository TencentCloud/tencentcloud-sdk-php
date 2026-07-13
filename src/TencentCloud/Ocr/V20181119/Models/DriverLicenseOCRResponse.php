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
 * DriverLicenseOCR返回参数结构体
 *
 * @method string getName() 获取<p>驾驶证正页姓名</p>
 * @method void setName(string $Name) 设置<p>驾驶证正页姓名</p>
 * @method string getSex() 获取<p>性别</p>
 * @method void setSex(string $Sex) 设置<p>性别</p>
 * @method string getNationality() 获取<p>国籍</p>
 * @method void setNationality(string $Nationality) 设置<p>国籍</p>
 * @method string getAddress() 获取<p>住址</p>
 * @method void setAddress(string $Address) 设置<p>住址</p>
 * @method string getDateOfBirth() 获取<p>出生日期（YYYY-MM-DD）</p>
 * @method void setDateOfBirth(string $DateOfBirth) 设置<p>出生日期（YYYY-MM-DD）</p>
 * @method string getDateOfFirstIssue() 获取<p>初次领证日期（YYYY-MM-DD）</p>
 * @method void setDateOfFirstIssue(string $DateOfFirstIssue) 设置<p>初次领证日期（YYYY-MM-DD）</p>
 * @method string getClass() 获取<p>准驾车型</p>
 * @method void setClass(string $Class) 设置<p>准驾车型</p>
 * @method string getStartDate() 获取<p>有效期开始时间（YYYY-MM-DD）</p>
 * @method void setStartDate(string $StartDate) 设置<p>有效期开始时间（YYYY-MM-DD）</p>
 * @method string getEndDate() 获取<p>有效期截止时间（新版驾驶证返回 YYYY-MM-DD，老版驾驶证返回有效期限 X年；若驾驶证有效期为长期，则返回&quot;长期&quot;）</p>
 * @method void setEndDate(string $EndDate) 设置<p>有效期截止时间（新版驾驶证返回 YYYY-MM-DD，老版驾驶证返回有效期限 X年；若驾驶证有效期为长期，则返回&quot;长期&quot;）</p>
 * @method string getCardCode() 获取<p>驾驶证正页证号</p>
 * @method void setCardCode(string $CardCode) 设置<p>驾驶证正页证号</p>
 * @method string getArchivesCode() 获取<p>档案编号</p>
 * @method void setArchivesCode(string $ArchivesCode) 设置<p>档案编号</p>
 * @method string getRecord() 获取<p>记录</p>
 * @method void setRecord(string $Record) 设置<p>记录</p>
 * @method array getRecognizeWarnCode() 获取<p>Code 告警码列表和释义：<br>-9102  复印件告警<br>-9103  翻拍件告警<br>-9104  反光告警<br>-9105  模糊告警<br>-9106  边框不完整告警<br>注：告警码可以同时存在多个</p>
 * @method void setRecognizeWarnCode(array $RecognizeWarnCode) 设置<p>Code 告警码列表和释义：<br>-9102  复印件告警<br>-9103  翻拍件告警<br>-9104  反光告警<br>-9105  模糊告警<br>-9106  边框不完整告警<br>注：告警码可以同时存在多个</p>
 * @method array getRecognizeWarnMsg() 获取<p>告警码说明：<br>WARN_DRIVER_LICENSE_COPY_CARD 复印件告警<br>WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警<br>WARN_DRIVER_LICENSE_REFLECTION 反光告警<br>WARN_DRIVER_LICENSE_BLUR 模糊告警<br>WARN_DRIVER_LICENSE_BORDER_INCOMPLETE 边框不完整告警<br>注：告警信息可以同时存在多个</p>
 * @method void setRecognizeWarnMsg(array $RecognizeWarnMsg) 设置<p>告警码说明：<br>WARN_DRIVER_LICENSE_COPY_CARD 复印件告警<br>WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警<br>WARN_DRIVER_LICENSE_REFLECTION 反光告警<br>WARN_DRIVER_LICENSE_BLUR 模糊告警<br>WARN_DRIVER_LICENSE_BORDER_INCOMPLETE 边框不完整告警<br>注：告警信息可以同时存在多个</p>
 * @method string getIssuingAuthority() 获取<p>发证单位</p>
 * @method void setIssuingAuthority(string $IssuingAuthority) 设置<p>发证单位</p>
 * @method string getState() 获取<p>状态（仅电子驾驶证支持返回该字段）</p>
 * @method void setState(string $State) 设置<p>状态（仅电子驾驶证支持返回该字段）</p>
 * @method string getCumulativeScore() 获取<p>累积记分（仅电子驾驶证支持返回该字段）</p>
 * @method void setCumulativeScore(string $CumulativeScore) 设置<p>累积记分（仅电子驾驶证支持返回该字段）</p>
 * @method string getCurrentTime() 获取<p>当前时间（仅电子驾驶证支持返回该字段）</p>
 * @method void setCurrentTime(string $CurrentTime) 设置<p>当前时间（仅电子驾驶证支持返回该字段）</p>
 * @method string getGenerateTime() 获取<p>生成时间（仅电子驾驶证支持返回该字段）</p>
 * @method void setGenerateTime(string $GenerateTime) 设置<p>生成时间（仅电子驾驶证支持返回该字段）</p>
 * @method string getBackPageName() 获取<p>驾驶证副页姓名</p>
 * @method void setBackPageName(string $BackPageName) 设置<p>驾驶证副页姓名</p>
 * @method string getBackPageCardCode() 获取<p>驾驶证副页证号</p>
 * @method void setBackPageCardCode(string $BackPageCardCode) 设置<p>驾驶证副页证号</p>
 * @method string getDriverLicenseType() 获取<p>驾驶证类型<br>电子驾驶证：Electronic<br>普通驾驶证：Normal</p>
 * @method void setDriverLicenseType(string $DriverLicenseType) 设置<p>驾驶证类型<br>电子驾驶证：Electronic<br>普通驾驶证：Normal</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DriverLicenseOCRResponse extends AbstractModel
{
    /**
     * @var string <p>驾驶证正页姓名</p>
     */
    public $Name;

    /**
     * @var string <p>性别</p>
     */
    public $Sex;

    /**
     * @var string <p>国籍</p>
     */
    public $Nationality;

    /**
     * @var string <p>住址</p>
     */
    public $Address;

    /**
     * @var string <p>出生日期（YYYY-MM-DD）</p>
     */
    public $DateOfBirth;

    /**
     * @var string <p>初次领证日期（YYYY-MM-DD）</p>
     */
    public $DateOfFirstIssue;

    /**
     * @var string <p>准驾车型</p>
     */
    public $Class;

    /**
     * @var string <p>有效期开始时间（YYYY-MM-DD）</p>
     */
    public $StartDate;

    /**
     * @var string <p>有效期截止时间（新版驾驶证返回 YYYY-MM-DD，老版驾驶证返回有效期限 X年；若驾驶证有效期为长期，则返回&quot;长期&quot;）</p>
     */
    public $EndDate;

    /**
     * @var string <p>驾驶证正页证号</p>
     */
    public $CardCode;

    /**
     * @var string <p>档案编号</p>
     */
    public $ArchivesCode;

    /**
     * @var string <p>记录</p>
     */
    public $Record;

    /**
     * @var array <p>Code 告警码列表和释义：<br>-9102  复印件告警<br>-9103  翻拍件告警<br>-9104  反光告警<br>-9105  模糊告警<br>-9106  边框不完整告警<br>注：告警码可以同时存在多个</p>
     */
    public $RecognizeWarnCode;

    /**
     * @var array <p>告警码说明：<br>WARN_DRIVER_LICENSE_COPY_CARD 复印件告警<br>WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警<br>WARN_DRIVER_LICENSE_REFLECTION 反光告警<br>WARN_DRIVER_LICENSE_BLUR 模糊告警<br>WARN_DRIVER_LICENSE_BORDER_INCOMPLETE 边框不完整告警<br>注：告警信息可以同时存在多个</p>
     */
    public $RecognizeWarnMsg;

    /**
     * @var string <p>发证单位</p>
     */
    public $IssuingAuthority;

    /**
     * @var string <p>状态（仅电子驾驶证支持返回该字段）</p>
     */
    public $State;

    /**
     * @var string <p>累积记分（仅电子驾驶证支持返回该字段）</p>
     */
    public $CumulativeScore;

    /**
     * @var string <p>当前时间（仅电子驾驶证支持返回该字段）</p>
     */
    public $CurrentTime;

    /**
     * @var string <p>生成时间（仅电子驾驶证支持返回该字段）</p>
     */
    public $GenerateTime;

    /**
     * @var string <p>驾驶证副页姓名</p>
     */
    public $BackPageName;

    /**
     * @var string <p>驾驶证副页证号</p>
     */
    public $BackPageCardCode;

    /**
     * @var string <p>驾驶证类型<br>电子驾驶证：Electronic<br>普通驾驶证：Normal</p>
     */
    public $DriverLicenseType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>驾驶证正页姓名</p>
     * @param string $Sex <p>性别</p>
     * @param string $Nationality <p>国籍</p>
     * @param string $Address <p>住址</p>
     * @param string $DateOfBirth <p>出生日期（YYYY-MM-DD）</p>
     * @param string $DateOfFirstIssue <p>初次领证日期（YYYY-MM-DD）</p>
     * @param string $Class <p>准驾车型</p>
     * @param string $StartDate <p>有效期开始时间（YYYY-MM-DD）</p>
     * @param string $EndDate <p>有效期截止时间（新版驾驶证返回 YYYY-MM-DD，老版驾驶证返回有效期限 X年；若驾驶证有效期为长期，则返回&quot;长期&quot;）</p>
     * @param string $CardCode <p>驾驶证正页证号</p>
     * @param string $ArchivesCode <p>档案编号</p>
     * @param string $Record <p>记录</p>
     * @param array $RecognizeWarnCode <p>Code 告警码列表和释义：<br>-9102  复印件告警<br>-9103  翻拍件告警<br>-9104  反光告警<br>-9105  模糊告警<br>-9106  边框不完整告警<br>注：告警码可以同时存在多个</p>
     * @param array $RecognizeWarnMsg <p>告警码说明：<br>WARN_DRIVER_LICENSE_COPY_CARD 复印件告警<br>WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警<br>WARN_DRIVER_LICENSE_REFLECTION 反光告警<br>WARN_DRIVER_LICENSE_BLUR 模糊告警<br>WARN_DRIVER_LICENSE_BORDER_INCOMPLETE 边框不完整告警<br>注：告警信息可以同时存在多个</p>
     * @param string $IssuingAuthority <p>发证单位</p>
     * @param string $State <p>状态（仅电子驾驶证支持返回该字段）</p>
     * @param string $CumulativeScore <p>累积记分（仅电子驾驶证支持返回该字段）</p>
     * @param string $CurrentTime <p>当前时间（仅电子驾驶证支持返回该字段）</p>
     * @param string $GenerateTime <p>生成时间（仅电子驾驶证支持返回该字段）</p>
     * @param string $BackPageName <p>驾驶证副页姓名</p>
     * @param string $BackPageCardCode <p>驾驶证副页证号</p>
     * @param string $DriverLicenseType <p>驾驶证类型<br>电子驾驶证：Electronic<br>普通驾驶证：Normal</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("DateOfFirstIssue",$param) and $param["DateOfFirstIssue"] !== null) {
            $this->DateOfFirstIssue = $param["DateOfFirstIssue"];
        }

        if (array_key_exists("Class",$param) and $param["Class"] !== null) {
            $this->Class = $param["Class"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("CardCode",$param) and $param["CardCode"] !== null) {
            $this->CardCode = $param["CardCode"];
        }

        if (array_key_exists("ArchivesCode",$param) and $param["ArchivesCode"] !== null) {
            $this->ArchivesCode = $param["ArchivesCode"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("RecognizeWarnCode",$param) and $param["RecognizeWarnCode"] !== null) {
            $this->RecognizeWarnCode = $param["RecognizeWarnCode"];
        }

        if (array_key_exists("RecognizeWarnMsg",$param) and $param["RecognizeWarnMsg"] !== null) {
            $this->RecognizeWarnMsg = $param["RecognizeWarnMsg"];
        }

        if (array_key_exists("IssuingAuthority",$param) and $param["IssuingAuthority"] !== null) {
            $this->IssuingAuthority = $param["IssuingAuthority"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CumulativeScore",$param) and $param["CumulativeScore"] !== null) {
            $this->CumulativeScore = $param["CumulativeScore"];
        }

        if (array_key_exists("CurrentTime",$param) and $param["CurrentTime"] !== null) {
            $this->CurrentTime = $param["CurrentTime"];
        }

        if (array_key_exists("GenerateTime",$param) and $param["GenerateTime"] !== null) {
            $this->GenerateTime = $param["GenerateTime"];
        }

        if (array_key_exists("BackPageName",$param) and $param["BackPageName"] !== null) {
            $this->BackPageName = $param["BackPageName"];
        }

        if (array_key_exists("BackPageCardCode",$param) and $param["BackPageCardCode"] !== null) {
            $this->BackPageCardCode = $param["BackPageCardCode"];
        }

        if (array_key_exists("DriverLicenseType",$param) and $param["DriverLicenseType"] !== null) {
            $this->DriverLicenseType = $param["DriverLicenseType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

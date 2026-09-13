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
 * RecognizeThaiIDCardOCR返回参数结构体
 *
 * @method string getID() 获取<p>身份证号码</p>
 * @method void setID(string $ID) 设置<p>身份证号码</p>
 * @method string getThaiName() 获取<p>泰文姓名</p>
 * @method void setThaiName(string $ThaiName) 设置<p>泰文姓名</p>
 * @method string getEnFirstName() 获取<p>英文姓名</p>
 * @method void setEnFirstName(string $EnFirstName) 设置<p>英文姓名</p>
 * @method string getEnLastName() 获取<p>英文姓名</p>
 * @method void setEnLastName(string $EnLastName) 设置<p>英文姓名</p>
 * @method string getIssueDate() 获取<p>泰文签发日期</p>
 * @method void setIssueDate(string $IssueDate) 设置<p>泰文签发日期</p>
 * @method string getExpirationDate() 获取<p>泰文到期日期</p>
 * @method void setExpirationDate(string $ExpirationDate) 设置<p>泰文到期日期</p>
 * @method string getEnIssueDate() 获取<p>英文签发日期</p>
 * @method void setEnIssueDate(string $EnIssueDate) 设置<p>英文签发日期</p>
 * @method string getEnExpirationDate() 获取<p>英文到期日期</p>
 * @method void setEnExpirationDate(string $EnExpirationDate) 设置<p>英文到期日期</p>
 * @method string getBirthday() 获取<p>泰文出生日期</p>
 * @method void setBirthday(string $Birthday) 设置<p>泰文出生日期</p>
 * @method string getEnBirthday() 获取<p>英文出生日期</p>
 * @method void setEnBirthday(string $EnBirthday) 设置<p>英文出生日期</p>
 * @method string getReligion() 获取<p>宗教信仰</p>
 * @method void setReligion(string $Religion) 设置<p>宗教信仰</p>
 * @method string getSerialNumber() 获取<p>序列号</p>
 * @method void setSerialNumber(string $SerialNumber) 设置<p>序列号</p>
 * @method string getAddress() 获取<p>地址</p>
 * @method void setAddress(string $Address) 设置<p>地址</p>
 * @method string getLaserID() 获取<p>背面号码</p>
 * @method void setLaserID(string $LaserID) 设置<p>背面号码</p>
 * @method string getPortraitImage() 获取<p>证件人像照片抠取</p>
 * @method void setPortraitImage(string $PortraitImage) 设置<p>证件人像照片抠取</p>
 * @method array getWarnCardInfos() 获取<p>告警码<br>-9101 证件边框不完整告警<br>-9102 证件复印件告警<br>-9103 证件翻拍告警<br>-9104 证件PS告警<br>-9107 证件反光告警<br>-9108 证件模糊告警<br>-9109 告警能力未开通</p>
 * @method void setWarnCardInfos(array $WarnCardInfos) 设置<p>告警码<br>-9101 证件边框不完整告警<br>-9102 证件复印件告警<br>-9103 证件翻拍告警<br>-9104 证件PS告警<br>-9107 证件反光告警<br>-9108 证件模糊告警<br>-9109 告警能力未开通</p>
 * @method string getAdvancedInfo() 获取<p>该字段已废弃， 将固定返回&quot;1&quot;，不建议使用。</p>
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置<p>该字段已废弃， 将固定返回&quot;1&quot;，不建议使用。</p>
 * @method integer getCardCount() 获取<p>卡证正面图片中，证件主体的数量（仅请求曼谷地域[ap-bangkok]返回）</p>
 * @method void setCardCount(integer $CardCount) 设置<p>卡证正面图片中，证件主体的数量（仅请求曼谷地域[ap-bangkok]返回）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeThaiIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string <p>身份证号码</p>
     */
    public $ID;

    /**
     * @var string <p>泰文姓名</p>
     */
    public $ThaiName;

    /**
     * @var string <p>英文姓名</p>
     */
    public $EnFirstName;

    /**
     * @var string <p>英文姓名</p>
     */
    public $EnLastName;

    /**
     * @var string <p>泰文签发日期</p>
     */
    public $IssueDate;

    /**
     * @var string <p>泰文到期日期</p>
     */
    public $ExpirationDate;

    /**
     * @var string <p>英文签发日期</p>
     */
    public $EnIssueDate;

    /**
     * @var string <p>英文到期日期</p>
     */
    public $EnExpirationDate;

    /**
     * @var string <p>泰文出生日期</p>
     */
    public $Birthday;

    /**
     * @var string <p>英文出生日期</p>
     */
    public $EnBirthday;

    /**
     * @var string <p>宗教信仰</p>
     */
    public $Religion;

    /**
     * @var string <p>序列号</p>
     */
    public $SerialNumber;

    /**
     * @var string <p>地址</p>
     */
    public $Address;

    /**
     * @var string <p>背面号码</p>
     */
    public $LaserID;

    /**
     * @var string <p>证件人像照片抠取</p>
     */
    public $PortraitImage;

    /**
     * @var array <p>告警码<br>-9101 证件边框不完整告警<br>-9102 证件复印件告警<br>-9103 证件翻拍告警<br>-9104 证件PS告警<br>-9107 证件反光告警<br>-9108 证件模糊告警<br>-9109 告警能力未开通</p>
     */
    public $WarnCardInfos;

    /**
     * @var string <p>该字段已废弃， 将固定返回&quot;1&quot;，不建议使用。</p>
     * @deprecated
     */
    public $AdvancedInfo;

    /**
     * @var integer <p>卡证正面图片中，证件主体的数量（仅请求曼谷地域[ap-bangkok]返回）</p>
     */
    public $CardCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ID <p>身份证号码</p>
     * @param string $ThaiName <p>泰文姓名</p>
     * @param string $EnFirstName <p>英文姓名</p>
     * @param string $EnLastName <p>英文姓名</p>
     * @param string $IssueDate <p>泰文签发日期</p>
     * @param string $ExpirationDate <p>泰文到期日期</p>
     * @param string $EnIssueDate <p>英文签发日期</p>
     * @param string $EnExpirationDate <p>英文到期日期</p>
     * @param string $Birthday <p>泰文出生日期</p>
     * @param string $EnBirthday <p>英文出生日期</p>
     * @param string $Religion <p>宗教信仰</p>
     * @param string $SerialNumber <p>序列号</p>
     * @param string $Address <p>地址</p>
     * @param string $LaserID <p>背面号码</p>
     * @param string $PortraitImage <p>证件人像照片抠取</p>
     * @param array $WarnCardInfos <p>告警码<br>-9101 证件边框不完整告警<br>-9102 证件复印件告警<br>-9103 证件翻拍告警<br>-9104 证件PS告警<br>-9107 证件反光告警<br>-9108 证件模糊告警<br>-9109 告警能力未开通</p>
     * @param string $AdvancedInfo <p>该字段已废弃， 将固定返回&quot;1&quot;，不建议使用。</p>
     * @param integer $CardCount <p>卡证正面图片中，证件主体的数量（仅请求曼谷地域[ap-bangkok]返回）</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ThaiName",$param) and $param["ThaiName"] !== null) {
            $this->ThaiName = $param["ThaiName"];
        }

        if (array_key_exists("EnFirstName",$param) and $param["EnFirstName"] !== null) {
            $this->EnFirstName = $param["EnFirstName"];
        }

        if (array_key_exists("EnLastName",$param) and $param["EnLastName"] !== null) {
            $this->EnLastName = $param["EnLastName"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("EnIssueDate",$param) and $param["EnIssueDate"] !== null) {
            $this->EnIssueDate = $param["EnIssueDate"];
        }

        if (array_key_exists("EnExpirationDate",$param) and $param["EnExpirationDate"] !== null) {
            $this->EnExpirationDate = $param["EnExpirationDate"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("EnBirthday",$param) and $param["EnBirthday"] !== null) {
            $this->EnBirthday = $param["EnBirthday"];
        }

        if (array_key_exists("Religion",$param) and $param["Religion"] !== null) {
            $this->Religion = $param["Religion"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("LaserID",$param) and $param["LaserID"] !== null) {
            $this->LaserID = $param["LaserID"];
        }

        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = $param["PortraitImage"];
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("CardCount",$param) and $param["CardCount"] !== null) {
            $this->CardCount = $param["CardCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

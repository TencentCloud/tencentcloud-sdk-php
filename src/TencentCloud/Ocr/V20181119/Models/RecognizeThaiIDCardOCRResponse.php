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
 * @method string getID() 获取身份证号码
 * @method void setID(string $ID) 设置身份证号码
 * @method string getThaiName() 获取泰文姓名
 * @method void setThaiName(string $ThaiName) 设置泰文姓名
 * @method string getEnFirstName() 获取英文姓名
 * @method void setEnFirstName(string $EnFirstName) 设置英文姓名
 * @method string getEnLastName() 获取英文姓名
 * @method void setEnLastName(string $EnLastName) 设置英文姓名
 * @method string getIssueDate() 获取泰文签发日期
 * @method void setIssueDate(string $IssueDate) 设置泰文签发日期
 * @method string getExpirationDate() 获取泰文到期日期
 * @method void setExpirationDate(string $ExpirationDate) 设置泰文到期日期
 * @method string getEnIssueDate() 获取英文签发日期
 * @method void setEnIssueDate(string $EnIssueDate) 设置英文签发日期
 * @method string getEnExpirationDate() 获取英文到期日期
 * @method void setEnExpirationDate(string $EnExpirationDate) 设置英文到期日期
 * @method string getBirthday() 获取泰文出生日期
 * @method void setBirthday(string $Birthday) 设置泰文出生日期
 * @method string getEnBirthday() 获取英文出生日期
 * @method void setEnBirthday(string $EnBirthday) 设置英文出生日期
 * @method string getReligion() 获取宗教信仰
 * @method void setReligion(string $Religion) 设置宗教信仰
 * @method string getSerialNumber() 获取序列号
 * @method void setSerialNumber(string $SerialNumber) 设置序列号
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method string getLaserID() 获取背面号码
 * @method void setLaserID(string $LaserID) 设置背面号码
 * @method string getPortraitImage() 获取证件人像照片抠取
 * @method void setPortraitImage(string $PortraitImage) 设置证件人像照片抠取
 * @method array getWarnCardInfos() 获取告警码
-9101 证件边框不完整告警
-9102 证件复印件告警
-9103 证件翻拍告警
-9107 证件反光告警
-9108 证件模糊告警
-9109 告警能力未开通
 * @method void setWarnCardInfos(array $WarnCardInfos) 设置告警码
-9101 证件边框不完整告警
-9102 证件复印件告警
-9103 证件翻拍告警
-9107 证件反光告警
-9108 证件模糊告警
-9109 告警能力未开通
 * @method string getAdvancedInfo() 获取该字段已废弃， 将固定返回"1"，不建议使用。 
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置该字段已废弃， 将固定返回"1"，不建议使用。 
 * @method integer getCardCount() 获取卡证正面图片中，证件主体的数量（仅请求曼谷地域[ap-bangkok]返回）
 * @method void setCardCount(integer $CardCount) 设置卡证正面图片中，证件主体的数量（仅请求曼谷地域[ap-bangkok]返回）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeThaiIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string 身份证号码
     */
    public $ID;

    /**
     * @var string 泰文姓名
     */
    public $ThaiName;

    /**
     * @var string 英文姓名
     */
    public $EnFirstName;

    /**
     * @var string 英文姓名
     */
    public $EnLastName;

    /**
     * @var string 泰文签发日期
     */
    public $IssueDate;

    /**
     * @var string 泰文到期日期
     */
    public $ExpirationDate;

    /**
     * @var string 英文签发日期
     */
    public $EnIssueDate;

    /**
     * @var string 英文到期日期
     */
    public $EnExpirationDate;

    /**
     * @var string 泰文出生日期
     */
    public $Birthday;

    /**
     * @var string 英文出生日期
     */
    public $EnBirthday;

    /**
     * @var string 宗教信仰
     */
    public $Religion;

    /**
     * @var string 序列号
     */
    public $SerialNumber;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var string 背面号码
     */
    public $LaserID;

    /**
     * @var string 证件人像照片抠取
     */
    public $PortraitImage;

    /**
     * @var array 告警码
-9101 证件边框不完整告警
-9102 证件复印件告警
-9103 证件翻拍告警
-9107 证件反光告警
-9108 证件模糊告警
-9109 告警能力未开通
     */
    public $WarnCardInfos;

    /**
     * @var string 该字段已废弃， 将固定返回"1"，不建议使用。 
     * @deprecated
     */
    public $AdvancedInfo;

    /**
     * @var integer 卡证正面图片中，证件主体的数量（仅请求曼谷地域[ap-bangkok]返回）
     */
    public $CardCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ID 身份证号码
     * @param string $ThaiName 泰文姓名
     * @param string $EnFirstName 英文姓名
     * @param string $EnLastName 英文姓名
     * @param string $IssueDate 泰文签发日期
     * @param string $ExpirationDate 泰文到期日期
     * @param string $EnIssueDate 英文签发日期
     * @param string $EnExpirationDate 英文到期日期
     * @param string $Birthday 泰文出生日期
     * @param string $EnBirthday 英文出生日期
     * @param string $Religion 宗教信仰
     * @param string $SerialNumber 序列号
     * @param string $Address 地址
     * @param string $LaserID 背面号码
     * @param string $PortraitImage 证件人像照片抠取
     * @param array $WarnCardInfos 告警码
-9101 证件边框不完整告警
-9102 证件复印件告警
-9103 证件翻拍告警
-9107 证件反光告警
-9108 证件模糊告警
-9109 告警能力未开通
     * @param string $AdvancedInfo 该字段已废弃， 将固定返回"1"，不建议使用。 
     * @param integer $CardCount 卡证正面图片中，证件主体的数量（仅请求曼谷地域[ap-bangkok]返回）
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

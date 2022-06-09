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
 * RecognizePhilippinesDrivingLicenseOCR返回参数结构体
 *
 * @method TextDetectionResult getHeadPortrait() 获取人像照片Base64后的结果
 * @method void setHeadPortrait(TextDetectionResult $HeadPortrait) 设置人像照片Base64后的结果
 * @method TextDetectionResult getName() 获取姓名
 * @method void setName(TextDetectionResult $Name) 设置姓名
 * @method TextDetectionResult getLastName() 获取姓氏
 * @method void setLastName(TextDetectionResult $LastName) 设置姓氏
 * @method TextDetectionResult getFirstName() 获取首姓名
 * @method void setFirstName(TextDetectionResult $FirstName) 设置首姓名
 * @method TextDetectionResult getMiddleName() 获取中间姓名
 * @method void setMiddleName(TextDetectionResult $MiddleName) 设置中间姓名
 * @method TextDetectionResult getNationality() 获取国籍
 * @method void setNationality(TextDetectionResult $Nationality) 设置国籍
 * @method TextDetectionResult getSex() 获取性别
 * @method void setSex(TextDetectionResult $Sex) 设置性别
 * @method TextDetectionResult getAddress() 获取地址
 * @method void setAddress(TextDetectionResult $Address) 设置地址
 * @method TextDetectionResult getLicenseNo() 获取证号
 * @method void setLicenseNo(TextDetectionResult $LicenseNo) 设置证号
 * @method TextDetectionResult getExpiresDate() 获取有效期
 * @method void setExpiresDate(TextDetectionResult $ExpiresDate) 设置有效期
 * @method TextDetectionResult getAgencyCode() 获取机构代码
 * @method void setAgencyCode(TextDetectionResult $AgencyCode) 设置机构代码
 * @method TextDetectionResult getBirthday() 获取出生日期
 * @method void setBirthday(TextDetectionResult $Birthday) 设置出生日期
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizePhilippinesDrivingLicenseOCRResponse extends AbstractModel
{
    /**
     * @var TextDetectionResult 人像照片Base64后的结果
     */
    public $HeadPortrait;

    /**
     * @var TextDetectionResult 姓名
     */
    public $Name;

    /**
     * @var TextDetectionResult 姓氏
     */
    public $LastName;

    /**
     * @var TextDetectionResult 首姓名
     */
    public $FirstName;

    /**
     * @var TextDetectionResult 中间姓名
     */
    public $MiddleName;

    /**
     * @var TextDetectionResult 国籍
     */
    public $Nationality;

    /**
     * @var TextDetectionResult 性别
     */
    public $Sex;

    /**
     * @var TextDetectionResult 地址
     */
    public $Address;

    /**
     * @var TextDetectionResult 证号
     */
    public $LicenseNo;

    /**
     * @var TextDetectionResult 有效期
     */
    public $ExpiresDate;

    /**
     * @var TextDetectionResult 机构代码
     */
    public $AgencyCode;

    /**
     * @var TextDetectionResult 出生日期
     */
    public $Birthday;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param TextDetectionResult $HeadPortrait 人像照片Base64后的结果
     * @param TextDetectionResult $Name 姓名
     * @param TextDetectionResult $LastName 姓氏
     * @param TextDetectionResult $FirstName 首姓名
     * @param TextDetectionResult $MiddleName 中间姓名
     * @param TextDetectionResult $Nationality 国籍
     * @param TextDetectionResult $Sex 性别
     * @param TextDetectionResult $Address 地址
     * @param TextDetectionResult $LicenseNo 证号
     * @param TextDetectionResult $ExpiresDate 有效期
     * @param TextDetectionResult $AgencyCode 机构代码
     * @param TextDetectionResult $Birthday 出生日期
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HeadPortrait",$param) and $param["HeadPortrait"] !== null) {
            $this->HeadPortrait = new TextDetectionResult();
            $this->HeadPortrait->deserialize($param["HeadPortrait"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = new TextDetectionResult();
            $this->Name->deserialize($param["Name"]);
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = new TextDetectionResult();
            $this->LastName->deserialize($param["LastName"]);
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = new TextDetectionResult();
            $this->FirstName->deserialize($param["FirstName"]);
        }

        if (array_key_exists("MiddleName",$param) and $param["MiddleName"] !== null) {
            $this->MiddleName = new TextDetectionResult();
            $this->MiddleName->deserialize($param["MiddleName"]);
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = new TextDetectionResult();
            $this->Nationality->deserialize($param["Nationality"]);
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = new TextDetectionResult();
            $this->Sex->deserialize($param["Sex"]);
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new TextDetectionResult();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("LicenseNo",$param) and $param["LicenseNo"] !== null) {
            $this->LicenseNo = new TextDetectionResult();
            $this->LicenseNo->deserialize($param["LicenseNo"]);
        }

        if (array_key_exists("ExpiresDate",$param) and $param["ExpiresDate"] !== null) {
            $this->ExpiresDate = new TextDetectionResult();
            $this->ExpiresDate->deserialize($param["ExpiresDate"]);
        }

        if (array_key_exists("AgencyCode",$param) and $param["AgencyCode"] !== null) {
            $this->AgencyCode = new TextDetectionResult();
            $this->AgencyCode->deserialize($param["AgencyCode"]);
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = new TextDetectionResult();
            $this->Birthday->deserialize($param["Birthday"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

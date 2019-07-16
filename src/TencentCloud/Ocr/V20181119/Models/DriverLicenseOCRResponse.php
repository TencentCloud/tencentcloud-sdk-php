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
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getSex() 获取性别
 * @method void setSex(string $Sex) 设置性别
 * @method string getNationality() 获取国籍
 * @method void setNationality(string $Nationality) 设置国籍
 * @method string getAddress() 获取住址
 * @method void setAddress(string $Address) 设置住址
 * @method string getDateOfBirth() 获取出生日期
 * @method void setDateOfBirth(string $DateOfBirth) 设置出生日期
 * @method string getDateOfFirstIssue() 获取初次领证日期
 * @method void setDateOfFirstIssue(string $DateOfFirstIssue) 设置初次领证日期
 * @method string getClass() 获取准驾车型
 * @method void setClass(string $Class) 设置准驾车型
 * @method string getStartDate() 获取有效期开始时间
 * @method void setStartDate(string $StartDate) 设置有效期开始时间
 * @method string getEndDate() 获取有效期截止时间
 * @method void setEndDate(string $EndDate) 设置有效期截止时间
 * @method string getCardCode() 获取证号
 * @method void setCardCode(string $CardCode) 设置证号
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DriverLicenseOCR返回参数结构体
 */
class DriverLicenseOCRResponse extends AbstractModel
{
    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 性别
     */
    public $Sex;

    /**
     * @var string 国籍
     */
    public $Nationality;

    /**
     * @var string 住址
     */
    public $Address;

    /**
     * @var string 出生日期
     */
    public $DateOfBirth;

    /**
     * @var string 初次领证日期
     */
    public $DateOfFirstIssue;

    /**
     * @var string 准驾车型
     */
    public $Class;

    /**
     * @var string 有效期开始时间
     */
    public $StartDate;

    /**
     * @var string 有效期截止时间
     */
    public $EndDate;

    /**
     * @var string 证号
     */
    public $CardCode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $Name 姓名
     * @param string $Sex 性别
     * @param string $Nationality 国籍
     * @param string $Address 住址
     * @param string $DateOfBirth 出生日期
     * @param string $DateOfFirstIssue 初次领证日期
     * @param string $Class 准驾车型
     * @param string $StartDate 有效期开始时间
     * @param string $EndDate 有效期截止时间
     * @param string $CardCode 证号
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

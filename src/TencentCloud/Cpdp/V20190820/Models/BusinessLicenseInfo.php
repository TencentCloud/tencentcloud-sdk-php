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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 营业证件信息
 *
 * @method string getBusinessLicenseType() 获取营业证件类型
 IDCARD：身份证
 CREDITCODE：统一社会信用代码
 * @method void setBusinessLicenseType(string $BusinessLicenseType) 设置营业证件类型
 IDCARD：身份证
 CREDITCODE：统一社会信用代码
 * @method string getBusinessLicenseNumber() 获取营业证件号码 非个人商户上送统一社会信用代码，个人商户上送身份证号码
 * @method void setBusinessLicenseNumber(string $BusinessLicenseNumber) 设置营业证件号码 非个人商户上送统一社会信用代码，个人商户上送身份证号码
 * @method string getBusinessLicenseValidityType() 获取营业证件有效期类型 
LONGTERM：长期有效
OTHER：非长期有效
 * @method void setBusinessLicenseValidityType(string $BusinessLicenseValidityType) 设置营业证件有效期类型 
LONGTERM：长期有效
OTHER：非长期有效
 * @method string getBusinessLicenseEffectiveDate() 获取营业证件生效日期，yyyy-MM-dd
 * @method void setBusinessLicenseEffectiveDate(string $BusinessLicenseEffectiveDate) 设置营业证件生效日期，yyyy-MM-dd
 * @method string getBusinessLicenseExpireDate() 获取营业证件失效日期，yyyy-MM-dd
 * @method void setBusinessLicenseExpireDate(string $BusinessLicenseExpireDate) 设置营业证件失效日期，yyyy-MM-dd
 */
class BusinessLicenseInfo extends AbstractModel
{
    /**
     * @var string 营业证件类型
 IDCARD：身份证
 CREDITCODE：统一社会信用代码
     */
    public $BusinessLicenseType;

    /**
     * @var string 营业证件号码 非个人商户上送统一社会信用代码，个人商户上送身份证号码
     */
    public $BusinessLicenseNumber;

    /**
     * @var string 营业证件有效期类型 
LONGTERM：长期有效
OTHER：非长期有效
     */
    public $BusinessLicenseValidityType;

    /**
     * @var string 营业证件生效日期，yyyy-MM-dd
     */
    public $BusinessLicenseEffectiveDate;

    /**
     * @var string 营业证件失效日期，yyyy-MM-dd
     */
    public $BusinessLicenseExpireDate;

    /**
     * @param string $BusinessLicenseType 营业证件类型
 IDCARD：身份证
 CREDITCODE：统一社会信用代码
     * @param string $BusinessLicenseNumber 营业证件号码 非个人商户上送统一社会信用代码，个人商户上送身份证号码
     * @param string $BusinessLicenseValidityType 营业证件有效期类型 
LONGTERM：长期有效
OTHER：非长期有效
     * @param string $BusinessLicenseEffectiveDate 营业证件生效日期，yyyy-MM-dd
     * @param string $BusinessLicenseExpireDate 营业证件失效日期，yyyy-MM-dd
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
        if (array_key_exists("BusinessLicenseType",$param) and $param["BusinessLicenseType"] !== null) {
            $this->BusinessLicenseType = $param["BusinessLicenseType"];
        }

        if (array_key_exists("BusinessLicenseNumber",$param) and $param["BusinessLicenseNumber"] !== null) {
            $this->BusinessLicenseNumber = $param["BusinessLicenseNumber"];
        }

        if (array_key_exists("BusinessLicenseValidityType",$param) and $param["BusinessLicenseValidityType"] !== null) {
            $this->BusinessLicenseValidityType = $param["BusinessLicenseValidityType"];
        }

        if (array_key_exists("BusinessLicenseEffectiveDate",$param) and $param["BusinessLicenseEffectiveDate"] !== null) {
            $this->BusinessLicenseEffectiveDate = $param["BusinessLicenseEffectiveDate"];
        }

        if (array_key_exists("BusinessLicenseExpireDate",$param) and $param["BusinessLicenseExpireDate"] !== null) {
            $this->BusinessLicenseExpireDate = $param["BusinessLicenseExpireDate"];
        }
    }
}

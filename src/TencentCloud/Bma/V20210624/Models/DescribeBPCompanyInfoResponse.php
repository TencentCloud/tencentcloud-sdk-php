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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBPCompanyInfo返回参数结构体
 *
 * @method string getCompanyName() 获取xx
 * @method void setCompanyName(string $CompanyName) 设置xx
 * @method string getPhone() 获取xx
 * @method void setPhone(string $Phone) 设置xx
 * @method string getLicenseName() 获取xx
 * @method void setLicenseName(string $LicenseName) 设置xx
 * @method integer getLicenseStatus() 获取xx
 * @method void setLicenseStatus(integer $LicenseStatus) 设置xx
 * @method string getLicenseNote() 获取xx
 * @method void setLicenseNote(string $LicenseNote) 设置xx
 * @method string getAuthorizationName() 获取xx
 * @method void setAuthorizationName(string $AuthorizationName) 设置xx
 * @method integer getAuthorizationStatus() 获取xx
 * @method void setAuthorizationStatus(integer $AuthorizationStatus) 设置xx
 * @method string getAuthorizationNote() 获取xx
 * @method void setAuthorizationNote(string $AuthorizationNote) 设置xx
 * @method array getBrandDatas() 获取xx
 * @method void setBrandDatas(array $BrandDatas) 设置xx
 * @method integer getCompanyId() 获取xx
 * @method void setCompanyId(integer $CompanyId) 设置xx
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBPCompanyInfoResponse extends AbstractModel
{
    /**
     * @var string xx
     */
    public $CompanyName;

    /**
     * @var string xx
     */
    public $Phone;

    /**
     * @var string xx
     */
    public $LicenseName;

    /**
     * @var integer xx
     */
    public $LicenseStatus;

    /**
     * @var string xx
     */
    public $LicenseNote;

    /**
     * @var string xx
     */
    public $AuthorizationName;

    /**
     * @var integer xx
     */
    public $AuthorizationStatus;

    /**
     * @var string xx
     */
    public $AuthorizationNote;

    /**
     * @var array xx
     */
    public $BrandDatas;

    /**
     * @var integer xx
     */
    public $CompanyId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CompanyName xx
     * @param string $Phone xx
     * @param string $LicenseName xx
     * @param integer $LicenseStatus xx
     * @param string $LicenseNote xx
     * @param string $AuthorizationName xx
     * @param integer $AuthorizationStatus xx
     * @param string $AuthorizationNote xx
     * @param array $BrandDatas xx
     * @param integer $CompanyId xx
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
        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("LicenseName",$param) and $param["LicenseName"] !== null) {
            $this->LicenseName = $param["LicenseName"];
        }

        if (array_key_exists("LicenseStatus",$param) and $param["LicenseStatus"] !== null) {
            $this->LicenseStatus = $param["LicenseStatus"];
        }

        if (array_key_exists("LicenseNote",$param) and $param["LicenseNote"] !== null) {
            $this->LicenseNote = $param["LicenseNote"];
        }

        if (array_key_exists("AuthorizationName",$param) and $param["AuthorizationName"] !== null) {
            $this->AuthorizationName = $param["AuthorizationName"];
        }

        if (array_key_exists("AuthorizationStatus",$param) and $param["AuthorizationStatus"] !== null) {
            $this->AuthorizationStatus = $param["AuthorizationStatus"];
        }

        if (array_key_exists("AuthorizationNote",$param) and $param["AuthorizationNote"] !== null) {
            $this->AuthorizationNote = $param["AuthorizationNote"];
        }

        if (array_key_exists("BrandDatas",$param) and $param["BrandDatas"] !== null) {
            $this->BrandDatas = [];
            foreach ($param["BrandDatas"] as $key => $value){
                $obj = new BrandData();
                $obj->deserialize($value);
                array_push($this->BrandDatas, $obj);
            }
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

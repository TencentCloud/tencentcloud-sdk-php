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
 * @method string getCompanyName() 获取企业名称
 * @method void setCompanyName(string $CompanyName) 设置企业名称
 * @method string getPhone() 获取电话号码
 * @method void setPhone(string $Phone) 设置电话号码
 * @method string getLicenseName() 获取营业执照
 * @method void setLicenseName(string $LicenseName) 设置营业执照
 * @method integer getLicenseStatus() 获取营业执照审核状态 1-审核中 2-审核未通过，3、审核通过
 * @method void setLicenseStatus(integer $LicenseStatus) 设置营业执照审核状态 1-审核中 2-审核未通过，3、审核通过
 * @method string getLicenseNote() 获取营业执照备注
 * @method void setLicenseNote(string $LicenseNote) 设置营业执照备注
 * @method string getAuthorizationName() 获取授权书
 * @method void setAuthorizationName(string $AuthorizationName) 设置授权书
 * @method integer getAuthorizationStatus() 获取授权书审核状态
 * @method void setAuthorizationStatus(integer $AuthorizationStatus) 设置授权书审核状态
 * @method string getAuthorizationNote() 获取授权书备注
 * @method void setAuthorizationNote(string $AuthorizationNote) 设置授权书备注
 * @method array getBrandDatas() 获取品牌信息
 * @method void setBrandDatas(array $BrandDatas) 设置品牌信息
 * @method integer getCompanyId() 获取企业ID
 * @method void setCompanyId(integer $CompanyId) 设置企业ID
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBPCompanyInfoResponse extends AbstractModel
{
    /**
     * @var string 企业名称
     */
    public $CompanyName;

    /**
     * @var string 电话号码
     */
    public $Phone;

    /**
     * @var string 营业执照
     */
    public $LicenseName;

    /**
     * @var integer 营业执照审核状态 1-审核中 2-审核未通过，3、审核通过
     */
    public $LicenseStatus;

    /**
     * @var string 营业执照备注
     */
    public $LicenseNote;

    /**
     * @var string 授权书
     */
    public $AuthorizationName;

    /**
     * @var integer 授权书审核状态
     */
    public $AuthorizationStatus;

    /**
     * @var string 授权书备注
     */
    public $AuthorizationNote;

    /**
     * @var array 品牌信息
     */
    public $BrandDatas;

    /**
     * @var integer 企业ID
     */
    public $CompanyId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CompanyName 企业名称
     * @param string $Phone 电话号码
     * @param string $LicenseName 营业执照
     * @param integer $LicenseStatus 营业执照审核状态 1-审核中 2-审核未通过，3、审核通过
     * @param string $LicenseNote 营业执照备注
     * @param string $AuthorizationName 授权书
     * @param integer $AuthorizationStatus 授权书审核状态
     * @param string $AuthorizationNote 授权书备注
     * @param array $BrandDatas 品牌信息
     * @param integer $CompanyId 企业ID
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

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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 品牌响应数据
 *
 * @method integer getCompanyId() 获取品牌Id
 * @method void setCompanyId(integer $CompanyId) 设置品牌Id
 * @method string getCompanyName() 获取企业名称
 * @method void setCompanyName(string $CompanyName) 设置企业名称
 * @method string getBrandName() 获取品牌名称
 * @method void setBrandName(string $BrandName) 设置品牌名称
 * @method string getPhone() 获取联系电话
 * @method void setPhone(string $Phone) 设置联系电话
 * @method string getLicense() 获取营业执照
 * @method void setLicense(string $License) 设置营业执照
 * @method integer getLicenseStatus() 获取营业执照审核状态
 * @method void setLicenseStatus(integer $LicenseStatus) 设置营业执照审核状态
 * @method string getLicenseNote() 获取营业执照审核状态说明
 * @method void setLicenseNote(string $LicenseNote) 设置营业执照审核状态说明
 * @method string getAuthorization() 获取授权书
 * @method void setAuthorization(string $Authorization) 设置授权书
 * @method integer getAuthorizationStatus() 获取授权书审核状态
 * @method void setAuthorizationStatus(integer $AuthorizationStatus) 设置授权书审核状态
 * @method string getAuthorizationNote() 获取授权书审核状态说明
 * @method void setAuthorizationNote(string $AuthorizationNote) 设置授权书审核状态说明
 * @method array getTrademarks() 获取商标信息
 * @method void setTrademarks(array $Trademarks) 设置商标信息
 * @method string getInsertTime() 获取新增时间
 * @method void setInsertTime(string $InsertTime) 设置新增时间
 * @method ServiceData getServices() 获取服务信息
 * @method void setServices(ServiceData $Services) 设置服务信息
 * @method string getUin() 获取账号id
 * @method void setUin(string $Uin) 设置账号id
 */
class BrandData extends AbstractModel
{
    /**
     * @var integer 品牌Id
     */
    public $CompanyId;

    /**
     * @var string 企业名称
     */
    public $CompanyName;

    /**
     * @var string 品牌名称
     */
    public $BrandName;

    /**
     * @var string 联系电话
     */
    public $Phone;

    /**
     * @var string 营业执照
     */
    public $License;

    /**
     * @var integer 营业执照审核状态
     */
    public $LicenseStatus;

    /**
     * @var string 营业执照审核状态说明
     */
    public $LicenseNote;

    /**
     * @var string 授权书
     */
    public $Authorization;

    /**
     * @var integer 授权书审核状态
     */
    public $AuthorizationStatus;

    /**
     * @var string 授权书审核状态说明
     */
    public $AuthorizationNote;

    /**
     * @var array 商标信息
     */
    public $Trademarks;

    /**
     * @var string 新增时间
     */
    public $InsertTime;

    /**
     * @var ServiceData 服务信息
     */
    public $Services;

    /**
     * @var string 账号id
     */
    public $Uin;

    /**
     * @param integer $CompanyId 品牌Id
     * @param string $CompanyName 企业名称
     * @param string $BrandName 品牌名称
     * @param string $Phone 联系电话
     * @param string $License 营业执照
     * @param integer $LicenseStatus 营业执照审核状态
     * @param string $LicenseNote 营业执照审核状态说明
     * @param string $Authorization 授权书
     * @param integer $AuthorizationStatus 授权书审核状态
     * @param string $AuthorizationNote 授权书审核状态说明
     * @param array $Trademarks 商标信息
     * @param string $InsertTime 新增时间
     * @param ServiceData $Services 服务信息
     * @param string $Uin 账号id
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = $param["License"];
        }

        if (array_key_exists("LicenseStatus",$param) and $param["LicenseStatus"] !== null) {
            $this->LicenseStatus = $param["LicenseStatus"];
        }

        if (array_key_exists("LicenseNote",$param) and $param["LicenseNote"] !== null) {
            $this->LicenseNote = $param["LicenseNote"];
        }

        if (array_key_exists("Authorization",$param) and $param["Authorization"] !== null) {
            $this->Authorization = $param["Authorization"];
        }

        if (array_key_exists("AuthorizationStatus",$param) and $param["AuthorizationStatus"] !== null) {
            $this->AuthorizationStatus = $param["AuthorizationStatus"];
        }

        if (array_key_exists("AuthorizationNote",$param) and $param["AuthorizationNote"] !== null) {
            $this->AuthorizationNote = $param["AuthorizationNote"];
        }

        if (array_key_exists("Trademarks",$param) and $param["Trademarks"] !== null) {
            $this->Trademarks = [];
            foreach ($param["Trademarks"] as $key => $value){
                $obj = new TrademarkData();
                $obj->deserialize($value);
                array_push($this->Trademarks, $obj);
            }
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = new ServiceData();
            $this->Services->deserialize($param["Services"]);
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}

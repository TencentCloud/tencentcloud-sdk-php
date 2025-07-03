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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTrialApplicationAndLicense请求参数结构体
 *
 * @method string getAppName() 获取应用名
 * @method void setAppName(string $AppName) 设置应用名
 * @method string getBundleId() 获取应用ID
 * @method void setBundleId(string $BundleId) 设置应用ID
 * @method string getPackageName() 获取包名
 * @method void setPackageName(string $PackageName) 设置包名
 * @method array getFeatureIds() 获取功能 id 数组
 * @method void setFeatureIds(array $FeatureIds) 设置功能 id 数组
 * @method boolean getXMagic() 获取是否要开通优图功能
 * @method void setXMagic(boolean $XMagic) 设置是否要开通优图功能
 * @method string getCompanyPermit() 获取营业执照
 * @method void setCompanyPermit(string $CompanyPermit) 设置营业执照
 * @method string getCompanyType() 获取公司类型
 * @method void setCompanyType(string $CompanyType) 设置公司类型
 * @method string getCompanyName() 获取公司名称
 * @method void setCompanyName(string $CompanyName) 设置公司名称
 * @method array getPlanList() 获取要开通的测试功能名称，基础套餐只能有一个
 * @method void setPlanList(array $PlanList) 设置要开通的测试功能名称，基础套餐只能有一个
 * @method string getMacBundleId() 获取Mac 进程名
 * @method void setMacBundleId(string $MacBundleId) 设置Mac 进程名
 * @method string getWinProcessName() 获取Windows 进程名
 * @method void setWinProcessName(string $WinProcessName) 设置Windows 进程名
 * @method string getPlatform() 获取要创建到哪个平台，web、mobile、pc，默认mobile
 * @method void setPlatform(string $Platform) 设置要创建到哪个平台，web、mobile、pc，默认mobile
 * @method array getDomainList() 获取授权域名列表
 * @method void setDomainList(array $DomainList) 设置授权域名列表
 */
class CreateTrialApplicationAndLicenseRequest extends AbstractModel
{
    /**
     * @var string 应用名
     */
    public $AppName;

    /**
     * @var string 应用ID
     */
    public $BundleId;

    /**
     * @var string 包名
     */
    public $PackageName;

    /**
     * @var array 功能 id 数组
     */
    public $FeatureIds;

    /**
     * @var boolean 是否要开通优图功能
     */
    public $XMagic;

    /**
     * @var string 营业执照
     */
    public $CompanyPermit;

    /**
     * @var string 公司类型
     */
    public $CompanyType;

    /**
     * @var string 公司名称
     */
    public $CompanyName;

    /**
     * @var array 要开通的测试功能名称，基础套餐只能有一个
     */
    public $PlanList;

    /**
     * @var string Mac 进程名
     */
    public $MacBundleId;

    /**
     * @var string Windows 进程名
     */
    public $WinProcessName;

    /**
     * @var string 要创建到哪个平台，web、mobile、pc，默认mobile
     */
    public $Platform;

    /**
     * @var array 授权域名列表
     */
    public $DomainList;

    /**
     * @param string $AppName 应用名
     * @param string $BundleId 应用ID
     * @param string $PackageName 包名
     * @param array $FeatureIds 功能 id 数组
     * @param boolean $XMagic 是否要开通优图功能
     * @param string $CompanyPermit 营业执照
     * @param string $CompanyType 公司类型
     * @param string $CompanyName 公司名称
     * @param array $PlanList 要开通的测试功能名称，基础套餐只能有一个
     * @param string $MacBundleId Mac 进程名
     * @param string $WinProcessName Windows 进程名
     * @param string $Platform 要创建到哪个平台，web、mobile、pc，默认mobile
     * @param array $DomainList 授权域名列表
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("FeatureIds",$param) and $param["FeatureIds"] !== null) {
            $this->FeatureIds = $param["FeatureIds"];
        }

        if (array_key_exists("XMagic",$param) and $param["XMagic"] !== null) {
            $this->XMagic = $param["XMagic"];
        }

        if (array_key_exists("CompanyPermit",$param) and $param["CompanyPermit"] !== null) {
            $this->CompanyPermit = $param["CompanyPermit"];
        }

        if (array_key_exists("CompanyType",$param) and $param["CompanyType"] !== null) {
            $this->CompanyType = $param["CompanyType"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("PlanList",$param) and $param["PlanList"] !== null) {
            $this->PlanList = $param["PlanList"];
        }

        if (array_key_exists("MacBundleId",$param) and $param["MacBundleId"] !== null) {
            $this->MacBundleId = $param["MacBundleId"];
        }

        if (array_key_exists("WinProcessName",$param) and $param["WinProcessName"] !== null) {
            $this->WinProcessName = $param["WinProcessName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }
    }
}

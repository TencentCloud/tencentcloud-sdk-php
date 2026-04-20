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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTrialApplicationAndLicense请求参数结构体
 *
 * @method string getAppName() 获取<p>应用名</p>
 * @method void setAppName(string $AppName) 设置<p>应用名</p>
 * @method string getBundleId() 获取<p>应用ID</p>
 * @method void setBundleId(string $BundleId) 设置<p>应用ID</p>
 * @method string getPackageName() 获取<p>包名</p>
 * @method void setPackageName(string $PackageName) 设置<p>包名</p>
 * @method string getBundleName() 获取<p>鸿蒙包包名</p>
 * @method void setBundleName(string $BundleName) 设置<p>鸿蒙包包名</p>
 * @method array getFeatureIds() 获取<p>功能 id 数组</p>
 * @method void setFeatureIds(array $FeatureIds) 设置<p>功能 id 数组</p>
 * @method boolean getXMagic() 获取<p>是否要开通优图功能</p>
 * @method void setXMagic(boolean $XMagic) 设置<p>是否要开通优图功能</p>
 * @method string getCompanyPermit() 获取<p>营业执照</p>
 * @method void setCompanyPermit(string $CompanyPermit) 设置<p>营业执照</p>
 * @method string getCompanyType() 获取<p>公司类型</p>
 * @method void setCompanyType(string $CompanyType) 设置<p>公司类型</p>
 * @method string getCompanyName() 获取<p>公司名称</p>
 * @method void setCompanyName(string $CompanyName) 设置<p>公司名称</p>
 * @method array getPlanList() 获取<p>要开通的测试功能名称，基础套餐只能有一个</p>
 * @method void setPlanList(array $PlanList) 设置<p>要开通的测试功能名称，基础套餐只能有一个</p>
 * @method string getMacBundleId() 获取<p>Mac 进程名</p>
 * @method void setMacBundleId(string $MacBundleId) 设置<p>Mac 进程名</p>
 * @method string getWinProcessName() 获取<p>Windows 进程名</p>
 * @method void setWinProcessName(string $WinProcessName) 设置<p>Windows 进程名</p>
 * @method string getPlatform() 获取<p>要创建到哪个平台，web、mobile、pc，默认mobile</p>
 * @method void setPlatform(string $Platform) 设置<p>要创建到哪个平台，web、mobile、pc，默认mobile</p>
 * @method array getDomainList() 获取<p>授权域名列表</p>
 * @method void setDomainList(array $DomainList) 设置<p>授权域名列表</p>
 */
class CreateTrialApplicationAndLicenseRequest extends AbstractModel
{
    /**
     * @var string <p>应用名</p>
     */
    public $AppName;

    /**
     * @var string <p>应用ID</p>
     */
    public $BundleId;

    /**
     * @var string <p>包名</p>
     */
    public $PackageName;

    /**
     * @var string <p>鸿蒙包包名</p>
     */
    public $BundleName;

    /**
     * @var array <p>功能 id 数组</p>
     */
    public $FeatureIds;

    /**
     * @var boolean <p>是否要开通优图功能</p>
     */
    public $XMagic;

    /**
     * @var string <p>营业执照</p>
     */
    public $CompanyPermit;

    /**
     * @var string <p>公司类型</p>
     */
    public $CompanyType;

    /**
     * @var string <p>公司名称</p>
     */
    public $CompanyName;

    /**
     * @var array <p>要开通的测试功能名称，基础套餐只能有一个</p>
     */
    public $PlanList;

    /**
     * @var string <p>Mac 进程名</p>
     */
    public $MacBundleId;

    /**
     * @var string <p>Windows 进程名</p>
     */
    public $WinProcessName;

    /**
     * @var string <p>要创建到哪个平台，web、mobile、pc，默认mobile</p>
     */
    public $Platform;

    /**
     * @var array <p>授权域名列表</p>
     */
    public $DomainList;

    /**
     * @param string $AppName <p>应用名</p>
     * @param string $BundleId <p>应用ID</p>
     * @param string $PackageName <p>包名</p>
     * @param string $BundleName <p>鸿蒙包包名</p>
     * @param array $FeatureIds <p>功能 id 数组</p>
     * @param boolean $XMagic <p>是否要开通优图功能</p>
     * @param string $CompanyPermit <p>营业执照</p>
     * @param string $CompanyType <p>公司类型</p>
     * @param string $CompanyName <p>公司名称</p>
     * @param array $PlanList <p>要开通的测试功能名称，基础套餐只能有一个</p>
     * @param string $MacBundleId <p>Mac 进程名</p>
     * @param string $WinProcessName <p>Windows 进程名</p>
     * @param string $Platform <p>要创建到哪个平台，web、mobile、pc，默认mobile</p>
     * @param array $DomainList <p>授权域名列表</p>
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

        if (array_key_exists("BundleName",$param) and $param["BundleName"] !== null) {
            $this->BundleName = $param["BundleName"];
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

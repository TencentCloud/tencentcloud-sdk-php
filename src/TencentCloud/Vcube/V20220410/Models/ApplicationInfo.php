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
 * 视立方license用户 应用结构
 *
 * @method string getAppName() 获取<p>应用名称</p>
 * @method void setAppName(string $AppName) 设置<p>应用名称</p>
 * @method string getBundleId() 获取<p>Ios应用的唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置<p>Ios应用的唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppType() 获取<p>应用类型，formal： 正式应用，test：测试应用</p>
 * @method void setAppType(string $AppType) 设置<p>应用类型，formal： 正式应用，test：测试应用</p>
 * @method array getLicenses() 获取<p>license数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenses(array $Licenses) 设置<p>license数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLicenseKey() 获取<p>license 秘钥</p>
 * @method void setLicenseKey(string $LicenseKey) 设置<p>license 秘钥</p>
 * @method string getPackageName() 获取<p>安卓应用的唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置<p>安卓应用的唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getUpdatedAt() 获取<p>更新时间</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间</p>
 * @method integer getApplicationId() 获取<p>用户应用Id</p>
 * @method void setApplicationId(integer $ApplicationId) 设置<p>用户应用Id</p>
 * @method string getLicenseUrl() 获取<p>视立方下载license的url</p>
 * @method void setLicenseUrl(string $LicenseUrl) 设置<p>视立方下载license的url</p>
 * @method array getXMagics() 获取<p>优图美视信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setXMagics(array $XMagics) 设置<p>优图美视信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMacBundleId() 获取<p>Mac  进程名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMacBundleId(string $MacBundleId) 设置<p>Mac  进程名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWinProcessName() 获取<p>windows 进程名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWinProcessName(string $WinProcessName) 设置<p>windows 进程名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDomainList() 获取<p>web端Domain列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainList(array $DomainList) 设置<p>web端Domain列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取<p>账号AppId</p>
 * @method void setAppId(string $AppId) 设置<p>账号AppId</p>
 * @method integer getNameLimit() 获取<p>扩展包名数量上限</p>
 * @method void setNameLimit(integer $NameLimit) 设置<p>扩展包名数量上限</p>
 * @method string getLinuxProcessName() 获取<p>linux 进程名</p>
 * @method void setLinuxProcessName(string $LinuxProcessName) 设置<p>linux 进程名</p>
 */
class ApplicationInfo extends AbstractModel
{
    /**
     * @var string <p>应用名称</p>
     */
    public $AppName;

    /**
     * @var string <p>Ios应用的唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string <p>应用类型，formal： 正式应用，test：测试应用</p>
     */
    public $AppType;

    /**
     * @var array <p>license数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Licenses;

    /**
     * @var string <p>license 秘钥</p>
     */
    public $LicenseKey;

    /**
     * @var string <p>安卓应用的唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdatedAt;

    /**
     * @var integer <p>用户应用Id</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>视立方下载license的url</p>
     */
    public $LicenseUrl;

    /**
     * @var array <p>优图美视信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $XMagics;

    /**
     * @var string <p>Mac  进程名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MacBundleId;

    /**
     * @var string <p>windows 进程名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WinProcessName;

    /**
     * @var array <p>web端Domain列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainList;

    /**
     * @var string <p>账号AppId</p>
     */
    public $AppId;

    /**
     * @var integer <p>扩展包名数量上限</p>
     */
    public $NameLimit;

    /**
     * @var string <p>linux 进程名</p>
     */
    public $LinuxProcessName;

    /**
     * @param string $AppName <p>应用名称</p>
     * @param string $BundleId <p>Ios应用的唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppType <p>应用类型，formal： 正式应用，test：测试应用</p>
     * @param array $Licenses <p>license数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LicenseKey <p>license 秘钥</p>
     * @param string $PackageName <p>安卓应用的唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $UpdatedAt <p>更新时间</p>
     * @param integer $ApplicationId <p>用户应用Id</p>
     * @param string $LicenseUrl <p>视立方下载license的url</p>
     * @param array $XMagics <p>优图美视信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MacBundleId <p>Mac  进程名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WinProcessName <p>windows 进程名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DomainList <p>web端Domain列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId <p>账号AppId</p>
     * @param integer $NameLimit <p>扩展包名数量上限</p>
     * @param string $LinuxProcessName <p>linux 进程名</p>
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

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("Licenses",$param) and $param["Licenses"] !== null) {
            $this->Licenses = [];
            foreach ($param["Licenses"] as $key => $value){
                $obj = new License();
                $obj->deserialize($value);
                array_push($this->Licenses, $obj);
            }
        }

        if (array_key_exists("LicenseKey",$param) and $param["LicenseKey"] !== null) {
            $this->LicenseKey = $param["LicenseKey"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("LicenseUrl",$param) and $param["LicenseUrl"] !== null) {
            $this->LicenseUrl = $param["LicenseUrl"];
        }

        if (array_key_exists("XMagics",$param) and $param["XMagics"] !== null) {
            $this->XMagics = [];
            foreach ($param["XMagics"] as $key => $value){
                $obj = new XMagicInfo();
                $obj->deserialize($value);
                array_push($this->XMagics, $obj);
            }
        }

        if (array_key_exists("MacBundleId",$param) and $param["MacBundleId"] !== null) {
            $this->MacBundleId = $param["MacBundleId"];
        }

        if (array_key_exists("WinProcessName",$param) and $param["WinProcessName"] !== null) {
            $this->WinProcessName = $param["WinProcessName"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NameLimit",$param) and $param["NameLimit"] !== null) {
            $this->NameLimit = $param["NameLimit"];
        }

        if (array_key_exists("LinuxProcessName",$param) and $param["LinuxProcessName"] !== null) {
            $this->LinuxProcessName = $param["LinuxProcessName"];
        }
    }
}

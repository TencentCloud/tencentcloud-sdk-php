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
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method string getBundleId() 获取Ios应用的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置Ios应用的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppType() 获取应用类型，formal： 正式应用，test：测试应用
 * @method void setAppType(string $AppType) 设置应用类型，formal： 正式应用，test：测试应用
 * @method array getLicenses() 获取license数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenses(array $Licenses) 设置license数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLicenseKey() 获取license 秘钥
 * @method void setLicenseKey(string $LicenseKey) 设置license 秘钥
 * @method string getPackageName() 获取安卓应用的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置安卓应用的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method integer getApplicationId() 获取用户应用Id
 * @method void setApplicationId(integer $ApplicationId) 设置用户应用Id
 * @method string getLicenseUrl() 获取视立方下载license的url
 * @method void setLicenseUrl(string $LicenseUrl) 设置视立方下载license的url
 * @method array getXMagics() 获取优图美视信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setXMagics(array $XMagics) 设置优图美视信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMacBundleId() 获取Mac  进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMacBundleId(string $MacBundleId) 设置Mac  进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWinProcessName() 获取windows 进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWinProcessName(string $WinProcessName) 设置windows 进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDomainList() 获取web端Domain列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainList(array $DomainList) 设置web端Domain列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取账号AppId
 * @method void setAppId(string $AppId) 设置账号AppId
 * @method integer getNameLimit() 获取扩展包名数量上限
 * @method void setNameLimit(integer $NameLimit) 设置扩展包名数量上限
 */
class ApplicationInfo extends AbstractModel
{
    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var string Ios应用的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string 应用类型，formal： 正式应用，test：测试应用
     */
    public $AppType;

    /**
     * @var array license数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Licenses;

    /**
     * @var string license 秘钥
     */
    public $LicenseKey;

    /**
     * @var string 安卓应用的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var integer 用户应用Id
     */
    public $ApplicationId;

    /**
     * @var string 视立方下载license的url
     */
    public $LicenseUrl;

    /**
     * @var array 优图美视信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $XMagics;

    /**
     * @var string Mac  进程名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MacBundleId;

    /**
     * @var string windows 进程名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WinProcessName;

    /**
     * @var array web端Domain列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainList;

    /**
     * @var string 账号AppId
     */
    public $AppId;

    /**
     * @var integer 扩展包名数量上限
     */
    public $NameLimit;

    /**
     * @param string $AppName 应用名称
     * @param string $BundleId Ios应用的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppType 应用类型，formal： 正式应用，test：测试应用
     * @param array $Licenses license数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LicenseKey license 秘钥
     * @param string $PackageName 安卓应用的唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param integer $ApplicationId 用户应用Id
     * @param string $LicenseUrl 视立方下载license的url
     * @param array $XMagics 优图美视信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MacBundleId Mac  进程名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WinProcessName windows 进程名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DomainList web端Domain列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 账号AppId
     * @param integer $NameLimit 扩展包名数量上限
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
    }
}

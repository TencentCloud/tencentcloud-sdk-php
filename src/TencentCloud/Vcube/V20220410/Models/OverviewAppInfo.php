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
 * 应用包名信息
 *
 * @method integer getId() 获取应用Id
 * @method void setId(integer $Id) 设置应用Id
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method string getBundleId() 获取Ios 包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置Ios 包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取Andorid 包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置Andorid 包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMacBundleId() 获取Mac 进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMacBundleId(string $MacBundleId) 设置Mac 进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWinProcessName() 获取windows 进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWinProcessName(string $WinProcessName) 设置windows 进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDomainList() 获取域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainList(array $DomainList) 设置域名列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class OverviewAppInfo extends AbstractModel
{
    /**
     * @var integer 应用Id
     */
    public $Id;

    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var string Ios 包名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string Andorid 包名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string Mac 进程名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MacBundleId;

    /**
     * @var string windows 进程名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WinProcessName;

    /**
     * @var array 域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainList;

    /**
     * @param integer $Id 应用Id
     * @param string $AppName 应用名称
     * @param string $BundleId Ios 包名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName Andorid 包名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MacBundleId Mac 进程名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WinProcessName windows 进程名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DomainList 域名列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("MacBundleId",$param) and $param["MacBundleId"] !== null) {
            $this->MacBundleId = $param["MacBundleId"];
        }

        if (array_key_exists("WinProcessName",$param) and $param["WinProcessName"] !== null) {
            $this->WinProcessName = $param["WinProcessName"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }
    }
}

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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用市场部署的应用结构
 *
 * @method string getName() 获取应用名称
 * @method void setName(string $Name) 设置应用名称
 * @method string getNamespace() 获取应用命名空间
 * @method void setNamespace(string $Namespace) 设置应用命名空间
 * @method string getRevision() 获取应用当前版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRevision(string $Revision) 设置应用当前版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取应用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置应用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChartName() 获取制品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChartName(string $ChartName) 设置制品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChartVersion() 获取制品版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChartVersion(string $ChartVersion) 设置制品版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppVersion() 获取制品应用版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppVersion(string $AppVersion) 设置制品应用版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取应用描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置应用描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class Release extends AbstractModel
{
    /**
     * @var string 应用名称
     */
    public $Name;

    /**
     * @var string 应用命名空间
     */
    public $Namespace;

    /**
     * @var string 应用当前版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Revision;

    /**
     * @var string 应用状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 制品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChartName;

    /**
     * @var string 制品版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChartVersion;

    /**
     * @var string 制品应用版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppVersion;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var string 应用描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $Name 应用名称
     * @param string $Namespace 应用命名空间
     * @param string $Revision 应用当前版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 应用状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChartName 制品名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChartVersion 制品版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppVersion 制品应用版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 应用描述
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ChartName",$param) and $param["ChartName"] !== null) {
            $this->ChartName = $param["ChartName"];
        }

        if (array_key_exists("ChartVersion",$param) and $param["ChartVersion"] !== null) {
            $this->ChartVersion = $param["ChartVersion"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

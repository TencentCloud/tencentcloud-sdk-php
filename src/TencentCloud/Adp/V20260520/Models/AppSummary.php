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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用摘要 - 列表查询返回的应用信息
 *
 * @method string getAppId() 获取应用ID
 * @method void setAppId(string $AppId) 设置应用ID
 * @method integer getAppMode() 获取应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式
 * @method void setAppMode(integer $AppMode) 设置应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式
 * @method string getAvatar() 获取应用头像
 * @method void setAvatar(string $Avatar) 设置应用头像
 * @method string getName() 获取应用名称
 * @method void setName(string $Name) 设置应用名称
 * @method AppOperation getOperationInfo() 获取操作信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationInfo(AppOperation $OperationInfo) 设置操作信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppStatusInfo getStatus() 获取状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(AppStatusInfo $Status) 设置状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppSubStatusInfo getSubStatus() 获取子状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubStatus(AppSubStatusInfo $SubStatus) 设置子状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPermissionIdList() 获取资源操作权限
 * @method void setPermissionIdList(array $PermissionIdList) 设置资源操作权限
 */
class AppSummary extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $AppId;

    /**
     * @var integer 应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式
     */
    public $AppMode;

    /**
     * @var string 应用头像
     */
    public $Avatar;

    /**
     * @var string 应用名称
     */
    public $Name;

    /**
     * @var AppOperation 操作信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationInfo;

    /**
     * @var AppStatusInfo 状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var AppSubStatusInfo 子状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubStatus;

    /**
     * @var array 资源操作权限
     */
    public $PermissionIdList;

    /**
     * @param string $AppId 应用ID
     * @param integer $AppMode 应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式
     * @param string $Avatar 应用头像
     * @param string $Name 应用名称
     * @param AppOperation $OperationInfo 操作信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppStatusInfo $Status 状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppSubStatusInfo $SubStatus 子状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PermissionIdList 资源操作权限
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppMode",$param) and $param["AppMode"] !== null) {
            $this->AppMode = $param["AppMode"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OperationInfo",$param) and $param["OperationInfo"] !== null) {
            $this->OperationInfo = new AppOperation();
            $this->OperationInfo->deserialize($param["OperationInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new AppStatusInfo();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = new AppSubStatusInfo();
            $this->SubStatus->deserialize($param["SubStatus"]);
        }

        if (array_key_exists("PermissionIdList",$param) and $param["PermissionIdList"] !== null) {
            $this->PermissionIdList = $param["PermissionIdList"];
        }
    }
}

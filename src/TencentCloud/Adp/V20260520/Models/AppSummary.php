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
 * @method string getAppId() 获取<p>应用ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用ID</p>
 * @method integer getAppMode() 获取<p>应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式</p>
 * @method void setAppMode(integer $AppMode) 设置<p>应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式</p>
 * @method string getAvatar() 获取<p>应用头像</p>
 * @method void setAvatar(string $Avatar) 设置<p>应用头像</p>
 * @method string getName() 获取<p>应用名称</p>
 * @method void setName(string $Name) 设置<p>应用名称</p>
 * @method AppOperation getOperationInfo() 获取<p>操作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationInfo(AppOperation $OperationInfo) 设置<p>操作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppStatusInfo getStatus() 获取<p>状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(AppStatusInfo $Status) 设置<p>状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppSubStatusInfo getSubStatus() 获取<p>子状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubStatus(AppSubStatusInfo $SubStatus) 设置<p>子状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPermissionIdList() 获取<p>资源操作权限</p>
 * @method void setPermissionIdList(array $PermissionIdList) 设置<p>资源操作权限</p>
 * @method string getDescription() 获取<p>应用描述信息</p>
 * @method void setDescription(string $Description) 设置<p>应用描述信息</p>
 */
class AppSummary extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var integer <p>应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式</p>
     */
    public $AppMode;

    /**
     * @var string <p>应用头像</p>
     */
    public $Avatar;

    /**
     * @var string <p>应用名称</p>
     */
    public $Name;

    /**
     * @var AppOperation <p>操作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationInfo;

    /**
     * @var AppStatusInfo <p>状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var AppSubStatusInfo <p>子状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubStatus;

    /**
     * @var array <p>资源操作权限</p>
     */
    public $PermissionIdList;

    /**
     * @var string <p>应用描述信息</p>
     */
    public $Description;

    /**
     * @param string $AppId <p>应用ID</p>
     * @param integer $AppMode <p>应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式</p>
     * @param string $Avatar <p>应用头像</p>
     * @param string $Name <p>应用名称</p>
     * @param AppOperation $OperationInfo <p>操作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppStatusInfo $Status <p>状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppSubStatusInfo $SubStatus <p>子状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PermissionIdList <p>资源操作权限</p>
     * @param string $Description <p>应用描述信息</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

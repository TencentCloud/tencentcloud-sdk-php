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
namespace TencentCloud\Cloudstudio\V20230508\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取用户工作空间返回信息
 *
 * @method integer getId() 获取工作空间 ID
 * @method void setId(integer $Id) 设置工作空间 ID
 * @method string getName() 获取工作空间名称
 * @method void setName(string $Name) 设置工作空间名称
 * @method string getSpaceKey() 获取工作空间标识
 * @method void setSpaceKey(string $SpaceKey) 设置工作空间标识
 * @method string getStatus() 获取工作空间状态
 * @method void setStatus(string $Status) 设置工作空间状态
 * @method integer getCpu() 获取CPU数量
 * @method void setCpu(integer $Cpu) 设置CPU数量
 * @method integer getMemory() 获取内存
 * @method void setMemory(integer $Memory) 设置内存
 * @method string getIcon() 获取工作空间图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIcon(string $Icon) 设置工作空间图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusReason() 获取工作空间状态, 异常原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusReason(string $StatusReason) 设置工作空间状态, 异常原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取工作空间描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置工作空间描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceType() 获取工作空间类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceType(string $WorkspaceType) 设置工作空间类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlUrl() 获取Git 仓库 HTTPS 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlUrl(string $VersionControlUrl) 设置Git 仓库 HTTPS 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlRef() 获取Git 仓库引用。指定分支使用 /refs/heads/{分支名}, 指定 Tag 用 /refs/tags/{Tag名}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlRef(string $VersionControlRef) 设置Git 仓库引用。指定分支使用 /refs/heads/{分支名}, 指定 Tag 用 /refs/tags/{Tag名}
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastOpsDate() 获取最后操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOpsDate(string $LastOpsDate) 设置最后操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateDate() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateDate(string $CreateDate) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkspaceStatusInfo extends AbstractModel
{
    /**
     * @var integer 工作空间 ID
     */
    public $Id;

    /**
     * @var string 工作空间名称
     */
    public $Name;

    /**
     * @var string 工作空间标识
     */
    public $SpaceKey;

    /**
     * @var string 工作空间状态
     */
    public $Status;

    /**
     * @var integer CPU数量
     */
    public $Cpu;

    /**
     * @var integer 内存
     */
    public $Memory;

    /**
     * @var string 工作空间图标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Icon;

    /**
     * @var string 工作空间状态, 异常原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusReason;

    /**
     * @var string 工作空间描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 工作空间类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceType;

    /**
     * @var string Git 仓库 HTTPS 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlUrl;

    /**
     * @var string Git 仓库引用。指定分支使用 /refs/heads/{分支名}, 指定 Tag 用 /refs/tags/{Tag名}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlRef;

    /**
     * @var string 最后操作时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOpsDate;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateDate;

    /**
     * @param integer $Id 工作空间 ID
     * @param string $Name 工作空间名称
     * @param string $SpaceKey 工作空间标识
     * @param string $Status 工作空间状态
     * @param integer $Cpu CPU数量
     * @param integer $Memory 内存
     * @param string $Icon 工作空间图标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusReason 工作空间状态, 异常原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 工作空间描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceType 工作空间类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlUrl Git 仓库 HTTPS 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlRef Git 仓库引用。指定分支使用 /refs/heads/{分支名}, 指定 Tag 用 /refs/tags/{Tag名}
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastOpsDate 最后操作时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateDate 创建时间
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SpaceKey",$param) and $param["SpaceKey"] !== null) {
            $this->SpaceKey = $param["SpaceKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WorkspaceType",$param) and $param["WorkspaceType"] !== null) {
            $this->WorkspaceType = $param["WorkspaceType"];
        }

        if (array_key_exists("VersionControlUrl",$param) and $param["VersionControlUrl"] !== null) {
            $this->VersionControlUrl = $param["VersionControlUrl"];
        }

        if (array_key_exists("VersionControlRef",$param) and $param["VersionControlRef"] !== null) {
            $this->VersionControlRef = $param["VersionControlRef"];
        }

        if (array_key_exists("LastOpsDate",$param) and $param["LastOpsDate"] !== null) {
            $this->LastOpsDate = $param["LastOpsDate"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }
    }
}

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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取用户工作空间返回信息
 *
 * @method integer getId() 获取空间ID
 * @method void setId(integer $Id) 设置空间ID
 * @method string getName() 获取空间名称
 * @method void setName(string $Name) 设置空间名称
 * @method UserInfoRsp getOwner() 获取所属人
 * @method void setOwner(UserInfoRsp $Owner) 设置所属人
 * @method string getSpaceKey() 获取空间标识
 * @method void setSpaceKey(string $SpaceKey) 设置空间标识
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getLastOpsDate() 获取最后操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOpsDate(string $LastOpsDate) 设置最后操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkspaceShareInfo getShare() 获取共享状态
 * @method void setShare(WorkspaceShareInfo $Share) 设置共享状态
 * @method string getWorkspaceType() 获取空间类型
 * @method void setWorkspaceType(string $WorkspaceType) 设置空间类型
 * @method string getLabel() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWorkspaceVersion() 获取空间版本
 * @method void setWorkspaceVersion(integer $WorkspaceVersion) 设置空间版本
 * @method string getImageIcon() 获取图标地址
 * @method void setImageIcon(string $ImageIcon) 设置图标地址
 * @method string getCreateDate() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateDate(string $CreateDate) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlUrl() 获取版本控制地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlUrl(string $VersionControlUrl) 设置版本控制地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlDesc() 获取版本控制描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlDesc(string $VersionControlDesc) 设置版本控制描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlRef() 获取版本控制引用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlRef(string $VersionControlRef) 设置版本控制引用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlRefType() 获取版本控制引用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlRefType(string $VersionControlRefType) 设置版本控制引用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlType() 获取版本控制类型
 * @method void setVersionControlType(string $VersionControlType) 设置版本控制类型
 * @method integer getTemplateId() 获取模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(integer $TemplateId) 设置模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotUid() 获取快照ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotUid(string $SnapshotUid) 设置快照ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecDesc() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecDesc(string $SpecDesc) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取CPU数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置CPU数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置内存
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkspaceStatusInfo extends AbstractModel
{
    /**
     * @var integer 空间ID
     */
    public $Id;

    /**
     * @var string 空间名称
     */
    public $Name;

    /**
     * @var UserInfoRsp 所属人
     */
    public $Owner;

    /**
     * @var string 空间标识
     */
    public $SpaceKey;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 最后操作时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOpsDate;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var WorkspaceShareInfo 共享状态
     */
    public $Share;

    /**
     * @var string 空间类型
     */
    public $WorkspaceType;

    /**
     * @var string 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var integer 空间版本
     */
    public $WorkspaceVersion;

    /**
     * @var string 图标地址
     */
    public $ImageIcon;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateDate;

    /**
     * @var string 版本控制地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlUrl;

    /**
     * @var string 版本控制描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlDesc;

    /**
     * @var string 版本控制引用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlRef;

    /**
     * @var string 版本控制引用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlRefType;

    /**
     * @var string 版本控制类型
     */
    public $VersionControlType;

    /**
     * @var integer 模板ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string 快照ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotUid;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecDesc;

    /**
     * @var integer CPU数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @param integer $Id 空间ID
     * @param string $Name 空间名称
     * @param UserInfoRsp $Owner 所属人
     * @param string $SpaceKey 空间标识
     * @param string $Status 状态
     * @param string $LastOpsDate 最后操作时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkspaceShareInfo $Share 共享状态
     * @param string $WorkspaceType 空间类型
     * @param string $Label 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WorkspaceVersion 空间版本
     * @param string $ImageIcon 图标地址
     * @param string $CreateDate 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlUrl 版本控制地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlDesc 版本控制描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlRef 版本控制引用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlRefType 版本控制引用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlType 版本控制类型
     * @param integer $TemplateId 模板ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotUid 快照ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecDesc 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu CPU数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 内存
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new UserInfoRsp();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("SpaceKey",$param) and $param["SpaceKey"] !== null) {
            $this->SpaceKey = $param["SpaceKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastOpsDate",$param) and $param["LastOpsDate"] !== null) {
            $this->LastOpsDate = $param["LastOpsDate"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Share",$param) and $param["Share"] !== null) {
            $this->Share = new WorkspaceShareInfo();
            $this->Share->deserialize($param["Share"]);
        }

        if (array_key_exists("WorkspaceType",$param) and $param["WorkspaceType"] !== null) {
            $this->WorkspaceType = $param["WorkspaceType"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("WorkspaceVersion",$param) and $param["WorkspaceVersion"] !== null) {
            $this->WorkspaceVersion = $param["WorkspaceVersion"];
        }

        if (array_key_exists("ImageIcon",$param) and $param["ImageIcon"] !== null) {
            $this->ImageIcon = $param["ImageIcon"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("VersionControlUrl",$param) and $param["VersionControlUrl"] !== null) {
            $this->VersionControlUrl = $param["VersionControlUrl"];
        }

        if (array_key_exists("VersionControlDesc",$param) and $param["VersionControlDesc"] !== null) {
            $this->VersionControlDesc = $param["VersionControlDesc"];
        }

        if (array_key_exists("VersionControlRef",$param) and $param["VersionControlRef"] !== null) {
            $this->VersionControlRef = $param["VersionControlRef"];
        }

        if (array_key_exists("VersionControlRefType",$param) and $param["VersionControlRefType"] !== null) {
            $this->VersionControlRefType = $param["VersionControlRefType"];
        }

        if (array_key_exists("VersionControlType",$param) and $param["VersionControlType"] !== null) {
            $this->VersionControlType = $param["VersionControlType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("SnapshotUid",$param) and $param["SnapshotUid"] !== null) {
            $this->SnapshotUid = $param["SnapshotUid"];
        }

        if (array_key_exists("SpecDesc",$param) and $param["SpecDesc"] !== null) {
            $this->SpecDesc = $param["SpecDesc"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }
    }
}

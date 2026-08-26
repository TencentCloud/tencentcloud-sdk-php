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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产物实体
 *
 * @method string getArtifactId() 获取<p>产物 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArtifactId(string $ArtifactId) 设置<p>产物 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>产物名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>产物名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMimeType() 获取<p>物理类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMimeType(string $MimeType) 设置<p>物理类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSizeBytes() 获取<p>文件大小(字节)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSizeBytes(integer $SizeBytes) 设置<p>文件大小(字节)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsGlobal() 获取<p>是否公共</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsGlobal(boolean $IsGlobal) 设置<p>是否公共</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatedAt() 获取<p>创建时间 Unix 秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(integer $CreatedAt) 设置<p>创建时间 Unix 秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdatedAt() 获取<p>修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(integer $UpdatedAt) 设置<p>修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取<p>产生该制品的 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置<p>产生该制品的 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSkillId() 获取<p>产生该制品的 Skill ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkillId(string $SkillId) 设置<p>产生该制品的 Skill ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStoragePath() 获取<p>用于解析调用下载接口</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoragePath(string $StoragePath) 设置<p>用于解析调用下载接口</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ArtifactInfo extends AbstractModel
{
    /**
     * @var string <p>产物 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArtifactId;

    /**
     * @var string <p>产物名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>物理类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MimeType;

    /**
     * @var integer <p>文件大小(字节)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SizeBytes;

    /**
     * @var boolean <p>是否公共</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsGlobal;

    /**
     * @var integer <p>创建时间 Unix 秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var integer <p>修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string <p>产生该制品的 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string <p>产生该制品的 Skill ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkillId;

    /**
     * @var string <p>用于解析调用下载接口</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoragePath;

    /**
     * @param string $ArtifactId <p>产物 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>产物名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MimeType <p>物理类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SizeBytes <p>文件大小(字节)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsGlobal <p>是否公共</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatedAt <p>创建时间 Unix 秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdatedAt <p>修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId <p>产生该制品的 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SkillId <p>产生该制品的 Skill ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StoragePath <p>用于解析调用下载接口</p>
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
        if (array_key_exists("ArtifactId",$param) and $param["ArtifactId"] !== null) {
            $this->ArtifactId = $param["ArtifactId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MimeType",$param) and $param["MimeType"] !== null) {
            $this->MimeType = $param["MimeType"];
        }

        if (array_key_exists("SizeBytes",$param) and $param["SizeBytes"] !== null) {
            $this->SizeBytes = $param["SizeBytes"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("StoragePath",$param) and $param["StoragePath"] !== null) {
            $this->StoragePath = $param["StoragePath"];
        }
    }
}

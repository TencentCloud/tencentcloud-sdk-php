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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群组响应
 *
 * @method string getId() 获取集群组 ID（系统生成）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置集群组 ID（系统生成）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取集群组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置集群组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取集群组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置集群组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfig() 获取配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(string $Config) 设置配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取应用 ID（多租户）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置应用 ID（多租户）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取创建者主账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置创建者主账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取创建者子账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置创建者子账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleted() 获取是否已软删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleted(boolean $Deleted) 设置是否已软删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeleteTime() 获取删除时间（软删时写入，活跃记录为 null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteTime(integer $DeleteTime) 设置删除时间（软删时写入，活跃记录为 null）
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterGroup extends AbstractModel
{
    /**
     * @var string 集群组 ID（系统生成）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 集群组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 集群组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var integer 应用 ID（多租户）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 创建者主账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 创建者子账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var boolean 是否已软删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deleted;

    /**
     * @var integer 删除时间（软删时写入，活跃记录为 null）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteTime;

    /**
     * @param string $Id 集群组 ID（系统生成）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 集群组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 集群组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Config 配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 应用 ID（多租户）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 创建者主账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 创建者子账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Deleted 是否已软删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeleteTime 删除时间（软删时写入，活跃记录为 null）
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }
    }
}

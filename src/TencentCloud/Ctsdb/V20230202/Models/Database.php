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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库相关信息
 *
 * @method string getClusterID() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterID(string $ClusterID) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCoolDownInDays() 获取降冷时间（天）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoolDownInDays(integer $CoolDownInDays) 设置降冷时间（天）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetentionInDays() 获取数据保留时间（天）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionInDays(integer $RetentionInDays) 设置数据保留时间（天）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态：0: 资源初始化中， 1: 资源创建中， 2: 正常状态， 3: 资源删除中， 4: 资源已删除， 5: 资源禁用中， 6: 资源已禁用， 7: 资源异常，需要人工操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态：0: 资源初始化中， 1: 资源创建中， 2: 正常状态， 3: 资源删除中， 4: 资源已删除， 5: 资源禁用中， 6: 资源已禁用， 7: 资源异常，需要人工操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class Database extends AbstractModel
{
    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterID;

    /**
     * @var string 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 降冷时间（天）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoolDownInDays;

    /**
     * @var integer 数据保留时间（天）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionInDays;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 状态：0: 资源初始化中， 1: 资源创建中， 2: 正常状态， 3: 资源删除中， 4: 资源已删除， 5: 资源禁用中， 6: 资源已禁用， 7: 资源异常，需要人工操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @param string $ClusterID 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CoolDownInDays 降冷时间（天）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetentionInDays 数据保留时间（天）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态：0: 资源初始化中， 1: 资源创建中， 2: 正常状态， 3: 资源删除中， 4: 资源已删除， 5: 资源禁用中， 6: 资源已禁用， 7: 资源异常，需要人工操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 最后修改时间
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CoolDownInDays",$param) and $param["CoolDownInDays"] !== null) {
            $this->CoolDownInDays = $param["CoolDownInDays"];
        }

        if (array_key_exists("RetentionInDays",$param) and $param["RetentionInDays"] !== null) {
            $this->RetentionInDays = $param["RetentionInDays"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}

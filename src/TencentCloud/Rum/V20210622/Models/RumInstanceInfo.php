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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rum实例信息
 *
 * @method integer getInstanceStatus() 获取实例状态(1=创建中，2=运行中，3=异常，4=重启中，5=停止中，6=已停止，7=已删除)
 * @method void setInstanceStatus(integer $InstanceStatus) 设置实例状态(1=创建中，2=运行中，3=异常，4=重启中，5=停止中，6=已停止，7=已删除)
 * @method integer getAreaId() 获取片区Id
 * @method void setAreaId(integer $AreaId) 设置片区Id
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method integer getClusterId() 获取集群Id
 * @method void setClusterId(integer $ClusterId) 设置集群Id
 * @method string getInstanceDesc() 获取实例描述
 * @method void setInstanceDesc(string $InstanceDesc) 设置实例描述
 * @method integer getChargeStatus() 获取计费状态(1=使用中，2=已过期，3=已销毁，4=分配中，5=分配失败)
 * @method void setChargeStatus(integer $ChargeStatus) 设置计费状态(1=使用中，2=已过期，3=已销毁，4=分配中，5=分配失败)
 * @method integer getChargeType() 获取计费类型(1=免费版，2=预付费，3=后付费)
 * @method void setChargeType(integer $ChargeType) 设置计费类型(1=免费版，2=预付费，3=后付费)
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method integer getDataRetentionDays() 获取数据保留时间(天)
 * @method void setDataRetentionDays(integer $DataRetentionDays) 设置数据保留时间(天)
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method integer getInstanceType() 获取实例类型 1:原web相关类型 2:app端类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(integer $InstanceType) 设置实例类型 1:原web相关类型 2:app端类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class RumInstanceInfo extends AbstractModel
{
    /**
     * @var integer 实例状态(1=创建中，2=运行中，3=异常，4=重启中，5=停止中，6=已停止，7=已删除)
     */
    public $InstanceStatus;

    /**
     * @var integer 片区Id
     */
    public $AreaId;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var integer 集群Id
     */
    public $ClusterId;

    /**
     * @var string 实例描述
     */
    public $InstanceDesc;

    /**
     * @var integer 计费状态(1=使用中，2=已过期，3=已销毁，4=分配中，5=分配失败)
     */
    public $ChargeStatus;

    /**
     * @var integer 计费类型(1=免费版，2=预付费，3=后付费)
     */
    public $ChargeType;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var integer 数据保留时间(天)
     */
    public $DataRetentionDays;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var integer 实例类型 1:原web相关类型 2:app端类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @param integer $InstanceStatus 实例状态(1=创建中，2=运行中，3=异常，4=重启中，5=停止中，6=已停止，7=已删除)
     * @param integer $AreaId 片区Id
     * @param array $Tags 标签列表
     * @param string $InstanceId 实例Id
     * @param integer $ClusterId 集群Id
     * @param string $InstanceDesc 实例描述
     * @param integer $ChargeStatus 计费状态(1=使用中，2=已过期，3=已销毁，4=分配中，5=分配失败)
     * @param integer $ChargeType 计费类型(1=免费版，2=预付费，3=后付费)
     * @param string $UpdatedAt 更新时间
     * @param integer $DataRetentionDays 数据保留时间(天)
     * @param string $InstanceName 实例名称
     * @param string $CreatedAt 创建时间
     * @param integer $InstanceType 实例类型 1:原web相关类型 2:app端类型
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
        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("DataRetentionDays",$param) and $param["DataRetentionDays"] !== null) {
            $this->DataRetentionDays = $param["DataRetentionDays"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}

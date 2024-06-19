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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回档实例信息
 *
 * @method string getClusterId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取vpc信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpc信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqSubnetId() 获取子网信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取vip信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置vip信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVport() 获取vport信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVport(integer $Vport) 设置vport信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取cpu大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置cpu大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMem() 获取内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMem(integer $Mem) 设置内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageLimit() 获取存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageLimit(integer $StorageLimit) 设置存储大小
注意：此字段可能返回 null，表示取不到有效值。
 */
class RollbackInstanceInfo extends AbstractModel
{
    /**
     * @var string 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string vpc信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var string 子网信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqSubnetId;

    /**
     * @var string vip信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer vport信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vport;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer cpu大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 内存大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mem;

    /**
     * @var integer 存储大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageLimit;

    /**
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId vpc信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqSubnetId 子网信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip vip信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Vport vport信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu cpu大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Mem 内存大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageLimit 存储大小
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }
    }
}

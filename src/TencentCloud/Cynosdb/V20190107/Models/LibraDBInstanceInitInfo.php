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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * libra实例初始化信息
 *
 * @method integer getCpu() 获取cpu
 * @method void setCpu(integer $Cpu) 设置cpu
 * @method integer getMemory() 获取内存
 * @method void setMemory(integer $Memory) 设置内存
 * @method integer getStorageSize() 获取硬盘
 * @method void setStorageSize(integer $StorageSize) 设置硬盘
 * @method string getStorageType() 获取存储类型
 * @method void setStorageType(string $StorageType) 设置存储类型
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getLibraDBVersion() 获取实例版本
 * @method void setLibraDBVersion(string $LibraDBVersion) 设置实例版本
 * @method integer getInstanceCount() 获取实例数量
 * @method void setInstanceCount(integer $InstanceCount) 设置实例数量
 * @method string getVpcId() 获取vpc id
 * @method void setVpcId(string $VpcId) 设置vpc id
 * @method string getSubnetId() 获取subnet id
 * @method void setSubnetId(string $SubnetId) 设置subnet id
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method integer getReplicasNum() 获取购买实例副本数
 * @method void setReplicasNum(integer $ReplicasNum) 设置购买实例副本数
 */
class LibraDBInstanceInitInfo extends AbstractModel
{
    /**
     * @var integer cpu
     */
    public $Cpu;

    /**
     * @var integer 内存
     */
    public $Memory;

    /**
     * @var integer 硬盘
     */
    public $StorageSize;

    /**
     * @var string 存储类型
     */
    public $StorageType;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 实例版本
     */
    public $LibraDBVersion;

    /**
     * @var integer 实例数量
     */
    public $InstanceCount;

    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var string subnet id
     */
    public $SubnetId;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var integer 购买实例副本数
     */
    public $ReplicasNum;

    /**
     * @param integer $Cpu cpu
     * @param integer $Memory 内存
     * @param integer $StorageSize 硬盘
     * @param string $StorageType 存储类型
     * @param string $InstanceType 实例类型
     * @param string $LibraDBVersion 实例版本
     * @param integer $InstanceCount 实例数量
     * @param string $VpcId vpc id
     * @param string $SubnetId subnet id
     * @param integer $Port 端口
     * @param integer $ReplicasNum 购买实例副本数
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("LibraDBVersion",$param) and $param["LibraDBVersion"] !== null) {
            $this->LibraDBVersion = $param["LibraDBVersion"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ReplicasNum",$param) and $param["ReplicasNum"] !== null) {
            $this->ReplicasNum = $param["ReplicasNum"];
        }
    }
}

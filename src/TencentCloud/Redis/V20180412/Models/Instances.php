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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 复制组实例
 *
 * @method integer getAppId() 获取用户AppID
 * @method void setAppId(integer $AppId) 设置用户AppID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getRegionId() 获取地域ID 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）
 * @method void setRegionId(integer $RegionId) 设置地域ID 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）
 * @method integer getZoneId() 获取区域ID
 * @method void setZoneId(integer $ZoneId) 设置区域ID
 * @method integer getRedisReplicasNum() 获取副本数量
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置副本数量
 * @method integer getRedisShardNum() 获取分片数量
 * @method void setRedisShardNum(integer $RedisShardNum) 设置分片数量
 * @method integer getRedisShardSize() 获取分片大小
 * @method void setRedisShardSize(integer $RedisShardSize) 设置分片大小
 * @method integer getDiskSize() 获取实例的磁盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(integer $DiskSize) 设置实例的磁盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngine() 获取引擎：社区版Redis、腾讯云CKV
 * @method void setEngine(string $Engine) 设置引擎：社区版Redis、腾讯云CKV
 * @method string getRole() 获取实例角色，rw可读写，r只读
 * @method void setRole(string $Role) 设置实例角色，rw可读写，r只读
 * @method string getVip() 获取实例VIP
 * @method void setVip(string $Vip) 设置实例VIP
 * @method string getVip6() 获取内部参数，用户可忽略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip6(string $Vip6) 设置内部参数，用户可忽略
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVpcID() 获取vpc网络ID 如：75101
 * @method void setVpcID(integer $VpcID) 设置vpc网络ID 如：75101
 * @method integer getVPort() 获取实例端口
 * @method void setVPort(integer $VPort) 设置实例端口
 * @method integer getStatus() 获取实例状态：0-待初始化，1-流程中，2-运行中，-2-已隔离，-3-待删除
 * @method void setStatus(integer $Status) 设置实例状态：0-待初始化，1-流程中，2-运行中，-2-已隔离，-3-待删除
 * @method integer getGrocerySysId() 获取仓库ID
 * @method void setGrocerySysId(integer $GrocerySysId) 设置仓库ID
 * @method integer getProductType() 获取实例类型：1 – Redis2.8内存版（集群架构），2 – Redis2.8内存版（标准架构），3 – CKV 3.2内存版(标准架构)，4 – CKV 3.2内存版(集群架构)，5 – Redis2.8内存版（单机），6 – Redis4.0内存版（标准架构），7 – Redis4.0内存版（集群架构），8 – Redis5.0内存版（标准架构），9 – Redis5.0内存版（集群架构）
 * @method void setProductType(integer $ProductType) 设置实例类型：1 – Redis2.8内存版（集群架构），2 – Redis2.8内存版（标准架构），3 – CKV 3.2内存版(标准架构)，4 – CKV 3.2内存版(集群架构)，5 – Redis2.8内存版（单机），6 – Redis4.0内存版（标准架构），7 – Redis4.0内存版（集群架构），8 – Redis5.0内存版（标准架构），9 – Redis5.0内存版（集群架构）
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新实例
 * @method void setUpdateTime(string $UpdateTime) 设置更新实例
 */
class Instances extends AbstractModel
{
    /**
     * @var integer 用户AppID
     */
    public $AppId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 地域ID 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）
     */
    public $RegionId;

    /**
     * @var integer 区域ID
     */
    public $ZoneId;

    /**
     * @var integer 副本数量
     */
    public $RedisReplicasNum;

    /**
     * @var integer 分片数量
     */
    public $RedisShardNum;

    /**
     * @var integer 分片大小
     */
    public $RedisShardSize;

    /**
     * @var integer 实例的磁盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var string 引擎：社区版Redis、腾讯云CKV
     */
    public $Engine;

    /**
     * @var string 实例角色，rw可读写，r只读
     */
    public $Role;

    /**
     * @var string 实例VIP
     */
    public $Vip;

    /**
     * @var string 内部参数，用户可忽略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip6;

    /**
     * @var integer vpc网络ID 如：75101
     */
    public $VpcID;

    /**
     * @var integer 实例端口
     */
    public $VPort;

    /**
     * @var integer 实例状态：0-待初始化，1-流程中，2-运行中，-2-已隔离，-3-待删除
     */
    public $Status;

    /**
     * @var integer 仓库ID
     */
    public $GrocerySysId;

    /**
     * @var integer 实例类型：1 – Redis2.8内存版（集群架构），2 – Redis2.8内存版（标准架构），3 – CKV 3.2内存版(标准架构)，4 – CKV 3.2内存版(集群架构)，5 – Redis2.8内存版（单机），6 – Redis4.0内存版（标准架构），7 – Redis4.0内存版（集群架构），8 – Redis5.0内存版（标准架构），9 – Redis5.0内存版（集群架构）
     */
    public $ProductType;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新实例
     */
    public $UpdateTime;

    /**
     * @param integer $AppId 用户AppID
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $RegionId 地域ID 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）
     * @param integer $ZoneId 区域ID
     * @param integer $RedisReplicasNum 副本数量
     * @param integer $RedisShardNum 分片数量
     * @param integer $RedisShardSize 分片大小
     * @param integer $DiskSize 实例的磁盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Engine 引擎：社区版Redis、腾讯云CKV
     * @param string $Role 实例角色，rw可读写，r只读
     * @param string $Vip 实例VIP
     * @param string $Vip6 内部参数，用户可忽略
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VpcID vpc网络ID 如：75101
     * @param integer $VPort 实例端口
     * @param integer $Status 实例状态：0-待初始化，1-流程中，2-运行中，-2-已隔离，-3-待删除
     * @param integer $GrocerySysId 仓库ID
     * @param integer $ProductType 实例类型：1 – Redis2.8内存版（集群架构），2 – Redis2.8内存版（标准架构），3 – CKV 3.2内存版(标准架构)，4 – CKV 3.2内存版(集群架构)，5 – Redis2.8内存版（单机），6 – Redis4.0内存版（标准架构），7 – Redis4.0内存版（集群架构），8 – Redis5.0内存版（标准架构），9 – Redis5.0内存版（集群架构）
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新实例
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisShardSize",$param) and $param["RedisShardSize"] !== null) {
            $this->RedisShardSize = $param["RedisShardSize"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("VpcID",$param) and $param["VpcID"] !== null) {
            $this->VpcID = $param["VpcID"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GrocerySysId",$param) and $param["GrocerySysId"] !== null) {
            $this->GrocerySysId = $param["GrocerySysId"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreateDBInstances请求参数结构体
 *
 * @method string getZone() 获取实例所属区域及可用区信息。格式：ap-guangzhou-2。
 * @method void setZone(string $Zone) 设置实例所属区域及可用区信息。格式：ap-guangzhou-2。
 * @method integer getNodeNum() 获取每个分片的主从节点数量。
取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinNodeNum与MaxNodeNum分别对应其最小值与最大值。
 * @method void setNodeNum(integer $NodeNum) 设置每个分片的主从节点数量。
取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinNodeNum与MaxNodeNum分别对应其最小值与最大值。
 * @method integer getMemory() 获取实例内存大小。
- 单位：GB。
- 取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。
 * @method void setMemory(integer $Memory) 设置实例内存大小。
- 单位：GB。
- 取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。
 * @method integer getVolume() 获取实例硬盘大小。
- 单位：GB。
- 取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinStorage与MaxStorage分别对应其最小磁盘规格与最大磁盘规格。
 * @method void setVolume(integer $Volume) 设置实例硬盘大小。
- 单位：GB。
- 取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinStorage与MaxStorage分别对应其最小磁盘规格与最大磁盘规格。
 * @method string getMongoVersion() 获取实例版本信息。具体支持的版本，请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MongoVersionCode为实例所支持的版本信息。版本信息与版本号对应关系如下：
- MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本。
- MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
 * @method void setMongoVersion(string $MongoVersion) 设置实例版本信息。具体支持的版本，请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MongoVersionCode为实例所支持的版本信息。版本信息与版本号对应关系如下：
- MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本。
- MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
 * @method string getMachineCode() 获取机器类型。
- HIO：高IO型。
- HIO10G：高IO万兆型。
 * @method void setMachineCode(string $MachineCode) 设置机器类型。
- HIO：高IO型。
- HIO10G：高IO万兆型。
 * @method integer getGoodsNum() 获取实例数量，取值范围为[1,10]。
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，取值范围为[1,10]。
 * @method string getClusterType() 获取实例类型。
- REPLSET：副本集。
- SHARD：分片集群。
- STANDALONE：单节点。
 * @method void setClusterType(string $ClusterType) 设置实例类型。
- REPLSET：副本集。
- SHARD：分片集群。
- STANDALONE：单节点。
 * @method integer getReplicateSetNum() 获取副本集个数。
- 创建副本集实例时，该参数固定设置为1。
- 创建分片集群时，指分片数量，请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
- 若为单节点实例，该参数固定设置为0。
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置副本集个数。
- 创建副本集实例时，该参数固定设置为1。
- 创建分片集群时，指分片数量，请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
- 若为单节点实例，该参数固定设置为0。
 * @method integer getPeriod() 获取选择包年包月计费模式时，您需要设定购买实例的时长。即<b>InstanceChargeType</b>设定为<b>PREPAID</b>时，该参数必须配置。
- 单位：月。
- 可选值包括[1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
 * @method void setPeriod(integer $Period) 设置选择包年包月计费模式时，您需要设定购买实例的时长。即<b>InstanceChargeType</b>设定为<b>PREPAID</b>时，该参数必须配置。
- 单位：月。
- 可选值包括[1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
 * @method string getInstanceChargeType() 获取实例付费方式。
- PREPAID：包年包月计费。
- POSTPAID_BY_HOUR：按量计费。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例付费方式。
- PREPAID：包年包月计费。
- POSTPAID_BY_HOUR：按量计费。
 * @method integer getMongosCpu() 获取分片实例询价必填参数，指 Mongos CPU核数，取值范围为[1,16]。
 * @method void setMongosCpu(integer $MongosCpu) 设置分片实例询价必填参数，指 Mongos CPU核数，取值范围为[1,16]。
 * @method integer getMongosMemory() 获取分片实例询价必填参数，指 Mongos 内存，取值范围为[2,32]，单位：GB。
 * @method void setMongosMemory(integer $MongosMemory) 设置分片实例询价必填参数，指 Mongos 内存，取值范围为[2,32]，单位：GB。
 * @method integer getMongosNum() 获取分片实例询价必填参数，指 Mongos 个数，取值范围为[3,32]。
 * @method void setMongosNum(integer $MongosNum) 设置分片实例询价必填参数，指 Mongos 个数，取值范围为[3,32]。
 * @method integer getConfigServerCpu() 获取分片实例询价必填参数，指 ConfigServer CPU核数，取值为1，单位：GB。
 * @method void setConfigServerCpu(integer $ConfigServerCpu) 设置分片实例询价必填参数，指 ConfigServer CPU核数，取值为1，单位：GB。
 * @method integer getConfigServerMemory() 获取分片实例询价必填参数，指 ConfigServer 内存大小，取值为2，单位：GB。
 * @method void setConfigServerMemory(integer $ConfigServerMemory) 设置分片实例询价必填参数，指 ConfigServer 内存大小，取值为2，单位：GB。
 * @method integer getConfigServerVolume() 获取分片实例询价必填参数，指 ConfigServer 磁盘大小，取值为 20，单位：GB。
 * @method void setConfigServerVolume(integer $ConfigServerVolume) 设置分片实例询价必填参数，指 ConfigServer 磁盘大小，取值为 20，单位：GB。
 */
class InquirePriceCreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 实例所属区域及可用区信息。格式：ap-guangzhou-2。
     */
    public $Zone;

    /**
     * @var integer 每个分片的主从节点数量。
取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinNodeNum与MaxNodeNum分别对应其最小值与最大值。
     */
    public $NodeNum;

    /**
     * @var integer 实例内存大小。
- 单位：GB。
- 取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小。
- 单位：GB。
- 取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinStorage与MaxStorage分别对应其最小磁盘规格与最大磁盘规格。
     */
    public $Volume;

    /**
     * @var string 实例版本信息。具体支持的版本，请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MongoVersionCode为实例所支持的版本信息。版本信息与版本号对应关系如下：
- MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本。
- MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
     */
    public $MongoVersion;

    /**
     * @var string 机器类型。
- HIO：高IO型。
- HIO10G：高IO万兆型。
     */
    public $MachineCode;

    /**
     * @var integer 实例数量，取值范围为[1,10]。
     */
    public $GoodsNum;

    /**
     * @var string 实例类型。
- REPLSET：副本集。
- SHARD：分片集群。
- STANDALONE：单节点。
     */
    public $ClusterType;

    /**
     * @var integer 副本集个数。
- 创建副本集实例时，该参数固定设置为1。
- 创建分片集群时，指分片数量，请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
- 若为单节点实例，该参数固定设置为0。
     */
    public $ReplicateSetNum;

    /**
     * @var integer 选择包年包月计费模式时，您需要设定购买实例的时长。即<b>InstanceChargeType</b>设定为<b>PREPAID</b>时，该参数必须配置。
- 单位：月。
- 可选值包括[1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
     */
    public $Period;

    /**
     * @var string 实例付费方式。
- PREPAID：包年包月计费。
- POSTPAID_BY_HOUR：按量计费。
     */
    public $InstanceChargeType;

    /**
     * @var integer 分片实例询价必填参数，指 Mongos CPU核数，取值范围为[1,16]。
     */
    public $MongosCpu;

    /**
     * @var integer 分片实例询价必填参数，指 Mongos 内存，取值范围为[2,32]，单位：GB。
     */
    public $MongosMemory;

    /**
     * @var integer 分片实例询价必填参数，指 Mongos 个数，取值范围为[3,32]。
     */
    public $MongosNum;

    /**
     * @var integer 分片实例询价必填参数，指 ConfigServer CPU核数，取值为1，单位：GB。
     */
    public $ConfigServerCpu;

    /**
     * @var integer 分片实例询价必填参数，指 ConfigServer 内存大小，取值为2，单位：GB。
     */
    public $ConfigServerMemory;

    /**
     * @var integer 分片实例询价必填参数，指 ConfigServer 磁盘大小，取值为 20，单位：GB。
     */
    public $ConfigServerVolume;

    /**
     * @param string $Zone 实例所属区域及可用区信息。格式：ap-guangzhou-2。
     * @param integer $NodeNum 每个分片的主从节点数量。
取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinNodeNum与MaxNodeNum分别对应其最小值与最大值。
     * @param integer $Memory 实例内存大小。
- 单位：GB。
- 取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。
     * @param integer $Volume 实例硬盘大小。
- 单位：GB。
- 取值范围：请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinStorage与MaxStorage分别对应其最小磁盘规格与最大磁盘规格。
     * @param string $MongoVersion 实例版本信息。具体支持的版本，请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MongoVersionCode为实例所支持的版本信息。版本信息与版本号对应关系如下：
- MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本。
- MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
     * @param string $MachineCode 机器类型。
- HIO：高IO型。
- HIO10G：高IO万兆型。
     * @param integer $GoodsNum 实例数量，取值范围为[1,10]。
     * @param string $ClusterType 实例类型。
- REPLSET：副本集。
- SHARD：分片集群。
- STANDALONE：单节点。
     * @param integer $ReplicateSetNum 副本集个数。
- 创建副本集实例时，该参数固定设置为1。
- 创建分片集群时，指分片数量，请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
- 若为单节点实例，该参数固定设置为0。
     * @param integer $Period 选择包年包月计费模式时，您需要设定购买实例的时长。即<b>InstanceChargeType</b>设定为<b>PREPAID</b>时，该参数必须配置。
- 单位：月。
- 可选值包括[1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
     * @param string $InstanceChargeType 实例付费方式。
- PREPAID：包年包月计费。
- POSTPAID_BY_HOUR：按量计费。
     * @param integer $MongosCpu 分片实例询价必填参数，指 Mongos CPU核数，取值范围为[1,16]。
     * @param integer $MongosMemory 分片实例询价必填参数，指 Mongos 内存，取值范围为[2,32]，单位：GB。
     * @param integer $MongosNum 分片实例询价必填参数，指 Mongos 个数，取值范围为[3,32]。
     * @param integer $ConfigServerCpu 分片实例询价必填参数，指 ConfigServer CPU核数，取值为1，单位：GB。
     * @param integer $ConfigServerMemory 分片实例询价必填参数，指 ConfigServer 内存大小，取值为2，单位：GB。
     * @param integer $ConfigServerVolume 分片实例询价必填参数，指 ConfigServer 磁盘大小，取值为 20，单位：GB。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("MongosCpu",$param) and $param["MongosCpu"] !== null) {
            $this->MongosCpu = $param["MongosCpu"];
        }

        if (array_key_exists("MongosMemory",$param) and $param["MongosMemory"] !== null) {
            $this->MongosMemory = $param["MongosMemory"];
        }

        if (array_key_exists("MongosNum",$param) and $param["MongosNum"] !== null) {
            $this->MongosNum = $param["MongosNum"];
        }

        if (array_key_exists("ConfigServerCpu",$param) and $param["ConfigServerCpu"] !== null) {
            $this->ConfigServerCpu = $param["ConfigServerCpu"];
        }

        if (array_key_exists("ConfigServerMemory",$param) and $param["ConfigServerMemory"] !== null) {
            $this->ConfigServerMemory = $param["ConfigServerMemory"];
        }

        if (array_key_exists("ConfigServerVolume",$param) and $param["ConfigServerVolume"] !== null) {
            $this->ConfigServerVolume = $param["ConfigServerVolume"];
        }
    }
}

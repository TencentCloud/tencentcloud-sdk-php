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
 * CreateDBInstanceHour请求参数结构体
 *
 * @method integer getMemory() 获取实例内存大小，单位：GB。
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：GB。
 * @method integer getVolume() 获取实例硬盘大小，单位：GB。
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB。
 * @method integer getReplicateSetNum() 获取指副本集数量。
- 创建副本集实例，该参数只能为1。
- 创建分片实例，指分片的数量。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置指副本集数量。
- 创建副本集实例，该参数只能为1。
- 创建分片实例，指分片的数量。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method integer getNodeNum() 获取指每个副本集内节点个数。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method void setNodeNum(integer $NodeNum) 设置指每个副本集内节点个数。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method string getMongoVersion() 获取指版本信息。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
 * @method void setMongoVersion(string $MongoVersion) 设置指版本信息。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
 * @method string getMachineCode() 获取机器类型。
- HIO：高IO型。
- HIO10G：高IO万兆。
 * @method void setMachineCode(string $MachineCode) 设置机器类型。
- HIO：高IO型。
- HIO10G：高IO万兆。
 * @method integer getGoodsNum() 获取实例数量，最小值1，最大值为10。
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，最小值1，最大值为10。
 * @method string getZone() 获取可用区信息，输入格式如：ap-guangzhou-2。
- 具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。
 * @method void setZone(string $Zone) 设置可用区信息，输入格式如：ap-guangzhou-2。
- 具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。
 * @method string getClusterType() 获取实例架构类型。
- REPLSET：副本集。
- SHARD：分片集群。
 * @method void setClusterType(string $ClusterType) 设置实例架构类型。
- REPLSET：副本集。
- SHARD：分片集群。
 * @method string getVpcId() 获取私有网络ID，如果不设置该参数，则默认选择基础网络。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，如果不设置该参数，则默认选择基础网络。
 * @method string getSubnetId() 获取私有网络下的子网 ID，如果配置参数 VpcId，则 SubnetId必须配置。
 * @method void setSubnetId(string $SubnetId) 设置私有网络下的子网 ID，如果配置参数 VpcId，则 SubnetId必须配置。
 * @method string getPassword() 获取实例密码。
- 不设置该参数，则默认密码格式为：实例ID+@+主账户uin。例如：实例 ID 为cmgo-higv73ed，UIN 为100000001，则默认密码为：cmgo-higv73ed@100000001。 
- 自定义密码长度为8-32个字符，至少包含字母、数字和字符（!@#%^*()_）中的两种。
 * @method void setPassword(string $Password) 设置实例密码。
- 不设置该参数，则默认密码格式为：实例ID+@+主账户uin。例如：实例 ID 为cmgo-higv73ed，UIN 为100000001，则默认密码为：cmgo-higv73ed@100000001。 
- 自定义密码长度为8-32个字符，至少包含字母、数字和字符（!@#%^*()_）中的两种。
 * @method integer getProjectId() 获取项目ID。若不设置该参数，则为默认项目。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。若不设置该参数，则为默认项目。
 * @method array getTags() 获取实例标签信息。
 * @method void setTags(array $Tags) 设置实例标签信息。
 * @method integer getClone() 获取实例类型。
- 1：正式实例。
- 3：只读实例。
- 4：灾备实例。
 * @method void setClone(integer $Clone) 设置实例类型。
- 1：正式实例。
- 3：只读实例。
- 4：灾备实例。
 * @method string getFather() 获取父实例 ID。当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
 * @method void setFather(string $Father) 设置父实例 ID。当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
 * @method array getSecurityGroup() 获取安全组。
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组。
 * @method string getRestoreTime() 获取克隆实例回档时间。
- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。
- 回档时间范围：仅能回档7天内时间点的数据。
 * @method void setRestoreTime(string $RestoreTime) 设置克隆实例回档时间。
- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。
- 回档时间范围：仅能回档7天内时间点的数据。
 * @method string getInstanceName() 获取实例名称。仅支持长度为60个字符的中文、英文、数字、下划线_、分隔符- 。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。仅支持长度为60个字符的中文、英文、数字、下划线_、分隔符- 。
 * @method array getAvailabilityZoneList() 获取多可用区部署的节点列表。具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)获取。
- 多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。
- 不支持4.2及以上版本。
- 不支持只读灾备实例。
- 不能选择基础网络。
 * @method void setAvailabilityZoneList(array $AvailabilityZoneList) 设置多可用区部署的节点列表。具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)获取。
- 多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。
- 不支持4.2及以上版本。
- 不支持只读灾备实例。
- 不能选择基础网络。
 * @method integer getMongosCpu() 获取Mongos CPU 核数。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
 * @method void setMongosCpu(integer $MongosCpu) 设置Mongos CPU 核数。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
 * @method integer getMongosMemory() 获取Mongos 内存大小。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
 * @method void setMongosMemory(integer $MongosMemory) 设置Mongos 内存大小。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
 * @method integer getMongosNodeNum() 获取Mongos 数量。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
 * @method void setMongosNodeNum(integer $MongosNodeNum) 设置Mongos 数量。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
 * @method integer getReadonlyNodeNum() 获取只读节点数量，最大不超过7个。
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) 设置只读节点数量，最大不超过7个。
 * @method array getReadonlyNodeAvailabilityZoneList() 获取指只读节点所属可用区。跨可用区部署实例，参数**ReadonlyNodeNum**不为**0**时，必须配置该参数。
 * @method void setReadonlyNodeAvailabilityZoneList(array $ReadonlyNodeAvailabilityZoneList) 设置指只读节点所属可用区。跨可用区部署实例，参数**ReadonlyNodeNum**不为**0**时，必须配置该参数。
 * @method string getHiddenZone() 获取Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。
 * @method void setHiddenZone(string $HiddenZone) 设置Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。
 */
class CreateDBInstanceHourRequest extends AbstractModel
{
    /**
     * @var integer 实例内存大小，单位：GB。
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB。
     */
    public $Volume;

    /**
     * @var integer 指副本集数量。
- 创建副本集实例，该参数只能为1。
- 创建分片实例，指分片的数量。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     */
    public $ReplicateSetNum;

    /**
     * @var integer 指每个副本集内节点个数。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     */
    public $NodeNum;

    /**
     * @var string 指版本信息。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
     */
    public $MongoVersion;

    /**
     * @var string 机器类型。
- HIO：高IO型。
- HIO10G：高IO万兆。
     */
    public $MachineCode;

    /**
     * @var integer 实例数量，最小值1，最大值为10。
     */
    public $GoodsNum;

    /**
     * @var string 可用区信息，输入格式如：ap-guangzhou-2。
- 具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。
     */
    public $Zone;

    /**
     * @var string 实例架构类型。
- REPLSET：副本集。
- SHARD：分片集群。
     */
    public $ClusterType;

    /**
     * @var string 私有网络ID，如果不设置该参数，则默认选择基础网络。
     */
    public $VpcId;

    /**
     * @var string 私有网络下的子网 ID，如果配置参数 VpcId，则 SubnetId必须配置。
     */
    public $SubnetId;

    /**
     * @var string 实例密码。
- 不设置该参数，则默认密码格式为：实例ID+@+主账户uin。例如：实例 ID 为cmgo-higv73ed，UIN 为100000001，则默认密码为：cmgo-higv73ed@100000001。 
- 自定义密码长度为8-32个字符，至少包含字母、数字和字符（!@#%^*()_）中的两种。
     */
    public $Password;

    /**
     * @var integer 项目ID。若不设置该参数，则为默认项目。
     */
    public $ProjectId;

    /**
     * @var array 实例标签信息。
     */
    public $Tags;

    /**
     * @var integer 实例类型。
- 1：正式实例。
- 3：只读实例。
- 4：灾备实例。
     */
    public $Clone;

    /**
     * @var string 父实例 ID。当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
     */
    public $Father;

    /**
     * @var array 安全组。
     */
    public $SecurityGroup;

    /**
     * @var string 克隆实例回档时间。
- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。
- 回档时间范围：仅能回档7天内时间点的数据。
     */
    public $RestoreTime;

    /**
     * @var string 实例名称。仅支持长度为60个字符的中文、英文、数字、下划线_、分隔符- 。
     */
    public $InstanceName;

    /**
     * @var array 多可用区部署的节点列表。具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)获取。
- 多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。
- 不支持4.2及以上版本。
- 不支持只读灾备实例。
- 不能选择基础网络。
     */
    public $AvailabilityZoneList;

    /**
     * @var integer Mongos CPU 核数。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
     */
    public $MongosCpu;

    /**
     * @var integer Mongos 内存大小。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
     */
    public $MongosMemory;

    /**
     * @var integer Mongos 数量。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
     */
    public $MongosNodeNum;

    /**
     * @var integer 只读节点数量，最大不超过7个。
     */
    public $ReadonlyNodeNum;

    /**
     * @var array 指只读节点所属可用区。跨可用区部署实例，参数**ReadonlyNodeNum**不为**0**时，必须配置该参数。
     */
    public $ReadonlyNodeAvailabilityZoneList;

    /**
     * @var string Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。
     */
    public $HiddenZone;

    /**
     * @param integer $Memory 实例内存大小，单位：GB。
     * @param integer $Volume 实例硬盘大小，单位：GB。
     * @param integer $ReplicateSetNum 指副本集数量。
- 创建副本集实例，该参数只能为1。
- 创建分片实例，指分片的数量。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     * @param integer $NodeNum 指每个副本集内节点个数。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     * @param string $MongoVersion 指版本信息。具体售卖规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
     * @param string $MachineCode 机器类型。
- HIO：高IO型。
- HIO10G：高IO万兆。
     * @param integer $GoodsNum 实例数量，最小值1，最大值为10。
     * @param string $Zone 可用区信息，输入格式如：ap-guangzhou-2。
- 具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。
     * @param string $ClusterType 实例架构类型。
- REPLSET：副本集。
- SHARD：分片集群。
     * @param string $VpcId 私有网络ID，如果不设置该参数，则默认选择基础网络。
     * @param string $SubnetId 私有网络下的子网 ID，如果配置参数 VpcId，则 SubnetId必须配置。
     * @param string $Password 实例密码。
- 不设置该参数，则默认密码格式为：实例ID+@+主账户uin。例如：实例 ID 为cmgo-higv73ed，UIN 为100000001，则默认密码为：cmgo-higv73ed@100000001。 
- 自定义密码长度为8-32个字符，至少包含字母、数字和字符（!@#%^*()_）中的两种。
     * @param integer $ProjectId 项目ID。若不设置该参数，则为默认项目。
     * @param array $Tags 实例标签信息。
     * @param integer $Clone 实例类型。
- 1：正式实例。
- 3：只读实例。
- 4：灾备实例。
     * @param string $Father 父实例 ID。当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
     * @param array $SecurityGroup 安全组。
     * @param string $RestoreTime 克隆实例回档时间。
- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。
- 回档时间范围：仅能回档7天内时间点的数据。
     * @param string $InstanceName 实例名称。仅支持长度为60个字符的中文、英文、数字、下划线_、分隔符- 。
     * @param array $AvailabilityZoneList 多可用区部署的节点列表。具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)获取。
- 多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。
- 不支持4.2及以上版本。
- 不支持只读灾备实例。
- 不能选择基础网络。
     * @param integer $MongosCpu Mongos CPU 核数。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
     * @param integer $MongosMemory Mongos 内存大小。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
     * @param integer $MongosNodeNum Mongos 数量。
- 购买MongoDB 3.6 WiredTiger存储引擎版本以上的分片集群时，可选择性配置该参数。
- 若不配置该参数，则根据Mongod节点规格默认适配 Mongos 规格，默认规格免费。
     * @param integer $ReadonlyNodeNum 只读节点数量，最大不超过7个。
     * @param array $ReadonlyNodeAvailabilityZoneList 指只读节点所属可用区。跨可用区部署实例，参数**ReadonlyNodeNum**不为**0**时，必须配置该参数。
     * @param string $HiddenZone Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Clone",$param) and $param["Clone"] !== null) {
            $this->Clone = $param["Clone"];
        }

        if (array_key_exists("Father",$param) and $param["Father"] !== null) {
            $this->Father = $param["Father"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AvailabilityZoneList",$param) and $param["AvailabilityZoneList"] !== null) {
            $this->AvailabilityZoneList = $param["AvailabilityZoneList"];
        }

        if (array_key_exists("MongosCpu",$param) and $param["MongosCpu"] !== null) {
            $this->MongosCpu = $param["MongosCpu"];
        }

        if (array_key_exists("MongosMemory",$param) and $param["MongosMemory"] !== null) {
            $this->MongosMemory = $param["MongosMemory"];
        }

        if (array_key_exists("MongosNodeNum",$param) and $param["MongosNodeNum"] !== null) {
            $this->MongosNodeNum = $param["MongosNodeNum"];
        }

        if (array_key_exists("ReadonlyNodeNum",$param) and $param["ReadonlyNodeNum"] !== null) {
            $this->ReadonlyNodeNum = $param["ReadonlyNodeNum"];
        }

        if (array_key_exists("ReadonlyNodeAvailabilityZoneList",$param) and $param["ReadonlyNodeAvailabilityZoneList"] !== null) {
            $this->ReadonlyNodeAvailabilityZoneList = $param["ReadonlyNodeAvailabilityZoneList"];
        }

        if (array_key_exists("HiddenZone",$param) and $param["HiddenZone"] !== null) {
            $this->HiddenZone = $param["HiddenZone"];
        }
    }
}

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
 * CreateDBInstance请求参数结构体
 *
 * @method integer getNodeNum() 获取每个副本集内节点个数，具体参照查询云数据库的售卖规格返回参数
 * @method void setNodeNum(integer $NodeNum) 设置每个副本集内节点个数，具体参照查询云数据库的售卖规格返回参数
 * @method integer getMemory() 获取实例内存大小，单位：GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：GB
 * @method integer getVolume() 获取实例硬盘大小，单位：GB
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB
 * @method string getMongoVersion() 获取版本号，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。参数与版本对应关系是MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本，MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本，MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本
 * @method void setMongoVersion(string $MongoVersion) 设置版本号，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。参数与版本对应关系是MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本，MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本，MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本
 * @method integer getGoodsNum() 获取实例数量, 最小值1，最大值为10
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量, 最小值1，最大值为10
 * @method string getZone() 获取实例所属区域名称，格式如：ap-guangzhou-2。注：此参数填写的是主可用区，如果选择多可用区部署，Zone必须是AvailabilityZoneList中的一个
 * @method void setZone(string $Zone) 设置实例所属区域名称，格式如：ap-guangzhou-2。注：此参数填写的是主可用区，如果选择多可用区部署，Zone必须是AvailabilityZoneList中的一个
 * @method integer getPeriod() 获取实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]
 * @method void setPeriod(integer $Period) 设置实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]
 * @method string getMachineCode() 获取机器类型，HIO：高IO型；HIO10G：高IO万兆型；STDS5：标准型
 * @method void setMachineCode(string $MachineCode) 设置机器类型，HIO：高IO型；HIO10G：高IO万兆型；STDS5：标准型
 * @method string getClusterType() 获取实例类型，REPLSET-副本集，SHARD-分片集群，STANDALONE-单节点
 * @method void setClusterType(string $ClusterType) 设置实例类型，REPLSET-副本集，SHARD-分片集群，STANDALONE-单节点
 * @method integer getReplicateSetNum() 获取副本集个数，创建副本集实例时，该参数必须设置为1；创建分片实例时，具体参照查询云数据库的售卖规格返回参数；若为单节点实例，该参数设置为0
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置副本集个数，创建副本集实例时，该参数必须设置为1；创建分片实例时，具体参照查询云数据库的售卖规格返回参数；若为单节点实例，该参数设置为0
 * @method integer getProjectId() 获取项目ID，不设置为默认项目
 * @method void setProjectId(integer $ProjectId) 设置项目ID，不设置为默认项目
 * @method string getVpcId() 获取私有网络 ID，如果不传则默认选择基础网络，请使用 查询私有网络列表
 * @method void setVpcId(string $VpcId) 设置私有网络 ID，如果不传则默认选择基础网络，请使用 查询私有网络列表
 * @method string getSubnetId() 获取私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 查询子网列表
 * @method void setSubnetId(string $SubnetId) 设置私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 查询子网列表
 * @method string getPassword() 获取实例密码，不设置该参数则默认密码规则为 实例ID+"@"+主账户uin。举例实例id为cmgo-higv73ed，uin为100000001，则默认密码为"cmgo-higv73ed@100000001"。 自定义密码格式为8-32个字符长度，至少包含字母、数字和字符（!@#%^*()_）中的两种
 * @method void setPassword(string $Password) 设置实例密码，不设置该参数则默认密码规则为 实例ID+"@"+主账户uin。举例实例id为cmgo-higv73ed，uin为100000001，则默认密码为"cmgo-higv73ed@100000001"。 自定义密码格式为8-32个字符长度，至少包含字母、数字和字符（!@#%^*()_）中的两种
 * @method array getTags() 获取实例标签信息
 * @method void setTags(array $Tags) 设置实例标签信息
 * @method integer getAutoRenewFlag() 获取自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为不自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为不自动续费
 * @method integer getAutoVoucher() 获取是否自动选择代金券，可选值为：1 - 是；0 - 否； 默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券，可选值为：1 - 是；0 - 否； 默认为0
 * @method integer getClone() 获取1:正式实例,2:临时实例,3:只读实例,4:灾备实例,5:克隆实例
 * @method void setClone(integer $Clone) 设置1:正式实例,2:临时实例,3:只读实例,4:灾备实例,5:克隆实例
 * @method string getFather() 获取若是只读，灾备实例或克隆实例，Father必须填写，即主实例ID
 * @method void setFather(string $Father) 设置若是只读，灾备实例或克隆实例，Father必须填写，即主实例ID
 * @method array getSecurityGroup() 获取安全组
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组
 * @method string getRestoreTime() 获取克隆实例回档时间。若是克隆实例，则必须填写，格式：2021-08-13 16:30:00。注：只能回档7天内的时间点
 * @method void setRestoreTime(string $RestoreTime) 设置克隆实例回档时间。若是克隆实例，则必须填写，格式：2021-08-13 16:30:00。注：只能回档7天内的时间点
 * @method string getInstanceName() 获取实例名称。注：名称只支持长度为60个字符的中文、英文、数字、下划线_、分隔符-
 * @method void setInstanceName(string $InstanceName) 设置实例名称。注：名称只支持长度为60个字符的中文、英文、数字、下划线_、分隔符-
 * @method array getAvailabilityZoneList() 获取多可用区部署的节点列表，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。注：1、多可用区部署节点只能部署在3个不同可用区；2、为了保障跨可用区切换，不支持将集群的大多数节点部署在同一个可用区（如3节点集群不支持2个节点部署在同一个区）；3、不支持4.2及以上版本；4、不支持只读灾备实例；5、不能选择基础网络
 * @method void setAvailabilityZoneList(array $AvailabilityZoneList) 设置多可用区部署的节点列表，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。注：1、多可用区部署节点只能部署在3个不同可用区；2、为了保障跨可用区切换，不支持将集群的大多数节点部署在同一个可用区（如3节点集群不支持2个节点部署在同一个区）；3、不支持4.2及以上版本；4、不支持只读灾备实例；5、不能选择基础网络
 * @method integer getMongosCpu() 获取mongos cpu数量，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果
 * @method void setMongosCpu(integer $MongosCpu) 设置mongos cpu数量，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果
 * @method integer getMongosMemory() 获取mongos 内存大小，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果
 * @method void setMongosMemory(integer $MongosMemory) 设置mongos 内存大小，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果
 * @method integer getMongosNodeNum() 获取mongos 数量，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。注：为了保障高可用，最低需要购买3个mongos，上限为32个
 * @method void setMongosNodeNum(integer $MongosNodeNum) 设置mongos 数量，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。注：为了保障高可用，最低需要购买3个mongos，上限为32个
 * @method integer getReadonlyNodeNum() 获取只读节点数量，最大不超过7个
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) 设置只读节点数量，最大不超过7个
 * @method array getReadonlyNodeAvailabilityZoneList() 获取只读节点部署可用区
 * @method void setReadonlyNodeAvailabilityZoneList(array $ReadonlyNodeAvailabilityZoneList) 设置只读节点部署可用区
 * @method string getHiddenZone() 获取Hidden节点所在的可用区，跨可用区实例必传
 * @method void setHiddenZone(string $HiddenZone) 设置Hidden节点所在的可用区，跨可用区实例必传
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer 每个副本集内节点个数，具体参照查询云数据库的售卖规格返回参数
     */
    public $NodeNum;

    /**
     * @var integer 实例内存大小，单位：GB
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB
     */
    public $Volume;

    /**
     * @var string 版本号，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。参数与版本对应关系是MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本，MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本，MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本
     */
    public $MongoVersion;

    /**
     * @var integer 实例数量, 最小值1，最大值为10
     */
    public $GoodsNum;

    /**
     * @var string 实例所属区域名称，格式如：ap-guangzhou-2。注：此参数填写的是主可用区，如果选择多可用区部署，Zone必须是AvailabilityZoneList中的一个
     */
    public $Zone;

    /**
     * @var integer 实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]
     */
    public $Period;

    /**
     * @var string 机器类型，HIO：高IO型；HIO10G：高IO万兆型；STDS5：标准型
     */
    public $MachineCode;

    /**
     * @var string 实例类型，REPLSET-副本集，SHARD-分片集群，STANDALONE-单节点
     */
    public $ClusterType;

    /**
     * @var integer 副本集个数，创建副本集实例时，该参数必须设置为1；创建分片实例时，具体参照查询云数据库的售卖规格返回参数；若为单节点实例，该参数设置为0
     */
    public $ReplicateSetNum;

    /**
     * @var integer 项目ID，不设置为默认项目
     */
    public $ProjectId;

    /**
     * @var string 私有网络 ID，如果不传则默认选择基础网络，请使用 查询私有网络列表
     */
    public $VpcId;

    /**
     * @var string 私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 查询子网列表
     */
    public $SubnetId;

    /**
     * @var string 实例密码，不设置该参数则默认密码规则为 实例ID+"@"+主账户uin。举例实例id为cmgo-higv73ed，uin为100000001，则默认密码为"cmgo-higv73ed@100000001"。 自定义密码格式为8-32个字符长度，至少包含字母、数字和字符（!@#%^*()_）中的两种
     */
    public $Password;

    /**
     * @var array 实例标签信息
     */
    public $Tags;

    /**
     * @var integer 自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为不自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 是否自动选择代金券，可选值为：1 - 是；0 - 否； 默认为0
     */
    public $AutoVoucher;

    /**
     * @var integer 1:正式实例,2:临时实例,3:只读实例,4:灾备实例,5:克隆实例
     */
    public $Clone;

    /**
     * @var string 若是只读，灾备实例或克隆实例，Father必须填写，即主实例ID
     */
    public $Father;

    /**
     * @var array 安全组
     */
    public $SecurityGroup;

    /**
     * @var string 克隆实例回档时间。若是克隆实例，则必须填写，格式：2021-08-13 16:30:00。注：只能回档7天内的时间点
     */
    public $RestoreTime;

    /**
     * @var string 实例名称。注：名称只支持长度为60个字符的中文、英文、数字、下划线_、分隔符-
     */
    public $InstanceName;

    /**
     * @var array 多可用区部署的节点列表，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。注：1、多可用区部署节点只能部署在3个不同可用区；2、为了保障跨可用区切换，不支持将集群的大多数节点部署在同一个可用区（如3节点集群不支持2个节点部署在同一个区）；3、不支持4.2及以上版本；4、不支持只读灾备实例；5、不能选择基础网络
     */
    public $AvailabilityZoneList;

    /**
     * @var integer mongos cpu数量，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果
     */
    public $MongosCpu;

    /**
     * @var integer mongos 内存大小，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果
     */
    public $MongosMemory;

    /**
     * @var integer mongos 数量，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。注：为了保障高可用，最低需要购买3个mongos，上限为32个
     */
    public $MongosNodeNum;

    /**
     * @var integer 只读节点数量，最大不超过7个
     */
    public $ReadonlyNodeNum;

    /**
     * @var array 只读节点部署可用区
     */
    public $ReadonlyNodeAvailabilityZoneList;

    /**
     * @var string Hidden节点所在的可用区，跨可用区实例必传
     */
    public $HiddenZone;

    /**
     * @param integer $NodeNum 每个副本集内节点个数，具体参照查询云数据库的售卖规格返回参数
     * @param integer $Memory 实例内存大小，单位：GB
     * @param integer $Volume 实例硬盘大小，单位：GB
     * @param string $MongoVersion 版本号，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。参数与版本对应关系是MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本，MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本，MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本，MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本，MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本
     * @param integer $GoodsNum 实例数量, 最小值1，最大值为10
     * @param string $Zone 实例所属区域名称，格式如：ap-guangzhou-2。注：此参数填写的是主可用区，如果选择多可用区部署，Zone必须是AvailabilityZoneList中的一个
     * @param integer $Period 实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]
     * @param string $MachineCode 机器类型，HIO：高IO型；HIO10G：高IO万兆型；STDS5：标准型
     * @param string $ClusterType 实例类型，REPLSET-副本集，SHARD-分片集群，STANDALONE-单节点
     * @param integer $ReplicateSetNum 副本集个数，创建副本集实例时，该参数必须设置为1；创建分片实例时，具体参照查询云数据库的售卖规格返回参数；若为单节点实例，该参数设置为0
     * @param integer $ProjectId 项目ID，不设置为默认项目
     * @param string $VpcId 私有网络 ID，如果不传则默认选择基础网络，请使用 查询私有网络列表
     * @param string $SubnetId 私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 查询子网列表
     * @param string $Password 实例密码，不设置该参数则默认密码规则为 实例ID+"@"+主账户uin。举例实例id为cmgo-higv73ed，uin为100000001，则默认密码为"cmgo-higv73ed@100000001"。 自定义密码格式为8-32个字符长度，至少包含字母、数字和字符（!@#%^*()_）中的两种
     * @param array $Tags 实例标签信息
     * @param integer $AutoRenewFlag 自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为不自动续费
     * @param integer $AutoVoucher 是否自动选择代金券，可选值为：1 - 是；0 - 否； 默认为0
     * @param integer $Clone 1:正式实例,2:临时实例,3:只读实例,4:灾备实例,5:克隆实例
     * @param string $Father 若是只读，灾备实例或克隆实例，Father必须填写，即主实例ID
     * @param array $SecurityGroup 安全组
     * @param string $RestoreTime 克隆实例回档时间。若是克隆实例，则必须填写，格式：2021-08-13 16:30:00。注：只能回档7天内的时间点
     * @param string $InstanceName 实例名称。注：名称只支持长度为60个字符的中文、英文、数字、下划线_、分隔符-
     * @param array $AvailabilityZoneList 多可用区部署的节点列表，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。注：1、多可用区部署节点只能部署在3个不同可用区；2、为了保障跨可用区切换，不支持将集群的大多数节点部署在同一个可用区（如3节点集群不支持2个节点部署在同一个区）；3、不支持4.2及以上版本；4、不支持只读灾备实例；5、不能选择基础网络
     * @param integer $MongosCpu mongos cpu数量，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果
     * @param integer $MongosMemory mongos 内存大小，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果
     * @param integer $MongosNodeNum mongos 数量，购买MongoDB 4.2 WiredTiger存储引擎版本的分片集群时必须填写，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。注：为了保障高可用，最低需要购买3个mongos，上限为32个
     * @param integer $ReadonlyNodeNum 只读节点数量，最大不超过7个
     * @param array $ReadonlyNodeAvailabilityZoneList 只读节点部署可用区
     * @param string $HiddenZone Hidden节点所在的可用区，跨可用区实例必传
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

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
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

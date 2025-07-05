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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBInstance请求参数结构体
 *
 * @method integer getNodeNum() 获取- 创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method void setNodeNum(integer $NodeNum) 设置- 创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method integer getMemory() 获取实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method integer getVolume() 获取实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method string getMongoVersion() 获取指版本信息。具体支持的版本信息 ，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
 * @method void setMongoVersion(string $MongoVersion) 设置指版本信息。具体支持的版本信息 ，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
 * @method integer getGoodsNum() 获取实例数量, 最小值1，最大值为10。
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量, 最小值1，最大值为10。
 * @method string getZone() 获取可用区信息，输入格式如：ap-guangzhou-2。
- 具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。
 * @method void setZone(string $Zone) 设置可用区信息，输入格式如：ap-guangzhou-2。
- 具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。
 * @method integer getPeriod() 获取指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。

 * @method void setPeriod(integer $Period) 设置指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。

 * @method string getMachineCode() 获取产品规格类型。
- HIO10G：通用高HIO万兆型。
- HCD：云盘版类型。
 * @method void setMachineCode(string $MachineCode) 设置产品规格类型。
- HIO10G：通用高HIO万兆型。
- HCD：云盘版类型。
 * @method string getClusterType() 获取实例架构类型。
- REPLSET：副本集。
- SHARD：分片集群。
 * @method void setClusterType(string $ClusterType) 设置实例架构类型。
- REPLSET：副本集。
- SHARD：分片集群。
 * @method integer getReplicateSetNum() 获取- 创建副本集实例，指副本集数量，该参数只能为1。
- 创建分片集群实例，指分片的数量。请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置- 创建副本集实例，指副本集数量，该参数只能为1。
- 创建分片集群实例，指分片的数量。请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
 * @method integer getProjectId() 获取项目ID。
- 若不设置该参数，则为默认项目。
- 在 [MongoDB 控制台项目管理](https://console.cloud.tencent.com/project)页面，可获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
- 若不设置该参数，则为默认项目。
- 在 [MongoDB 控制台项目管理](https://console.cloud.tencent.com/project)页面，可获取项目ID。
 * @method string getVpcId() 获取私有网络ID。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)查询确认正确的ID。 示例值：vpc-pxyzim13
 * @method void setVpcId(string $VpcId) 设置私有网络ID。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)查询确认正确的ID。 示例值：vpc-pxyzim13
 * @method string getSubnetId() 获取私有网络VPC的子网。请登录 [私有网络控制台](https://console.cloud.tencent.com/vpc) 查询子网列表确认正确的 ID。 示例值：subnet-7jbabche
 * @method void setSubnetId(string $SubnetId) 设置私有网络VPC的子网。请登录 [私有网络控制台](https://console.cloud.tencent.com/vpc) 查询子网列表确认正确的 ID。 示例值：subnet-7jbabche
 * @method string getPassword() 获取实例密码。设置要求如下：
- 字符个数为[8,32]。
- 可输入[A,Z]、[a,z]、[0,9]范围内的字符。
- 可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“\*”、括号“()”、下划线“\_”。
- 不能设置单一的字母或者数字。
 * @method void setPassword(string $Password) 设置实例密码。设置要求如下：
- 字符个数为[8,32]。
- 可输入[A,Z]、[a,z]、[0,9]范围内的字符。
- 可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“\*”、括号“()”、下划线“\_”。
- 不能设置单一的字母或者数字。
 * @method array getTags() 获取实例标签信息。
 * @method void setTags(array $Tags) 设置实例标签信息。
 * @method integer getAutoRenewFlag() 获取自动续费标记。
- 0：不自动续费。
- 1：自动续费。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记。
- 0：不自动续费。
- 1：自动续费。
 * @method integer getAutoVoucher() 获取是否自动选择代金券。
- 1：是。
- 0：否。默认为0。
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券。
- 1：是。
- 0：否。默认为0。
 * @method integer getClone() 获取实例类型。- 1：正式实例。- 3：只读实例。- 4：灾备实例。-5：整实例克隆，注意：克隆实例时，RestoreTime为必填项。
 * @method void setClone(integer $Clone) 设置实例类型。- 1：正式实例。- 3：只读实例。- 4：灾备实例。-5：整实例克隆，注意：克隆实例时，RestoreTime为必填项。
 * @method string getFather() 获取父实例 ID。当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
 * @method void setFather(string $Father) 设置父实例 ID。当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
 * @method array getSecurityGroup() 获取安全组 ID。 
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组 ID。 
 * @method string getRestoreTime() 获取克隆实例回档时间，当Clone取值为5或6时为必填。- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。- 回档时间范围：仅能回档7天内时间点的数据。
 * @method void setRestoreTime(string $RestoreTime) 设置克隆实例回档时间，当Clone取值为5或6时为必填。- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。- 回档时间范围：仅能回档7天内时间点的数据。
 * @method string getInstanceName() 获取实例名称。仅支持长度为60个字符的中文、英文、数字、下划线_、分隔符- 。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。仅支持长度为60个字符的中文、英文、数字、下划线_、分隔符- 。
 * @method array getAvailabilityZoneList() 获取若多可用区部署云数据库实例，指定多可用区列表。
- 多可用区部署实例，参数 **Zone** 指定实例主可用区信息；**AvailabilityZoneList** 指定所有可用区信息，包含主可用区。输入格式如：[ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4]。
- 通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 可获取云数据库不同地域规划的可用区信息，以便指定有效的可用区。
- 多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。
 * @method void setAvailabilityZoneList(array $AvailabilityZoneList) 设置若多可用区部署云数据库实例，指定多可用区列表。
- 多可用区部署实例，参数 **Zone** 指定实例主可用区信息；**AvailabilityZoneList** 指定所有可用区信息，包含主可用区。输入格式如：[ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4]。
- 通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 可获取云数据库不同地域规划的可用区信息，以便指定有效的可用区。
- 多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。
 * @method integer getMongosCpu() 获取Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。
 * @method void setMongosCpu(integer $MongosCpu) 设置Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。
 * @method integer getMongosMemory() 获取Mongos 内存大小。
-  购买分片集群时，必须填写。
- 单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。
 * @method void setMongosMemory(integer $MongosMemory) 设置Mongos 内存大小。
-  购买分片集群时，必须填写。
- 单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。
 * @method integer getMongosNodeNum() 获取Mongos 数量。购买分片集群时，必须填写。
- 单可用区部署实例，其数量范围为[3,32]。
- 多可用区部署实例，其数量范围为[6,32]。
 * @method void setMongosNodeNum(integer $MongosNodeNum) 设置Mongos 数量。购买分片集群时，必须填写。
- 单可用区部署实例，其数量范围为[3,32]。
- 多可用区部署实例，其数量范围为[6,32]。
 * @method integer getReadonlyNodeNum() 获取只读节点数量，取值范围[0,5]。
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) 设置只读节点数量，取值范围[0,5]。
 * @method array getReadonlyNodeAvailabilityZoneList() 获取指只读节点所属可用区数组。跨可用区部署实例，参数**ReadonlyNodeNum**不为**0**时，必须配置该参数。
 * @method void setReadonlyNodeAvailabilityZoneList(array $ReadonlyNodeAvailabilityZoneList) 设置指只读节点所属可用区数组。跨可用区部署实例，参数**ReadonlyNodeNum**不为**0**时，必须配置该参数。
 * @method string getHiddenZone() 获取Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。
 * @method void setHiddenZone(string $HiddenZone) 设置Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。
 * @method string getParamTemplateId() 获取参数模板 ID。参数模板是一组 MongoDB 的参数并为预设置了参数值的集合，将一组有相同诉求的参数及值 存为模板，在创建实例时，可直接引用参数值到新实例。合理使用参数模板，可以提高MongoDB数据库的效率。模板列表从 DescribeDBInstanceParamTpl 接口获取，注意模板支持的版本及实例类型。
 * @method void setParamTemplateId(string $ParamTemplateId) 设置参数模板 ID。参数模板是一组 MongoDB 的参数并为预设置了参数值的集合，将一组有相同诉求的参数及值 存为模板，在创建实例时，可直接引用参数值到新实例。合理使用参数模板，可以提高MongoDB数据库的效率。模板列表从 DescribeDBInstanceParamTpl 接口获取，注意模板支持的版本及实例类型。
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer - 创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     */
    public $NodeNum;

    /**
     * @var integer 实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     */
    public $Volume;

    /**
     * @var string 指版本信息。具体支持的版本信息 ，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
     */
    public $MongoVersion;

    /**
     * @var integer 实例数量, 最小值1，最大值为10。
     */
    public $GoodsNum;

    /**
     * @var string 可用区信息，输入格式如：ap-guangzhou-2。
- 具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。
     */
    public $Zone;

    /**
     * @var integer 指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。

     */
    public $Period;

    /**
     * @var string 产品规格类型。
- HIO10G：通用高HIO万兆型。
- HCD：云盘版类型。
     */
    public $MachineCode;

    /**
     * @var string 实例架构类型。
- REPLSET：副本集。
- SHARD：分片集群。
     */
    public $ClusterType;

    /**
     * @var integer - 创建副本集实例，指副本集数量，该参数只能为1。
- 创建分片集群实例，指分片的数量。请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
     */
    public $ReplicateSetNum;

    /**
     * @var integer 项目ID。
- 若不设置该参数，则为默认项目。
- 在 [MongoDB 控制台项目管理](https://console.cloud.tencent.com/project)页面，可获取项目ID。
     */
    public $ProjectId;

    /**
     * @var string 私有网络ID。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)查询确认正确的ID。 示例值：vpc-pxyzim13
     */
    public $VpcId;

    /**
     * @var string 私有网络VPC的子网。请登录 [私有网络控制台](https://console.cloud.tencent.com/vpc) 查询子网列表确认正确的 ID。 示例值：subnet-7jbabche
     */
    public $SubnetId;

    /**
     * @var string 实例密码。设置要求如下：
- 字符个数为[8,32]。
- 可输入[A,Z]、[a,z]、[0,9]范围内的字符。
- 可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“\*”、括号“()”、下划线“\_”。
- 不能设置单一的字母或者数字。
     */
    public $Password;

    /**
     * @var array 实例标签信息。
     */
    public $Tags;

    /**
     * @var integer 自动续费标记。
- 0：不自动续费。
- 1：自动续费。
     */
    public $AutoRenewFlag;

    /**
     * @var integer 是否自动选择代金券。
- 1：是。
- 0：否。默认为0。
     */
    public $AutoVoucher;

    /**
     * @var integer 实例类型。- 1：正式实例。- 3：只读实例。- 4：灾备实例。-5：整实例克隆，注意：克隆实例时，RestoreTime为必填项。
     */
    public $Clone;

    /**
     * @var string 父实例 ID。当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
     */
    public $Father;

    /**
     * @var array 安全组 ID。 
     */
    public $SecurityGroup;

    /**
     * @var string 克隆实例回档时间，当Clone取值为5或6时为必填。- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。- 回档时间范围：仅能回档7天内时间点的数据。
     */
    public $RestoreTime;

    /**
     * @var string 实例名称。仅支持长度为60个字符的中文、英文、数字、下划线_、分隔符- 。
     */
    public $InstanceName;

    /**
     * @var array 若多可用区部署云数据库实例，指定多可用区列表。
- 多可用区部署实例，参数 **Zone** 指定实例主可用区信息；**AvailabilityZoneList** 指定所有可用区信息，包含主可用区。输入格式如：[ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4]。
- 通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 可获取云数据库不同地域规划的可用区信息，以便指定有效的可用区。
- 多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。
     */
    public $AvailabilityZoneList;

    /**
     * @var integer Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。
     */
    public $MongosCpu;

    /**
     * @var integer Mongos 内存大小。
-  购买分片集群时，必须填写。
- 单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。
     */
    public $MongosMemory;

    /**
     * @var integer Mongos 数量。购买分片集群时，必须填写。
- 单可用区部署实例，其数量范围为[3,32]。
- 多可用区部署实例，其数量范围为[6,32]。
     */
    public $MongosNodeNum;

    /**
     * @var integer 只读节点数量，取值范围[0,5]。
     */
    public $ReadonlyNodeNum;

    /**
     * @var array 指只读节点所属可用区数组。跨可用区部署实例，参数**ReadonlyNodeNum**不为**0**时，必须配置该参数。
     */
    public $ReadonlyNodeAvailabilityZoneList;

    /**
     * @var string Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。
     */
    public $HiddenZone;

    /**
     * @var string 参数模板 ID。参数模板是一组 MongoDB 的参数并为预设置了参数值的集合，将一组有相同诉求的参数及值 存为模板，在创建实例时，可直接引用参数值到新实例。合理使用参数模板，可以提高MongoDB数据库的效率。模板列表从 DescribeDBInstanceParamTpl 接口获取，注意模板支持的版本及实例类型。
     */
    public $ParamTemplateId;

    /**
     * @param integer $NodeNum - 创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     * @param integer $Memory 实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     * @param integer $Volume 实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     * @param string $MongoVersion 指版本信息。具体支持的版本信息 ，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
     * @param integer $GoodsNum 实例数量, 最小值1，最大值为10。
     * @param string $Zone 可用区信息，输入格式如：ap-guangzhou-2。
- 具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。
     * @param integer $Period 指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。

     * @param string $MachineCode 产品规格类型。
- HIO10G：通用高HIO万兆型。
- HCD：云盘版类型。
     * @param string $ClusterType 实例架构类型。
- REPLSET：副本集。
- SHARD：分片集群。
     * @param integer $ReplicateSetNum - 创建副本集实例，指副本集数量，该参数只能为1。
- 创建分片集群实例，指分片的数量。请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
     * @param integer $ProjectId 项目ID。
- 若不设置该参数，则为默认项目。
- 在 [MongoDB 控制台项目管理](https://console.cloud.tencent.com/project)页面，可获取项目ID。
     * @param string $VpcId 私有网络ID。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)查询确认正确的ID。 示例值：vpc-pxyzim13
     * @param string $SubnetId 私有网络VPC的子网。请登录 [私有网络控制台](https://console.cloud.tencent.com/vpc) 查询子网列表确认正确的 ID。 示例值：subnet-7jbabche
     * @param string $Password 实例密码。设置要求如下：
- 字符个数为[8,32]。
- 可输入[A,Z]、[a,z]、[0,9]范围内的字符。
- 可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“\*”、括号“()”、下划线“\_”。
- 不能设置单一的字母或者数字。
     * @param array $Tags 实例标签信息。
     * @param integer $AutoRenewFlag 自动续费标记。
- 0：不自动续费。
- 1：自动续费。
     * @param integer $AutoVoucher 是否自动选择代金券。
- 1：是。
- 0：否。默认为0。
     * @param integer $Clone 实例类型。- 1：正式实例。- 3：只读实例。- 4：灾备实例。-5：整实例克隆，注意：克隆实例时，RestoreTime为必填项。
     * @param string $Father 父实例 ID。当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
     * @param array $SecurityGroup 安全组 ID。 
     * @param string $RestoreTime 克隆实例回档时间，当Clone取值为5或6时为必填。- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。- 回档时间范围：仅能回档7天内时间点的数据。
     * @param string $InstanceName 实例名称。仅支持长度为60个字符的中文、英文、数字、下划线_、分隔符- 。
     * @param array $AvailabilityZoneList 若多可用区部署云数据库实例，指定多可用区列表。
- 多可用区部署实例，参数 **Zone** 指定实例主可用区信息；**AvailabilityZoneList** 指定所有可用区信息，包含主可用区。输入格式如：[ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4]。
- 通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 可获取云数据库不同地域规划的可用区信息，以便指定有效的可用区。
- 多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。
     * @param integer $MongosCpu Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。
     * @param integer $MongosMemory Mongos 内存大小。
-  购买分片集群时，必须填写。
- 单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。
     * @param integer $MongosNodeNum Mongos 数量。购买分片集群时，必须填写。
- 单可用区部署实例，其数量范围为[3,32]。
- 多可用区部署实例，其数量范围为[6,32]。
     * @param integer $ReadonlyNodeNum 只读节点数量，取值范围[0,5]。
     * @param array $ReadonlyNodeAvailabilityZoneList 指只读节点所属可用区数组。跨可用区部署实例，参数**ReadonlyNodeNum**不为**0**时，必须配置该参数。
     * @param string $HiddenZone Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。
     * @param string $ParamTemplateId 参数模板 ID。参数模板是一组 MongoDB 的参数并为预设置了参数值的集合，将一组有相同诉求的参数及值 存为模板，在创建实例时，可直接引用参数值到新实例。合理使用参数模板，可以提高MongoDB数据库的效率。模板列表从 DescribeDBInstanceParamTpl 接口获取，注意模板支持的版本及实例类型。
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

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }
    }
}

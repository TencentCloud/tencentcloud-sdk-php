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
 * CreateDBInstanceHour请求参数结构体
 *
 * @method integer getMemory() 获取实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method integer getVolume() 获取实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method integer getReplicateSetNum() 获取- 创建副本集实例，指副本集数量，该参数只能为1。
- 创建分片集群实例，指分片的数量。请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置- 创建副本集实例，指副本集数量，该参数只能为1。
- 创建分片集群实例，指分片的数量。请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
 * @method integer getNodeNum() 获取- 创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method void setNodeNum(integer $NodeNum) 设置- 创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method string getMongoVersion() 获取指版本信息。具体支持的版本信息 ，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
 * @method void setMongoVersion(string $MongoVersion) 设置指版本信息。具体支持的版本信息 ，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
 * @method string getMachineCode() 获取产品规格类型。
- HIO10G：通用高HIO万兆型。
- HCD：云盘版类型。
 * @method void setMachineCode(string $MachineCode) 设置产品规格类型。
- HIO10G：通用高HIO万兆型。
- HCD：云盘版类型。
 * @method integer getGoodsNum() 获取实例数量，最小值1，最大值为30。
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，最小值1，最大值为30。
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
 * @method string getVpcId() 获取私有网络ID。
- 仅支持配置私有网络，必须选择一个与实例同一地域的私有网络。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)获取可使用的私有网络 ID。
- 实例创建成功之后，支持更换私有网络。具体操作，请参见[更换网络](https://cloud.tencent.com/document/product/239/30910)。
 * @method void setVpcId(string $VpcId) 设置私有网络ID。
- 仅支持配置私有网络，必须选择一个与实例同一地域的私有网络。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)获取可使用的私有网络 ID。
- 实例创建成功之后，支持更换私有网络。具体操作，请参见[更换网络](https://cloud.tencent.com/document/product/239/30910)。
 * @method string getSubnetId() 获取私有网络 VPC 的子网 ID。
- 必须在已选的私有网络内指定一个子网。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)获取可使用的子网 ID。
- 实例创建成功之后，支持更换私有网络及子网。具体操作，请参见[更换网络](https://cloud.tencent.com/document/product/239/30910)。
 * @method void setSubnetId(string $SubnetId) 设置私有网络 VPC 的子网 ID。
- 必须在已选的私有网络内指定一个子网。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)获取可使用的子网 ID。
- 实例创建成功之后，支持更换私有网络及子网。具体操作，请参见[更换网络](https://cloud.tencent.com/document/product/239/30910)。
 * @method string getPassword() 获取实例密码。设置要求如下：
- 字符个数为[8,32]。
- 可输入[A,Z]、[a,z]、[0,9]范围内的字符。
- 可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“\*”、括号“()”、下划线“_”。
- 不能设置单一的字母或者数字。
 * @method void setPassword(string $Password) 设置实例密码。设置要求如下：
- 字符个数为[8,32]。
- 可输入[A,Z]、[a,z]、[0,9]范围内的字符。
- 可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“\*”、括号“()”、下划线“_”。
- 不能设置单一的字母或者数字。
 * @method integer getProjectId() 获取项目ID。
- 若不设置该参数，则为默认项目。
- 在 [MongoDB 控制台项目管理](https://console.cloud.tencent.com/project)页面，可获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
- 若不设置该参数，则为默认项目。
- 在 [MongoDB 控制台项目管理](https://console.cloud.tencent.com/project)页面，可获取项目ID。
 * @method array getTags() 获取实例标签信息。
 * @method void setTags(array $Tags) 设置实例标签信息。
 * @method integer getClone() 获取实例类型。
- 1：正式实例。
- 3：只读实例。
- 4：灾备实例。
- 5：克隆实例。注意：克隆实例 RestoreTime 为必填项。
 * @method void setClone(integer $Clone) 设置实例类型。
- 1：正式实例。
- 3：只读实例。
- 4：灾备实例。
- 5：克隆实例。注意：克隆实例 RestoreTime 为必填项。
 * @method string getFather() 获取父实例 ID。
- 当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制父实例 ID。
 * @method void setFather(string $Father) 设置父实例 ID。
- 当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制父实例 ID。
 * @method array getSecurityGroup() 获取安全组 ID。 请登录[安全组控制台](https://console.cloud.tencent.com/vpc/security-group)页面获取与数据库实例同地域的安全组 ID。
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组 ID。 请登录[安全组控制台](https://console.cloud.tencent.com/vpc/security-group)页面获取与数据库实例同地域的安全组 ID。
 * @method string getRestoreTime() 获取克隆实例回档时间。
- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。
- 回档时间范围：仅能回档7天内时间点的数据。
 * @method void setRestoreTime(string $RestoreTime) 设置克隆实例回档时间。
- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。
- 回档时间范围：仅能回档7天内时间点的数据。
 * @method string getInstanceName() 获取实例名称。仅支持长度为128个字符的中文、英文、数字、下划线\_、分隔符\-。批量购买数据库实例时，支持通过自定义命名模式串与数字后缀自动升序功能，高效设置实例名称。
- 基础模式：前缀＋自动升序编号（默认从1开始），**lnstanceName**仅需自定义实例名称前缀，例如设置为：cmgo，设置购买数量为5，则购买后，实例名称依次分别为cmgo1、cmgo2、cmgo3、cmgo4、cmgo5。
- 自定义起始序号模式：前缀+｛R:x｝（x为自定义起始序号）。**InstanceName**需填写“前缀｛R:x｝”，例如：cmgo｛R:3｝，设置购买数量为5，则实例名称为cmgo3、cmgo4、cmgo5、cmgo6、cmgo7。
- 复合模式串：前缀1{R:x}+前缀2{R:y}+ ⋯+固定后缀，x与y分别为每一段前缀的起始序号。**instanceName**需填写复合模式串，例如：cmgo{R:10}\_node{R:12}\_db，设置批量购买数量为5，则实例名称为 cmgo10\_node12\_db, cmgo11\_node13\_db, cmgo12\_node14\_db, cmgo13\_node15\_db, cluster14\_node16\_db. 
 * @method void setInstanceName(string $InstanceName) 设置实例名称。仅支持长度为128个字符的中文、英文、数字、下划线\_、分隔符\-。批量购买数据库实例时，支持通过自定义命名模式串与数字后缀自动升序功能，高效设置实例名称。
- 基础模式：前缀＋自动升序编号（默认从1开始），**lnstanceName**仅需自定义实例名称前缀，例如设置为：cmgo，设置购买数量为5，则购买后，实例名称依次分别为cmgo1、cmgo2、cmgo3、cmgo4、cmgo5。
- 自定义起始序号模式：前缀+｛R:x｝（x为自定义起始序号）。**InstanceName**需填写“前缀｛R:x｝”，例如：cmgo｛R:3｝，设置购买数量为5，则实例名称为cmgo3、cmgo4、cmgo5、cmgo6、cmgo7。
- 复合模式串：前缀1{R:x}+前缀2{R:y}+ ⋯+固定后缀，x与y分别为每一段前缀的起始序号。**instanceName**需填写复合模式串，例如：cmgo{R:10}\_node{R:12}\_db，设置批量购买数量为5，则实例名称为 cmgo10\_node12\_db, cmgo11\_node13\_db, cmgo12\_node14\_db, cmgo13\_node15\_db, cluster14\_node16\_db. 
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
 * @method string getParamTemplateId() 获取参数模板 ID。
- 参数模板是预置了特定参数值的集合，可用于快速配置新的 MongoDB 实例。合理使用参数模板，能有效提升数据库的部署效率与运行性能。
- 参数模板 ID 可通过 [DescribeDBInstanceParamTpl ](https://cloud.tencent.com/document/product/240/109155)接口获取。请选择与实例版本与架构所对应的参数模板 ID。
 * @method void setParamTemplateId(string $ParamTemplateId) 设置参数模板 ID。
- 参数模板是预置了特定参数值的集合，可用于快速配置新的 MongoDB 实例。合理使用参数模板，能有效提升数据库的部署效率与运行性能。
- 参数模板 ID 可通过 [DescribeDBInstanceParamTpl ](https://cloud.tencent.com/document/product/240/109155)接口获取。请选择与实例版本与架构所对应的参数模板 ID。
 */
class CreateDBInstanceHourRequest extends AbstractModel
{
    /**
     * @var integer 实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     */
    public $Volume;

    /**
     * @var integer - 创建副本集实例，指副本集数量，该参数只能为1。
- 创建分片集群实例，指分片的数量。请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
     */
    public $ReplicateSetNum;

    /**
     * @var integer - 创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     */
    public $NodeNum;

    /**
     * @var string 指版本信息。具体支持的版本信息 ，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
     */
    public $MongoVersion;

    /**
     * @var string 产品规格类型。
- HIO10G：通用高HIO万兆型。
- HCD：云盘版类型。
     */
    public $MachineCode;

    /**
     * @var integer 实例数量，最小值1，最大值为30。
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
     * @var string 私有网络ID。
- 仅支持配置私有网络，必须选择一个与实例同一地域的私有网络。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)获取可使用的私有网络 ID。
- 实例创建成功之后，支持更换私有网络。具体操作，请参见[更换网络](https://cloud.tencent.com/document/product/239/30910)。
     */
    public $VpcId;

    /**
     * @var string 私有网络 VPC 的子网 ID。
- 必须在已选的私有网络内指定一个子网。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)获取可使用的子网 ID。
- 实例创建成功之后，支持更换私有网络及子网。具体操作，请参见[更换网络](https://cloud.tencent.com/document/product/239/30910)。
     */
    public $SubnetId;

    /**
     * @var string 实例密码。设置要求如下：
- 字符个数为[8,32]。
- 可输入[A,Z]、[a,z]、[0,9]范围内的字符。
- 可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“\*”、括号“()”、下划线“_”。
- 不能设置单一的字母或者数字。
     */
    public $Password;

    /**
     * @var integer 项目ID。
- 若不设置该参数，则为默认项目。
- 在 [MongoDB 控制台项目管理](https://console.cloud.tencent.com/project)页面，可获取项目ID。
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
- 5：克隆实例。注意：克隆实例 RestoreTime 为必填项。
     */
    public $Clone;

    /**
     * @var string 父实例 ID。
- 当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制父实例 ID。
     */
    public $Father;

    /**
     * @var array 安全组 ID。 请登录[安全组控制台](https://console.cloud.tencent.com/vpc/security-group)页面获取与数据库实例同地域的安全组 ID。
     */
    public $SecurityGroup;

    /**
     * @var string 克隆实例回档时间。
- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。
- 回档时间范围：仅能回档7天内时间点的数据。
     */
    public $RestoreTime;

    /**
     * @var string 实例名称。仅支持长度为128个字符的中文、英文、数字、下划线\_、分隔符\-。批量购买数据库实例时，支持通过自定义命名模式串与数字后缀自动升序功能，高效设置实例名称。
- 基础模式：前缀＋自动升序编号（默认从1开始），**lnstanceName**仅需自定义实例名称前缀，例如设置为：cmgo，设置购买数量为5，则购买后，实例名称依次分别为cmgo1、cmgo2、cmgo3、cmgo4、cmgo5。
- 自定义起始序号模式：前缀+｛R:x｝（x为自定义起始序号）。**InstanceName**需填写“前缀｛R:x｝”，例如：cmgo｛R:3｝，设置购买数量为5，则实例名称为cmgo3、cmgo4、cmgo5、cmgo6、cmgo7。
- 复合模式串：前缀1{R:x}+前缀2{R:y}+ ⋯+固定后缀，x与y分别为每一段前缀的起始序号。**instanceName**需填写复合模式串，例如：cmgo{R:10}\_node{R:12}\_db，设置批量购买数量为5，则实例名称为 cmgo10\_node12\_db, cmgo11\_node13\_db, cmgo12\_node14\_db, cmgo13\_node15\_db, cluster14\_node16\_db. 
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
     * @var string 参数模板 ID。
- 参数模板是预置了特定参数值的集合，可用于快速配置新的 MongoDB 实例。合理使用参数模板，能有效提升数据库的部署效率与运行性能。
- 参数模板 ID 可通过 [DescribeDBInstanceParamTpl ](https://cloud.tencent.com/document/product/240/109155)接口获取。请选择与实例版本与架构所对应的参数模板 ID。
     */
    public $ParamTemplateId;

    /**
     * @param integer $Memory 实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     * @param integer $Volume 实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     * @param integer $ReplicateSetNum - 创建副本集实例，指副本集数量，该参数只能为1。
- 创建分片集群实例，指分片的数量。请通过接口[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。
     * @param integer $NodeNum - 创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     * @param string $MongoVersion 指版本信息。具体支持的版本信息 ，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。
- MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。
- MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。
- MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。
- MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。
- MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。
     * @param string $MachineCode 产品规格类型。
- HIO10G：通用高HIO万兆型。
- HCD：云盘版类型。
     * @param integer $GoodsNum 实例数量，最小值1，最大值为30。
     * @param string $Zone 可用区信息，输入格式如：ap-guangzhou-2。
- 具体信息，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。
     * @param string $ClusterType 实例架构类型。
- REPLSET：副本集。
- SHARD：分片集群。
     * @param string $VpcId 私有网络ID。
- 仅支持配置私有网络，必须选择一个与实例同一地域的私有网络。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)获取可使用的私有网络 ID。
- 实例创建成功之后，支持更换私有网络。具体操作，请参见[更换网络](https://cloud.tencent.com/document/product/239/30910)。
     * @param string $SubnetId 私有网络 VPC 的子网 ID。
- 必须在已选的私有网络内指定一个子网。请登录[私有网络控制台](https://console.cloud.tencent.com/vpc)获取可使用的子网 ID。
- 实例创建成功之后，支持更换私有网络及子网。具体操作，请参见[更换网络](https://cloud.tencent.com/document/product/239/30910)。
     * @param string $Password 实例密码。设置要求如下：
- 字符个数为[8,32]。
- 可输入[A,Z]、[a,z]、[0,9]范围内的字符。
- 可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“\*”、括号“()”、下划线“_”。
- 不能设置单一的字母或者数字。
     * @param integer $ProjectId 项目ID。
- 若不设置该参数，则为默认项目。
- 在 [MongoDB 控制台项目管理](https://console.cloud.tencent.com/project)页面，可获取项目ID。
     * @param array $Tags 实例标签信息。
     * @param integer $Clone 实例类型。
- 1：正式实例。
- 3：只读实例。
- 4：灾备实例。
- 5：克隆实例。注意：克隆实例 RestoreTime 为必填项。
     * @param string $Father 父实例 ID。
- 当参数**Clone**为3或者4时，即实例为只读或灾备实例时，该参数必须配置。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制父实例 ID。
     * @param array $SecurityGroup 安全组 ID。 请登录[安全组控制台](https://console.cloud.tencent.com/vpc/security-group)页面获取与数据库实例同地域的安全组 ID。
     * @param string $RestoreTime 克隆实例回档时间。
- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。
- 回档时间范围：仅能回档7天内时间点的数据。
     * @param string $InstanceName 实例名称。仅支持长度为128个字符的中文、英文、数字、下划线\_、分隔符\-。批量购买数据库实例时，支持通过自定义命名模式串与数字后缀自动升序功能，高效设置实例名称。
- 基础模式：前缀＋自动升序编号（默认从1开始），**lnstanceName**仅需自定义实例名称前缀，例如设置为：cmgo，设置购买数量为5，则购买后，实例名称依次分别为cmgo1、cmgo2、cmgo3、cmgo4、cmgo5。
- 自定义起始序号模式：前缀+｛R:x｝（x为自定义起始序号）。**InstanceName**需填写“前缀｛R:x｝”，例如：cmgo｛R:3｝，设置购买数量为5，则实例名称为cmgo3、cmgo4、cmgo5、cmgo6、cmgo7。
- 复合模式串：前缀1{R:x}+前缀2{R:y}+ ⋯+固定后缀，x与y分别为每一段前缀的起始序号。**instanceName**需填写复合模式串，例如：cmgo{R:10}\_node{R:12}\_db，设置批量购买数量为5，则实例名称为 cmgo10\_node12\_db, cmgo11\_node13\_db, cmgo12\_node14\_db, cmgo13\_node15\_db, cluster14\_node16\_db. 
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
     * @param string $ParamTemplateId 参数模板 ID。
- 参数模板是预置了特定参数值的集合，可用于快速配置新的 MongoDB 实例。合理使用参数模板，能有效提升数据库的部署效率与运行性能。
- 参数模板 ID 可通过 [DescribeDBInstanceParamTpl ](https://cloud.tencent.com/document/product/240/109155)接口获取。请选择与实例版本与架构所对应的参数模板 ID。
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

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }
    }
}

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
 * @method integer getNodeNum() 获取<ul><li>创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li></ul>
 * @method void setNodeNum(integer $NodeNum) 设置<ul><li>创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li></ul>
 * @method integer getMemory() 获取<p>实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p>
 * @method integer getVolume() 获取<p>实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p>
 * @method void setVolume(integer $Volume) 设置<p>实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p>
 * @method string getMongoVersion() 获取<p>指版本信息。具体支持的版本信息 ，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p><ul><li>MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。</li><li>MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。</li><li>MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。</li><li>MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。</li><li>MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。</li><li>MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。</li><li>MONGO_80_WT：MongoDB 8.0 WiredTiger存储引擎版本。</li></ul>
 * @method void setMongoVersion(string $MongoVersion) 设置<p>指版本信息。具体支持的版本信息 ，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p><ul><li>MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。</li><li>MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。</li><li>MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。</li><li>MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。</li><li>MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。</li><li>MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。</li><li>MONGO_80_WT：MongoDB 8.0 WiredTiger存储引擎版本。</li></ul>
 * @method integer getGoodsNum() 获取<p>实例数量, 最小值1，最大值为30。</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>实例数量, 最小值1，最大值为30。</p>
 * @method string getZone() 获取<p>可用区信息，输入格式如：ap-guangzhou-2。</p><ul><li>具体信息，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。</li></ul>
 * @method void setZone(string $Zone) 设置<p>可用区信息，输入格式如：ap-guangzhou-2。</p><ul><li>具体信息，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。</li></ul>
 * @method integer getPeriod() 获取<p>指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。</p>
 * @method void setPeriod(integer $Period) 设置<p>指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。</p>
 * @method string getMachineCode() 获取<p>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</p>
 * @method void setMachineCode(string $MachineCode) 设置<p>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</p>
 * @method string getClusterType() 获取<p>实例架构类型。</p><ul><li>REPLSET：副本集。</li><li>SHARD：分片集群。</li></ul>
 * @method void setClusterType(string $ClusterType) 设置<p>实例架构类型。</p><ul><li>REPLSET：副本集。</li><li>SHARD：分片集群。</li></ul>
 * @method integer getReplicateSetNum() 获取<ul><li>创建副本集实例，指副本集数量，该参数只能为1。</li><li>创建分片集群实例，指分片的数量。请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。</li></ul>
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置<ul><li>创建副本集实例，指副本集数量，该参数只能为1。</li><li>创建分片集群实例，指分片的数量。请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。</li></ul>
 * @method integer getProjectId() 获取<p>项目ID。</p><ul><li>若不设置该参数，则为默认项目。</li><li>在 <a href="https://console.cloud.tencent.com/project">MongoDB 控制台项目管理</a>页面，可获取项目ID。</li></ul>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID。</p><ul><li>若不设置该参数，则为默认项目。</li><li>在 <a href="https://console.cloud.tencent.com/project">MongoDB 控制台项目管理</a>页面，可获取项目ID。</li></ul>
 * @method string getVpcId() 获取<p>私有网络 ID。</p><ul><li>仅支持配置私有网络，必须选择一个与实例同一地域的私有网络。请登录<a href="https://console.cloud.tencent.com/vpc">私有网络控制台</a>获取可使用的私有网络 ID。</li><li>实例创建成功之后，支持更换私有网络。具体操作，请参见<a href="https://cloud.tencent.com/document/product/239/30910">更换网络</a>。</li></ul>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络 ID。</p><ul><li>仅支持配置私有网络，必须选择一个与实例同一地域的私有网络。请登录<a href="https://console.cloud.tencent.com/vpc">私有网络控制台</a>获取可使用的私有网络 ID。</li><li>实例创建成功之后，支持更换私有网络。具体操作，请参见<a href="https://cloud.tencent.com/document/product/239/30910">更换网络</a>。</li></ul>
 * @method string getSubnetId() 获取<p>私有网络 VPC 的子网 ID。</p><ul><li>必须在已选的私有网络内指定一个子网。请登录<a href="https://console.cloud.tencent.com/vpc">私有网络控制台</a>获取可使用的子网 ID。</li><li>实例创建成功之后，支持更换私有网络及子网。具体操作，请参见<a href="https://cloud.tencent.com/document/product/239/30910">更换网络</a>。</li></ul>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络 VPC 的子网 ID。</p><ul><li>必须在已选的私有网络内指定一个子网。请登录<a href="https://console.cloud.tencent.com/vpc">私有网络控制台</a>获取可使用的子网 ID。</li><li>实例创建成功之后，支持更换私有网络及子网。具体操作，请参见<a href="https://cloud.tencent.com/document/product/239/30910">更换网络</a>。</li></ul>
 * @method string getPassword() 获取<p>实例密码。设置要求如下：</p><ul><li>字符个数为[8,32]。</li><li>可输入[A,Z]、[a,z]、[0,9]范围内的字符。</li><li>可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“*”、括号“()”、下划线“_”。</li><li>不能设置单一的字母或者数字。</li></ul>
 * @method void setPassword(string $Password) 设置<p>实例密码。设置要求如下：</p><ul><li>字符个数为[8,32]。</li><li>可输入[A,Z]、[a,z]、[0,9]范围内的字符。</li><li>可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“*”、括号“()”、下划线“_”。</li><li>不能设置单一的字母或者数字。</li></ul>
 * @method array getTags() 获取<p>实例标签信息。</p>
 * @method void setTags(array $Tags) 设置<p>实例标签信息。</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记。</p><ul><li>0：不自动续费。</li><li>1：自动续费。</li></ul>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记。</p><ul><li>0：不自动续费。</li><li>1：自动续费。</li></ul>
 * @method integer getAutoVoucher() 获取<p>是否自动选择代金券。</p><ul><li>1：是。</li><li>0：否。默认为0。</li></ul>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动选择代金券。</p><ul><li>1：是。</li><li>0：否。默认为0。</li></ul>
 * @method integer getClone() 获取<p>实例类型。</p><ul><li>1：正式实例。</li><li>3：只读实例。</li><li>4：灾备实例。</li><li>5：克隆实例。注意：克隆实例 RestoreTime 为必填项。</li></ul>
 * @method void setClone(integer $Clone) 设置<p>实例类型。</p><ul><li>1：正式实例。</li><li>3：只读实例。</li><li>4：灾备实例。</li><li>5：克隆实例。注意：克隆实例 RestoreTime 为必填项。</li></ul>
 * @method string getFather() 获取<p>父实例 ID。</p><ul><li>当参数<strong>Clone</strong>为3或者4时，即实例为只读或灾备实例时，该参数必须配置。</li><li>请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制父实例 ID。</li></ul>
 * @method void setFather(string $Father) 设置<p>父实例 ID。</p><ul><li>当参数<strong>Clone</strong>为3或者4时，即实例为只读或灾备实例时，该参数必须配置。</li><li>请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制父实例 ID。</li></ul>
 * @method array getSecurityGroup() 获取<p>安全组 ID。 请登录<a href="https://console.cloud.tencent.com/vpc/security-group">安全组控制台</a>页面获取与数据库实例同地域的安全组 ID。</p>
 * @method void setSecurityGroup(array $SecurityGroup) 设置<p>安全组 ID。 请登录<a href="https://console.cloud.tencent.com/vpc/security-group">安全组控制台</a>页面获取与数据库实例同地域的安全组 ID。</p>
 * @method string getRestoreTime() 获取<p>克隆实例回档时间，当Clone取值为5或6时为必填。- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。- 回档时间范围：仅能回档7天内时间点的数据。</p>
 * @method void setRestoreTime(string $RestoreTime) 设置<p>克隆实例回档时间，当Clone取值为5或6时为必填。- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。- 回档时间范围：仅能回档7天内时间点的数据。</p>
 * @method string getInstanceName() 获取<p>实例名称。仅支持长度为128个字符的中文、英文、数字、下划线_、分隔符-。批量购买数据库实例时，支持通过自定义命名模式串与数字后缀自动升序功能，高效设置实例名称。</p><ul><li>基础模式：前缀＋自动升序编号（默认从1开始），<strong>lnstanceName</strong>仅需自定义实例名称前缀，例如设置为：cmgo，设置购买数量为5，则购买后，实例名称依次分别为cmgo1、cmgo2、cmgo3、cmgo4、cmgo5。</li><li>自定义起始序号模式：前缀+｛R:x｝（x为自定义起始序号）。<strong>InstanceName</strong>需填写“前缀｛R:x｝”，例如：cmgo｛R:3｝，设置购买数量为5，则实例名称为cmgo3、cmgo4、cmgo5、cmgo6、cmgo7。</li><li>复合模式串：前缀1{R:x}+前缀2{R:y}+ ⋯+固定后缀，x与y分别为每一段前缀的起始序号。<strong>instanceName</strong>需填写复合模式串，例如：cmgo{R:10}_node{R:12}_db，设置批量购买数量为5，则实例名称为 cmgo10_node12_db, cmgo11_node13_db, cmgo12_node14_db, cmgo13_node15_db, cluster14_node16_db.</li></ul>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。仅支持长度为128个字符的中文、英文、数字、下划线_、分隔符-。批量购买数据库实例时，支持通过自定义命名模式串与数字后缀自动升序功能，高效设置实例名称。</p><ul><li>基础模式：前缀＋自动升序编号（默认从1开始），<strong>lnstanceName</strong>仅需自定义实例名称前缀，例如设置为：cmgo，设置购买数量为5，则购买后，实例名称依次分别为cmgo1、cmgo2、cmgo3、cmgo4、cmgo5。</li><li>自定义起始序号模式：前缀+｛R:x｝（x为自定义起始序号）。<strong>InstanceName</strong>需填写“前缀｛R:x｝”，例如：cmgo｛R:3｝，设置购买数量为5，则实例名称为cmgo3、cmgo4、cmgo5、cmgo6、cmgo7。</li><li>复合模式串：前缀1{R:x}+前缀2{R:y}+ ⋯+固定后缀，x与y分别为每一段前缀的起始序号。<strong>instanceName</strong>需填写复合模式串，例如：cmgo{R:10}_node{R:12}_db，设置批量购买数量为5，则实例名称为 cmgo10_node12_db, cmgo11_node13_db, cmgo12_node14_db, cmgo13_node15_db, cluster14_node16_db.</li></ul>
 * @method array getAvailabilityZoneList() 获取<p>若多可用区部署云数据库实例，指定多可用区列表。</p><ul><li>多可用区部署实例，参数 <strong>Zone</strong> 指定实例主可用区信息；<strong>AvailabilityZoneList</strong> 指定所有可用区信息，包含主可用区。输入格式如：[ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4]。</li><li>通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 可获取云数据库不同地域规划的可用区信息，以便指定有效的可用区。</li><li>多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。</li></ul>
 * @method void setAvailabilityZoneList(array $AvailabilityZoneList) 设置<p>若多可用区部署云数据库实例，指定多可用区列表。</p><ul><li>多可用区部署实例，参数 <strong>Zone</strong> 指定实例主可用区信息；<strong>AvailabilityZoneList</strong> 指定所有可用区信息，包含主可用区。输入格式如：[ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4]。</li><li>通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 可获取云数据库不同地域规划的可用区信息，以便指定有效的可用区。</li><li>多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。</li></ul>
 * @method integer getMongosCpu() 获取<p>Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。</p>
 * @method void setMongosCpu(integer $MongosCpu) 设置<p>Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。</p>
 * @method integer getMongosMemory() 获取<p>Mongos 内存大小。</p><ul><li>购买分片集群时，必须填写。</li><li>单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。</li></ul>
 * @method void setMongosMemory(integer $MongosMemory) 设置<p>Mongos 内存大小。</p><ul><li>购买分片集群时，必须填写。</li><li>单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。</li></ul>
 * @method integer getMongosNodeNum() 获取<p>Mongos 数量。购买分片集群时，必须填写。</p><ul><li>单可用区部署实例，其数量范围为[3,32]。</li><li>多可用区部署实例，其数量范围为[6,32]。</li></ul>
 * @method void setMongosNodeNum(integer $MongosNodeNum) 设置<p>Mongos 数量。购买分片集群时，必须填写。</p><ul><li>单可用区部署实例，其数量范围为[3,32]。</li><li>多可用区部署实例，其数量范围为[6,32]。</li></ul>
 * @method integer getReadonlyNodeNum() 获取<p>只读节点数量，取值范围[0,5]。</p>
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) 设置<p>只读节点数量，取值范围[0,5]。</p>
 * @method array getReadonlyNodeAvailabilityZoneList() 获取<p>指只读节点所属可用区数组。跨可用区部署实例，参数<strong>ReadonlyNodeNum</strong>不为<strong>0</strong>时，必须配置该参数。</p>
 * @method void setReadonlyNodeAvailabilityZoneList(array $ReadonlyNodeAvailabilityZoneList) 设置<p>指只读节点所属可用区数组。跨可用区部署实例，参数<strong>ReadonlyNodeNum</strong>不为<strong>0</strong>时，必须配置该参数。</p>
 * @method string getHiddenZone() 获取<p>Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。</p>
 * @method void setHiddenZone(string $HiddenZone) 设置<p>Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。</p>
 * @method string getParamTemplateId() 获取<p>参数模板 ID。</p><ul><li>参数模板是预置了特定参数值的集合，可用于快速配置新的 MongoDB 实例。合理使用参数模板，能有效提升数据库的部署效率与运行性能。</li><li>参数模板 ID 可通过 <a href="https://cloud.tencent.com/document/product/240/109155">DescribeDBInstanceParamTpl </a>接口获取。请选择与实例版本与架构所对应的参数模板 ID。</li></ul>
 * @method void setParamTemplateId(string $ParamTemplateId) 设置<p>参数模板 ID。</p><ul><li>参数模板是预置了特定参数值的集合，可用于快速配置新的 MongoDB 实例。合理使用参数模板，能有效提升数据库的部署效率与运行性能。</li><li>参数模板 ID 可通过 <a href="https://cloud.tencent.com/document/product/240/109155">DescribeDBInstanceParamTpl </a>接口获取。请选择与实例版本与架构所对应的参数模板 ID。</li></ul>
 * @method integer getCpuCore() 获取<p>实例CPU核大小，单位：C。具体售卖的CPU规格，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取<br>注意：通用 I 型实例必须设置 CPU 大小。</p>
 * @method void setCpuCore(integer $CpuCore) 设置<p>实例CPU核大小，单位：C。具体售卖的CPU规格，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取<br>注意：通用 I 型实例必须设置 CPU 大小。</p>
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer <ul><li>创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li></ul>
     */
    public $NodeNum;

    /**
     * @var integer <p>实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p>
     */
    public $Volume;

    /**
     * @var string <p>指版本信息。具体支持的版本信息 ，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p><ul><li>MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。</li><li>MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。</li><li>MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。</li><li>MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。</li><li>MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。</li><li>MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。</li><li>MONGO_80_WT：MongoDB 8.0 WiredTiger存储引擎版本。</li></ul>
     */
    public $MongoVersion;

    /**
     * @var integer <p>实例数量, 最小值1，最大值为30。</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>可用区信息，输入格式如：ap-guangzhou-2。</p><ul><li>具体信息，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。</li></ul>
     */
    public $Zone;

    /**
     * @var integer <p>指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。</p>
     */
    public $Period;

    /**
     * @var string <p>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</p>
     */
    public $MachineCode;

    /**
     * @var string <p>实例架构类型。</p><ul><li>REPLSET：副本集。</li><li>SHARD：分片集群。</li></ul>
     */
    public $ClusterType;

    /**
     * @var integer <ul><li>创建副本集实例，指副本集数量，该参数只能为1。</li><li>创建分片集群实例，指分片的数量。请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。</li></ul>
     */
    public $ReplicateSetNum;

    /**
     * @var integer <p>项目ID。</p><ul><li>若不设置该参数，则为默认项目。</li><li>在 <a href="https://console.cloud.tencent.com/project">MongoDB 控制台项目管理</a>页面，可获取项目ID。</li></ul>
     */
    public $ProjectId;

    /**
     * @var string <p>私有网络 ID。</p><ul><li>仅支持配置私有网络，必须选择一个与实例同一地域的私有网络。请登录<a href="https://console.cloud.tencent.com/vpc">私有网络控制台</a>获取可使用的私有网络 ID。</li><li>实例创建成功之后，支持更换私有网络。具体操作，请参见<a href="https://cloud.tencent.com/document/product/239/30910">更换网络</a>。</li></ul>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络 VPC 的子网 ID。</p><ul><li>必须在已选的私有网络内指定一个子网。请登录<a href="https://console.cloud.tencent.com/vpc">私有网络控制台</a>获取可使用的子网 ID。</li><li>实例创建成功之后，支持更换私有网络及子网。具体操作，请参见<a href="https://cloud.tencent.com/document/product/239/30910">更换网络</a>。</li></ul>
     */
    public $SubnetId;

    /**
     * @var string <p>实例密码。设置要求如下：</p><ul><li>字符个数为[8,32]。</li><li>可输入[A,Z]、[a,z]、[0,9]范围内的字符。</li><li>可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“*”、括号“()”、下划线“_”。</li><li>不能设置单一的字母或者数字。</li></ul>
     */
    public $Password;

    /**
     * @var array <p>实例标签信息。</p>
     */
    public $Tags;

    /**
     * @var integer <p>自动续费标记。</p><ul><li>0：不自动续费。</li><li>1：自动续费。</li></ul>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>是否自动选择代金券。</p><ul><li>1：是。</li><li>0：否。默认为0。</li></ul>
     */
    public $AutoVoucher;

    /**
     * @var integer <p>实例类型。</p><ul><li>1：正式实例。</li><li>3：只读实例。</li><li>4：灾备实例。</li><li>5：克隆实例。注意：克隆实例 RestoreTime 为必填项。</li></ul>
     */
    public $Clone;

    /**
     * @var string <p>父实例 ID。</p><ul><li>当参数<strong>Clone</strong>为3或者4时，即实例为只读或灾备实例时，该参数必须配置。</li><li>请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制父实例 ID。</li></ul>
     */
    public $Father;

    /**
     * @var array <p>安全组 ID。 请登录<a href="https://console.cloud.tencent.com/vpc/security-group">安全组控制台</a>页面获取与数据库实例同地域的安全组 ID。</p>
     */
    public $SecurityGroup;

    /**
     * @var string <p>克隆实例回档时间，当Clone取值为5或6时为必填。- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。- 回档时间范围：仅能回档7天内时间点的数据。</p>
     */
    public $RestoreTime;

    /**
     * @var string <p>实例名称。仅支持长度为128个字符的中文、英文、数字、下划线_、分隔符-。批量购买数据库实例时，支持通过自定义命名模式串与数字后缀自动升序功能，高效设置实例名称。</p><ul><li>基础模式：前缀＋自动升序编号（默认从1开始），<strong>lnstanceName</strong>仅需自定义实例名称前缀，例如设置为：cmgo，设置购买数量为5，则购买后，实例名称依次分别为cmgo1、cmgo2、cmgo3、cmgo4、cmgo5。</li><li>自定义起始序号模式：前缀+｛R:x｝（x为自定义起始序号）。<strong>InstanceName</strong>需填写“前缀｛R:x｝”，例如：cmgo｛R:3｝，设置购买数量为5，则实例名称为cmgo3、cmgo4、cmgo5、cmgo6、cmgo7。</li><li>复合模式串：前缀1{R:x}+前缀2{R:y}+ ⋯+固定后缀，x与y分别为每一段前缀的起始序号。<strong>instanceName</strong>需填写复合模式串，例如：cmgo{R:10}_node{R:12}_db，设置批量购买数量为5，则实例名称为 cmgo10_node12_db, cmgo11_node13_db, cmgo12_node14_db, cmgo13_node15_db, cluster14_node16_db.</li></ul>
     */
    public $InstanceName;

    /**
     * @var array <p>若多可用区部署云数据库实例，指定多可用区列表。</p><ul><li>多可用区部署实例，参数 <strong>Zone</strong> 指定实例主可用区信息；<strong>AvailabilityZoneList</strong> 指定所有可用区信息，包含主可用区。输入格式如：[ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4]。</li><li>通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 可获取云数据库不同地域规划的可用区信息，以便指定有效的可用区。</li><li>多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。</li></ul>
     */
    public $AvailabilityZoneList;

    /**
     * @var integer <p>Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。</p>
     */
    public $MongosCpu;

    /**
     * @var integer <p>Mongos 内存大小。</p><ul><li>购买分片集群时，必须填写。</li><li>单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。</li></ul>
     */
    public $MongosMemory;

    /**
     * @var integer <p>Mongos 数量。购买分片集群时，必须填写。</p><ul><li>单可用区部署实例，其数量范围为[3,32]。</li><li>多可用区部署实例，其数量范围为[6,32]。</li></ul>
     */
    public $MongosNodeNum;

    /**
     * @var integer <p>只读节点数量，取值范围[0,5]。</p>
     */
    public $ReadonlyNodeNum;

    /**
     * @var array <p>指只读节点所属可用区数组。跨可用区部署实例，参数<strong>ReadonlyNodeNum</strong>不为<strong>0</strong>时，必须配置该参数。</p>
     */
    public $ReadonlyNodeAvailabilityZoneList;

    /**
     * @var string <p>Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。</p>
     */
    public $HiddenZone;

    /**
     * @var string <p>参数模板 ID。</p><ul><li>参数模板是预置了特定参数值的集合，可用于快速配置新的 MongoDB 实例。合理使用参数模板，能有效提升数据库的部署效率与运行性能。</li><li>参数模板 ID 可通过 <a href="https://cloud.tencent.com/document/product/240/109155">DescribeDBInstanceParamTpl </a>接口获取。请选择与实例版本与架构所对应的参数模板 ID。</li></ul>
     */
    public $ParamTemplateId;

    /**
     * @var integer <p>实例CPU核大小，单位：C。具体售卖的CPU规格，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取<br>注意：通用 I 型实例必须设置 CPU 大小。</p>
     */
    public $CpuCore;

    /**
     * @param integer $NodeNum <ul><li>创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li></ul>
     * @param integer $Memory <p>实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p>
     * @param integer $Volume <p>实例硬盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p>
     * @param string $MongoVersion <p>指版本信息。具体支持的版本信息 ，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</p><ul><li>MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。</li><li>MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。</li><li>MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。</li><li>MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。</li><li>MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。</li><li>MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。</li><li>MONGO_80_WT：MongoDB 8.0 WiredTiger存储引擎版本。</li></ul>
     * @param integer $GoodsNum <p>实例数量, 最小值1，最大值为30。</p>
     * @param string $Zone <p>可用区信息，输入格式如：ap-guangzhou-2。</p><ul><li>具体信息，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>该参数为主可用区，如果多可用区部署，Zone必须是AvailabilityZoneList中的一个。</li></ul>
     * @param integer $Period <p>指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。</p>
     * @param string $MachineCode <p>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</p>
     * @param string $ClusterType <p>实例架构类型。</p><ul><li>REPLSET：副本集。</li><li>SHARD：分片集群。</li></ul>
     * @param integer $ReplicateSetNum <ul><li>创建副本集实例，指副本集数量，该参数只能为1。</li><li>创建分片集群实例，指分片的数量。请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。</li></ul>
     * @param integer $ProjectId <p>项目ID。</p><ul><li>若不设置该参数，则为默认项目。</li><li>在 <a href="https://console.cloud.tencent.com/project">MongoDB 控制台项目管理</a>页面，可获取项目ID。</li></ul>
     * @param string $VpcId <p>私有网络 ID。</p><ul><li>仅支持配置私有网络，必须选择一个与实例同一地域的私有网络。请登录<a href="https://console.cloud.tencent.com/vpc">私有网络控制台</a>获取可使用的私有网络 ID。</li><li>实例创建成功之后，支持更换私有网络。具体操作，请参见<a href="https://cloud.tencent.com/document/product/239/30910">更换网络</a>。</li></ul>
     * @param string $SubnetId <p>私有网络 VPC 的子网 ID。</p><ul><li>必须在已选的私有网络内指定一个子网。请登录<a href="https://console.cloud.tencent.com/vpc">私有网络控制台</a>获取可使用的子网 ID。</li><li>实例创建成功之后，支持更换私有网络及子网。具体操作，请参见<a href="https://cloud.tencent.com/document/product/239/30910">更换网络</a>。</li></ul>
     * @param string $Password <p>实例密码。设置要求如下：</p><ul><li>字符个数为[8,32]。</li><li>可输入[A,Z]、[a,z]、[0,9]范围内的字符。</li><li>可输入的特殊字符包括：感叹号“!”，at“@”，警号“#”、百分号“%”、插入号“^”、星号“*”、括号“()”、下划线“_”。</li><li>不能设置单一的字母或者数字。</li></ul>
     * @param array $Tags <p>实例标签信息。</p>
     * @param integer $AutoRenewFlag <p>自动续费标记。</p><ul><li>0：不自动续费。</li><li>1：自动续费。</li></ul>
     * @param integer $AutoVoucher <p>是否自动选择代金券。</p><ul><li>1：是。</li><li>0：否。默认为0。</li></ul>
     * @param integer $Clone <p>实例类型。</p><ul><li>1：正式实例。</li><li>3：只读实例。</li><li>4：灾备实例。</li><li>5：克隆实例。注意：克隆实例 RestoreTime 为必填项。</li></ul>
     * @param string $Father <p>父实例 ID。</p><ul><li>当参数<strong>Clone</strong>为3或者4时，即实例为只读或灾备实例时，该参数必须配置。</li><li>请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制父实例 ID。</li></ul>
     * @param array $SecurityGroup <p>安全组 ID。 请登录<a href="https://console.cloud.tencent.com/vpc/security-group">安全组控制台</a>页面获取与数据库实例同地域的安全组 ID。</p>
     * @param string $RestoreTime <p>克隆实例回档时间，当Clone取值为5或6时为必填。- 若为克隆实例，则必须配置该参数。输入格式示例：2021-08-13 16:30:00。- 回档时间范围：仅能回档7天内时间点的数据。</p>
     * @param string $InstanceName <p>实例名称。仅支持长度为128个字符的中文、英文、数字、下划线_、分隔符-。批量购买数据库实例时，支持通过自定义命名模式串与数字后缀自动升序功能，高效设置实例名称。</p><ul><li>基础模式：前缀＋自动升序编号（默认从1开始），<strong>lnstanceName</strong>仅需自定义实例名称前缀，例如设置为：cmgo，设置购买数量为5，则购买后，实例名称依次分别为cmgo1、cmgo2、cmgo3、cmgo4、cmgo5。</li><li>自定义起始序号模式：前缀+｛R:x｝（x为自定义起始序号）。<strong>InstanceName</strong>需填写“前缀｛R:x｝”，例如：cmgo｛R:3｝，设置购买数量为5，则实例名称为cmgo3、cmgo4、cmgo5、cmgo6、cmgo7。</li><li>复合模式串：前缀1{R:x}+前缀2{R:y}+ ⋯+固定后缀，x与y分别为每一段前缀的起始序号。<strong>instanceName</strong>需填写复合模式串，例如：cmgo{R:10}_node{R:12}_db，设置批量购买数量为5，则实例名称为 cmgo10_node12_db, cmgo11_node13_db, cmgo12_node14_db, cmgo13_node15_db, cluster14_node16_db.</li></ul>
     * @param array $AvailabilityZoneList <p>若多可用区部署云数据库实例，指定多可用区列表。</p><ul><li>多可用区部署实例，参数 <strong>Zone</strong> 指定实例主可用区信息；<strong>AvailabilityZoneList</strong> 指定所有可用区信息，包含主可用区。输入格式如：[ap-guangzhou-2,ap-guangzhou-3,ap-guangzhou-4]。</li><li>通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 可获取云数据库不同地域规划的可用区信息，以便指定有效的可用区。</li><li>多可用区部署节点只能部署在3个不同可用区。不支持将集群的大多数节点部署在同一个可用区。例如：3节点集群不支持2个节点部署在同一个区。</li></ul>
     * @param integer $MongosCpu <p>Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。</p>
     * @param integer $MongosMemory <p>Mongos 内存大小。</p><ul><li>购买分片集群时，必须填写。</li><li>单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。</li></ul>
     * @param integer $MongosNodeNum <p>Mongos 数量。购买分片集群时，必须填写。</p><ul><li>单可用区部署实例，其数量范围为[3,32]。</li><li>多可用区部署实例，其数量范围为[6,32]。</li></ul>
     * @param integer $ReadonlyNodeNum <p>只读节点数量，取值范围[0,5]。</p>
     * @param array $ReadonlyNodeAvailabilityZoneList <p>指只读节点所属可用区数组。跨可用区部署实例，参数<strong>ReadonlyNodeNum</strong>不为<strong>0</strong>时，必须配置该参数。</p>
     * @param string $HiddenZone <p>Hidden节点所属可用区。跨可用区部署实例，必须配置该参数。</p>
     * @param string $ParamTemplateId <p>参数模板 ID。</p><ul><li>参数模板是预置了特定参数值的集合，可用于快速配置新的 MongoDB 实例。合理使用参数模板，能有效提升数据库的部署效率与运行性能。</li><li>参数模板 ID 可通过 <a href="https://cloud.tencent.com/document/product/240/109155">DescribeDBInstanceParamTpl </a>接口获取。请选择与实例版本与架构所对应的参数模板 ID。</li></ul>
     * @param integer $CpuCore <p>实例CPU核大小，单位：C。具体售卖的CPU规格，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取<br>注意：通用 I 型实例必须设置 CPU 大小。</p>
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

        if (array_key_exists("CpuCore",$param) and $param["CpuCore"] !== null) {
            $this->CpuCore = $param["CpuCore"];
        }
    }
}

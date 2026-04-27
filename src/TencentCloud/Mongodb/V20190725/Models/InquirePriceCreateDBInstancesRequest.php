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
 * InquirePriceCreateDBInstances请求参数结构体
 *
 * @method string getZone() 获取<p>实例所属区域及可用区信息。具体信息，请参见<a href="https://cloud.tencent.com/document/product/240/3637">地域和可用区</a>。</p>
 * @method void setZone(string $Zone) 设置<p>实例所属区域及可用区信息。具体信息，请参见<a href="https://cloud.tencent.com/document/product/240/3637">地域和可用区</a>。</p>
 * @method integer getNodeNum() 获取<ul><li>创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li></ul>
 * @method void setNodeNum(integer $NodeNum) 设置<ul><li>创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li></ul>
 * @method integer getMemory() 获取<p>实例内存大小。</p><ul><li>单位：GB。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。</li></ul>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小。</p><ul><li>单位：GB。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。</li></ul>
 * @method integer getVolume() 获取<p>实例硬盘大小。</p><ul><li>单位：GB。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数MinStorage与MaxStorage分别对应其最小磁盘规格与最大磁盘规格。</li></ul>
 * @method void setVolume(integer $Volume) 设置<p>实例硬盘大小。</p><ul><li>单位：GB。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数MinStorage与MaxStorage分别对应其最小磁盘规格与最大磁盘规格。</li></ul>
 * @method string getMongoVersion() 获取<p>实例版本信息。具体支持的版本，请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数MongoVersionCode为实例所支持的版本信息。版本信息与版本号对应关系如下：</p><ul><li>MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。</li><li>MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。</li><li>MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。</li><li>MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。</li><li>MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。</li><li>MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。</li><li>MONGO_80_WT：MongoDB 8.0 WiredTiger存储引擎版本。</li></ul>
 * @method void setMongoVersion(string $MongoVersion) 设置<p>实例版本信息。具体支持的版本，请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数MongoVersionCode为实例所支持的版本信息。版本信息与版本号对应关系如下：</p><ul><li>MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。</li><li>MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。</li><li>MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。</li><li>MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。</li><li>MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。</li><li>MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。</li><li>MONGO_80_WT：MongoDB 8.0 WiredTiger存储引擎版本。</li></ul>
 * @method string getMachineCode() 获取<p>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</p>
 * @method void setMachineCode(string $MachineCode) 设置<p>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</p>
 * @method integer getGoodsNum() 获取<p>实例数量，取值范围为[1,10]。</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>实例数量，取值范围为[1,10]。</p>
 * @method string getClusterType() 获取<p>实例类型。</p><ul><li>REPLSET：副本集。</li><li>SHARD：分片集群。</li></ul>
 * @method void setClusterType(string $ClusterType) 设置<p>实例类型。</p><ul><li>REPLSET：副本集。</li><li>SHARD：分片集群。</li></ul>
 * @method integer getReplicateSetNum() 获取<ul><li>创建副本集实例，指副本集数量，该参数只能为1。</li><li>创建分片集群实例，指分片的数量。请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。</li></ul>
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置<ul><li>创建副本集实例，指副本集数量，该参数只能为1。</li><li>创建分片集群实例，指分片的数量。请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。</li></ul>
 * @method integer getPeriod() 获取<ul><li>选择包年包月计费模式，即 <b>InstanceChargeType </b>设定为<b>PREPAID</b>时，必须设置该参数，指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。<br>-选择按量计费，即 <b>InstanceChargeType</b> 设定为 <strong>POSTPAID_BY_HOUR</strong> 时，该参数仅可配置为 1。</li></ul>
 * @method void setPeriod(integer $Period) 设置<ul><li>选择包年包月计费模式，即 <b>InstanceChargeType </b>设定为<b>PREPAID</b>时，必须设置该参数，指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。<br>-选择按量计费，即 <b>InstanceChargeType</b> 设定为 <strong>POSTPAID_BY_HOUR</strong> 时，该参数仅可配置为 1。</li></ul>
 * @method string getInstanceChargeType() 获取<p>实例付费方式。</p><ul><li>PREPAID：包年包月计费。</li><li>POSTPAID_BY_HOUR：按量计费。</li></ul>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例付费方式。</p><ul><li>PREPAID：包年包月计费。</li><li>POSTPAID_BY_HOUR：按量计费。</li></ul>
 * @method integer getMongosCpu() 获取<p>Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。注意为空时取默认取值为2C。</p>
 * @method void setMongosCpu(integer $MongosCpu) 设置<p>Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。注意为空时取默认取值为2C。</p>
 * @method integer getMongosMemory() 获取<p>Mongos 内存大小。-  购买分片集群时，必须填写。- 单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。注意为空时取默认取值为4G。</p>
 * @method void setMongosMemory(integer $MongosMemory) 设置<p>Mongos 内存大小。-  购买分片集群时，必须填写。- 单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。注意为空时取默认取值为4G。</p>
 * @method integer getMongosNum() 获取<p>指 Mongos 个数，取值范围为[3,32]。若为分片集群实例询价，则该参数必须设置。注意为空时取默认取值为3个节点。</p>
 * @method void setMongosNum(integer $MongosNum) 设置<p>指 Mongos 个数，取值范围为[3,32]。若为分片集群实例询价，则该参数必须设置。注意为空时取默认取值为3个节点。</p>
 * @method integer getConfigServerCpu() 获取<p>指 ConfigServer CPU核数，固定取值为 1，单位：GB，可不配置该参数。</p>
 * @method void setConfigServerCpu(integer $ConfigServerCpu) 设置<p>指 ConfigServer CPU核数，固定取值为 1，单位：GB，可不配置该参数。</p>
 * @method integer getConfigServerMemory() 获取<p>指 ConfigServer 内存大小，固定取值为 2，单位：GB，可不配置该参数。</p>
 * @method void setConfigServerMemory(integer $ConfigServerMemory) 设置<p>指 ConfigServer 内存大小，固定取值为 2，单位：GB，可不配置该参数。</p>
 * @method integer getConfigServerVolume() 获取<p>指 ConfigServer 磁盘大小，固定取值为 20，单位：GB，可不配置该参数。</p>
 * @method void setConfigServerVolume(integer $ConfigServerVolume) 设置<p>指 ConfigServer 磁盘大小，固定取值为 20，单位：GB，可不配置该参数。</p>
 * @method integer getReadonlyNodeNum() 获取<ul><li>创建副本集实例，指每个副本集内只读节点数量。 </li><li>创建分片集群实例，指每个分片的只读节点数量。<br>取值范围为［1,5］。</li></ul>
 * @method void setReadonlyNodeNum(integer $ReadonlyNodeNum) 设置<ul><li>创建副本集实例，指每个副本集内只读节点数量。 </li><li>创建分片集群实例，指每个分片的只读节点数量。<br>取值范围为［1,5］。</li></ul>
 * @method integer getCpu() 获取<p>实例CPU大小。</p><ul><li>单位：C。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。</li><li>注意：通用 I 型实例询价时必须传入与内存对应的 CPU 核数大小</li></ul>
 * @method void setCpu(integer $Cpu) 设置<p>实例CPU大小。</p><ul><li>单位：C。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。</li><li>注意：通用 I 型实例询价时必须传入与内存对应的 CPU 核数大小</li></ul>
 */
class InquirePriceCreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>实例所属区域及可用区信息。具体信息，请参见<a href="https://cloud.tencent.com/document/product/240/3637">地域和可用区</a>。</p>
     */
    public $Zone;

    /**
     * @var integer <ul><li>创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li></ul>
     */
    public $NodeNum;

    /**
     * @var integer <p>实例内存大小。</p><ul><li>单位：GB。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。</li></ul>
     */
    public $Memory;

    /**
     * @var integer <p>实例硬盘大小。</p><ul><li>单位：GB。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数MinStorage与MaxStorage分别对应其最小磁盘规格与最大磁盘规格。</li></ul>
     */
    public $Volume;

    /**
     * @var string <p>实例版本信息。具体支持的版本，请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数MongoVersionCode为实例所支持的版本信息。版本信息与版本号对应关系如下：</p><ul><li>MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。</li><li>MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。</li><li>MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。</li><li>MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。</li><li>MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。</li><li>MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。</li><li>MONGO_80_WT：MongoDB 8.0 WiredTiger存储引擎版本。</li></ul>
     */
    public $MongoVersion;

    /**
     * @var string <p>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</p>
     */
    public $MachineCode;

    /**
     * @var integer <p>实例数量，取值范围为[1,10]。</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>实例类型。</p><ul><li>REPLSET：副本集。</li><li>SHARD：分片集群。</li></ul>
     */
    public $ClusterType;

    /**
     * @var integer <ul><li>创建副本集实例，指副本集数量，该参数只能为1。</li><li>创建分片集群实例，指分片的数量。请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。</li></ul>
     */
    public $ReplicateSetNum;

    /**
     * @var integer <ul><li>选择包年包月计费模式，即 <b>InstanceChargeType </b>设定为<b>PREPAID</b>时，必须设置该参数，指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。<br>-选择按量计费，即 <b>InstanceChargeType</b> 设定为 <strong>POSTPAID_BY_HOUR</strong> 时，该参数仅可配置为 1。</li></ul>
     */
    public $Period;

    /**
     * @var string <p>实例付费方式。</p><ul><li>PREPAID：包年包月计费。</li><li>POSTPAID_BY_HOUR：按量计费。</li></ul>
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。注意为空时取默认取值为2C。</p>
     */
    public $MongosCpu;

    /**
     * @var integer <p>Mongos 内存大小。-  购买分片集群时，必须填写。- 单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。注意为空时取默认取值为4G。</p>
     */
    public $MongosMemory;

    /**
     * @var integer <p>指 Mongos 个数，取值范围为[3,32]。若为分片集群实例询价，则该参数必须设置。注意为空时取默认取值为3个节点。</p>
     */
    public $MongosNum;

    /**
     * @var integer <p>指 ConfigServer CPU核数，固定取值为 1，单位：GB，可不配置该参数。</p>
     */
    public $ConfigServerCpu;

    /**
     * @var integer <p>指 ConfigServer 内存大小，固定取值为 2，单位：GB，可不配置该参数。</p>
     */
    public $ConfigServerMemory;

    /**
     * @var integer <p>指 ConfigServer 磁盘大小，固定取值为 20，单位：GB，可不配置该参数。</p>
     */
    public $ConfigServerVolume;

    /**
     * @var integer <ul><li>创建副本集实例，指每个副本集内只读节点数量。 </li><li>创建分片集群实例，指每个分片的只读节点数量。<br>取值范围为［1,5］。</li></ul>
     */
    public $ReadonlyNodeNum;

    /**
     * @var integer <p>实例CPU大小。</p><ul><li>单位：C。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。</li><li>注意：通用 I 型实例询价时必须传入与内存对应的 CPU 核数大小</li></ul>
     */
    public $Cpu;

    /**
     * @param string $Zone <p>实例所属区域及可用区信息。具体信息，请参见<a href="https://cloud.tencent.com/document/product/240/3637">地域和可用区</a>。</p>
     * @param integer $NodeNum <ul><li>创建副本集实例，指每个副本集内主从节点数量。每个副本集所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li><li>创建分片集群实例，指每个分片的主从节点数量。每个分片所支持的最大节点数与最小节点数，请通过接口 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 获取。</li></ul>
     * @param integer $Memory <p>实例内存大小。</p><ul><li>单位：GB。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。</li></ul>
     * @param integer $Volume <p>实例硬盘大小。</p><ul><li>单位：GB。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数MinStorage与MaxStorage分别对应其最小磁盘规格与最大磁盘规格。</li></ul>
     * @param string $MongoVersion <p>实例版本信息。具体支持的版本，请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数MongoVersionCode为实例所支持的版本信息。版本信息与版本号对应关系如下：</p><ul><li>MONGO_40_WT：MongoDB 4.0 WiredTiger存储引擎版本。</li><li>MONGO_42_WT：MongoDB 4.2 WiredTiger存储引擎版本。</li><li>MONGO_44_WT：MongoDB 4.4 WiredTiger存储引擎版本。</li><li>MONGO_50_WT：MongoDB 5.0 WiredTiger存储引擎版本。</li><li>MONGO_60_WT：MongoDB 6.0 WiredTiger存储引擎版本。</li><li>MONGO_70_WT：MongoDB 7.0 WiredTiger存储引擎版本。</li><li>MONGO_80_WT：MongoDB 8.0 WiredTiger存储引擎版本。</li></ul>
     * @param string $MachineCode <p>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</p>
     * @param integer $GoodsNum <p>实例数量，取值范围为[1,10]。</p>
     * @param string $ClusterType <p>实例类型。</p><ul><li>REPLSET：副本集。</li><li>SHARD：分片集群。</li></ul>
     * @param integer $ReplicateSetNum <ul><li>创建副本集实例，指副本集数量，该参数只能为1。</li><li>创建分片集群实例，指分片的数量。请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询分片数量的取值范围，其返回的数据结构SpecItems中的参数MinReplicateSetNum与MaxReplicateSetNum分别对应其最小值与最大值。</li></ul>
     * @param integer $Period <ul><li>选择包年包月计费模式，即 <b>InstanceChargeType </b>设定为<b>PREPAID</b>时，必须设置该参数，指定购买实例的购买时长。取值可选：[1,2,3,4,5,6,7,8,9,10,11,12,24,36]；单位：月。<br>-选择按量计费，即 <b>InstanceChargeType</b> 设定为 <strong>POSTPAID_BY_HOUR</strong> 时，该参数仅可配置为 1。</li></ul>
     * @param string $InstanceChargeType <p>实例付费方式。</p><ul><li>PREPAID：包年包月计费。</li><li>POSTPAID_BY_HOUR：按量计费。</li></ul>
     * @param integer $MongosCpu <p>Mongos CPU 核数，支持1、2、4、8、16。购买分片集群时，必须填写。注意为空时取默认取值为2C。</p>
     * @param integer $MongosMemory <p>Mongos 内存大小。-  购买分片集群时，必须填写。- 单位：GB，支持1核2GB、2核4GB、4核8GB、8核16GB、16核32GB。注意为空时取默认取值为4G。</p>
     * @param integer $MongosNum <p>指 Mongos 个数，取值范围为[3,32]。若为分片集群实例询价，则该参数必须设置。注意为空时取默认取值为3个节点。</p>
     * @param integer $ConfigServerCpu <p>指 ConfigServer CPU核数，固定取值为 1，单位：GB，可不配置该参数。</p>
     * @param integer $ConfigServerMemory <p>指 ConfigServer 内存大小，固定取值为 2，单位：GB，可不配置该参数。</p>
     * @param integer $ConfigServerVolume <p>指 ConfigServer 磁盘大小，固定取值为 20，单位：GB，可不配置该参数。</p>
     * @param integer $ReadonlyNodeNum <ul><li>创建副本集实例，指每个副本集内只读节点数量。 </li><li>创建分片集群实例，指每个分片的只读节点数量。<br>取值范围为［1,5］。</li></ul>
     * @param integer $Cpu <p>实例CPU大小。</p><ul><li>单位：C。</li><li>取值范围：请通过接口<a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a>查询，其返回的数据结构SpecItems中的参数CPU与Memory分别对应CPU核数与内存规格。</li><li>注意：通用 I 型实例询价时必须传入与内存对应的 CPU 核数大小</li></ul>
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

        if (array_key_exists("ReadonlyNodeNum",$param) and $param["ReadonlyNodeNum"] !== null) {
            $this->ReadonlyNodeNum = $param["ReadonlyNodeNum"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}

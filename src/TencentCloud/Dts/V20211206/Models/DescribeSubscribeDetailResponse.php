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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubscribeDetail返回参数结构体
 *
 * @method string getSubscribeId() 获取<p>数据订阅的ID，形如subs-b6x64o31tm</p>
 * @method void setSubscribeId(string $SubscribeId) 设置<p>数据订阅的ID，形如subs-b6x64o31tm</p>
 * @method string getSubscribeName() 获取<p>数据订阅实例的名称</p>
 * @method void setSubscribeName(string $SubscribeName) 设置<p>数据订阅实例的名称</p>
 * @method string getProduct() 获取<p>订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)</p>
 * @method void setProduct(string $Product) 设置<p>订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)</p>
 * @method string getInstanceId() 获取<p>订阅的云数据库实例ID，只有订阅云数据库该值才有意义</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>订阅的云数据库实例ID，只有订阅云数据库该值才有意义</p>
 * @method string getInstanceStatus() 获取<p>订阅的云数据库实例状态，只有订阅云数据库该值才有意义。可能值为：running, isolated, offline</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>订阅的云数据库实例状态，只有订阅云数据库该值才有意义。可能值为：running, isolated, offline</p>
 * @method string getStatus() 获取<p>订阅任务计费状态，可能值为：正常normal, 隔离中isolating, 已隔离isolated, 下线中offlining, 按量转包年包月中 post2PrePayIng</p>
 * @method void setStatus(string $Status) 设置<p>订阅任务计费状态，可能值为：正常normal, 隔离中isolating, 已隔离isolated, 下线中offlining, 按量转包年包月中 post2PrePayIng</p>
 * @method string getSubsStatus() 获取<p>订阅任务状态，可能值为：未启动notStarted, 校验中checking, 校验不通过checkNotPass, 校验通过checkPass, 启动中starting, 运行中running, 异常出错error</p>
 * @method void setSubsStatus(string $SubsStatus) 设置<p>订阅任务状态，可能值为：未启动notStarted, 校验中checking, 校验不通过checkNotPass, 校验通过checkPass, 启动中starting, 运行中running, 异常出错error</p>
 * @method string getModifyTime() 获取<p>修改时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
 * @method string getCreateTime() 获取<p>创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
 * @method string getIsolateTime() 获取<p>隔离时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
 * @method void setIsolateTime(string $IsolateTime) 设置<p>隔离时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
 * @method string getExpireTime() 获取<p>包年包月任务的到期时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>包年包月任务的到期时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
 * @method string getOfflineTime() 获取<p>下线时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
 * @method void setOfflineTime(string $OfflineTime) 设置<p>下线时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
 * @method integer getPayType() 获取<p>付费方式，可能值为：0-包年包月，1-按量计费</p>
 * @method void setPayType(integer $PayType) 设置<p>付费方式，可能值为：0-包年包月，1-按量计费</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费</p>
 * @method string getRegion() 获取<p>任务所在地域</p>
 * @method void setRegion(string $Region) 设置<p>任务所在地域</p>
 * @method string getTopic() 获取<p>Kafka topic</p>
 * @method void setTopic(string $Topic) 设置<p>Kafka topic</p>
 * @method string getBroker() 获取<p>Kafka服务Broker地址</p>
 * @method void setBroker(string $Broker) 设置<p>Kafka服务Broker地址</p>
 * @method string getSubscribeMode() 获取<p>数据订阅的类型，当 Product 不为 mongodb 时，可能值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 Product 为 mongodb 时，可能值为 all-全实例更新；database-订阅单库；collection-订阅单集合</p>
 * @method void setSubscribeMode(string $SubscribeMode) 设置<p>数据订阅的类型，当 Product 不为 mongodb 时，可能值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 Product 为 mongodb 时，可能值为 all-全实例更新；database-订阅单库；collection-订阅单集合</p>
 * @method string getProtocol() 获取<p>订阅数据格式。如果为空则用的默认格式: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg是protobuf，mongo是json。当 DatabaseType 为 mysql和cynosdbmysql 时有三种可选协议：protobuf\avro\json。数据格式详情参考官网的消费demo文档</p>
 * @method void setProtocol(string $Protocol) 设置<p>订阅数据格式。如果为空则用的默认格式: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg是protobuf，mongo是json。当 DatabaseType 为 mysql和cynosdbmysql 时有三种可选协议：protobuf\avro\json。数据格式详情参考官网的消费demo文档</p>
 * @method array getSubscribeObjects() 获取<p>订阅的数据库表信息</p>
 * @method void setSubscribeObjects(array $SubscribeObjects) 设置<p>订阅的数据库表信息</p>
 * @method SubscribeKafkaConfig getKafkaConfig() 获取<p>kafka配置信息</p>
 * @method void setKafkaConfig(SubscribeKafkaConfig $KafkaConfig) 设置<p>kafka配置信息</p>
 * @method string getKafkaVersion() 获取<p>订阅内置kafka的版本信息</p>
 * @method void setKafkaVersion(string $KafkaVersion) 设置<p>订阅内置kafka的版本信息</p>
 * @method string getAccessType() 获取<p>源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力</p>
 * @method void setAccessType(string $AccessType) 设置<p>源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力</p>
 * @method array getEndpoints() 获取<p>接入类型信息</p>
 * @method void setEndpoints(array $Endpoints) 设置<p>接入类型信息</p>
 * @method array getPipelineInfo() 获取<p>mongo输出聚合设置</p>
 * @method void setPipelineInfo(array $PipelineInfo) 设置<p>mongo输出聚合设置</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method array getErrors() 获取<p>订阅任务报错信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrors(array $Errors) 设置<p>订阅任务报错信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtraAttr() 获取<p>为业务添加的额外信息。参数名作key，参数值作value。<br>mysql选填参数：ProcessXA-是否处理XA事务，为true处理，其他不处理。<br>mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream。</p>
 * @method void setExtraAttr(array $ExtraAttr) 设置<p>为业务添加的额外信息。参数名作key，参数值作value。<br>mysql选填参数：ProcessXA-是否处理XA事务，为true处理，其他不处理。<br>mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream。</p>
 * @method string getSubscribeVersion() 获取<p>数据订阅版本, 当前支持kafka和kafkaPro（专业版）</p>
 * @method void setSubscribeVersion(string $SubscribeVersion) 设置<p>数据订阅版本, 当前支持kafka和kafkaPro（专业版）</p>
 * @method string getConsumerVpcId() 获取<p>消费端地址所在vpc</p>
 * @method void setConsumerVpcId(string $ConsumerVpcId) 设置<p>消费端地址所在vpc</p>
 * @method string getConsumerSubnetId() 获取<p>消费端地址所在子网</p>
 * @method void setConsumerSubnetId(string $ConsumerSubnetId) 设置<p>消费端地址所在子网</p>
 * @method string getInstanceClass() 获取<p>订阅实例规格</p>
 * @method void setInstanceClass(string $InstanceClass) 设置<p>订阅实例规格</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSubscribeDetailResponse extends AbstractModel
{
    /**
     * @var string <p>数据订阅的ID，形如subs-b6x64o31tm</p>
     */
    public $SubscribeId;

    /**
     * @var string <p>数据订阅实例的名称</p>
     */
    public $SubscribeName;

    /**
     * @var string <p>订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)</p>
     */
    public $Product;

    /**
     * @var string <p>订阅的云数据库实例ID，只有订阅云数据库该值才有意义</p>
     */
    public $InstanceId;

    /**
     * @var string <p>订阅的云数据库实例状态，只有订阅云数据库该值才有意义。可能值为：running, isolated, offline</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>订阅任务计费状态，可能值为：正常normal, 隔离中isolating, 已隔离isolated, 下线中offlining, 按量转包年包月中 post2PrePayIng</p>
     */
    public $Status;

    /**
     * @var string <p>订阅任务状态，可能值为：未启动notStarted, 校验中checking, 校验不通过checkNotPass, 校验通过checkPass, 启动中starting, 运行中running, 异常出错error</p>
     */
    public $SubsStatus;

    /**
     * @var string <p>修改时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>隔离时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
     */
    public $IsolateTime;

    /**
     * @var string <p>包年包月任务的到期时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>下线时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
     */
    public $OfflineTime;

    /**
     * @var integer <p>付费方式，可能值为：0-包年包月，1-按量计费</p>
     */
    public $PayType;

    /**
     * @var integer <p>自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>任务所在地域</p>
     */
    public $Region;

    /**
     * @var string <p>Kafka topic</p>
     */
    public $Topic;

    /**
     * @var string <p>Kafka服务Broker地址</p>
     */
    public $Broker;

    /**
     * @var string <p>数据订阅的类型，当 Product 不为 mongodb 时，可能值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 Product 为 mongodb 时，可能值为 all-全实例更新；database-订阅单库；collection-订阅单集合</p>
     */
    public $SubscribeMode;

    /**
     * @var string <p>订阅数据格式。如果为空则用的默认格式: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg是protobuf，mongo是json。当 DatabaseType 为 mysql和cynosdbmysql 时有三种可选协议：protobuf\avro\json。数据格式详情参考官网的消费demo文档</p>
     */
    public $Protocol;

    /**
     * @var array <p>订阅的数据库表信息</p>
     */
    public $SubscribeObjects;

    /**
     * @var SubscribeKafkaConfig <p>kafka配置信息</p>
     */
    public $KafkaConfig;

    /**
     * @var string <p>订阅内置kafka的版本信息</p>
     */
    public $KafkaVersion;

    /**
     * @var string <p>源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力</p>
     */
    public $AccessType;

    /**
     * @var array <p>接入类型信息</p>
     */
    public $Endpoints;

    /**
     * @var array <p>mongo输出聚合设置</p>
     */
    public $PipelineInfo;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var array <p>订阅任务报错信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errors;

    /**
     * @var array <p>为业务添加的额外信息。参数名作key，参数值作value。<br>mysql选填参数：ProcessXA-是否处理XA事务，为true处理，其他不处理。<br>mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream。</p>
     */
    public $ExtraAttr;

    /**
     * @var string <p>数据订阅版本, 当前支持kafka和kafkaPro（专业版）</p>
     */
    public $SubscribeVersion;

    /**
     * @var string <p>消费端地址所在vpc</p>
     */
    public $ConsumerVpcId;

    /**
     * @var string <p>消费端地址所在子网</p>
     */
    public $ConsumerSubnetId;

    /**
     * @var string <p>订阅实例规格</p>
     */
    public $InstanceClass;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SubscribeId <p>数据订阅的ID，形如subs-b6x64o31tm</p>
     * @param string $SubscribeName <p>数据订阅实例的名称</p>
     * @param string $Product <p>订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)</p>
     * @param string $InstanceId <p>订阅的云数据库实例ID，只有订阅云数据库该值才有意义</p>
     * @param string $InstanceStatus <p>订阅的云数据库实例状态，只有订阅云数据库该值才有意义。可能值为：running, isolated, offline</p>
     * @param string $Status <p>订阅任务计费状态，可能值为：正常normal, 隔离中isolating, 已隔离isolated, 下线中offlining, 按量转包年包月中 post2PrePayIng</p>
     * @param string $SubsStatus <p>订阅任务状态，可能值为：未启动notStarted, 校验中checking, 校验不通过checkNotPass, 校验通过checkPass, 启动中starting, 运行中running, 异常出错error</p>
     * @param string $ModifyTime <p>修改时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
     * @param string $CreateTime <p>创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
     * @param string $IsolateTime <p>隔离时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
     * @param string $ExpireTime <p>包年包月任务的到期时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
     * @param string $OfflineTime <p>下线时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>Y-m-d h:m:s</code>（北京时间）。</p>
     * @param integer $PayType <p>付费方式，可能值为：0-包年包月，1-按量计费</p>
     * @param integer $AutoRenewFlag <p>自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费</p>
     * @param string $Region <p>任务所在地域</p>
     * @param string $Topic <p>Kafka topic</p>
     * @param string $Broker <p>Kafka服务Broker地址</p>
     * @param string $SubscribeMode <p>数据订阅的类型，当 Product 不为 mongodb 时，可能值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 Product 为 mongodb 时，可能值为 all-全实例更新；database-订阅单库；collection-订阅单集合</p>
     * @param string $Protocol <p>订阅数据格式。如果为空则用的默认格式: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg是protobuf，mongo是json。当 DatabaseType 为 mysql和cynosdbmysql 时有三种可选协议：protobuf\avro\json。数据格式详情参考官网的消费demo文档</p>
     * @param array $SubscribeObjects <p>订阅的数据库表信息</p>
     * @param SubscribeKafkaConfig $KafkaConfig <p>kafka配置信息</p>
     * @param string $KafkaVersion <p>订阅内置kafka的版本信息</p>
     * @param string $AccessType <p>源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力</p>
     * @param array $Endpoints <p>接入类型信息</p>
     * @param array $PipelineInfo <p>mongo输出聚合设置</p>
     * @param array $Tags <p>标签</p>
     * @param array $Errors <p>订阅任务报错信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtraAttr <p>为业务添加的额外信息。参数名作key，参数值作value。<br>mysql选填参数：ProcessXA-是否处理XA事务，为true处理，其他不处理。<br>mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream。</p>
     * @param string $SubscribeVersion <p>数据订阅版本, 当前支持kafka和kafkaPro（专业版）</p>
     * @param string $ConsumerVpcId <p>消费端地址所在vpc</p>
     * @param string $ConsumerSubnetId <p>消费端地址所在子网</p>
     * @param string $InstanceClass <p>订阅实例规格</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeName",$param) and $param["SubscribeName"] !== null) {
            $this->SubscribeName = $param["SubscribeName"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubsStatus",$param) and $param["SubsStatus"] !== null) {
            $this->SubsStatus = $param["SubsStatus"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Broker",$param) and $param["Broker"] !== null) {
            $this->Broker = $param["Broker"];
        }

        if (array_key_exists("SubscribeMode",$param) and $param["SubscribeMode"] !== null) {
            $this->SubscribeMode = $param["SubscribeMode"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SubscribeObjects",$param) and $param["SubscribeObjects"] !== null) {
            $this->SubscribeObjects = [];
            foreach ($param["SubscribeObjects"] as $key => $value){
                $obj = new SubscribeObject();
                $obj->deserialize($value);
                array_push($this->SubscribeObjects, $obj);
            }
        }

        if (array_key_exists("KafkaConfig",$param) and $param["KafkaConfig"] !== null) {
            $this->KafkaConfig = new SubscribeKafkaConfig();
            $this->KafkaConfig->deserialize($param["KafkaConfig"]);
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = [];
            foreach ($param["Endpoints"] as $key => $value){
                $obj = new EndpointItem();
                $obj->deserialize($value);
                array_push($this->Endpoints, $obj);
            }
        }

        if (array_key_exists("PipelineInfo",$param) and $param["PipelineInfo"] !== null) {
            $this->PipelineInfo = [];
            foreach ($param["PipelineInfo"] as $key => $value){
                $obj = new PipelineInfo();
                $obj->deserialize($value);
                array_push($this->PipelineInfo, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new SubsErr();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("ExtraAttr",$param) and $param["ExtraAttr"] !== null) {
            $this->ExtraAttr = [];
            foreach ($param["ExtraAttr"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->ExtraAttr, $obj);
            }
        }

        if (array_key_exists("SubscribeVersion",$param) and $param["SubscribeVersion"] !== null) {
            $this->SubscribeVersion = $param["SubscribeVersion"];
        }

        if (array_key_exists("ConsumerVpcId",$param) and $param["ConsumerVpcId"] !== null) {
            $this->ConsumerVpcId = $param["ConsumerVpcId"];
        }

        if (array_key_exists("ConsumerSubnetId",$param) and $param["ConsumerSubnetId"] !== null) {
            $this->ConsumerSubnetId = $param["ConsumerSubnetId"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

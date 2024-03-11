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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubscribeDetail返回参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅的ID，形如subs-b6x64o31tm
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅的ID，形如subs-b6x64o31tm
 * @method string getSubscribeName() 获取数据订阅实例的名称
 * @method void setSubscribeName(string $SubscribeName) 设置数据订阅实例的名称
 * @method string getProduct() 获取订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)
 * @method void setProduct(string $Product) 设置订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)
 * @method string getInstanceId() 获取订阅的云数据库实例ID，只有订阅云数据库该值才有意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置订阅的云数据库实例ID，只有订阅云数据库该值才有意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatus() 获取订阅的云数据库实例状态，只有订阅云数据库该值才有意义。可能值为：running, isolated, offline
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(string $InstanceStatus) 设置订阅的云数据库实例状态，只有订阅云数据库该值才有意义。可能值为：running, isolated, offline
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取订阅任务计费状态，可能值为：正常normal, 隔离中isolating, 已隔离isolated, 下线中offlining, 按量转包年包月中 post2PrePayIng
 * @method void setStatus(string $Status) 设置订阅任务计费状态，可能值为：正常normal, 隔离中isolating, 已隔离isolated, 下线中offlining, 按量转包年包月中 post2PrePayIng
 * @method string getSubsStatus() 获取订阅任务状态，可能值为：未启动notStarted, 校验中checking, 校验不通过checkNotPass, 校验通过checkPass, 启动中starting, 运行中running, 异常出错error
 * @method void setSubsStatus(string $SubsStatus) 设置订阅任务状态，可能值为：未启动notStarted, 校验中checking, 校验不通过checkNotPass, 校验通过checkPass, 启动中starting, 运行中running, 异常出错error
 * @method string getModifyTime() 获取修改时间，时间格式如：Y-m-d h:m:s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间，时间格式如：Y-m-d h:m:s
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，时间格式如：Y-m-d h:m:s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，时间格式如：Y-m-d h:m:s
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolateTime() 获取隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOfflineTime() 获取下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTime(string $OfflineTime) 设置下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayType() 获取付费方式，可能值为：0-包年包月，1-按量计费
 * @method void setPayType(integer $PayType) 设置付费方式，可能值为：0-包年包月，1-按量计费
 * @method integer getAutoRenewFlag() 获取自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费
 * @method string getRegion() 获取任务所在地域
 * @method void setRegion(string $Region) 设置任务所在地域
 * @method string getTopic() 获取Kafka topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置Kafka topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBroker() 获取Kafka服务Broker地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBroker(string $Broker) 设置Kafka服务Broker地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubscribeMode() 获取数据订阅的类型，当 Product 不为 mongodb 时，可能值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 Product 为 mongodb 时，可能值为 all-全实例更新；database-订阅单库；collection-订阅单集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscribeMode(string $SubscribeMode) 设置数据订阅的类型，当 Product 不为 mongodb 时，可能值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 Product 为 mongodb 时，可能值为 all-全实例更新；database-订阅单库；collection-订阅单集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取订阅数据格式。如果为空则用的默认格式: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg是protobuf，mongo是json。当 DatabaseType 为 mysql和cynosdbmysql 时有三种可选协议：protobuf\avro\json。数据格式详情参考官网的消费demo文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置订阅数据格式。如果为空则用的默认格式: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg是protobuf，mongo是json。当 DatabaseType 为 mysql和cynosdbmysql 时有三种可选协议：protobuf\avro\json。数据格式详情参考官网的消费demo文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubscribeObjects() 获取订阅的数据库表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscribeObjects(array $SubscribeObjects) 设置订阅的数据库表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method SubscribeKafkaConfig getKafkaConfig() 获取kafka配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaConfig(SubscribeKafkaConfig $KafkaConfig) 设置kafka配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessType() 获取源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessType(string $AccessType) 设置源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEndpoints() 获取接入类型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoints(array $Endpoints) 设置接入类型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPipelineInfo() 获取mongo输出聚合设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPipelineInfo(array $PipelineInfo) 设置mongo输出聚合设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getErrors() 获取订阅任务报错信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrors(array $Errors) 设置订阅任务报错信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtraAttr() 获取为业务添加的额外信息。参数名作key，参数值作value。
mysql选填参数：ProcessXA-是否处理XA事务，为true处理，其他不处理。
mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraAttr(array $ExtraAttr) 设置为业务添加的额外信息。参数名作key，参数值作value。
mysql选填参数：ProcessXA-是否处理XA事务，为true处理，其他不处理。
mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSubscribeDetailResponse extends AbstractModel
{
    /**
     * @var string 数据订阅的ID，形如subs-b6x64o31tm
     */
    public $SubscribeId;

    /**
     * @var string 数据订阅实例的名称
     */
    public $SubscribeName;

    /**
     * @var string 订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)
     */
    public $Product;

    /**
     * @var string 订阅的云数据库实例ID，只有订阅云数据库该值才有意义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 订阅的云数据库实例状态，只有订阅云数据库该值才有意义。可能值为：running, isolated, offline
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var string 订阅任务计费状态，可能值为：正常normal, 隔离中isolating, 已隔离isolated, 下线中offlining, 按量转包年包月中 post2PrePayIng
     */
    public $Status;

    /**
     * @var string 订阅任务状态，可能值为：未启动notStarted, 校验中checking, 校验不通过checkNotPass, 校验通过checkPass, 启动中starting, 运行中running, 异常出错error
     */
    public $SubsStatus;

    /**
     * @var string 修改时间，时间格式如：Y-m-d h:m:s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 创建时间，时间格式如：Y-m-d h:m:s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateTime;

    /**
     * @var string 包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTime;

    /**
     * @var integer 付费方式，可能值为：0-包年包月，1-按量计费
     */
    public $PayType;

    /**
     * @var integer 自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 任务所在地域
     */
    public $Region;

    /**
     * @var string Kafka topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string Kafka服务Broker地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Broker;

    /**
     * @var string 数据订阅的类型，当 Product 不为 mongodb 时，可能值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 Product 为 mongodb 时，可能值为 all-全实例更新；database-订阅单库；collection-订阅单集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubscribeMode;

    /**
     * @var string 订阅数据格式。如果为空则用的默认格式: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg是protobuf，mongo是json。当 DatabaseType 为 mysql和cynosdbmysql 时有三种可选协议：protobuf\avro\json。数据格式详情参考官网的消费demo文档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var array 订阅的数据库表信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubscribeObjects;

    /**
     * @var SubscribeKafkaConfig kafka配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaConfig;

    /**
     * @var string 源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessType;

    /**
     * @var array 接入类型信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoints;

    /**
     * @var array mongo输出聚合设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PipelineInfo;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 订阅任务报错信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errors;

    /**
     * @var array 为业务添加的额外信息。参数名作key，参数值作value。
mysql选填参数：ProcessXA-是否处理XA事务，为true处理，其他不处理。
mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraAttr;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SubscribeId 数据订阅的ID，形如subs-b6x64o31tm
     * @param string $SubscribeName 数据订阅实例的名称
     * @param string $Product 订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)
     * @param string $InstanceId 订阅的云数据库实例ID，只有订阅云数据库该值才有意义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatus 订阅的云数据库实例状态，只有订阅云数据库该值才有意义。可能值为：running, isolated, offline
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 订阅任务计费状态，可能值为：正常normal, 隔离中isolating, 已隔离isolated, 下线中offlining, 按量转包年包月中 post2PrePayIng
     * @param string $SubsStatus 订阅任务状态，可能值为：未启动notStarted, 校验中checking, 校验不通过checkNotPass, 校验通过checkPass, 启动中starting, 运行中running, 异常出错error
     * @param string $ModifyTime 修改时间，时间格式如：Y-m-d h:m:s
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，时间格式如：Y-m-d h:m:s
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolateTime 隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OfflineTime 下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayType 付费方式，可能值为：0-包年包月，1-按量计费
     * @param integer $AutoRenewFlag 自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费
     * @param string $Region 任务所在地域
     * @param string $Topic Kafka topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Broker Kafka服务Broker地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubscribeMode 数据订阅的类型，当 Product 不为 mongodb 时，可能值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 Product 为 mongodb 时，可能值为 all-全实例更新；database-订阅单库；collection-订阅单集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 订阅数据格式。如果为空则用的默认格式: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg是protobuf，mongo是json。当 DatabaseType 为 mysql和cynosdbmysql 时有三种可选协议：protobuf\avro\json。数据格式详情参考官网的消费demo文档
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubscribeObjects 订阅的数据库表信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param SubscribeKafkaConfig $KafkaConfig kafka配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessType 源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Endpoints 接入类型信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PipelineInfo mongo输出聚合设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Errors 订阅任务报错信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtraAttr 为业务添加的额外信息。参数名作key，参数值作value。
mysql选填参数：ProcessXA-是否处理XA事务，为true处理，其他不处理。
mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

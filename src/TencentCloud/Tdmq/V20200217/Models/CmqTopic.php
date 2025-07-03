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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cmq topic返回信息展示字段
 *
 * @method string getTopicId() 获取主题的 ID。
 * @method void setTopicId(string $TopicId) 设置主题的 ID。
 * @method string getTopicName() 获取主题名称。
 * @method void setTopicName(string $TopicName) 设置主题名称。
 * @method integer getMsgRetentionSeconds() 获取消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。固定为一天（86400秒），该属性不能修改。
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) 设置消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。固定为一天（86400秒），该属性不能修改。
 * @method integer getMaxMsgSize() 获取消息最大长度。取值范围1024 - 1048576Byte（即1 - 1024K），默认值为1048576。
 * @method void setMaxMsgSize(integer $MaxMsgSize) 设置消息最大长度。取值范围1024 - 1048576Byte（即1 - 1024K），默认值为1048576。
 * @method integer getQps() 获取每秒钟发布消息的条数。
 * @method void setQps(integer $Qps) 设置每秒钟发布消息的条数。
 * @method integer getFilterType() 获取描述用户创建订阅时选择的过滤策略：
FilterType = 1表示用户使用 FilterTag 标签过滤;
FilterType = 2表示用户使用 BindingKey 过滤。
 * @method void setFilterType(integer $FilterType) 设置描述用户创建订阅时选择的过滤策略：
FilterType = 1表示用户使用 FilterTag 标签过滤;
FilterType = 2表示用户使用 BindingKey 过滤。
 * @method integer getCreateTime() 获取主题的创建时间。返回 Unix 时间戳，精确到毫秒。
 * @method void setCreateTime(integer $CreateTime) 设置主题的创建时间。返回 Unix 时间戳，精确到毫秒。
 * @method integer getLastModifyTime() 获取最后一次修改主题属性的时间。返回 Unix 时间戳，精确到毫秒。
 * @method void setLastModifyTime(integer $LastModifyTime) 设置最后一次修改主题属性的时间。返回 Unix 时间戳，精确到毫秒。
 * @method integer getMsgCount() 获取当前该主题中消息数目（消息堆积数）。
 * @method void setMsgCount(integer $MsgCount) 设置当前该主题中消息数目（消息堆积数）。
 * @method integer getCreateUin() 获取创建者 Uin，CAM 鉴权 resource 由该字段组合而成。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUin(integer $CreateUin) 设置创建者 Uin，CAM 鉴权 resource 由该字段组合而成。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取关联的标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置关联的标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTrace() 获取消息轨迹。true表示开启，false表示不开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrace(boolean $Trace) 设置消息轨迹。true表示开启，false表示不开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取租户id
 * @method void setTenantId(string $TenantId) 设置租户id
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method integer getStatus() 获取集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
 * @method void setStatus(integer $Status) 设置集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
 * @method integer getBrokerType() 获取0表示pulsar，1表示rocketmq
 * @method void setBrokerType(integer $BrokerType) 设置0表示pulsar，1表示rocketmq
 * @method integer getSubscriptionCount() 获取订阅数量
 * @method void setSubscriptionCount(integer $SubscriptionCount) 设置订阅数量
 */
class CmqTopic extends AbstractModel
{
    /**
     * @var string 主题的 ID。
     */
    public $TopicId;

    /**
     * @var string 主题名称。
     */
    public $TopicName;

    /**
     * @var integer 消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。固定为一天（86400秒），该属性不能修改。
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer 消息最大长度。取值范围1024 - 1048576Byte（即1 - 1024K），默认值为1048576。
     */
    public $MaxMsgSize;

    /**
     * @var integer 每秒钟发布消息的条数。
     */
    public $Qps;

    /**
     * @var integer 描述用户创建订阅时选择的过滤策略：
FilterType = 1表示用户使用 FilterTag 标签过滤;
FilterType = 2表示用户使用 BindingKey 过滤。
     */
    public $FilterType;

    /**
     * @var integer 主题的创建时间。返回 Unix 时间戳，精确到毫秒。
     */
    public $CreateTime;

    /**
     * @var integer 最后一次修改主题属性的时间。返回 Unix 时间戳，精确到毫秒。
     */
    public $LastModifyTime;

    /**
     * @var integer 当前该主题中消息数目（消息堆积数）。
     */
    public $MsgCount;

    /**
     * @var integer 创建者 Uin，CAM 鉴权 resource 由该字段组合而成。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUin;

    /**
     * @var array 关联的标签。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean 消息轨迹。true表示开启，false表示不开启。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Trace;

    /**
     * @var string 租户id
     */
    public $TenantId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var integer 集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
     */
    public $Status;

    /**
     * @var integer 0表示pulsar，1表示rocketmq
     */
    public $BrokerType;

    /**
     * @var integer 订阅数量
     */
    public $SubscriptionCount;

    /**
     * @param string $TopicId 主题的 ID。
     * @param string $TopicName 主题名称。
     * @param integer $MsgRetentionSeconds 消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。固定为一天（86400秒），该属性不能修改。
     * @param integer $MaxMsgSize 消息最大长度。取值范围1024 - 1048576Byte（即1 - 1024K），默认值为1048576。
     * @param integer $Qps 每秒钟发布消息的条数。
     * @param integer $FilterType 描述用户创建订阅时选择的过滤策略：
FilterType = 1表示用户使用 FilterTag 标签过滤;
FilterType = 2表示用户使用 BindingKey 过滤。
     * @param integer $CreateTime 主题的创建时间。返回 Unix 时间戳，精确到毫秒。
     * @param integer $LastModifyTime 最后一次修改主题属性的时间。返回 Unix 时间戳，精确到毫秒。
     * @param integer $MsgCount 当前该主题中消息数目（消息堆积数）。
     * @param integer $CreateUin 创建者 Uin，CAM 鉴权 resource 由该字段组合而成。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 关联的标签。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Trace 消息轨迹。true表示开启，false表示不开启。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId 租户id
     * @param string $NamespaceName 命名空间名称
     * @param integer $Status 集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
     * @param integer $BrokerType 0表示pulsar，1表示rocketmq
     * @param integer $SubscriptionCount 订阅数量
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("MsgCount",$param) and $param["MsgCount"] !== null) {
            $this->MsgCount = $param["MsgCount"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BrokerType",$param) and $param["BrokerType"] !== null) {
            $this->BrokerType = $param["BrokerType"];
        }

        if (array_key_exists("SubscriptionCount",$param) and $param["SubscriptionCount"] !== null) {
            $this->SubscriptionCount = $param["SubscriptionCount"];
        }
    }
}

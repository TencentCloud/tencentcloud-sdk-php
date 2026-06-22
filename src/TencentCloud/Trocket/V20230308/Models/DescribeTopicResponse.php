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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopic返回参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getTopic() 获取<p>主题名称</p>
 * @method void setTopic(string $Topic) 设置<p>主题名称</p>
 * @method string getTopicType() 获取<p>主题类型<br>UNSPECIFIED:未指定,<br>NORMAL:普通消息,<br>FIFO:顺序消息,<br>DELAY:延时消息,<br>TRANSACTION:事务消息</p>
 * @method void setTopicType(string $TopicType) 设置<p>主题类型<br>UNSPECIFIED:未指定,<br>NORMAL:普通消息,<br>FIFO:顺序消息,<br>DELAY:延时消息,<br>TRANSACTION:事务消息</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method integer getCreatedTime() 获取<p>创建时间，<strong>Unix时间戳（毫秒）</strong></p>
 * @method void setCreatedTime(integer $CreatedTime) 设置<p>创建时间，<strong>Unix时间戳（毫秒）</strong></p>
 * @method integer getLastUpdateTime() 获取<p>最后写入时间，<strong>Unix时间戳（毫秒）</strong></p>
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置<p>最后写入时间，<strong>Unix时间戳（毫秒）</strong></p>
 * @method integer getSubscriptionCount() 获取<p>订阅数量</p>
 * @method void setSubscriptionCount(integer $SubscriptionCount) 设置<p>订阅数量</p>
 * @method array getSubscriptionData() 获取<p>订阅关系列表</p>
 * @method void setSubscriptionData(array $SubscriptionData) 设置<p>订阅关系列表</p>
 * @method integer getMsgTTL() 获取<p>消息保留时长，单位：小时</p>
 * @method void setMsgTTL(integer $MsgTTL) 设置<p>消息保留时长，单位：小时</p>
 * @method boolean getAutoExpireDelete() 获取<p>是否自动删除</p><p>仅适用于轻量主题</p>
 * @method void setAutoExpireDelete(boolean $AutoExpireDelete) 设置<p>是否自动删除</p><p>仅适用于轻量主题</p>
 * @method integer getAutoExpireTime() 获取<p>自动过期时间</p><p>单位：分钟</p><p>仅适用于轻量主题</p>
 * @method void setAutoExpireTime(integer $AutoExpireTime) 设置<p>自动过期时间</p><p>单位：分钟</p><p>仅适用于轻量主题</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTopicResponse extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>主题名称</p>
     */
    public $Topic;

    /**
     * @var string <p>主题类型<br>UNSPECIFIED:未指定,<br>NORMAL:普通消息,<br>FIFO:顺序消息,<br>DELAY:延时消息,<br>TRANSACTION:事务消息</p>
     */
    public $TopicType;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>创建时间，<strong>Unix时间戳（毫秒）</strong></p>
     */
    public $CreatedTime;

    /**
     * @var integer <p>最后写入时间，<strong>Unix时间戳（毫秒）</strong></p>
     */
    public $LastUpdateTime;

    /**
     * @var integer <p>订阅数量</p>
     */
    public $SubscriptionCount;

    /**
     * @var array <p>订阅关系列表</p>
     */
    public $SubscriptionData;

    /**
     * @var integer <p>消息保留时长，单位：小时</p>
     */
    public $MsgTTL;

    /**
     * @var boolean <p>是否自动删除</p><p>仅适用于轻量主题</p>
     */
    public $AutoExpireDelete;

    /**
     * @var integer <p>自动过期时间</p><p>单位：分钟</p><p>仅适用于轻量主题</p>
     */
    public $AutoExpireTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Topic <p>主题名称</p>
     * @param string $TopicType <p>主题类型<br>UNSPECIFIED:未指定,<br>NORMAL:普通消息,<br>FIFO:顺序消息,<br>DELAY:延时消息,<br>TRANSACTION:事务消息</p>
     * @param string $Remark <p>备注</p>
     * @param integer $CreatedTime <p>创建时间，<strong>Unix时间戳（毫秒）</strong></p>
     * @param integer $LastUpdateTime <p>最后写入时间，<strong>Unix时间戳（毫秒）</strong></p>
     * @param integer $SubscriptionCount <p>订阅数量</p>
     * @param array $SubscriptionData <p>订阅关系列表</p>
     * @param integer $MsgTTL <p>消息保留时长，单位：小时</p>
     * @param boolean $AutoExpireDelete <p>是否自动删除</p><p>仅适用于轻量主题</p>
     * @param integer $AutoExpireTime <p>自动过期时间</p><p>单位：分钟</p><p>仅适用于轻量主题</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("SubscriptionCount",$param) and $param["SubscriptionCount"] !== null) {
            $this->SubscriptionCount = $param["SubscriptionCount"];
        }

        if (array_key_exists("SubscriptionData",$param) and $param["SubscriptionData"] !== null) {
            $this->SubscriptionData = [];
            foreach ($param["SubscriptionData"] as $key => $value){
                $obj = new SubscriptionData();
                $obj->deserialize($value);
                array_push($this->SubscriptionData, $obj);
            }
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("AutoExpireDelete",$param) and $param["AutoExpireDelete"] !== null) {
            $this->AutoExpireDelete = $param["AutoExpireDelete"];
        }

        if (array_key_exists("AutoExpireTime",$param) and $param["AutoExpireTime"] !== null) {
            $this->AutoExpireTime = $param["AutoExpireTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

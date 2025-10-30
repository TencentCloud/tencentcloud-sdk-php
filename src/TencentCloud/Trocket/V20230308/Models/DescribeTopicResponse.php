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
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getTopicType() 获取主题类型
UNSPECIFIED:未指定,
NORMAL:普通消息,
FIFO:顺序消息,
DELAY:延时消息,
TRANSACTION:事务消息
 * @method void setTopicType(string $TopicType) 设置主题类型
UNSPECIFIED:未指定,
NORMAL:普通消息,
FIFO:顺序消息,
DELAY:延时消息,
TRANSACTION:事务消息
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getCreatedTime() 获取创建时间，**Unix时间戳（毫秒）**
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间，**Unix时间戳（毫秒）**
 * @method integer getLastUpdateTime() 获取最后写入时间，**Unix时间戳（毫秒）**
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置最后写入时间，**Unix时间戳（毫秒）**
 * @method integer getSubscriptionCount() 获取订阅数量
 * @method void setSubscriptionCount(integer $SubscriptionCount) 设置订阅数量
 * @method array getSubscriptionData() 获取订阅关系列表
 * @method void setSubscriptionData(array $SubscriptionData) 设置订阅关系列表
 * @method integer getMsgTTL() 获取消息保留时长，单位：小时
 * @method void setMsgTTL(integer $MsgTTL) 设置消息保留时长，单位：小时
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTopicResponse extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 主题类型
UNSPECIFIED:未指定,
NORMAL:普通消息,
FIFO:顺序消息,
DELAY:延时消息,
TRANSACTION:事务消息
     */
    public $TopicType;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 创建时间，**Unix时间戳（毫秒）**
     */
    public $CreatedTime;

    /**
     * @var integer 最后写入时间，**Unix时间戳（毫秒）**
     */
    public $LastUpdateTime;

    /**
     * @var integer 订阅数量
     */
    public $SubscriptionCount;

    /**
     * @var array 订阅关系列表
     */
    public $SubscriptionData;

    /**
     * @var integer 消息保留时长，单位：小时
     */
    public $MsgTTL;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Topic 主题名称
     * @param string $TopicType 主题类型
UNSPECIFIED:未指定,
NORMAL:普通消息,
FIFO:顺序消息,
DELAY:延时消息,
TRANSACTION:事务消息
     * @param string $Remark 备注
     * @param integer $CreatedTime 创建时间，**Unix时间戳（毫秒）**
     * @param integer $LastUpdateTime 最后写入时间，**Unix时间戳（毫秒）**
     * @param integer $SubscriptionCount 订阅数量
     * @param array $SubscriptionData 订阅关系列表
     * @param integer $MsgTTL 消息保留时长，单位：小时
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

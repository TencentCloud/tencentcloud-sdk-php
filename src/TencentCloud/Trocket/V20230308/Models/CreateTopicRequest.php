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
 * CreateTopic请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method string getTopic() 获取主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
 * @method void setTopic(string $Topic) 设置主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
 * @method string getTopicType() 获取主题类型，枚举值如下：

- NORMAL: 普通消息
- FIFO: 顺序消息
- DELAY: 延时消息
- TRANSACTION: 事务消息
 * @method void setTopicType(string $TopicType) 设置主题类型，枚举值如下：

- NORMAL: 普通消息
- FIFO: 顺序消息
- DELAY: 延时消息
- TRANSACTION: 事务消息
 * @method integer getQueueNum() 获取队列数量，取值范围3～16
 * @method void setQueueNum(integer $QueueNum) 设置队列数量，取值范围3～16
 * @method string getRemark() 获取备注信息，最多 128 个字符
 * @method void setRemark(string $Remark) 设置备注信息，最多 128 个字符
 * @method integer getMsgTTL() 获取消息保留时长（单位：小时）
 * @method void setMsgTTL(integer $MsgTTL) 设置消息保留时长（单位：小时）
 * @method array getTagList() 获取标签列表
 * @method void setTagList(array $TagList) 设置标签列表
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
     */
    public $Topic;

    /**
     * @var string 主题类型，枚举值如下：

- NORMAL: 普通消息
- FIFO: 顺序消息
- DELAY: 延时消息
- TRANSACTION: 事务消息
     */
    public $TopicType;

    /**
     * @var integer 队列数量，取值范围3～16
     */
    public $QueueNum;

    /**
     * @var string 备注信息，最多 128 个字符
     */
    public $Remark;

    /**
     * @var integer 消息保留时长（单位：小时）
     */
    public $MsgTTL;

    /**
     * @var array 标签列表
     */
    public $TagList;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     * @param string $Topic 主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
     * @param string $TopicType 主题类型，枚举值如下：

- NORMAL: 普通消息
- FIFO: 顺序消息
- DELAY: 延时消息
- TRANSACTION: 事务消息
     * @param integer $QueueNum 队列数量，取值范围3～16
     * @param string $Remark 备注信息，最多 128 个字符
     * @param integer $MsgTTL 消息保留时长（单位：小时）
     * @param array $TagList 标签列表
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

        if (array_key_exists("QueueNum",$param) and $param["QueueNum"] !== null) {
            $this->QueueNum = $param["QueueNum"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}

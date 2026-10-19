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
 * SendMessage请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method string getTopic() 获取主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
 * @method void setTopic(string $Topic) 设置主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
 * @method string getMsgBody() 获取<p>消息内容</p>
 * @method void setMsgBody(string $MsgBody) 设置<p>消息内容</p>
 * @method string getMsgKey() 获取<p>消息Key</p>
 * @method void setMsgKey(string $MsgKey) 设置<p>消息Key</p>
 * @method string getMsgTag() 获取<p>消息Tag</p>
 * @method void setMsgTag(string $MsgTag) 设置<p>消息Tag</p>
 * @method string getLiteTopic() 获取<p>轻量主题</p>
 * @method void setLiteTopic(string $LiteTopic) 设置<p>轻量主题</p>
 * @method integer getPriority() 获取<p>指定队列优先级</p>
 * @method void setPriority(integer $Priority) 设置<p>指定队列优先级</p>
 */
class SendMessageRequest extends AbstractModel
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
     * @var string <p>消息内容</p>
     */
    public $MsgBody;

    /**
     * @var string <p>消息Key</p>
     */
    public $MsgKey;

    /**
     * @var string <p>消息Tag</p>
     */
    public $MsgTag;

    /**
     * @var string <p>轻量主题</p>
     */
    public $LiteTopic;

    /**
     * @var integer <p>指定队列优先级</p>
     */
    public $Priority;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     * @param string $Topic 主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
     * @param string $MsgBody <p>消息内容</p>
     * @param string $MsgKey <p>消息Key</p>
     * @param string $MsgTag <p>消息Tag</p>
     * @param string $LiteTopic <p>轻量主题</p>
     * @param integer $Priority <p>指定队列优先级</p>
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

        if (array_key_exists("MsgBody",$param) and $param["MsgBody"] !== null) {
            $this->MsgBody = $param["MsgBody"];
        }

        if (array_key_exists("MsgKey",$param) and $param["MsgKey"] !== null) {
            $this->MsgKey = $param["MsgKey"];
        }

        if (array_key_exists("MsgTag",$param) and $param["MsgTag"] !== null) {
            $this->MsgTag = $param["MsgTag"];
        }

        if (array_key_exists("LiteTopic",$param) and $param["LiteTopic"] !== null) {
            $this->LiteTopic = $param["LiteTopic"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}

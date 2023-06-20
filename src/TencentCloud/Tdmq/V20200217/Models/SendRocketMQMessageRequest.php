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
 * SendRocketMQMessage请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getNamespaceId() 获取命名空间
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间
 * @method string getTopicName() 获取topic名称
 * @method void setTopicName(string $TopicName) 设置topic名称
 * @method string getMsgBody() 获取信息内容
 * @method void setMsgBody(string $MsgBody) 设置信息内容
 * @method string getMsgKey() 获取消息key信息
 * @method void setMsgKey(string $MsgKey) 设置消息key信息
 * @method string getMsgTag() 获取消息tag信息
 * @method void setMsgTag(string $MsgTag) 设置消息tag信息
 */
class SendRocketMQMessageRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 命名空间
     */
    public $NamespaceId;

    /**
     * @var string topic名称
     */
    public $TopicName;

    /**
     * @var string 信息内容
     */
    public $MsgBody;

    /**
     * @var string 消息key信息
     */
    public $MsgKey;

    /**
     * @var string 消息tag信息
     */
    public $MsgTag;

    /**
     * @param string $ClusterId 集群id
     * @param string $NamespaceId 命名空间
     * @param string $TopicName topic名称
     * @param string $MsgBody 信息内容
     * @param string $MsgKey 消息key信息
     * @param string $MsgTag 消息tag信息
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
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
    }
}

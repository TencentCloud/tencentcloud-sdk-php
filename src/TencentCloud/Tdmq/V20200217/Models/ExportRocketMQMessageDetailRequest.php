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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportRocketMQMessageDetail请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getEnvironmentId() 获取应用命名空间
 * @method void setEnvironmentId(string $EnvironmentId) 设置应用命名空间
 * @method string getTopicName() 获取Topic名称
如果是死信消息 isDlqMsg=true
 * @method void setTopicName(string $TopicName) 设置Topic名称
如果是死信消息 isDlqMsg=true
 * @method string getMsgId() 获取消息id
 * @method void setMsgId(string $MsgId) 设置消息id
 * @method boolean getIncludeMsgBody() 获取是否包含消息体
 * @method void setIncludeMsgBody(boolean $IncludeMsgBody) 设置是否包含消息体
 * @method boolean getDeadLetterMsg() 获取是否死信消息
 * @method void setDeadLetterMsg(boolean $DeadLetterMsg) 设置是否死信消息
 */
class ExportRocketMQMessageDetailRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 应用命名空间
     */
    public $EnvironmentId;

    /**
     * @var string Topic名称
如果是死信消息 isDlqMsg=true
     */
    public $TopicName;

    /**
     * @var string 消息id
     */
    public $MsgId;

    /**
     * @var boolean 是否包含消息体
     */
    public $IncludeMsgBody;

    /**
     * @var boolean 是否死信消息
     */
    public $DeadLetterMsg;

    /**
     * @param string $ClusterId 集群id
     * @param string $EnvironmentId 应用命名空间
     * @param string $TopicName Topic名称
如果是死信消息 isDlqMsg=true
     * @param string $MsgId 消息id
     * @param boolean $IncludeMsgBody 是否包含消息体
     * @param boolean $DeadLetterMsg 是否死信消息
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

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("IncludeMsgBody",$param) and $param["IncludeMsgBody"] !== null) {
            $this->IncludeMsgBody = $param["IncludeMsgBody"];
        }

        if (array_key_exists("DeadLetterMsg",$param) and $param["DeadLetterMsg"] !== null) {
            $this->DeadLetterMsg = $param["DeadLetterMsg"];
        }
    }
}

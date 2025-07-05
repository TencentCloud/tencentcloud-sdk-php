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
 * DescribeMsg请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method string getMsgId() 获取消息ID。
 * @method void setMsgId(string $MsgId) 设置消息ID。
 * @method string getTopicName() 获取主题名。
 * @method void setTopicName(string $TopicName) 设置主题名。
 * @method string getClusterId() 获取Pulsar 集群的ID
 * @method void setClusterId(string $ClusterId) 设置Pulsar 集群的ID
 */
class DescribeMsgRequest extends AbstractModel
{
    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var string 消息ID。
     */
    public $MsgId;

    /**
     * @var string 主题名。
     */
    public $TopicName;

    /**
     * @var string Pulsar 集群的ID
     */
    public $ClusterId;

    /**
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param string $MsgId 消息ID。
     * @param string $TopicName 主题名。
     * @param string $ClusterId Pulsar 集群的ID
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}

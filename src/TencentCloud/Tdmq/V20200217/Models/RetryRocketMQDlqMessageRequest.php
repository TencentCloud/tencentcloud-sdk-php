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
 * RetryRocketMQDlqMessage请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getNamespaceId() 获取命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method string getGroupName() 获取group名称
 * @method void setGroupName(string $GroupName) 设置group名称
 * @method array getMessageIds() 获取死信消息ID
 * @method void setMessageIds(array $MessageIds) 设置死信消息ID
 */
class RetryRocketMQDlqMessageRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 命名空间，4.x 通用集群命名空间固定为: tdmq_default
     */
    public $NamespaceId;

    /**
     * @var string group名称
     */
    public $GroupName;

    /**
     * @var array 死信消息ID
     */
    public $MessageIds;

    /**
     * @param string $ClusterId 集群id
     * @param string $NamespaceId 命名空间，4.x 通用集群命名空间固定为: tdmq_default
     * @param string $GroupName group名称
     * @param array $MessageIds 死信消息ID
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("MessageIds",$param) and $param["MessageIds"] !== null) {
            $this->MessageIds = $param["MessageIds"];
        }
    }
}

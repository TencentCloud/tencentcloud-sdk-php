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
 * DescribeRocketMQTopicStats请求参数结构体
 *
 * @method string getClusterId() 获取实例ID
 * @method void setClusterId(string $ClusterId) 设置实例ID
 * @method string getNamespaceId() 获取主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method void setNamespaceId(string $NamespaceId) 设置主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method string getTopicName() 获取主题名
 * @method void setTopicName(string $TopicName) 设置主题名
 */
class DescribeRocketMQTopicStatsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $ClusterId;

    /**
     * @var string 主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     */
    public $NamespaceId;

    /**
     * @var string 主题名
     */
    public $TopicName;

    /**
     * @param string $ClusterId 实例ID
     * @param string $NamespaceId 主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     * @param string $TopicName 主题名
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
    }
}

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
 * ResetRocketMQConsumerOffSet请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceId() 获取命名空间名称
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间名称
 * @method string getGroupId() 获取消费组名称
 * @method void setGroupId(string $GroupId) 设置消费组名称
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method integer getType() 获取重置方式，0表示从最新位点开始，1表示从指定时间点开始
 * @method void setType(integer $Type) 设置重置方式，0表示从最新位点开始，1表示从指定时间点开始
 * @method integer getResetTimestamp() 获取重置指定的时间戳，仅在 Type 为1是生效，以毫秒为单位
 * @method void setResetTimestamp(integer $ResetTimestamp) 设置重置指定的时间戳，仅在 Type 为1是生效，以毫秒为单位
 */
class ResetRocketMQConsumerOffSetRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceId;

    /**
     * @var string 消费组名称
     */
    public $GroupId;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var integer 重置方式，0表示从最新位点开始，1表示从指定时间点开始
     */
    public $Type;

    /**
     * @var integer 重置指定的时间戳，仅在 Type 为1是生效，以毫秒为单位
     */
    public $ResetTimestamp;

    /**
     * @param string $ClusterId 集群ID
     * @param string $NamespaceId 命名空间名称
     * @param string $GroupId 消费组名称
     * @param string $Topic 主题名称
     * @param integer $Type 重置方式，0表示从最新位点开始，1表示从指定时间点开始
     * @param integer $ResetTimestamp 重置指定的时间戳，仅在 Type 为1是生效，以毫秒为单位
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ResetTimestamp",$param) and $param["ResetTimestamp"] !== null) {
            $this->ResetTimestamp = $param["ResetTimestamp"];
        }
    }
}

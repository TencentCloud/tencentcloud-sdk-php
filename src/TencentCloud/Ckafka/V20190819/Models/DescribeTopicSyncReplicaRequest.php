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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopicSyncReplica请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getTopicName() 获取主题名称
 * @method void setTopicName(string $TopicName) 设置主题名称
 * @method integer getOffset() 获取偏移量，不填默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，不填默认为0
 * @method integer getLimit() 获取返回数量，不填则默认10，最大值20。
 * @method void setLimit(integer $Limit) 设置返回数量，不填则默认10，最大值20。
 * @method boolean getOutOfSyncReplicaOnly() 获取仅筛选未同步副本
 * @method void setOutOfSyncReplicaOnly(boolean $OutOfSyncReplicaOnly) 设置仅筛选未同步副本
 */
class DescribeTopicSyncReplicaRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 主题名称
     */
    public $TopicName;

    /**
     * @var integer 偏移量，不填默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，不填则默认10，最大值20。
     */
    public $Limit;

    /**
     * @var boolean 仅筛选未同步副本
     */
    public $OutOfSyncReplicaOnly;

    /**
     * @param string $InstanceId 实例ID
     * @param string $TopicName 主题名称
     * @param integer $Offset 偏移量，不填默认为0
     * @param integer $Limit 返回数量，不填则默认10，最大值20。
     * @param boolean $OutOfSyncReplicaOnly 仅筛选未同步副本
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OutOfSyncReplicaOnly",$param) and $param["OutOfSyncReplicaOnly"] !== null) {
            $this->OutOfSyncReplicaOnly = $param["OutOfSyncReplicaOnly"];
        }
    }
}

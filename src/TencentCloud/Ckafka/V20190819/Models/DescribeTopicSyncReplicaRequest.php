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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopicSyncReplica请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method string getTopicName() 获取<p>主题名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40847">DescribeTopic</a></p>
 * @method void setTopicName(string $TopicName) 设置<p>主题名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40847">DescribeTopic</a></p>
 * @method integer getOffset() 获取<p>偏移量，不填默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，不填默认为0</p>
 * @method integer getLimit() 获取<p>返回数量，默认值为20，必须大于0。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认值为20，必须大于0。</p>
 * @method boolean getOutOfSyncReplicaOnly() 获取<p>仅筛选未同步副本</p>
 * @method void setOutOfSyncReplicaOnly(boolean $OutOfSyncReplicaOnly) 设置<p>仅筛选未同步副本</p>
 */
class DescribeTopicSyncReplicaRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>主题名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40847">DescribeTopic</a></p>
     */
    public $TopicName;

    /**
     * @var integer <p>偏移量，不填默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认值为20，必须大于0。</p>
     */
    public $Limit;

    /**
     * @var boolean <p>仅筛选未同步副本</p>
     */
    public $OutOfSyncReplicaOnly;

    /**
     * @param string $InstanceId <p>实例ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     * @param string $TopicName <p>主题名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40847">DescribeTopic</a></p>
     * @param integer $Offset <p>偏移量，不填默认为0</p>
     * @param integer $Limit <p>返回数量，默认值为20，必须大于0。</p>
     * @param boolean $OutOfSyncReplicaOnly <p>仅筛选未同步副本</p>
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

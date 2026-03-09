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
 * DescribeGroupOffsets请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method string getGroup() 获取<p>Kafka 消费分组</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40840">DescribeGroup</a></p>
 * @method void setGroup(string $Group) 设置<p>Kafka 消费分组</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40840">DescribeGroup</a></p>
 * @method array getTopics() 获取<p>group 订阅的主题名称数组，如果没有该数组，则表示指定的 group 下所有 topic 信息</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40847">DescribeTopic</a></p>
 * @method void setTopics(array $Topics) 设置<p>group 订阅的主题名称数组，如果没有该数组，则表示指定的 group 下所有 topic 信息</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40847">DescribeTopic</a></p>
 * @method string getSearchWord() 获取<p>模糊匹配 topicName</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>模糊匹配 topicName</p>
 * @method integer getOffset() 获取<p>本次查询的偏移位置，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>本次查询的偏移位置，默认为0</p>
 * @method integer getLimit() 获取<p>本次返回结果的最大个数，默认为50，最大值为50</p>
 * @method void setLimit(integer $Limit) 设置<p>本次返回结果的最大个数，默认为50，最大值为50</p>
 */
class DescribeGroupOffsetsRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>Kafka 消费分组</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40840">DescribeGroup</a></p>
     */
    public $Group;

    /**
     * @var array <p>group 订阅的主题名称数组，如果没有该数组，则表示指定的 group 下所有 topic 信息</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40847">DescribeTopic</a></p>
     */
    public $Topics;

    /**
     * @var string <p>模糊匹配 topicName</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>本次查询的偏移位置，默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>本次返回结果的最大个数，默认为50，最大值为50</p>
     */
    public $Limit;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     * @param string $Group <p>Kafka 消费分组</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40840">DescribeGroup</a></p>
     * @param array $Topics <p>group 订阅的主题名称数组，如果没有该数组，则表示指定的 group 下所有 topic 信息</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40847">DescribeTopic</a></p>
     * @param string $SearchWord <p>模糊匹配 topicName</p>
     * @param integer $Offset <p>本次查询的偏移位置，默认为0</p>
     * @param integer $Limit <p>本次返回结果的最大个数，默认为50，最大值为50</p>
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

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = $param["Topics"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

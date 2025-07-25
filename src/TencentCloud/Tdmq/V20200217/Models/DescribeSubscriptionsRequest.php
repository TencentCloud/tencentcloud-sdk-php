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
 * DescribeSubscriptions请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method string getTopicName() 获取主题名称。
 * @method void setTopicName(string $TopicName) 设置主题名称。
 * @method string getClusterId() 获取Pulsar 集群的ID
 * @method void setClusterId(string $ClusterId) 设置Pulsar 集群的ID
 * @method integer getOffset() 获取起始下标，不填默认为0。
 * @method void setOffset(integer $Offset) 设置起始下标，不填默认为0。
 * @method integer getLimit() 获取返回数量，不填则默认为10，最大值为20。
 * @method void setLimit(integer $Limit) 设置返回数量，不填则默认为10，最大值为20。
 * @method string getSubscriptionName() 获取订阅者名称，模糊匹配。
 * @method void setSubscriptionName(string $SubscriptionName) 设置订阅者名称，模糊匹配。
 * @method array getFilters() 获取数据过滤条件。
 * @method void setFilters(array $Filters) 设置数据过滤条件。
 */
class DescribeSubscriptionsRequest extends AbstractModel
{
    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var string 主题名称。
     */
    public $TopicName;

    /**
     * @var string Pulsar 集群的ID
     */
    public $ClusterId;

    /**
     * @var integer 起始下标，不填默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，不填则默认为10，最大值为20。
     */
    public $Limit;

    /**
     * @var string 订阅者名称，模糊匹配。
     */
    public $SubscriptionName;

    /**
     * @var array 数据过滤条件。
     */
    public $Filters;

    /**
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param string $TopicName 主题名称。
     * @param string $ClusterId Pulsar 集群的ID
     * @param integer $Offset 起始下标，不填默认为0。
     * @param integer $Limit 返回数量，不填则默认为10，最大值为20。
     * @param string $SubscriptionName 订阅者名称，模糊匹配。
     * @param array $Filters 数据过滤条件。
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FilterSubscription();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

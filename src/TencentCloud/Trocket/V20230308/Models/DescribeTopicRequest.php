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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopic请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method string getTopic() 获取主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
 * @method void setTopic(string $Topic) 设置主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
 * @method array getFilters() 获取过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
 * @method void setFilters(array $Filters) 设置过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
 * @method integer getOffset() 获取查询起始位置，默认为0。
 * @method void setOffset(integer $Offset) 设置查询起始位置，默认为0。
 * @method integer getLimit() 获取查询结果限制数量，默认20。
 * @method void setLimit(integer $Limit) 设置查询结果限制数量，默认20。
 */
class DescribeTopicRequest extends AbstractModel
{
    /**
     * @var string 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
     */
    public $Topic;

    /**
     * @var array 过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
     */
    public $Filters;

    /**
     * @var integer 查询起始位置，默认为0。
     */
    public $Offset;

    /**
     * @var integer 查询结果限制数量，默认20。
     */
    public $Limit;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     * @param string $Topic 主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
     * @param array $Filters 过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
     * @param integer $Offset 查询起始位置，默认为0。
     * @param integer $Limit 查询结果限制数量，默认20。
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

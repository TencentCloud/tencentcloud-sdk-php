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
 * DescribeTopicList请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method array getTagFilters() 获取标签过滤器
 * @method void setTagFilters(array $TagFilters) 设置标签过滤器
 * @method array getFilters() 获取过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
 * @method void setFilters(array $Filters) 设置过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
 * @method integer getOffset() 获取查询起始位置，默认为0。
 * @method void setOffset(integer $Offset) 设置查询起始位置，默认为0。
 * @method integer getLimit() 获取查询结果限制数量，默认20。
 * @method void setLimit(integer $Limit) 设置查询结果限制数量，默认20。
 * @method string getFromGroup() 获取按照消费组查询订阅的主题
 * @method void setFromGroup(string $FromGroup) 设置按照消费组查询订阅的主题
 */
class DescribeTopicListRequest extends AbstractModel
{
    /**
     * @var string 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var array 标签过滤器
     */
    public $TagFilters;

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
     * @var string 按照消费组查询订阅的主题
     */
    public $FromGroup;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     * @param array $TagFilters 标签过滤器
     * @param array $Filters 过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
     * @param integer $Offset 查询起始位置，默认为0。
     * @param integer $Limit 查询结果限制数量，默认20。
     * @param string $FromGroup 按照消费组查询订阅的主题
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

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
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

        if (array_key_exists("FromGroup",$param) and $param["FromGroup"] !== null) {
            $this->FromGroup = $param["FromGroup"];
        }
    }
}

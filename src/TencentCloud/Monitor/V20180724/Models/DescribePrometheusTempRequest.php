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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusTemp请求参数结构体
 *
 * @method array getFilters() 获取仅支持按Name, Values字段过滤:
* Name = Name
  按照给定的模板名称列表匹配
* Name = ID
  按照给定的模板ID列表匹配
* Name = Describe
  按照给定的模板描述列表匹配
* Name = Level
  按照给定的模板维度(instance, cluster)列表匹配
 * @method void setFilters(array $Filters) 设置仅支持按Name, Values字段过滤:
* Name = Name
  按照给定的模板名称列表匹配
* Name = ID
  按照给定的模板ID列表匹配
* Name = Describe
  按照给定的模板描述列表匹配
* Name = Level
  按照给定的模板维度(instance, cluster)列表匹配
 * @method integer getOffset() 获取分页偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认为0
 * @method integer getLimit() 获取分页返回数量，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置分页返回数量，默认为20，最大值为100
 */
class DescribePrometheusTempRequest extends AbstractModel
{
    /**
     * @var array 仅支持按Name, Values字段过滤:
* Name = Name
  按照给定的模板名称列表匹配
* Name = ID
  按照给定的模板ID列表匹配
* Name = Describe
  按照给定的模板描述列表匹配
* Name = Level
  按照给定的模板维度(instance, cluster)列表匹配
     */
    public $Filters;

    /**
     * @var integer 分页偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 分页返回数量，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @param array $Filters 仅支持按Name, Values字段过滤:
* Name = Name
  按照给定的模板名称列表匹配
* Name = ID
  按照给定的模板ID列表匹配
* Name = Describe
  按照给定的模板描述列表匹配
* Name = Level
  按照给定的模板维度(instance, cluster)列表匹配
     * @param integer $Offset 分页偏移量，默认为0
     * @param integer $Limit 分页返回数量，默认为20，最大值为100
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

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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSearchViews请求参数结构体
 *
 * @method array getFilters() 获取<ul><li>viewId 按照【视图ID】进行过滤。 类型：String 必选：否  </li><li>viewName 按照【视图名称】进行过滤。 类型：String 必选：否  </li><li>logsetId 按照【日志集ID】进行过滤。 类型：String 必选：否<br>每次请求的Filters的上限为10，Filter.Values的上限为10。</li></ul>
 * @method void setFilters(array $Filters) 设置<ul><li>viewId 按照【视图ID】进行过滤。 类型：String 必选：否  </li><li>viewName 按照【视图名称】进行过滤。 类型：String 必选：否  </li><li>logsetId 按照【日志集ID】进行过滤。 类型：String 必选：否<br>每次请求的Filters的上限为10，Filter.Values的上限为10。</li></ul>
 * @method integer getOffset() 获取<p>分页的偏移量，默认值为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页的偏移量，默认值为0。</p>
 * @method integer getLimit() 获取<p>分页单页限制数目，默认值为20，最大值100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页单页限制数目，默认值为20，最大值100。</p>
 */
class DescribeSearchViewsRequest extends AbstractModel
{
    /**
     * @var array <ul><li>viewId 按照【视图ID】进行过滤。 类型：String 必选：否  </li><li>viewName 按照【视图名称】进行过滤。 类型：String 必选：否  </li><li>logsetId 按照【日志集ID】进行过滤。 类型：String 必选：否<br>每次请求的Filters的上限为10，Filter.Values的上限为10。</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>分页的偏移量，默认值为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页单页限制数目，默认值为20，最大值100。</p>
     */
    public $Limit;

    /**
     * @param array $Filters <ul><li>viewId 按照【视图ID】进行过滤。 类型：String 必选：否  </li><li>viewName 按照【视图名称】进行过滤。 类型：String 必选：否  </li><li>logsetId 按照【日志集ID】进行过滤。 类型：String 必选：否<br>每次请求的Filters的上限为10，Filter.Values的上限为10。</li></ul>
     * @param integer $Offset <p>分页的偏移量，默认值为0。</p>
     * @param integer $Limit <p>分页单页限制数目，默认值为20，最大值100。</p>
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

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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeContentIdentifiers请求参数结构体
 *
 * @method integer getOffset() 获取分页查询偏移量。默认值：0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量。默认值：0。
 * @method integer getLimit() 获取分页查询限制数目。默认值：20，最大值：100。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目。默认值：20，最大值：100。
 * @method array getFilters() 获取过滤条件，Filters 的上限为 20，Filters.Values 的上限为 20。该参数不填写时，默认返回当前 AppId 下有权限的内容标识符。详细的过滤条件如下：<li>description：按照内容标识符描述批量进行过滤；例如：test；</li><li>content-id：按照内容标识符 ID 批量进行过滤；例如：eocontent-2noz78a8ev6k；</li><li>tag-key：按照标签键进行过滤；</li> <li>tag-value： 按照标签值进行过滤；</li><li>status：按照内容标识符状态进行过滤，取值有：active：生效中；deleted：已删除。</li>仅支持按照 description 模糊查询，其余字段需要精准查询。
 * @method void setFilters(array $Filters) 设置过滤条件，Filters 的上限为 20，Filters.Values 的上限为 20。该参数不填写时，默认返回当前 AppId 下有权限的内容标识符。详细的过滤条件如下：<li>description：按照内容标识符描述批量进行过滤；例如：test；</li><li>content-id：按照内容标识符 ID 批量进行过滤；例如：eocontent-2noz78a8ev6k；</li><li>tag-key：按照标签键进行过滤；</li> <li>tag-value： 按照标签值进行过滤；</li><li>status：按照内容标识符状态进行过滤，取值有：active：生效中；deleted：已删除。</li>仅支持按照 description 模糊查询，其余字段需要精准查询。
 */
class DescribeContentIdentifiersRequest extends AbstractModel
{
    /**
     * @var integer 分页查询偏移量。默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目。默认值：20，最大值：100。
     */
    public $Limit;

    /**
     * @var array 过滤条件，Filters 的上限为 20，Filters.Values 的上限为 20。该参数不填写时，默认返回当前 AppId 下有权限的内容标识符。详细的过滤条件如下：<li>description：按照内容标识符描述批量进行过滤；例如：test；</li><li>content-id：按照内容标识符 ID 批量进行过滤；例如：eocontent-2noz78a8ev6k；</li><li>tag-key：按照标签键进行过滤；</li> <li>tag-value： 按照标签值进行过滤；</li><li>status：按照内容标识符状态进行过滤，取值有：active：生效中；deleted：已删除。</li>仅支持按照 description 模糊查询，其余字段需要精准查询。
     */
    public $Filters;

    /**
     * @param integer $Offset 分页查询偏移量。默认值：0。
     * @param integer $Limit 分页查询限制数目。默认值：20，最大值：100。
     * @param array $Filters 过滤条件，Filters 的上限为 20，Filters.Values 的上限为 20。该参数不填写时，默认返回当前 AppId 下有权限的内容标识符。详细的过滤条件如下：<li>description：按照内容标识符描述批量进行过滤；例如：test；</li><li>content-id：按照内容标识符 ID 批量进行过滤；例如：eocontent-2noz78a8ev6k；</li><li>tag-key：按照标签键进行过滤；</li> <li>tag-value： 按照标签值进行过滤；</li><li>status：按照内容标识符状态进行过滤，取值有：active：生效中；deleted：已删除。</li>仅支持按照 description 模糊查询，其余字段需要精准查询。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

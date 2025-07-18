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
 * DescribeCustomErrorPages请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getFilters() 获取过滤条件，Filters.Values 的上限为20，详细的过滤条件Name值如下：
<li>page-id： 按照页面 ID 进行过滤；</li>
<li>name： 按照页面名称进行过滤；</li>
<li>description：按照页面描述过滤；</li>
<li>content-type：按照页面类型过滤。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values 的上限为20，详细的过滤条件Name值如下：
<li>page-id： 按照页面 ID 进行过滤；</li>
<li>name： 按照页面名称进行过滤；</li>
<li>description：按照页面描述过滤；</li>
<li>content-type：按照页面类型过滤。</li>
 * @method integer getOffset() 获取分页查询偏移量。默认值：0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量。默认值：0。
 * @method integer getLimit() 获取分页查询限制数目。默认值：20，最大值：1000。 
 * @method void setLimit(integer $Limit) 设置分页查询限制数目。默认值：20，最大值：1000。 
 */
class DescribeCustomErrorPagesRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 过滤条件，Filters.Values 的上限为20，详细的过滤条件Name值如下：
<li>page-id： 按照页面 ID 进行过滤；</li>
<li>name： 按照页面名称进行过滤；</li>
<li>description：按照页面描述过滤；</li>
<li>content-type：按照页面类型过滤。</li>
     */
    public $Filters;

    /**
     * @var integer 分页查询偏移量。默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目。默认值：20，最大值：1000。 
     */
    public $Limit;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $Filters 过滤条件，Filters.Values 的上限为20，详细的过滤条件Name值如下：
<li>page-id： 按照页面 ID 进行过滤；</li>
<li>name： 按照页面名称进行过滤；</li>
<li>description：按照页面描述过滤；</li>
<li>content-type：按照页面类型过滤。</li>
     * @param integer $Offset 分页查询偏移量。默认值：0。
     * @param integer $Limit 分页查询限制数目。默认值：20，最大值：1000。 
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
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

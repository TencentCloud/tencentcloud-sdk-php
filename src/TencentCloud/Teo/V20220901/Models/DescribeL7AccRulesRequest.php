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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeL7AccRules请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getFilters() 获取过滤条件，Filters.Values 的上限为 20，不填写此参数时默认按顺序返回站点下的规则。详细的过滤条件如下：
<li>rule-id：按照规则 ID 进行过滤。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values 的上限为 20，不填写此参数时默认按顺序返回站点下的规则。详细的过滤条件如下：
<li>rule-id：按照规则 ID 进行过滤。</li>
 * @method integer getLimit() 获取分页查询限制数目，默认值：20，上限：1000。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目，默认值：20，上限：1000。
 * @method integer getOffset() 获取分页查询偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为 0。
 */
class DescribeL7AccRulesRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 过滤条件，Filters.Values 的上限为 20，不填写此参数时默认按顺序返回站点下的规则。详细的过滤条件如下：
<li>rule-id：按照规则 ID 进行过滤。</li>
     */
    public $Filters;

    /**
     * @var integer 分页查询限制数目，默认值：20，上限：1000。
     */
    public $Limit;

    /**
     * @var integer 分页查询偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $Filters 过滤条件，Filters.Values 的上限为 20，不填写此参数时默认按顺序返回站点下的规则。详细的过滤条件如下：
<li>rule-id：按照规则 ID 进行过滤。</li>
     * @param integer $Limit 分页查询限制数目，默认值：20，上限：1000。
     * @param integer $Offset 分页查询偏移量，默认为 0。
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}

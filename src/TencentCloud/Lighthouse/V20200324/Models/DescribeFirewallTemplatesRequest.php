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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFirewallTemplates请求参数结构体
 *
 * @method array getTemplateIds() 获取防火墙模板ID列表。
 * @method void setTemplateIds(array $TemplateIds) 设置防火墙模板ID列表。
 * @method array getFilters() 获取过滤器列表。
<li>template-id</li>按照【防火墙模版所属的ID】进行过滤。
类型：String
必选：否
<li>template-name</li>按照【防火墙模版所属的名称】进行过滤。
类型：String
必选：否
<li>template-type</li>按照【防火墙模版的类型】进行过滤。
类型：String
必选：否
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 TemplateIds 和 Filters。
 * @method void setFilters(array $Filters) 设置过滤器列表。
<li>template-id</li>按照【防火墙模版所属的ID】进行过滤。
类型：String
必选：否
<li>template-name</li>按照【防火墙模版所属的名称】进行过滤。
类型：String
必选：否
<li>template-type</li>按照【防火墙模版的类型】进行过滤。
类型：String
必选：否
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 TemplateIds 和 Filters。
 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 */
class DescribeFirewallTemplatesRequest extends AbstractModel
{
    /**
     * @var array 防火墙模板ID列表。
     */
    public $TemplateIds;

    /**
     * @var array 过滤器列表。
<li>template-id</li>按照【防火墙模版所属的ID】进行过滤。
类型：String
必选：否
<li>template-name</li>按照【防火墙模版所属的名称】进行过滤。
类型：String
必选：否
<li>template-type</li>按照【防火墙模版的类型】进行过滤。
类型：String
必选：否
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 TemplateIds 和 Filters。
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @param array $TemplateIds 防火墙模板ID列表。
     * @param array $Filters 过滤器列表。
<li>template-id</li>按照【防火墙模版所属的ID】进行过滤。
类型：String
必选：否
<li>template-name</li>按照【防火墙模版所属的名称】进行过滤。
类型：String
必选：否
<li>template-type</li>按照【防火墙模版的类型】进行过滤。
类型：String
必选：否
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 TemplateIds 和 Filters。
     * @param integer $Offset 偏移量，默认为 0。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
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
        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
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

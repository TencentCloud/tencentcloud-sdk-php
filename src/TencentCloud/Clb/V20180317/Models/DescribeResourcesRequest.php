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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResources请求参数结构体
 *
 * @method integer getLimit() 获取返回可用区资源列表数目，默认20，最大值100。
 * @method void setLimit(integer $Limit) 设置返回可用区资源列表数目，默认20，最大值100。
 * @method integer getOffset() 获取返回可用区资源列表起始偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置返回可用区资源列表起始偏移量，默认0。
 * @method array getFilters() 获取查询可用区资源列表条件，详细的过滤条件如下：
<li> zone - String - 是否必填：否 - （过滤条件）按照 可用区 过滤，如："ap-guangzhou-1"（广州一区）。</li>
<li> isp -- String - 是否必填：否 - （过滤条件）按照 Isp 类型过滤，如："BGP","CMCC","CUCC","CTCC"。</li>
 * @method void setFilters(array $Filters) 设置查询可用区资源列表条件，详细的过滤条件如下：
<li> zone - String - 是否必填：否 - （过滤条件）按照 可用区 过滤，如："ap-guangzhou-1"（广州一区）。</li>
<li> isp -- String - 是否必填：否 - （过滤条件）按照 Isp 类型过滤，如："BGP","CMCC","CUCC","CTCC"。</li>
 */
class DescribeResourcesRequest extends AbstractModel
{
    /**
     * @var integer 返回可用区资源列表数目，默认20，最大值100。
     */
    public $Limit;

    /**
     * @var integer 返回可用区资源列表起始偏移量，默认0。
     */
    public $Offset;

    /**
     * @var array 查询可用区资源列表条件，详细的过滤条件如下：
<li> zone - String - 是否必填：否 - （过滤条件）按照 可用区 过滤，如："ap-guangzhou-1"（广州一区）。</li>
<li> isp -- String - 是否必填：否 - （过滤条件）按照 Isp 类型过滤，如："BGP","CMCC","CUCC","CTCC"。</li>
     */
    public $Filters;

    /**
     * @param integer $Limit 返回可用区资源列表数目，默认20，最大值100。
     * @param integer $Offset 返回可用区资源列表起始偏移量，默认0。
     * @param array $Filters 查询可用区资源列表条件，详细的过滤条件如下：
<li> zone - String - 是否必填：否 - （过滤条件）按照 可用区 过滤，如："ap-guangzhou-1"（广州一区）。</li>
<li> isp -- String - 是否必填：否 - （过滤条件）按照 Isp 类型过滤，如："BGP","CMCC","CUCC","CTCC"。</li>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

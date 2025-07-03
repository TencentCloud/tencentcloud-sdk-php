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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeComputeEnvs请求参数结构体
 *
 * @method array getEnvIds() 获取计算环境ID列表，与Filters参数不能同时指定。最大数量上限100。
 * @method void setEnvIds(array $EnvIds) 设置计算环境ID列表，与Filters参数不能同时指定。最大数量上限100。
 * @method array getFilters() 获取过滤条件<li> zone - String - 是否必填：否 -（过滤条件）按照可用区过滤，可用区通过调用接口 [DescribeZones](https://cloud.tencent.com/document/api/213/15707)获取。</li><li> env-id - String - 是否必填：否 -（过滤条件）按照计算环境ID过滤。</li><li> env-name - String - 是否必填：否 -（过滤条件）按照计算环境名称过滤。</li><li> resource-type - String - 是否必填：否 -（过滤条件）按照计算资源类型过滤，取值CVM或者CPM(黑石)。</li><li> tag-key - String - 是否必填：否 -（过滤条件）按照标签键进行过滤。</li><li>tag-value - String - 是否必填：否 -（过滤条件）按照标签值进行过滤。</li><li>tag:tag-key - String - 是否必填：否 -（过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</li>与EnvIds参数不能同时指定。
 * @method void setFilters(array $Filters) 设置过滤条件<li> zone - String - 是否必填：否 -（过滤条件）按照可用区过滤，可用区通过调用接口 [DescribeZones](https://cloud.tencent.com/document/api/213/15707)获取。</li><li> env-id - String - 是否必填：否 -（过滤条件）按照计算环境ID过滤。</li><li> env-name - String - 是否必填：否 -（过滤条件）按照计算环境名称过滤。</li><li> resource-type - String - 是否必填：否 -（过滤条件）按照计算资源类型过滤，取值CVM或者CPM(黑石)。</li><li> tag-key - String - 是否必填：否 -（过滤条件）按照标签键进行过滤。</li><li>tag-value - String - 是否必填：否 -（过滤条件）按照标签值进行过滤。</li><li>tag:tag-key - String - 是否必填：否 -（过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</li>与EnvIds参数不能同时指定。
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回数量，默认值20，最大值100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认值20，最大值100。
 */
class DescribeComputeEnvsRequest extends AbstractModel
{
    /**
     * @var array 计算环境ID列表，与Filters参数不能同时指定。最大数量上限100。
     */
    public $EnvIds;

    /**
     * @var array 过滤条件<li> zone - String - 是否必填：否 -（过滤条件）按照可用区过滤，可用区通过调用接口 [DescribeZones](https://cloud.tencent.com/document/api/213/15707)获取。</li><li> env-id - String - 是否必填：否 -（过滤条件）按照计算环境ID过滤。</li><li> env-name - String - 是否必填：否 -（过滤条件）按照计算环境名称过滤。</li><li> resource-type - String - 是否必填：否 -（过滤条件）按照计算资源类型过滤，取值CVM或者CPM(黑石)。</li><li> tag-key - String - 是否必填：否 -（过滤条件）按照标签键进行过滤。</li><li>tag-value - String - 是否必填：否 -（过滤条件）按照标签值进行过滤。</li><li>tag:tag-key - String - 是否必填：否 -（过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</li>与EnvIds参数不能同时指定。
     */
    public $Filters;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认值20，最大值100。
     */
    public $Limit;

    /**
     * @param array $EnvIds 计算环境ID列表，与Filters参数不能同时指定。最大数量上限100。
     * @param array $Filters 过滤条件<li> zone - String - 是否必填：否 -（过滤条件）按照可用区过滤，可用区通过调用接口 [DescribeZones](https://cloud.tencent.com/document/api/213/15707)获取。</li><li> env-id - String - 是否必填：否 -（过滤条件）按照计算环境ID过滤。</li><li> env-name - String - 是否必填：否 -（过滤条件）按照计算环境名称过滤。</li><li> resource-type - String - 是否必填：否 -（过滤条件）按照计算资源类型过滤，取值CVM或者CPM(黑石)。</li><li> tag-key - String - 是否必填：否 -（过滤条件）按照标签键进行过滤。</li><li>tag-value - String - 是否必填：否 -（过滤条件）按照标签值进行过滤。</li><li>tag:tag-key - String - 是否必填：否 -（过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</li>与EnvIds参数不能同时指定。
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回数量，默认值20，最大值100。
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
        if (array_key_exists("EnvIds",$param) and $param["EnvIds"] !== null) {
            $this->EnvIds = $param["EnvIds"];
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

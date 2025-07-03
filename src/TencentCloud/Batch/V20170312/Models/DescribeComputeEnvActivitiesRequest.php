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
 * DescribeComputeEnvActivities请求参数结构体
 *
 * @method string getEnvId() 获取计算环境ID，环境ID通过调用接口 [DescribeComputeEnvs](https://cloud.tencent.com/document/api/599/15893)获取。
 * @method void setEnvId(string $EnvId) 设置计算环境ID，环境ID通过调用接口 [DescribeComputeEnvs](https://cloud.tencent.com/document/api/599/15893)获取。
 * @method integer getOffset() 获取偏移量，默认为0.
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0.
 * @method integer getLimit() 获取返回数量，默认值20，最大值100.
 * @method void setLimit(integer $Limit) 设置返回数量，默认值20，最大值100.
 * @method Filter getFilters() 获取过滤条件<li> compute-node-id - String - 是否必填：否 -（过滤条件）按照计算节点ID过滤，节点ID通过调用接口 [DescribeComputeEnv](https://cloud.tencent.com/document/api/599/15892)获取。</li>
 * @method void setFilters(Filter $Filters) 设置过滤条件<li> compute-node-id - String - 是否必填：否 -（过滤条件）按照计算节点ID过滤，节点ID通过调用接口 [DescribeComputeEnv](https://cloud.tencent.com/document/api/599/15892)获取。</li>
 */
class DescribeComputeEnvActivitiesRequest extends AbstractModel
{
    /**
     * @var string 计算环境ID，环境ID通过调用接口 [DescribeComputeEnvs](https://cloud.tencent.com/document/api/599/15893)获取。
     */
    public $EnvId;

    /**
     * @var integer 偏移量，默认为0.
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认值20，最大值100.
     */
    public $Limit;

    /**
     * @var Filter 过滤条件<li> compute-node-id - String - 是否必填：否 -（过滤条件）按照计算节点ID过滤，节点ID通过调用接口 [DescribeComputeEnv](https://cloud.tencent.com/document/api/599/15892)获取。</li>
     */
    public $Filters;

    /**
     * @param string $EnvId 计算环境ID，环境ID通过调用接口 [DescribeComputeEnvs](https://cloud.tencent.com/document/api/599/15893)获取。
     * @param integer $Offset 偏移量，默认为0.
     * @param integer $Limit 返回数量，默认值20，最大值100.
     * @param Filter $Filters 过滤条件<li> compute-node-id - String - 是否必填：否 -（过滤条件）按照计算节点ID过滤，节点ID通过调用接口 [DescribeComputeEnv](https://cloud.tencent.com/document/api/599/15892)获取。</li>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }
    }
}

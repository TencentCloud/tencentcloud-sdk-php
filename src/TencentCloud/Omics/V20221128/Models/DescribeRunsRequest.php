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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuns请求参数结构体
 *
 * @method string getProjectId() 获取项目ID。
（不填使用指定地域下的默认项目）
 * @method void setProjectId(string $ProjectId) 设置项目ID。
（不填使用指定地域下的默认项目）
 * @method integer getLimit() 获取返回数量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤器，支持过滤字段：
- RunGroupId：任务批次ID
- Status：任务状态
- RunUuid：任务UUID
- ApplicationId：应用ID
- UserDefinedId：用户定义ID（批量运行表格第一列）
 * @method void setFilters(array $Filters) 设置过滤器，支持过滤字段：
- RunGroupId：任务批次ID
- Status：任务状态
- RunUuid：任务UUID
- ApplicationId：应用ID
- UserDefinedId：用户定义ID（批量运行表格第一列）
 */
class DescribeRunsRequest extends AbstractModel
{
    /**
     * @var string 项目ID。
（不填使用指定地域下的默认项目）
     */
    public $ProjectId;

    /**
     * @var integer 返回数量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤器，支持过滤字段：
- RunGroupId：任务批次ID
- Status：任务状态
- RunUuid：任务UUID
- ApplicationId：应用ID
- UserDefinedId：用户定义ID（批量运行表格第一列）
     */
    public $Filters;

    /**
     * @param string $ProjectId 项目ID。
（不填使用指定地域下的默认项目）
     * @param integer $Limit 返回数量，默认为10，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤器，支持过滤字段：
- RunGroupId：任务批次ID
- Status：任务状态
- RunUuid：任务UUID
- ApplicationId：应用ID
- UserDefinedId：用户定义ID（批量运行表格第一列）
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

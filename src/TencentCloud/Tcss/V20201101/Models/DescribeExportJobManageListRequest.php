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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExportJobManageList请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。
<li>ExportStatus- string -是否必填: 否 - 导出状态 RUNNING: 导出中 SUCCESS:导出完成 FAILURE:失败
</li>
<li>ExportSource- string -是否必填: 否 - 导出来源 LocalImage: 本地镜像 RegistryImage: 仓库镜像
</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>ExportStatus- string -是否必填: 否 - 导出状态 RUNNING: 导出中 SUCCESS:导出完成 FAILURE:失败
</li>
<li>ExportSource- string -是否必填: 否 - 导出来源 LocalImage: 本地镜像 RegistryImage: 仓库镜像
</li>
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method string getOrder() 获取排序方式
 * @method void setOrder(string $Order) 设置排序方式
 * @method string getBy() 获取排序字段
InsertTime: 创建时间
 * @method void setBy(string $By) 设置排序字段
InsertTime: 创建时间
 */
class DescribeExportJobManageListRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。
<li>ExportStatus- string -是否必填: 否 - 导出状态 RUNNING: 导出中 SUCCESS:导出完成 FAILURE:失败
</li>
<li>ExportSource- string -是否必填: 否 - 导出来源 LocalImage: 本地镜像 RegistryImage: 仓库镜像
</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var string 排序方式
     */
    public $Order;

    /**
     * @var string 排序字段
InsertTime: 创建时间
     */
    public $By;

    /**
     * @param array $Filters 过滤条件。
<li>ExportStatus- string -是否必填: 否 - 导出状态 RUNNING: 导出中 SUCCESS:导出完成 FAILURE:失败
</li>
<li>ExportSource- string -是否必填: 否 - 导出来源 LocalImage: 本地镜像 RegistryImage: 仓库镜像
</li>
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param string $Order 排序方式
     * @param string $By 排序字段
InsertTime: 创建时间
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
                $obj = new RunTimeFilters();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}

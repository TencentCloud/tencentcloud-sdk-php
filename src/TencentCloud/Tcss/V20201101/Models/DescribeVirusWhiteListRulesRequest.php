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
 * DescribeVirusWhiteListRules请求参数结构体
 *
 * @method integer getLimit() 获取<p>分页大小，默认为10</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小，默认为10</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认为0</p>
 * @method string getOrder() 获取<p>排序方向，ASC/DESC，默认DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序方向，ASC/DESC，默认DESC</p>
 * @method string getBy() 获取<p>排序字段，支持 InsertTime/UpdateTime</p>
 * @method void setBy(string $By) 设置<p>排序字段，支持 InsertTime/UpdateTime</p>
 * @method array getFilters() 获取<p>过滤</p>
 * @method void setFilters(array $Filters) 设置<p>过滤</p>
 */
class DescribeVirusWhiteListRulesRequest extends AbstractModel
{
    /**
     * @var integer <p>分页大小，默认为10</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var string <p>排序方向，ASC/DESC，默认DESC</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段，支持 InsertTime/UpdateTime</p>
     */
    public $By;

    /**
     * @var array <p>过滤</p>
     */
    public $Filters;

    /**
     * @param integer $Limit <p>分页大小，默认为10</p>
     * @param integer $Offset <p>分页偏移量，默认为0</p>
     * @param string $Order <p>排序方向，ASC/DESC，默认DESC</p>
     * @param string $By <p>排序字段，支持 InsertTime/UpdateTime</p>
     * @param array $Filters <p>过滤</p>
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

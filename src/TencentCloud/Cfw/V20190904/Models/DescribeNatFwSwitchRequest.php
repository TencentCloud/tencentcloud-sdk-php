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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatFwSwitch请求参数结构体
 *
 * @method integer getOffset() 获取<p>偏移量，分页用</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，分页用</p>
 * @method integer getLimit() 获取<p>条数，分页用</p>
 * @method void setLimit(integer $Limit) 设置<p>条数，分页用</p>
 * @method array getFilters() 获取<p>过滤条件组合</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件组合</p>
 * @method string getOrder() 获取<p>desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值</p>
 * @method void setOrder(string $Order) 设置<p>desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值</p>
 * @method string getBy() 获取<p>排序所用到的字段</p>
 * @method void setBy(string $By) 设置<p>排序所用到的字段</p>
 */
class DescribeNatFwSwitchRequest extends AbstractModel
{
    /**
     * @var integer <p>偏移量，分页用</p>
     */
    public $Offset;

    /**
     * @var integer <p>条数，分页用</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件组合</p>
     */
    public $Filters;

    /**
     * @var string <p>desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值</p>
     */
    public $Order;

    /**
     * @var string <p>排序所用到的字段</p>
     */
    public $By;

    /**
     * @param integer $Offset <p>偏移量，分页用</p>
     * @param integer $Limit <p>条数，分页用</p>
     * @param array $Filters <p>过滤条件组合</p>
     * @param string $Order <p>desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值</p>
     * @param string $By <p>排序所用到的字段</p>
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
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}

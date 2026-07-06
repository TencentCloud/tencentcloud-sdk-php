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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStrategies请求参数结构体
 *
 * @method string getProduct() 获取产品类型
 * @method void setProduct(string $Product) 设置产品类型
 * @method string getExecArea() 获取执行区域：pre是前区，post 是后区
 * @method void setExecArea(string $ExecArea) 设置执行区域：pre是前区，post 是后区
 * @method array getFilters() 获取筛选条件
 * @method void setFilters(array $Filters) 设置筛选条件
 * @method integer getLimit() 获取条数限制
 * @method void setLimit(integer $Limit) 设置条数限制
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 */
class DescribeStrategiesRequest extends AbstractModel
{
    /**
     * @var string 产品类型
     */
    public $Product;

    /**
     * @var string 执行区域：pre是前区，post 是后区
     */
    public $ExecArea;

    /**
     * @var array 筛选条件
     */
    public $Filters;

    /**
     * @var integer 条数限制
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @param string $Product 产品类型
     * @param string $ExecArea 执行区域：pre是前区，post 是后区
     * @param array $Filters 筛选条件
     * @param integer $Limit 条数限制
     * @param integer $Offset 偏移量
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ExecArea",$param) and $param["ExecArea"] !== null) {
            $this->ExecArea = $param["ExecArea"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
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

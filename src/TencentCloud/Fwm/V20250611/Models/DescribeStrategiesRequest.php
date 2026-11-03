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
 * @method string getProduct() 获取<p>产品类型</p>
 * @method void setProduct(string $Product) 设置<p>产品类型</p>
 * @method string getExecArea() 获取<p>执行区域：pre是前区，post 是后区</p>
 * @method void setExecArea(string $ExecArea) 设置<p>执行区域：pre是前区，post 是后区</p>
 * @method array getFilters() 获取<p>筛选条件</p>
 * @method void setFilters(array $Filters) 设置<p>筛选条件</p>
 * @method integer getLimit() 获取<p>条数限制</p>
 * @method void setLimit(integer $Limit) 设置<p>条数限制</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 */
class DescribeStrategiesRequest extends AbstractModel
{
    /**
     * @var string <p>产品类型</p>
     */
    public $Product;

    /**
     * @var string <p>执行区域：pre是前区，post 是后区</p>
     */
    public $ExecArea;

    /**
     * @var array <p>筛选条件</p>
     */
    public $Filters;

    /**
     * @var integer <p>条数限制</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @param string $Product <p>产品类型</p>
     * @param string $ExecArea <p>执行区域：pre是前区，post 是后区</p>
     * @param array $Filters <p>筛选条件</p>
     * @param integer $Limit <p>条数限制</p>
     * @param integer $Offset <p>偏移量</p>
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

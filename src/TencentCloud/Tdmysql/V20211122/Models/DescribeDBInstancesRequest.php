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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances请求参数结构体
 *
 * @method array getFilters() 获取<p>过滤参数</p>
 * @method void setFilters(array $Filters) 设置<p>过滤参数</p>
 * @method integer getLimit() 获取<p>最大返回个数，默认为20，上限为100</p>
 * @method void setLimit(integer $Limit) 设置<p>最大返回个数，默认为20，上限为100</p>
 * @method integer getOffset() 获取<p>偏移量，取Limit整数倍</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，取Limit整数倍</p>
 * @method string getEngineType() 获取<p>指定查询引擎类型</p><p>枚举值：</p><ul><li>libra： 列存引擎</li></ul>
 * @method void setEngineType(string $EngineType) 设置<p>指定查询引擎类型</p><p>枚举值：</p><ul><li>libra： 列存引擎</li></ul>
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>过滤参数</p>
     */
    public $Filters;

    /**
     * @var integer <p>最大返回个数，默认为20，上限为100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，取Limit整数倍</p>
     */
    public $Offset;

    /**
     * @var string <p>指定查询引擎类型</p><p>枚举值：</p><ul><li>libra： 列存引擎</li></ul>
     */
    public $EngineType;

    /**
     * @param array $Filters <p>过滤参数</p>
     * @param integer $Limit <p>最大返回个数，默认为20，上限为100</p>
     * @param integer $Offset <p>偏移量，取Limit整数倍</p>
     * @param string $EngineType <p>指定查询引擎类型</p><p>枚举值：</p><ul><li>libra： 列存引擎</li></ul>
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
                $obj = new InstanceFilter();
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

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}

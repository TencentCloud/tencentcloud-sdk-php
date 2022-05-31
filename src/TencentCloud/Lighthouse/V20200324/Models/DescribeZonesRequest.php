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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZones请求参数结构体
 *
 * @method string getOrderField() 获取可用区列表排序的依据字段。取值范围：
<li>ZONE：依据可用区排序。
<li>INSTANCE_DISPLAY_LABEL：依据可用区展示标签排序，可用区展示标签包括：HIDDEN（隐藏）、NORMAL（普通）、SELECTED（默认选中），默认采用的升序排列为：['HIDDEN', 'NORMAL', 'SELECTED']。
默认按可用区排序。
 * @method void setOrderField(string $OrderField) 设置可用区列表排序的依据字段。取值范围：
<li>ZONE：依据可用区排序。
<li>INSTANCE_DISPLAY_LABEL：依据可用区展示标签排序，可用区展示标签包括：HIDDEN（隐藏）、NORMAL（普通）、SELECTED（默认选中），默认采用的升序排列为：['HIDDEN', 'NORMAL', 'SELECTED']。
默认按可用区排序。
 * @method string getOrder() 获取输出可用区列表的排列顺序。取值范围：
<li>ASC：升序排列。 
<li>DESC：降序排列。
默认按升序排列。
 * @method void setOrder(string $Order) 设置输出可用区列表的排列顺序。取值范围：
<li>ASC：升序排列。 
<li>DESC：降序排列。
默认按升序排列。
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var string 可用区列表排序的依据字段。取值范围：
<li>ZONE：依据可用区排序。
<li>INSTANCE_DISPLAY_LABEL：依据可用区展示标签排序，可用区展示标签包括：HIDDEN（隐藏）、NORMAL（普通）、SELECTED（默认选中），默认采用的升序排列为：['HIDDEN', 'NORMAL', 'SELECTED']。
默认按可用区排序。
     */
    public $OrderField;

    /**
     * @var string 输出可用区列表的排列顺序。取值范围：
<li>ASC：升序排列。 
<li>DESC：降序排列。
默认按升序排列。
     */
    public $Order;

    /**
     * @param string $OrderField 可用区列表排序的依据字段。取值范围：
<li>ZONE：依据可用区排序。
<li>INSTANCE_DISPLAY_LABEL：依据可用区展示标签排序，可用区展示标签包括：HIDDEN（隐藏）、NORMAL（普通）、SELECTED（默认选中），默认采用的升序排列为：['HIDDEN', 'NORMAL', 'SELECTED']。
默认按可用区排序。
     * @param string $Order 输出可用区列表的排列顺序。取值范围：
<li>ASC：升序排列。 
<li>DESC：降序排列。
默认按升序排列。
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
        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}

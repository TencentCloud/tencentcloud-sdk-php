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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProtectGroup请求参数结构体
 *
 * @method array getFilter() 获取查询防护对象的查询条件，如果为空则获取所有的防护对象组，支持按照 Name：对象组名称、Domain：绑定的域名、InstanceID：实例ID、ID：对象组ID、InstanceName：实例名称
 * @method void setFilter(array $Filter) 设置查询防护对象的查询条件，如果为空则获取所有的防护对象组，支持按照 Name：对象组名称、Domain：绑定的域名、InstanceID：实例ID、ID：对象组ID、InstanceName：实例名称
 * @method integer getOffSet() 获取偏移量，默认为0
 * @method void setOffSet(integer $OffSet) 设置偏移量，默认为0
 * @method integer getLimit() 获取页尺寸，默认为10
 * @method void setLimit(integer $Limit) 设置页尺寸，默认为10
 * @method string getBy() 获取排序字段，支持按照 "update_time"-更新时间、"create_time"-创建时间
 * @method void setBy(string $By) 设置排序字段，支持按照 "update_time"-更新时间、"create_time"-创建时间
 * @method string getOrder() 获取排序类型desc-降序、asc-升序
 * @method void setOrder(string $Order) 设置排序类型desc-降序、asc-升序
 */
class DescribeProtectGroupRequest extends AbstractModel
{
    /**
     * @var array 查询防护对象的查询条件，如果为空则获取所有的防护对象组，支持按照 Name：对象组名称、Domain：绑定的域名、InstanceID：实例ID、ID：对象组ID、InstanceName：实例名称
     */
    public $Filter;

    /**
     * @var integer 偏移量，默认为0
     */
    public $OffSet;

    /**
     * @var integer 页尺寸，默认为10
     */
    public $Limit;

    /**
     * @var string 排序字段，支持按照 "update_time"-更新时间、"create_time"-创建时间
     */
    public $By;

    /**
     * @var string 排序类型desc-降序、asc-升序
     */
    public $Order;

    /**
     * @param array $Filter 查询防护对象的查询条件，如果为空则获取所有的防护对象组，支持按照 Name：对象组名称、Domain：绑定的域名、InstanceID：实例ID、ID：对象组ID、InstanceName：实例名称
     * @param integer $OffSet 偏移量，默认为0
     * @param integer $Limit 页尺寸，默认为10
     * @param string $By 排序字段，支持按照 "update_time"-更新时间、"create_time"-创建时间
     * @param string $Order 排序类型desc-降序、asc-升序
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("OffSet",$param) and $param["OffSet"] !== null) {
            $this->OffSet = $param["OffSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}

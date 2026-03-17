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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAttackType请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。
<li>Source - String - 是否必填：是 - 加白的模块，rasp：漏洞防御，memshell_inject：内存马注入</li>

 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Source - String - 是否必填：是 - 加白的模块，rasp：漏洞防御，memshell_inject：内存马注入</li>

 * @method integer getLimit() 获取返回数量，默认为10，最大值为1000。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为1000。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getBy() 获取排序字段，目前有：Id，默认按照Id排序，可以不传
 * @method void setBy(string $By) 设置排序字段，目前有：Id，默认按照Id排序，可以不传
 * @method string getOrder() 获取排序升序还是倒序，DESC有ASC、
 * @method void setOrder(string $Order) 设置排序升序还是倒序，DESC有ASC、
 */
class DescribeAttackTypeRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。
<li>Source - String - 是否必填：是 - 加白的模块，rasp：漏洞防御，memshell_inject：内存马注入</li>

     */
    public $Filters;

    /**
     * @var integer 返回数量，默认为10，最大值为1000。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 排序字段，目前有：Id，默认按照Id排序，可以不传
     */
    public $By;

    /**
     * @var string 排序升序还是倒序，DESC有ASC、
     */
    public $Order;

    /**
     * @param array $Filters 过滤条件。
<li>Source - String - 是否必填：是 - 加白的模块，rasp：漏洞防御，memshell_inject：内存马注入</li>

     * @param integer $Limit 返回数量，默认为10，最大值为1000。
     * @param integer $Offset 偏移量，默认为0。
     * @param string $By 排序字段，目前有：Id，默认按照Id排序，可以不传
     * @param string $Order 排序升序还是倒序，DESC有ASC、
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
                $obj = new Filter();
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

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}

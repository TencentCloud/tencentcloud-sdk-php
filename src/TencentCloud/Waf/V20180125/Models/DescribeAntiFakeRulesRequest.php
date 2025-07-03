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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAntiFakeRules请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 * @method integer getLimit() 获取容量
 * @method void setLimit(integer $Limit) 设置容量
 * @method array getFilters() 获取过滤数组,name可以是如下的值： RuleID,ParamName,Url,Action,Method,Source,Status
 * @method void setFilters(array $Filters) 设置过滤数组,name可以是如下的值： RuleID,ParamName,Url,Action,Method,Source,Status
 * @method string getOrder() 获取asc或者desc
 * @method void setOrder(string $Order) 设置asc或者desc
 * @method string getBy() 获取目前支持根据create_time、modify_time、id排序
 * @method void setBy(string $By) 设置目前支持根据create_time、modify_time、id排序
 */
class DescribeAntiFakeRulesRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @var integer 容量
     */
    public $Limit;

    /**
     * @var array 过滤数组,name可以是如下的值： RuleID,ParamName,Url,Action,Method,Source,Status
     */
    public $Filters;

    /**
     * @var string asc或者desc
     */
    public $Order;

    /**
     * @var string 目前支持根据create_time、modify_time、id排序
     */
    public $By;

    /**
     * @param string $Domain 域名
     * @param integer $Offset 偏移
     * @param integer $Limit 容量
     * @param array $Filters 过滤数组,name可以是如下的值： RuleID,ParamName,Url,Action,Method,Source,Status
     * @param string $Order asc或者desc
     * @param string $By 目前支持根据create_time、modify_time、id排序
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
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
                $obj = new FiltersItemNew();
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

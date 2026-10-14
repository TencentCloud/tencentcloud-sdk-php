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
 * DescribeLLMSdkAccess请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getOffset() 获取分页的起始位置
 * @method void setOffset(integer $Offset) 设置分页的起始位置
 * @method integer getLimit() 获取每页行数
 * @method void setLimit(integer $Limit) 设置每页行数
 * @method array getFilters() 获取过滤器
 * @method void setFilters(array $Filters) 设置过滤器
 * @method string getBy() 获取支持根据ts排序
 * @method void setBy(string $By) 设置支持根据ts排序
 * @method string getOrder() 获取asc或者desc
 * @method void setOrder(string $Order) 设置asc或者desc
 */
class DescribeLLMSdkAccessRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 分页的起始位置
     */
    public $Offset;

    /**
     * @var integer 每页行数
     */
    public $Limit;

    /**
     * @var array 过滤器
     */
    public $Filters;

    /**
     * @var string 支持根据ts排序
     */
    public $By;

    /**
     * @var string asc或者desc
     */
    public $Order;

    /**
     * @param string $InstanceId 实例id
     * @param integer $Offset 分页的起始位置
     * @param integer $Limit 每页行数
     * @param array $Filters 过滤器
     * @param string $By 支持根据ts排序
     * @param string $Order asc或者desc
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}

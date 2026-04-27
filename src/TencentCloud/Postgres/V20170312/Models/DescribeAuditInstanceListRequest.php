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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditInstanceList请求参数结构体
 *
 * @method string getProduct() 获取<p>产品名称：postgres</p>
 * @method void setProduct(string $Product) 设置<p>产品名称：postgres</p>
 * @method integer getAuditSwitch() 获取<p>是否开通</p><p>枚举值：</p><ul><li>0： 未开通</li><li>1： 已开通</li></ul>
 * @method void setAuditSwitch(integer $AuditSwitch) 设置<p>是否开通</p><p>枚举值：</p><ul><li>0： 未开通</li><li>1： 已开通</li></ul>
 * @method integer getLimit() 获取<p>分页限制</p>
 * @method void setLimit(integer $Limit) 设置<p>分页限制</p>
 * @method integer getOffset() 获取<p>页偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>页偏移量</p>
 * @method array getFilters() 获取<p>实例过滤参数</p><p>入参限制：支持过滤条件：InstanceId-实例ID,InstanceName-实例名称</p>
 * @method void setFilters(array $Filters) 设置<p>实例过滤参数</p><p>入参限制：支持过滤条件：InstanceId-实例ID,InstanceName-实例名称</p>
 */
class DescribeAuditInstanceListRequest extends AbstractModel
{
    /**
     * @var string <p>产品名称：postgres</p>
     */
    public $Product;

    /**
     * @var integer <p>是否开通</p><p>枚举值：</p><ul><li>0： 未开通</li><li>1： 已开通</li></ul>
     */
    public $AuditSwitch;

    /**
     * @var integer <p>分页限制</p>
     */
    public $Limit;

    /**
     * @var integer <p>页偏移量</p>
     */
    public $Offset;

    /**
     * @var array <p>实例过滤参数</p><p>入参限制：支持过滤条件：InstanceId-实例ID,InstanceName-实例名称</p>
     */
    public $Filters;

    /**
     * @param string $Product <p>产品名称：postgres</p>
     * @param integer $AuditSwitch <p>是否开通</p><p>枚举值：</p><ul><li>0： 未开通</li><li>1： 已开通</li></ul>
     * @param integer $Limit <p>分页限制</p>
     * @param integer $Offset <p>页偏移量</p>
     * @param array $Filters <p>实例过滤参数</p><p>入参限制：支持过滤条件：InstanceId-实例ID,InstanceName-实例名称</p>
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

        if (array_key_exists("AuditSwitch",$param) and $param["AuditSwitch"] !== null) {
            $this->AuditSwitch = $param["AuditSwitch"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

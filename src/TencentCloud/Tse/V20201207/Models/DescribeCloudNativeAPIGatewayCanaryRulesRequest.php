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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayCanaryRules请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关ID</p>
 * @method string getServiceId() 获取<p>服务 ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务 ID</p>
 * @method string getRuleType() 获取<p>灰度规则类别 Standard｜Lane</p>
 * @method void setRuleType(string $RuleType) 设置<p>灰度规则类别 Standard｜Lane</p>
 * @method integer getLimit() 获取<p>列表数量</p>
 * @method void setLimit(integer $Limit) 设置<p>列表数量</p>
 * @method integer getOffset() 获取<p>列表offset</p>
 * @method void setOffset(integer $Offset) 设置<p>列表offset</p>
 * @method string getOrderField() 获取<p>排序参数</p><p>枚举值：</p><ul><li>Priority： 优先级</li></ul>
 * @method void setOrderField(string $OrderField) 设置<p>排序参数</p><p>枚举值：</p><ul><li>Priority： 优先级</li></ul>
 * @method string getOrderType() 获取<p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序</li><li>ASC： 升序</li></ul>
 * @method void setOrderType(string $OrderType) 设置<p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序</li><li>ASC： 升序</li></ul>
 * @method array getFilters() 获取<p>过滤条件，多个过滤条件之间是与的关系，支持 Header,Query,Body,Cookie,System,Method,Path,ServiceID,ServiceName</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，多个过滤条件之间是与的关系，支持 Header,Query,Body,Cookie,System,Method,Path,ServiceID,ServiceName</p>
 */
class DescribeCloudNativeAPIGatewayCanaryRulesRequest extends AbstractModel
{
    /**
     * @var string <p>网关ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>服务 ID</p>
     */
    public $ServiceId;

    /**
     * @var string <p>灰度规则类别 Standard｜Lane</p>
     */
    public $RuleType;

    /**
     * @var integer <p>列表数量</p>
     */
    public $Limit;

    /**
     * @var integer <p>列表offset</p>
     */
    public $Offset;

    /**
     * @var string <p>排序参数</p><p>枚举值：</p><ul><li>Priority： 优先级</li></ul>
     */
    public $OrderField;

    /**
     * @var string <p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序</li><li>ASC： 升序</li></ul>
     */
    public $OrderType;

    /**
     * @var array <p>过滤条件，多个过滤条件之间是与的关系，支持 Header,Query,Body,Cookie,System,Method,Path,ServiceID,ServiceName</p>
     */
    public $Filters;

    /**
     * @param string $GatewayId <p>网关ID</p>
     * @param string $ServiceId <p>服务 ID</p>
     * @param string $RuleType <p>灰度规则类别 Standard｜Lane</p>
     * @param integer $Limit <p>列表数量</p>
     * @param integer $Offset <p>列表offset</p>
     * @param string $OrderField <p>排序参数</p><p>枚举值：</p><ul><li>Priority： 优先级</li></ul>
     * @param string $OrderType <p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序</li><li>ASC： 升序</li></ul>
     * @param array $Filters <p>过滤条件，多个过滤条件之间是与的关系，支持 Header,Query,Body,Cookie,System,Method,Path,ServiceID,ServiceName</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ListFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

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
 * ExportRiskDnsPolicyList请求参数结构体
 *
 * @method array getFilters() 获取<li>PolicyType - int - 是否必填：否 - 策略类型</li>
<li>PolicyName - string - 是否必填：否 - 策略名称</li>
<li>Domain - string - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li>
<li>PolicyAction- int - 是否必填：否 - 策略动作</li>
<li>IsEnabled - int - 是否必填：否 - 是否生效</li>
 * @method void setFilters(array $Filters) 设置<li>PolicyType - int - 是否必填：否 - 策略类型</li>
<li>PolicyName - string - 是否必填：否 - 策略名称</li>
<li>Domain - string - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li>
<li>PolicyAction- int - 是否必填：否 - 策略动作</li>
<li>IsEnabled - int - 是否必填：否 - 是否生效</li>
 * @method string getOrder() 获取排序方式: [ASC:升序|DESC:降序]
 * @method void setOrder(string $Order) 设置排序方式: [ASC:升序|DESC:降序]
 * @method string getBy() 获取可选排序列: [PolicyName|HostType]
 * @method void setBy(string $By) 设置可选排序列: [PolicyName|HostType]
 */
class ExportRiskDnsPolicyListRequest extends AbstractModel
{
    /**
     * @var array <li>PolicyType - int - 是否必填：否 - 策略类型</li>
<li>PolicyName - string - 是否必填：否 - 策略名称</li>
<li>Domain - string - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li>
<li>PolicyAction- int - 是否必填：否 - 策略动作</li>
<li>IsEnabled - int - 是否必填：否 - 是否生效</li>
     */
    public $Filters;

    /**
     * @var string 排序方式: [ASC:升序|DESC:降序]
     */
    public $Order;

    /**
     * @var string 可选排序列: [PolicyName|HostType]
     */
    public $By;

    /**
     * @param array $Filters <li>PolicyType - int - 是否必填：否 - 策略类型</li>
<li>PolicyName - string - 是否必填：否 - 策略名称</li>
<li>Domain - string - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li>
<li>PolicyAction- int - 是否必填：否 - 策略动作</li>
<li>IsEnabled - int - 是否必填：否 - 是否生效</li>
     * @param string $Order 排序方式: [ASC:升序|DESC:降序]
     * @param string $By 可选排序列: [PolicyName|HostType]
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}

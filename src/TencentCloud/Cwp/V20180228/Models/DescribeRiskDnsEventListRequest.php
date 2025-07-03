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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskDnsEventList请求参数结构体
 *
 * @method array getFilters() 获取<li>MachineName  主机名称



InstanceID  实例ID  

 

IP   内网IP或公网IP- 是否必填：否 - 主机Ip或别名筛选</li>
<li>HostId - String - 是否必填：否 - 主机Id</li>
<li>AgentId - String - 是否必填：否 - 客户端Id</li>
<li>PolicyType - String - 是否必填：否 - 策略类型,0:系统策略1:用户自定义策略</li>
<li>Domain - String - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li>
<li>HandleStatus - String - 是否必填：否 - 状态筛选0:待处理；2:信任；3:不信任</li>
<li>BeginTime - String - 是否必填：否 - 最近访问开始时间</li>
<li>EndTime - String - 是否必填：否 - 最近访问结束时间</li>
 * @method void setFilters(array $Filters) 设置<li>MachineName  主机名称



InstanceID  实例ID  

 

IP   内网IP或公网IP- 是否必填：否 - 主机Ip或别名筛选</li>
<li>HostId - String - 是否必填：否 - 主机Id</li>
<li>AgentId - String - 是否必填：否 - 客户端Id</li>
<li>PolicyType - String - 是否必填：否 - 策略类型,0:系统策略1:用户自定义策略</li>
<li>Domain - String - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li>
<li>HandleStatus - String - 是否必填：否 - 状态筛选0:待处理；2:信任；3:不信任</li>
<li>BeginTime - String - 是否必填：否 - 最近访问开始时间</li>
<li>EndTime - String - 是否必填：否 - 最近访问结束时间</li>
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getOrder() 获取排序方式：根据请求次数排序：[asc:升序|desc:降序]
 * @method void setOrder(string $Order) 设置排序方式：根据请求次数排序：[asc:升序|desc:降序]
 * @method string getBy() 获取排序字段：[AccessCount:请求次数|LastTime:最近请求时间]
 * @method void setBy(string $By) 设置排序字段：[AccessCount:请求次数|LastTime:最近请求时间]
 */
class DescribeRiskDnsEventListRequest extends AbstractModel
{
    /**
     * @var array <li>MachineName  主机名称



InstanceID  实例ID  

 

IP   内网IP或公网IP- 是否必填：否 - 主机Ip或别名筛选</li>
<li>HostId - String - 是否必填：否 - 主机Id</li>
<li>AgentId - String - 是否必填：否 - 客户端Id</li>
<li>PolicyType - String - 是否必填：否 - 策略类型,0:系统策略1:用户自定义策略</li>
<li>Domain - String - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li>
<li>HandleStatus - String - 是否必填：否 - 状态筛选0:待处理；2:信任；3:不信任</li>
<li>BeginTime - String - 是否必填：否 - 最近访问开始时间</li>
<li>EndTime - String - 是否必填：否 - 最近访问结束时间</li>
     */
    public $Filters;

    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 排序方式：根据请求次数排序：[asc:升序|desc:降序]
     */
    public $Order;

    /**
     * @var string 排序字段：[AccessCount:请求次数|LastTime:最近请求时间]
     */
    public $By;

    /**
     * @param array $Filters <li>MachineName  主机名称



InstanceID  实例ID  

 

IP   内网IP或公网IP- 是否必填：否 - 主机Ip或别名筛选</li>
<li>HostId - String - 是否必填：否 - 主机Id</li>
<li>AgentId - String - 是否必填：否 - 客户端Id</li>
<li>PolicyType - String - 是否必填：否 - 策略类型,0:系统策略1:用户自定义策略</li>
<li>Domain - String - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li>
<li>HandleStatus - String - 是否必填：否 - 状态筛选0:待处理；2:信任；3:不信任</li>
<li>BeginTime - String - 是否必填：否 - 最近访问开始时间</li>
<li>EndTime - String - 是否必填：否 - 最近访问结束时间</li>
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param string $Order 排序方式：根据请求次数排序：[asc:升序|desc:降序]
     * @param string $By 排序字段：[AccessCount:请求次数|LastTime:最近请求时间]
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}

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
 * DescribeHostLoginList请求参数结构体
 *
 * @method integer getLimit() 获取需要返回的数量，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>Uuid - String - 是否必填：否 - 云镜唯一Uuid</li>
<li>Quuid - String - 是否必填：否 - 云服务器uuid</li>
<li>UserName - String - 是否必填：否 - 用户名筛选</li>
<li>LoginTimeBegin - String - 是否必填：否 - 按照修改时间段筛选，开始时间</li>
<li>LoginTimeEnd - String - 是否必填：否 - 按照修改时间段筛选，结束时间</li>
<li>SrcIp - String - 是否必填：否 - 来源ip筛选</li>
<li>Status - int - 是否必填：否 - 状态筛选1:正常登录；5：已加白,14:已处理，15：已忽略</li>
<li>RiskLevel - int - 是否必填：否 - 状态筛选0:高危；1：可疑</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>Uuid - String - 是否必填：否 - 云镜唯一Uuid</li>
<li>Quuid - String - 是否必填：否 - 云服务器uuid</li>
<li>UserName - String - 是否必填：否 - 用户名筛选</li>
<li>LoginTimeBegin - String - 是否必填：否 - 按照修改时间段筛选，开始时间</li>
<li>LoginTimeEnd - String - 是否必填：否 - 按照修改时间段筛选，结束时间</li>
<li>SrcIp - String - 是否必填：否 - 来源ip筛选</li>
<li>Status - int - 是否必填：否 - 状态筛选1:正常登录；5：已加白,14:已处理，15：已忽略</li>
<li>RiskLevel - int - 是否必填：否 - 状态筛选0:高危；1：可疑</li>
 * @method string getOrder() 获取排序方式：根据请求次数排序：asc-升序/desc-降序
 * @method void setOrder(string $Order) 设置排序方式：根据请求次数排序：asc-升序/desc-降序
 * @method string getBy() 获取排序字段：LoginTime-发生时间
 * @method void setBy(string $By) 设置排序字段：LoginTime-发生时间
 */
class DescribeHostLoginListRequest extends AbstractModel
{
    /**
     * @var integer 需要返回的数量，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>Uuid - String - 是否必填：否 - 云镜唯一Uuid</li>
<li>Quuid - String - 是否必填：否 - 云服务器uuid</li>
<li>UserName - String - 是否必填：否 - 用户名筛选</li>
<li>LoginTimeBegin - String - 是否必填：否 - 按照修改时间段筛选，开始时间</li>
<li>LoginTimeEnd - String - 是否必填：否 - 按照修改时间段筛选，结束时间</li>
<li>SrcIp - String - 是否必填：否 - 来源ip筛选</li>
<li>Status - int - 是否必填：否 - 状态筛选1:正常登录；5：已加白,14:已处理，15：已忽略</li>
<li>RiskLevel - int - 是否必填：否 - 状态筛选0:高危；1：可疑</li>
     */
    public $Filters;

    /**
     * @var string 排序方式：根据请求次数排序：asc-升序/desc-降序
     */
    public $Order;

    /**
     * @var string 排序字段：LoginTime-发生时间
     */
    public $By;

    /**
     * @param integer $Limit 需要返回的数量，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>Uuid - String - 是否必填：否 - 云镜唯一Uuid</li>
<li>Quuid - String - 是否必填：否 - 云服务器uuid</li>
<li>UserName - String - 是否必填：否 - 用户名筛选</li>
<li>LoginTimeBegin - String - 是否必填：否 - 按照修改时间段筛选，开始时间</li>
<li>LoginTimeEnd - String - 是否必填：否 - 按照修改时间段筛选，结束时间</li>
<li>SrcIp - String - 是否必填：否 - 来源ip筛选</li>
<li>Status - int - 是否必填：否 - 状态筛选1:正常登录；5：已加白,14:已处理，15：已忽略</li>
<li>RiskLevel - int - 是否必填：否 - 状态筛选0:高危；1：可疑</li>
     * @param string $Order 排序方式：根据请求次数排序：asc-升序/desc-降序
     * @param string $By 排序字段：LoginTime-发生时间
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}

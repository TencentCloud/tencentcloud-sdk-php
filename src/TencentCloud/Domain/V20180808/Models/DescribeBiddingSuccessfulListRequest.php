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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBiddingSuccessfulList请求参数结构体
 *
 * @method integer getPageNumber() 获取页码
默认：1
 * @method void setPageNumber(integer $PageNumber) 设置页码
默认：1
 * @method integer getPageSize() 获取每页数量
默认：20 取值范围[1，200]
 * @method void setPageSize(integer $PageSize) 设置每页数量
默认：20 取值范围[1，200]
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getStatus() 获取状态：5 等待支付 6 等待转移， 7 转移中，8 交易成功，11 尾款阶段持有者索回，12 已违约
 * @method void setStatus(array $Status) 设置状态：5 等待支付 6 等待转移， 7 转移中，8 交易成功，11 尾款阶段持有者索回，12 已违约
 * @method string getSortField() 获取排序字段：
默认<空>，不排序
SuccessfulTime 预约结束时间
 * @method void setSortField(string $SortField) 设置排序字段：
默认<空>，不排序
SuccessfulTime 预约结束时间
 * @method string getSortOrder() 获取排序规则：
asc：升序
desc：降序
默认：asc
 * @method void setSortOrder(string $SortOrder) 设置排序规则：
asc：升序
desc：降序
默认：asc
 */
class DescribeBiddingSuccessfulListRequest extends AbstractModel
{
    /**
     * @var integer 页码
默认：1
     */
    public $PageNumber;

    /**
     * @var integer 每页数量
默认：20 取值范围[1，200]
     */
    public $PageSize;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var array 状态：5 等待支付 6 等待转移， 7 转移中，8 交易成功，11 尾款阶段持有者索回，12 已违约
     */
    public $Status;

    /**
     * @var string 排序字段：
默认<空>，不排序
SuccessfulTime 预约结束时间
     */
    public $SortField;

    /**
     * @var string 排序规则：
asc：升序
desc：降序
默认：asc
     */
    public $SortOrder;

    /**
     * @param integer $PageNumber 页码
默认：1
     * @param integer $PageSize 每页数量
默认：20 取值范围[1，200]
     * @param string $Domain 域名
     * @param array $Status 状态：5 等待支付 6 等待转移， 7 转移中，8 交易成功，11 尾款阶段持有者索回，12 已违约
     * @param string $SortField 排序字段：
默认<空>，不排序
SuccessfulTime 预约结束时间
     * @param string $SortOrder 排序规则：
asc：升序
desc：降序
默认：asc
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}

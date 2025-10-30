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
 * DescribeBiddingList请求参数结构体
 *
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页数量
 * @method void setPageSize(integer $PageSize) 设置每页数量
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getStatus() 获取2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
 * @method void setStatus(array $Status) 设置2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
 * @method string getSortField() 获取排序字段：BiddingEndTime 竞价结束时间	
BiddingPrice 我的价格
 * @method void setSortField(string $SortField) 设置排序字段：BiddingEndTime 竞价结束时间	
BiddingPrice 我的价格
 * @method string getSortOrder() 获取排序规则：asc升序，desc降序
 * @method void setSortOrder(string $SortOrder) 设置排序规则：asc升序，desc降序
 */
class DescribeBiddingListRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页数量
     */
    public $PageSize;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var array 2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
     */
    public $Status;

    /**
     * @var string 排序字段：BiddingEndTime 竞价结束时间	
BiddingPrice 我的价格
     */
    public $SortField;

    /**
     * @var string 排序规则：asc升序，desc降序
     */
    public $SortOrder;

    /**
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页数量
     * @param string $Domain 域名
     * @param array $Status 2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
     * @param string $SortField 排序字段：BiddingEndTime 竞价结束时间	
BiddingPrice 我的价格
     * @param string $SortOrder 排序规则：asc升序，desc降序
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

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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryFlexOrderSummaryList请求参数结构体
 *
 * @method string getSummaryDate() 获取汇总日期:yyyy-MM-dd
 * @method void setSummaryDate(string $SummaryDate) 设置汇总日期:yyyy-MM-dd
 * @method Paging getPageNumber() 获取分页
 * @method void setPageNumber(Paging $PageNumber) 设置分页
 * @method string getOrderType() 获取汇总订单类型:FREEZE, SETTLEMENT,PAYMENT
 * @method void setOrderType(string $OrderType) 设置汇总订单类型:FREEZE, SETTLEMENT,PAYMENT
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 */
class QueryFlexOrderSummaryListRequest extends AbstractModel
{
    /**
     * @var string 汇总日期:yyyy-MM-dd
     */
    public $SummaryDate;

    /**
     * @var Paging 分页
     */
    public $PageNumber;

    /**
     * @var string 汇总订单类型:FREEZE, SETTLEMENT,PAYMENT
     */
    public $OrderType;

    /**
     * @var string 收款用户ID
     */
    public $PayeeId;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @param string $SummaryDate 汇总日期:yyyy-MM-dd
     * @param Paging $PageNumber 分页
     * @param string $OrderType 汇总订单类型:FREEZE, SETTLEMENT,PAYMENT
     * @param string $PayeeId 收款用户ID
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
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
        if (array_key_exists("SummaryDate",$param) and $param["SummaryDate"] !== null) {
            $this->SummaryDate = $param["SummaryDate"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = new Paging();
            $this->PageNumber->deserialize($param["PageNumber"]);
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}

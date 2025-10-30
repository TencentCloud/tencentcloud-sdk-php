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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCostExplorerSummary请求参数结构体
 *
 * @method string getBeginTime() 获取周期开始时间，格式为yyyy-mm-dd hh:ii:ss
 * @method void setBeginTime(string $BeginTime) 设置周期开始时间，格式为yyyy-mm-dd hh:ii:ss
 * @method string getEndTime() 获取周期结束时间，格式为yyyy-mm-dd hh:ii:ss
 * @method void setEndTime(string $EndTime) 设置周期结束时间，格式为yyyy-mm-dd hh:ii:ss
 * @method string getBillType() 获取账单类型：1-费用账单、2-消耗账单
 * @method void setBillType(string $BillType) 设置账单类型：1-费用账单、2-消耗账单
 * @method string getPeriodType() 获取统计周期：日-day，月-month；
 * @method void setPeriodType(string $PeriodType) 设置统计周期：日-day，月-month；
 * @method string getDimensions() 获取分类维度（数据汇总维度），查询分类维度（请使用分类维度code入参）入参枚举值：
default=仅总计
feeType=费用类型
billType=账单类型
business=产品
product=子产品
region=地域
zone=可用区
actionType=交易类型
payMode =计费模式
tags=标签
project =项目
payerUin=支付者账号
ownerUin=使用者账号
 * @method void setDimensions(string $Dimensions) 设置分类维度（数据汇总维度），查询分类维度（请使用分类维度code入参）入参枚举值：
default=仅总计
feeType=费用类型
billType=账单类型
business=产品
product=子产品
region=地域
zone=可用区
actionType=交易类型
payMode =计费模式
tags=标签
project =项目
payerUin=支付者账号
ownerUin=使用者账号
 * @method string getFeeType() 获取费用类型：cost-总费用，totalCost-原价费用
 * @method void setFeeType(string $FeeType) 设置费用类型：cost-总费用，totalCost-原价费用
 * @method integer getPageSize() 获取数量，每页最大值为100
 * @method void setPageSize(integer $PageSize) 设置数量，每页最大值为100
 * @method integer getPageNo() 获取起始页，当PageNo=1表示第一页， PageNo=2表示第二页，依次类推。
 * @method void setPageNo(integer $PageNo) 设置起始页，当PageNo=1表示第一页， PageNo=2表示第二页，依次类推。
 * @method string getTagKeyStr() 获取分账标签值
 * @method void setTagKeyStr(string $TagKeyStr) 设置分账标签值
 * @method string getNeedConditionValue() 获取是否需要筛选框， 1-表示需要， 0-表示不需要，若不传默认不需要。
 * @method void setNeedConditionValue(string $NeedConditionValue) 设置是否需要筛选框， 1-表示需要， 0-表示不需要，若不传默认不需要。
 * @method AnalyseConditions getConditions() 获取筛选参数
 * @method void setConditions(AnalyseConditions $Conditions) 设置筛选参数
 */
class DescribeCostExplorerSummaryRequest extends AbstractModel
{
    /**
     * @var string 周期开始时间，格式为yyyy-mm-dd hh:ii:ss
     */
    public $BeginTime;

    /**
     * @var string 周期结束时间，格式为yyyy-mm-dd hh:ii:ss
     */
    public $EndTime;

    /**
     * @var string 账单类型：1-费用账单、2-消耗账单
     */
    public $BillType;

    /**
     * @var string 统计周期：日-day，月-month；
     */
    public $PeriodType;

    /**
     * @var string 分类维度（数据汇总维度），查询分类维度（请使用分类维度code入参）入参枚举值：
default=仅总计
feeType=费用类型
billType=账单类型
business=产品
product=子产品
region=地域
zone=可用区
actionType=交易类型
payMode =计费模式
tags=标签
project =项目
payerUin=支付者账号
ownerUin=使用者账号
     */
    public $Dimensions;

    /**
     * @var string 费用类型：cost-总费用，totalCost-原价费用
     */
    public $FeeType;

    /**
     * @var integer 数量，每页最大值为100
     */
    public $PageSize;

    /**
     * @var integer 起始页，当PageNo=1表示第一页， PageNo=2表示第二页，依次类推。
     */
    public $PageNo;

    /**
     * @var string 分账标签值
     */
    public $TagKeyStr;

    /**
     * @var string 是否需要筛选框， 1-表示需要， 0-表示不需要，若不传默认不需要。
     */
    public $NeedConditionValue;

    /**
     * @var AnalyseConditions 筛选参数
     */
    public $Conditions;

    /**
     * @param string $BeginTime 周期开始时间，格式为yyyy-mm-dd hh:ii:ss
     * @param string $EndTime 周期结束时间，格式为yyyy-mm-dd hh:ii:ss
     * @param string $BillType 账单类型：1-费用账单、2-消耗账单
     * @param string $PeriodType 统计周期：日-day，月-month；
     * @param string $Dimensions 分类维度（数据汇总维度），查询分类维度（请使用分类维度code入参）入参枚举值：
default=仅总计
feeType=费用类型
billType=账单类型
business=产品
product=子产品
region=地域
zone=可用区
actionType=交易类型
payMode =计费模式
tags=标签
project =项目
payerUin=支付者账号
ownerUin=使用者账号
     * @param string $FeeType 费用类型：cost-总费用，totalCost-原价费用
     * @param integer $PageSize 数量，每页最大值为100
     * @param integer $PageNo 起始页，当PageNo=1表示第一页， PageNo=2表示第二页，依次类推。
     * @param string $TagKeyStr 分账标签值
     * @param string $NeedConditionValue 是否需要筛选框， 1-表示需要， 0-表示不需要，若不传默认不需要。
     * @param AnalyseConditions $Conditions 筛选参数
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("TagKeyStr",$param) and $param["TagKeyStr"] !== null) {
            $this->TagKeyStr = $param["TagKeyStr"];
        }

        if (array_key_exists("NeedConditionValue",$param) and $param["NeedConditionValue"] !== null) {
            $this->NeedConditionValue = $param["NeedConditionValue"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = new AnalyseConditions();
            $this->Conditions->deserialize($param["Conditions"]);
        }
    }
}

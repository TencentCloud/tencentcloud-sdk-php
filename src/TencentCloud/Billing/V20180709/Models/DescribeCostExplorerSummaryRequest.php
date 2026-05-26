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
 * @method string getBeginTime() 获取<p>周期开始时间，格式为yyyy-mm-dd hh:ii:ss</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>周期开始时间，格式为yyyy-mm-dd hh:ii:ss</p>
 * @method string getEndTime() 获取<p>周期结束时间，格式为yyyy-mm-dd hh:ii:ss</p>
 * @method void setEndTime(string $EndTime) 设置<p>周期结束时间，格式为yyyy-mm-dd hh:ii:ss</p>
 * @method string getBillType() 获取<p>账单类型：1-费用账单、2-消耗账单</p>
 * @method void setBillType(string $BillType) 设置<p>账单类型：1-费用账单、2-消耗账单</p>
 * @method string getPeriodType() 获取<p>统计周期：日-day，月-month；</p>
 * @method void setPeriodType(string $PeriodType) 设置<p>统计周期：日-day，月-month；</p>
 * @method string getDimensions() 获取<p>分类维度（数据汇总维度），查询分类维度（请使用分类维度code入参）入参枚举值：<br>default=仅总计<br>feeType=费用类型<br>billType=账单类型<br>business=产品<br>product=子产品<br>region=地域<br>zone=可用区<br>actionType=交易类型<br>payMode =计费模式<br>tags=标签<br>project =项目<br>payerUin=支付者账号<br>ownerUin=使用者账号</p>
 * @method void setDimensions(string $Dimensions) 设置<p>分类维度（数据汇总维度），查询分类维度（请使用分类维度code入参）入参枚举值：<br>default=仅总计<br>feeType=费用类型<br>billType=账单类型<br>business=产品<br>product=子产品<br>region=地域<br>zone=可用区<br>actionType=交易类型<br>payMode =计费模式<br>tags=标签<br>project =项目<br>payerUin=支付者账号<br>ownerUin=使用者账号</p>
 * @method string getFeeType() 获取<p>费用类型：cost-折后总费用，totalCost-原价费用</p>
 * @method void setFeeType(string $FeeType) 设置<p>费用类型：cost-折后总费用，totalCost-原价费用</p>
 * @method integer getPageSize() 获取<p>数量，每页最大值为100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>数量，每页最大值为100</p>
 * @method integer getPageNo() 获取<p>起始页，当PageNo=1表示第一页， PageNo=2表示第二页，依次类推。</p>
 * @method void setPageNo(integer $PageNo) 设置<p>起始页，当PageNo=1表示第一页， PageNo=2表示第二页，依次类推。</p>
 * @method string getTagKeyStr() 获取<p>分账标签键</p>
 * @method void setTagKeyStr(string $TagKeyStr) 设置<p>分账标签键</p>
 * @method string getNeedConditionValue() 获取<p>是否需要筛选框， 1-表示需要， 0-表示不需要，若不传默认不需要。</p>
 * @method void setNeedConditionValue(string $NeedConditionValue) 设置<p>是否需要筛选框， 1-表示需要， 0-表示不需要，若不传默认不需要。</p>
 * @method AnalyseConditions getConditions() 获取<p>筛选参数</p>
 * @method void setConditions(AnalyseConditions $Conditions) 设置<p>筛选参数</p>
 */
class DescribeCostExplorerSummaryRequest extends AbstractModel
{
    /**
     * @var string <p>周期开始时间，格式为yyyy-mm-dd hh:ii:ss</p>
     */
    public $BeginTime;

    /**
     * @var string <p>周期结束时间，格式为yyyy-mm-dd hh:ii:ss</p>
     */
    public $EndTime;

    /**
     * @var string <p>账单类型：1-费用账单、2-消耗账单</p>
     */
    public $BillType;

    /**
     * @var string <p>统计周期：日-day，月-month；</p>
     */
    public $PeriodType;

    /**
     * @var string <p>分类维度（数据汇总维度），查询分类维度（请使用分类维度code入参）入参枚举值：<br>default=仅总计<br>feeType=费用类型<br>billType=账单类型<br>business=产品<br>product=子产品<br>region=地域<br>zone=可用区<br>actionType=交易类型<br>payMode =计费模式<br>tags=标签<br>project =项目<br>payerUin=支付者账号<br>ownerUin=使用者账号</p>
     */
    public $Dimensions;

    /**
     * @var string <p>费用类型：cost-折后总费用，totalCost-原价费用</p>
     */
    public $FeeType;

    /**
     * @var integer <p>数量，每页最大值为100</p>
     */
    public $PageSize;

    /**
     * @var integer <p>起始页，当PageNo=1表示第一页， PageNo=2表示第二页，依次类推。</p>
     */
    public $PageNo;

    /**
     * @var string <p>分账标签键</p>
     */
    public $TagKeyStr;

    /**
     * @var string <p>是否需要筛选框， 1-表示需要， 0-表示不需要，若不传默认不需要。</p>
     */
    public $NeedConditionValue;

    /**
     * @var AnalyseConditions <p>筛选参数</p>
     */
    public $Conditions;

    /**
     * @param string $BeginTime <p>周期开始时间，格式为yyyy-mm-dd hh:ii:ss</p>
     * @param string $EndTime <p>周期结束时间，格式为yyyy-mm-dd hh:ii:ss</p>
     * @param string $BillType <p>账单类型：1-费用账单、2-消耗账单</p>
     * @param string $PeriodType <p>统计周期：日-day，月-month；</p>
     * @param string $Dimensions <p>分类维度（数据汇总维度），查询分类维度（请使用分类维度code入参）入参枚举值：<br>default=仅总计<br>feeType=费用类型<br>billType=账单类型<br>business=产品<br>product=子产品<br>region=地域<br>zone=可用区<br>actionType=交易类型<br>payMode =计费模式<br>tags=标签<br>project =项目<br>payerUin=支付者账号<br>ownerUin=使用者账号</p>
     * @param string $FeeType <p>费用类型：cost-折后总费用，totalCost-原价费用</p>
     * @param integer $PageSize <p>数量，每页最大值为100</p>
     * @param integer $PageNo <p>起始页，当PageNo=1表示第一页， PageNo=2表示第二页，依次类推。</p>
     * @param string $TagKeyStr <p>分账标签键</p>
     * @param string $NeedConditionValue <p>是否需要筛选框， 1-表示需要， 0-表示不需要，若不传默认不需要。</p>
     * @param AnalyseConditions $Conditions <p>筛选参数</p>
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

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
 * DescribeBillDetailForOrganization请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推</p>
 * @method integer getLimit() 获取<p>数量，最大值为100</p>
 * @method void setLimit(integer $Limit) 设置<p>数量，最大值为100</p>
 * @method string getPeriodType() 获取<p>周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往<a href="https://console.cloud.tencent.com/expense/bill/overview">账单概览</a>页面顶部查看确认您的账单统计周期类型。</p>
 * @method void setPeriodType(string $PeriodType) 设置<p>周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往<a href="https://console.cloud.tencent.com/expense/bill/overview">账单概览</a>页面顶部查看确认您的账单统计周期类型。</p>
 * @method string getMonth() 获取<p>月份，格式为yyyy-mm，Month和BeginTime&amp;EndTime必传一个，如果有传BeginTime&amp;EndTime则Month字段无效。最多可拉取近18个月内的数据。</p>
 * @method void setMonth(string $Month) 设置<p>月份，格式为yyyy-mm，Month和BeginTime&amp;EndTime必传一个，如果有传BeginTime&amp;EndTime则Month字段无效。最多可拉取近18个月内的数据。</p>
 * @method string getBeginTime() 获取<p>周期开始时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取18个月内的数据。</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>周期开始时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取18个月内的数据。</p>
 * @method string getEndTime() 获取<p>周期结束时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取近18个月内的数据。</p>
 * @method void setEndTime(string $EndTime) 设置<p>周期结束时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取近18个月内的数据。</p>
 * @method integer getNeedRecordNum() 获取<p>是否需要访问列表的总记录数，用于前端分页<br>1-表示需要， 0-表示不需要</p>
 * @method void setNeedRecordNum(integer $NeedRecordNum) 设置<p>是否需要访问列表的总记录数，用于前端分页<br>1-表示需要， 0-表示不需要</p>
 * @method string getPayMode() 获取<p>付费模式 prePay(表示包年包月)/postPay(表示按时按量)</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式 prePay(表示包年包月)/postPay(表示按时按量)</p>
 * @method string getResourceId() 获取<p>查询指定资源信息</p>
 * @method void setResourceId(string $ResourceId) 设置<p>查询指定资源信息</p>
 * @method string getActionType() 获取<p>查询交易类型（请使用交易类型名称入参），入参示例枚举如下：<br>包年包月新购<br>包年包月续费<br>包年包月配置变更<br>包年包月退款<br>按量计费扣费<br>线下项目扣费<br>线下产品扣费<br>调账扣费<br>调账补偿<br>按量计费小时结<br>按量计费日结<br>按量计费月结<br>竞价实例小时结<br>线下项目调账补偿<br>线下产品调账补偿<br>优惠扣费<br>优惠补偿<br>按量计费迁入资源<br>按量计费迁出资源<br>包年包月迁入资源<br>包年包月迁出资源<br>预付费用<br>小时费用<br>预留实例退款<br>按量计费冲正<br>包年包月转按量<br>保底扣款<br>节省计划小时费用</p>
 * @method void setActionType(string $ActionType) 设置<p>查询交易类型（请使用交易类型名称入参），入参示例枚举如下：<br>包年包月新购<br>包年包月续费<br>包年包月配置变更<br>包年包月退款<br>按量计费扣费<br>线下项目扣费<br>线下产品扣费<br>调账扣费<br>调账补偿<br>按量计费小时结<br>按量计费日结<br>按量计费月结<br>竞价实例小时结<br>线下项目调账补偿<br>线下产品调账补偿<br>优惠扣费<br>优惠补偿<br>按量计费迁入资源<br>按量计费迁出资源<br>包年包月迁入资源<br>包年包月迁出资源<br>预付费用<br>小时费用<br>预留实例退款<br>按量计费冲正<br>包年包月转按量<br>保底扣款<br>节省计划小时费用</p>
 * @method integer getProjectId() 获取<p>项目ID:资源所属项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID:资源所属项目ID</p>
 * @method string getBusinessCode() 获取<p>产品名称代码<br>备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a></p>
 * @method void setBusinessCode(string $BusinessCode) 设置<p>产品名称代码<br>备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a></p>
 * @method string getContext() 获取<p>上一次请求返回的上下文信息，翻页查询Month&gt;=2023-05的月份的数据可加快查询速度，数据量10万级别以上的用户建议使用，查询速度可提升2~10倍</p>
 * @method void setContext(string $Context) 设置<p>上一次请求返回的上下文信息，翻页查询Month&gt;=2023-05的月份的数据可加快查询速度，数据量10万级别以上的用户建议使用，查询速度可提升2~10倍</p>
 */
class DescribeBillDetailForOrganizationRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推</p>
     */
    public $Offset;

    /**
     * @var integer <p>数量，最大值为100</p>
     */
    public $Limit;

    /**
     * @var string <p>周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往<a href="https://console.cloud.tencent.com/expense/bill/overview">账单概览</a>页面顶部查看确认您的账单统计周期类型。</p>
     * @deprecated
     */
    public $PeriodType;

    /**
     * @var string <p>月份，格式为yyyy-mm，Month和BeginTime&amp;EndTime必传一个，如果有传BeginTime&amp;EndTime则Month字段无效。最多可拉取近18个月内的数据。</p>
     */
    public $Month;

    /**
     * @var string <p>周期开始时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取18个月内的数据。</p>
     */
    public $BeginTime;

    /**
     * @var string <p>周期结束时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取近18个月内的数据。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>是否需要访问列表的总记录数，用于前端分页<br>1-表示需要， 0-表示不需要</p>
     */
    public $NeedRecordNum;

    /**
     * @var string <p>付费模式 prePay(表示包年包月)/postPay(表示按时按量)</p>
     */
    public $PayMode;

    /**
     * @var string <p>查询指定资源信息</p>
     */
    public $ResourceId;

    /**
     * @var string <p>查询交易类型（请使用交易类型名称入参），入参示例枚举如下：<br>包年包月新购<br>包年包月续费<br>包年包月配置变更<br>包年包月退款<br>按量计费扣费<br>线下项目扣费<br>线下产品扣费<br>调账扣费<br>调账补偿<br>按量计费小时结<br>按量计费日结<br>按量计费月结<br>竞价实例小时结<br>线下项目调账补偿<br>线下产品调账补偿<br>优惠扣费<br>优惠补偿<br>按量计费迁入资源<br>按量计费迁出资源<br>包年包月迁入资源<br>包年包月迁出资源<br>预付费用<br>小时费用<br>预留实例退款<br>按量计费冲正<br>包年包月转按量<br>保底扣款<br>节省计划小时费用</p>
     */
    public $ActionType;

    /**
     * @var integer <p>项目ID:资源所属项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>产品名称代码<br>备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a></p>
     */
    public $BusinessCode;

    /**
     * @var string <p>上一次请求返回的上下文信息，翻页查询Month&gt;=2023-05的月份的数据可加快查询速度，数据量10万级别以上的用户建议使用，查询速度可提升2~10倍</p>
     */
    public $Context;

    /**
     * @param integer $Offset <p>分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推</p>
     * @param integer $Limit <p>数量，最大值为100</p>
     * @param string $PeriodType <p>周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往<a href="https://console.cloud.tencent.com/expense/bill/overview">账单概览</a>页面顶部查看确认您的账单统计周期类型。</p>
     * @param string $Month <p>月份，格式为yyyy-mm，Month和BeginTime&amp;EndTime必传一个，如果有传BeginTime&amp;EndTime则Month字段无效。最多可拉取近18个月内的数据。</p>
     * @param string $BeginTime <p>周期开始时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取18个月内的数据。</p>
     * @param string $EndTime <p>周期结束时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取近18个月内的数据。</p>
     * @param integer $NeedRecordNum <p>是否需要访问列表的总记录数，用于前端分页<br>1-表示需要， 0-表示不需要</p>
     * @param string $PayMode <p>付费模式 prePay(表示包年包月)/postPay(表示按时按量)</p>
     * @param string $ResourceId <p>查询指定资源信息</p>
     * @param string $ActionType <p>查询交易类型（请使用交易类型名称入参），入参示例枚举如下：<br>包年包月新购<br>包年包月续费<br>包年包月配置变更<br>包年包月退款<br>按量计费扣费<br>线下项目扣费<br>线下产品扣费<br>调账扣费<br>调账补偿<br>按量计费小时结<br>按量计费日结<br>按量计费月结<br>竞价实例小时结<br>线下项目调账补偿<br>线下产品调账补偿<br>优惠扣费<br>优惠补偿<br>按量计费迁入资源<br>按量计费迁出资源<br>包年包月迁入资源<br>包年包月迁出资源<br>预付费用<br>小时费用<br>预留实例退款<br>按量计费冲正<br>包年包月转按量<br>保底扣款<br>节省计划小时费用</p>
     * @param integer $ProjectId <p>项目ID:资源所属项目ID</p>
     * @param string $BusinessCode <p>产品名称代码<br>备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a></p>
     * @param string $Context <p>上一次请求返回的上下文信息，翻页查询Month&gt;=2023-05的月份的数据可加快查询速度，数据量10万级别以上的用户建议使用，查询速度可提升2~10倍</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}

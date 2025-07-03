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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillDetail请求参数结构体
 *
 * @method integer getOffset() 获取分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
 * @method void setOffset(integer $Offset) 设置分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
 * @method integer getLimit() 获取数量，最大值为300
 * @method void setLimit(integer $Limit) 设置数量，最大值为300
 * @method string getPeriodType() 获取周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
 * @method void setPeriodType(string $PeriodType) 设置周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
 * @method string getMonth() 获取月份，格式为yyyy-mm，Month和BeginTime&EndTime必传一个，如果有传BeginTime&EndTime则Month字段无效。最多可拉取近18个月内的数据。
 * @method void setMonth(string $Month) 设置月份，格式为yyyy-mm，Month和BeginTime&EndTime必传一个，如果有传BeginTime&EndTime则Month字段无效。最多可拉取近18个月内的数据。
 * @method string getBeginTime() 获取周期开始时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取18个月内的数据。
 * @method void setBeginTime(string $BeginTime) 设置周期开始时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取18个月内的数据。
 * @method string getEndTime() 获取周期结束时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取近18个月内的数据。
 * @method void setEndTime(string $EndTime) 设置周期结束时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取近18个月内的数据。
 * @method integer getNeedRecordNum() 获取是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
 * @method void setNeedRecordNum(integer $NeedRecordNum) 设置是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
 * @method string getProductCode() 获取已废弃参数，未开放
 * @method void setProductCode(string $ProductCode) 设置已废弃参数，未开放
 * @method string getPayMode() 获取付费模式 prePay(表示包年包月)/postPay(表示按时按量)
 * @method void setPayMode(string $PayMode) 设置付费模式 prePay(表示包年包月)/postPay(表示按时按量)
 * @method string getResourceId() 获取查询指定资源信息
 * @method void setResourceId(string $ResourceId) 设置查询指定资源信息
 * @method string getActionType() 获取查询交易类型（请使用交易类型名称入参），入参示例枚举如下：
包年包月新购
包年包月续费
包年包月配置变更
包年包月退款 
按量计费扣费 
线下项目扣费 
线下产品扣费 
调账扣费 
调账补偿 
按量计费小时结 
按量计费日结 
按量计费月结 
竞价实例小时结 
线下项目调账补偿 
线下产品调账补偿 
优惠扣费 
优惠补偿 
按量计费迁入资源 
按量计费迁出资源 
包年包月迁入资源 
包年包月迁出资源 
预付费用 
小时费用 
预留实例退款 
按量计费冲正 
包年包月转按量 
保底扣款 
节省计划小时费用
 * @method void setActionType(string $ActionType) 设置查询交易类型（请使用交易类型名称入参），入参示例枚举如下：
包年包月新购
包年包月续费
包年包月配置变更
包年包月退款 
按量计费扣费 
线下项目扣费 
线下产品扣费 
调账扣费 
调账补偿 
按量计费小时结 
按量计费日结 
按量计费月结 
竞价实例小时结 
线下项目调账补偿 
线下产品调账补偿 
优惠扣费 
优惠补偿 
按量计费迁入资源 
按量计费迁出资源 
包年包月迁入资源 
包年包月迁出资源 
预付费用 
小时费用 
预留实例退款 
按量计费冲正 
包年包月转按量 
保底扣款 
节省计划小时费用
 * @method integer getProjectId() 获取项目ID:资源所属项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID:资源所属项目ID
 * @method string getBusinessCode() 获取产品名称代码
备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a>
 * @method void setBusinessCode(string $BusinessCode) 设置产品名称代码
备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a>
 * @method string getContext() 获取上一次请求返回的上下文信息，翻页查询Month>=2023-05的月份的数据可加快查询速度，数据量10万级别以上的用户建议使用，查询速度可提升2~10倍
 * @method void setContext(string $Context) 设置上一次请求返回的上下文信息，翻页查询Month>=2023-05的月份的数据可加快查询速度，数据量10万级别以上的用户建议使用，查询速度可提升2~10倍
 * @method string getPayerUin() 获取支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN
 * @method void setPayerUin(string $PayerUin) 设置支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN
 */
class DescribeBillDetailRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
     */
    public $Offset;

    /**
     * @var integer 数量，最大值为300
     */
    public $Limit;

    /**
     * @var string 周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
     * @deprecated
     */
    public $PeriodType;

    /**
     * @var string 月份，格式为yyyy-mm，Month和BeginTime&EndTime必传一个，如果有传BeginTime&EndTime则Month字段无效。最多可拉取近18个月内的数据。
     */
    public $Month;

    /**
     * @var string 周期开始时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取18个月内的数据。
     */
    public $BeginTime;

    /**
     * @var string 周期结束时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取近18个月内的数据。
     */
    public $EndTime;

    /**
     * @var integer 是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
     */
    public $NeedRecordNum;

    /**
     * @var string 已废弃参数，未开放
     * @deprecated
     */
    public $ProductCode;

    /**
     * @var string 付费模式 prePay(表示包年包月)/postPay(表示按时按量)
     */
    public $PayMode;

    /**
     * @var string 查询指定资源信息
     */
    public $ResourceId;

    /**
     * @var string 查询交易类型（请使用交易类型名称入参），入参示例枚举如下：
包年包月新购
包年包月续费
包年包月配置变更
包年包月退款 
按量计费扣费 
线下项目扣费 
线下产品扣费 
调账扣费 
调账补偿 
按量计费小时结 
按量计费日结 
按量计费月结 
竞价实例小时结 
线下项目调账补偿 
线下产品调账补偿 
优惠扣费 
优惠补偿 
按量计费迁入资源 
按量计费迁出资源 
包年包月迁入资源 
包年包月迁出资源 
预付费用 
小时费用 
预留实例退款 
按量计费冲正 
包年包月转按量 
保底扣款 
节省计划小时费用
     */
    public $ActionType;

    /**
     * @var integer 项目ID:资源所属项目ID
     */
    public $ProjectId;

    /**
     * @var string 产品名称代码
备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a>
     */
    public $BusinessCode;

    /**
     * @var string 上一次请求返回的上下文信息，翻页查询Month>=2023-05的月份的数据可加快查询速度，数据量10万级别以上的用户建议使用，查询速度可提升2~10倍
     */
    public $Context;

    /**
     * @var string 支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN
     */
    public $PayerUin;

    /**
     * @param integer $Offset 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
     * @param integer $Limit 数量，最大值为300
     * @param string $PeriodType 周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
     * @param string $Month 月份，格式为yyyy-mm，Month和BeginTime&EndTime必传一个，如果有传BeginTime&EndTime则Month字段无效。最多可拉取近18个月内的数据。
     * @param string $BeginTime 周期开始时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取18个月内的数据。
     * @param string $EndTime 周期结束时间，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据。最多可拉取近18个月内的数据。
     * @param integer $NeedRecordNum 是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
     * @param string $ProductCode 已废弃参数，未开放
     * @param string $PayMode 付费模式 prePay(表示包年包月)/postPay(表示按时按量)
     * @param string $ResourceId 查询指定资源信息
     * @param string $ActionType 查询交易类型（请使用交易类型名称入参），入参示例枚举如下：
包年包月新购
包年包月续费
包年包月配置变更
包年包月退款 
按量计费扣费 
线下项目扣费 
线下产品扣费 
调账扣费 
调账补偿 
按量计费小时结 
按量计费日结 
按量计费月结 
竞价实例小时结 
线下项目调账补偿 
线下产品调账补偿 
优惠扣费 
优惠补偿 
按量计费迁入资源 
按量计费迁出资源 
包年包月迁入资源 
包年包月迁出资源 
预付费用 
小时费用 
预留实例退款 
按量计费冲正 
包年包月转按量 
保底扣款 
节省计划小时费用
     * @param integer $ProjectId 项目ID:资源所属项目ID
     * @param string $BusinessCode 产品名称代码
备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a>
     * @param string $Context 上一次请求返回的上下文信息，翻页查询Month>=2023-05的月份的数据可加快查询速度，数据量10万级别以上的用户建议使用，查询速度可提升2~10倍
     * @param string $PayerUin 支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN
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

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
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

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }
    }
}

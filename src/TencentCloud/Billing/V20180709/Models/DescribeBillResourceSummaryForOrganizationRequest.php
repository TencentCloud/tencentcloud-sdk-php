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
 * DescribeBillResourceSummaryForOrganization请求参数结构体
 *
 * @method integer getOffset() 获取分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
 * @method void setOffset(integer $Offset) 设置分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
 * @method integer getLimit() 获取数量，最大值为1000
 * @method void setLimit(integer $Limit) 设置数量，最大值为1000
 * @method string getMonth() 获取月份，格式为yyyy-mm。不能早于开通账单2.0的月份
 * @method void setMonth(string $Month) 设置月份，格式为yyyy-mm。不能早于开通账单2.0的月份
 * @method string getPeriodType() 获取周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
 * @method void setPeriodType(string $PeriodType) 设置周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
 * @method integer getNeedRecordNum() 获取是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
 * @method void setNeedRecordNum(integer $NeedRecordNum) 设置是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
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
 * @method string getResourceId() 获取查询指定资源信息
 * @method void setResourceId(string $ResourceId) 设置查询指定资源信息
 * @method string getPayMode() 获取付费模式 prePay/postPay
 * @method void setPayMode(string $PayMode) 设置付费模式 prePay/postPay
 * @method string getBusinessCode() 获取产品名称代码
备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a>
 * @method void setBusinessCode(string $BusinessCode) 设置产品名称代码
备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a>
 * @method string getTagKey() 获取分账标签键，用户自定义（支持2021-01以后账单查询）
 * @method void setTagKey(string $TagKey) 设置分账标签键，用户自定义（支持2021-01以后账单查询）
 * @method string getTagValue() 获取分账标签值，该参数为空表示该标签键下未设置标签值的记录
（支持2021-01以后账单查询）
 * @method void setTagValue(string $TagValue) 设置分账标签值，该参数为空表示该标签键下未设置标签值的记录
（支持2021-01以后账单查询）
 */
class DescribeBillResourceSummaryForOrganizationRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
     */
    public $Offset;

    /**
     * @var integer 数量，最大值为1000
     */
    public $Limit;

    /**
     * @var string 月份，格式为yyyy-mm。不能早于开通账单2.0的月份
     */
    public $Month;

    /**
     * @var string 周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
     * @deprecated
     */
    public $PeriodType;

    /**
     * @var integer 是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
     */
    public $NeedRecordNum;

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
     * @var string 查询指定资源信息
     */
    public $ResourceId;

    /**
     * @var string 付费模式 prePay/postPay
     */
    public $PayMode;

    /**
     * @var string 产品名称代码
备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a>
     */
    public $BusinessCode;

    /**
     * @var string 分账标签键，用户自定义（支持2021-01以后账单查询）
     */
    public $TagKey;

    /**
     * @var string 分账标签值，该参数为空表示该标签键下未设置标签值的记录
（支持2021-01以后账单查询）
     */
    public $TagValue;

    /**
     * @param integer $Offset 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
     * @param integer $Limit 数量，最大值为1000
     * @param string $Month 月份，格式为yyyy-mm。不能早于开通账单2.0的月份
     * @param string $PeriodType 周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
     * @param integer $NeedRecordNum 是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
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
     * @param string $ResourceId 查询指定资源信息
     * @param string $PayMode 付费模式 prePay/postPay
     * @param string $BusinessCode 产品名称代码
备注：如需获取当月使用过的BusinessCode，请调用API：<a href="https://cloud.tencent.com/document/product/555/35761">获取产品汇总费用分布</a>
     * @param string $TagKey 分账标签键，用户自定义（支持2021-01以后账单查询）
     * @param string $TagValue 分账标签值，该参数为空表示该标签键下未设置标签值的记录
（支持2021-01以后账单查询）
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

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}

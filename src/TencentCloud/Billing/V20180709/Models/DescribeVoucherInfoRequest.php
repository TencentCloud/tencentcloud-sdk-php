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
 * DescribeVoucherInfo请求参数结构体
 *
 * @method integer getLimit() 获取<p>一页多少条数据，默认是20条，最大不超过1000</p>
 * @method void setLimit(integer $Limit) 设置<p>一页多少条数据，默认是20条，最大不超过1000</p>
 * @method integer getOffset() 获取<p>第多少页，默认是1</p>
 * @method void setOffset(integer $Offset) 设置<p>第多少页，默认是1</p>
 * @method string getStatus() 获取<p>券状态：待使用：unUsed，已使用：xa0used，已发货：delivered，已作废：xa0cancel，已过期：overdue</p>
 * @method void setStatus(string $Status) 设置<p>券状态：待使用：unUsed，已使用：xa0used，已发货：delivered，已作废：xa0cancel，已过期：overdue</p>
 * @method string getVoucherId() 获取<p>代金券id</p>
 * @method void setVoucherId(string $VoucherId) 设置<p>代金券id</p>
 * @method string getCodeId() 获取<p>代金券订单id</p>
 * @method void setCodeId(string $CodeId) 设置<p>代金券订单id</p>
 * @method string getProductCode() 获取<p>商品码</p>
 * @method void setProductCode(string $ProductCode) 设置<p>商品码</p>
 * @method string getActivityId() 获取<p>活动id</p>
 * @method void setActivityId(string $ActivityId) 设置<p>活动id</p>
 * @method string getVoucherName() 获取<p>代金券名称</p>
 * @method void setVoucherName(string $VoucherName) 设置<p>代金券名称</p>
 * @method string getTimeFrom() 获取<p>发放开始时间,例：2021-01-01</p>
 * @method void setTimeFrom(string $TimeFrom) 设置<p>发放开始时间,例：2021-01-01</p>
 * @method string getTimeTo() 获取<p>发放结束时间，例：2021-01-01</p>
 * @method void setTimeTo(string $TimeTo) 设置<p>发放结束时间，例：2021-01-01</p>
 * @method string getSortField() 获取<p>指定排序字段：BeginTime开始时间、EndTime到期时间、CreateTime创建时间</p>
 * @method void setSortField(string $SortField) 设置<p>指定排序字段：BeginTime开始时间、EndTime到期时间、CreateTime创建时间</p>
 * @method string getSortOrder() 获取<p>指定升序降序：desc、asc</p>
 * @method void setSortOrder(string $SortOrder) 设置<p>指定升序降序：desc、asc</p>
 * @method string getPayMode() 获取<p>付费模式，postPay后付费/prePay预付费/riPay预留实例/&quot;&quot;或者&quot;*&quot;表示全部模式，如果payMode为&quot;&quot;或&quot;*&quot;，那么productCode与subProductCode必须传空</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式，postPay后付费/prePay预付费/riPay预留实例/&quot;&quot;或者&quot;*&quot;表示全部模式，如果payMode为&quot;&quot;或&quot;*&quot;，那么productCode与subProductCode必须传空</p>
 * @method string getPayScene() 获取<p>付费场景PayMode=postPay时：spotpay-竞价实例,&quot;settle account&quot;-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景</p>
 * @method void setPayScene(string $PayScene) 设置<p>付费场景PayMode=postPay时：spotpay-竞价实例,&quot;settle account&quot;-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景</p>
 * @method string getOperator() 获取<p>操作人，默认就是用户uin</p>
 * @method void setOperator(string $Operator) 设置<p>操作人，默认就是用户uin</p>
 * @method string getVoucherMainType() 获取<p>代金券主类型 has_price 为有价现金券 no_price 为无价代金券</p>
 * @method void setVoucherMainType(string $VoucherMainType) 设置<p>代金券主类型 has_price 为有价现金券 no_price 为无价代金券</p>
 * @method string getVoucherSubType() 获取<p>代金券副类型 discount 为折扣券 deduct 为抵扣券</p>
 * @method void setVoucherSubType(string $VoucherSubType) 设置<p>代金券副类型 discount 为折扣券 deduct 为抵扣券</p>
 * @method string getStartTimeFrom() 获取<p>券有效时间开始时间</p>
 * @method void setStartTimeFrom(string $StartTimeFrom) 设置<p>券有效时间开始时间</p>
 * @method string getStartTimeTo() 获取<p>券有效时间结束时间</p>
 * @method void setStartTimeTo(string $StartTimeTo) 设置<p>券有效时间结束时间</p>
 * @method string getEndTimeFrom() 获取<p>券失效时间开始时间</p>
 * @method void setEndTimeFrom(string $EndTimeFrom) 设置<p>券失效时间开始时间</p>
 * @method string getEndTimeTo() 获取<p>券失效时间结束时间</p>
 * @method void setEndTimeTo(string $EndTimeTo) 设置<p>券失效时间结束时间</p>
 * @method string getCreateTimeFrom() 获取<p>发券时间开始时间</p>
 * @method void setCreateTimeFrom(string $CreateTimeFrom) 设置<p>发券时间开始时间</p>
 * @method string getCreateTimeTo() 获取<p>发券时间结束时间</p>
 * @method void setCreateTimeTo(string $CreateTimeTo) 设置<p>发券时间结束时间</p>
 * @method string getLang() 获取<p>语言参数</p><p>默认值：zh</p><p>期望返回产品名称中文或其他语言，目前仅支持中文、英文；填&quot;zh&quot;或不填时返回中文，其他情况返回英文</p>
 * @method void setLang(string $Lang) 设置<p>语言参数</p><p>默认值：zh</p><p>期望返回产品名称中文或其他语言，目前仅支持中文、英文；填&quot;zh&quot;或不填时返回中文，其他情况返回英文</p>
 */
class DescribeVoucherInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>一页多少条数据，默认是20条，最大不超过1000</p>
     */
    public $Limit;

    /**
     * @var integer <p>第多少页，默认是1</p>
     */
    public $Offset;

    /**
     * @var string <p>券状态：待使用：unUsed，已使用：xa0used，已发货：delivered，已作废：xa0cancel，已过期：overdue</p>
     */
    public $Status;

    /**
     * @var string <p>代金券id</p>
     */
    public $VoucherId;

    /**
     * @var string <p>代金券订单id</p>
     */
    public $CodeId;

    /**
     * @var string <p>商品码</p>
     */
    public $ProductCode;

    /**
     * @var string <p>活动id</p>
     */
    public $ActivityId;

    /**
     * @var string <p>代金券名称</p>
     */
    public $VoucherName;

    /**
     * @var string <p>发放开始时间,例：2021-01-01</p>
     */
    public $TimeFrom;

    /**
     * @var string <p>发放结束时间，例：2021-01-01</p>
     */
    public $TimeTo;

    /**
     * @var string <p>指定排序字段：BeginTime开始时间、EndTime到期时间、CreateTime创建时间</p>
     */
    public $SortField;

    /**
     * @var string <p>指定升序降序：desc、asc</p>
     */
    public $SortOrder;

    /**
     * @var string <p>付费模式，postPay后付费/prePay预付费/riPay预留实例/&quot;&quot;或者&quot;*&quot;表示全部模式，如果payMode为&quot;&quot;或&quot;*&quot;，那么productCode与subProductCode必须传空</p>
     */
    public $PayMode;

    /**
     * @var string <p>付费场景PayMode=postPay时：spotpay-竞价实例,&quot;settle account&quot;-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景</p>
     */
    public $PayScene;

    /**
     * @var string <p>操作人，默认就是用户uin</p>
     */
    public $Operator;

    /**
     * @var string <p>代金券主类型 has_price 为有价现金券 no_price 为无价代金券</p>
     */
    public $VoucherMainType;

    /**
     * @var string <p>代金券副类型 discount 为折扣券 deduct 为抵扣券</p>
     */
    public $VoucherSubType;

    /**
     * @var string <p>券有效时间开始时间</p>
     */
    public $StartTimeFrom;

    /**
     * @var string <p>券有效时间结束时间</p>
     */
    public $StartTimeTo;

    /**
     * @var string <p>券失效时间开始时间</p>
     */
    public $EndTimeFrom;

    /**
     * @var string <p>券失效时间结束时间</p>
     */
    public $EndTimeTo;

    /**
     * @var string <p>发券时间开始时间</p>
     */
    public $CreateTimeFrom;

    /**
     * @var string <p>发券时间结束时间</p>
     */
    public $CreateTimeTo;

    /**
     * @var string <p>语言参数</p><p>默认值：zh</p><p>期望返回产品名称中文或其他语言，目前仅支持中文、英文；填&quot;zh&quot;或不填时返回中文，其他情况返回英文</p>
     */
    public $Lang;

    /**
     * @param integer $Limit <p>一页多少条数据，默认是20条，最大不超过1000</p>
     * @param integer $Offset <p>第多少页，默认是1</p>
     * @param string $Status <p>券状态：待使用：unUsed，已使用：xa0used，已发货：delivered，已作废：xa0cancel，已过期：overdue</p>
     * @param string $VoucherId <p>代金券id</p>
     * @param string $CodeId <p>代金券订单id</p>
     * @param string $ProductCode <p>商品码</p>
     * @param string $ActivityId <p>活动id</p>
     * @param string $VoucherName <p>代金券名称</p>
     * @param string $TimeFrom <p>发放开始时间,例：2021-01-01</p>
     * @param string $TimeTo <p>发放结束时间，例：2021-01-01</p>
     * @param string $SortField <p>指定排序字段：BeginTime开始时间、EndTime到期时间、CreateTime创建时间</p>
     * @param string $SortOrder <p>指定升序降序：desc、asc</p>
     * @param string $PayMode <p>付费模式，postPay后付费/prePay预付费/riPay预留实例/&quot;&quot;或者&quot;*&quot;表示全部模式，如果payMode为&quot;&quot;或&quot;*&quot;，那么productCode与subProductCode必须传空</p>
     * @param string $PayScene <p>付费场景PayMode=postPay时：spotpay-竞价实例,&quot;settle account&quot;-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景</p>
     * @param string $Operator <p>操作人，默认就是用户uin</p>
     * @param string $VoucherMainType <p>代金券主类型 has_price 为有价现金券 no_price 为无价代金券</p>
     * @param string $VoucherSubType <p>代金券副类型 discount 为折扣券 deduct 为抵扣券</p>
     * @param string $StartTimeFrom <p>券有效时间开始时间</p>
     * @param string $StartTimeTo <p>券有效时间结束时间</p>
     * @param string $EndTimeFrom <p>券失效时间开始时间</p>
     * @param string $EndTimeTo <p>券失效时间结束时间</p>
     * @param string $CreateTimeFrom <p>发券时间开始时间</p>
     * @param string $CreateTimeTo <p>发券时间结束时间</p>
     * @param string $Lang <p>语言参数</p><p>默认值：zh</p><p>期望返回产品名称中文或其他语言，目前仅支持中文、英文；填&quot;zh&quot;或不填时返回中文，其他情况返回英文</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("CodeId",$param) and $param["CodeId"] !== null) {
            $this->CodeId = $param["CodeId"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("VoucherName",$param) and $param["VoucherName"] !== null) {
            $this->VoucherName = $param["VoucherName"];
        }

        if (array_key_exists("TimeFrom",$param) and $param["TimeFrom"] !== null) {
            $this->TimeFrom = $param["TimeFrom"];
        }

        if (array_key_exists("TimeTo",$param) and $param["TimeTo"] !== null) {
            $this->TimeTo = $param["TimeTo"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayScene",$param) and $param["PayScene"] !== null) {
            $this->PayScene = $param["PayScene"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("VoucherMainType",$param) and $param["VoucherMainType"] !== null) {
            $this->VoucherMainType = $param["VoucherMainType"];
        }

        if (array_key_exists("VoucherSubType",$param) and $param["VoucherSubType"] !== null) {
            $this->VoucherSubType = $param["VoucherSubType"];
        }

        if (array_key_exists("StartTimeFrom",$param) and $param["StartTimeFrom"] !== null) {
            $this->StartTimeFrom = $param["StartTimeFrom"];
        }

        if (array_key_exists("StartTimeTo",$param) and $param["StartTimeTo"] !== null) {
            $this->StartTimeTo = $param["StartTimeTo"];
        }

        if (array_key_exists("EndTimeFrom",$param) and $param["EndTimeFrom"] !== null) {
            $this->EndTimeFrom = $param["EndTimeFrom"];
        }

        if (array_key_exists("EndTimeTo",$param) and $param["EndTimeTo"] !== null) {
            $this->EndTimeTo = $param["EndTimeTo"];
        }

        if (array_key_exists("CreateTimeFrom",$param) and $param["CreateTimeFrom"] !== null) {
            $this->CreateTimeFrom = $param["CreateTimeFrom"];
        }

        if (array_key_exists("CreateTimeTo",$param) and $param["CreateTimeTo"] !== null) {
            $this->CreateTimeTo = $param["CreateTimeTo"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }
    }
}

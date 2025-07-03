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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述代理商代付的订单信息
 *
 * @method string getDealId() 获取订单自增 ID【请勿依赖该字段作为唯一标识】
 * @method void setDealId(string $DealId) 设置订单自增 ID【请勿依赖该字段作为唯一标识】
 * @method string getDealName() 获取订单号【订单唯一键】
 * @method void setDealName(string $DealName) 设置订单号【订单唯一键】
 * @method string getGoodsCategoryId() 获取商品类型 ID
 * @method void setGoodsCategoryId(string $GoodsCategoryId) 设置商品类型 ID
 * @method string getOwnerUin() 获取订单所有者
 * @method void setOwnerUin(string $OwnerUin) 设置订单所有者
 * @method string getAppId() 获取订单所有者对应 appId
 * @method void setAppId(string $AppId) 设置订单所有者对应 appId
 * @method string getGoodsNum() 获取商品数量
 * @method void setGoodsNum(string $GoodsNum) 设置商品数量
 * @method DealGoodsPriceNewElem getGoodsPrice() 获取价格详情
 * @method void setGoodsPrice(DealGoodsPriceNewElem $GoodsPrice) 设置价格详情
 * @method string getCreater() 获取下单人
 * @method void setCreater(string $Creater) 设置下单人
 * @method string getCreatTime() 获取下单时间
 * @method void setCreatTime(string $CreatTime) 设置下单时间
 * @method string getPayEndTime() 获取支付结束时间
 * @method void setPayEndTime(string $PayEndTime) 设置支付结束时间
 * @method string getBillId() 获取扣费流水号
 * @method void setBillId(string $BillId) 设置扣费流水号
 * @method string getPayer() 获取支付人
 * @method void setPayer(string $Payer) 设置支付人
 * @method string getDealStatus() 获取订单状态，中文描述
 * @method void setDealStatus(string $DealStatus) 设置订单状态，中文描述
 * @method string getStatus() 获取订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
 * @method void setStatus(string $Status) 设置订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
 * @method string getGoodsName() 获取产品名称
 * @method void setGoodsName(string $GoodsName) 设置产品名称
 * @method string getClientRemark() 获取客户备注
 * @method void setClientRemark(string $ClientRemark) 设置客户备注
 * @method string getActionType() 获取订单操作类型，"purchase":"新购","upgrade":"升配","upConvertExpire":"升配","downgrade":"降配","downConvertExpire":"降配","renew":"续费","refund":"退货","modifyNetworkMode":"调整带宽模式","modifyNetworkSize":"调整带宽大小","preMoveOut":"资源迁出","preMoveIn":"资源迁入","preToPost":"包年包月转按量","modify":"变配","postMoveOut":"资源迁出","postMoveIn":"资源迁入","recoverRefundForward":"调账补偿","recoverPayReserve":"调账补偿","recoverPayForward":"调账扣费","recoverRefundReserve":"调账扣费"
 * @method void setActionType(string $ActionType) 设置订单操作类型，"purchase":"新购","upgrade":"升配","upConvertExpire":"升配","downgrade":"降配","downConvertExpire":"降配","renew":"续费","refund":"退货","modifyNetworkMode":"调整带宽模式","modifyNetworkSize":"调整带宽大小","preMoveOut":"资源迁出","preMoveIn":"资源迁入","preToPost":"包年包月转按量","modify":"变配","postMoveOut":"资源迁出","postMoveIn":"资源迁入","recoverRefundForward":"调账补偿","recoverPayReserve":"调账补偿","recoverPayForward":"调账扣费","recoverRefundReserve":"调账扣费"
 * @method string getVoucherDecline() 获取代金券抵扣金额，单位分
 * @method void setVoucherDecline(string $VoucherDecline) 设置代金券抵扣金额，单位分
 * @method string getBigDealId() 获取大订单号
 * @method void setBigDealId(string $BigDealId) 设置大订单号
 * @method string getClientType() 获取客户类型（new：自拓；old：官网；assign：指派；direct：直销；direct_newopp：直销(新商机)）
 * @method void setClientType(string $ClientType) 设置客户类型（new：自拓；old：官网；assign：指派；direct：直销；direct_newopp：直销(新商机)）
 * @method string getProjectType() 获取项目类型（self：自拓；repeat：直销；platform：官网合作）
 * @method void setProjectType(string $ProjectType) 设置项目类型（self：自拓；repeat：直销；platform：官网合作）
 * @method string getSalesUin() 获取业务员账号ID
 * @method void setSalesUin(string $SalesUin) 设置业务员账号ID
 * @method string getPayerMode() 获取支付方式，0：自付；1：代付
 * @method void setPayerMode(string $PayerMode) 设置支付方式，0：自付；1：代付
 * @method string getActivityId() 获取活动ID
 * @method void setActivityId(string $ActivityId) 设置活动ID
 * @method string getOverdueTime() 获取订单过期时间
 * @method void setOverdueTime(string $OverdueTime) 设置订单过期时间
 * @method array getProductInfo() 获取产品详情
 * @method void setProductInfo(array $ProductInfo) 设置产品详情
 * @method string getPaymentMethod() 获取付款方式
 * @method void setPaymentMethod(string $PaymentMethod) 设置付款方式
 * @method string getUpdateTime() 获取订单更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置订单更新时间
 * @method array getResourceIds() 获取资源id
 * @method void setResourceIds(array $ResourceIds) 设置资源id
 * @method array getRefundMap() 获取退款单的原订单信息。当前仅 DescribeClientDealsByCache 接口会返回该字段
 * @method void setRefundMap(array $RefundMap) 设置退款单的原订单信息。当前仅 DescribeClientDealsByCache 接口会返回该字段
 * @method string getSubGoodsName() 获取子产品名称
 * @method void setSubGoodsName(string $SubGoodsName) 设置子产品名称
 */
class AgentDealNewElem extends AbstractModel
{
    /**
     * @var string 订单自增 ID【请勿依赖该字段作为唯一标识】
     */
    public $DealId;

    /**
     * @var string 订单号【订单唯一键】
     */
    public $DealName;

    /**
     * @var string 商品类型 ID
     */
    public $GoodsCategoryId;

    /**
     * @var string 订单所有者
     */
    public $OwnerUin;

    /**
     * @var string 订单所有者对应 appId
     */
    public $AppId;

    /**
     * @var string 商品数量
     */
    public $GoodsNum;

    /**
     * @var DealGoodsPriceNewElem 价格详情
     */
    public $GoodsPrice;

    /**
     * @var string 下单人
     */
    public $Creater;

    /**
     * @var string 下单时间
     */
    public $CreatTime;

    /**
     * @var string 支付结束时间
     */
    public $PayEndTime;

    /**
     * @var string 扣费流水号
     */
    public $BillId;

    /**
     * @var string 支付人
     */
    public $Payer;

    /**
     * @var string 订单状态，中文描述
     */
    public $DealStatus;

    /**
     * @var string 订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
     */
    public $Status;

    /**
     * @var string 产品名称
     */
    public $GoodsName;

    /**
     * @var string 客户备注
     */
    public $ClientRemark;

    /**
     * @var string 订单操作类型，"purchase":"新购","upgrade":"升配","upConvertExpire":"升配","downgrade":"降配","downConvertExpire":"降配","renew":"续费","refund":"退货","modifyNetworkMode":"调整带宽模式","modifyNetworkSize":"调整带宽大小","preMoveOut":"资源迁出","preMoveIn":"资源迁入","preToPost":"包年包月转按量","modify":"变配","postMoveOut":"资源迁出","postMoveIn":"资源迁入","recoverRefundForward":"调账补偿","recoverPayReserve":"调账补偿","recoverPayForward":"调账扣费","recoverRefundReserve":"调账扣费"
     */
    public $ActionType;

    /**
     * @var string 代金券抵扣金额，单位分
     */
    public $VoucherDecline;

    /**
     * @var string 大订单号
     */
    public $BigDealId;

    /**
     * @var string 客户类型（new：自拓；old：官网；assign：指派；direct：直销；direct_newopp：直销(新商机)）
     */
    public $ClientType;

    /**
     * @var string 项目类型（self：自拓；repeat：直销；platform：官网合作）
     */
    public $ProjectType;

    /**
     * @var string 业务员账号ID
     */
    public $SalesUin;

    /**
     * @var string 支付方式，0：自付；1：代付
     */
    public $PayerMode;

    /**
     * @var string 活动ID
     */
    public $ActivityId;

    /**
     * @var string 订单过期时间
     */
    public $OverdueTime;

    /**
     * @var array 产品详情
     */
    public $ProductInfo;

    /**
     * @var string 付款方式
     */
    public $PaymentMethod;

    /**
     * @var string 订单更新时间
     */
    public $UpdateTime;

    /**
     * @var array 资源id
     */
    public $ResourceIds;

    /**
     * @var array 退款单的原订单信息。当前仅 DescribeClientDealsByCache 接口会返回该字段
     */
    public $RefundMap;

    /**
     * @var string 子产品名称
     */
    public $SubGoodsName;

    /**
     * @param string $DealId 订单自增 ID【请勿依赖该字段作为唯一标识】
     * @param string $DealName 订单号【订单唯一键】
     * @param string $GoodsCategoryId 商品类型 ID
     * @param string $OwnerUin 订单所有者
     * @param string $AppId 订单所有者对应 appId
     * @param string $GoodsNum 商品数量
     * @param DealGoodsPriceNewElem $GoodsPrice 价格详情
     * @param string $Creater 下单人
     * @param string $CreatTime 下单时间
     * @param string $PayEndTime 支付结束时间
     * @param string $BillId 扣费流水号
     * @param string $Payer 支付人
     * @param string $DealStatus 订单状态，中文描述
     * @param string $Status 订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
     * @param string $GoodsName 产品名称
     * @param string $ClientRemark 客户备注
     * @param string $ActionType 订单操作类型，"purchase":"新购","upgrade":"升配","upConvertExpire":"升配","downgrade":"降配","downConvertExpire":"降配","renew":"续费","refund":"退货","modifyNetworkMode":"调整带宽模式","modifyNetworkSize":"调整带宽大小","preMoveOut":"资源迁出","preMoveIn":"资源迁入","preToPost":"包年包月转按量","modify":"变配","postMoveOut":"资源迁出","postMoveIn":"资源迁入","recoverRefundForward":"调账补偿","recoverPayReserve":"调账补偿","recoverPayForward":"调账扣费","recoverRefundReserve":"调账扣费"
     * @param string $VoucherDecline 代金券抵扣金额，单位分
     * @param string $BigDealId 大订单号
     * @param string $ClientType 客户类型（new：自拓；old：官网；assign：指派；direct：直销；direct_newopp：直销(新商机)）
     * @param string $ProjectType 项目类型（self：自拓；repeat：直销；platform：官网合作）
     * @param string $SalesUin 业务员账号ID
     * @param string $PayerMode 支付方式，0：自付；1：代付
     * @param string $ActivityId 活动ID
     * @param string $OverdueTime 订单过期时间
     * @param array $ProductInfo 产品详情
     * @param string $PaymentMethod 付款方式
     * @param string $UpdateTime 订单更新时间
     * @param array $ResourceIds 资源id
     * @param array $RefundMap 退款单的原订单信息。当前仅 DescribeClientDealsByCache 接口会返回该字段
     * @param string $SubGoodsName 子产品名称
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
        if (array_key_exists("DealId",$param) and $param["DealId"] !== null) {
            $this->DealId = $param["DealId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("GoodsCategoryId",$param) and $param["GoodsCategoryId"] !== null) {
            $this->GoodsCategoryId = $param["GoodsCategoryId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("GoodsPrice",$param) and $param["GoodsPrice"] !== null) {
            $this->GoodsPrice = new DealGoodsPriceNewElem();
            $this->GoodsPrice->deserialize($param["GoodsPrice"]);
        }

        if (array_key_exists("Creater",$param) and $param["Creater"] !== null) {
            $this->Creater = $param["Creater"];
        }

        if (array_key_exists("CreatTime",$param) and $param["CreatTime"] !== null) {
            $this->CreatTime = $param["CreatTime"];
        }

        if (array_key_exists("PayEndTime",$param) and $param["PayEndTime"] !== null) {
            $this->PayEndTime = $param["PayEndTime"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("Payer",$param) and $param["Payer"] !== null) {
            $this->Payer = $param["Payer"];
        }

        if (array_key_exists("DealStatus",$param) and $param["DealStatus"] !== null) {
            $this->DealStatus = $param["DealStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GoodsName",$param) and $param["GoodsName"] !== null) {
            $this->GoodsName = $param["GoodsName"];
        }

        if (array_key_exists("ClientRemark",$param) and $param["ClientRemark"] !== null) {
            $this->ClientRemark = $param["ClientRemark"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("VoucherDecline",$param) and $param["VoucherDecline"] !== null) {
            $this->VoucherDecline = $param["VoucherDecline"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("ProjectType",$param) and $param["ProjectType"] !== null) {
            $this->ProjectType = $param["ProjectType"];
        }

        if (array_key_exists("SalesUin",$param) and $param["SalesUin"] !== null) {
            $this->SalesUin = $param["SalesUin"];
        }

        if (array_key_exists("PayerMode",$param) and $param["PayerMode"] !== null) {
            $this->PayerMode = $param["PayerMode"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("OverdueTime",$param) and $param["OverdueTime"] !== null) {
            $this->OverdueTime = $param["OverdueTime"];
        }

        if (array_key_exists("ProductInfo",$param) and $param["ProductInfo"] !== null) {
            $this->ProductInfo = [];
            foreach ($param["ProductInfo"] as $key => $value){
                $obj = new ProductInfoElem();
                $obj->deserialize($value);
                array_push($this->ProductInfo, $obj);
            }
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("RefundMap",$param) and $param["RefundMap"] !== null) {
            $this->RefundMap = [];
            foreach ($param["RefundMap"] as $key => $value){
                $obj = new RefundMap();
                $obj->deserialize($value);
                array_push($this->RefundMap, $obj);
            }
        }

        if (array_key_exists("SubGoodsName",$param) and $param["SubGoodsName"] !== null) {
            $this->SubGoodsName = $param["SubGoodsName"];
        }
    }
}

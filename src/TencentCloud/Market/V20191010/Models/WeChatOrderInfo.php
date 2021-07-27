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
namespace TencentCloud\Market\V20191010\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业微信订单信息
 *
 * @method string getOrderId() 获取企业微信订单号
 * @method void setOrderId(string $OrderId) 设置企业微信订单号
 * @method integer getOrderStatus() 获取订单状态。0-未⽀支付，1-已⽀支付，2-已关闭， 3-未⽀支付且已过期， 4-申请退款中， 5-申请退款成功， 6-退款被拒绝
 * @method void setOrderStatus(integer $OrderStatus) 设置订单状态。0-未⽀支付，1-已⽀支付，2-已关闭， 3-未⽀支付且已过期， 4-申请退款中， 5-申请退款成功， 6-退款被拒绝
 * @method integer getOrderType() 获取订单类型。0-普通订单，1-扩容订单，2-续期，3-版本变更更
 * @method void setOrderType(integer $OrderType) 设置订单类型。0-普通订单，1-扩容订单，2-续期，3-版本变更更
 * @method string getSuiteId() 获取应⽤id
 * @method void setSuiteId(string $SuiteId) 设置应⽤id
 * @method string getEditionId() 获取购买版本ID
 * @method void setEditionId(string $EditionId) 设置购买版本ID
 * @method string getEditionName() 获取购买版本名称
 * @method void setEditionName(string $EditionName) 设置购买版本名称
 * @method integer getPrice() 获取实付款金额，单位分
 * @method void setPrice(integer $Price) 设置实付款金额，单位分
 * @method integer getOrderTime() 获取下单时间
 * @method void setOrderTime(integer $OrderTime) 设置下单时间
 * @method integer getPaidTime() 获取付款时间
 * @method void setPaidTime(integer $PaidTime) 设置付款时间
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getUseBeginTime() 获取资源使用开始时间
 * @method void setUseBeginTime(integer $UseBeginTime) 设置资源使用开始时间
 * @method integer getUseEndTime() 获取资源使用结束时间
 * @method void setUseEndTime(integer $UseEndTime) 设置资源使用结束时间
 * @method OfflineProductDeal getDeals() 获取磐石详细的四层订单
 * @method void setDeals(OfflineProductDeal $Deals) 设置磐石详细的四层订单
 */
class WeChatOrderInfo extends AbstractModel
{
    /**
     * @var string 企业微信订单号
     */
    public $OrderId;

    /**
     * @var integer 订单状态。0-未⽀支付，1-已⽀支付，2-已关闭， 3-未⽀支付且已过期， 4-申请退款中， 5-申请退款成功， 6-退款被拒绝
     */
    public $OrderStatus;

    /**
     * @var integer 订单类型。0-普通订单，1-扩容订单，2-续期，3-版本变更更
     */
    public $OrderType;

    /**
     * @var string 应⽤id
     */
    public $SuiteId;

    /**
     * @var string 购买版本ID
     */
    public $EditionId;

    /**
     * @var string 购买版本名称
     */
    public $EditionName;

    /**
     * @var integer 实付款金额，单位分
     */
    public $Price;

    /**
     * @var integer 下单时间
     */
    public $OrderTime;

    /**
     * @var integer 付款时间
     */
    public $PaidTime;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 资源使用开始时间
     */
    public $UseBeginTime;

    /**
     * @var integer 资源使用结束时间
     */
    public $UseEndTime;

    /**
     * @var OfflineProductDeal 磐石详细的四层订单
     */
    public $Deals;

    /**
     * @param string $OrderId 企业微信订单号
     * @param integer $OrderStatus 订单状态。0-未⽀支付，1-已⽀支付，2-已关闭， 3-未⽀支付且已过期， 4-申请退款中， 5-申请退款成功， 6-退款被拒绝
     * @param integer $OrderType 订单类型。0-普通订单，1-扩容订单，2-续期，3-版本变更更
     * @param string $SuiteId 应⽤id
     * @param string $EditionId 购买版本ID
     * @param string $EditionName 购买版本名称
     * @param integer $Price 实付款金额，单位分
     * @param integer $OrderTime 下单时间
     * @param integer $PaidTime 付款时间
     * @param string $Remark 备注
     * @param integer $UseBeginTime 资源使用开始时间
     * @param integer $UseEndTime 资源使用结束时间
     * @param OfflineProductDeal $Deals 磐石详细的四层订单
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("SuiteId",$param) and $param["SuiteId"] !== null) {
            $this->SuiteId = $param["SuiteId"];
        }

        if (array_key_exists("EditionId",$param) and $param["EditionId"] !== null) {
            $this->EditionId = $param["EditionId"];
        }

        if (array_key_exists("EditionName",$param) and $param["EditionName"] !== null) {
            $this->EditionName = $param["EditionName"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("OrderTime",$param) and $param["OrderTime"] !== null) {
            $this->OrderTime = $param["OrderTime"];
        }

        if (array_key_exists("PaidTime",$param) and $param["PaidTime"] !== null) {
            $this->PaidTime = $param["PaidTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UseBeginTime",$param) and $param["UseBeginTime"] !== null) {
            $this->UseBeginTime = $param["UseBeginTime"];
        }

        if (array_key_exists("UseEndTime",$param) and $param["UseEndTime"] !== null) {
            $this->UseEndTime = $param["UseEndTime"];
        }

        if (array_key_exists("Deals",$param) and $param["Deals"] !== null) {
            $this->Deals = new OfflineProductDeal();
            $this->Deals->deserialize($param["Deals"]);
        }
    }
}

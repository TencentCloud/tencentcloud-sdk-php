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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专用集群订单
 *
 * @method string getDedicatedClusterId() 获取专用集群id
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置专用集群id
 * @method string getDedicatedClusterTypeId() 获取专用集群类型id（移到下一层级，已经废弃，后续将删除）
 * @method void setDedicatedClusterTypeId(string $DedicatedClusterTypeId) 设置专用集群类型id（移到下一层级，已经废弃，后续将删除）
 * @method array getSupportedStorageType() 获取支持的存储类型列表（移到下一层级，已经废弃，后续将删除）
 * @method void setSupportedStorageType(array $SupportedStorageType) 设置支持的存储类型列表（移到下一层级，已经废弃，后续将删除）
 * @method array getSupportedUplinkSpeed() 获取支持的上连交换机的链路传输速率(GiB)（移到下一层级，已经废弃，后续将删除）
 * @method void setSupportedUplinkSpeed(array $SupportedUplinkSpeed) 设置支持的上连交换机的链路传输速率(GiB)（移到下一层级，已经废弃，后续将删除）
 * @method array getSupportedInstanceFamily() 获取支持的实例族列表（移到下一层级，已经废弃，后续将删除）
 * @method void setSupportedInstanceFamily(array $SupportedInstanceFamily) 设置支持的实例族列表（移到下一层级，已经废弃，后续将删除）
 * @method integer getWeight() 获取地板承重要求(KG)
 * @method void setWeight(integer $Weight) 设置地板承重要求(KG)
 * @method float getPowerDraw() 获取功率要求(KW)
 * @method void setPowerDraw(float $PowerDraw) 设置功率要求(KW)
 * @method string getOrderStatus() 获取订单状态
 * @method void setOrderStatus(string $OrderStatus) 设置订单状态
 * @method string getCreateTime() 获取订单创建的时间
 * @method void setCreateTime(string $CreateTime) 设置订单创建的时间
 * @method string getDedicatedClusterOrderId() 获取大订单ID
 * @method void setDedicatedClusterOrderId(string $DedicatedClusterOrderId) 设置大订单ID
 * @method string getAction() 获取订单类型，创建CREATE或扩容EXTEND
 * @method void setAction(string $Action) 设置订单类型，创建CREATE或扩容EXTEND
 * @method array getDedicatedClusterOrderItems() 获取子订单详情列表
 * @method void setDedicatedClusterOrderItems(array $DedicatedClusterOrderItems) 设置子订单详情列表
 * @method integer getCpu() 获取cpu值
 * @method void setCpu(integer $Cpu) 设置cpu值
 * @method integer getMem() 获取mem值
 * @method void setMem(integer $Mem) 设置mem值
 * @method integer getGpu() 获取gpu值
 * @method void setGpu(integer $Gpu) 设置gpu值
 * @method integer getPayStatus() 获取0代表未支付，1代表已支付
 * @method void setPayStatus(integer $PayStatus) 设置0代表未支付，1代表已支付
 * @method string getPayType() 获取支付方式，一次性、按月、按年
 * @method void setPayType(string $PayType) 设置支付方式，一次性、按月、按年
 * @method string getTimeUnit() 获取购买时长的单位
 * @method void setTimeUnit(string $TimeUnit) 设置购买时长的单位
 * @method integer getTimeSpan() 获取购买时长
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长
 * @method string getOrderType() 获取订单类型
 * @method void setOrderType(string $OrderType) 设置订单类型
 * @method string getCheckStatus() 获取验收状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckStatus(string $CheckStatus) 设置验收状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliverExpectTime() 获取交付预期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverExpectTime(string $DeliverExpectTime) 设置交付预期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliverFinishTime() 获取交付实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverFinishTime(string $DeliverFinishTime) 设置交付实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckExpectTime() 获取验收预期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckExpectTime(string $CheckExpectTime) 设置验收预期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckFinishTime() 获取验收实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckFinishTime(string $CheckFinishTime) 设置验收实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderSLA() 获取订单SLA
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderSLA(string $OrderSLA) 设置订单SLA
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderPayPlan() 获取订单支付计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderPayPlan(string $OrderPayPlan) 设置订单支付计划
注意：此字段可能返回 null，表示取不到有效值。
 */
class DedicatedClusterOrder extends AbstractModel
{
    /**
     * @var string 专用集群id
     */
    public $DedicatedClusterId;

    /**
     * @var string 专用集群类型id（移到下一层级，已经废弃，后续将删除）
     */
    public $DedicatedClusterTypeId;

    /**
     * @var array 支持的存储类型列表（移到下一层级，已经废弃，后续将删除）
     */
    public $SupportedStorageType;

    /**
     * @var array 支持的上连交换机的链路传输速率(GiB)（移到下一层级，已经废弃，后续将删除）
     */
    public $SupportedUplinkSpeed;

    /**
     * @var array 支持的实例族列表（移到下一层级，已经废弃，后续将删除）
     */
    public $SupportedInstanceFamily;

    /**
     * @var integer 地板承重要求(KG)
     */
    public $Weight;

    /**
     * @var float 功率要求(KW)
     */
    public $PowerDraw;

    /**
     * @var string 订单状态
     */
    public $OrderStatus;

    /**
     * @var string 订单创建的时间
     */
    public $CreateTime;

    /**
     * @var string 大订单ID
     */
    public $DedicatedClusterOrderId;

    /**
     * @var string 订单类型，创建CREATE或扩容EXTEND
     */
    public $Action;

    /**
     * @var array 子订单详情列表
     */
    public $DedicatedClusterOrderItems;

    /**
     * @var integer cpu值
     */
    public $Cpu;

    /**
     * @var integer mem值
     */
    public $Mem;

    /**
     * @var integer gpu值
     */
    public $Gpu;

    /**
     * @var integer 0代表未支付，1代表已支付
     */
    public $PayStatus;

    /**
     * @var string 支付方式，一次性、按月、按年
     */
    public $PayType;

    /**
     * @var string 购买时长的单位
     */
    public $TimeUnit;

    /**
     * @var integer 购买时长
     */
    public $TimeSpan;

    /**
     * @var string 订单类型
     */
    public $OrderType;

    /**
     * @var string 验收状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckStatus;

    /**
     * @var string 交付预期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverExpectTime;

    /**
     * @var string 交付实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverFinishTime;

    /**
     * @var string 验收预期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckExpectTime;

    /**
     * @var string 验收实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckFinishTime;

    /**
     * @var string 订单SLA
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderSLA;

    /**
     * @var string 订单支付计划
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderPayPlan;

    /**
     * @param string $DedicatedClusterId 专用集群id
     * @param string $DedicatedClusterTypeId 专用集群类型id（移到下一层级，已经废弃，后续将删除）
     * @param array $SupportedStorageType 支持的存储类型列表（移到下一层级，已经废弃，后续将删除）
     * @param array $SupportedUplinkSpeed 支持的上连交换机的链路传输速率(GiB)（移到下一层级，已经废弃，后续将删除）
     * @param array $SupportedInstanceFamily 支持的实例族列表（移到下一层级，已经废弃，后续将删除）
     * @param integer $Weight 地板承重要求(KG)
     * @param float $PowerDraw 功率要求(KW)
     * @param string $OrderStatus 订单状态
     * @param string $CreateTime 订单创建的时间
     * @param string $DedicatedClusterOrderId 大订单ID
     * @param string $Action 订单类型，创建CREATE或扩容EXTEND
     * @param array $DedicatedClusterOrderItems 子订单详情列表
     * @param integer $Cpu cpu值
     * @param integer $Mem mem值
     * @param integer $Gpu gpu值
     * @param integer $PayStatus 0代表未支付，1代表已支付
     * @param string $PayType 支付方式，一次性、按月、按年
     * @param string $TimeUnit 购买时长的单位
     * @param integer $TimeSpan 购买时长
     * @param string $OrderType 订单类型
     * @param string $CheckStatus 验收状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeliverExpectTime 交付预期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeliverFinishTime 交付实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckExpectTime 验收预期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckFinishTime 验收实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderSLA 订单SLA
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderPayPlan 订单支付计划
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("DedicatedClusterTypeId",$param) and $param["DedicatedClusterTypeId"] !== null) {
            $this->DedicatedClusterTypeId = $param["DedicatedClusterTypeId"];
        }

        if (array_key_exists("SupportedStorageType",$param) and $param["SupportedStorageType"] !== null) {
            $this->SupportedStorageType = $param["SupportedStorageType"];
        }

        if (array_key_exists("SupportedUplinkSpeed",$param) and $param["SupportedUplinkSpeed"] !== null) {
            $this->SupportedUplinkSpeed = $param["SupportedUplinkSpeed"];
        }

        if (array_key_exists("SupportedInstanceFamily",$param) and $param["SupportedInstanceFamily"] !== null) {
            $this->SupportedInstanceFamily = $param["SupportedInstanceFamily"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PowerDraw",$param) and $param["PowerDraw"] !== null) {
            $this->PowerDraw = $param["PowerDraw"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DedicatedClusterOrderId",$param) and $param["DedicatedClusterOrderId"] !== null) {
            $this->DedicatedClusterOrderId = $param["DedicatedClusterOrderId"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("DedicatedClusterOrderItems",$param) and $param["DedicatedClusterOrderItems"] !== null) {
            $this->DedicatedClusterOrderItems = [];
            foreach ($param["DedicatedClusterOrderItems"] as $key => $value){
                $obj = new DedicatedClusterOrderItem();
                $obj->deserialize($value);
                array_push($this->DedicatedClusterOrderItems, $obj);
            }
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("PayStatus",$param) and $param["PayStatus"] !== null) {
            $this->PayStatus = $param["PayStatus"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("DeliverExpectTime",$param) and $param["DeliverExpectTime"] !== null) {
            $this->DeliverExpectTime = $param["DeliverExpectTime"];
        }

        if (array_key_exists("DeliverFinishTime",$param) and $param["DeliverFinishTime"] !== null) {
            $this->DeliverFinishTime = $param["DeliverFinishTime"];
        }

        if (array_key_exists("CheckExpectTime",$param) and $param["CheckExpectTime"] !== null) {
            $this->CheckExpectTime = $param["CheckExpectTime"];
        }

        if (array_key_exists("CheckFinishTime",$param) and $param["CheckFinishTime"] !== null) {
            $this->CheckFinishTime = $param["CheckFinishTime"];
        }

        if (array_key_exists("OrderSLA",$param) and $param["OrderSLA"] !== null) {
            $this->OrderSLA = $param["OrderSLA"];
        }

        if (array_key_exists("OrderPayPlan",$param) and $param["OrderPayPlan"] !== null) {
            $this->OrderPayPlan = $param["OrderPayPlan"];
        }
    }
}

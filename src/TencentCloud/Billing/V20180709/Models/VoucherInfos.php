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
 * 代金券相关信息
 *
 * @method string getOwnerUin() 获取代金券拥有者
 * @method void setOwnerUin(string $OwnerUin) 设置代金券拥有者
 * @method string getStatus() 获取券状态：待使用：unUsed，已使用： used，已发货：delivered，已作废： cancel，已过期：overdue
 * @method void setStatus(string $Status) 设置券状态：待使用：unUsed，已使用： used，已发货：delivered，已作废： cancel，已过期：overdue
 * @method integer getNominalValue() 获取代金券面额（微分）
 * @method void setNominalValue(integer $NominalValue) 设置代金券面额（微分）
 * @method integer getBalance() 获取剩余金额（微分）
 * @method void setBalance(integer $Balance) 设置剩余金额（微分）
 * @method string getVoucherId() 获取代金券id
 * @method void setVoucherId(string $VoucherId) 设置代金券id
 * @method string getPayMode() 获取postPay后付费/prePay预付费/riPay预留实例/空字符串或者'*'表示全部模式
 * @method void setPayMode(string $PayMode) 设置postPay后付费/prePay预付费/riPay预留实例/空字符串或者'*'表示全部模式
 * @method string getPayScene() 获取付费场景PayMode=postPay时：spotpay-竞价实例,"settle account"-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景
 * @method void setPayScene(string $PayScene) 设置付费场景PayMode=postPay时：spotpay-竞价实例,"settle account"-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景
 * @method string getBeginTime() 获取有效期生效时间
 * @method void setBeginTime(string $BeginTime) 设置有效期生效时间
 * @method string getEndTime() 获取有效期截止时间
 * @method void setEndTime(string $EndTime) 设置有效期截止时间
 * @method ApplicableProducts getApplicableProducts() 获取适用商品信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicableProducts(ApplicableProducts $ApplicableProducts) 设置适用商品信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExcludedProducts() 获取不适用商品信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludedProducts(array $ExcludedProducts) 设置不适用商品信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class VoucherInfos extends AbstractModel
{
    /**
     * @var string 代金券拥有者
     */
    public $OwnerUin;

    /**
     * @var string 券状态：待使用：unUsed，已使用： used，已发货：delivered，已作废： cancel，已过期：overdue
     */
    public $Status;

    /**
     * @var integer 代金券面额（微分）
     */
    public $NominalValue;

    /**
     * @var integer 剩余金额（微分）
     */
    public $Balance;

    /**
     * @var string 代金券id
     */
    public $VoucherId;

    /**
     * @var string postPay后付费/prePay预付费/riPay预留实例/空字符串或者'*'表示全部模式
     */
    public $PayMode;

    /**
     * @var string 付费场景PayMode=postPay时：spotpay-竞价实例,"settle account"-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景
     */
    public $PayScene;

    /**
     * @var string 有效期生效时间
     */
    public $BeginTime;

    /**
     * @var string 有效期截止时间
     */
    public $EndTime;

    /**
     * @var ApplicableProducts 适用商品信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicableProducts;

    /**
     * @var array 不适用商品信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludedProducts;

    /**
     * @param string $OwnerUin 代金券拥有者
     * @param string $Status 券状态：待使用：unUsed，已使用： used，已发货：delivered，已作废： cancel，已过期：overdue
     * @param integer $NominalValue 代金券面额（微分）
     * @param integer $Balance 剩余金额（微分）
     * @param string $VoucherId 代金券id
     * @param string $PayMode postPay后付费/prePay预付费/riPay预留实例/空字符串或者'*'表示全部模式
     * @param string $PayScene 付费场景PayMode=postPay时：spotpay-竞价实例,"settle account"-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景
     * @param string $BeginTime 有效期生效时间
     * @param string $EndTime 有效期截止时间
     * @param ApplicableProducts $ApplicableProducts 适用商品信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludedProducts 不适用商品信息
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
        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NominalValue",$param) and $param["NominalValue"] !== null) {
            $this->NominalValue = $param["NominalValue"];
        }

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayScene",$param) and $param["PayScene"] !== null) {
            $this->PayScene = $param["PayScene"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ApplicableProducts",$param) and $param["ApplicableProducts"] !== null) {
            $this->ApplicableProducts = new ApplicableProducts();
            $this->ApplicableProducts->deserialize($param["ApplicableProducts"]);
        }

        if (array_key_exists("ExcludedProducts",$param) and $param["ExcludedProducts"] !== null) {
            $this->ExcludedProducts = [];
            foreach ($param["ExcludedProducts"] as $key => $value){
                $obj = new ExcludedProducts();
                $obj->deserialize($value);
                array_push($this->ExcludedProducts, $obj);
            }
        }
    }
}

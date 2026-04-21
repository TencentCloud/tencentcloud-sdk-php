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
 * 成本分析交易类型复杂类型
 *
 * @method string getActionType() 获取<p>交易类型code</p><p>枚举值：</p><ul><li>prepay_purchase： 包年包月新购</li><li>prepay_renew： 包年包月续费</li><li>prepay_modify： 包年包月配置变更</li><li>prepay_return： 包年包月退款</li><li>postpay_deduct_h： 按量计费小时结</li><li>postpay_deduct_d： 按量计费日结</li><li>postpay_deduct_m： 按量计费月结</li><li>offline_deduct： 线下项目扣费</li><li>online_deduct： 线下产品扣费</li><li>recon_deduct： 调账扣费</li><li>recon_increase： 调账补偿</li><li>postpay_deduct_s： 竞价实例小时结</li><li>recon_increase_f： 线下项目调账补偿</li><li>pre_to_post： 包年包月转按量</li><li>svp_hour_pay： 节省计划小时费用</li><li>recon_guarantee： 保底扣款</li><li>billVirtualId： 月度计费精度差异</li></ul>
 * @method void setActionType(string $ActionType) 设置<p>交易类型code</p><p>枚举值：</p><ul><li>prepay_purchase： 包年包月新购</li><li>prepay_renew： 包年包月续费</li><li>prepay_modify： 包年包月配置变更</li><li>prepay_return： 包年包月退款</li><li>postpay_deduct_h： 按量计费小时结</li><li>postpay_deduct_d： 按量计费日结</li><li>postpay_deduct_m： 按量计费月结</li><li>offline_deduct： 线下项目扣费</li><li>online_deduct： 线下产品扣费</li><li>recon_deduct： 调账扣费</li><li>recon_increase： 调账补偿</li><li>postpay_deduct_s： 竞价实例小时结</li><li>recon_increase_f： 线下项目调账补偿</li><li>pre_to_post： 包年包月转按量</li><li>svp_hour_pay： 节省计划小时费用</li><li>recon_guarantee： 保底扣款</li><li>billVirtualId： 月度计费精度差异</li></ul>
 * @method string getActionTypeName() 获取<p>交易类型Name</p>
 * @method void setActionTypeName(string $ActionTypeName) 设置<p>交易类型Name</p>
 */
class AnalyseActionTypeDetail extends AbstractModel
{
    /**
     * @var string <p>交易类型code</p><p>枚举值：</p><ul><li>prepay_purchase： 包年包月新购</li><li>prepay_renew： 包年包月续费</li><li>prepay_modify： 包年包月配置变更</li><li>prepay_return： 包年包月退款</li><li>postpay_deduct_h： 按量计费小时结</li><li>postpay_deduct_d： 按量计费日结</li><li>postpay_deduct_m： 按量计费月结</li><li>offline_deduct： 线下项目扣费</li><li>online_deduct： 线下产品扣费</li><li>recon_deduct： 调账扣费</li><li>recon_increase： 调账补偿</li><li>postpay_deduct_s： 竞价实例小时结</li><li>recon_increase_f： 线下项目调账补偿</li><li>pre_to_post： 包年包月转按量</li><li>svp_hour_pay： 节省计划小时费用</li><li>recon_guarantee： 保底扣款</li><li>billVirtualId： 月度计费精度差异</li></ul>
     */
    public $ActionType;

    /**
     * @var string <p>交易类型Name</p>
     */
    public $ActionTypeName;

    /**
     * @param string $ActionType <p>交易类型code</p><p>枚举值：</p><ul><li>prepay_purchase： 包年包月新购</li><li>prepay_renew： 包年包月续费</li><li>prepay_modify： 包年包月配置变更</li><li>prepay_return： 包年包月退款</li><li>postpay_deduct_h： 按量计费小时结</li><li>postpay_deduct_d： 按量计费日结</li><li>postpay_deduct_m： 按量计费月结</li><li>offline_deduct： 线下项目扣费</li><li>online_deduct： 线下产品扣费</li><li>recon_deduct： 调账扣费</li><li>recon_increase： 调账补偿</li><li>postpay_deduct_s： 竞价实例小时结</li><li>recon_increase_f： 线下项目调账补偿</li><li>pre_to_post： 包年包月转按量</li><li>svp_hour_pay： 节省计划小时费用</li><li>recon_guarantee： 保底扣款</li><li>billVirtualId： 月度计费精度差异</li></ul>
     * @param string $ActionTypeName <p>交易类型Name</p>
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }
    }
}

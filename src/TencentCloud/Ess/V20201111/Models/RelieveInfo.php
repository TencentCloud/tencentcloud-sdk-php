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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 解除协议文档中内容信息，包括但不限于：解除理由、解除后仍然有效的条款-保留条款、原合同事项处理-费用结算、原合同事项处理-其他事项、其他约定等。
 *
 * @method string getReason() 获取解除理由，最大支持200个字
 * @method void setReason(string $Reason) 设置解除理由，最大支持200个字
 * @method string getRemainInForceItem() 获取解除后仍然有效的条款，保留条款，最大支持200个字

 * @method void setRemainInForceItem(string $RemainInForceItem) 设置解除后仍然有效的条款，保留条款，最大支持200个字

 * @method string getOriginalExpenseSettlement() 获取原合同事项处理-费用结算，最大支持200个字

 * @method void setOriginalExpenseSettlement(string $OriginalExpenseSettlement) 设置原合同事项处理-费用结算，最大支持200个字

 * @method string getOriginalOtherSettlement() 获取原合同事项处理-其他事项，最大支持200个字

 * @method void setOriginalOtherSettlement(string $OriginalOtherSettlement) 设置原合同事项处理-其他事项，最大支持200个字

 * @method string getOtherDeals() 获取其他约定，最大支持200个字

 * @method void setOtherDeals(string $OtherDeals) 设置其他约定，最大支持200个字
 */
class RelieveInfo extends AbstractModel
{
    /**
     * @var string 解除理由，最大支持200个字
     */
    public $Reason;

    /**
     * @var string 解除后仍然有效的条款，保留条款，最大支持200个字

     */
    public $RemainInForceItem;

    /**
     * @var string 原合同事项处理-费用结算，最大支持200个字

     */
    public $OriginalExpenseSettlement;

    /**
     * @var string 原合同事项处理-其他事项，最大支持200个字

     */
    public $OriginalOtherSettlement;

    /**
     * @var string 其他约定，最大支持200个字

     */
    public $OtherDeals;

    /**
     * @param string $Reason 解除理由，最大支持200个字
     * @param string $RemainInForceItem 解除后仍然有效的条款，保留条款，最大支持200个字

     * @param string $OriginalExpenseSettlement 原合同事项处理-费用结算，最大支持200个字

     * @param string $OriginalOtherSettlement 原合同事项处理-其他事项，最大支持200个字

     * @param string $OtherDeals 其他约定，最大支持200个字
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
        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("RemainInForceItem",$param) and $param["RemainInForceItem"] !== null) {
            $this->RemainInForceItem = $param["RemainInForceItem"];
        }

        if (array_key_exists("OriginalExpenseSettlement",$param) and $param["OriginalExpenseSettlement"] !== null) {
            $this->OriginalExpenseSettlement = $param["OriginalExpenseSettlement"];
        }

        if (array_key_exists("OriginalOtherSettlement",$param) and $param["OriginalOtherSettlement"] !== null) {
            $this->OriginalOtherSettlement = $param["OriginalOtherSettlement"];
        }

        if (array_key_exists("OtherDeals",$param) and $param["OtherDeals"] !== null) {
            $this->OtherDeals = $param["OtherDeals"];
        }
    }
}

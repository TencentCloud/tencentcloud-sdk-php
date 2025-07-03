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
 * 解除协议文档中内容信息，包括但不限于：解除理由、解除后仍然有效的条款-保留条款、原合同事项处理-费用结算、原合同事项处理-其他事项、其他约定等。下面各种字段在解除协议中的位置参考：

![image](https://qcloudimg.tencent-cloud.cn/raw/5087164cfe5a15fa3ced3180842d5da9.png)
 *
 * @method string getReason() 获取解除理由，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
 * @method void setReason(string $Reason) 设置解除理由，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
 * @method string getRemainInForceItem() 获取解除后仍然有效的条款，保留条款，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。

 * @method void setRemainInForceItem(string $RemainInForceItem) 设置解除后仍然有效的条款，保留条款，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。

 * @method string getOriginalExpenseSettlement() 获取原合同事项处理-费用结算，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
 * @method void setOriginalExpenseSettlement(string $OriginalExpenseSettlement) 设置原合同事项处理-费用结算，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
 * @method string getOriginalOtherSettlement() 获取原合同事项处理-其他事项，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
 * @method void setOriginalOtherSettlement(string $OriginalOtherSettlement) 设置原合同事项处理-其他事项，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
 * @method string getOtherDeals() 获取其他约定（如约定的与解除协议存在冲突的，以【其他约定】为准），最大支持200个字，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
 * @method void setOtherDeals(string $OtherDeals) 设置其他约定（如约定的与解除协议存在冲突的，以【其他约定】为准），最大支持200个字，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
 */
class RelieveInfo extends AbstractModel
{
    /**
     * @var string 解除理由，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
     */
    public $Reason;

    /**
     * @var string 解除后仍然有效的条款，保留条款，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。

     */
    public $RemainInForceItem;

    /**
     * @var string 原合同事项处理-费用结算，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
     */
    public $OriginalExpenseSettlement;

    /**
     * @var string 原合同事项处理-其他事项，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
     */
    public $OriginalOtherSettlement;

    /**
     * @var string 其他约定（如约定的与解除协议存在冲突的，以【其他约定】为准），最大支持200个字，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
     */
    public $OtherDeals;

    /**
     * @param string $Reason 解除理由，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
     * @param string $RemainInForceItem 解除后仍然有效的条款，保留条款，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。

     * @param string $OriginalExpenseSettlement 原合同事项处理-费用结算，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
     * @param string $OriginalOtherSettlement 原合同事项处理-其他事项，长度不能超过200，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
     * @param string $OtherDeals 其他约定（如约定的与解除协议存在冲突的，以【其他约定】为准），最大支持200个字，只能由中文、字母、数字、中文标点和英文标点组成(不支持表情)。
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

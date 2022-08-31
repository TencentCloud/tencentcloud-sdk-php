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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云企付结算申请结果
 *
 * @method string getOutSettleId() 获取外部结算流水号
 * @method void setOutSettleId(string $OutSettleId) 设置外部结算流水号
 * @method string getChannelSettleId() 获取渠道结算流水号
 * @method void setChannelSettleId(string $ChannelSettleId) 设置渠道结算流水号
 * @method string getSettleStatus() 获取退款状态。
SUCCESS：结算成功；
FAILED：结算失败；
PROCESSING：结算中;
INIT:初始化;
ACCEPT_FAILED:受理失败,底层银行返回订单不存在
ACCEPTED：受理成功
_UNKNOWN：默认未知
 * @method void setSettleStatus(string $SettleStatus) 设置退款状态。
SUCCESS：结算成功；
FAILED：结算失败；
PROCESSING：结算中;
INIT:初始化;
ACCEPT_FAILED:受理失败,底层银行返回订单不存在
ACCEPTED：受理成功
_UNKNOWN：默认未知
 */
class ApplyOpenBankSettleOrderResult extends AbstractModel
{
    /**
     * @var string 外部结算流水号
     */
    public $OutSettleId;

    /**
     * @var string 渠道结算流水号
     */
    public $ChannelSettleId;

    /**
     * @var string 退款状态。
SUCCESS：结算成功；
FAILED：结算失败；
PROCESSING：结算中;
INIT:初始化;
ACCEPT_FAILED:受理失败,底层银行返回订单不存在
ACCEPTED：受理成功
_UNKNOWN：默认未知
     */
    public $SettleStatus;

    /**
     * @param string $OutSettleId 外部结算流水号
     * @param string $ChannelSettleId 渠道结算流水号
     * @param string $SettleStatus 退款状态。
SUCCESS：结算成功；
FAILED：结算失败；
PROCESSING：结算中;
INIT:初始化;
ACCEPT_FAILED:受理失败,底层银行返回订单不存在
ACCEPTED：受理成功
_UNKNOWN：默认未知
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
        if (array_key_exists("OutSettleId",$param) and $param["OutSettleId"] !== null) {
            $this->OutSettleId = $param["OutSettleId"];
        }

        if (array_key_exists("ChannelSettleId",$param) and $param["ChannelSettleId"] !== null) {
            $this->ChannelSettleId = $param["ChannelSettleId"];
        }

        if (array_key_exists("SettleStatus",$param) and $param["SettleStatus"] !== null) {
            $this->SettleStatus = $param["SettleStatus"];
        }
    }
}

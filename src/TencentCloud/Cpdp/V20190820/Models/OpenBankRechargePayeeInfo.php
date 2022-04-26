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
 * 云企付-充值单收款人信息
 *
 * @method string getPayeeId() 获取收款方标识
收款方类型为电子记账本时，上送渠道电子记账本ID
 * @method void setPayeeId(string $PayeeId) 设置收款方标识
收款方类型为电子记账本时，上送渠道电子记账本ID
 * @method string getPayeeIdType() 获取收款方标识类型
ACCOUNT_BOOK_ID：电子记账本ID
 * @method void setPayeeIdType(string $PayeeIdType) 设置收款方标识类型
ACCOUNT_BOOK_ID：电子记账本ID
 * @method string getPayeeName() 获取收款方名称
 * @method void setPayeeName(string $PayeeName) 设置收款方名称
 */
class OpenBankRechargePayeeInfo extends AbstractModel
{
    /**
     * @var string 收款方标识
收款方类型为电子记账本时，上送渠道电子记账本ID
     */
    public $PayeeId;

    /**
     * @var string 收款方标识类型
ACCOUNT_BOOK_ID：电子记账本ID
     */
    public $PayeeIdType;

    /**
     * @var string 收款方名称
     */
    public $PayeeName;

    /**
     * @param string $PayeeId 收款方标识
收款方类型为电子记账本时，上送渠道电子记账本ID
     * @param string $PayeeIdType 收款方标识类型
ACCOUNT_BOOK_ID：电子记账本ID
     * @param string $PayeeName 收款方名称
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
        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("PayeeIdType",$param) and $param["PayeeIdType"] !== null) {
            $this->PayeeIdType = $param["PayeeIdType"];
        }

        if (array_key_exists("PayeeName",$param) and $param["PayeeName"] !== null) {
            $this->PayeeName = $param["PayeeName"];
        }
    }
}

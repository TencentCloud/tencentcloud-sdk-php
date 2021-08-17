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
 * BindAccount请求参数结构体
 *
 * @method string getAnchorId() 获取主播Id
 * @method void setAnchorId(string $AnchorId) 设置主播Id
 * @method integer getTransferType() 获取1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
 * @method void setTransferType(integer $TransferType) 设置1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
 * @method string getAccountNo() 获取收款方标识。
微信为open_id；
支付宝为会员alipay_user_id;
平安为收款方银行账号;
 * @method void setAccountNo(string $AccountNo) 设置收款方标识。
微信为open_id；
支付宝为会员alipay_user_id;
平安为收款方银行账号;
 * @method string getPhoneNum() 获取手机号
 * @method void setPhoneNum(string $PhoneNum) 设置手机号
 */
class BindAccountRequest extends AbstractModel
{
    /**
     * @var string 主播Id
     */
    public $AnchorId;

    /**
     * @var integer 1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
     */
    public $TransferType;

    /**
     * @var string 收款方标识。
微信为open_id；
支付宝为会员alipay_user_id;
平安为收款方银行账号;
     */
    public $AccountNo;

    /**
     * @var string 手机号
     */
    public $PhoneNum;

    /**
     * @param string $AnchorId 主播Id
     * @param integer $TransferType 1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
     * @param string $AccountNo 收款方标识。
微信为open_id；
支付宝为会员alipay_user_id;
平安为收款方银行账号;
     * @param string $PhoneNum 手机号
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
        if (array_key_exists("AnchorId",$param) and $param["AnchorId"] !== null) {
            $this->AnchorId = $param["AnchorId"];
        }

        if (array_key_exists("TransferType",$param) and $param["TransferType"] !== null) {
            $this->TransferType = $param["TransferType"];
        }

        if (array_key_exists("AccountNo",$param) and $param["AccountNo"] !== null) {
            $this->AccountNo = $param["AccountNo"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }
    }
}

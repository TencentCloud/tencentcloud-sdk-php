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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckBankCardInformation请求参数结构体
 *
 * @method string getBankCard() 获取银行卡号。
 * @method void setBankCard(string $BankCard) 设置银行卡号。
 * @method Encryption getEncryption() 获取敏感数据加密信息。
- 对传入信息（银行卡号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method void setEncryption(Encryption $Encryption) 设置敏感数据加密信息。
- 对传入信息（银行卡号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 */
class CheckBankCardInformationRequest extends AbstractModel
{
    /**
     * @var string 银行卡号。
     */
    public $BankCard;

    /**
     * @var Encryption 敏感数据加密信息。
- 对传入信息（银行卡号）有加密需求的用户可使用此参数，详情请点击左侧链接。
     */
    public $Encryption;

    /**
     * @param string $BankCard 银行卡号。
     * @param Encryption $Encryption 敏感数据加密信息。
- 对传入信息（银行卡号）有加密需求的用户可使用此参数，详情请点击左侧链接。
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
        if (array_key_exists("BankCard",$param) and $param["BankCard"] !== null) {
            $this->BankCard = $param["BankCard"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}

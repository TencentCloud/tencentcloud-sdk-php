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
namespace TencentCloud\Af\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 借贷反欺诈密文业务入参
 *
 * @method string getCryptoType() 获取值1定义：AES加密方式[加密模式ECB；填充格式pkcs7padding；秘钥16字节即128位
 * @method void setCryptoType(string $CryptoType) 设置值1定义：AES加密方式[加密模式ECB；填充格式pkcs7padding；秘钥16字节即128位
 * @method string getCryptoContent() 获取业务字段BusinessSecurityData的json数据格式，采用CryptoType相应的加密方式计算后得到的bash64编码内容。比如对{"PhoneNumber":"13430420001","IdNumber":"420115199501010001","BankCardNumber":"6214000100010001"}包体做加密。
 * @method void setCryptoContent(string $CryptoContent) 设置业务字段BusinessSecurityData的json数据格式，采用CryptoType相应的加密方式计算后得到的bash64编码内容。比如对{"PhoneNumber":"13430420001","IdNumber":"420115199501010001","BankCardNumber":"6214000100010001"}包体做加密。
 */
class FinanceAntiFraudCryptoFilter extends AbstractModel
{
    /**
     * @var string 值1定义：AES加密方式[加密模式ECB；填充格式pkcs7padding；秘钥16字节即128位
     */
    public $CryptoType;

    /**
     * @var string 业务字段BusinessSecurityData的json数据格式，采用CryptoType相应的加密方式计算后得到的bash64编码内容。比如对{"PhoneNumber":"13430420001","IdNumber":"420115199501010001","BankCardNumber":"6214000100010001"}包体做加密。
     */
    public $CryptoContent;

    /**
     * @param string $CryptoType 值1定义：AES加密方式[加密模式ECB；填充格式pkcs7padding；秘钥16字节即128位
     * @param string $CryptoContent 业务字段BusinessSecurityData的json数据格式，采用CryptoType相应的加密方式计算后得到的bash64编码内容。比如对{"PhoneNumber":"13430420001","IdNumber":"420115199501010001","BankCardNumber":"6214000100010001"}包体做加密。
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
        if (array_key_exists("CryptoType",$param) and $param["CryptoType"] !== null) {
            $this->CryptoType = $param["CryptoType"];
        }

        if (array_key_exists("CryptoContent",$param) and $param["CryptoContent"] !== null) {
            $this->CryptoContent = $param["CryptoContent"];
        }
    }
}

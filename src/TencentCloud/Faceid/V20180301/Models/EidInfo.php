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
 * Eid出参，包括商户方用户的标识和加密的用户姓名身份证信息。
 *
 * @method string getEidCode() 获取商户方 appeIDcode 的数字证书
 * @method void setEidCode(string $EidCode) 设置商户方 appeIDcode 的数字证书
 * @method string getEidSign() 获取Eid中心针对商户方EidCode的电子签名
 * @method void setEidSign(string $EidSign) 设置Eid中心针对商户方EidCode的电子签名
 * @method string getDesKey() 获取商户方公钥加密的会话密钥的base64字符串，[指引详见](https://cloud.tencent.com/document/product/1007/63370)
 * @method void setDesKey(string $DesKey) 设置商户方公钥加密的会话密钥的base64字符串，[指引详见](https://cloud.tencent.com/document/product/1007/63370)
 * @method string getUserInfo() 获取会话密钥sm2加密后的base64字符串，[指引详见](https://cloud.tencent.com/document/product/1007/63370)
 * @method void setUserInfo(string $UserInfo) 设置会话密钥sm2加密后的base64字符串，[指引详见](https://cloud.tencent.com/document/product/1007/63370)
 */
class EidInfo extends AbstractModel
{
    /**
     * @var string 商户方 appeIDcode 的数字证书
     */
    public $EidCode;

    /**
     * @var string Eid中心针对商户方EidCode的电子签名
     */
    public $EidSign;

    /**
     * @var string 商户方公钥加密的会话密钥的base64字符串，[指引详见](https://cloud.tencent.com/document/product/1007/63370)
     */
    public $DesKey;

    /**
     * @var string 会话密钥sm2加密后的base64字符串，[指引详见](https://cloud.tencent.com/document/product/1007/63370)
     */
    public $UserInfo;

    /**
     * @param string $EidCode 商户方 appeIDcode 的数字证书
     * @param string $EidSign Eid中心针对商户方EidCode的电子签名
     * @param string $DesKey 商户方公钥加密的会话密钥的base64字符串，[指引详见](https://cloud.tencent.com/document/product/1007/63370)
     * @param string $UserInfo 会话密钥sm2加密后的base64字符串，[指引详见](https://cloud.tencent.com/document/product/1007/63370)
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
        if (array_key_exists("EidCode",$param) and $param["EidCode"] !== null) {
            $this->EidCode = $param["EidCode"];
        }

        if (array_key_exists("EidSign",$param) and $param["EidSign"] !== null) {
            $this->EidSign = $param["EidSign"];
        }

        if (array_key_exists("DesKey",$param) and $param["DesKey"] !== null) {
            $this->DesKey = $param["DesKey"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = $param["UserInfo"];
        }
    }
}

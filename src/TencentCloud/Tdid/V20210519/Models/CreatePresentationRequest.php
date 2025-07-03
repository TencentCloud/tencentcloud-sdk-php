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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePresentation请求参数结构体
 *
 * @method integer getDAPId() 获取DID应用id
 * @method void setDAPId(integer $DAPId) 设置DID应用id
 * @method integer getUAPId() 获取用户应用id
 * @method void setUAPId(integer $UAPId) 设置用户应用id
 * @method array getCredentials() 获取凭证列表
 * @method void setCredentials(array $Credentials) 设置凭证列表
 * @method string getDid() 获取VP持有人的DID标识
 * @method void setDid(string $Did) 设置VP持有人的DID标识
 * @method string getVerifyCode() 获取VP随机验证码
 * @method void setVerifyCode(string $VerifyCode) 设置VP随机验证码
 * @method string getPolicyJson() 获取选择性披露策略
 * @method void setPolicyJson(string $PolicyJson) 设置选择性披露策略
 * @method boolean getUnsigned() 获取是否签名，ture时signatureValue为待签名内容由调用端自行签名，false时signatureValue为平台自动已签名的内容。默认false
 * @method void setUnsigned(boolean $Unsigned) 设置是否签名，ture时signatureValue为待签名内容由调用端自行签名，false时signatureValue为平台自动已签名的内容。默认false
 * @method array getCredentialList() 获取可验证凭证证明列表
 * @method void setCredentialList(array $CredentialList) 设置可验证凭证证明列表
 */
class CreatePresentationRequest extends AbstractModel
{
    /**
     * @var integer DID应用id
     */
    public $DAPId;

    /**
     * @var integer 用户应用id
     */
    public $UAPId;

    /**
     * @var array 凭证列表
     */
    public $Credentials;

    /**
     * @var string VP持有人的DID标识
     */
    public $Did;

    /**
     * @var string VP随机验证码
     */
    public $VerifyCode;

    /**
     * @var string 选择性披露策略
     */
    public $PolicyJson;

    /**
     * @var boolean 是否签名，ture时signatureValue为待签名内容由调用端自行签名，false时signatureValue为平台自动已签名的内容。默认false
     */
    public $Unsigned;

    /**
     * @var array 可验证凭证证明列表
     */
    public $CredentialList;

    /**
     * @param integer $DAPId DID应用id
     * @param integer $UAPId 用户应用id
     * @param array $Credentials 凭证列表
     * @param string $Did VP持有人的DID标识
     * @param string $VerifyCode VP随机验证码
     * @param string $PolicyJson 选择性披露策略
     * @param boolean $Unsigned 是否签名，ture时signatureValue为待签名内容由调用端自行签名，false时signatureValue为平台自动已签名的内容。默认false
     * @param array $CredentialList 可验证凭证证明列表
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
        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }

        if (array_key_exists("UAPId",$param) and $param["UAPId"] !== null) {
            $this->UAPId = $param["UAPId"];
        }

        if (array_key_exists("Credentials",$param) and $param["Credentials"] !== null) {
            $this->Credentials = $param["Credentials"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("VerifyCode",$param) and $param["VerifyCode"] !== null) {
            $this->VerifyCode = $param["VerifyCode"];
        }

        if (array_key_exists("PolicyJson",$param) and $param["PolicyJson"] !== null) {
            $this->PolicyJson = $param["PolicyJson"];
        }

        if (array_key_exists("Unsigned",$param) and $param["Unsigned"] !== null) {
            $this->Unsigned = $param["Unsigned"];
        }

        if (array_key_exists("CredentialList",$param) and $param["CredentialList"] !== null) {
            $this->CredentialList = [];
            foreach ($param["CredentialList"] as $key => $value){
                $obj = new CredentialProof();
                $obj->deserialize($value);
                array_push($this->CredentialList, $obj);
            }
        }
    }
}

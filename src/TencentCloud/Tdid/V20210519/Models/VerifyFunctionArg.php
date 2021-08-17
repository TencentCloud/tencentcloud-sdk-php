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
 * 验证凭证参数值
 *
 * @method integer getCptId() 获取CPT ID
 * @method void setCptId(integer $CptId) 设置CPT ID
 * @method string getIssuer() 获取issuer did
 * @method void setIssuer(string $Issuer) 设置issuer did
 * @method integer getExpirationDate() 获取过期时间
 * @method void setExpirationDate(integer $ExpirationDate) 设置过期时间
 * @method string getClaimJson() 获取声明
 * @method void setClaimJson(string $ClaimJson) 设置声明
 * @method integer getIssuanceDate() 获取颁发时间
 * @method void setIssuanceDate(integer $IssuanceDate) 设置颁发时间
 * @method string getContext() 获取context值
 * @method void setContext(string $Context) 设置context值
 * @method string getId() 获取id值
 * @method void setId(string $Id) 设置id值
 * @method Proof getProof() 获取签名值
 * @method void setProof(Proof $Proof) 设置签名值
 * @method array getType() 获取type值
 * @method void setType(array $Type) 设置type值
 */
class VerifyFunctionArg extends AbstractModel
{
    /**
     * @var integer CPT ID
     */
    public $CptId;

    /**
     * @var string issuer did
     */
    public $Issuer;

    /**
     * @var integer 过期时间
     */
    public $ExpirationDate;

    /**
     * @var string 声明
     */
    public $ClaimJson;

    /**
     * @var integer 颁发时间
     */
    public $IssuanceDate;

    /**
     * @var string context值
     */
    public $Context;

    /**
     * @var string id值
     */
    public $Id;

    /**
     * @var Proof 签名值
     */
    public $Proof;

    /**
     * @var array type值
     */
    public $Type;

    /**
     * @param integer $CptId CPT ID
     * @param string $Issuer issuer did
     * @param integer $ExpirationDate 过期时间
     * @param string $ClaimJson 声明
     * @param integer $IssuanceDate 颁发时间
     * @param string $Context context值
     * @param string $Id id值
     * @param Proof $Proof 签名值
     * @param array $Type type值
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
        if (array_key_exists("CptId",$param) and $param["CptId"] !== null) {
            $this->CptId = $param["CptId"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("ClaimJson",$param) and $param["ClaimJson"] !== null) {
            $this->ClaimJson = $param["ClaimJson"];
        }

        if (array_key_exists("IssuanceDate",$param) and $param["IssuanceDate"] !== null) {
            $this->IssuanceDate = $param["IssuanceDate"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Proof",$param) and $param["Proof"] !== null) {
            $this->Proof = new Proof();
            $this->Proof->deserialize($param["Proof"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

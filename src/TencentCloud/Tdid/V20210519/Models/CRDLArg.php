<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 颁发凭证的数据参数
 *
 * @method integer getCPTId() 获取CPT ID
 * @method void setCPTId(integer $CPTId) 设置CPT ID
 * @method string getIssuer() 获取签发者 did
 * @method void setIssuer(string $Issuer) 设置签发者 did
 * @method string getExpirationDate() 获取过期时间
 * @method void setExpirationDate(string $ExpirationDate) 设置过期时间
 * @method string getClaimJson() 获取声明
 * @method void setClaimJson(string $ClaimJson) 设置声明
 * @method array getType() 获取凭证类型
 * @method void setType(array $Type) 设置凭证类型
 * @method array getParties() 获取多方签名的用户did
 * @method void setParties(array $Parties) 设置多方签名的用户did
 */
class CRDLArg extends AbstractModel
{
    /**
     * @var integer CPT ID
     */
    public $CPTId;

    /**
     * @var string 签发者 did
     */
    public $Issuer;

    /**
     * @var string 过期时间
     */
    public $ExpirationDate;

    /**
     * @var string 声明
     */
    public $ClaimJson;

    /**
     * @var array 凭证类型
     */
    public $Type;

    /**
     * @var array 多方签名的用户did
     */
    public $Parties;

    /**
     * @param integer $CPTId CPT ID
     * @param string $Issuer 签发者 did
     * @param string $ExpirationDate 过期时间
     * @param string $ClaimJson 声明
     * @param array $Type 凭证类型
     * @param array $Parties 多方签名的用户did
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
        if (array_key_exists("CPTId",$param) and $param["CPTId"] !== null) {
            $this->CPTId = $param["CPTId"];
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Parties",$param) and $param["Parties"] !== null) {
            $this->Parties = $param["Parties"];
        }
    }
}

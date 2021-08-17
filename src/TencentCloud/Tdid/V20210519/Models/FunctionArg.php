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
 * 创建凭证入参的FunctionArg
 *
 * @method integer getCptId() 获取CPT ID
 * @method void setCptId(integer $CptId) 设置CPT ID
 * @method string getIssuer() 获取签发者 did
 * @method void setIssuer(string $Issuer) 设置签发者 did
 * @method string getExpirationDate() 获取过期时间
 * @method void setExpirationDate(string $ExpirationDate) 设置过期时间
 * @method string getClaimJson() 获取声明
 * @method void setClaimJson(string $ClaimJson) 设置声明
 */
class FunctionArg extends AbstractModel
{
    /**
     * @var integer CPT ID
     */
    public $CptId;

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
     * @param integer $CptId CPT ID
     * @param string $Issuer 签发者 did
     * @param string $ExpirationDate 过期时间
     * @param string $ClaimJson 声明
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
    }
}

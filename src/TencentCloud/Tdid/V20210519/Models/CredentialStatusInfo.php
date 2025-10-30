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
 * 设置凭证状态信息
 *
 * @method string getId() 获取凭证唯一id
 * @method void setId(string $Id) 设置凭证唯一id
 * @method string getIssuer() 获取凭证状态（0：吊销；1：有效）
 * @method void setIssuer(string $Issuer) 设置凭证状态（0：吊销；1：有效）
 * @method integer getStatus() 获取凭证颁发者Did
 * @method void setStatus(integer $Status) 设置凭证颁发者Did
 */
class CredentialStatusInfo extends AbstractModel
{
    /**
     * @var string 凭证唯一id
     */
    public $Id;

    /**
     * @var string 凭证状态（0：吊销；1：有效）
     */
    public $Issuer;

    /**
     * @var integer 凭证颁发者Did
     */
    public $Status;

    /**
     * @param string $Id 凭证唯一id
     * @param string $Issuer 凭证状态（0：吊销；1：有效）
     * @param integer $Status 凭证颁发者Did
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

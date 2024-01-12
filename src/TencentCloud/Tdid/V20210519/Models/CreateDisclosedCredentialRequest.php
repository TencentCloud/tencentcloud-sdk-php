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
 * CreateDisclosedCredential请求参数结构体
 *
 * @method integer getPolicyId() 获取披露策略id，PolicyJson和PolicyId任选其一
 * @method void setPolicyId(integer $PolicyId) 设置披露策略id，PolicyJson和PolicyId任选其一
 * @method string getCredentialData() 获取凭证文本内容，FunctionArg和CredentialText任选其一
 * @method void setCredentialData(string $CredentialData) 设置凭证文本内容，FunctionArg和CredentialText任选其一
 * @method string getPolicyJson() 获取披露策略文本
 * @method void setPolicyJson(string $PolicyJson) 设置披露策略文本
 * @method integer getDAPId() 获取DID应用ID
 * @method void setDAPId(integer $DAPId) 设置DID应用ID
 */
class CreateDisclosedCredentialRequest extends AbstractModel
{
    /**
     * @var integer 披露策略id，PolicyJson和PolicyId任选其一
     */
    public $PolicyId;

    /**
     * @var string 凭证文本内容，FunctionArg和CredentialText任选其一
     */
    public $CredentialData;

    /**
     * @var string 披露策略文本
     */
    public $PolicyJson;

    /**
     * @var integer DID应用ID
     */
    public $DAPId;

    /**
     * @param integer $PolicyId 披露策略id，PolicyJson和PolicyId任选其一
     * @param string $CredentialData 凭证文本内容，FunctionArg和CredentialText任选其一
     * @param string $PolicyJson 披露策略文本
     * @param integer $DAPId DID应用ID
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("CredentialData",$param) and $param["CredentialData"] !== null) {
            $this->CredentialData = $param["CredentialData"];
        }

        if (array_key_exists("PolicyJson",$param) and $param["PolicyJson"] !== null) {
            $this->PolicyJson = $param["PolicyJson"];
        }

        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }
    }
}

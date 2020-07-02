<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Ds\V20180523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendVcode请求参数结构体
 *
 * @method string getModule() 获取模块名VerifyCode
 * @method void setModule(string $Module) 设置模块名VerifyCode
 * @method string getOperation() 获取操作名SendVcode
 * @method void setOperation(string $Operation) 设置操作名SendVcode
 * @method string getContractResId() 获取合同ID
 * @method void setContractResId(string $ContractResId) 设置合同ID
 * @method string getAccountResId() 获取帐号ID
 * @method void setAccountResId(string $AccountResId) 设置帐号ID
 */
class SendVcodeRequest extends AbstractModel
{
    /**
     * @var string 模块名VerifyCode
     */
    public $Module;

    /**
     * @var string 操作名SendVcode
     */
    public $Operation;

    /**
     * @var string 合同ID
     */
    public $ContractResId;

    /**
     * @var string 帐号ID
     */
    public $AccountResId;

    /**
     * @param string $Module 模块名VerifyCode
     * @param string $Operation 操作名SendVcode
     * @param string $ContractResId 合同ID
     * @param string $AccountResId 帐号ID
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
        if (array_key_exists('Module',$param) and $param['Module'] !== null) {
            $this->Module = $param['Module'];
        }

        if (array_key_exists('Operation',$param) and $param['Operation'] !== null) {
            $this->Operation = $param['Operation'];
        }

        if (array_key_exists('ContractResId',$param) and $param['ContractResId'] !== null) {
            $this->ContractResId = $param['ContractResId'];
        }

        if (array_key_exists('AccountResId',$param) and $param['AccountResId'] !== null) {
            $this->AccountResId = $param['AccountResId'];
        }
    }
}

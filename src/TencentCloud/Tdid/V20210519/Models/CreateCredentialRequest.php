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
 * CreateCredential请求参数结构体
 *
 * @method FunctionArg getFunctionArg() 获取参数集合，详见示例
 * @method void setFunctionArg(FunctionArg $FunctionArg) 设置参数集合，详见示例
 * @method TransactionArg getTransactionArg() 获取参数集合，详见示例
 * @method void setTransactionArg(TransactionArg $TransactionArg) 设置参数集合，详见示例
 * @method string getVersionCredential() 获取版本
 * @method void setVersionCredential(string $VersionCredential) 设置版本
 * @method boolean getUnSigned() 获取是否未签名
 * @method void setUnSigned(boolean $UnSigned) 设置是否未签名
 */
class CreateCredentialRequest extends AbstractModel
{
    /**
     * @var FunctionArg 参数集合，详见示例
     */
    public $FunctionArg;

    /**
     * @var TransactionArg 参数集合，详见示例
     */
    public $TransactionArg;

    /**
     * @var string 版本
     */
    public $VersionCredential;

    /**
     * @var boolean 是否未签名
     */
    public $UnSigned;

    /**
     * @param FunctionArg $FunctionArg 参数集合，详见示例
     * @param TransactionArg $TransactionArg 参数集合，详见示例
     * @param string $VersionCredential 版本
     * @param boolean $UnSigned 是否未签名
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
        if (array_key_exists("FunctionArg",$param) and $param["FunctionArg"] !== null) {
            $this->FunctionArg = new FunctionArg();
            $this->FunctionArg->deserialize($param["FunctionArg"]);
        }

        if (array_key_exists("TransactionArg",$param) and $param["TransactionArg"] !== null) {
            $this->TransactionArg = new TransactionArg();
            $this->TransactionArg->deserialize($param["TransactionArg"]);
        }

        if (array_key_exists("VersionCredential",$param) and $param["VersionCredential"] !== null) {
            $this->VersionCredential = $param["VersionCredential"];
        }

        if (array_key_exists("UnSigned",$param) and $param["UnSigned"] !== null) {
            $this->UnSigned = $param["UnSigned"];
        }
    }
}

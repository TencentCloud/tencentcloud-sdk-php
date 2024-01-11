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
 * IssueCredential请求参数结构体
 *
 * @method CRDLArg getCRDLArg() 获取参数集合，详见示例
 * @method void setCRDLArg(CRDLArg $CRDLArg) 设置参数集合，详见示例
 * @method boolean getUnSigned() 获取是否未签名
 * @method void setUnSigned(boolean $UnSigned) 设置是否未签名
 * @method integer getDAPId() 获取DID应用id
 * @method void setDAPId(integer $DAPId) 设置DID应用id
 */
class IssueCredentialRequest extends AbstractModel
{
    /**
     * @var CRDLArg 参数集合，详见示例
     */
    public $CRDLArg;

    /**
     * @var boolean 是否未签名
     */
    public $UnSigned;

    /**
     * @var integer DID应用id
     */
    public $DAPId;

    /**
     * @param CRDLArg $CRDLArg 参数集合，详见示例
     * @param boolean $UnSigned 是否未签名
     * @param integer $DAPId DID应用id
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
        if (array_key_exists("CRDLArg",$param) and $param["CRDLArg"] !== null) {
            $this->CRDLArg = new CRDLArg();
            $this->CRDLArg->deserialize($param["CRDLArg"]);
        }

        if (array_key_exists("UnSigned",$param) and $param["UnSigned"] !== null) {
            $this->UnSigned = $param["UnSigned"];
        }

        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }
    }
}

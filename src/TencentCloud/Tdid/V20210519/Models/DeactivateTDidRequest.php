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
 * DeactivateTDid请求参数结构体
 *
 * @method string getDid() 获取DID标识符
 * @method void setDid(string $Did) 设置DID标识符
 * @method string getOperateCredential() 获取设置DID禁用状态的临时凭证内容，通过创建凭证接口(CreateCredential)生成并签名，凭证类型为：OperateCredential, 为安全起见凭证过期时间不适合太长，建议设置为1分钟内
 * @method void setOperateCredential(string $OperateCredential) 设置设置DID禁用状态的临时凭证内容，通过创建凭证接口(CreateCredential)生成并签名，凭证类型为：OperateCredential, 为安全起见凭证过期时间不适合太长，建议设置为1分钟内
 * @method integer getDAPId() 获取DID应用Id
 * @method void setDAPId(integer $DAPId) 设置DID应用Id
 * @method string getDeactivated() 获取是否禁用
 * @method void setDeactivated(string $Deactivated) 设置是否禁用
 */
class DeactivateTDidRequest extends AbstractModel
{
    /**
     * @var string DID标识符
     */
    public $Did;

    /**
     * @var string 设置DID禁用状态的临时凭证内容，通过创建凭证接口(CreateCredential)生成并签名，凭证类型为：OperateCredential, 为安全起见凭证过期时间不适合太长，建议设置为1分钟内
     */
    public $OperateCredential;

    /**
     * @var integer DID应用Id
     */
    public $DAPId;

    /**
     * @var string 是否禁用
     */
    public $Deactivated;

    /**
     * @param string $Did DID标识符
     * @param string $OperateCredential 设置DID禁用状态的临时凭证内容，通过创建凭证接口(CreateCredential)生成并签名，凭证类型为：OperateCredential, 为安全起见凭证过期时间不适合太长，建议设置为1分钟内
     * @param integer $DAPId DID应用Id
     * @param string $Deactivated 是否禁用
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
        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("OperateCredential",$param) and $param["OperateCredential"] !== null) {
            $this->OperateCredential = $param["OperateCredential"];
        }

        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }

        if (array_key_exists("Deactivated",$param) and $param["Deactivated"] !== null) {
            $this->Deactivated = $param["Deactivated"];
        }
    }
}

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
 * CreateTDidByPubKey请求参数结构体
 *
 * @method integer getDAPId() 获取DID应用id
 * @method void setDAPId(integer $DAPId) 设置DID应用id
 * @method string getPublicKey() 获取pem格式的认证公钥
 * @method void setPublicKey(string $PublicKey) 设置pem格式的认证公钥
 * @method string getCustomAttribute() 获取自定义DID初始化属性json字符串
 * @method void setCustomAttribute(string $CustomAttribute) 设置自定义DID初始化属性json字符串
 * @method integer getIgnoreExisted() 获取0:did存在返回错误，1:did存在返回该did，默认:0
 * @method void setIgnoreExisted(integer $IgnoreExisted) 设置0:did存在返回错误，1:did存在返回该did，默认:0
 */
class CreateTDidByPubKeyRequest extends AbstractModel
{
    /**
     * @var integer DID应用id
     */
    public $DAPId;

    /**
     * @var string pem格式的认证公钥
     */
    public $PublicKey;

    /**
     * @var string 自定义DID初始化属性json字符串
     */
    public $CustomAttribute;

    /**
     * @var integer 0:did存在返回错误，1:did存在返回该did，默认:0
     */
    public $IgnoreExisted;

    /**
     * @param integer $DAPId DID应用id
     * @param string $PublicKey pem格式的认证公钥
     * @param string $CustomAttribute 自定义DID初始化属性json字符串
     * @param integer $IgnoreExisted 0:did存在返回错误，1:did存在返回该did，默认:0
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

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("CustomAttribute",$param) and $param["CustomAttribute"] !== null) {
            $this->CustomAttribute = $param["CustomAttribute"];
        }

        if (array_key_exists("IgnoreExisted",$param) and $param["IgnoreExisted"] !== null) {
            $this->IgnoreExisted = $param["IgnoreExisted"];
        }
    }
}

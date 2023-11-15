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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplicationToken请求参数结构体
 *
 * @method integer getApplicationId() 获取应用id
 * @method void setApplicationId(integer $ApplicationId) 设置应用id
 * @method string getNonce() 获取一个随机数或者时间戳，用于防止重放攻击，每个请求唯一，建议用uuid
 * @method void setNonce(string $Nonce) 设置一个随机数或者时间戳，用于防止重放攻击，每个请求唯一，建议用uuid
 * @method integer getTenantId() 获取租户id
 * @method void setTenantId(integer $TenantId) 设置租户id
 * @method integer getRequestTime() 获取请求时间，当前时间的unix毫秒时间戳
 * @method void setRequestTime(integer $RequestTime) 设置请求时间，当前时间的unix毫秒时间戳
 * @method string getSignature() 获取签名方法见用户使用文档
 * @method void setSignature(string $Signature) 设置签名方法见用户使用文档
 */
class CreateApplicationTokenRequest extends AbstractModel
{
    /**
     * @var integer 应用id
     */
    public $ApplicationId;

    /**
     * @var string 一个随机数或者时间戳，用于防止重放攻击，每个请求唯一，建议用uuid
     */
    public $Nonce;

    /**
     * @var integer 租户id
     */
    public $TenantId;

    /**
     * @var integer 请求时间，当前时间的unix毫秒时间戳
     */
    public $RequestTime;

    /**
     * @var string 签名方法见用户使用文档
     */
    public $Signature;

    /**
     * @param integer $ApplicationId 应用id
     * @param string $Nonce 一个随机数或者时间戳，用于防止重放攻击，每个请求唯一，建议用uuid
     * @param integer $TenantId 租户id
     * @param integer $RequestTime 请求时间，当前时间的unix毫秒时间戳
     * @param string $Signature 签名方法见用户使用文档
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("Nonce",$param) and $param["Nonce"] !== null) {
            $this->Nonce = $param["Nonce"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("RequestTime",$param) and $param["RequestTime"] !== null) {
            $this->RequestTime = $param["RequestTime"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }
    }
}

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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录返回数据
 *
 * @method string getToken() 获取token
 * @method void setToken(string $Token) 设置token
 * @method integer getExpiresIn() 获取过期时间
 * @method void setExpiresIn(integer $ExpiresIn) 设置过期时间
 * @method integer getTimestamp() 获取服务端时间戳，时间戳校验失败时返回
 * @method void setTimestamp(integer $Timestamp) 设置服务端时间戳，时间戳校验失败时返回
 */
class LoginDataResp extends AbstractModel
{
    /**
     * @var string token
     */
    public $Token;

    /**
     * @var integer 过期时间
     */
    public $ExpiresIn;

    /**
     * @var integer 服务端时间戳，时间戳校验失败时返回
     */
    public $Timestamp;

    /**
     * @param string $Token token
     * @param integer $ExpiresIn 过期时间
     * @param integer $Timestamp 服务端时间戳，时间戳校验失败时返回
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
        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("ExpiresIn",$param) and $param["ExpiresIn"] !== null) {
            $this->ExpiresIn = $param["ExpiresIn"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}

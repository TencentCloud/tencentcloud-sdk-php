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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 临时凭证
 *
 * @method string getSecretId() 获取临时安全证书 Id。
 * @method void setSecretId(string $SecretId) 设置临时安全证书 Id。
 * @method string getSecretKey() 获取临时安全证书 Key。
 * @method void setSecretKey(string $SecretKey) 设置临时安全证书 Key。
 * @method string getToken() 获取Token 值。
 * @method void setToken(string $Token) 设置Token 值。
 * @method integer getExpiredTime() 获取证书无效的时间，返回 Unix 时间戳，精确到秒。
 * @method void setExpiredTime(integer $ExpiredTime) 设置证书无效的时间，返回 Unix 时间戳，精确到秒。
 */
class TempCertificate extends AbstractModel
{
    /**
     * @var string 临时安全证书 Id。
     */
    public $SecretId;

    /**
     * @var string 临时安全证书 Key。
     */
    public $SecretKey;

    /**
     * @var string Token 值。
     */
    public $Token;

    /**
     * @var integer 证书无效的时间，返回 Unix 时间戳，精确到秒。
     */
    public $ExpiredTime;

    /**
     * @param string $SecretId 临时安全证书 Id。
     * @param string $SecretKey 临时安全证书 Key。
     * @param string $Token Token 值。
     * @param integer $ExpiredTime 证书无效的时间，返回 Unix 时间戳，精确到秒。
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
        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}

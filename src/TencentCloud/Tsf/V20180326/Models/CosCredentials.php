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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos临时账号信息
 *
 * @method string getSessionToken() 获取会话Token
 * @method void setSessionToken(string $SessionToken) 设置会话Token
 * @method string getTmpAppId() 获取临时应用ID
 * @method void setTmpAppId(string $TmpAppId) 设置临时应用ID
 * @method string getTmpSecretId() 获取临时调用者身份ID
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时调用者身份ID
 * @method string getTmpSecretKey() 获取临时密钥
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时密钥
 * @method integer getExpiredTime() 获取过期时间
 * @method void setExpiredTime(integer $ExpiredTime) 设置过期时间
 * @method string getDomain() 获取所在域
 * @method void setDomain(string $Domain) 设置所在域
 */
class CosCredentials extends AbstractModel
{
    /**
     * @var string 会话Token
     */
    public $SessionToken;

    /**
     * @var string 临时应用ID
     */
    public $TmpAppId;

    /**
     * @var string 临时调用者身份ID
     */
    public $TmpSecretId;

    /**
     * @var string 临时密钥
     */
    public $TmpSecretKey;

    /**
     * @var integer 过期时间
     */
    public $ExpiredTime;

    /**
     * @var string 所在域
     */
    public $Domain;

    /**
     * @param string $SessionToken 会话Token
     * @param string $TmpAppId 临时应用ID
     * @param string $TmpSecretId 临时调用者身份ID
     * @param string $TmpSecretKey 临时密钥
     * @param integer $ExpiredTime 过期时间
     * @param string $Domain 所在域
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
        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("TmpAppId",$param) and $param["TmpAppId"] !== null) {
            $this->TmpAppId = $param["TmpAppId"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}

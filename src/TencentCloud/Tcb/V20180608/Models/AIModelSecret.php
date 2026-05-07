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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI模型密钥信息
 *
 * @method string getSecretSource() 获取密钥来源
 * @method void setSecretSource(string $SecretSource) 设置密钥来源
 * @method string getSecretId() 获取密钥ID, 和SecretKey一一对应
 * @method void setSecretId(string $SecretId) 设置密钥ID, 和SecretKey一一对应
 * @method string getSecretKey() 获取密钥Key, 和SecretId一一对应
 * @method void setSecretKey(string $SecretKey) 设置密钥Key, 和SecretId一一对应
 * @method string getApiKey() 获取ApiKey,SecretKey和ApiKey二选一
 * @method void setApiKey(string $ApiKey) 设置ApiKey,SecretKey和ApiKey二选一
 */
class AIModelSecret extends AbstractModel
{
    /**
     * @var string 密钥来源
     */
    public $SecretSource;

    /**
     * @var string 密钥ID, 和SecretKey一一对应
     */
    public $SecretId;

    /**
     * @var string 密钥Key, 和SecretId一一对应
     */
    public $SecretKey;

    /**
     * @var string ApiKey,SecretKey和ApiKey二选一
     */
    public $ApiKey;

    /**
     * @param string $SecretSource 密钥来源
     * @param string $SecretId 密钥ID, 和SecretKey一一对应
     * @param string $SecretKey 密钥Key, 和SecretId一一对应
     * @param string $ApiKey ApiKey,SecretKey和ApiKey二选一
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
        if (array_key_exists("SecretSource",$param) and $param["SecretSource"] !== null) {
            $this->SecretSource = $param["SecretSource"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }
    }
}

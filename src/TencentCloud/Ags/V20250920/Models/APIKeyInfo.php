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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API密钥简略信息
 *
 * @method string getName() 获取API密钥名称
 * @method void setName(string $Name) 设置API密钥名称
 * @method string getKeyId() 获取API密钥ID
 * @method void setKeyId(string $KeyId) 设置API密钥ID
 * @method string getStatus() 获取密钥状态。可以为API_KEY_STATUS_ACTIVE，或API_KEY_STATUS_INACTIVE
 * @method void setStatus(string $Status) 设置密钥状态。可以为API_KEY_STATUS_ACTIVE，或API_KEY_STATUS_INACTIVE
 * @method string getMaskedKey() 获取隐藏部分字符的API密钥，方便用户辨认
 * @method void setMaskedKey(string $MaskedKey) 设置隐藏部分字符的API密钥，方便用户辨认
 * @method string getCreatedAt() 获取API密钥创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置API密钥创建时间
 */
class APIKeyInfo extends AbstractModel
{
    /**
     * @var string API密钥名称
     */
    public $Name;

    /**
     * @var string API密钥ID
     */
    public $KeyId;

    /**
     * @var string 密钥状态。可以为API_KEY_STATUS_ACTIVE，或API_KEY_STATUS_INACTIVE
     */
    public $Status;

    /**
     * @var string 隐藏部分字符的API密钥，方便用户辨认
     */
    public $MaskedKey;

    /**
     * @var string API密钥创建时间
     */
    public $CreatedAt;

    /**
     * @param string $Name API密钥名称
     * @param string $KeyId API密钥ID
     * @param string $Status 密钥状态。可以为API_KEY_STATUS_ACTIVE，或API_KEY_STATUS_INACTIVE
     * @param string $MaskedKey 隐藏部分字符的API密钥，方便用户辨认
     * @param string $CreatedAt API密钥创建时间
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MaskedKey",$param) and $param["MaskedKey"] !== null) {
            $this->MaskedKey = $param["MaskedKey"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}

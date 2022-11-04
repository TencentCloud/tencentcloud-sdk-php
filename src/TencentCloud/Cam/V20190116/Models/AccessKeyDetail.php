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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问密钥
 *
 * @method string getAccessKeyId() 获取访问密钥标识
 * @method void setAccessKeyId(string $AccessKeyId) 设置访问密钥标识
 * @method string getSecretAccessKey() 获取访问密钥（密钥仅创建时可见，请妥善保存）
 * @method void setSecretAccessKey(string $SecretAccessKey) 设置访问密钥（密钥仅创建时可见，请妥善保存）
 * @method string getStatus() 获取密钥状态，激活（Active）或未激活（Inactive）
 * @method void setStatus(string $Status) 设置密钥状态，激活（Active）或未激活（Inactive）
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class AccessKeyDetail extends AbstractModel
{
    /**
     * @var string 访问密钥标识
     */
    public $AccessKeyId;

    /**
     * @var string 访问密钥（密钥仅创建时可见，请妥善保存）
     */
    public $SecretAccessKey;

    /**
     * @var string 密钥状态，激活（Active）或未激活（Inactive）
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $AccessKeyId 访问密钥标识
     * @param string $SecretAccessKey 访问密钥（密钥仅创建时可见，请妥善保存）
     * @param string $Status 密钥状态，激活（Active）或未激活（Inactive）
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("SecretAccessKey",$param) and $param["SecretAccessKey"] !== null) {
            $this->SecretAccessKey = $param["SecretAccessKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

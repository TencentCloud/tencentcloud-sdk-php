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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 简单密钥信息
 *
 * @method string getSecretKeyId() 获取<p>密钥ID</p>
 * @method void setSecretKeyId(string $SecretKeyId) 设置<p>密钥ID</p>
 * @method string getName() 获取<p>密钥名称</p>
 * @method void setName(string $Name) 设置<p>密钥名称</p>
 * @method string getStatus() 获取<p>启用状态</p><p>枚举值：</p><ul><li>Enable： 启动</li><li>Disable： 禁用</li></ul>
 * @method void setStatus(string $Status) 设置<p>启用状态</p><p>枚举值：</p><ul><li>Enable： 启动</li><li>Disable： 禁用</li></ul>
 * @method string getSecretType() 获取<p>密钥类型</p><p>枚举值：</p><ul><li>ApiKey： ApiKey类型</li></ul>
 * @method void setSecretType(string $SecretType) 设置<p>密钥类型</p><p>枚举值：</p><ul><li>ApiKey： ApiKey类型</li></ul>
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：2026-09-03 14:11:05</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：2026-09-03 14:11:05</p>
 */
class AIGWSimpleSecretKey extends AbstractModel
{
    /**
     * @var string <p>密钥ID</p>
     */
    public $SecretKeyId;

    /**
     * @var string <p>密钥名称</p>
     */
    public $Name;

    /**
     * @var string <p>启用状态</p><p>枚举值：</p><ul><li>Enable： 启动</li><li>Disable： 禁用</li></ul>
     */
    public $Status;

    /**
     * @var string <p>密钥类型</p><p>枚举值：</p><ul><li>ApiKey： ApiKey类型</li></ul>
     */
    public $SecretType;

    /**
     * @var string <p>创建时间</p><p>参数格式：2026-09-03 14:11:05</p>
     */
    public $CreateTime;

    /**
     * @param string $SecretKeyId <p>密钥ID</p>
     * @param string $Name <p>密钥名称</p>
     * @param string $Status <p>启用状态</p><p>枚举值：</p><ul><li>Enable： 启动</li><li>Disable： 禁用</li></ul>
     * @param string $SecretType <p>密钥类型</p><p>枚举值：</p><ul><li>ApiKey： ApiKey类型</li></ul>
     * @param string $CreateTime <p>创建时间</p><p>参数格式：2026-09-03 14:11:05</p>
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
        if (array_key_exists("SecretKeyId",$param) and $param["SecretKeyId"] !== null) {
            $this->SecretKeyId = $param["SecretKeyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetLibraDBClusterAccountPassword请求参数结构体
 *
 * @method string getClusterId() 获取分析集群 ID
 * @method void setClusterId(string $ClusterId) 设置分析集群 ID
 * @method string getAccountPassword() 获取密码
 * @method void setAccountPassword(string $AccountPassword) 设置密码
 * @method string getAccountName() 获取账号
 * @method void setAccountName(string $AccountName) 设置账号
 * @method string getEncryptMethod() 获取加密方式
 * @method void setEncryptMethod(string $EncryptMethod) 设置加密方式
 * @method string getHost() 获取主机
 * @method void setHost(string $Host) 设置主机
 */
class ResetLibraDBClusterAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string 分析集群 ID
     */
    public $ClusterId;

    /**
     * @var string 密码
     */
    public $AccountPassword;

    /**
     * @var string 账号
     */
    public $AccountName;

    /**
     * @var string 加密方式
     */
    public $EncryptMethod;

    /**
     * @var string 主机
     */
    public $Host;

    /**
     * @param string $ClusterId 分析集群 ID
     * @param string $AccountPassword 密码
     * @param string $AccountName 账号
     * @param string $EncryptMethod 加密方式
     * @param string $Host 主机
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}

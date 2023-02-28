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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindDeviceAccountPrivateKey请求参数结构体
 *
 * @method integer getId() 获取主机账号ID
 * @method void setId(integer $Id) 设置主机账号ID
 * @method string getPrivateKey() 获取主机账号私钥，最新长度128字节，最大长度8192字节
 * @method void setPrivateKey(string $PrivateKey) 设置主机账号私钥，最新长度128字节，最大长度8192字节
 * @method string getPrivateKeyPassword() 获取主机账号私钥口令，最大长度256字节
 * @method void setPrivateKeyPassword(string $PrivateKeyPassword) 设置主机账号私钥口令，最大长度256字节
 */
class BindDeviceAccountPrivateKeyRequest extends AbstractModel
{
    /**
     * @var integer 主机账号ID
     */
    public $Id;

    /**
     * @var string 主机账号私钥，最新长度128字节，最大长度8192字节
     */
    public $PrivateKey;

    /**
     * @var string 主机账号私钥口令，最大长度256字节
     */
    public $PrivateKeyPassword;

    /**
     * @param integer $Id 主机账号ID
     * @param string $PrivateKey 主机账号私钥，最新长度128字节，最大长度8192字节
     * @param string $PrivateKeyPassword 主机账号私钥口令，最大长度256字节
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("PrivateKeyPassword",$param) and $param["PrivateKeyPassword"] !== null) {
            $this->PrivateKeyPassword = $param["PrivateKeyPassword"];
        }
    }
}

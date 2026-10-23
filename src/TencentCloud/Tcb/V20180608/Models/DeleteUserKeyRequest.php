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
 * DeleteUserKey请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getKeyID() 获取用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成
 * @method void setKeyID(string $KeyID) 设置用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成
 */
class DeleteUserKeyRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成
     */
    public $KeyID;

    /**
     * @param string $EnvId 环境ID
     * @param string $KeyID 用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("KeyID",$param) and $param["KeyID"] !== null) {
            $this->KeyID = $param["KeyID"];
        }
    }
}

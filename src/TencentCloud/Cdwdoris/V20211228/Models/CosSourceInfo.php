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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户提供cos认证信息。
 *
 * @method string getSecretId() 获取cos认证中的Id
 * @method void setSecretId(string $SecretId) 设置cos认证中的Id
 * @method string getSecretKey() 获取cos认证中的key
 * @method void setSecretKey(string $SecretKey) 设置cos认证中的key
 * @method string getCosPath() 获取cos认证中的路径
 * @method void setCosPath(string $CosPath) 设置cos认证中的路径
 */
class CosSourceInfo extends AbstractModel
{
    /**
     * @var string cos认证中的Id
     */
    public $SecretId;

    /**
     * @var string cos认证中的key
     */
    public $SecretKey;

    /**
     * @var string cos认证中的路径
     */
    public $CosPath;

    /**
     * @param string $SecretId cos认证中的Id
     * @param string $SecretKey cos认证中的key
     * @param string $CosPath cos认证中的路径
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

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }
    }
}

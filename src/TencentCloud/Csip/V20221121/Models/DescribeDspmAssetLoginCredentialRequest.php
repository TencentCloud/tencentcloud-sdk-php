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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmAssetLoginCredential请求参数结构体
 *
 * @method string getAssetId() 获取数据库资产id
 * @method void setAssetId(string $AssetId) 设置数据库资产id
 * @method string getHost() 获取主机。默认'%'
 * @method void setHost(string $Host) 设置主机。默认'%'
 * @method string getEncryptMethod() 获取加密算法
 * @method void setEncryptMethod(string $EncryptMethod) 设置加密算法
 */
class DescribeDspmAssetLoginCredentialRequest extends AbstractModel
{
    /**
     * @var string 数据库资产id
     */
    public $AssetId;

    /**
     * @var string 主机。默认'%'
     */
    public $Host;

    /**
     * @var string 加密算法
     */
    public $EncryptMethod;

    /**
     * @param string $AssetId 数据库资产id
     * @param string $Host 主机。默认'%'
     * @param string $EncryptMethod 加密算法
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }
    }
}

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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取公钥加密的key数据
 *
 * @method string getPublicEncryptKey() 获取<p>返回公钥，base64编码后返回，使用需要base64解码</p>
 * @method void setPublicEncryptKey(string $PublicEncryptKey) 设置<p>返回公钥，base64编码后返回，使用需要base64解码</p>
 */
class DescribePublicEncryptKeyData extends AbstractModel
{
    /**
     * @var string <p>返回公钥，base64编码后返回，使用需要base64解码</p>
     */
    public $PublicEncryptKey;

    /**
     * @param string $PublicEncryptKey <p>返回公钥，base64编码后返回，使用需要base64解码</p>
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
        if (array_key_exists("PublicEncryptKey",$param) and $param["PublicEncryptKey"] !== null) {
            $this->PublicEncryptKey = $param["PublicEncryptKey"];
        }
    }
}

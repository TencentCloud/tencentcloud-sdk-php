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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重新生成的Key信息
 *
 * @method string getKeyId() 获取<p>Key的ID</p>
 * @method void setKeyId(string $KeyId) 设置<p>Key的ID</p>
 * @method string getKey() 获取<p>重新生成的明文Key</p>
 * @method void setKey(string $Key) 设置<p>重新生成的明文Key</p>
 */
class RegeneratedKey extends AbstractModel
{
    /**
     * @var string <p>Key的ID</p>
     */
    public $KeyId;

    /**
     * @var string <p>重新生成的明文Key</p>
     */
    public $Key;

    /**
     * @param string $KeyId <p>Key的ID</p>
     * @param string $Key <p>重新生成的明文Key</p>
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}

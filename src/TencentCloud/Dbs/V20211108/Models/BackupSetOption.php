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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份集加密信息
 *
 * @method string getEncryption() 获取<p>存储加密方式。取值：<br>&quot;UnEncrypted&quot; - 非加密存储;<br>&quot;SSE-COS&quot; - 内置加密存储;<br>&quot;SSE-KMS&quot; - KMS 加密存储。</p>
 * @method void setEncryption(string $Encryption) 设置<p>存储加密方式。取值：<br>&quot;UnEncrypted&quot; - 非加密存储;<br>&quot;SSE-COS&quot; - 内置加密存储;<br>&quot;SSE-KMS&quot; - KMS 加密存储。</p>
 */
class BackupSetOption extends AbstractModel
{
    /**
     * @var string <p>存储加密方式。取值：<br>&quot;UnEncrypted&quot; - 非加密存储;<br>&quot;SSE-COS&quot; - 内置加密存储;<br>&quot;SSE-KMS&quot; - KMS 加密存储。</p>
     */
    public $Encryption;

    /**
     * @param string $Encryption <p>存储加密方式。取值：<br>&quot;UnEncrypted&quot; - 非加密存储;<br>&quot;SSE-COS&quot; - 内置加密存储;<br>&quot;SSE-KMS&quot; - KMS 加密存储。</p>
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
        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }
    }
}

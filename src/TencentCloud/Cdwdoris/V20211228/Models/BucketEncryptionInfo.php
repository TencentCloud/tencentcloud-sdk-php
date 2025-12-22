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
 * 桶加密状态信息
 *
 * @method boolean getIsEncrypted() 获取是否已加密
 * @method void setIsEncrypted(boolean $IsEncrypted) 设置是否已加密
 * @method string getEncryptionType() 获取加密类型：SSE-COS/SSE-KMS/disabled
 * @method void setEncryptionType(string $EncryptionType) 设置加密类型：SSE-COS/SSE-KMS/disabled
 * @method string getLastOperation() 获取最后操作类型：enable/disable
 * @method void setLastOperation(string $LastOperation) 设置最后操作类型：enable/disable
 * @method string getLastUpdateTime() 获取最后更新时间
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最后更新时间
 */
class BucketEncryptionInfo extends AbstractModel
{
    /**
     * @var boolean 是否已加密
     */
    public $IsEncrypted;

    /**
     * @var string 加密类型：SSE-COS/SSE-KMS/disabled
     */
    public $EncryptionType;

    /**
     * @var string 最后操作类型：enable/disable
     */
    public $LastOperation;

    /**
     * @var string 最后更新时间
     */
    public $LastUpdateTime;

    /**
     * @param boolean $IsEncrypted 是否已加密
     * @param string $EncryptionType 加密类型：SSE-COS/SSE-KMS/disabled
     * @param string $LastOperation 最后操作类型：enable/disable
     * @param string $LastUpdateTime 最后更新时间
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
        if (array_key_exists("IsEncrypted",$param) and $param["IsEncrypted"] !== null) {
            $this->IsEncrypted = $param["IsEncrypted"];
        }

        if (array_key_exists("EncryptionType",$param) and $param["EncryptionType"] !== null) {
            $this->EncryptionType = $param["EncryptionType"];
        }

        if (array_key_exists("LastOperation",$param) and $param["LastOperation"] !== null) {
            $this->LastOperation = $param["LastOperation"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }
    }
}

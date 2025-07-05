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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TLS 加密套件
 *
 * @method integer getVersionId() 获取TLS版本ID
 * @method void setVersionId(integer $VersionId) 设置TLS版本ID
 * @method integer getCipherId() 获取加密套件ID
 * @method void setCipherId(integer $CipherId) 设置加密套件ID
 * @method string getCipherName() 获取加密套件
 * @method void setCipherName(string $CipherName) 设置加密套件
 */
class TLSCiphers extends AbstractModel
{
    /**
     * @var integer TLS版本ID
     */
    public $VersionId;

    /**
     * @var integer 加密套件ID
     */
    public $CipherId;

    /**
     * @var string 加密套件
     */
    public $CipherName;

    /**
     * @param integer $VersionId TLS版本ID
     * @param integer $CipherId 加密套件ID
     * @param string $CipherName 加密套件
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("CipherId",$param) and $param["CipherId"] !== null) {
            $this->CipherId = $param["CipherId"];
        }

        if (array_key_exists("CipherName",$param) and $param["CipherName"] !== null) {
            $this->CipherName = $param["CipherName"];
        }
    }
}

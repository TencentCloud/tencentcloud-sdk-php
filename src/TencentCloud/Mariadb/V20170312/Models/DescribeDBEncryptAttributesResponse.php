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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBEncryptAttributes返回参数结构体
 *
 * @method integer getEncryptStatus() 获取是否启用加密，1-已开启；0-未开启。
 * @method void setEncryptStatus(integer $EncryptStatus) 设置是否启用加密，1-已开启；0-未开启。
 * @method string getCipherText() 获取DEK密钥
 * @method void setCipherText(string $CipherText) 设置DEK密钥
 * @method string getExpireDate() 获取DEK密钥过期日期。
 * @method void setExpireDate(string $ExpireDate) 设置DEK密钥过期日期。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBEncryptAttributesResponse extends AbstractModel
{
    /**
     * @var integer 是否启用加密，1-已开启；0-未开启。
     */
    public $EncryptStatus;

    /**
     * @var string DEK密钥
     */
    public $CipherText;

    /**
     * @var string DEK密钥过期日期。
     */
    public $ExpireDate;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $EncryptStatus 是否启用加密，1-已开启；0-未开启。
     * @param string $CipherText DEK密钥
     * @param string $ExpireDate DEK密钥过期日期。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("EncryptStatus",$param) and $param["EncryptStatus"] !== null) {
            $this->EncryptStatus = $param["EncryptStatus"];
        }

        if (array_key_exists("CipherText",$param) and $param["CipherText"] !== null) {
            $this->CipherText = $param["CipherText"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

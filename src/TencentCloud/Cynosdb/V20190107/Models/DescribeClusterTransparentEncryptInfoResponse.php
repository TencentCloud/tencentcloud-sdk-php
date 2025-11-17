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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterTransparentEncryptInfo返回参数结构体
 *
 * @method string getKeyId() 获取加密秘钥id
 * @method void setKeyId(string $KeyId) 设置加密秘钥id
 * @method string getKeyRegion() 获取加密秘钥地域

 * @method void setKeyRegion(string $KeyRegion) 设置加密秘钥地域

 * @method string getKeyType() 获取秘钥类型
 * @method void setKeyType(string $KeyType) 设置秘钥类型
 * @method boolean getIsOpenGlobalEncryption() 获取是否已经开启全局加密
 * @method void setIsOpenGlobalEncryption(boolean $IsOpenGlobalEncryption) 设置是否已经开启全局加密
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterTransparentEncryptInfoResponse extends AbstractModel
{
    /**
     * @var string 加密秘钥id
     */
    public $KeyId;

    /**
     * @var string 加密秘钥地域

     */
    public $KeyRegion;

    /**
     * @var string 秘钥类型
     */
    public $KeyType;

    /**
     * @var boolean 是否已经开启全局加密
     */
    public $IsOpenGlobalEncryption;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $KeyId 加密秘钥id
     * @param string $KeyRegion 加密秘钥地域

     * @param string $KeyType 秘钥类型
     * @param boolean $IsOpenGlobalEncryption 是否已经开启全局加密
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("IsOpenGlobalEncryption",$param) and $param["IsOpenGlobalEncryption"] !== null) {
            $this->IsOpenGlobalEncryption = $param["IsOpenGlobalEncryption"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

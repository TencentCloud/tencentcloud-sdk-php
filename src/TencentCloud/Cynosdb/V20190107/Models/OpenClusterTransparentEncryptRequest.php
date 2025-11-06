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
 * OpenClusterTransparentEncrypt请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getKeyType() 获取秘钥类型(cloud,custom)
 * @method void setKeyType(string $KeyType) 设置秘钥类型(cloud,custom)
 * @method string getKeyId() 获取秘钥Id
 * @method void setKeyId(string $KeyId) 设置秘钥Id
 * @method string getKeyRegion() 获取秘钥地域
 * @method void setKeyRegion(string $KeyRegion) 设置秘钥地域
 * @method boolean getIsOpenGlobalEncryption() 获取是否开启全局加密
 * @method void setIsOpenGlobalEncryption(boolean $IsOpenGlobalEncryption) 设置是否开启全局加密
 */
class OpenClusterTransparentEncryptRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 秘钥类型(cloud,custom)
     */
    public $KeyType;

    /**
     * @var string 秘钥Id
     */
    public $KeyId;

    /**
     * @var string 秘钥地域
     */
    public $KeyRegion;

    /**
     * @var boolean 是否开启全局加密
     */
    public $IsOpenGlobalEncryption;

    /**
     * @param string $ClusterId 集群id
     * @param string $KeyType 秘钥类型(cloud,custom)
     * @param string $KeyId 秘钥Id
     * @param string $KeyRegion 秘钥地域
     * @param boolean $IsOpenGlobalEncryption 是否开启全局加密
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }

        if (array_key_exists("IsOpenGlobalEncryption",$param) and $param["IsOpenGlobalEncryption"] !== null) {
            $this->IsOpenGlobalEncryption = $param["IsOpenGlobalEncryption"];
        }
    }
}

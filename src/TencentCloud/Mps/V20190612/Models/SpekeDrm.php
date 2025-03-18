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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FairPlay，WideVine，PlayReady 等Drm加密方式。
 *
 * @method string getResourceId() 获取资源标记，
支持1-128个字符的数字、字母、下划线(_)、中划线(-)。
 * @method void setResourceId(string $ResourceId) 设置资源标记，
支持1-128个字符的数字、字母、下划线(_)、中划线(-)。
 * @method string getKeyServerUrl() 获取drm厂商访问地址；

注: 不同DRM厂商对子流的数量限制不一样，如 pallycon 限制不能超过5条子流，drmtoday厂商最多仅支持9条子流加密
 * @method void setKeyServerUrl(string $KeyServerUrl) 设置drm厂商访问地址；

注: 不同DRM厂商对子流的数量限制不一样，如 pallycon 限制不能超过5条子流，drmtoday厂商最多仅支持9条子流加密
 * @method string getVector() 获取加密初始化向量(32字节字符串)。
 * @method void setVector(string $Vector) 设置加密初始化向量(32字节字符串)。
 * @method string getEncryptionMethod() 获取加密方式，FairPlay 默认cbcs，PlayReady，Widevine 默认cenc

cbcs：PlayReady，Widevine，FairPlay 支持；
cenc：PlayReady，Widevine支持；
 * @method void setEncryptionMethod(string $EncryptionMethod) 设置加密方式，FairPlay 默认cbcs，PlayReady，Widevine 默认cenc

cbcs：PlayReady，Widevine，FairPlay 支持；
cenc：PlayReady，Widevine支持；
 * @method string getEncryptionPreset() 获取子流加密规则，默认 preset0
preset0：全部子流使用同一个key加密；
preset1：每个子流使用不同的key加密；

 * @method void setEncryptionPreset(string $EncryptionPreset) 设置子流加密规则，默认 preset0
preset0：全部子流使用同一个key加密；
preset1：每个子流使用不同的key加密；
 */
class SpekeDrm extends AbstractModel
{
    /**
     * @var string 资源标记，
支持1-128个字符的数字、字母、下划线(_)、中划线(-)。
     */
    public $ResourceId;

    /**
     * @var string drm厂商访问地址；

注: 不同DRM厂商对子流的数量限制不一样，如 pallycon 限制不能超过5条子流，drmtoday厂商最多仅支持9条子流加密
     */
    public $KeyServerUrl;

    /**
     * @var string 加密初始化向量(32字节字符串)。
     */
    public $Vector;

    /**
     * @var string 加密方式，FairPlay 默认cbcs，PlayReady，Widevine 默认cenc

cbcs：PlayReady，Widevine，FairPlay 支持；
cenc：PlayReady，Widevine支持；
     */
    public $EncryptionMethod;

    /**
     * @var string 子流加密规则，默认 preset0
preset0：全部子流使用同一个key加密；
preset1：每个子流使用不同的key加密；

     */
    public $EncryptionPreset;

    /**
     * @param string $ResourceId 资源标记，
支持1-128个字符的数字、字母、下划线(_)、中划线(-)。
     * @param string $KeyServerUrl drm厂商访问地址；

注: 不同DRM厂商对子流的数量限制不一样，如 pallycon 限制不能超过5条子流，drmtoday厂商最多仅支持9条子流加密
     * @param string $Vector 加密初始化向量(32字节字符串)。
     * @param string $EncryptionMethod 加密方式，FairPlay 默认cbcs，PlayReady，Widevine 默认cenc

cbcs：PlayReady，Widevine，FairPlay 支持；
cenc：PlayReady，Widevine支持；
     * @param string $EncryptionPreset 子流加密规则，默认 preset0
preset0：全部子流使用同一个key加密；
preset1：每个子流使用不同的key加密；
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("KeyServerUrl",$param) and $param["KeyServerUrl"] !== null) {
            $this->KeyServerUrl = $param["KeyServerUrl"];
        }

        if (array_key_exists("Vector",$param) and $param["Vector"] !== null) {
            $this->Vector = $param["Vector"];
        }

        if (array_key_exists("EncryptionMethod",$param) and $param["EncryptionMethod"] !== null) {
            $this->EncryptionMethod = $param["EncryptionMethod"];
        }

        if (array_key_exists("EncryptionPreset",$param) and $param["EncryptionPreset"] !== null) {
            $this->EncryptionPreset = $param["EncryptionPreset"];
        }
    }
}

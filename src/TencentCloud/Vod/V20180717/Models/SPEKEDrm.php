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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 第三方DRM厂商加密信息。
 *
 * @method string getResourceId() 获取<p>资源标记，该字段内容为用户自定义； 支持1-128个字符的数字、字母、下划线(_)、中划线(-)。 该字段对应Speke请求中的cid字段。 注：不同DRM厂商对该字段的限制有所区别（如：华曦达不支持该字段带_），具体规则请与DRM厂商进行确认。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源标记，该字段内容为用户自定义； 支持1-128个字符的数字、字母、下划线(_)、中划线(-)。 该字段对应Speke请求中的cid字段。 注：不同DRM厂商对该字段的限制有所区别（如：华曦达不支持该字段带_），具体规则请与DRM厂商进行确认。</p>
 * @method string getKeyServerUrl() 获取<p>DRM厂商访问地址，该字段内容从DRM厂商获取。注: 不同DRM厂商对子流的数量限制不一样，如 PallyCon 限制不能超过5条子流，DRMtoday厂商最多仅支持9条子流加密</p>
 * @method void setKeyServerUrl(string $KeyServerUrl) 设置<p>DRM厂商访问地址，该字段内容从DRM厂商获取。注: 不同DRM厂商对子流的数量限制不一样，如 PallyCon 限制不能超过5条子流，DRMtoday厂商最多仅支持9条子流加密</p>
 * @method string getVector() 获取<p>加密初始化向量(十六进制32字节字符串)，该字段内容为用户自定义。</p>
 * @method void setVector(string $Vector) 设置<p>加密初始化向量(十六进制32字节字符串)，该字段内容为用户自定义。</p>
 * @method string getEncryptionMethod() 获取<p>加密方式，可选值：<br>cbcs：PlayReady，Widevine，FairPlay，Widevine+FairPlay，Widevine+PlayReady，PlayReady+FairPlay，Widevine+PlayReady+FairPlay支持；<br>cenc：PlayReady，Widevine，Widevine+PlayReady支持；<br>若不填FairPlay 默认cbcs；<br>PlayReady，Widevine 默认cenc；<br>Widevine+FairPlay，PlayReady+FairPlay，Widevine+PlayReady+FairPlay默认cbcs；<br>Widevine+PlayReady默认cenc；</p>
 * @method void setEncryptionMethod(string $EncryptionMethod) 设置<p>加密方式，可选值：<br>cbcs：PlayReady，Widevine，FairPlay，Widevine+FairPlay，Widevine+PlayReady，PlayReady+FairPlay，Widevine+PlayReady+FairPlay支持；<br>cenc：PlayReady，Widevine，Widevine+PlayReady支持；<br>若不填FairPlay 默认cbcs；<br>PlayReady，Widevine 默认cenc；<br>Widevine+FairPlay，PlayReady+FairPlay，Widevine+PlayReady+FairPlay默认cbcs；<br>Widevine+PlayReady默认cenc；</p>
 * @method string getEncryptionPreset() 获取<p>子流加密规则，默认 preset0<br>preset0：全部子流使用同一个key加密；<br>preset1：每个子流使用不同的key加密；</p>
 * @method void setEncryptionPreset(string $EncryptionPreset) 设置<p>子流加密规则，默认 preset0<br>preset0：全部子流使用同一个key加密；<br>preset1：每个子流使用不同的key加密；</p>
 * @method string getKeyAcquireMode() 获取<p>DRM厂商请求方式。</p><p>枚举值：</p><ul><li>POST： 大多数DRM厂商使用POST方式请求。</li><li>GET： 部分DRM厂商支持GET方式请求。使用该种方式请求时，需要在KeyServerUrl字段带上各项请求信息。</li></ul><p>默认值：POST</p>
 * @method void setKeyAcquireMode(string $KeyAcquireMode) 设置<p>DRM厂商请求方式。</p><p>枚举值：</p><ul><li>POST： 大多数DRM厂商使用POST方式请求。</li><li>GET： 部分DRM厂商支持GET方式请求。使用该种方式请求时，需要在KeyServerUrl字段带上各项请求信息。</li></ul><p>默认值：POST</p>
 */
class SPEKEDrm extends AbstractModel
{
    /**
     * @var string <p>资源标记，该字段内容为用户自定义； 支持1-128个字符的数字、字母、下划线(_)、中划线(-)。 该字段对应Speke请求中的cid字段。 注：不同DRM厂商对该字段的限制有所区别（如：华曦达不支持该字段带_），具体规则请与DRM厂商进行确认。</p>
     */
    public $ResourceId;

    /**
     * @var string <p>DRM厂商访问地址，该字段内容从DRM厂商获取。注: 不同DRM厂商对子流的数量限制不一样，如 PallyCon 限制不能超过5条子流，DRMtoday厂商最多仅支持9条子流加密</p>
     */
    public $KeyServerUrl;

    /**
     * @var string <p>加密初始化向量(十六进制32字节字符串)，该字段内容为用户自定义。</p>
     */
    public $Vector;

    /**
     * @var string <p>加密方式，可选值：<br>cbcs：PlayReady，Widevine，FairPlay，Widevine+FairPlay，Widevine+PlayReady，PlayReady+FairPlay，Widevine+PlayReady+FairPlay支持；<br>cenc：PlayReady，Widevine，Widevine+PlayReady支持；<br>若不填FairPlay 默认cbcs；<br>PlayReady，Widevine 默认cenc；<br>Widevine+FairPlay，PlayReady+FairPlay，Widevine+PlayReady+FairPlay默认cbcs；<br>Widevine+PlayReady默认cenc；</p>
     */
    public $EncryptionMethod;

    /**
     * @var string <p>子流加密规则，默认 preset0<br>preset0：全部子流使用同一个key加密；<br>preset1：每个子流使用不同的key加密；</p>
     */
    public $EncryptionPreset;

    /**
     * @var string <p>DRM厂商请求方式。</p><p>枚举值：</p><ul><li>POST： 大多数DRM厂商使用POST方式请求。</li><li>GET： 部分DRM厂商支持GET方式请求。使用该种方式请求时，需要在KeyServerUrl字段带上各项请求信息。</li></ul><p>默认值：POST</p>
     */
    public $KeyAcquireMode;

    /**
     * @param string $ResourceId <p>资源标记，该字段内容为用户自定义； 支持1-128个字符的数字、字母、下划线(_)、中划线(-)。 该字段对应Speke请求中的cid字段。 注：不同DRM厂商对该字段的限制有所区别（如：华曦达不支持该字段带_），具体规则请与DRM厂商进行确认。</p>
     * @param string $KeyServerUrl <p>DRM厂商访问地址，该字段内容从DRM厂商获取。注: 不同DRM厂商对子流的数量限制不一样，如 PallyCon 限制不能超过5条子流，DRMtoday厂商最多仅支持9条子流加密</p>
     * @param string $Vector <p>加密初始化向量(十六进制32字节字符串)，该字段内容为用户自定义。</p>
     * @param string $EncryptionMethod <p>加密方式，可选值：<br>cbcs：PlayReady，Widevine，FairPlay，Widevine+FairPlay，Widevine+PlayReady，PlayReady+FairPlay，Widevine+PlayReady+FairPlay支持；<br>cenc：PlayReady，Widevine，Widevine+PlayReady支持；<br>若不填FairPlay 默认cbcs；<br>PlayReady，Widevine 默认cenc；<br>Widevine+FairPlay，PlayReady+FairPlay，Widevine+PlayReady+FairPlay默认cbcs；<br>Widevine+PlayReady默认cenc；</p>
     * @param string $EncryptionPreset <p>子流加密规则，默认 preset0<br>preset0：全部子流使用同一个key加密；<br>preset1：每个子流使用不同的key加密；</p>
     * @param string $KeyAcquireMode <p>DRM厂商请求方式。</p><p>枚举值：</p><ul><li>POST： 大多数DRM厂商使用POST方式请求。</li><li>GET： 部分DRM厂商支持GET方式请求。使用该种方式请求时，需要在KeyServerUrl字段带上各项请求信息。</li></ul><p>默认值：POST</p>
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

        if (array_key_exists("KeyAcquireMode",$param) and $param["KeyAcquireMode"] !== null) {
            $this->KeyAcquireMode = $param["KeyAcquireMode"];
        }
    }
}

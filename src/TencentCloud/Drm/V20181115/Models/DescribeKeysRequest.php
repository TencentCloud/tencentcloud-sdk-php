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
namespace TencentCloud\Drm\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKeys请求参数结构体
 *
 * @method string getDrmType() 获取使用的DRM方案类型，接口取值WIDEVINE、FAIRPLAY、NORMALAES。
 * @method void setDrmType(string $DrmType) 设置使用的DRM方案类型，接口取值WIDEVINE、FAIRPLAY、NORMALAES。
 * @method array getTracks() 获取加密的track列表，接口取值VIDEO、AUDIO。
 * @method void setTracks(array $Tracks) 设置加密的track列表，接口取值VIDEO、AUDIO。
 * @method string getContentType() 获取内容类型。接口取值VodVideo,LiveVideo
 * @method void setContentType(string $ContentType) 设置内容类型。接口取值VodVideo,LiveVideo
 * @method string getRsaPublicKey() 获取Base64编码的Rsa公钥，用来加密出参中的SessionKey。
如果该参数为空，则出参中SessionKey为明文。
 * @method void setRsaPublicKey(string $RsaPublicKey) 设置Base64编码的Rsa公钥，用来加密出参中的SessionKey。
如果该参数为空，则出参中SessionKey为明文。
 * @method string getContentId() 获取一个加密内容的唯一标识。
如果该参数为空，则后台自动生成
 * @method void setContentId(string $ContentId) 设置一个加密内容的唯一标识。
如果该参数为空，则后台自动生成
 */
class DescribeKeysRequest extends AbstractModel
{
    /**
     * @var string 使用的DRM方案类型，接口取值WIDEVINE、FAIRPLAY、NORMALAES。
     */
    public $DrmType;

    /**
     * @var array 加密的track列表，接口取值VIDEO、AUDIO。
     */
    public $Tracks;

    /**
     * @var string 内容类型。接口取值VodVideo,LiveVideo
     */
    public $ContentType;

    /**
     * @var string Base64编码的Rsa公钥，用来加密出参中的SessionKey。
如果该参数为空，则出参中SessionKey为明文。
     */
    public $RsaPublicKey;

    /**
     * @var string 一个加密内容的唯一标识。
如果该参数为空，则后台自动生成
     */
    public $ContentId;

    /**
     * @param string $DrmType 使用的DRM方案类型，接口取值WIDEVINE、FAIRPLAY、NORMALAES。
     * @param array $Tracks 加密的track列表，接口取值VIDEO、AUDIO。
     * @param string $ContentType 内容类型。接口取值VodVideo,LiveVideo
     * @param string $RsaPublicKey Base64编码的Rsa公钥，用来加密出参中的SessionKey。
如果该参数为空，则出参中SessionKey为明文。
     * @param string $ContentId 一个加密内容的唯一标识。
如果该参数为空，则后台自动生成
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
        if (array_key_exists('DrmType',$param) and $param['DrmType'] !== null) {
            $this->DrmType = $param['DrmType'];
        }

        if (array_key_exists('Tracks',$param) and $param['Tracks'] !== null) {
            $this->Tracks = $param['Tracks'];
        }

        if (array_key_exists('ContentType',$param) and $param['ContentType'] !== null) {
            $this->ContentType = $param['ContentType'];
        }

        if (array_key_exists('RsaPublicKey',$param) and $param['RsaPublicKey'] !== null) {
            $this->RsaPublicKey = $param['RsaPublicKey'];
        }

        if (array_key_exists('ContentId',$param) and $param['ContentId'] !== null) {
            $this->ContentId = $param['ContentId'];
        }
    }
}

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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDrmType() 获取drm类型，widevine或fairplay
 * @method void setDrmType(string $DrmType) 设置drm类型，widevine或fairplay
 * @method array getTracks() 获取Tracks，audio,video
 * @method void setTracks(array $Tracks) 设置Tracks，audio,video
 * @method string getPublicKey() 获取rsa 公钥的base64 编码数据
 * @method void setPublicKey(string $PublicKey) 设置rsa 公钥的base64 编码数据
 * @method string getContentID() 获取内容id，标识唯一一个加密内容
 * @method void setContentID(string $ContentID) 设置内容id，标识唯一一个加密内容
 */

/**
 *Drm获取key入参
 */
class DrmGetKeyPara extends AbstractModel
{
    /**
     * @var string drm类型，widevine或fairplay
     */
    public $DrmType;

    /**
     * @var array Tracks，audio,video
     */
    public $Tracks;

    /**
     * @var string rsa 公钥的base64 编码数据
     */
    public $PublicKey;

    /**
     * @var string 内容id，标识唯一一个加密内容
     */
    public $ContentID;
    /**
     * @param string $DrmType drm类型，widevine或fairplay
     * @param array $Tracks Tracks，audio,video
     * @param string $PublicKey rsa 公钥的base64 编码数据
     * @param string $ContentID 内容id，标识唯一一个加密内容
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("Tracks",$param) and $param["Tracks"] !== null) {
            $this->Tracks = $param["Tracks"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("ContentID",$param) and $param["ContentID"] !== null) {
            $this->ContentID = $param["ContentID"];
        }
    }
}

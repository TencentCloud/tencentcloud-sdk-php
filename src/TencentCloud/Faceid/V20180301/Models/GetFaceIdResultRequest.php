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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdResult请求参数结构体
 *
 * @method string getFaceIdToken() 获取<p>SDK人脸核身流程的标识。</p><ul><li>调用<a href="https://cloud.tencent.com/document/product/1007/49198">GetFaceIdToken</a>接口时生成。</li></ul>
 * @method void setFaceIdToken(string $FaceIdToken) 设置<p>SDK人脸核身流程的标识。</p><ul><li>调用<a href="https://cloud.tencent.com/document/product/1007/49198">GetFaceIdToken</a>接口时生成。</li></ul>
 * @method boolean getIsNeedVideo() 获取<p>是否需要拉取视频。</p><ul><li>默认false：不需要。</li></ul>
 * @method void setIsNeedVideo(boolean $IsNeedVideo) 设置<p>是否需要拉取视频。</p><ul><li>默认false：不需要。</li></ul>
 * @method boolean getIsNeedBestFrame() 获取<p>是否需要拉取截帧。</p><ul><li>默认false：不需要。</li></ul>
 * @method void setIsNeedBestFrame(boolean $IsNeedBestFrame) 设置<p>是否需要拉取截帧。</p><ul><li>默认false：不需要。</li></ul>
 * @method boolean getIsEncryptResponse() 获取<p>是否对回包整体进行加密。</p>
 * @method void setIsEncryptResponse(boolean $IsEncryptResponse) 设置<p>是否对回包整体进行加密。</p>
 * @method Encryption getEncryption() 获取<p>是否需要对返回中的敏感信息进行加密。<br>只需指定加密算法Algorithm即可，其余字段传入默认值。</p>
 * @method void setEncryption(Encryption $Encryption) 设置<p>是否需要对返回中的敏感信息进行加密。<br>只需指定加密算法Algorithm即可，其余字段传入默认值。</p>
 */
class GetFaceIdResultRequest extends AbstractModel
{
    /**
     * @var string <p>SDK人脸核身流程的标识。</p><ul><li>调用<a href="https://cloud.tencent.com/document/product/1007/49198">GetFaceIdToken</a>接口时生成。</li></ul>
     */
    public $FaceIdToken;

    /**
     * @var boolean <p>是否需要拉取视频。</p><ul><li>默认false：不需要。</li></ul>
     */
    public $IsNeedVideo;

    /**
     * @var boolean <p>是否需要拉取截帧。</p><ul><li>默认false：不需要。</li></ul>
     */
    public $IsNeedBestFrame;

    /**
     * @var boolean <p>是否对回包整体进行加密。</p>
     */
    public $IsEncryptResponse;

    /**
     * @var Encryption <p>是否需要对返回中的敏感信息进行加密。<br>只需指定加密算法Algorithm即可，其余字段传入默认值。</p>
     */
    public $Encryption;

    /**
     * @param string $FaceIdToken <p>SDK人脸核身流程的标识。</p><ul><li>调用<a href="https://cloud.tencent.com/document/product/1007/49198">GetFaceIdToken</a>接口时生成。</li></ul>
     * @param boolean $IsNeedVideo <p>是否需要拉取视频。</p><ul><li>默认false：不需要。</li></ul>
     * @param boolean $IsNeedBestFrame <p>是否需要拉取截帧。</p><ul><li>默认false：不需要。</li></ul>
     * @param boolean $IsEncryptResponse <p>是否对回包整体进行加密。</p>
     * @param Encryption $Encryption <p>是否需要对返回中的敏感信息进行加密。<br>只需指定加密算法Algorithm即可，其余字段传入默认值。</p>
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
        if (array_key_exists("FaceIdToken",$param) and $param["FaceIdToken"] !== null) {
            $this->FaceIdToken = $param["FaceIdToken"];
        }

        if (array_key_exists("IsNeedVideo",$param) and $param["IsNeedVideo"] !== null) {
            $this->IsNeedVideo = $param["IsNeedVideo"];
        }

        if (array_key_exists("IsNeedBestFrame",$param) and $param["IsNeedBestFrame"] !== null) {
            $this->IsNeedBestFrame = $param["IsNeedBestFrame"];
        }

        if (array_key_exists("IsEncryptResponse",$param) and $param["IsEncryptResponse"] !== null) {
            $this->IsEncryptResponse = $param["IsEncryptResponse"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}

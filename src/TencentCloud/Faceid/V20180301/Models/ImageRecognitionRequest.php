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
 * ImageRecognition请求参数结构体
 *
 * @method string getIdCard() 获取<p>身份证号</p>
 * @method void setIdCard(string $IdCard) 设置<p>身份证号</p>
 * @method string getName() 获取<p>姓名。中文请使用UTF-8编码。</p>
 * @method void setName(string $Name) 设置<p>姓名。中文请使用UTF-8编码。</p>
 * @method string getImageBase64() 获取<p>用于人脸比对的照片，图片的Base64值；<br>Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。<br>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>用于人脸比对的照片，图片的Base64值；<br>Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。<br>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</p>
 * @method string getOptional() 获取<p>本接口不需要传递此参数。</p>
 * @method void setOptional(string $Optional) 设置<p>本接口不需要传递此参数。</p>
 * @method Encryption getEncryption() 获取<p>敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
 * @method void setEncryption(Encryption $Encryption) 设置<p>敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
 */
class ImageRecognitionRequest extends AbstractModel
{
    /**
     * @var string <p>身份证号</p>
     */
    public $IdCard;

    /**
     * @var string <p>姓名。中文请使用UTF-8编码。</p>
     */
    public $Name;

    /**
     * @var string <p>用于人脸比对的照片，图片的Base64值；<br>Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。<br>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>本接口不需要传递此参数。</p>
     */
    public $Optional;

    /**
     * @var Encryption <p>敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
     */
    public $Encryption;

    /**
     * @param string $IdCard <p>身份证号</p>
     * @param string $Name <p>姓名。中文请使用UTF-8编码。</p>
     * @param string $ImageBase64 <p>用于人脸比对的照片，图片的Base64值；<br>Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。<br>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</p>
     * @param string $Optional <p>本接口不需要传递此参数。</p>
     * @param Encryption $Encryption <p>敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
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
        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("Optional",$param) and $param["Optional"] !== null) {
            $this->Optional = $param["Optional"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}

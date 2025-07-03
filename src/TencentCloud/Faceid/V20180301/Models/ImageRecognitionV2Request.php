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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageRecognitionV2请求参数结构体
 *
 * @method string getIdCard() 获取身份证号。
 * @method void setIdCard(string $IdCard) 设置身份证号。
 * @method string getName() 获取姓名。
- 中文请使用UTF-8编码。
 * @method void setName(string $Name) 设置姓名。
- 中文请使用UTF-8编码。
 * @method string getImageBase64() 获取用于人脸比对的照片，图片的Base64值；
Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
 * @method void setImageBase64(string $ImageBase64) 设置用于人脸比对的照片，图片的Base64值；
Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
 * @method string getOptional() 获取本接口不需要传递此参数。
 * @method void setOptional(string $Optional) 设置本接口不需要传递此参数。
 * @method Encryption getEncryption() 获取敏感数据加密信息。
- 对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method void setEncryption(Encryption $Encryption) 设置敏感数据加密信息。
- 对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method string getExtra() 获取自定义描述字段。
- 用于描述调用业务信息，出参中将返回此描述字段。 
- 每个自定义描述字段支持[1,10]个字符。
 * @method void setExtra(string $Extra) 设置自定义描述字段。
- 用于描述调用业务信息，出参中将返回此描述字段。 
- 每个自定义描述字段支持[1,10]个字符。
 */
class ImageRecognitionV2Request extends AbstractModel
{
    /**
     * @var string 身份证号。
     */
    public $IdCard;

    /**
     * @var string 姓名。
- 中文请使用UTF-8编码。
     */
    public $Name;

    /**
     * @var string 用于人脸比对的照片，图片的Base64值；
Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
     */
    public $ImageBase64;

    /**
     * @var string 本接口不需要传递此参数。
     */
    public $Optional;

    /**
     * @var Encryption 敏感数据加密信息。
- 对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
     */
    public $Encryption;

    /**
     * @var string 自定义描述字段。
- 用于描述调用业务信息，出参中将返回此描述字段。 
- 每个自定义描述字段支持[1,10]个字符。
     */
    public $Extra;

    /**
     * @param string $IdCard 身份证号。
     * @param string $Name 姓名。
- 中文请使用UTF-8编码。
     * @param string $ImageBase64 用于人脸比对的照片，图片的Base64值；
Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
     * @param string $Optional 本接口不需要传递此参数。
     * @param Encryption $Encryption 敏感数据加密信息。
- 对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
     * @param string $Extra 自定义描述字段。
- 用于描述调用业务信息，出参中将返回此描述字段。 
- 每个自定义描述字段支持[1,10]个字符。
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

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}

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
 * DetectAIFakeFaces请求参数结构体
 *
 * @method string getFaceInput() 获取传入需要进行检测的带有人脸的图片或视频（当前仅支持单人脸检测），使用base64编码的形式。
- 图片的Base64值：
建议整体图像480x640的分辨率，脸部 大小 100X100 以上。
Base64编码后的图片数据大小建议不超过3M、最大不可超过10M，仅支持jpg、png格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。

- 视频的Base64值：
Base64编码后的大小建议不超过8M、最大不可超过10M，支持mp4、avi、flv格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
视频时长最大支持20s，建议时长2～5s。
建议视频分辨率为480x640，帧率在25fps~30fps之间。

示例值：/9j/4AAQSkZJRg.....s97n//2Q==
 * @method void setFaceInput(string $FaceInput) 设置传入需要进行检测的带有人脸的图片或视频（当前仅支持单人脸检测），使用base64编码的形式。
- 图片的Base64值：
建议整体图像480x640的分辨率，脸部 大小 100X100 以上。
Base64编码后的图片数据大小建议不超过3M、最大不可超过10M，仅支持jpg、png格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。

- 视频的Base64值：
Base64编码后的大小建议不超过8M、最大不可超过10M，支持mp4、avi、flv格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
视频时长最大支持20s，建议时长2～5s。
建议视频分辨率为480x640，帧率在25fps~30fps之间。

示例值：/9j/4AAQSkZJRg.....s97n//2Q==
 * @method integer getFaceInputType() 获取传入的类型。
- 取值范围：
1：传入的是图片类型。
2：传入的是视频类型。
其他：返回错误码InvalidParameter。
 * @method void setFaceInputType(integer $FaceInputType) 设置传入的类型。
- 取值范围：
1：传入的是图片类型。
2：传入的是视频类型。
其他：返回错误码InvalidParameter。
 * @method Encryption getEncryption() 获取是否需要对请求信息进行全包体加密。
- 支持的加密算法:AES-256-CBC、SM4-GCM。
- 有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method void setEncryption(Encryption $Encryption) 设置是否需要对请求信息进行全包体加密。
- 支持的加密算法:AES-256-CBC、SM4-GCM。
- 有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method string getEncryptedBody() 获取加密后的密文。
- 加密前的数据格式如下:{"FaceInput":"AAAAA","FaceInputType":1}。
 * @method void setEncryptedBody(string $EncryptedBody) 设置加密后的密文。
- 加密前的数据格式如下:{"FaceInput":"AAAAA","FaceInputType":1}。
 */
class DetectAIFakeFacesRequest extends AbstractModel
{
    /**
     * @var string 传入需要进行检测的带有人脸的图片或视频（当前仅支持单人脸检测），使用base64编码的形式。
- 图片的Base64值：
建议整体图像480x640的分辨率，脸部 大小 100X100 以上。
Base64编码后的图片数据大小建议不超过3M、最大不可超过10M，仅支持jpg、png格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。

- 视频的Base64值：
Base64编码后的大小建议不超过8M、最大不可超过10M，支持mp4、avi、flv格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
视频时长最大支持20s，建议时长2～5s。
建议视频分辨率为480x640，帧率在25fps~30fps之间。

示例值：/9j/4AAQSkZJRg.....s97n//2Q==
     */
    public $FaceInput;

    /**
     * @var integer 传入的类型。
- 取值范围：
1：传入的是图片类型。
2：传入的是视频类型。
其他：返回错误码InvalidParameter。
     */
    public $FaceInputType;

    /**
     * @var Encryption 是否需要对请求信息进行全包体加密。
- 支持的加密算法:AES-256-CBC、SM4-GCM。
- 有加密需求的用户可使用此参数，详情请点击左侧链接。
     */
    public $Encryption;

    /**
     * @var string 加密后的密文。
- 加密前的数据格式如下:{"FaceInput":"AAAAA","FaceInputType":1}。
     */
    public $EncryptedBody;

    /**
     * @param string $FaceInput 传入需要进行检测的带有人脸的图片或视频（当前仅支持单人脸检测），使用base64编码的形式。
- 图片的Base64值：
建议整体图像480x640的分辨率，脸部 大小 100X100 以上。
Base64编码后的图片数据大小建议不超过3M、最大不可超过10M，仅支持jpg、png格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。

- 视频的Base64值：
Base64编码后的大小建议不超过8M、最大不可超过10M，支持mp4、avi、flv格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
视频时长最大支持20s，建议时长2～5s。
建议视频分辨率为480x640，帧率在25fps~30fps之间。

示例值：/9j/4AAQSkZJRg.....s97n//2Q==
     * @param integer $FaceInputType 传入的类型。
- 取值范围：
1：传入的是图片类型。
2：传入的是视频类型。
其他：返回错误码InvalidParameter。
     * @param Encryption $Encryption 是否需要对请求信息进行全包体加密。
- 支持的加密算法:AES-256-CBC、SM4-GCM。
- 有加密需求的用户可使用此参数，详情请点击左侧链接。
     * @param string $EncryptedBody 加密后的密文。
- 加密前的数据格式如下:{"FaceInput":"AAAAA","FaceInputType":1}。
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
        if (array_key_exists("FaceInput",$param) and $param["FaceInput"] !== null) {
            $this->FaceInput = $param["FaceInput"];
        }

        if (array_key_exists("FaceInputType",$param) and $param["FaceInputType"] !== null) {
            $this->FaceInputType = $param["FaceInputType"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("EncryptedBody",$param) and $param["EncryptedBody"] !== null) {
            $this->EncryptedBody = $param["EncryptedBody"];
        }
    }
}

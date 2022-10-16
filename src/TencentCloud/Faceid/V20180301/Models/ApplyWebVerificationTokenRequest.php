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
 * ApplyWebVerificationToken请求参数结构体
 *
 * @method string getRedirectUrl() 获取核验结束后重定向的Web回跳地址。
 * @method void setRedirectUrl(string $RedirectUrl) 设置核验结束后重定向的Web回跳地址。
 * @method string getCompareImageUrl() 获取人脸比对照片的腾讯云对象存储地址，可以使用以下两种方式：
1. 调用CreateUploadUrl接口生成，确保成功上传照片后再调用此接口。
2. 使用已有的腾讯云对象存储地址，如果是私有读写桶，请使用预签名URL授予下载权限，对象存储地域需要和入参Region保持一致。
 * @method void setCompareImageUrl(string $CompareImageUrl) 设置人脸比对照片的腾讯云对象存储地址，可以使用以下两种方式：
1. 调用CreateUploadUrl接口生成，确保成功上传照片后再调用此接口。
2. 使用已有的腾讯云对象存储地址，如果是私有读写桶，请使用预签名URL授予下载权限，对象存储地域需要和入参Region保持一致。
 * @method string getCompareImageMd5() 获取人脸比对照片（CompareImageUrl）内容的MD5散列值。
 * @method void setCompareImageMd5(string $CompareImageMd5) 设置人脸比对照片（CompareImageUrl）内容的MD5散列值。
 */
class ApplyWebVerificationTokenRequest extends AbstractModel
{
    /**
     * @var string 核验结束后重定向的Web回跳地址。
     */
    public $RedirectUrl;

    /**
     * @var string 人脸比对照片的腾讯云对象存储地址，可以使用以下两种方式：
1. 调用CreateUploadUrl接口生成，确保成功上传照片后再调用此接口。
2. 使用已有的腾讯云对象存储地址，如果是私有读写桶，请使用预签名URL授予下载权限，对象存储地域需要和入参Region保持一致。
     */
    public $CompareImageUrl;

    /**
     * @var string 人脸比对照片（CompareImageUrl）内容的MD5散列值。
     */
    public $CompareImageMd5;

    /**
     * @param string $RedirectUrl 核验结束后重定向的Web回跳地址。
     * @param string $CompareImageUrl 人脸比对照片的腾讯云对象存储地址，可以使用以下两种方式：
1. 调用CreateUploadUrl接口生成，确保成功上传照片后再调用此接口。
2. 使用已有的腾讯云对象存储地址，如果是私有读写桶，请使用预签名URL授予下载权限，对象存储地域需要和入参Region保持一致。
     * @param string $CompareImageMd5 人脸比对照片（CompareImageUrl）内容的MD5散列值。
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
        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("CompareImageUrl",$param) and $param["CompareImageUrl"] !== null) {
            $this->CompareImageUrl = $param["CompareImageUrl"];
        }

        if (array_key_exists("CompareImageMd5",$param) and $param["CompareImageMd5"] !== null) {
            $this->CompareImageMd5 = $param["CompareImageMd5"];
        }
    }
}

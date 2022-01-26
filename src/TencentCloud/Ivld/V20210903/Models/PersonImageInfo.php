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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义人物人脸图片信息
 *
 * @method string getImageId() 获取人脸图片ID
 * @method void setImageId(string $ImageId) 设置人脸图片ID
 * @method string getImageURL() 获取自定义人脸图片的URL，存储在IVLDCustomPreson存储桶内
 * @method void setImageURL(string $ImageURL) 设置自定义人脸图片的URL，存储在IVLDCustomPreson存储桶内
 * @method string getErrorCode() 获取自定义人脸图片处理错误码
 * @method void setErrorCode(string $ErrorCode) 设置自定义人脸图片处理错误码
 * @method string getErrorMsg() 获取自定义人脸图片处理错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置自定义人脸图片处理错误信息
 */
class PersonImageInfo extends AbstractModel
{
    /**
     * @var string 人脸图片ID
     */
    public $ImageId;

    /**
     * @var string 自定义人脸图片的URL，存储在IVLDCustomPreson存储桶内
     */
    public $ImageURL;

    /**
     * @var string 自定义人脸图片处理错误码
     */
    public $ErrorCode;

    /**
     * @var string 自定义人脸图片处理错误信息
     */
    public $ErrorMsg;

    /**
     * @param string $ImageId 人脸图片ID
     * @param string $ImageURL 自定义人脸图片的URL，存储在IVLDCustomPreson存储桶内
     * @param string $ErrorCode 自定义人脸图片处理错误码
     * @param string $ErrorMsg 自定义人脸图片处理错误信息
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageURL",$param) and $param["ImageURL"] !== null) {
            $this->ImageURL = $param["ImageURL"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}

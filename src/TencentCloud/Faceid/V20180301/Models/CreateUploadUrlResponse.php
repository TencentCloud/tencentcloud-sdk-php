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
 * CreateUploadUrl返回参数结构体
 *
 * @method string getUploadUrl() 获取用于上传内容的链接，使用HTTP PUT方法上传。
 * @method void setUploadUrl(string $UploadUrl) 设置用于上传内容的链接，使用HTTP PUT方法上传。
 * @method string getResourceUrl() 获取完成上传后将该链接用于后续需要传入资源URL的地方。
 * @method void setResourceUrl(string $ResourceUrl) 设置完成上传后将该链接用于后续需要传入资源URL的地方。
 * @method integer getExpiredTimestamp() 获取上传和下载链接过期时间点，10位unix时间戳。
 * @method void setExpiredTimestamp(integer $ExpiredTimestamp) 设置上传和下载链接过期时间点，10位unix时间戳。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateUploadUrlResponse extends AbstractModel
{
    /**
     * @var string 用于上传内容的链接，使用HTTP PUT方法上传。
     */
    public $UploadUrl;

    /**
     * @var string 完成上传后将该链接用于后续需要传入资源URL的地方。
     */
    public $ResourceUrl;

    /**
     * @var integer 上传和下载链接过期时间点，10位unix时间戳。
     */
    public $ExpiredTimestamp;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $UploadUrl 用于上传内容的链接，使用HTTP PUT方法上传。
     * @param string $ResourceUrl 完成上传后将该链接用于后续需要传入资源URL的地方。
     * @param integer $ExpiredTimestamp 上传和下载链接过期时间点，10位unix时间戳。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("UploadUrl",$param) and $param["UploadUrl"] !== null) {
            $this->UploadUrl = $param["UploadUrl"];
        }

        if (array_key_exists("ResourceUrl",$param) and $param["ResourceUrl"] !== null) {
            $this->ResourceUrl = $param["ResourceUrl"];
        }

        if (array_key_exists("ExpiredTimestamp",$param) and $param["ExpiredTimestamp"] !== null) {
            $this->ExpiredTimestamp = $param["ExpiredTimestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

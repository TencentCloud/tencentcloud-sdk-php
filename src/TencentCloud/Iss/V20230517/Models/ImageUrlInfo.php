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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片下载URL信息
 *
 * @method string getImageId() 获取<p>图片Id</p>
 * @method void setImageId(string $ImageId) 设置<p>图片Id</p>
 * @method string getImageUrl() 获取<p>图片Url</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片Url</p>
 * @method string getErrorMessage() 获取<p>错误信息</p><p>说明获取图片url失败的原因</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>错误信息</p><p>说明获取图片url失败的原因</p>
 */
class ImageUrlInfo extends AbstractModel
{
    /**
     * @var string <p>图片Id</p>
     */
    public $ImageId;

    /**
     * @var string <p>图片Url</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>错误信息</p><p>说明获取图片url失败的原因</p>
     */
    public $ErrorMessage;

    /**
     * @param string $ImageId <p>图片Id</p>
     * @param string $ImageUrl <p>图片Url</p>
     * @param string $ErrorMessage <p>错误信息</p><p>说明获取图片url失败的原因</p>
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

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}

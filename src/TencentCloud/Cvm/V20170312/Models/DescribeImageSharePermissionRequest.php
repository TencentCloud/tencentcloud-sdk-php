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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageSharePermission请求参数结构体
 *
 * @method string getImageId() 获取需要共享的镜像 ID，可通过 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) 接口返回的`ImageId`获取。
 * @method void setImageId(string $ImageId) 设置需要共享的镜像 ID，可通过 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) 接口返回的`ImageId`获取。
 */
class DescribeImageSharePermissionRequest extends AbstractModel
{
    /**
     * @var string 需要共享的镜像 ID，可通过 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) 接口返回的`ImageId`获取。
     */
    public $ImageId;

    /**
     * @param string $ImageId 需要共享的镜像 ID，可通过 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) 接口返回的`ImageId`获取。
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
    }
}

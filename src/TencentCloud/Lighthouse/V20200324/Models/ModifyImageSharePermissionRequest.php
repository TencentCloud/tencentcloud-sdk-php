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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyImageSharePermission请求参数结构体
 *
 * @method string getImageId() 获取镜像 ID。可通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回值中的ImageId获取。
 * @method void setImageId(string $ImageId) 设置镜像 ID。可通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回值中的ImageId获取。
 * @method string getPermission() 获取共享属性，包括 SHARE，CANCEL。其中SHARE代表共享，CANCEL代表取消共享。
 * @method void setPermission(string $Permission) 设置共享属性，包括 SHARE，CANCEL。其中SHARE代表共享，CANCEL代表取消共享。
 */
class ModifyImageSharePermissionRequest extends AbstractModel
{
    /**
     * @var string 镜像 ID。可通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回值中的ImageId获取。
     */
    public $ImageId;

    /**
     * @var string 共享属性，包括 SHARE，CANCEL。其中SHARE代表共享，CANCEL代表取消共享。
     */
    public $Permission;

    /**
     * @param string $ImageId 镜像 ID。可通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回值中的ImageId获取。
     * @param string $Permission 共享属性，包括 SHARE，CANCEL。其中SHARE代表共享，CANCEL代表取消共享。
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

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }
    }
}

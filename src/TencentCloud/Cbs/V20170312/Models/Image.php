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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像。
 *
 * @method string getImageName() 获取镜像名称。
 * @method void setImageName(string $ImageName) 设置镜像名称。
 * @method string getImageId() 获取镜像实例ID。
 * @method void setImageId(string $ImageId) 设置镜像实例ID。
 */
class Image extends AbstractModel
{
    /**
     * @var string 镜像名称。
     */
    public $ImageName;

    /**
     * @var string 镜像实例ID。
     */
    public $ImageId;

    /**
     * @param string $ImageName 镜像名称。
     * @param string $ImageId 镜像实例ID。
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
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }
    }
}

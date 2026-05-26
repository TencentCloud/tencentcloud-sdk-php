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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTWeSeePostPaidService请求参数结构体
 *
 * @method string getServiceType() 获取算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
 * @method void setServiceType(string $ServiceType) 设置算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
 */
class CreateTWeSeePostPaidServiceRequest extends AbstractModel
{
    /**
     * @var string 算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
     */
    public $ServiceType;

    /**
     * @param string $ServiceType 算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}

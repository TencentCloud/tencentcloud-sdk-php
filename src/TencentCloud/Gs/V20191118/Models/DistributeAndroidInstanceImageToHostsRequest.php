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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DistributeAndroidInstanceImageToHosts请求参数结构体
 *
 * @method array getHostSerialNumbers() 获取宿主机序列号数组
 * @method void setHostSerialNumbers(array $HostSerialNumbers) 设置宿主机序列号数组
 * @method string getImageId() 获取实例镜像 ID
 * @method void setImageId(string $ImageId) 设置实例镜像 ID
 */
class DistributeAndroidInstanceImageToHostsRequest extends AbstractModel
{
    /**
     * @var array 宿主机序列号数组
     */
    public $HostSerialNumbers;

    /**
     * @var string 实例镜像 ID
     */
    public $ImageId;

    /**
     * @param array $HostSerialNumbers 宿主机序列号数组
     * @param string $ImageId 实例镜像 ID
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
        if (array_key_exists("HostSerialNumbers",$param) and $param["HostSerialNumbers"] !== null) {
            $this->HostSerialNumbers = $param["HostSerialNumbers"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }
    }
}

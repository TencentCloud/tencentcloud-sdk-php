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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelTemplate请求参数结构体
 *
 * @method string getDeviceType() 获取型号类型，只支持传入 server 和 netDevice
 * @method void setDeviceType(string $DeviceType) 设置型号类型，只支持传入 server 和 netDevice
 */
class DescribeModelTemplateRequest extends AbstractModel
{
    /**
     * @var string 型号类型，只支持传入 server 和 netDevice
     */
    public $DeviceType;

    /**
     * @param string $DeviceType 型号类型，只支持传入 server 和 netDevice
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
        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}

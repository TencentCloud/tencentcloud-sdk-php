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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeployTemplates请求参数结构体
 *
 * @method string getModelId() 获取模型ID
 * @method void setModelId(string $ModelId) 设置模型ID
 * @method string getServiceId() 获取可选。传入当前推理服务 ID 时，仅返回与该服务占用兼容的模板：同一 Scene、卡型家族兼容、机数相等、非机密计算。
 * @method void setServiceId(string $ServiceId) 设置可选。传入当前推理服务 ID 时，仅返回与该服务占用兼容的模板：同一 Scene、卡型家族兼容、机数相等、非机密计算。
 */
class DescribeDeployTemplatesRequest extends AbstractModel
{
    /**
     * @var string 模型ID
     */
    public $ModelId;

    /**
     * @var string 可选。传入当前推理服务 ID 时，仅返回与该服务占用兼容的模板：同一 Scene、卡型家族兼容、机数相等、非机密计算。
     */
    public $ServiceId;

    /**
     * @param string $ModelId 模型ID
     * @param string $ServiceId 可选。传入当前推理服务 ID 时，仅返回与该服务占用兼容的模板：同一 Scene、卡型家族兼容、机数相等、非机密计算。
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}

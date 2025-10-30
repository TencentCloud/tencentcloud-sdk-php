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
 * 目标检测配置
 *
 * @method array getDetectTypes() 获取检测类别，可选值：
- `adult`：成年人
- `child`：儿童
 * @method void setDetectTypes(array $DetectTypes) 设置检测类别，可选值：
- `adult`：成年人
- `child`：儿童
 */
class VisionObjectDetectConfig extends AbstractModel
{
    /**
     * @var array 检测类别，可选值：
- `adult`：成年人
- `child`：儿童
     */
    public $DetectTypes;

    /**
     * @param array $DetectTypes 检测类别，可选值：
- `adult`：成年人
- `child`：儿童
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
        if (array_key_exists("DetectTypes",$param) and $param["DetectTypes"] !== null) {
            $this->DetectTypes = $param["DetectTypes"];
        }
    }
}

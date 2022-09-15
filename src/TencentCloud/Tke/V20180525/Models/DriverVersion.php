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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GPU驱动和CUDA的版本信息
 *
 * @method string getVersion() 获取GPU驱动或者CUDA的版本
 * @method void setVersion(string $Version) 设置GPU驱动或者CUDA的版本
 * @method string getName() 获取GPU驱动或者CUDA的名字
 * @method void setName(string $Name) 设置GPU驱动或者CUDA的名字
 */
class DriverVersion extends AbstractModel
{
    /**
     * @var string GPU驱动或者CUDA的版本
     */
    public $Version;

    /**
     * @var string GPU驱动或者CUDA的名字
     */
    public $Name;

    /**
     * @param string $Version GPU驱动或者CUDA的版本
     * @param string $Name GPU驱动或者CUDA的名字
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}

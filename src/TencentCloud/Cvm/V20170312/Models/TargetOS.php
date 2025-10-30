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
 * 操作系统转换的目标操作系统信息
 *
 * @method string getTargetOSType() 获取目标操作系统类型
 * @method void setTargetOSType(string $TargetOSType) 设置目标操作系统类型
 * @method string getTargetOSVersion() 获取目标操作系统版本
 * @method void setTargetOSVersion(string $TargetOSVersion) 设置目标操作系统版本
 */
class TargetOS extends AbstractModel
{
    /**
     * @var string 目标操作系统类型
     */
    public $TargetOSType;

    /**
     * @var string 目标操作系统版本
     */
    public $TargetOSVersion;

    /**
     * @param string $TargetOSType 目标操作系统类型
     * @param string $TargetOSVersion 目标操作系统版本
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
        if (array_key_exists("TargetOSType",$param) and $param["TargetOSType"] !== null) {
            $this->TargetOSType = $param["TargetOSType"];
        }

        if (array_key_exists("TargetOSVersion",$param) and $param["TargetOSVersion"] !== null) {
            $this->TargetOSVersion = $param["TargetOSVersion"];
        }
    }
}

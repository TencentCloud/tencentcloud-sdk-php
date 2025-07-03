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
 * 运行时配置
 *
 * @method string getRuntimeType() 获取运行时类型
 * @method void setRuntimeType(string $RuntimeType) 设置运行时类型
 * @method string getRuntimeVersion() 获取运行时版本
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行时版本
 */
class RuntimeConfig extends AbstractModel
{
    /**
     * @var string 运行时类型
     */
    public $RuntimeType;

    /**
     * @var string 运行时版本
     */
    public $RuntimeVersion;

    /**
     * @param string $RuntimeType 运行时类型
     * @param string $RuntimeVersion 运行时版本
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
        if (array_key_exists("RuntimeType",$param) and $param["RuntimeType"] !== null) {
            $this->RuntimeType = $param["RuntimeType"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }
    }
}

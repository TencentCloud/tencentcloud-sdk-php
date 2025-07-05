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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可选运行时
 *
 * @method string getRuntimeType() 获取运行时类型
 * @method void setRuntimeType(string $RuntimeType) 设置运行时类型
 * @method array getRuntimeVersions() 获取运行时版本列表
 * @method void setRuntimeVersions(array $RuntimeVersions) 设置运行时版本列表
 * @method string getDefaultVersion() 获取该类型的默认运行时版本
 * @method void setDefaultVersion(string $DefaultVersion) 设置该类型的默认运行时版本
 */
class OptionalRuntimes extends AbstractModel
{
    /**
     * @var string 运行时类型
     */
    public $RuntimeType;

    /**
     * @var array 运行时版本列表
     */
    public $RuntimeVersions;

    /**
     * @var string 该类型的默认运行时版本
     */
    public $DefaultVersion;

    /**
     * @param string $RuntimeType 运行时类型
     * @param array $RuntimeVersions 运行时版本列表
     * @param string $DefaultVersion 该类型的默认运行时版本
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

        if (array_key_exists("RuntimeVersions",$param) and $param["RuntimeVersions"] !== null) {
            $this->RuntimeVersions = $param["RuntimeVersions"];
        }

        if (array_key_exists("DefaultVersion",$param) and $param["DefaultVersion"] !== null) {
            $this->DefaultVersion = $param["DefaultVersion"];
        }
    }
}

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
 * 应用市场自定义参数
 *
 * @method string getRawOriginal() 获取自定义参数原始值
 * @method void setRawOriginal(string $RawOriginal) 设置自定义参数原始值
 * @method string getValuesType() 获取自定义参数值类型
 * @method void setValuesType(string $ValuesType) 设置自定义参数值类型
 */
class ReleaseValues extends AbstractModel
{
    /**
     * @var string 自定义参数原始值
     */
    public $RawOriginal;

    /**
     * @var string 自定义参数值类型
     */
    public $ValuesType;

    /**
     * @param string $RawOriginal 自定义参数原始值
     * @param string $ValuesType 自定义参数值类型
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
        if (array_key_exists("RawOriginal",$param) and $param["RawOriginal"] !== null) {
            $this->RawOriginal = $param["RawOriginal"];
        }

        if (array_key_exists("ValuesType",$param) and $param["ValuesType"] !== null) {
            $this->ValuesType = $param["ValuesType"];
        }
    }
}

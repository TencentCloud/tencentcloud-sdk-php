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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改的实例参数信息
 *
 * @method string getParamName() 获取参数名
 * @method void setParamName(string $ParamName) 设置参数名
 * @method string getCurrentValue() 获取参数当前值
 * @method void setCurrentValue(string $CurrentValue) 设置参数当前值
 * @method string getOldValue() 获取参数旧值（只在出参时有用）
 * @method void setOldValue(string $OldValue) 设置参数旧值（只在出参时有用）
 * @method string getComponent() 获取libra组件类型
 * @method void setComponent(string $Component) 设置libra组件类型
 */
class ModifyParamItem extends AbstractModel
{
    /**
     * @var string 参数名
     */
    public $ParamName;

    /**
     * @var string 参数当前值
     */
    public $CurrentValue;

    /**
     * @var string 参数旧值（只在出参时有用）
     */
    public $OldValue;

    /**
     * @var string libra组件类型
     */
    public $Component;

    /**
     * @param string $ParamName 参数名
     * @param string $CurrentValue 参数当前值
     * @param string $OldValue 参数旧值（只在出参时有用）
     * @param string $Component libra组件类型
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }
    }
}

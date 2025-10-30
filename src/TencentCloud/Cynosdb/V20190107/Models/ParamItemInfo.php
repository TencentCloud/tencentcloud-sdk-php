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
 * 参数变化信息
 *
 * @method string getParamName() 获取参数名字
 * @method void setParamName(string $ParamName) 设置参数名字
 * @method string getNewValue() 获取参数新值

 * @method void setNewValue(string $NewValue) 设置参数新值

 * @method string getOldValue() 获取参数旧值

 * @method void setOldValue(string $OldValue) 设置参数旧值

 * @method string getValueFunction() 获取参数公式

 * @method void setValueFunction(string $ValueFunction) 设置参数公式
 */
class ParamItemInfo extends AbstractModel
{
    /**
     * @var string 参数名字
     */
    public $ParamName;

    /**
     * @var string 参数新值

     */
    public $NewValue;

    /**
     * @var string 参数旧值

     */
    public $OldValue;

    /**
     * @var string 参数公式

     */
    public $ValueFunction;

    /**
     * @param string $ParamName 参数名字
     * @param string $NewValue 参数新值

     * @param string $OldValue 参数旧值

     * @param string $ValueFunction 参数公式
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

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("ValueFunction",$param) and $param["ValueFunction"] !== null) {
            $this->ValueFunction = $param["ValueFunction"];
        }
    }
}

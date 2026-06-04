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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVariable请求参数结构体
 *
 * @method string getAppId() 获取app_id
 * @method void setAppId(string $AppId) 设置app_id
 * @method Variable getVariable() 获取变量信息
 * @method void setVariable(Variable $Variable) 设置变量信息
 */
class CreateVariableRequest extends AbstractModel
{
    /**
     * @var string app_id
     */
    public $AppId;

    /**
     * @var Variable 变量信息
     */
    public $Variable;

    /**
     * @param string $AppId app_id
     * @param Variable $Variable 变量信息
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Variable",$param) and $param["Variable"] !== null) {
            $this->Variable = new Variable();
            $this->Variable->deserialize($param["Variable"]);
        }
    }
}

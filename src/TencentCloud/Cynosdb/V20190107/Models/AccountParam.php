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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号参数
 *
 * @method string getParamName() 获取参数名称，当前仅支持参数：max_user_connections
 * @method void setParamName(string $ParamName) 设置参数名称，当前仅支持参数：max_user_connections
 * @method string getParamValue() 获取参数值
 * @method void setParamValue(string $ParamValue) 设置参数值
 */
class AccountParam extends AbstractModel
{
    /**
     * @var string 参数名称，当前仅支持参数：max_user_connections
     */
    public $ParamName;

    /**
     * @var string 参数值
     */
    public $ParamValue;

    /**
     * @param string $ParamName 参数名称，当前仅支持参数：max_user_connections
     * @param string $ParamValue 参数值
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

        if (array_key_exists("ParamValue",$param) and $param["ParamValue"] !== null) {
            $this->ParamValue = $param["ParamValue"];
        }
    }
}

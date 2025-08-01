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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置下发参数
 *
 * @method string getConfigType() 获取参数类型，可选：StaticConfigType，DynamicConfigType
 * @method void setConfigType(string $ConfigType) 设置参数类型，可选：StaticConfigType，DynamicConfigType
 * @method array getParams() 获取参数的配置数组
 * @method void setParams(array $Params) 设置参数的配置数组
 */
class UpdateConfContext extends AbstractModel
{
    /**
     * @var string 参数类型，可选：StaticConfigType，DynamicConfigType
     */
    public $ConfigType;

    /**
     * @var array 参数的配置数组
     */
    public $Params;

    /**
     * @param string $ConfigType 参数类型，可选：StaticConfigType，DynamicConfigType
     * @param array $Params 参数的配置数组
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
        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new Param();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }
    }
}

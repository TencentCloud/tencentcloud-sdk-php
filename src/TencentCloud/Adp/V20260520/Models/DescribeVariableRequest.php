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
 * DescribeVariable请求参数结构体
 *
 * @method string getAppId() 获取app_id
 * @method void setAppId(string $AppId) 设置app_id
 * @method string getVariableId() 获取variable_id
 * @method void setVariableId(string $VariableId) 设置variable_id
 * @method integer getModuleType() 获取module_type。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
 * @method void setModuleType(integer $ModuleType) 设置module_type。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
 */
class DescribeVariableRequest extends AbstractModel
{
    /**
     * @var string app_id
     */
    public $AppId;

    /**
     * @var string variable_id
     */
    public $VariableId;

    /**
     * @var integer module_type。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
     */
    public $ModuleType;

    /**
     * @param string $AppId app_id
     * @param string $VariableId variable_id
     * @param integer $ModuleType module_type。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
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

        if (array_key_exists("VariableId",$param) and $param["VariableId"] !== null) {
            $this->VariableId = $param["VariableId"];
        }

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }
    }
}

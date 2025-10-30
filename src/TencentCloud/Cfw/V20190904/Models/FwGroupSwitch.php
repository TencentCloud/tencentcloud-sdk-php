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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多种VPC墙模式开关结构
 *
 * @method integer getSwitchMode() 获取防火墙实例的开关模式 1: 单点互通 2: 多点互通 3: 全互通 4: 自定义路由
 * @method void setSwitchMode(integer $SwitchMode) 设置防火墙实例的开关模式 1: 单点互通 2: 多点互通 3: 全互通 4: 自定义路由
 * @method string getSwitchId() 获取防火墙开关ID
支持三种类型
1. 边开关(单点互通)
2. 点开关(多点互通)
3. 全开关(全互通)
 * @method void setSwitchId(string $SwitchId) 设置防火墙开关ID
支持三种类型
1. 边开关(单点互通)
2. 点开关(多点互通)
3. 全开关(全互通)
 */
class FwGroupSwitch extends AbstractModel
{
    /**
     * @var integer 防火墙实例的开关模式 1: 单点互通 2: 多点互通 3: 全互通 4: 自定义路由
     */
    public $SwitchMode;

    /**
     * @var string 防火墙开关ID
支持三种类型
1. 边开关(单点互通)
2. 点开关(多点互通)
3. 全开关(全互通)
     */
    public $SwitchId;

    /**
     * @param integer $SwitchMode 防火墙实例的开关模式 1: 单点互通 2: 多点互通 3: 全互通 4: 自定义路由
     * @param string $SwitchId 防火墙开关ID
支持三种类型
1. 边开关(单点互通)
2. 点开关(多点互通)
3. 全开关(全互通)
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
        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }

        if (array_key_exists("SwitchId",$param) and $param["SwitchId"] !== null) {
            $this->SwitchId = $param["SwitchId"];
        }
    }
}

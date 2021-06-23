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
 * 集群中控制器的状态描述
 *
 * @method string getName() 获取控制器的名字
 * @method void setName(string $Name) 设置控制器的名字
 * @method boolean getEnabled() 获取控制器是否开启
 * @method void setEnabled(boolean $Enabled) 设置控制器是否开启
 */
class ControllerStatus extends AbstractModel
{
    /**
     * @var string 控制器的名字
     */
    public $Name;

    /**
     * @var boolean 控制器是否开启
     */
    public $Enabled;

    /**
     * @param string $Name 控制器的名字
     * @param boolean $Enabled 控制器是否开启
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}

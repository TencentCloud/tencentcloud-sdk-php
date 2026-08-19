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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作系统信息
 *
 * @method integer getMachineOSType() 获取<p>操作系统类型ID</p>
 * @method void setMachineOSType(integer $MachineOSType) 设置<p>操作系统类型ID</p>
 * @method string getName() 获取<p>操作系统名称</p>
 * @method void setName(string $Name) 设置<p>操作系统名称</p>
 */
class OsName extends AbstractModel
{
    /**
     * @var integer <p>操作系统类型ID</p>
     */
    public $MachineOSType;

    /**
     * @var string <p>操作系统名称</p>
     */
    public $Name;

    /**
     * @param integer $MachineOSType <p>操作系统类型ID</p>
     * @param string $Name <p>操作系统名称</p>
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
        if (array_key_exists("MachineOSType",$param) and $param["MachineOSType"] !== null) {
            $this->MachineOSType = $param["MachineOSType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}

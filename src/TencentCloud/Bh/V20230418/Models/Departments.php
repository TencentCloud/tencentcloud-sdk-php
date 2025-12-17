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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部门列表
 *
 * @method array getDepartmentSet() 获取部门列表
 * @method void setDepartmentSet(array $DepartmentSet) 设置部门列表
 * @method boolean getEnabled() 获取是否开启了部门管理 true - 已开启, false - 未开启
 * @method void setEnabled(boolean $Enabled) 设置是否开启了部门管理 true - 已开启, false - 未开启
 * @method boolean getRootManager() 获取当前操作UIN是否是根部门管理员
 * @method void setRootManager(boolean $RootManager) 设置当前操作UIN是否是根部门管理员
 */
class Departments extends AbstractModel
{
    /**
     * @var array 部门列表
     */
    public $DepartmentSet;

    /**
     * @var boolean 是否开启了部门管理 true - 已开启, false - 未开启
     */
    public $Enabled;

    /**
     * @var boolean 当前操作UIN是否是根部门管理员
     */
    public $RootManager;

    /**
     * @param array $DepartmentSet 部门列表
     * @param boolean $Enabled 是否开启了部门管理 true - 已开启, false - 未开启
     * @param boolean $RootManager 当前操作UIN是否是根部门管理员
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
        if (array_key_exists("DepartmentSet",$param) and $param["DepartmentSet"] !== null) {
            $this->DepartmentSet = [];
            foreach ($param["DepartmentSet"] as $key => $value){
                $obj = new Department();
                $obj->deserialize($value);
                array_push($this->DepartmentSet, $obj);
            }
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RootManager",$param) and $param["RootManager"] !== null) {
            $this->RootManager = $param["RootManager"];
        }
    }
}

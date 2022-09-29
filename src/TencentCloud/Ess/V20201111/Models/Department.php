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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集成版员工部门信息
 *
 * @method string getDepartmentId() 获取部门id
 * @method void setDepartmentId(string $DepartmentId) 设置部门id
 * @method string getDepartmentName() 获取部门名称
 * @method void setDepartmentName(string $DepartmentName) 设置部门名称
 */
class Department extends AbstractModel
{
    /**
     * @var string 部门id
     */
    public $DepartmentId;

    /**
     * @var string 部门名称
     */
    public $DepartmentName;

    /**
     * @param string $DepartmentId 部门id
     * @param string $DepartmentName 部门名称
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
        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("DepartmentName",$param) and $param["DepartmentName"] !== null) {
            $this->DepartmentName = $param["DepartmentName"];
        }
    }
}

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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录请求对象
 *
 * @method string getDoctorId() 获取医生ID
 * @method void setDoctorId(string $DoctorId) 设置医生ID
 * @method string getDoctorName() 获取医生名称
 * @method void setDoctorName(string $DoctorName) 设置医生名称
 * @method string getDoctorLevel() 获取医生职级 主治医师、副主任医师、主任医师
 * @method void setDoctorLevel(string $DoctorLevel) 设置医生职级 主治医师、副主任医师、主任医师
 * @method string getDoctorDepartment() 获取医生科室 当前登录科室
 * @method void setDoctorDepartment(string $DoctorDepartment) 设置医生科室 当前登录科室
 * @method string getDepartmentId() 获取科室ID
 * @method void setDepartmentId(string $DepartmentId) 设置科室ID
 */
class LoginData extends AbstractModel
{
    /**
     * @var string 医生ID
     */
    public $DoctorId;

    /**
     * @var string 医生名称
     */
    public $DoctorName;

    /**
     * @var string 医生职级 主治医师、副主任医师、主任医师
     */
    public $DoctorLevel;

    /**
     * @var string 医生科室 当前登录科室
     */
    public $DoctorDepartment;

    /**
     * @var string 科室ID
     */
    public $DepartmentId;

    /**
     * @param string $DoctorId 医生ID
     * @param string $DoctorName 医生名称
     * @param string $DoctorLevel 医生职级 主治医师、副主任医师、主任医师
     * @param string $DoctorDepartment 医生科室 当前登录科室
     * @param string $DepartmentId 科室ID
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
        if (array_key_exists("DoctorId",$param) and $param["DoctorId"] !== null) {
            $this->DoctorId = $param["DoctorId"];
        }

        if (array_key_exists("DoctorName",$param) and $param["DoctorName"] !== null) {
            $this->DoctorName = $param["DoctorName"];
        }

        if (array_key_exists("DoctorLevel",$param) and $param["DoctorLevel"] !== null) {
            $this->DoctorLevel = $param["DoctorLevel"];
        }

        if (array_key_exists("DoctorDepartment",$param) and $param["DoctorDepartment"] !== null) {
            $this->DoctorDepartment = $param["DoctorDepartment"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }
    }
}

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
 * 医生信息
 *
 * @method string getDoctorId() 获取医生ID
 * @method void setDoctorId(string $DoctorId) 设置医生ID
 * @method string getDoctorName() 获取医生姓名
 * @method void setDoctorName(string $DoctorName) 设置医生姓名
 * @method string getDoctorPhone() 获取医生电话
 * @method void setDoctorPhone(string $DoctorPhone) 设置医生电话
 */
class DoctorInfo extends AbstractModel
{
    /**
     * @var string 医生ID
     */
    public $DoctorId;

    /**
     * @var string 医生姓名
     */
    public $DoctorName;

    /**
     * @var string 医生电话
     */
    public $DoctorPhone;

    /**
     * @param string $DoctorId 医生ID
     * @param string $DoctorName 医生姓名
     * @param string $DoctorPhone 医生电话
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

        if (array_key_exists("DoctorPhone",$param) and $param["DoctorPhone"] !== null) {
            $this->DoctorPhone = $param["DoctorPhone"];
        }
    }
}

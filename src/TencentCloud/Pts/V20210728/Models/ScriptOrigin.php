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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 脚本内置压力模型
 *
 * @method integer getMachineNumber() 获取机器数量
 * @method void setMachineNumber(integer $MachineNumber) 设置机器数量
 * @method string getMachineSpecification() 获取机器规格
 * @method void setMachineSpecification(string $MachineSpecification) 设置机器规格
 * @method integer getDurationSeconds() 获取压测时长
 * @method void setDurationSeconds(integer $DurationSeconds) 设置压测时长
 */
class ScriptOrigin extends AbstractModel
{
    /**
     * @var integer 机器数量
     */
    public $MachineNumber;

    /**
     * @var string 机器规格
     */
    public $MachineSpecification;

    /**
     * @var integer 压测时长
     */
    public $DurationSeconds;

    /**
     * @param integer $MachineNumber 机器数量
     * @param string $MachineSpecification 机器规格
     * @param integer $DurationSeconds 压测时长
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
        if (array_key_exists("MachineNumber",$param) and $param["MachineNumber"] !== null) {
            $this->MachineNumber = $param["MachineNumber"];
        }

        if (array_key_exists("MachineSpecification",$param) and $param["MachineSpecification"] !== null) {
            $this->MachineSpecification = $param["MachineSpecification"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }
    }
}

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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例初始化配置信息
 *
 * @method integer getCpu() 获取实例cpu
 * @method void setCpu(integer $Cpu) 设置实例cpu
 * @method integer getMemory() 获取实例内存
 * @method void setMemory(integer $Memory) 设置实例内存
 * @method string getInstanceType() 获取实例类型 rw/ro
 * @method void setInstanceType(string $InstanceType) 设置实例类型 rw/ro
 * @method integer getInstanceCount() 获取实例个数,范围[1,15]
 * @method void setInstanceCount(integer $InstanceCount) 设置实例个数,范围[1,15]
 */
class InstanceInitInfo extends AbstractModel
{
    /**
     * @var integer 实例cpu
     */
    public $Cpu;

    /**
     * @var integer 实例内存
     */
    public $Memory;

    /**
     * @var string 实例类型 rw/ro
     */
    public $InstanceType;

    /**
     * @var integer 实例个数,范围[1,15]
     */
    public $InstanceCount;

    /**
     * @param integer $Cpu 实例cpu
     * @param integer $Memory 实例内存
     * @param string $InstanceType 实例类型 rw/ro
     * @param integer $InstanceCount 实例个数,范围[1,15]
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }
    }
}

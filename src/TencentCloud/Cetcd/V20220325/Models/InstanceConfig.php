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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例配置信息
 *
 * @method integer getCpu() 获取核数
 * @method void setCpu(integer $Cpu) 设置核数
 * @method integer getMem() 获取内存大小Gi
 * @method void setMem(integer $Mem) 设置内存大小Gi
 * @method integer getSize() 获取集群规模
 * @method void setSize(integer $Size) 设置集群规模
 */
class InstanceConfig extends AbstractModel
{
    /**
     * @var integer 核数
     */
    public $Cpu;

    /**
     * @var integer 内存大小Gi
     */
    public $Mem;

    /**
     * @var integer 集群规模
     */
    public $Size;

    /**
     * @param integer $Cpu 核数
     * @param integer $Mem 内存大小Gi
     * @param integer $Size 集群规模
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

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}

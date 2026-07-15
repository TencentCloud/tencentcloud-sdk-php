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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点规格信息
 *
 * @method integer getCpu() 获取CPU核数
 * @method void setCpu(integer $Cpu) 设置CPU核数
 * @method integer getMem() 获取内存大小，单位GB
 * @method void setMem(integer $Mem) 设置内存大小，单位GB
 * @method string getDesc() 获取规格描述
 * @method void setDesc(string $Desc) 设置规格描述
 */
class NodeTypeInfo extends AbstractModel
{
    /**
     * @var integer CPU核数
     */
    public $Cpu;

    /**
     * @var integer 内存大小，单位GB
     */
    public $Mem;

    /**
     * @var string 规格描述
     */
    public $Desc;

    /**
     * @param integer $Cpu CPU核数
     * @param integer $Mem 内存大小，单位GB
     * @param string $Desc 规格描述
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}

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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDC集群内宿主机的统计信息
 *
 * @method string getHostType() 获取宿主机规格
 * @method void setHostType(string $HostType) 设置宿主机规格
 * @method string getHostFamily() 获取宿主机机型系列
 * @method void setHostFamily(string $HostFamily) 设置宿主机机型系列
 * @method integer getCpu() 获取宿主机的CPU核数，单位：核
 * @method void setCpu(integer $Cpu) 设置宿主机的CPU核数，单位：核
 * @method integer getMemory() 获取宿主机内存大小，单位：GB
 * @method void setMemory(integer $Memory) 设置宿主机内存大小，单位：GB
 * @method integer getCount() 获取该规格宿主机的数量
 * @method void setCount(integer $Count) 设置该规格宿主机的数量
 */
class HostStatistic extends AbstractModel
{
    /**
     * @var string 宿主机规格
     */
    public $HostType;

    /**
     * @var string 宿主机机型系列
     */
    public $HostFamily;

    /**
     * @var integer 宿主机的CPU核数，单位：核
     */
    public $Cpu;

    /**
     * @var integer 宿主机内存大小，单位：GB
     */
    public $Memory;

    /**
     * @var integer 该规格宿主机的数量
     */
    public $Count;

    /**
     * @param string $HostType 宿主机规格
     * @param string $HostFamily 宿主机机型系列
     * @param integer $Cpu 宿主机的CPU核数，单位：核
     * @param integer $Memory 宿主机内存大小，单位：GB
     * @param integer $Count 该规格宿主机的数量
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
        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("HostFamily",$param) and $param["HostFamily"] !== null) {
            $this->HostFamily = $param["HostFamily"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}

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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod资源售卖规格
 *
 * @method string getNodeType() 获取可售卖的资源规格，仅为以下值:"TASK","CORE","MASTER","ROUTER"。
 * @method void setNodeType(string $NodeType) 设置可售卖的资源规格，仅为以下值:"TASK","CORE","MASTER","ROUTER"。
 * @method integer getCpu() 获取Cpu核数。
 * @method void setCpu(integer $Cpu) 设置Cpu核数。
 * @method integer getMemory() 获取内存数量，单位为GB。
 * @method void setMemory(integer $Memory) 设置内存数量，单位为GB。
 * @method integer getNumber() 获取该规格资源可申请的最大数量。
 * @method void setNumber(integer $Number) 设置该规格资源可申请的最大数量。
 */
class PodSaleSpec extends AbstractModel
{
    /**
     * @var string 可售卖的资源规格，仅为以下值:"TASK","CORE","MASTER","ROUTER"。
     */
    public $NodeType;

    /**
     * @var integer Cpu核数。
     */
    public $Cpu;

    /**
     * @var integer 内存数量，单位为GB。
     */
    public $Memory;

    /**
     * @var integer 该规格资源可申请的最大数量。
     */
    public $Number;

    /**
     * @param string $NodeType 可售卖的资源规格，仅为以下值:"TASK","CORE","MASTER","ROUTER"。
     * @param integer $Cpu Cpu核数。
     * @param integer $Memory 内存数量，单位为GB。
     * @param integer $Number 该规格资源可申请的最大数量。
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}

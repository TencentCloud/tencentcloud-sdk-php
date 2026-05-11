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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例初始化配置信息
 *
 * @method integer getCpu() 获取<p>实例cpu</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例cpu</p>
 * @method integer getMemory() 获取<p>实例内存</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存</p>
 * @method string getInstanceType() 获取<p>实例类型 rw/ro</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型 rw/ro</p>
 * @method integer getInstanceCount() 获取<p>实例个数,范围[1,15]</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>实例个数,范围[1,15]</p>
 * @method integer getMinRoCount() 获取<p>Serverless实例个数最小值，范围[1,15]</p>
 * @method void setMinRoCount(integer $MinRoCount) 设置<p>Serverless实例个数最小值，范围[1,15]</p>
 * @method integer getMaxRoCount() 获取<p>Serverless实例个数最大值，范围[1,15]</p>
 * @method void setMaxRoCount(integer $MaxRoCount) 设置<p>Serverless实例个数最大值，范围[1,15]</p>
 * @method float getMinRoCpu() 获取<p>Serverless实例最小规格</p>
 * @method void setMinRoCpu(float $MinRoCpu) 设置<p>Serverless实例最小规格</p>
 * @method float getMaxRoCpu() 获取<p>Serverless实例最大规格</p>
 * @method void setMaxRoCpu(float $MaxRoCpu) 设置<p>Serverless实例最大规格</p>
 * @method string getDeviceType() 获取<p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
 * @method void setDeviceType(string $DeviceType) 设置<p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
 */
class InstanceInitInfo extends AbstractModel
{
    /**
     * @var integer <p>实例cpu</p>
     */
    public $Cpu;

    /**
     * @var integer <p>实例内存</p>
     */
    public $Memory;

    /**
     * @var string <p>实例类型 rw/ro</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>实例个数,范围[1,15]</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>Serverless实例个数最小值，范围[1,15]</p>
     */
    public $MinRoCount;

    /**
     * @var integer <p>Serverless实例个数最大值，范围[1,15]</p>
     */
    public $MaxRoCount;

    /**
     * @var float <p>Serverless实例最小规格</p>
     */
    public $MinRoCpu;

    /**
     * @var float <p>Serverless实例最大规格</p>
     */
    public $MaxRoCpu;

    /**
     * @var string <p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
     */
    public $DeviceType;

    /**
     * @param integer $Cpu <p>实例cpu</p>
     * @param integer $Memory <p>实例内存</p>
     * @param string $InstanceType <p>实例类型 rw/ro</p>
     * @param integer $InstanceCount <p>实例个数,范围[1,15]</p>
     * @param integer $MinRoCount <p>Serverless实例个数最小值，范围[1,15]</p>
     * @param integer $MaxRoCount <p>Serverless实例个数最大值，范围[1,15]</p>
     * @param float $MinRoCpu <p>Serverless实例最小规格</p>
     * @param float $MaxRoCpu <p>Serverless实例最大规格</p>
     * @param string $DeviceType <p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
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

        if (array_key_exists("MinRoCount",$param) and $param["MinRoCount"] !== null) {
            $this->MinRoCount = $param["MinRoCount"];
        }

        if (array_key_exists("MaxRoCount",$param) and $param["MaxRoCount"] !== null) {
            $this->MaxRoCount = $param["MaxRoCount"];
        }

        if (array_key_exists("MinRoCpu",$param) and $param["MinRoCpu"] !== null) {
            $this->MinRoCpu = $param["MinRoCpu"];
        }

        if (array_key_exists("MaxRoCpu",$param) and $param["MaxRoCpu"] !== null) {
            $this->MaxRoCpu = $param["MaxRoCpu"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}

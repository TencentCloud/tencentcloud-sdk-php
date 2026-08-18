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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单shark变配入参
 *
 * @method string getReplicaSetId() 获取<p>分片ID</p>
 * @method void setReplicaSetId(string $ReplicaSetId) 设置<p>分片ID</p>
 * @method integer getCpu() 获取<p>CPU核数。单位：C。</p>
 * @method void setCpu(integer $Cpu) 设置<p>CPU核数。单位：C。</p>
 * @method integer getMemory() 获取<p>内存大小，单位：GB。</p>
 * @method void setMemory(integer $Memory) 设置<p>内存大小，单位：GB。</p>
 * @method integer getVolume() 获取<p>硬盘大小，单位：GB。</p>
 * @method void setVolume(integer $Volume) 设置<p>硬盘大小，单位：GB。</p>
 */
class ModifyShardSpecInfo extends AbstractModel
{
    /**
     * @var string <p>分片ID</p>
     */
    public $ReplicaSetId;

    /**
     * @var integer <p>CPU核数。单位：C。</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存大小，单位：GB。</p>
     */
    public $Memory;

    /**
     * @var integer <p>硬盘大小，单位：GB。</p>
     */
    public $Volume;

    /**
     * @param string $ReplicaSetId <p>分片ID</p>
     * @param integer $Cpu <p>CPU核数。单位：C。</p>
     * @param integer $Memory <p>内存大小，单位：GB。</p>
     * @param integer $Volume <p>硬盘大小，单位：GB。</p>
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
        if (array_key_exists("ReplicaSetId",$param) and $param["ReplicaSetId"] !== null) {
            $this->ReplicaSetId = $param["ReplicaSetId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}

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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务资源硬件配置的修改参数。
 *
 * @method float getCPUNum() 获取<p>推理服务单实例分配的 CPU 核数，当前仅支持整数值。</p><p>若不填充，则不修改。</p>
 * @method void setCPUNum(float $CPUNum) 设置<p>推理服务单实例分配的 CPU 核数，当前仅支持整数值。</p><p>若不填充，则不修改。</p>
 * @method integer getMemSize() 获取<p>推理服务单实例分配的内存大小。</p><p>单位：MB</p><p>若不填充，则不修改；若填写，则必须为 <code>1024</code> 的整数倍。</p>
 * @method void setMemSize(integer $MemSize) 设置<p>推理服务单实例分配的内存大小。</p><p>单位：MB</p><p>若不填充，则不修改；若填写，则必须为 <code>1024</code> 的整数倍。</p>
 * @method integer getDiskSize() 获取<p>推理服务单实例分配的临时磁盘大小。</p><p>单位：MB</p><p>若不填充，则不修改；若填充，则必须为 <code>1024</code> 的整数倍。</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>推理服务单实例分配的临时磁盘大小。</p><p>单位：MB</p><p>若不填充，则不修改；若填充，则必须为 <code>1024</code> 的整数倍。</p>
 */
class InferenceHardwareConfigForModify extends AbstractModel
{
    /**
     * @var float <p>推理服务单实例分配的 CPU 核数，当前仅支持整数值。</p><p>若不填充，则不修改。</p>
     */
    public $CPUNum;

    /**
     * @var integer <p>推理服务单实例分配的内存大小。</p><p>单位：MB</p><p>若不填充，则不修改；若填写，则必须为 <code>1024</code> 的整数倍。</p>
     */
    public $MemSize;

    /**
     * @var integer <p>推理服务单实例分配的临时磁盘大小。</p><p>单位：MB</p><p>若不填充，则不修改；若填充，则必须为 <code>1024</code> 的整数倍。</p>
     */
    public $DiskSize;

    /**
     * @param float $CPUNum <p>推理服务单实例分配的 CPU 核数，当前仅支持整数值。</p><p>若不填充，则不修改。</p>
     * @param integer $MemSize <p>推理服务单实例分配的内存大小。</p><p>单位：MB</p><p>若不填充，则不修改；若填写，则必须为 <code>1024</code> 的整数倍。</p>
     * @param integer $DiskSize <p>推理服务单实例分配的临时磁盘大小。</p><p>单位：MB</p><p>若不填充，则不修改；若填充，则必须为 <code>1024</code> 的整数倍。</p>
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
        if (array_key_exists("CPUNum",$param) and $param["CPUNum"] !== null) {
            $this->CPUNum = $param["CPUNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}

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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述资源信息
 *
 * @method integer getCpu() 获取<p>处理器资源, 单位为1/1000核</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置<p>处理器资源, 单位为1/1000核</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取<p>内存资源, 单位为1M</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置<p>内存资源, 单位为1M</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpu() 获取<p>Gpu卡个数资源, 单位为0.01单位的GpuType.<br>Gpu=100表示使用了“一张”gpu卡, 但此处的“一张”卡有可能是虚拟化后的1/4卡, 也有可能是整张卡. 取决于实例的机型<br>例1 实例的机型带有1张虚拟gpu卡, 每张虚拟gpu卡对应1/4张实际T4卡, 则此时 GpuType=T4, Gpu=100, RealGpu=25.<br>例2 实例的机型带有4张gpu整卡, 每张卡对应1张实际T4卡, 则 此时 GpuType=T4, Gpu=400, RealGpu=400.</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpu(integer $Gpu) 设置<p>Gpu卡个数资源, 单位为0.01单位的GpuType.<br>Gpu=100表示使用了“一张”gpu卡, 但此处的“一张”卡有可能是虚拟化后的1/4卡, 也有可能是整张卡. 取决于实例的机型<br>例1 实例的机型带有1张虚拟gpu卡, 每张虚拟gpu卡对应1/4张实际T4卡, 则此时 GpuType=T4, Gpu=100, RealGpu=25.<br>例2 实例的机型带有4张gpu整卡, 每张卡对应1张实际T4卡, 则 此时 GpuType=T4, Gpu=400, RealGpu=400.</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGpuType() 获取<p>Gpu卡型号 T4或者V100。仅展示当前 GPU 卡型号，若存在多类型同时使用，则参考 RealGpuDetailSet 的值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuType(string $GpuType) 设置<p>Gpu卡型号 T4或者V100。仅展示当前 GPU 卡型号，若存在多类型同时使用，则参考 RealGpuDetailSet 的值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRealGpu() 获取<p>创建或更新时无需填写，仅展示需要关注<br>后付费非整卡实例对应的实际的Gpu卡资源, 表示gpu资源对应实际的gpu卡个数.<br>RealGpu=100表示实际使用了一张gpu卡, 对应实际的实例机型, 有可能代表带有1/4卡的实例4个, 或者带有1/2卡的实例2个, 或者带有1卡的实力1个.</p>
 * @method void setRealGpu(integer $RealGpu) 设置<p>创建或更新时无需填写，仅展示需要关注<br>后付费非整卡实例对应的实际的Gpu卡资源, 表示gpu资源对应实际的gpu卡个数.<br>RealGpu=100表示实际使用了一张gpu卡, 对应实际的实例机型, 有可能代表带有1/4卡的实例4个, 或者带有1/2卡的实例2个, 或者带有1卡的实力1个.</p>
 * @method array getRealGpuDetailSet() 获取<p>创建或更新时无需填写，仅展示需要关注。详细的GPU使用信息。</p>
 * @method void setRealGpuDetailSet(array $RealGpuDetailSet) 设置<p>创建或更新时无需填写，仅展示需要关注。详细的GPU使用信息。</p>
 * @method boolean getEnableRDMA() 获取<p>是否开启rdma</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRDMA(boolean $EnableRDMA) 设置<p>是否开启rdma</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRdmaNumber() 获取<p>rdma number</p>
 * @method void setRdmaNumber(integer $RdmaNumber) 设置<p>rdma number</p>
 * @method integer getRootDisk() 获取<p>root disk size(GB)</p>
 * @method void setRootDisk(integer $RootDisk) 设置<p>root disk size(GB)</p>
 * @method integer getDataDisk() 获取<p>data disk size(GB)</p>
 * @method void setDataDisk(integer $DataDisk) 设置<p>data disk size(GB)</p>
 * @method integer getRdma() 获取<p>rdma</p><p>取值范围：[0, 99]</p>
 * @method void setRdma(integer $Rdma) 设置<p>rdma</p><p>取值范围：[0, 99]</p>
 */
class ResourceInfo extends AbstractModel
{
    /**
     * @var integer <p>处理器资源, 单位为1/1000核</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer <p>内存资源, 单位为1M</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var integer <p>Gpu卡个数资源, 单位为0.01单位的GpuType.<br>Gpu=100表示使用了“一张”gpu卡, 但此处的“一张”卡有可能是虚拟化后的1/4卡, 也有可能是整张卡. 取决于实例的机型<br>例1 实例的机型带有1张虚拟gpu卡, 每张虚拟gpu卡对应1/4张实际T4卡, 则此时 GpuType=T4, Gpu=100, RealGpu=25.<br>例2 实例的机型带有4张gpu整卡, 每张卡对应1张实际T4卡, 则 此时 GpuType=T4, Gpu=400, RealGpu=400.</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gpu;

    /**
     * @var string <p>Gpu卡型号 T4或者V100。仅展示当前 GPU 卡型号，若存在多类型同时使用，则参考 RealGpuDetailSet 的值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuType;

    /**
     * @var integer <p>创建或更新时无需填写，仅展示需要关注<br>后付费非整卡实例对应的实际的Gpu卡资源, 表示gpu资源对应实际的gpu卡个数.<br>RealGpu=100表示实际使用了一张gpu卡, 对应实际的实例机型, 有可能代表带有1/4卡的实例4个, 或者带有1/2卡的实例2个, 或者带有1卡的实力1个.</p>
     */
    public $RealGpu;

    /**
     * @var array <p>创建或更新时无需填写，仅展示需要关注。详细的GPU使用信息。</p>
     */
    public $RealGpuDetailSet;

    /**
     * @var boolean <p>是否开启rdma</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRDMA;

    /**
     * @var integer <p>rdma number</p>
     */
    public $RdmaNumber;

    /**
     * @var integer <p>root disk size(GB)</p>
     */
    public $RootDisk;

    /**
     * @var integer <p>data disk size(GB)</p>
     */
    public $DataDisk;

    /**
     * @var integer <p>rdma</p><p>取值范围：[0, 99]</p>
     */
    public $Rdma;

    /**
     * @param integer $Cpu <p>处理器资源, 单位为1/1000核</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory <p>内存资源, 单位为1M</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Gpu <p>Gpu卡个数资源, 单位为0.01单位的GpuType.<br>Gpu=100表示使用了“一张”gpu卡, 但此处的“一张”卡有可能是虚拟化后的1/4卡, 也有可能是整张卡. 取决于实例的机型<br>例1 实例的机型带有1张虚拟gpu卡, 每张虚拟gpu卡对应1/4张实际T4卡, 则此时 GpuType=T4, Gpu=100, RealGpu=25.<br>例2 实例的机型带有4张gpu整卡, 每张卡对应1张实际T4卡, 则 此时 GpuType=T4, Gpu=400, RealGpu=400.</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GpuType <p>Gpu卡型号 T4或者V100。仅展示当前 GPU 卡型号，若存在多类型同时使用，则参考 RealGpuDetailSet 的值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RealGpu <p>创建或更新时无需填写，仅展示需要关注<br>后付费非整卡实例对应的实际的Gpu卡资源, 表示gpu资源对应实际的gpu卡个数.<br>RealGpu=100表示实际使用了一张gpu卡, 对应实际的实例机型, 有可能代表带有1/4卡的实例4个, 或者带有1/2卡的实例2个, 或者带有1卡的实力1个.</p>
     * @param array $RealGpuDetailSet <p>创建或更新时无需填写，仅展示需要关注。详细的GPU使用信息。</p>
     * @param boolean $EnableRDMA <p>是否开启rdma</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RdmaNumber <p>rdma number</p>
     * @param integer $RootDisk <p>root disk size(GB)</p>
     * @param integer $DataDisk <p>data disk size(GB)</p>
     * @param integer $Rdma <p>rdma</p><p>取值范围：[0, 99]</p>
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

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("RealGpu",$param) and $param["RealGpu"] !== null) {
            $this->RealGpu = $param["RealGpu"];
        }

        if (array_key_exists("RealGpuDetailSet",$param) and $param["RealGpuDetailSet"] !== null) {
            $this->RealGpuDetailSet = [];
            foreach ($param["RealGpuDetailSet"] as $key => $value){
                $obj = new GpuDetail();
                $obj->deserialize($value);
                array_push($this->RealGpuDetailSet, $obj);
            }
        }

        if (array_key_exists("EnableRDMA",$param) and $param["EnableRDMA"] !== null) {
            $this->EnableRDMA = $param["EnableRDMA"];
        }

        if (array_key_exists("RdmaNumber",$param) and $param["RdmaNumber"] !== null) {
            $this->RdmaNumber = $param["RdmaNumber"];
        }

        if (array_key_exists("RootDisk",$param) and $param["RootDisk"] !== null) {
            $this->RootDisk = $param["RootDisk"];
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = $param["DataDisk"];
        }

        if (array_key_exists("Rdma",$param) and $param["Rdma"] !== null) {
            $this->Rdma = $param["Rdma"];
        }
    }
}

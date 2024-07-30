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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源组相关配置
 *
 * @method string getWorkloadGroupName() 获取资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkloadGroupName(string $WorkloadGroupName) 设置资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuShare() 获取CPU权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuShare(integer $CpuShare) 设置CPU权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemoryLimit() 获取内存限制，所有资源组的内存限制值之和应该小于等于100
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemoryLimit(integer $MemoryLimit) 设置内存限制，所有资源组的内存限制值之和应该小于等于100
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableMemoryOverCommit() 获取是否允许超配分配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableMemoryOverCommit(boolean $EnableMemoryOverCommit) 设置是否允许超配分配
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuHardLimit() 获取cpu硬限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuHardLimit(string $CpuHardLimit) 设置cpu硬限制
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkloadGroupConfig extends AbstractModel
{
    /**
     * @var string 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkloadGroupName;

    /**
     * @var integer CPU权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuShare;

    /**
     * @var integer 内存限制，所有资源组的内存限制值之和应该小于等于100
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemoryLimit;

    /**
     * @var boolean 是否允许超配分配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableMemoryOverCommit;

    /**
     * @var string cpu硬限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuHardLimit;

    /**
     * @param string $WorkloadGroupName 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuShare CPU权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemoryLimit 内存限制，所有资源组的内存限制值之和应该小于等于100
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableMemoryOverCommit 是否允许超配分配
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuHardLimit cpu硬限制
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("WorkloadGroupName",$param) and $param["WorkloadGroupName"] !== null) {
            $this->WorkloadGroupName = $param["WorkloadGroupName"];
        }

        if (array_key_exists("CpuShare",$param) and $param["CpuShare"] !== null) {
            $this->CpuShare = $param["CpuShare"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("EnableMemoryOverCommit",$param) and $param["EnableMemoryOverCommit"] !== null) {
            $this->EnableMemoryOverCommit = $param["EnableMemoryOverCommit"];
        }

        if (array_key_exists("CpuHardLimit",$param) and $param["CpuHardLimit"] !== null) {
            $this->CpuHardLimit = $param["CpuHardLimit"];
        }
    }
}

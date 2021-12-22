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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态硬盘扩容配置
 *
 * @method integer getEnable() 获取动态硬盘扩容配置开关（0: 关闭，1: 开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置动态硬盘扩容配置开关（0: 关闭，1: 开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStepForwardPercentage() 获取每次磁盘动态扩容大小百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepForwardPercentage(integer $StepForwardPercentage) 设置每次磁盘动态扩容大小百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskQuotaPercentage() 获取磁盘配额百分比触发条件，即消息达到此值触发硬盘自动扩容事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskQuotaPercentage(integer $DiskQuotaPercentage) 设置磁盘配额百分比触发条件，即消息达到此值触发硬盘自动扩容事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDiskSpace() 获取最大扩容硬盘大小，以 GB 为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDiskSpace(integer $MaxDiskSpace) 设置最大扩容硬盘大小，以 GB 为单位
注意：此字段可能返回 null，表示取不到有效值。
 */
class DynamicDiskConfig extends AbstractModel
{
    /**
     * @var integer 动态硬盘扩容配置开关（0: 关闭，1: 开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer 每次磁盘动态扩容大小百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepForwardPercentage;

    /**
     * @var integer 磁盘配额百分比触发条件，即消息达到此值触发硬盘自动扩容事件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskQuotaPercentage;

    /**
     * @var integer 最大扩容硬盘大小，以 GB 为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDiskSpace;

    /**
     * @param integer $Enable 动态硬盘扩容配置开关（0: 关闭，1: 开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StepForwardPercentage 每次磁盘动态扩容大小百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskQuotaPercentage 磁盘配额百分比触发条件，即消息达到此值触发硬盘自动扩容事件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDiskSpace 最大扩容硬盘大小，以 GB 为单位
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("StepForwardPercentage",$param) and $param["StepForwardPercentage"] !== null) {
            $this->StepForwardPercentage = $param["StepForwardPercentage"];
        }

        if (array_key_exists("DiskQuotaPercentage",$param) and $param["DiskQuotaPercentage"] !== null) {
            $this->DiskQuotaPercentage = $param["DiskQuotaPercentage"];
        }

        if (array_key_exists("MaxDiskSpace",$param) and $param["MaxDiskSpace"] !== null) {
            $this->MaxDiskSpace = $param["MaxDiskSpace"];
        }
    }
}

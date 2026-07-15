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
 * 磁盘大小范围
 *
 * @method integer getMin() 获取最小值
 * @method void setMin(integer $Min) 设置最小值
 * @method integer getSml() 获取小刻度值
 * @method void setSml(integer $Sml) 设置小刻度值
 * @method integer getMed() 获取中刻度值
 * @method void setMed(integer $Med) 设置中刻度值
 * @method integer getMax() 获取最大值
 * @method void setMax(integer $Max) 设置最大值
 * @method integer getDiskCountMin() 获取磁盘块数最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskCountMin(integer $DiskCountMin) 设置磁盘块数最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskCountMax() 获取磁盘块数最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskCountMax(integer $DiskCountMax) 设置磁盘块数最大值
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiskSizeRange extends AbstractModel
{
    /**
     * @var integer 最小值
     */
    public $Min;

    /**
     * @var integer 小刻度值
     */
    public $Sml;

    /**
     * @var integer 中刻度值
     */
    public $Med;

    /**
     * @var integer 最大值
     */
    public $Max;

    /**
     * @var integer 磁盘块数最小值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskCountMin;

    /**
     * @var integer 磁盘块数最大值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskCountMax;

    /**
     * @param integer $Min 最小值
     * @param integer $Sml 小刻度值
     * @param integer $Med 中刻度值
     * @param integer $Max 最大值
     * @param integer $DiskCountMin 磁盘块数最小值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskCountMax 磁盘块数最大值
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
        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Sml",$param) and $param["Sml"] !== null) {
            $this->Sml = $param["Sml"];
        }

        if (array_key_exists("Med",$param) and $param["Med"] !== null) {
            $this->Med = $param["Med"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("DiskCountMin",$param) and $param["DiskCountMin"] !== null) {
            $this->DiskCountMin = $param["DiskCountMin"];
        }

        if (array_key_exists("DiskCountMax",$param) and $param["DiskCountMax"] !== null) {
            $this->DiskCountMax = $param["DiskCountMax"];
        }
    }
}

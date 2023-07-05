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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据排布治理项
 *
 * @method string getRewriteDataEnable() 获取是否启用数据重排布治理项：enable（启动）、disable（不启用，默认）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRewriteDataEnable(string $RewriteDataEnable) 设置是否启用数据重排布治理项：enable（启动）、disable（不启用，默认）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngine() 获取用于运行数据重排布治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngine(string $Engine) 设置用于运行数据重排布治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinInputFiles() 获取重排布任务执行的文件个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinInputFiles(integer $MinInputFiles) 设置重排布任务执行的文件个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetFileSizeBytes() 获取数据重排布写后的数据文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetFileSizeBytes(integer $TargetFileSizeBytes) 设置数据重排布写后的数据文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntervalMin() 获取数据重排布治理运行周期，单位为分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntervalMin(integer $IntervalMin) 设置数据重排布治理运行周期，单位为分钟
注意：此字段可能返回 null，表示取不到有效值。
 */
class DlcRewriteDataInfo extends AbstractModel
{
    /**
     * @var string 是否启用数据重排布治理项：enable（启动）、disable（不启用，默认）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RewriteDataEnable;

    /**
     * @var string 用于运行数据重排布治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Engine;

    /**
     * @var integer 重排布任务执行的文件个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinInputFiles;

    /**
     * @var integer 数据重排布写后的数据文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetFileSizeBytes;

    /**
     * @var integer 数据重排布治理运行周期，单位为分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntervalMin;

    /**
     * @param string $RewriteDataEnable 是否启用数据重排布治理项：enable（启动）、disable（不启用，默认）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Engine 用于运行数据重排布治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinInputFiles 重排布任务执行的文件个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetFileSizeBytes 数据重排布写后的数据文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntervalMin 数据重排布治理运行周期，单位为分钟
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
        if (array_key_exists("RewriteDataEnable",$param) and $param["RewriteDataEnable"] !== null) {
            $this->RewriteDataEnable = $param["RewriteDataEnable"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("MinInputFiles",$param) and $param["MinInputFiles"] !== null) {
            $this->MinInputFiles = $param["MinInputFiles"];
        }

        if (array_key_exists("TargetFileSizeBytes",$param) and $param["TargetFileSizeBytes"] !== null) {
            $this->TargetFileSizeBytes = $param["TargetFileSizeBytes"];
        }

        if (array_key_exists("IntervalMin",$param) and $param["IntervalMin"] !== null) {
            $this->IntervalMin = $param["IntervalMin"];
        }
    }
}

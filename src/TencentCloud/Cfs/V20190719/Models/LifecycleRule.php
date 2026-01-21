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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生命周期管理策略关联的管理规则
 *
 * @method string getStorageType() 获取数据转储后的存储类型。其中：InfrequentAccess：低频介质存储；ColdStorage：冷存储。
 * @method void setStorageType(string $StorageType) 设置数据转储后的存储类型。其中：InfrequentAccess：低频介质存储；ColdStorage：冷存储。
 * @method string getFileType() 获取数据转储文件类型。其中，BIG_FILE：超大文件；STD_FILE：普通文件；SMALL_FILE：小文件；ALL：所有文件。
 * @method void setFileType(string $FileType) 设置数据转储文件类型。其中，BIG_FILE：超大文件；STD_FILE：普通文件；SMALL_FILE：小文件；ALL：所有文件。
 * @method string getAction() 获取数据转储行为。其中，Archive：沉降；Noarchive：不沉降。
 * @method void setAction(string $Action) 设置数据转储行为。其中，Archive：沉降；Noarchive：不沉降。
 * @method string getInterval() 获取数据转储触发时间。由“DEFAULT_ATIME_”与“数字”组成，单位为天。当 Action 为 Noarchive，请保持为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterval(string $Interval) 设置数据转储触发时间。由“DEFAULT_ATIME_”与“数字”组成，单位为天。当 Action 为 Noarchive，请保持为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMaxSize() 获取数据转储文件最大规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMaxSize(string $FileMaxSize) 设置数据转储文件最大规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMinSize() 获取数据转储文件最小规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMinSize(string $FileMinSize) 设置数据转储文件最小规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyType() 获取策略类型
 * @method void setPolicyType(string $PolicyType) 设置策略类型
 * @method integer getExpireThreshold() 获取阈值范围[10-90]
 * @method void setExpireThreshold(integer $ExpireThreshold) 设置阈值范围[10-90]
 * @method integer getTargetThreshold() 获取阈值范围[10-90]
 * @method void setTargetThreshold(integer $TargetThreshold) 设置阈值范围[10-90]
 * @method boolean getIsOverwrite() 获取当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。

ture：覆盖

false：不覆盖（同时也不会释放热存数据）

为空时，默认为false
 * @method void setIsOverwrite(boolean $IsOverwrite) 设置当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。

ture：覆盖

false：不覆盖（同时也不会释放热存数据）

为空时，默认为false
 */
class LifecycleRule extends AbstractModel
{
    /**
     * @var string 数据转储后的存储类型。其中：InfrequentAccess：低频介质存储；ColdStorage：冷存储。
     */
    public $StorageType;

    /**
     * @var string 数据转储文件类型。其中，BIG_FILE：超大文件；STD_FILE：普通文件；SMALL_FILE：小文件；ALL：所有文件。
     */
    public $FileType;

    /**
     * @var string 数据转储行为。其中，Archive：沉降；Noarchive：不沉降。
     */
    public $Action;

    /**
     * @var string 数据转储触发时间。由“DEFAULT_ATIME_”与“数字”组成，单位为天。当 Action 为 Noarchive，请保持为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Interval;

    /**
     * @var string 数据转储文件最大规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMaxSize;

    /**
     * @var string 数据转储文件最小规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMinSize;

    /**
     * @var string 策略类型
     */
    public $PolicyType;

    /**
     * @var integer 阈值范围[10-90]
     */
    public $ExpireThreshold;

    /**
     * @var integer 阈值范围[10-90]
     */
    public $TargetThreshold;

    /**
     * @var boolean 当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。

ture：覆盖

false：不覆盖（同时也不会释放热存数据）

为空时，默认为false
     */
    public $IsOverwrite;

    /**
     * @param string $StorageType 数据转储后的存储类型。其中：InfrequentAccess：低频介质存储；ColdStorage：冷存储。
     * @param string $FileType 数据转储文件类型。其中，BIG_FILE：超大文件；STD_FILE：普通文件；SMALL_FILE：小文件；ALL：所有文件。
     * @param string $Action 数据转储行为。其中，Archive：沉降；Noarchive：不沉降。
     * @param string $Interval 数据转储触发时间。由“DEFAULT_ATIME_”与“数字”组成，单位为天。当 Action 为 Noarchive，请保持为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMaxSize 数据转储文件最大规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMinSize 数据转储文件最小规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyType 策略类型
     * @param integer $ExpireThreshold 阈值范围[10-90]
     * @param integer $TargetThreshold 阈值范围[10-90]
     * @param boolean $IsOverwrite 当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。

ture：覆盖

false：不覆盖（同时也不会释放热存数据）

为空时，默认为false
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("FileMaxSize",$param) and $param["FileMaxSize"] !== null) {
            $this->FileMaxSize = $param["FileMaxSize"];
        }

        if (array_key_exists("FileMinSize",$param) and $param["FileMinSize"] !== null) {
            $this->FileMinSize = $param["FileMinSize"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("ExpireThreshold",$param) and $param["ExpireThreshold"] !== null) {
            $this->ExpireThreshold = $param["ExpireThreshold"];
        }

        if (array_key_exists("TargetThreshold",$param) and $param["TargetThreshold"] !== null) {
            $this->TargetThreshold = $param["TargetThreshold"];
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }
    }
}

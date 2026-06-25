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
 * @method string getStorageType() 获取<p>数据转储后的存储类型。其中：InfrequentAccess：低频介质存储；ColdStorage：冷存储。</p>
 * @method void setStorageType(string $StorageType) 设置<p>数据转储后的存储类型。其中：InfrequentAccess：低频介质存储；ColdStorage：冷存储。</p>
 * @method string getFileType() 获取<p>数据转储文件类型。其中，BIG_FILE：超大文件；STD_FILE：普通文件；SMALL_FILE：小文件；ALL：所有文件。</p>
 * @method void setFileType(string $FileType) 设置<p>数据转储文件类型。其中，BIG_FILE：超大文件；STD_FILE：普通文件；SMALL_FILE：小文件；ALL：所有文件。</p>
 * @method string getAction() 获取<p>数据转储行为。其中，Archive：沉降；Noarchive：不沉降。</p>
 * @method void setAction(string $Action) 设置<p>数据转储行为。其中，Archive：沉降；Noarchive：不沉降。</p>
 * @method string getInterval() 获取<p>数据转储触发时间。由“DEFAULT_ATIME_”与“数字”组成，单位为天。当 Action 为 Noarchive，请保持为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterval(string $Interval) 设置<p>数据转储触发时间。由“DEFAULT_ATIME_”与“数字”组成，单位为天。当 Action 为 Noarchive，请保持为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMaxSize() 获取<p>数据转储文件最大规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMaxSize(string $FileMaxSize) 设置<p>数据转储文件最大规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMinSize() 获取<p>数据转储文件最小规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMinSize(string $FileMinSize) 设置<p>数据转储文件最小规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyType() 获取<p>策略类型</p>
 * @method void setPolicyType(string $PolicyType) 设置<p>策略类型</p>
 * @method integer getExpireThreshold() 获取<p>阈值范围[10-90]</p>
 * @method void setExpireThreshold(integer $ExpireThreshold) 设置<p>阈值范围[10-90]</p>
 * @method integer getTargetThreshold() 获取<p>阈值范围[10-90]</p>
 * @method void setTargetThreshold(integer $TargetThreshold) 设置<p>阈值范围[10-90]</p>
 * @method boolean getIsOverwrite() 获取<p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。</p><p>ture：覆盖</p><p>false：不覆盖（同时也不会释放热存数据）</p><p>为空时，默认为false</p>
 * @method void setIsOverwrite(boolean $IsOverwrite) 设置<p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。</p><p>ture：覆盖</p><p>false：不覆盖（同时也不会释放热存数据）</p><p>为空时，默认为false</p>
 * @method boolean getIsCreateRealTimeSync() 获取<p>新建文件是否近实时同步至 S3。true：近实时同步（30 秒内）/ false：基于策略配置时间同步。默认 false。仅当 StorageType=ExternalStorage 时生效</p>
 * @method void setIsCreateRealTimeSync(boolean $IsCreateRealTimeSync) 设置<p>新建文件是否近实时同步至 S3。true：近实时同步（30 秒内）/ false：基于策略配置时间同步。默认 false。仅当 StorageType=ExternalStorage 时生效</p>
 * @method boolean getIsModifyRealTimeSync() 获取<p>修改文件是否近实时同步至 S3。true：近实时同步（30 秒内）/ false：基于策略配置时间同步。默认 false。仅当 StorageType=ExternalStorage 时生效。与 IsOverwrite 独立</p>
 * @method void setIsModifyRealTimeSync(boolean $IsModifyRealTimeSync) 设置<p>修改文件是否近实时同步至 S3。true：近实时同步（30 秒内）/ false：基于策略配置时间同步。默认 false。仅当 StorageType=ExternalStorage 时生效。与 IsOverwrite 独立</p>
 * @method boolean getIsSyncDelete() 获取<p>删除文件是否同步至 S3。true：同步删除（30 秒内）/ false：不同步删除。默认 false。为 true 时要求目标 COS Bucket 已开启多版本。仅当 StorageType=ExternalStorage 时生效</p>
 * @method void setIsSyncDelete(boolean $IsSyncDelete) 设置<p>删除文件是否同步至 S3。true：同步删除（30 秒内）/ false：不同步删除。默认 false。为 true 时要求目标 COS Bucket 已开启多版本。仅当 StorageType=ExternalStorage 时生效</p>
 */
class LifecycleRule extends AbstractModel
{
    /**
     * @var string <p>数据转储后的存储类型。其中：InfrequentAccess：低频介质存储；ColdStorage：冷存储。</p>
     */
    public $StorageType;

    /**
     * @var string <p>数据转储文件类型。其中，BIG_FILE：超大文件；STD_FILE：普通文件；SMALL_FILE：小文件；ALL：所有文件。</p>
     */
    public $FileType;

    /**
     * @var string <p>数据转储行为。其中，Archive：沉降；Noarchive：不沉降。</p>
     */
    public $Action;

    /**
     * @var string <p>数据转储触发时间。由“DEFAULT_ATIME_”与“数字”组成，单位为天。当 Action 为 Noarchive，请保持为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Interval;

    /**
     * @var string <p>数据转储文件最大规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMaxSize;

    /**
     * @var string <p>数据转储文件最小规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMinSize;

    /**
     * @var string <p>策略类型</p>
     */
    public $PolicyType;

    /**
     * @var integer <p>阈值范围[10-90]</p>
     */
    public $ExpireThreshold;

    /**
     * @var integer <p>阈值范围[10-90]</p>
     */
    public $TargetThreshold;

    /**
     * @var boolean <p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。</p><p>ture：覆盖</p><p>false：不覆盖（同时也不会释放热存数据）</p><p>为空时，默认为false</p>
     */
    public $IsOverwrite;

    /**
     * @var boolean <p>新建文件是否近实时同步至 S3。true：近实时同步（30 秒内）/ false：基于策略配置时间同步。默认 false。仅当 StorageType=ExternalStorage 时生效</p>
     */
    public $IsCreateRealTimeSync;

    /**
     * @var boolean <p>修改文件是否近实时同步至 S3。true：近实时同步（30 秒内）/ false：基于策略配置时间同步。默认 false。仅当 StorageType=ExternalStorage 时生效。与 IsOverwrite 独立</p>
     */
    public $IsModifyRealTimeSync;

    /**
     * @var boolean <p>删除文件是否同步至 S3。true：同步删除（30 秒内）/ false：不同步删除。默认 false。为 true 时要求目标 COS Bucket 已开启多版本。仅当 StorageType=ExternalStorage 时生效</p>
     */
    public $IsSyncDelete;

    /**
     * @param string $StorageType <p>数据转储后的存储类型。其中：InfrequentAccess：低频介质存储；ColdStorage：冷存储。</p>
     * @param string $FileType <p>数据转储文件类型。其中，BIG_FILE：超大文件；STD_FILE：普通文件；SMALL_FILE：小文件；ALL：所有文件。</p>
     * @param string $Action <p>数据转储行为。其中，Archive：沉降；Noarchive：不沉降。</p>
     * @param string $Interval <p>数据转储触发时间。由“DEFAULT_ATIME_”与“数字”组成，单位为天。当 Action 为 Noarchive，请保持为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMaxSize <p>数据转储文件最大规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMinSize <p>数据转储文件最小规格。其数值需使用“数字+单位”格式进行表示，单位支持K（KiB）、M（MiB）、G（GiB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyType <p>策略类型</p>
     * @param integer $ExpireThreshold <p>阈值范围[10-90]</p>
     * @param integer $TargetThreshold <p>阈值范围[10-90]</p>
     * @param boolean $IsOverwrite <p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。</p><p>ture：覆盖</p><p>false：不覆盖（同时也不会释放热存数据）</p><p>为空时，默认为false</p>
     * @param boolean $IsCreateRealTimeSync <p>新建文件是否近实时同步至 S3。true：近实时同步（30 秒内）/ false：基于策略配置时间同步。默认 false。仅当 StorageType=ExternalStorage 时生效</p>
     * @param boolean $IsModifyRealTimeSync <p>修改文件是否近实时同步至 S3。true：近实时同步（30 秒内）/ false：基于策略配置时间同步。默认 false。仅当 StorageType=ExternalStorage 时生效。与 IsOverwrite 独立</p>
     * @param boolean $IsSyncDelete <p>删除文件是否同步至 S3。true：同步删除（30 秒内）/ false：不同步删除。默认 false。为 true 时要求目标 COS Bucket 已开启多版本。仅当 StorageType=ExternalStorage 时生效</p>
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

        if (array_key_exists("IsCreateRealTimeSync",$param) and $param["IsCreateRealTimeSync"] !== null) {
            $this->IsCreateRealTimeSync = $param["IsCreateRealTimeSync"];
        }

        if (array_key_exists("IsModifyRealTimeSync",$param) and $param["IsModifyRealTimeSync"] !== null) {
            $this->IsModifyRealTimeSync = $param["IsModifyRealTimeSync"];
        }

        if (array_key_exists("IsSyncDelete",$param) and $param["IsSyncDelete"] !== null) {
            $this->IsSyncDelete = $param["IsSyncDelete"];
        }
    }
}

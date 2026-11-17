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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份存储策略。
 *
 * @method string getStorageType() 获取存储类型。目前仅支持 "system" - DBS 内置存储。默认值为 "system"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置存储类型。目前仅支持 "system" - DBS 内置存储。默认值为 "system"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryption() 获取加密方式。可能的取值为：
"UnEncrypted" - 非加密存储;
"SSE-COS" - 内置加密存储;
当该参数用作入参时，默认值为 "UnEncrypted"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryption(string $Encryption) 设置加密方式。可能的取值为：
"UnEncrypted" - 非加密存储;
"SSE-COS" - 内置加密存储;
当该参数用作入参时，默认值为 "UnEncrypted"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBackupRetentionPeriod() 获取日志保留时间，单位为天。取值范围为[7, 3650]，默认值为 30。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupRetentionPeriod(integer $BackupRetentionPeriod) 设置日志保留时间，单位为天。取值范围为[7, 3650]，默认值为 30。
注意：此字段可能返回 null，表示取不到有效值。
 * @method StorageStrategySingle getFullStorageStrategy() 获取全量备份存储策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullStorageStrategy(StorageStrategySingle $FullStorageStrategy) 设置全量备份存储策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method StorageStrategySingle getIncStorageStrategy() 获取增量备份存储策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncStorageStrategy(StorageStrategySingle $IncStorageStrategy) 设置增量备份存储策略。
注意：此字段可能返回 null，表示取不到有效值。
 */
class StorageStrategyItem extends AbstractModel
{
    /**
     * @var string 存储类型。目前仅支持 "system" - DBS 内置存储。默认值为 "system"。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var string 加密方式。可能的取值为：
"UnEncrypted" - 非加密存储;
"SSE-COS" - 内置加密存储;
当该参数用作入参时，默认值为 "UnEncrypted"。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encryption;

    /**
     * @var integer 日志保留时间，单位为天。取值范围为[7, 3650]，默认值为 30。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupRetentionPeriod;

    /**
     * @var StorageStrategySingle 全量备份存储策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullStorageStrategy;

    /**
     * @var StorageStrategySingle 增量备份存储策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncStorageStrategy;

    /**
     * @param string $StorageType 存储类型。目前仅支持 "system" - DBS 内置存储。默认值为 "system"。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Encryption 加密方式。可能的取值为：
"UnEncrypted" - 非加密存储;
"SSE-COS" - 内置加密存储;
当该参数用作入参时，默认值为 "UnEncrypted"。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BackupRetentionPeriod 日志保留时间，单位为天。取值范围为[7, 3650]，默认值为 30。
注意：此字段可能返回 null，表示取不到有效值。
     * @param StorageStrategySingle $FullStorageStrategy 全量备份存储策略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param StorageStrategySingle $IncStorageStrategy 增量备份存储策略。
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("BackupRetentionPeriod",$param) and $param["BackupRetentionPeriod"] !== null) {
            $this->BackupRetentionPeriod = $param["BackupRetentionPeriod"];
        }

        if (array_key_exists("FullStorageStrategy",$param) and $param["FullStorageStrategy"] !== null) {
            $this->FullStorageStrategy = new StorageStrategySingle();
            $this->FullStorageStrategy->deserialize($param["FullStorageStrategy"]);
        }

        if (array_key_exists("IncStorageStrategy",$param) and $param["IncStorageStrategy"] !== null) {
            $this->IncStorageStrategy = new StorageStrategySingle();
            $this->IncStorageStrategy->deserialize($param["IncStorageStrategy"]);
        }
    }
}

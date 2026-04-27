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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 稀疏备份配置
 *
 * @method string getSparseBackupSwitch() 获取稀疏备份开关：ON/OFF
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparseBackupSwitch(string $SparseBackupSwitch) 设置稀疏备份开关：ON/OFF
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSparseBackupConfigInfos() 获取稀疏备份策略列表（1-3条）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparseBackupConfigInfos(array $SparseBackupConfigInfos) 设置稀疏备份策略列表（1-3条）
注意：此字段可能返回 null，表示取不到有效值。
 */
class SparseBackupConfigRsp extends AbstractModel
{
    /**
     * @var string 稀疏备份开关：ON/OFF
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparseBackupSwitch;

    /**
     * @var array 稀疏备份策略列表（1-3条）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparseBackupConfigInfos;

    /**
     * @param string $SparseBackupSwitch 稀疏备份开关：ON/OFF
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SparseBackupConfigInfos 稀疏备份策略列表（1-3条）
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
        if (array_key_exists("SparseBackupSwitch",$param) and $param["SparseBackupSwitch"] !== null) {
            $this->SparseBackupSwitch = $param["SparseBackupSwitch"];
        }

        if (array_key_exists("SparseBackupConfigInfos",$param) and $param["SparseBackupConfigInfos"] !== null) {
            $this->SparseBackupConfigInfos = [];
            foreach ($param["SparseBackupConfigInfos"] as $key => $value){
                $obj = new SparseBackupConfigInfo();
                $obj->deserialize($value);
                array_push($this->SparseBackupConfigInfos, $obj);
            }
        }
    }
}

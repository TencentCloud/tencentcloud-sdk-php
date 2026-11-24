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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 触发本次运行的一条表更新记录（某张表在某个时刻、某个版本的一次更新）
 *
 * @method string getTableQualifier() 获取<p>表全名</p><p>参数格式：格式 catalog.schema.table</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableQualifier(string $TableQualifier) 设置<p>表全名</p><p>参数格式：格式 catalog.schema.table</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>表更新时间</p><p>参数格式：时间戳格式，如：1792951200000</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>表更新时间</p><p>参数格式：时间戳格式，如：1792951200000</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateVersion() 获取<p>表更新版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateVersion(string $UpdateVersion) 设置<p>表更新版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetGuid() 获取<p>数据资产ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetGuid(string $AssetGuid) 设置<p>数据资产ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerTableUpdateRecord extends AbstractModel
{
    /**
     * @var string <p>表全名</p><p>参数格式：格式 catalog.schema.table</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableQualifier;

    /**
     * @var string <p>表更新时间</p><p>参数格式：时间戳格式，如：1792951200000</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>表更新版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateVersion;

    /**
     * @var string <p>数据资产ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetGuid;

    /**
     * @param string $TableQualifier <p>表全名</p><p>参数格式：格式 catalog.schema.table</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>表更新时间</p><p>参数格式：时间戳格式，如：1792951200000</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateVersion <p>表更新版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetGuid <p>数据资产ID</p>
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
        if (array_key_exists("TableQualifier",$param) and $param["TableQualifier"] !== null) {
            $this->TableQualifier = $param["TableQualifier"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UpdateVersion",$param) and $param["UpdateVersion"] !== null) {
            $this->UpdateVersion = $param["UpdateVersion"];
        }

        if (array_key_exists("AssetGuid",$param) and $param["AssetGuid"] !== null) {
            $this->AssetGuid = $param["AssetGuid"];
        }
    }
}

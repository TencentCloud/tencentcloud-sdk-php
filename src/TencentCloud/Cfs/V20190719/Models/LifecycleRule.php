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
 * @method string getStorageType() 获取数据转储后的存储类型
 * @method void setStorageType(string $StorageType) 设置数据转储后的存储类型
 * @method string getFileType() 获取数据转储文件类型
 * @method void setFileType(string $FileType) 设置数据转储文件类型
 * @method string getAction() 获取数据转储行为
 * @method void setAction(string $Action) 设置数据转储行为
 * @method string getInterval() 获取数据转储触发时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterval(string $Interval) 设置数据转储触发时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMaxSize() 获取数据转储文件最大规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMaxSize(string $FileMaxSize) 设置数据转储文件最大规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMinSize() 获取数据转储文件最小规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMinSize(string $FileMinSize) 设置数据转储文件最小规格
注意：此字段可能返回 null，表示取不到有效值。
 */
class LifecycleRule extends AbstractModel
{
    /**
     * @var string 数据转储后的存储类型
     */
    public $StorageType;

    /**
     * @var string 数据转储文件类型
     */
    public $FileType;

    /**
     * @var string 数据转储行为
     */
    public $Action;

    /**
     * @var string 数据转储触发时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Interval;

    /**
     * @var string 数据转储文件最大规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMaxSize;

    /**
     * @var string 数据转储文件最小规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMinSize;

    /**
     * @param string $StorageType 数据转储后的存储类型
     * @param string $FileType 数据转储文件类型
     * @param string $Action 数据转储行为
     * @param string $Interval 数据转储触发时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMaxSize 数据转储文件最大规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMinSize 数据转储文件最小规格
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
    }
}

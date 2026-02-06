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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可恢复时间区间
 *
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMajorVersion() 获取大版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMajorVersion(string $MajorVersion) 设置大版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMinorVersion() 获取小版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinorVersion(string $MinorVersion) 设置小版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ArchiveLogInterval extends AbstractModel
{
    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 大版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MajorVersion;

    /**
     * @var string 小版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinorVersion;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MajorVersion 大版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MinorVersion 小版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间
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
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MajorVersion",$param) and $param["MajorVersion"] !== null) {
            $this->MajorVersion = $param["MajorVersion"];
        }

        if (array_key_exists("MinorVersion",$param) and $param["MinorVersion"] !== null) {
            $this->MinorVersion = $param["MinorVersion"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}

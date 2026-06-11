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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 轮班人员组信息
 *
 * @method array getCoverStaffIDs() 获取轮班人员id组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverStaffIDs(array $CoverStaffIDs) 设置轮班人员id组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCoverStartTime() 获取轮班开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverStartTime(integer $CoverStartTime) 设置轮班开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCoverEndTime() 获取轮班结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverEndTime(integer $CoverEndTime) 设置轮班结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class CoverStaffInfo extends AbstractModel
{
    /**
     * @var array 轮班人员id组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverStaffIDs;

    /**
     * @var integer 轮班开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverStartTime;

    /**
     * @var integer 轮班结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverEndTime;

    /**
     * @param array $CoverStaffIDs 轮班人员id组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CoverStartTime 轮班开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CoverEndTime 轮班结束时间
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
        if (array_key_exists("CoverStaffIDs",$param) and $param["CoverStaffIDs"] !== null) {
            $this->CoverStaffIDs = $param["CoverStaffIDs"];
        }

        if (array_key_exists("CoverStartTime",$param) and $param["CoverStartTime"] !== null) {
            $this->CoverStartTime = $param["CoverStartTime"];
        }

        if (array_key_exists("CoverEndTime",$param) and $param["CoverEndTime"] !== null) {
            $this->CoverEndTime = $param["CoverEndTime"];
        }
    }
}

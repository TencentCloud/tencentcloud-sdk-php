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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户行为分析 用户概览 求和元素
 *
 * @method string getMemberID() 获取成员id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberID(string $MemberID) 设置成员id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogType() 获取日志类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogType(string $LogType) 设置日志类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserID() 获取用户ID依据字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserID(string $UserID) 设置用户ID依据字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class UebaUserSummaryElement extends AbstractModel
{
    /**
     * @var string 成员id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberID;

    /**
     * @var string 日志类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogType;

    /**
     * @var string 用户ID依据字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserID;

    /**
     * @var integer 数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param string $MemberID 成员id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogType 日志类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserID 用户ID依据字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 数量
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
        if (array_key_exists("MemberID",$param) and $param["MemberID"] !== null) {
            $this->MemberID = $param["MemberID"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}

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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 活动详情
 *
 * @method string getUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActivityId() 获取活动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityId(integer $ActivityId) 设置活动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取自定义状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置自定义状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubStatus() 获取自定义子状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubStatus(string $SubStatus) 设置自定义子状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubStatusInt() 获取整型子状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubStatusInt(integer $SubStatusInt) 设置整型子状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDeleted() 获取是否软删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDeleted(boolean $IsDeleted) 设置是否软删除
注意：此字段可能返回 null，表示取不到有效值。
 */
class ActivityRecordItem extends AbstractModel
{
    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var integer 活动id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityId;

    /**
     * @var integer 自定义状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 自定义子状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubStatus;

    /**
     * @var integer 整型子状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubStatusInt;

    /**
     * @var boolean 是否软删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDeleted;

    /**
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActivityId 活动id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 自定义状态码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubStatus 自定义子状态码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubStatusInt 整型子状态码
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDeleted 是否软删除
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("SubStatusInt",$param) and $param["SubStatusInt"] !== null) {
            $this->SubStatusInt = $param["SubStatusInt"];
        }

        if (array_key_exists("IsDeleted",$param) and $param["IsDeleted"] !== null) {
            $this->IsDeleted = $param["IsDeleted"];
        }
    }
}

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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按授权查看的license列表
 *
 * @method integer getCount() 获取该类型的license个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置该类型的license个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取license状态：0:未绑定；1:已绑定；2:已停服；3:已退费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置license状态：0:未绑定；1:已绑定；2:已停服；3:已退费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取到期时间戳：s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置到期时间戳：s
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取服务时长：s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置服务时长：s
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemainDay() 获取剩余天数：天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemainDay(integer $RemainDay) 设置剩余天数：天
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLicenseIds() 获取该类型的licenseId列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseIds(array $LicenseIds) 设置该类型的licenseId列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class License extends AbstractModel
{
    /**
     * @var integer 该类型的license个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var integer license状态：0:未绑定；1:已绑定；2:已停服；3:已退费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 到期时间戳：s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 服务时长：s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 剩余天数：天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemainDay;

    /**
     * @var array 该类型的licenseId列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseIds;

    /**
     * @param integer $Count 该类型的license个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status license状态：0:未绑定；1:已绑定；2:已停服；3:已退费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 到期时间戳：s
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 服务时长：s
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemainDay 剩余天数：天
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LicenseIds 该类型的licenseId列表
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RemainDay",$param) and $param["RemainDay"] !== null) {
            $this->RemainDay = $param["RemainDay"];
        }

        if (array_key_exists("LicenseIds",$param) and $param["LicenseIds"] !== null) {
            $this->LicenseIds = $param["LicenseIds"];
        }
    }
}

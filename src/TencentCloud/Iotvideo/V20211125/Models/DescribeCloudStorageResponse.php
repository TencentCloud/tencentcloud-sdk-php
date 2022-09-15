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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudStorage返回参数结构体
 *
 * @method integer getStatus() 获取云存开启状态，1为开启，0为未开启或已过期
 * @method void setStatus(integer $Status) 设置云存开启状态，1为开启，0为未开启或已过期
 * @method integer getType() 获取云存类型，1为全时云存，2为事件云存
 * @method void setType(integer $Type) 设置云存类型，1为全时云存，2为事件云存
 * @method integer getExpireTime() 获取云存套餐过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置云存套餐过期时间
 * @method integer getShiftDuration() 获取云存回看时长
 * @method void setShiftDuration(integer $ShiftDuration) 设置云存回看时长
 * @method string getUserId() 获取云存用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置云存用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudStorageResponse extends AbstractModel
{
    /**
     * @var integer 云存开启状态，1为开启，0为未开启或已过期
     */
    public $Status;

    /**
     * @var integer 云存类型，1为全时云存，2为事件云存
     */
    public $Type;

    /**
     * @var integer 云存套餐过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 云存回看时长
     */
    public $ShiftDuration;

    /**
     * @var string 云存用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 云存开启状态，1为开启，0为未开启或已过期
     * @param integer $Type 云存类型，1为全时云存，2为事件云存
     * @param integer $ExpireTime 云存套餐过期时间
     * @param integer $ShiftDuration 云存回看时长
     * @param string $UserId 云存用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ShiftDuration",$param) and $param["ShiftDuration"] !== null) {
            $this->ShiftDuration = $param["ShiftDuration"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

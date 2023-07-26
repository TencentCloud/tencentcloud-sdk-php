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
 * 结构体（PackageInfo）记录了设备拥有的有效套餐信息，包括云存开启状态、云存类型、云存回看时长、云存套餐过期时间
 *
 * @method integer getStatus() 获取云存开启状态，0为未开启，2为正在生效，1为已过期
注：这里只返回状态为0的数据
 * @method void setStatus(integer $Status) 设置云存开启状态，0为未开启，2为正在生效，1为已过期
注：这里只返回状态为0的数据
 * @method integer getCSType() 获取云存类型，1为全时云存，2为事件云存
 * @method void setCSType(integer $CSType) 设置云存类型，1为全时云存，2为事件云存
 * @method integer getCSShiftDuration() 获取云存回看时长
 * @method void setCSShiftDuration(integer $CSShiftDuration) 设置云存回看时长
 * @method integer getCSExpiredTime() 获取云存套餐过期时间
 * @method void setCSExpiredTime(integer $CSExpiredTime) 设置云存套餐过期时间
 */
class PackageInfo extends AbstractModel
{
    /**
     * @var integer 云存开启状态，0为未开启，2为正在生效，1为已过期
注：这里只返回状态为0的数据
     */
    public $Status;

    /**
     * @var integer 云存类型，1为全时云存，2为事件云存
     */
    public $CSType;

    /**
     * @var integer 云存回看时长
     */
    public $CSShiftDuration;

    /**
     * @var integer 云存套餐过期时间
     */
    public $CSExpiredTime;

    /**
     * @param integer $Status 云存开启状态，0为未开启，2为正在生效，1为已过期
注：这里只返回状态为0的数据
     * @param integer $CSType 云存类型，1为全时云存，2为事件云存
     * @param integer $CSShiftDuration 云存回看时长
     * @param integer $CSExpiredTime 云存套餐过期时间
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

        if (array_key_exists("CSType",$param) and $param["CSType"] !== null) {
            $this->CSType = $param["CSType"];
        }

        if (array_key_exists("CSShiftDuration",$param) and $param["CSShiftDuration"] !== null) {
            $this->CSShiftDuration = $param["CSShiftDuration"];
        }

        if (array_key_exists("CSExpiredTime",$param) and $param["CSExpiredTime"] !== null) {
            $this->CSExpiredTime = $param["CSExpiredTime"];
        }
    }
}

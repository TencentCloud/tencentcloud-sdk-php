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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudStorageTime请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getDate() 获取云存日期，例如"2020-01-05"
 * @method void setDate(string $Date) 设置云存日期，例如"2020-01-05"
 * @method integer getStartTime() 获取开始时间，unix时间
 * @method void setStartTime(integer $StartTime) 设置开始时间，unix时间
 * @method integer getEndTime() 获取结束时间，unix时间
 * @method void setEndTime(integer $EndTime) 设置结束时间，unix时间
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 */
class DescribeCloudStorageTimeRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 云存日期，例如"2020-01-05"
     */
    public $Date;

    /**
     * @var integer 开始时间，unix时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间，unix时间
     */
    public $EndTime;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $Date 云存日期，例如"2020-01-05"
     * @param integer $StartTime 开始时间，unix时间
     * @param integer $EndTime 结束时间，unix时间
     * @param string $UserId 用户ID
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}

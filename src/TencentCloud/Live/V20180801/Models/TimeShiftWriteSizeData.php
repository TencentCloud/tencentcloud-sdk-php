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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播时移写入量数据。
 *
 * @method string getArea() 获取区域。
 * @method void setArea(string $Area) 设置区域。
 * @method string getTime() 获取时间，格式为：yyyy-mm-ddTHH:MM:SSZ。
 * @method void setTime(string $Time) 设置时间，格式为：yyyy-mm-ddTHH:MM:SSZ。
 * @method float getWriteSize() 获取写入量（单位：字节）
 * @method void setWriteSize(float $WriteSize) 设置写入量（单位：字节）
 * @method string getDomain() 获取域名。
 * @method void setDomain(string $Domain) 设置域名。
 * @method integer getStorageDays() 获取时移天数。
 * @method void setStorageDays(integer $StorageDays) 设置时移天数。
 */
class TimeShiftWriteSizeData extends AbstractModel
{
    /**
     * @var string 区域。
     */
    public $Area;

    /**
     * @var string 时间，格式为：yyyy-mm-ddTHH:MM:SSZ。
     */
    public $Time;

    /**
     * @var float 写入量（单位：字节）
     */
    public $WriteSize;

    /**
     * @var string 域名。
     */
    public $Domain;

    /**
     * @var integer 时移天数。
     */
    public $StorageDays;

    /**
     * @param string $Area 区域。
     * @param string $Time 时间，格式为：yyyy-mm-ddTHH:MM:SSZ。
     * @param float $WriteSize 写入量（单位：字节）
     * @param string $Domain 域名。
     * @param integer $StorageDays 时移天数。
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("WriteSize",$param) and $param["WriteSize"] !== null) {
            $this->WriteSize = $param["WriteSize"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("StorageDays",$param) and $param["StorageDays"] !== null) {
            $this->StorageDays = $param["StorageDays"];
        }
    }
}

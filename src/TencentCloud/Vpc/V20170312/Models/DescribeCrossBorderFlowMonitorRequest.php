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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCrossBorderFlowMonitor请求参数结构体
 *
 * @method string getSourceRegion() 获取源地域。
 * @method void setSourceRegion(string $SourceRegion) 设置源地域。
 * @method string getDestinationRegion() 获取目的地域。
 * @method void setDestinationRegion(string $DestinationRegion) 设置目的地域。
 * @method string getCcnId() 获取云联网ID。
 * @method void setCcnId(string $CcnId) 设置云联网ID。
 * @method string getCcnUin() 获取云联网所属账号。
 * @method void setCcnUin(string $CcnUin) 设置云联网所属账号。
 * @method integer getPeriod() 获取时间粒度。
 * @method void setPeriod(integer $Period) 设置时间粒度。
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 */
class DescribeCrossBorderFlowMonitorRequest extends AbstractModel
{
    /**
     * @var string 源地域。
     */
    public $SourceRegion;

    /**
     * @var string 目的地域。
     */
    public $DestinationRegion;

    /**
     * @var string 云联网ID。
     */
    public $CcnId;

    /**
     * @var string 云联网所属账号。
     */
    public $CcnUin;

    /**
     * @var integer 时间粒度。
     */
    public $Period;

    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @param string $SourceRegion 源地域。
     * @param string $DestinationRegion 目的地域。
     * @param string $CcnId 云联网ID。
     * @param string $CcnUin 云联网所属账号。
     * @param integer $Period 时间粒度。
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
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
        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }

        if (array_key_exists("DestinationRegion",$param) and $param["DestinationRegion"] !== null) {
            $this->DestinationRegion = $param["DestinationRegion"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnUin",$param) and $param["CcnUin"] !== null) {
            $this->CcnUin = $param["CcnUin"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

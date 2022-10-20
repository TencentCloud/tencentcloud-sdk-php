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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogVasInfo返回参数结构体
 *
 * @method string getBuyStatus() 获取购买状态
待购: Pending
已购: Normal
隔离: Isolate
 * @method void setBuyStatus(string $BuyStatus) 设置购买状态
待购: Pending
已购: Normal
隔离: Isolate
 * @method integer getLogSaveMonth() 获取存储时长(月)
 * @method void setLogSaveMonth(integer $LogSaveMonth) 设置存储时长(月)
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取截止时间
 * @method void setEndTime(string $EndTime) 设置截止时间
 * @method integer getLogCapacity() 获取存储容量(GB)
 * @method void setLogCapacity(integer $LogCapacity) 设置存储容量(GB)
 * @method string getResourceID() 获取资源ID
 * @method void setResourceID(string $ResourceID) 设置资源ID
 * @method boolean getIsPurchased() 获取是否曾经购买过(false:未曾 true:曾经购买过)
 * @method void setIsPurchased(boolean $IsPurchased) 设置是否曾经购买过(false:未曾 true:曾经购买过)
 * @method integer getTrialCapacity() 获取试用存储容量(GB)
 * @method void setTrialCapacity(integer $TrialCapacity) 设置试用存储容量(GB)
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecLogVasInfoResponse extends AbstractModel
{
    /**
     * @var string 购买状态
待购: Pending
已购: Normal
隔离: Isolate
     */
    public $BuyStatus;

    /**
     * @var integer 存储时长(月)
     */
    public $LogSaveMonth;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 截止时间
     */
    public $EndTime;

    /**
     * @var integer 存储容量(GB)
     */
    public $LogCapacity;

    /**
     * @var string 资源ID
     */
    public $ResourceID;

    /**
     * @var boolean 是否曾经购买过(false:未曾 true:曾经购买过)
     */
    public $IsPurchased;

    /**
     * @var integer 试用存储容量(GB)
     */
    public $TrialCapacity;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BuyStatus 购买状态
待购: Pending
已购: Normal
隔离: Isolate
     * @param integer $LogSaveMonth 存储时长(月)
     * @param string $StartTime 起始时间
     * @param string $EndTime 截止时间
     * @param integer $LogCapacity 存储容量(GB)
     * @param string $ResourceID 资源ID
     * @param boolean $IsPurchased 是否曾经购买过(false:未曾 true:曾经购买过)
     * @param integer $TrialCapacity 试用存储容量(GB)
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
        if (array_key_exists("BuyStatus",$param) and $param["BuyStatus"] !== null) {
            $this->BuyStatus = $param["BuyStatus"];
        }

        if (array_key_exists("LogSaveMonth",$param) and $param["LogSaveMonth"] !== null) {
            $this->LogSaveMonth = $param["LogSaveMonth"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LogCapacity",$param) and $param["LogCapacity"] !== null) {
            $this->LogCapacity = $param["LogCapacity"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("IsPurchased",$param) and $param["IsPurchased"] !== null) {
            $this->IsPurchased = $param["IsPurchased"];
        }

        if (array_key_exists("TrialCapacity",$param) and $param["TrialCapacity"] !== null) {
            $this->TrialCapacity = $param["TrialCapacity"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

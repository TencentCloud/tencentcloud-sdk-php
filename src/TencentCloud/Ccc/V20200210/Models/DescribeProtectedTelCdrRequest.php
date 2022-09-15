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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProtectedTelCdr请求参数结构体
 *
 * @method integer getStartTimeStamp() 获取起始时间戳，Unix 秒级时间戳
 * @method void setStartTimeStamp(integer $StartTimeStamp) 设置起始时间戳，Unix 秒级时间戳
 * @method integer getEndTimeStamp() 获取结束时间戳，Unix 秒级时间戳
 * @method void setEndTimeStamp(integer $EndTimeStamp) 设置结束时间戳，Unix 秒级时间戳
 * @method integer getSdkAppId() 获取应用 ID，可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID，可以查看 https://console.cloud.tencent.com/ccc
 * @method integer getPageSize() 获取分页尺寸，上限 100
 * @method void setPageSize(integer $PageSize) 设置分页尺寸，上限 100
 * @method integer getPageNumber() 获取分页页码，从 0 开始
 * @method void setPageNumber(integer $PageNumber) 设置分页页码，从 0 开始
 */
class DescribeProtectedTelCdrRequest extends AbstractModel
{
    /**
     * @var integer 起始时间戳，Unix 秒级时间戳
     */
    public $StartTimeStamp;

    /**
     * @var integer 结束时间戳，Unix 秒级时间戳
     */
    public $EndTimeStamp;

    /**
     * @var integer 应用 ID，可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var integer 分页尺寸，上限 100
     */
    public $PageSize;

    /**
     * @var integer 分页页码，从 0 开始
     */
    public $PageNumber;

    /**
     * @param integer $StartTimeStamp 起始时间戳，Unix 秒级时间戳
     * @param integer $EndTimeStamp 结束时间戳，Unix 秒级时间戳
     * @param integer $SdkAppId 应用 ID，可以查看 https://console.cloud.tencent.com/ccc
     * @param integer $PageSize 分页尺寸，上限 100
     * @param integer $PageNumber 分页页码，从 0 开始
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
        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}

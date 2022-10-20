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
 * DescribeAbnormalProcessLevelSummary返回参数结构体
 *
 * @method integer getHighLevelEventCount() 获取异常进程高危待处理事件数
 * @method void setHighLevelEventCount(integer $HighLevelEventCount) 设置异常进程高危待处理事件数
 * @method integer getMediumLevelEventCount() 获取异常进程中危待处理事件数
 * @method void setMediumLevelEventCount(integer $MediumLevelEventCount) 设置异常进程中危待处理事件数
 * @method integer getLowLevelEventCount() 获取异常进程低危待处理事件数
 * @method void setLowLevelEventCount(integer $LowLevelEventCount) 设置异常进程低危待处理事件数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAbnormalProcessLevelSummaryResponse extends AbstractModel
{
    /**
     * @var integer 异常进程高危待处理事件数
     */
    public $HighLevelEventCount;

    /**
     * @var integer 异常进程中危待处理事件数
     */
    public $MediumLevelEventCount;

    /**
     * @var integer 异常进程低危待处理事件数
     */
    public $LowLevelEventCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $HighLevelEventCount 异常进程高危待处理事件数
     * @param integer $MediumLevelEventCount 异常进程中危待处理事件数
     * @param integer $LowLevelEventCount 异常进程低危待处理事件数
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
        if (array_key_exists("HighLevelEventCount",$param) and $param["HighLevelEventCount"] !== null) {
            $this->HighLevelEventCount = $param["HighLevelEventCount"];
        }

        if (array_key_exists("MediumLevelEventCount",$param) and $param["MediumLevelEventCount"] !== null) {
            $this->MediumLevelEventCount = $param["MediumLevelEventCount"];
        }

        if (array_key_exists("LowLevelEventCount",$param) and $param["LowLevelEventCount"] !== null) {
            $this->LowLevelEventCount = $param["LowLevelEventCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

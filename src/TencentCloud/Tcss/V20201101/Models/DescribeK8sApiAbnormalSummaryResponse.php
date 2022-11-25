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
 * DescribeK8sApiAbnormalSummary返回参数结构体
 *
 * @method integer getUnhandleEventCount() 获取待处理事件个数
 * @method void setUnhandleEventCount(integer $UnhandleEventCount) 设置待处理事件个数
 * @method integer getUnhandleHighLevelEventCount() 获取待处理高危事件个数
 * @method void setUnhandleHighLevelEventCount(integer $UnhandleHighLevelEventCount) 设置待处理高危事件个数
 * @method integer getUnhandleMediumLevelEventCount() 获取待处理中危事件个数
 * @method void setUnhandleMediumLevelEventCount(integer $UnhandleMediumLevelEventCount) 设置待处理中危事件个数
 * @method integer getUnhandleLowLevelEventCount() 获取待处理低危事件个数
 * @method void setUnhandleLowLevelEventCount(integer $UnhandleLowLevelEventCount) 设置待处理低危事件个数
 * @method integer getUnhandleNoticeLevelEventCount() 获取待处理提示级别事件个数
 * @method void setUnhandleNoticeLevelEventCount(integer $UnhandleNoticeLevelEventCount) 设置待处理提示级别事件个数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeK8sApiAbnormalSummaryResponse extends AbstractModel
{
    /**
     * @var integer 待处理事件个数
     */
    public $UnhandleEventCount;

    /**
     * @var integer 待处理高危事件个数
     */
    public $UnhandleHighLevelEventCount;

    /**
     * @var integer 待处理中危事件个数
     */
    public $UnhandleMediumLevelEventCount;

    /**
     * @var integer 待处理低危事件个数
     */
    public $UnhandleLowLevelEventCount;

    /**
     * @var integer 待处理提示级别事件个数
     */
    public $UnhandleNoticeLevelEventCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $UnhandleEventCount 待处理事件个数
     * @param integer $UnhandleHighLevelEventCount 待处理高危事件个数
     * @param integer $UnhandleMediumLevelEventCount 待处理中危事件个数
     * @param integer $UnhandleLowLevelEventCount 待处理低危事件个数
     * @param integer $UnhandleNoticeLevelEventCount 待处理提示级别事件个数
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
        if (array_key_exists("UnhandleEventCount",$param) and $param["UnhandleEventCount"] !== null) {
            $this->UnhandleEventCount = $param["UnhandleEventCount"];
        }

        if (array_key_exists("UnhandleHighLevelEventCount",$param) and $param["UnhandleHighLevelEventCount"] !== null) {
            $this->UnhandleHighLevelEventCount = $param["UnhandleHighLevelEventCount"];
        }

        if (array_key_exists("UnhandleMediumLevelEventCount",$param) and $param["UnhandleMediumLevelEventCount"] !== null) {
            $this->UnhandleMediumLevelEventCount = $param["UnhandleMediumLevelEventCount"];
        }

        if (array_key_exists("UnhandleLowLevelEventCount",$param) and $param["UnhandleLowLevelEventCount"] !== null) {
            $this->UnhandleLowLevelEventCount = $param["UnhandleLowLevelEventCount"];
        }

        if (array_key_exists("UnhandleNoticeLevelEventCount",$param) and $param["UnhandleNoticeLevelEventCount"] !== null) {
            $this->UnhandleNoticeLevelEventCount = $param["UnhandleNoticeLevelEventCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

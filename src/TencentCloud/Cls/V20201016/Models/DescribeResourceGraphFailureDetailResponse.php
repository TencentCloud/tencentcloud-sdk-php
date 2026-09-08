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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceGraphFailureDetail返回参数结构体
 *
 * @method string getErrorMessage() 获取<p>失败详情信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>失败详情信息</p>
 * @method integer getLastFailedTime() 获取<p>最近一次失败时间</p><p>单位：秒</p>
 * @method void setLastFailedTime(integer $LastFailedTime) 设置<p>最近一次失败时间</p><p>单位：秒</p>
 * @method integer getRetryCount() 获取<p>重试次数</p>
 * @method void setRetryCount(integer $RetryCount) 设置<p>重试次数</p>
 * @method integer getFirstFailedAt() 获取<p>首次失败时间</p><p>单位：秒</p>
 * @method void setFirstFailedAt(integer $FirstFailedAt) 设置<p>首次失败时间</p><p>单位：秒</p>
 * @method string getOperation() 获取<p>引起失败的操作</p>
 * @method void setOperation(string $Operation) 设置<p>引起失败的操作</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourceGraphFailureDetailResponse extends AbstractModel
{
    /**
     * @var string <p>失败详情信息</p>
     */
    public $ErrorMessage;

    /**
     * @var integer <p>最近一次失败时间</p><p>单位：秒</p>
     */
    public $LastFailedTime;

    /**
     * @var integer <p>重试次数</p>
     */
    public $RetryCount;

    /**
     * @var integer <p>首次失败时间</p><p>单位：秒</p>
     */
    public $FirstFailedAt;

    /**
     * @var string <p>引起失败的操作</p>
     */
    public $Operation;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ErrorMessage <p>失败详情信息</p>
     * @param integer $LastFailedTime <p>最近一次失败时间</p><p>单位：秒</p>
     * @param integer $RetryCount <p>重试次数</p>
     * @param integer $FirstFailedAt <p>首次失败时间</p><p>单位：秒</p>
     * @param string $Operation <p>引起失败的操作</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("LastFailedTime",$param) and $param["LastFailedTime"] !== null) {
            $this->LastFailedTime = $param["LastFailedTime"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("FirstFailedAt",$param) and $param["FirstFailedAt"] !== null) {
            $this->FirstFailedAt = $param["FirstFailedAt"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

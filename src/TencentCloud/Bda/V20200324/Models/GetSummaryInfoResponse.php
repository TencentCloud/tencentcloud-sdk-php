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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSummaryInfo返回参数结构体
 *
 * @method integer getGroupCount() 获取人体库总数量。
 * @method void setGroupCount(integer $GroupCount) 设置人体库总数量。
 * @method integer getPersonCount() 获取人员总数量
 * @method void setPersonCount(integer $PersonCount) 设置人员总数量
 * @method integer getTraceCount() 获取人员轨迹总数量
 * @method void setTraceCount(integer $TraceCount) 设置人员轨迹总数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetSummaryInfoResponse extends AbstractModel
{
    /**
     * @var integer 人体库总数量。
     */
    public $GroupCount;

    /**
     * @var integer 人员总数量
     */
    public $PersonCount;

    /**
     * @var integer 人员轨迹总数量
     */
    public $TraceCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $GroupCount 人体库总数量。
     * @param integer $PersonCount 人员总数量
     * @param integer $TraceCount 人员轨迹总数量
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
        if (array_key_exists("GroupCount",$param) and $param["GroupCount"] !== null) {
            $this->GroupCount = $param["GroupCount"];
        }

        if (array_key_exists("PersonCount",$param) and $param["PersonCount"] !== null) {
            $this->PersonCount = $param["PersonCount"];
        }

        if (array_key_exists("TraceCount",$param) and $param["TraceCount"] !== null) {
            $this->TraceCount = $param["TraceCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

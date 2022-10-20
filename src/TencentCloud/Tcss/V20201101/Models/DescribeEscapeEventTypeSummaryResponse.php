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
 * DescribeEscapeEventTypeSummary返回参数结构体
 *
 * @method integer getContainerEscapeEventCount() 获取容器逃逸事件数
 * @method void setContainerEscapeEventCount(integer $ContainerEscapeEventCount) 设置容器逃逸事件数
 * @method integer getProcessPrivilegeEventCount() 获取程序提权事件数
 * @method void setProcessPrivilegeEventCount(integer $ProcessPrivilegeEventCount) 设置程序提权事件数
 * @method integer getRiskContainerEventCount() 获取风险容器事件数
 * @method void setRiskContainerEventCount(integer $RiskContainerEventCount) 设置风险容器事件数
 * @method integer getPendingEscapeEventCount() 获取逃逸事件待处理数
 * @method void setPendingEscapeEventCount(integer $PendingEscapeEventCount) 设置逃逸事件待处理数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEscapeEventTypeSummaryResponse extends AbstractModel
{
    /**
     * @var integer 容器逃逸事件数
     */
    public $ContainerEscapeEventCount;

    /**
     * @var integer 程序提权事件数
     */
    public $ProcessPrivilegeEventCount;

    /**
     * @var integer 风险容器事件数
     */
    public $RiskContainerEventCount;

    /**
     * @var integer 逃逸事件待处理数
     */
    public $PendingEscapeEventCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ContainerEscapeEventCount 容器逃逸事件数
     * @param integer $ProcessPrivilegeEventCount 程序提权事件数
     * @param integer $RiskContainerEventCount 风险容器事件数
     * @param integer $PendingEscapeEventCount 逃逸事件待处理数
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
        if (array_key_exists("ContainerEscapeEventCount",$param) and $param["ContainerEscapeEventCount"] !== null) {
            $this->ContainerEscapeEventCount = $param["ContainerEscapeEventCount"];
        }

        if (array_key_exists("ProcessPrivilegeEventCount",$param) and $param["ProcessPrivilegeEventCount"] !== null) {
            $this->ProcessPrivilegeEventCount = $param["ProcessPrivilegeEventCount"];
        }

        if (array_key_exists("RiskContainerEventCount",$param) and $param["RiskContainerEventCount"] !== null) {
            $this->RiskContainerEventCount = $param["RiskContainerEventCount"];
        }

        if (array_key_exists("PendingEscapeEventCount",$param) and $param["PendingEscapeEventCount"] !== null) {
            $this->PendingEscapeEventCount = $param["PendingEscapeEventCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

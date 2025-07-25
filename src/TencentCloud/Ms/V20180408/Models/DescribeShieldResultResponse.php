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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShieldResult返回参数结构体
 *
 * @method integer getTaskStatus() 获取任务状态: 0-请返回,1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态: 0-请返回,1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method AppDetailInfo getAppDetailInfo() 获取app加固前的详细信息
 * @method void setAppDetailInfo(AppDetailInfo $AppDetailInfo) 设置app加固前的详细信息
 * @method ShieldInfo getShieldInfo() 获取app加固后的详细信息
 * @method void setShieldInfo(ShieldInfo $ShieldInfo) 设置app加固后的详细信息
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method string getStatusRef() 获取状态指引
 * @method void setStatusRef(string $StatusRef) 设置状态指引
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeShieldResultResponse extends AbstractModel
{
    /**
     * @var integer 任务状态: 0-请返回,1-已完成,2-处理中,3-处理出错,4-处理超时
     */
    public $TaskStatus;

    /**
     * @var AppDetailInfo app加固前的详细信息
     */
    public $AppDetailInfo;

    /**
     * @var ShieldInfo app加固后的详细信息
     */
    public $ShieldInfo;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var string 状态指引
     */
    public $StatusRef;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TaskStatus 任务状态: 0-请返回,1-已完成,2-处理中,3-处理出错,4-处理超时
     * @param AppDetailInfo $AppDetailInfo app加固前的详细信息
     * @param ShieldInfo $ShieldInfo app加固后的详细信息
     * @param string $StatusDesc 状态描述
     * @param string $StatusRef 状态指引
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
        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("AppDetailInfo",$param) and $param["AppDetailInfo"] !== null) {
            $this->AppDetailInfo = new AppDetailInfo();
            $this->AppDetailInfo->deserialize($param["AppDetailInfo"]);
        }

        if (array_key_exists("ShieldInfo",$param) and $param["ShieldInfo"] !== null) {
            $this->ShieldInfo = new ShieldInfo();
            $this->ShieldInfo->deserialize($param["ShieldInfo"]);
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("StatusRef",$param) and $param["StatusRef"] !== null) {
            $this->StatusRef = $param["StatusRef"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

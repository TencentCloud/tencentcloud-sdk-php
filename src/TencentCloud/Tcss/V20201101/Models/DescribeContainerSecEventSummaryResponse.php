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
 * DescribeContainerSecEventSummary返回参数结构体
 *
 * @method integer getUnhandledEscapeCnt() 获取未处理逃逸事件
 * @method void setUnhandledEscapeCnt(integer $UnhandledEscapeCnt) 设置未处理逃逸事件
 * @method integer getUnhandledReverseShellCnt() 获取未处理反弹shell事件
 * @method void setUnhandledReverseShellCnt(integer $UnhandledReverseShellCnt) 设置未处理反弹shell事件
 * @method integer getUnhandledRiskSyscallCnt() 获取未处理高危系统调用
 * @method void setUnhandledRiskSyscallCnt(integer $UnhandledRiskSyscallCnt) 设置未处理高危系统调用
 * @method integer getUnhandledAbnormalProcessCnt() 获取未处理异常进程
 * @method void setUnhandledAbnormalProcessCnt(integer $UnhandledAbnormalProcessCnt) 设置未处理异常进程
 * @method integer getUnhandledFileCnt() 获取未处理文件篡改
 * @method void setUnhandledFileCnt(integer $UnhandledFileCnt) 设置未处理文件篡改
 * @method integer getUnhandledVirusEventCnt() 获取未处理木马事件
 * @method void setUnhandledVirusEventCnt(integer $UnhandledVirusEventCnt) 设置未处理木马事件
 * @method integer getUnhandledMaliciousConnectionEventCnt() 获取未处理恶意外连事件
 * @method void setUnhandledMaliciousConnectionEventCnt(integer $UnhandledMaliciousConnectionEventCnt) 设置未处理恶意外连事件
 * @method integer getUnhandledK8sApiEventCnt() 获取未处理k8sApi事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnhandledK8sApiEventCnt(integer $UnhandledK8sApiEventCnt) 设置未处理k8sApi事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeContainerSecEventSummaryResponse extends AbstractModel
{
    /**
     * @var integer 未处理逃逸事件
     */
    public $UnhandledEscapeCnt;

    /**
     * @var integer 未处理反弹shell事件
     */
    public $UnhandledReverseShellCnt;

    /**
     * @var integer 未处理高危系统调用
     */
    public $UnhandledRiskSyscallCnt;

    /**
     * @var integer 未处理异常进程
     */
    public $UnhandledAbnormalProcessCnt;

    /**
     * @var integer 未处理文件篡改
     */
    public $UnhandledFileCnt;

    /**
     * @var integer 未处理木马事件
     */
    public $UnhandledVirusEventCnt;

    /**
     * @var integer 未处理恶意外连事件
     */
    public $UnhandledMaliciousConnectionEventCnt;

    /**
     * @var integer 未处理k8sApi事件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnhandledK8sApiEventCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $UnhandledEscapeCnt 未处理逃逸事件
     * @param integer $UnhandledReverseShellCnt 未处理反弹shell事件
     * @param integer $UnhandledRiskSyscallCnt 未处理高危系统调用
     * @param integer $UnhandledAbnormalProcessCnt 未处理异常进程
     * @param integer $UnhandledFileCnt 未处理文件篡改
     * @param integer $UnhandledVirusEventCnt 未处理木马事件
     * @param integer $UnhandledMaliciousConnectionEventCnt 未处理恶意外连事件
     * @param integer $UnhandledK8sApiEventCnt 未处理k8sApi事件
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UnhandledEscapeCnt",$param) and $param["UnhandledEscapeCnt"] !== null) {
            $this->UnhandledEscapeCnt = $param["UnhandledEscapeCnt"];
        }

        if (array_key_exists("UnhandledReverseShellCnt",$param) and $param["UnhandledReverseShellCnt"] !== null) {
            $this->UnhandledReverseShellCnt = $param["UnhandledReverseShellCnt"];
        }

        if (array_key_exists("UnhandledRiskSyscallCnt",$param) and $param["UnhandledRiskSyscallCnt"] !== null) {
            $this->UnhandledRiskSyscallCnt = $param["UnhandledRiskSyscallCnt"];
        }

        if (array_key_exists("UnhandledAbnormalProcessCnt",$param) and $param["UnhandledAbnormalProcessCnt"] !== null) {
            $this->UnhandledAbnormalProcessCnt = $param["UnhandledAbnormalProcessCnt"];
        }

        if (array_key_exists("UnhandledFileCnt",$param) and $param["UnhandledFileCnt"] !== null) {
            $this->UnhandledFileCnt = $param["UnhandledFileCnt"];
        }

        if (array_key_exists("UnhandledVirusEventCnt",$param) and $param["UnhandledVirusEventCnt"] !== null) {
            $this->UnhandledVirusEventCnt = $param["UnhandledVirusEventCnt"];
        }

        if (array_key_exists("UnhandledMaliciousConnectionEventCnt",$param) and $param["UnhandledMaliciousConnectionEventCnt"] !== null) {
            $this->UnhandledMaliciousConnectionEventCnt = $param["UnhandledMaliciousConnectionEventCnt"];
        }

        if (array_key_exists("UnhandledK8sApiEventCnt",$param) and $param["UnhandledK8sApiEventCnt"] !== null) {
            $this->UnhandledK8sApiEventCnt = $param["UnhandledK8sApiEventCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

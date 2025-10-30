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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulFixStatus返回参数结构体
 *
 * @method string getFixStartTime() 获取开始修复时间
 * @method void setFixStartTime(string $FixStartTime) 设置开始修复时间
 * @method string getFixEndTime() 获取修复结束时间，为空表示还没结束
 * @method void setFixEndTime(string $FixEndTime) 设置修复结束时间，为空表示还没结束
 * @method integer getFixSuccessCnt() 获取修复成功的主机数
 * @method void setFixSuccessCnt(integer $FixSuccessCnt) 设置修复成功的主机数
 * @method integer getFixFailCnt() 获取修复失败的主机数
 * @method void setFixFailCnt(integer $FixFailCnt) 设置修复失败的主机数
 * @method integer getHostCnt() 获取主机总数
 * @method void setHostCnt(integer $HostCnt) 设置主机总数
 * @method integer getFixId() 获取修复的任务id
 * @method void setFixId(integer $FixId) 设置修复的任务id
 * @method array getSnapshotList() 获取修复快照状态列表
 * @method void setSnapshotList(array $SnapshotList) 设置修复快照状态列表
 * @method array getVulFixList() 获取修复漏洞详情列表
 * @method void setVulFixList(array $VulFixList) 设置修复漏洞详情列表
 * @method integer getSnapshotProgress() 获取快照创建进度0-100
 * @method void setSnapshotProgress(integer $SnapshotProgress) 设置快照创建进度0-100
 * @method integer getFixProgress() 获取修复进度 0-100
 * @method void setFixProgress(integer $FixProgress) 设置修复进度 0-100
 * @method integer getRemainingTime() 获取预计剩余时间（单位秒）
 * @method void setRemainingTime(integer $RemainingTime) 设置预计剩余时间（单位秒）
 * @method integer getIsRetrySnapshot() 获取快照是否是重试状态 0=非重试  1=重试
 * @method void setIsRetrySnapshot(integer $IsRetrySnapshot) 设置快照是否是重试状态 0=非重试  1=重试
 * @method integer getSnapshotFailCnt() 获取快照创建失败数
 * @method void setSnapshotFailCnt(integer $SnapshotFailCnt) 设置快照创建失败数
 * @method integer getIsAllowRetry() 获取是否允许重试 0:不允许 1：允许
 * @method void setIsAllowRetry(integer $IsAllowRetry) 设置是否允许重试 0:不允许 1：允许
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulFixStatusResponse extends AbstractModel
{
    /**
     * @var string 开始修复时间
     */
    public $FixStartTime;

    /**
     * @var string 修复结束时间，为空表示还没结束
     */
    public $FixEndTime;

    /**
     * @var integer 修复成功的主机数
     */
    public $FixSuccessCnt;

    /**
     * @var integer 修复失败的主机数
     */
    public $FixFailCnt;

    /**
     * @var integer 主机总数
     */
    public $HostCnt;

    /**
     * @var integer 修复的任务id
     */
    public $FixId;

    /**
     * @var array 修复快照状态列表
     */
    public $SnapshotList;

    /**
     * @var array 修复漏洞详情列表
     */
    public $VulFixList;

    /**
     * @var integer 快照创建进度0-100
     */
    public $SnapshotProgress;

    /**
     * @var integer 修复进度 0-100
     */
    public $FixProgress;

    /**
     * @var integer 预计剩余时间（单位秒）
     */
    public $RemainingTime;

    /**
     * @var integer 快照是否是重试状态 0=非重试  1=重试
     */
    public $IsRetrySnapshot;

    /**
     * @var integer 快照创建失败数
     */
    public $SnapshotFailCnt;

    /**
     * @var integer 是否允许重试 0:不允许 1：允许
     */
    public $IsAllowRetry;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FixStartTime 开始修复时间
     * @param string $FixEndTime 修复结束时间，为空表示还没结束
     * @param integer $FixSuccessCnt 修复成功的主机数
     * @param integer $FixFailCnt 修复失败的主机数
     * @param integer $HostCnt 主机总数
     * @param integer $FixId 修复的任务id
     * @param array $SnapshotList 修复快照状态列表
     * @param array $VulFixList 修复漏洞详情列表
     * @param integer $SnapshotProgress 快照创建进度0-100
     * @param integer $FixProgress 修复进度 0-100
     * @param integer $RemainingTime 预计剩余时间（单位秒）
     * @param integer $IsRetrySnapshot 快照是否是重试状态 0=非重试  1=重试
     * @param integer $SnapshotFailCnt 快照创建失败数
     * @param integer $IsAllowRetry 是否允许重试 0:不允许 1：允许
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
        if (array_key_exists("FixStartTime",$param) and $param["FixStartTime"] !== null) {
            $this->FixStartTime = $param["FixStartTime"];
        }

        if (array_key_exists("FixEndTime",$param) and $param["FixEndTime"] !== null) {
            $this->FixEndTime = $param["FixEndTime"];
        }

        if (array_key_exists("FixSuccessCnt",$param) and $param["FixSuccessCnt"] !== null) {
            $this->FixSuccessCnt = $param["FixSuccessCnt"];
        }

        if (array_key_exists("FixFailCnt",$param) and $param["FixFailCnt"] !== null) {
            $this->FixFailCnt = $param["FixFailCnt"];
        }

        if (array_key_exists("HostCnt",$param) and $param["HostCnt"] !== null) {
            $this->HostCnt = $param["HostCnt"];
        }

        if (array_key_exists("FixId",$param) and $param["FixId"] !== null) {
            $this->FixId = $param["FixId"];
        }

        if (array_key_exists("SnapshotList",$param) and $param["SnapshotList"] !== null) {
            $this->SnapshotList = [];
            foreach ($param["SnapshotList"] as $key => $value){
                $obj = new VulFixStatusSnapshotInfo();
                $obj->deserialize($value);
                array_push($this->SnapshotList, $obj);
            }
        }

        if (array_key_exists("VulFixList",$param) and $param["VulFixList"] !== null) {
            $this->VulFixList = [];
            foreach ($param["VulFixList"] as $key => $value){
                $obj = new VulFixStatusInfo();
                $obj->deserialize($value);
                array_push($this->VulFixList, $obj);
            }
        }

        if (array_key_exists("SnapshotProgress",$param) and $param["SnapshotProgress"] !== null) {
            $this->SnapshotProgress = $param["SnapshotProgress"];
        }

        if (array_key_exists("FixProgress",$param) and $param["FixProgress"] !== null) {
            $this->FixProgress = $param["FixProgress"];
        }

        if (array_key_exists("RemainingTime",$param) and $param["RemainingTime"] !== null) {
            $this->RemainingTime = $param["RemainingTime"];
        }

        if (array_key_exists("IsRetrySnapshot",$param) and $param["IsRetrySnapshot"] !== null) {
            $this->IsRetrySnapshot = $param["IsRetrySnapshot"];
        }

        if (array_key_exists("SnapshotFailCnt",$param) and $param["SnapshotFailCnt"] !== null) {
            $this->SnapshotFailCnt = $param["SnapshotFailCnt"];
        }

        if (array_key_exists("IsAllowRetry",$param) and $param["IsAllowRetry"] !== null) {
            $this->IsAllowRetry = $param["IsAllowRetry"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

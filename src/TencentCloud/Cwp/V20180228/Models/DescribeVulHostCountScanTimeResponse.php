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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulHostCountScanTime返回参数结构体
 *
 * @method integer getTotalVulCount() 获取总漏洞数
 * @method void setTotalVulCount(integer $TotalVulCount) 设置总漏洞数
 * @method integer getVulHostCount() 获取漏洞影响主机数
 * @method void setVulHostCount(integer $VulHostCount) 设置漏洞影响主机数
 * @method string getScanTime() 获取扫描时间
 * @method void setScanTime(string $ScanTime) 设置扫描时间
 * @method boolean getIfFirstScan() 获取是否第一次检测
 * @method void setIfFirstScan(boolean $IfFirstScan) 设置是否第一次检测
 * @method integer getTaskId() 获取运行中的任务号, 没有任务则为0
 * @method void setTaskId(integer $TaskId) 设置运行中的任务号, 没有任务则为0
 * @method string getLastFixTime() 获取最后一次修复漏洞的时间
 * @method void setLastFixTime(string $LastFixTime) 设置最后一次修复漏洞的时间
 * @method boolean gethadAutoFixVul() 获取是否有支持自动修复的漏洞事件
 * @method void sethadAutoFixVul(boolean $hadAutoFixVul) 设置是否有支持自动修复的漏洞事件
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulHostCountScanTimeResponse extends AbstractModel
{
    /**
     * @var integer 总漏洞数
     */
    public $TotalVulCount;

    /**
     * @var integer 漏洞影响主机数
     */
    public $VulHostCount;

    /**
     * @var string 扫描时间
     */
    public $ScanTime;

    /**
     * @var boolean 是否第一次检测
     */
    public $IfFirstScan;

    /**
     * @var integer 运行中的任务号, 没有任务则为0
     */
    public $TaskId;

    /**
     * @var string 最后一次修复漏洞的时间
     */
    public $LastFixTime;

    /**
     * @var boolean 是否有支持自动修复的漏洞事件
     */
    public $hadAutoFixVul;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalVulCount 总漏洞数
     * @param integer $VulHostCount 漏洞影响主机数
     * @param string $ScanTime 扫描时间
     * @param boolean $IfFirstScan 是否第一次检测
     * @param integer $TaskId 运行中的任务号, 没有任务则为0
     * @param string $LastFixTime 最后一次修复漏洞的时间
     * @param boolean $hadAutoFixVul 是否有支持自动修复的漏洞事件
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
        if (array_key_exists("TotalVulCount",$param) and $param["TotalVulCount"] !== null) {
            $this->TotalVulCount = $param["TotalVulCount"];
        }

        if (array_key_exists("VulHostCount",$param) and $param["VulHostCount"] !== null) {
            $this->VulHostCount = $param["VulHostCount"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("IfFirstScan",$param) and $param["IfFirstScan"] !== null) {
            $this->IfFirstScan = $param["IfFirstScan"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("LastFixTime",$param) and $param["LastFixTime"] !== null) {
            $this->LastFixTime = $param["LastFixTime"];
        }

        if (array_key_exists("hadAutoFixVul",$param) and $param["hadAutoFixVul"] !== null) {
            $this->hadAutoFixVul = $param["hadAutoFixVul"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

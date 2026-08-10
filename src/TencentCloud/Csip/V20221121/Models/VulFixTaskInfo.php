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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞修复任务概要信息
 *
 * @method integer getId() 获取修复任务主键ID
 * @method void setId(integer $Id) 设置修复任务主键ID
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method integer getFixStatus() 获取修复状态
枚举值：
0：初始化
1：修复中
2：修复成功
3：部分修复失败
4：全部修复失败
5：停止修复
 * @method void setFixStatus(integer $FixStatus) 设置修复状态
枚举值：
0：初始化
1：修复中
2：修复成功
3：部分修复失败
4：全部修复失败
5：停止修复
 * @method integer getAssetCount() 获取修复资产总数
 * @method void setAssetCount(integer $AssetCount) 设置修复资产总数
 * @method integer getSuccessCount() 获取修复成功数
 * @method void setSuccessCount(integer $SuccessCount) 设置修复成功数
 * @method integer getFailCount() 获取修复失败数
 * @method void setFailCount(integer $FailCount) 设置修复失败数
 * @method integer getFixingCount() 获取修复中数量
 * @method void setFixingCount(integer $FixingCount) 设置修复中数量
 * @method integer getQueueCount() 获取排队中数量（等待下发或等待快照创建）
 * @method void setQueueCount(integer $QueueCount) 设置排队中数量（等待下发或等待快照创建）
 * @method integer getProgress() 获取修复进度百分比
取值范围：[0, 100]
补充说明：计算方式为(SuccessCount+FailCount)/AssetCount×100
 * @method void setProgress(integer $Progress) 设置修复进度百分比
取值范围：[0, 100]
补充说明：计算方式为(SuccessCount+FailCount)/AssetCount×100
 * @method integer getSuccessVulCount() 获取修复成功的漏洞数
 * @method void setSuccessVulCount(integer $SuccessVulCount) 设置修复成功的漏洞数
 * @method integer getFailVulCount() 获取修复失败的漏洞数
 * @method void setFailVulCount(integer $FailVulCount) 设置修复失败的漏洞数
 * @method array getVulNames() 获取修复的漏洞名称列表
 * @method void setVulNames(array $VulNames) 设置修复的漏洞名称列表
 * @method string getStartTime() 获取修复启动时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setStartTime(string $StartTime) 设置修复启动时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getEndTime() 获取修复结束时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setEndTime(string $EndTime) 设置修复结束时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method array getVulFixStatusList() 获取漏洞维度修复状态列表，每个漏洞的修复状态详情
 * @method void setVulFixStatusList(array $VulFixStatusList) 设置漏洞维度修复状态列表，每个漏洞的修复状态详情
 */
class VulFixTaskInfo extends AbstractModel
{
    /**
     * @var integer 修复任务主键ID
     */
    public $Id;

    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var integer 修复状态
枚举值：
0：初始化
1：修复中
2：修复成功
3：部分修复失败
4：全部修复失败
5：停止修复
     */
    public $FixStatus;

    /**
     * @var integer 修复资产总数
     */
    public $AssetCount;

    /**
     * @var integer 修复成功数
     */
    public $SuccessCount;

    /**
     * @var integer 修复失败数
     */
    public $FailCount;

    /**
     * @var integer 修复中数量
     */
    public $FixingCount;

    /**
     * @var integer 排队中数量（等待下发或等待快照创建）
     */
    public $QueueCount;

    /**
     * @var integer 修复进度百分比
取值范围：[0, 100]
补充说明：计算方式为(SuccessCount+FailCount)/AssetCount×100
     */
    public $Progress;

    /**
     * @var integer 修复成功的漏洞数
     */
    public $SuccessVulCount;

    /**
     * @var integer 修复失败的漏洞数
     */
    public $FailVulCount;

    /**
     * @var array 修复的漏洞名称列表
     */
    public $VulNames;

    /**
     * @var string 修复启动时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $StartTime;

    /**
     * @var string 修复结束时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $EndTime;

    /**
     * @var array 漏洞维度修复状态列表，每个漏洞的修复状态详情
     */
    public $VulFixStatusList;

    /**
     * @param integer $Id 修复任务主键ID
     * @param integer $TaskId 任务ID
     * @param integer $FixStatus 修复状态
枚举值：
0：初始化
1：修复中
2：修复成功
3：部分修复失败
4：全部修复失败
5：停止修复
     * @param integer $AssetCount 修复资产总数
     * @param integer $SuccessCount 修复成功数
     * @param integer $FailCount 修复失败数
     * @param integer $FixingCount 修复中数量
     * @param integer $QueueCount 排队中数量（等待下发或等待快照创建）
     * @param integer $Progress 修复进度百分比
取值范围：[0, 100]
补充说明：计算方式为(SuccessCount+FailCount)/AssetCount×100
     * @param integer $SuccessVulCount 修复成功的漏洞数
     * @param integer $FailVulCount 修复失败的漏洞数
     * @param array $VulNames 修复的漏洞名称列表
     * @param string $StartTime 修复启动时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $EndTime 修复结束时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param array $VulFixStatusList 漏洞维度修复状态列表，每个漏洞的修复状态详情
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("FixingCount",$param) and $param["FixingCount"] !== null) {
            $this->FixingCount = $param["FixingCount"];
        }

        if (array_key_exists("QueueCount",$param) and $param["QueueCount"] !== null) {
            $this->QueueCount = $param["QueueCount"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("SuccessVulCount",$param) and $param["SuccessVulCount"] !== null) {
            $this->SuccessVulCount = $param["SuccessVulCount"];
        }

        if (array_key_exists("FailVulCount",$param) and $param["FailVulCount"] !== null) {
            $this->FailVulCount = $param["FailVulCount"];
        }

        if (array_key_exists("VulNames",$param) and $param["VulNames"] !== null) {
            $this->VulNames = $param["VulNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("VulFixStatusList",$param) and $param["VulFixStatusList"] !== null) {
            $this->VulFixStatusList = [];
            foreach ($param["VulFixStatusList"] as $key => $value){
                $obj = new VulFixStatusItem();
                $obj->deserialize($value);
                array_push($this->VulFixStatusList, $obj);
            }
        }
    }
}

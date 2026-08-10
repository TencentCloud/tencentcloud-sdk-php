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
 * 漏洞修复任务列表项
 *
 * @method integer getId() 获取修复任务主键ID
 * @method void setId(integer $Id) 设置修复任务主键ID
 * @method integer getTaskId() 获取任务ID，用于交互的hash标识
 * @method void setTaskId(integer $TaskId) 设置任务ID，用于交互的hash标识
 * @method string getJobId() 获取任务JobId，对应后台任务系统的任务ID
 * @method void setJobId(string $JobId) 设置任务JobId，对应后台任务系统的任务ID
 * @method array getVulIds() 获取修复的漏洞ID列表
 * @method void setVulIds(array $VulIds) 设置修复的漏洞ID列表
 * @method array getKBIds() 获取修复的KB补丁ID列表
 * @method void setKBIds(array $KBIds) 设置修复的KB补丁ID列表
 * @method integer getAssetCount() 获取修复资产总数
 * @method void setAssetCount(integer $AssetCount) 设置修复资产总数
 * @method integer getSuccessCount() 获取修复成功的主机数
 * @method void setSuccessCount(integer $SuccessCount) 设置修复成功的主机数
 * @method integer getFailCount() 获取修复失败的主机数
 * @method void setFailCount(integer $FailCount) 设置修复失败的主机数
 * @method integer getProgress() 获取修复进度百分比
取值范围：[0, 100]
补充说明：计算方式为(SuccessCount+FailCount)/AssetCount×100
 * @method void setProgress(integer $Progress) 设置修复进度百分比
取值范围：[0, 100]
补充说明：计算方式为(SuccessCount+FailCount)/AssetCount×100
 * @method integer getTargetAppIdsCount() 获取修复任务用户数
 * @method void setTargetAppIdsCount(integer $TargetAppIdsCount) 设置修复任务用户数
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
 * @method integer getTimeout() 获取最大修复时间
单位：秒
 * @method void setTimeout(integer $Timeout) 设置最大修复时间
单位：秒
 * @method string getStartTime() 获取修复启动时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setStartTime(string $StartTime) 设置修复启动时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getEndTime() 获取修复结束时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setEndTime(string $EndTime) 设置修复结束时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getCreateTime() 获取记录创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setCreateTime(string $CreateTime) 设置记录创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method array getVulNames() 获取修复的漏洞名称列表，便于列表页直接展示
 * @method void setVulNames(array $VulNames) 设置修复的漏洞名称列表，便于列表页直接展示
 * @method array getVulCategory() 获取漏洞类型列表
枚举值：
LINUX：Linux软件漏洞
WINDOWS：Windows系统补丁漏洞
WEB_CMS：Web-CMS漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
 * @method void setVulCategory(array $VulCategory) 设置漏洞类型列表
枚举值：
LINUX：Linux软件漏洞
WINDOWS：Windows系统补丁漏洞
WEB_CMS：Web-CMS漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
 * @method integer getAppId() 获取创建者AppId
 * @method void setAppId(integer $AppId) 设置创建者AppId
 */
class VulFixTaskItem extends AbstractModel
{
    /**
     * @var integer 修复任务主键ID
     */
    public $Id;

    /**
     * @var integer 任务ID，用于交互的hash标识
     */
    public $TaskId;

    /**
     * @var string 任务JobId，对应后台任务系统的任务ID
     */
    public $JobId;

    /**
     * @var array 修复的漏洞ID列表
     */
    public $VulIds;

    /**
     * @var array 修复的KB补丁ID列表
     */
    public $KBIds;

    /**
     * @var integer 修复资产总数
     */
    public $AssetCount;

    /**
     * @var integer 修复成功的主机数
     */
    public $SuccessCount;

    /**
     * @var integer 修复失败的主机数
     */
    public $FailCount;

    /**
     * @var integer 修复进度百分比
取值范围：[0, 100]
补充说明：计算方式为(SuccessCount+FailCount)/AssetCount×100
     */
    public $Progress;

    /**
     * @var integer 修复任务用户数
     */
    public $TargetAppIdsCount;

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
     * @var integer 最大修复时间
单位：秒
     */
    public $Timeout;

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
     * @var string 记录创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $CreateTime;

    /**
     * @var array 修复的漏洞名称列表，便于列表页直接展示
     */
    public $VulNames;

    /**
     * @var array 漏洞类型列表
枚举值：
LINUX：Linux软件漏洞
WINDOWS：Windows系统补丁漏洞
WEB_CMS：Web-CMS漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
     */
    public $VulCategory;

    /**
     * @var integer 创建者AppId
     */
    public $AppId;

    /**
     * @param integer $Id 修复任务主键ID
     * @param integer $TaskId 任务ID，用于交互的hash标识
     * @param string $JobId 任务JobId，对应后台任务系统的任务ID
     * @param array $VulIds 修复的漏洞ID列表
     * @param array $KBIds 修复的KB补丁ID列表
     * @param integer $AssetCount 修复资产总数
     * @param integer $SuccessCount 修复成功的主机数
     * @param integer $FailCount 修复失败的主机数
     * @param integer $Progress 修复进度百分比
取值范围：[0, 100]
补充说明：计算方式为(SuccessCount+FailCount)/AssetCount×100
     * @param integer $TargetAppIdsCount 修复任务用户数
     * @param integer $FixStatus 修复状态
枚举值：
0：初始化
1：修复中
2：修复成功
3：部分修复失败
4：全部修复失败
5：停止修复
     * @param integer $Timeout 最大修复时间
单位：秒
     * @param string $StartTime 修复启动时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $EndTime 修复结束时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $CreateTime 记录创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param array $VulNames 修复的漏洞名称列表，便于列表页直接展示
     * @param array $VulCategory 漏洞类型列表
枚举值：
LINUX：Linux软件漏洞
WINDOWS：Windows系统补丁漏洞
WEB_CMS：Web-CMS漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
     * @param integer $AppId 创建者AppId
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

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("VulIds",$param) and $param["VulIds"] !== null) {
            $this->VulIds = $param["VulIds"];
        }

        if (array_key_exists("KBIds",$param) and $param["KBIds"] !== null) {
            $this->KBIds = $param["KBIds"];
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

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TargetAppIdsCount",$param) and $param["TargetAppIdsCount"] !== null) {
            $this->TargetAppIdsCount = $param["TargetAppIdsCount"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("VulNames",$param) and $param["VulNames"] !== null) {
            $this->VulNames = $param["VulNames"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}

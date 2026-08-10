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
 * 已修复漏洞信息
 *
 * @method integer getVulId() 获取漏洞ID
 * @method void setVulId(integer $VulId) 设置漏洞ID
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getLevel() 获取漏洞等级
枚举值：
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
 * @method void setLevel(string $Level) 设置漏洞等级
枚举值：
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
 * @method VPRRatingInfo getVRPRatingInfo() 获取VPR 评级信息（包含评级结果、说明和分阶段评分），与 DescribeHostVulRiskList 一致
 * @method void setVRPRatingInfo(VPRRatingInfo $VRPRatingInfo) 设置VPR 评级信息（包含评级结果、说明和分阶段评分），与 DescribeHostVulRiskList 一致
 * @method string getVulCategory() 获取漏洞类型
枚举值：
LINUX：Linux软件漏洞
WINDOWS：Windows系统补丁漏洞
WEB_CMS：Web-CMS漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
 * @method void setVulCategory(string $VulCategory) 设置漏洞类型
枚举值：
LINUX：Linux软件漏洞
WINDOWS：Windows系统补丁漏洞
WEB_CMS：Web-CMS漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
 * @method string getCveId() 获取CVE编号
 * @method void setCveId(string $CveId) 设置CVE编号
 * @method string getMachineName() 获取修复主机名称
 * @method void setMachineName(string $MachineName) 设置修复主机名称
 * @method string getInstanceId() 获取修复主机实例ID
 * @method void setInstanceId(string $InstanceId) 设置修复主机实例ID
 * @method integer getComponentCount() 获取关联组件&路径数量
 * @method void setComponentCount(integer $ComponentCount) 设置关联组件&路径数量
 * @method array getComponents() 获取关联组件&路径列表
 * @method void setComponents(array $Components) 设置关联组件&路径列表
 * @method string getLatestFixTime() 获取最近一次修复时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setLatestFixTime(string $LatestFixTime) 设置最近一次修复时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 */
class VulFixedItem extends AbstractModel
{
    /**
     * @var integer 漏洞ID
     */
    public $VulId;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 漏洞等级
枚举值：
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
     */
    public $Level;

    /**
     * @var VPRRatingInfo VPR 评级信息（包含评级结果、说明和分阶段评分），与 DescribeHostVulRiskList 一致
     */
    public $VRPRatingInfo;

    /**
     * @var string 漏洞类型
枚举值：
LINUX：Linux软件漏洞
WINDOWS：Windows系统补丁漏洞
WEB_CMS：Web-CMS漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
     */
    public $VulCategory;

    /**
     * @var string CVE编号
     */
    public $CveId;

    /**
     * @var string 修复主机名称
     */
    public $MachineName;

    /**
     * @var string 修复主机实例ID
     */
    public $InstanceId;

    /**
     * @var integer 关联组件&路径数量
     */
    public $ComponentCount;

    /**
     * @var array 关联组件&路径列表
     */
    public $Components;

    /**
     * @var string 最近一次修复时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $LatestFixTime;

    /**
     * @param integer $VulId 漏洞ID
     * @param string $VulName 漏洞名称
     * @param string $Level 漏洞等级
枚举值：
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
     * @param VPRRatingInfo $VRPRatingInfo VPR 评级信息（包含评级结果、说明和分阶段评分），与 DescribeHostVulRiskList 一致
     * @param string $VulCategory 漏洞类型
枚举值：
LINUX：Linux软件漏洞
WINDOWS：Windows系统补丁漏洞
WEB_CMS：Web-CMS漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
     * @param string $CveId CVE编号
     * @param string $MachineName 修复主机名称
     * @param string $InstanceId 修复主机实例ID
     * @param integer $ComponentCount 关联组件&路径数量
     * @param array $Components 关联组件&路径列表
     * @param string $LatestFixTime 最近一次修复时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("VRPRatingInfo",$param) and $param["VRPRatingInfo"] !== null) {
            $this->VRPRatingInfo = new VPRRatingInfo();
            $this->VRPRatingInfo->deserialize($param["VRPRatingInfo"]);
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ComponentCount",$param) and $param["ComponentCount"] !== null) {
            $this->ComponentCount = $param["ComponentCount"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("LatestFixTime",$param) and $param["LatestFixTime"] !== null) {
            $this->LatestFixTime = $param["LatestFixTime"];
        }
    }
}

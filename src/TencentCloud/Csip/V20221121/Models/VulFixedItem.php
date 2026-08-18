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
 * @method integer getVulId() 获取<p>漏洞ID</p>
 * @method void setVulId(integer $VulId) 设置<p>漏洞ID</p>
 * @method string getVulName() 获取<p>漏洞名称</p>
 * @method void setVulName(string $VulName) 设置<p>漏洞名称</p>
 * @method string getLevel() 获取<p>漏洞等级<br>枚举值：<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
 * @method void setLevel(string $Level) 设置<p>漏洞等级<br>枚举值：<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
 * @method VPRRatingInfo getVRPRatingInfo() 获取<p>VPR 评级信息（包含评级结果、说明和分阶段评分），与 DescribeHostVulRiskList 一致</p>
 * @method void setVRPRatingInfo(VPRRatingInfo $VRPRatingInfo) 设置<p>VPR 评级信息（包含评级结果、说明和分阶段评分），与 DescribeHostVulRiskList 一致</p>
 * @method string getVulCategory() 获取<p>漏洞类型<br>枚举值：<br>LINUX：Linux软件漏洞<br>WINDOWS：Windows系统补丁漏洞<br>WEB_CMS：Web-CMS漏洞<br>APPLICATION：应用漏洞<br>EMERGENCY：应急漏洞</p>
 * @method void setVulCategory(string $VulCategory) 设置<p>漏洞类型<br>枚举值：<br>LINUX：Linux软件漏洞<br>WINDOWS：Windows系统补丁漏洞<br>WEB_CMS：Web-CMS漏洞<br>APPLICATION：应用漏洞<br>EMERGENCY：应急漏洞</p>
 * @method string getCveId() 获取<p>CVE编号</p>
 * @method void setCveId(string $CveId) 设置<p>CVE编号</p>
 * @method string getMachineName() 获取<p>修复主机名称</p>
 * @method void setMachineName(string $MachineName) 设置<p>修复主机名称</p>
 * @method string getInstanceId() 获取<p>修复主机实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>修复主机实例ID</p>
 * @method integer getComponentCount() 获取<p>关联组件&amp;路径数量</p>
 * @method void setComponentCount(integer $ComponentCount) 设置<p>关联组件&amp;路径数量</p>
 * @method array getComponents() 获取<p>关联组件&amp;路径列表</p>
 * @method void setComponents(array $Components) 设置<p>关联组件&amp;路径列表</p>
 * @method string getLatestFixTime() 获取<p>最近一次修复时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setLatestFixTime(string $LatestFixTime) 设置<p>最近一次修复时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method VPRExplainInfo getVPRExplainInfo() 获取<p>VPR评级依据</p>
 * @method void setVPRExplainInfo(VPRExplainInfo $VPRExplainInfo) 设置<p>VPR评级依据</p>
 */
class VulFixedItem extends AbstractModel
{
    /**
     * @var integer <p>漏洞ID</p>
     */
    public $VulId;

    /**
     * @var string <p>漏洞名称</p>
     */
    public $VulName;

    /**
     * @var string <p>漏洞等级<br>枚举值：<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
     */
    public $Level;

    /**
     * @var VPRRatingInfo <p>VPR 评级信息（包含评级结果、说明和分阶段评分），与 DescribeHostVulRiskList 一致</p>
     */
    public $VRPRatingInfo;

    /**
     * @var string <p>漏洞类型<br>枚举值：<br>LINUX：Linux软件漏洞<br>WINDOWS：Windows系统补丁漏洞<br>WEB_CMS：Web-CMS漏洞<br>APPLICATION：应用漏洞<br>EMERGENCY：应急漏洞</p>
     */
    public $VulCategory;

    /**
     * @var string <p>CVE编号</p>
     */
    public $CveId;

    /**
     * @var string <p>修复主机名称</p>
     */
    public $MachineName;

    /**
     * @var string <p>修复主机实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>关联组件&amp;路径数量</p>
     */
    public $ComponentCount;

    /**
     * @var array <p>关联组件&amp;路径列表</p>
     */
    public $Components;

    /**
     * @var string <p>最近一次修复时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $LatestFixTime;

    /**
     * @var VPRExplainInfo <p>VPR评级依据</p>
     */
    public $VPRExplainInfo;

    /**
     * @param integer $VulId <p>漏洞ID</p>
     * @param string $VulName <p>漏洞名称</p>
     * @param string $Level <p>漏洞等级<br>枚举值：<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
     * @param VPRRatingInfo $VRPRatingInfo <p>VPR 评级信息（包含评级结果、说明和分阶段评分），与 DescribeHostVulRiskList 一致</p>
     * @param string $VulCategory <p>漏洞类型<br>枚举值：<br>LINUX：Linux软件漏洞<br>WINDOWS：Windows系统补丁漏洞<br>WEB_CMS：Web-CMS漏洞<br>APPLICATION：应用漏洞<br>EMERGENCY：应急漏洞</p>
     * @param string $CveId <p>CVE编号</p>
     * @param string $MachineName <p>修复主机名称</p>
     * @param string $InstanceId <p>修复主机实例ID</p>
     * @param integer $ComponentCount <p>关联组件&amp;路径数量</p>
     * @param array $Components <p>关联组件&amp;路径列表</p>
     * @param string $LatestFixTime <p>最近一次修复时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param VPRExplainInfo $VPRExplainInfo <p>VPR评级依据</p>
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

        if (array_key_exists("VPRExplainInfo",$param) and $param["VPRExplainInfo"] !== null) {
            $this->VPRExplainInfo = new VPRExplainInfo();
            $this->VPRExplainInfo->deserialize($param["VPRExplainInfo"]);
        }
    }
}

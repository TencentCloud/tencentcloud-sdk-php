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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞情报详情
 *
 * @method string getVulId() 获取<p>情报ID</p>
 * @method void setVulId(string $VulId) 设置<p>情报ID</p>
 * @method string getVulName() 获取<p>情报名称</p>
 * @method void setVulName(string $VulName) 设置<p>情报名称</p>
 * @method string getVulOverview() 获取<p>情报概述</p>
 * @method void setVulOverview(string $VulOverview) 设置<p>情报概述</p>
 * @method string getInsertTime() 获取<p>录入时间</p>
 * @method void setInsertTime(string $InsertTime) 设置<p>录入时间</p>
 * @method integer getRiskLevel() 获取<p>漏洞风险等级 1：低风险，2：中风险，3：高风险</p>
 * @method void setRiskLevel(integer $RiskLevel) 设置<p>漏洞风险等级 1：低风险，2：中风险，3：高风险</p>
 * @method string getTags() 获取<p>标签</p>
 * @method void setTags(string $Tags) 设置<p>标签</p>
 * @method string getVulComponents() 获取<p>关联组件</p>
 * @method void setVulComponents(string $VulComponents) 设置<p>关联组件</p>
 * @method integer getBannerCount() 获取<p>相关指纹数量</p>
 * @method void setBannerCount(integer $BannerCount) 设置<p>相关指纹数量</p>
 * @method integer getVulAssetCount() 获取<p>漏洞资产数量</p>
 * @method void setVulAssetCount(integer $VulAssetCount) 设置<p>漏洞资产数量</p>
 * @method string getLastTaskStatus() 获取<p>最新任务状态:todo/doing/done，如果为空表示没有任务</p>
 * @method void setLastTaskStatus(string $LastTaskStatus) 设置<p>最新任务状态:todo/doing/done，如果为空表示没有任务</p>
 * @method string getLastTaskInstanceId() 获取<p>任务id</p>
 * @method void setLastTaskInstanceId(string $LastTaskInstanceId) 设置<p>任务id</p>
 * @method string getXscanBannerPluginId() 获取<p>xscan指纹插件id</p>
 * @method void setXscanBannerPluginId(string $XscanBannerPluginId) 设置<p>xscan指纹插件id</p>
 * @method string getXscanPocPluginId() 获取<p>xscan poc插件id</p>
 * @method void setXscanPocPluginId(string $XscanPocPluginId) 设置<p>xscan poc插件id</p>
 * @method string getLastScanTime() 获取<p>上一次扫描时间</p>
 * @method void setLastScanTime(string $LastScanTime) 设置<p>上一次扫描时间</p>
 */
class IntelligenceDesc extends AbstractModel
{
    /**
     * @var string <p>情报ID</p>
     */
    public $VulId;

    /**
     * @var string <p>情报名称</p>
     */
    public $VulName;

    /**
     * @var string <p>情报概述</p>
     */
    public $VulOverview;

    /**
     * @var string <p>录入时间</p>
     */
    public $InsertTime;

    /**
     * @var integer <p>漏洞风险等级 1：低风险，2：中风险，3：高风险</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>关联组件</p>
     */
    public $VulComponents;

    /**
     * @var integer <p>相关指纹数量</p>
     */
    public $BannerCount;

    /**
     * @var integer <p>漏洞资产数量</p>
     */
    public $VulAssetCount;

    /**
     * @var string <p>最新任务状态:todo/doing/done，如果为空表示没有任务</p>
     */
    public $LastTaskStatus;

    /**
     * @var string <p>任务id</p>
     */
    public $LastTaskInstanceId;

    /**
     * @var string <p>xscan指纹插件id</p>
     */
    public $XscanBannerPluginId;

    /**
     * @var string <p>xscan poc插件id</p>
     */
    public $XscanPocPluginId;

    /**
     * @var string <p>上一次扫描时间</p>
     */
    public $LastScanTime;

    /**
     * @param string $VulId <p>情报ID</p>
     * @param string $VulName <p>情报名称</p>
     * @param string $VulOverview <p>情报概述</p>
     * @param string $InsertTime <p>录入时间</p>
     * @param integer $RiskLevel <p>漏洞风险等级 1：低风险，2：中风险，3：高风险</p>
     * @param string $Tags <p>标签</p>
     * @param string $VulComponents <p>关联组件</p>
     * @param integer $BannerCount <p>相关指纹数量</p>
     * @param integer $VulAssetCount <p>漏洞资产数量</p>
     * @param string $LastTaskStatus <p>最新任务状态:todo/doing/done，如果为空表示没有任务</p>
     * @param string $LastTaskInstanceId <p>任务id</p>
     * @param string $XscanBannerPluginId <p>xscan指纹插件id</p>
     * @param string $XscanPocPluginId <p>xscan poc插件id</p>
     * @param string $LastScanTime <p>上一次扫描时间</p>
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

        if (array_key_exists("VulOverview",$param) and $param["VulOverview"] !== null) {
            $this->VulOverview = $param["VulOverview"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("VulComponents",$param) and $param["VulComponents"] !== null) {
            $this->VulComponents = $param["VulComponents"];
        }

        if (array_key_exists("BannerCount",$param) and $param["BannerCount"] !== null) {
            $this->BannerCount = $param["BannerCount"];
        }

        if (array_key_exists("VulAssetCount",$param) and $param["VulAssetCount"] !== null) {
            $this->VulAssetCount = $param["VulAssetCount"];
        }

        if (array_key_exists("LastTaskStatus",$param) and $param["LastTaskStatus"] !== null) {
            $this->LastTaskStatus = $param["LastTaskStatus"];
        }

        if (array_key_exists("LastTaskInstanceId",$param) and $param["LastTaskInstanceId"] !== null) {
            $this->LastTaskInstanceId = $param["LastTaskInstanceId"];
        }

        if (array_key_exists("XscanBannerPluginId",$param) and $param["XscanBannerPluginId"] !== null) {
            $this->XscanBannerPluginId = $param["XscanBannerPluginId"];
        }

        if (array_key_exists("XscanPocPluginId",$param) and $param["XscanPocPluginId"] !== null) {
            $this->XscanPocPluginId = $param["XscanPocPluginId"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }
    }
}

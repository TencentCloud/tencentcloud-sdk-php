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
 * 端口详情
 *
 * @method integer getId() 获取<p>主键ID</p>
 * @method void setId(integer $Id) 设置<p>主键ID</p>
 * @method DisplayToolCommon getDisplayToolCommon() 获取<p>公共字段</p>
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置<p>公共字段</p>
 * @method string getAsset() 获取<p>IP或域名地址</p>
 * @method void setAsset(string $Asset) 设置<p>IP或域名地址</p>
 * @method string getIp() 获取<p>解析的IP</p>
 * @method void setIp(string $Ip) 设置<p>解析的IP</p>
 * @method integer getPort() 获取<p>端口</p>
 * @method void setPort(integer $Port) 设置<p>端口</p>
 * @method boolean getIsHighRisk() 获取<p>是否高危</p>
 * @method void setIsHighRisk(boolean $IsHighRisk) 设置<p>是否高危</p>
 * @method string getApp() 获取<p>组件名称</p>
 * @method void setApp(string $App) 设置<p>组件名称</p>
 * @method string getService() 获取<p>服务名称</p>
 * @method void setService(string $Service) 设置<p>服务名称</p>
 * @method string getBanner() 获取<p>端口响应详情</p>
 * @method void setBanner(string $Banner) 设置<p>端口响应详情</p>
 * @method string getLastCheckTime() 获取<p>上次检测时间</p>
 * @method void setLastCheckTime(string $LastCheckTime) 设置<p>上次检测时间</p>
 * @method string getStatus() 获取<p>状态，close:连接超时，端口可能已关闭，open:端口开放, checking:复测中, ignore:已忽略</p>
 * @method void setStatus(string $Status) 设置<p>状态，close:连接超时，端口可能已关闭，open:端口开放, checking:复测中, ignore:已忽略</p>
 * @method integer getIsCloudAsset() 获取<p>是否为云资产：0-非云资产 1-是云资产</p>
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置<p>是否为云资产：0-非云资产 1-是云资产</p>
 * @method integer getCloudAssetStatus() 获取<p>云资产是否下线：-1-已下线 0-正常</p>
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置<p>云资产是否下线：-1-已下线 0-正常</p>
 * @method integer getAnalysisState() 获取<p>域名解析状态 1:异常 0:正常</p>
 * @method void setAnalysisState(integer $AnalysisState) 设置<p>域名解析状态 1:异常 0:正常</p>
 * @method integer getAggregationCount() 获取<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 * @method void setAggregationCount(integer $AggregationCount) 设置<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 */
class DisplayPort extends AbstractModel
{
    /**
     * @var integer <p>主键ID</p>
     */
    public $Id;

    /**
     * @var DisplayToolCommon <p>公共字段</p>
     */
    public $DisplayToolCommon;

    /**
     * @var string <p>IP或域名地址</p>
     */
    public $Asset;

    /**
     * @var string <p>解析的IP</p>
     */
    public $Ip;

    /**
     * @var integer <p>端口</p>
     */
    public $Port;

    /**
     * @var boolean <p>是否高危</p>
     */
    public $IsHighRisk;

    /**
     * @var string <p>组件名称</p>
     */
    public $App;

    /**
     * @var string <p>服务名称</p>
     */
    public $Service;

    /**
     * @var string <p>端口响应详情</p>
     */
    public $Banner;

    /**
     * @var string <p>上次检测时间</p>
     */
    public $LastCheckTime;

    /**
     * @var string <p>状态，close:连接超时，端口可能已关闭，open:端口开放, checking:复测中, ignore:已忽略</p>
     */
    public $Status;

    /**
     * @var integer <p>是否为云资产：0-非云资产 1-是云资产</p>
     */
    public $IsCloudAsset;

    /**
     * @var integer <p>云资产是否下线：-1-已下线 0-正常</p>
     */
    public $CloudAssetStatus;

    /**
     * @var integer <p>域名解析状态 1:异常 0:正常</p>
     */
    public $AnalysisState;

    /**
     * @var integer <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
     */
    public $AggregationCount;

    /**
     * @param integer $Id <p>主键ID</p>
     * @param DisplayToolCommon $DisplayToolCommon <p>公共字段</p>
     * @param string $Asset <p>IP或域名地址</p>
     * @param string $Ip <p>解析的IP</p>
     * @param integer $Port <p>端口</p>
     * @param boolean $IsHighRisk <p>是否高危</p>
     * @param string $App <p>组件名称</p>
     * @param string $Service <p>服务名称</p>
     * @param string $Banner <p>端口响应详情</p>
     * @param string $LastCheckTime <p>上次检测时间</p>
     * @param string $Status <p>状态，close:连接超时，端口可能已关闭，open:端口开放, checking:复测中, ignore:已忽略</p>
     * @param integer $IsCloudAsset <p>是否为云资产：0-非云资产 1-是云资产</p>
     * @param integer $CloudAssetStatus <p>云资产是否下线：-1-已下线 0-正常</p>
     * @param integer $AnalysisState <p>域名解析状态 1:异常 0:正常</p>
     * @param integer $AggregationCount <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
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

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("IsHighRisk",$param) and $param["IsHighRisk"] !== null) {
            $this->IsHighRisk = $param["IsHighRisk"];
        }

        if (array_key_exists("App",$param) and $param["App"] !== null) {
            $this->App = $param["App"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Banner",$param) and $param["Banner"] !== null) {
            $this->Banner = $param["Banner"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsCloudAsset",$param) and $param["IsCloudAsset"] !== null) {
            $this->IsCloudAsset = $param["IsCloudAsset"];
        }

        if (array_key_exists("CloudAssetStatus",$param) and $param["CloudAssetStatus"] !== null) {
            $this->CloudAssetStatus = $param["CloudAssetStatus"];
        }

        if (array_key_exists("AnalysisState",$param) and $param["AnalysisState"] !== null) {
            $this->AnalysisState = $param["AnalysisState"];
        }

        if (array_key_exists("AggregationCount",$param) and $param["AggregationCount"] !== null) {
            $this->AggregationCount = $param["AggregationCount"];
        }
    }
}

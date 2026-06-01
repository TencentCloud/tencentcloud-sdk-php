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
 * 后台详情
 *
 * @method integer getId() 获取<p>主键ID</p>
 * @method void setId(integer $Id) 设置<p>主键ID</p>
 * @method DisplayToolCommon getDisplayToolCommon() 获取<p>公共字段</p>
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置<p>公共字段</p>
 * @method string getUrl() 获取<p>Url</p>
 * @method void setUrl(string $Url) 设置<p>Url</p>
 * @method string getTitle() 获取<p>标题</p>
 * @method void setTitle(string $Title) 设置<p>标题</p>
 * @method string getIcon() 获取<p>Icon</p>
 * @method void setIcon(string $Icon) 设置<p>Icon</p>
 * @method string getScreenshot() 获取<p>缩略图</p>
 * @method void setScreenshot(string $Screenshot) 设置<p>缩略图</p>
 * @method integer getCode() 获取<p>状态码</p>
 * @method void setCode(integer $Code) 设置<p>状态码</p>
 * @method string getHost() 获取<p>后台Host</p>
 * @method void setHost(string $Host) 设置<p>后台Host</p>
 * @method string getStatus() 获取<p>状态：not_converged:未收敛, converged:已收敛, ignore:已忽略</p>
 * @method void setStatus(string $Status) 设置<p>状态：not_converged:未收敛, converged:已收敛, ignore:已忽略</p>
 * @method integer getIsCloudAsset() 获取<p>是否为云资产：0-非云资产 1-是云资产</p>
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置<p>是否为云资产：0-非云资产 1-是云资产</p>
 * @method integer getCloudAssetStatus() 获取<p>云资产是否下线：-1-已下线 0-正常</p>
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置<p>云资产是否下线：-1-已下线 0-正常</p>
 * @method integer getAggregationCount() 获取<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 * @method void setAggregationCount(integer $AggregationCount) 设置<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 */
class DisplayManage extends AbstractModel
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
     * @var string <p>Url</p>
     */
    public $Url;

    /**
     * @var string <p>标题</p>
     */
    public $Title;

    /**
     * @var string <p>Icon</p>
     */
    public $Icon;

    /**
     * @var string <p>缩略图</p>
     */
    public $Screenshot;

    /**
     * @var integer <p>状态码</p>
     */
    public $Code;

    /**
     * @var string <p>后台Host</p>
     */
    public $Host;

    /**
     * @var string <p>状态：not_converged:未收敛, converged:已收敛, ignore:已忽略</p>
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
     * @var integer <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
     */
    public $AggregationCount;

    /**
     * @param integer $Id <p>主键ID</p>
     * @param DisplayToolCommon $DisplayToolCommon <p>公共字段</p>
     * @param string $Url <p>Url</p>
     * @param string $Title <p>标题</p>
     * @param string $Icon <p>Icon</p>
     * @param string $Screenshot <p>缩略图</p>
     * @param integer $Code <p>状态码</p>
     * @param string $Host <p>后台Host</p>
     * @param string $Status <p>状态：not_converged:未收敛, converged:已收敛, ignore:已忽略</p>
     * @param integer $IsCloudAsset <p>是否为云资产：0-非云资产 1-是云资产</p>
     * @param integer $CloudAssetStatus <p>云资产是否下线：-1-已下线 0-正常</p>
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("Screenshot",$param) and $param["Screenshot"] !== null) {
            $this->Screenshot = $param["Screenshot"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
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

        if (array_key_exists("AggregationCount",$param) and $param["AggregationCount"] !== null) {
            $this->AggregationCount = $param["AggregationCount"];
        }
    }
}

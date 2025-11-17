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
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getUrl() 获取Url
 * @method void setUrl(string $Url) 设置Url
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getIcon() 获取Icon
 * @method void setIcon(string $Icon) 设置Icon
 * @method string getScreenshot() 获取缩略图
 * @method void setScreenshot(string $Screenshot) 设置缩略图
 * @method integer getCode() 获取状态码
 * @method void setCode(integer $Code) 设置状态码
 * @method string getHost() 获取后台Host
 * @method void setHost(string $Host) 设置后台Host
 * @method string getStatus() 获取状态：not_converged:未收敛, converged:已收敛, ignore:已忽略

 * @method void setStatus(string $Status) 设置状态：not_converged:未收敛, converged:已收敛, ignore:已忽略

 * @method integer getIsCloudAsset() 获取是否为云资产：0-非云资产 1-是云资产
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置是否为云资产：0-非云资产 1-是云资产
 * @method integer getCloudAssetStatus() 获取云资产是否下线：-1-已下线 0-正常
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置云资产是否下线：-1-已下线 0-正常
 */
class DisplayManage extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string Url
     */
    public $Url;

    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string Icon
     */
    public $Icon;

    /**
     * @var string 缩略图
     */
    public $Screenshot;

    /**
     * @var integer 状态码
     */
    public $Code;

    /**
     * @var string 后台Host
     */
    public $Host;

    /**
     * @var string 状态：not_converged:未收敛, converged:已收敛, ignore:已忽略

     */
    public $Status;

    /**
     * @var integer 是否为云资产：0-非云资产 1-是云资产
     */
    public $IsCloudAsset;

    /**
     * @var integer 云资产是否下线：-1-已下线 0-正常
     */
    public $CloudAssetStatus;

    /**
     * @param integer $Id 主键ID
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Url Url
     * @param string $Title 标题
     * @param string $Icon Icon
     * @param string $Screenshot 缩略图
     * @param integer $Code 状态码
     * @param string $Host 后台Host
     * @param string $Status 状态：not_converged:未收敛, converged:已收敛, ignore:已忽略

     * @param integer $IsCloudAsset 是否为云资产：0-非云资产 1-是云资产
     * @param integer $CloudAssetStatus 云资产是否下线：-1-已下线 0-正常
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
    }
}

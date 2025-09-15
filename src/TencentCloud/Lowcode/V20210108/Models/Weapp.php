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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 低码应用详情
 *
 * @method string getId() 获取应用id
 * @method void setId(string $Id) 设置应用id
 * @method string getOwner() 获取应用所属者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置应用所属者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取标识
 * @method void setName(string $Name) 设置标识
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取应用名称
 * @method void setTitle(string $Title) 设置应用名称
 * @method string getEnv() 获取环境信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnv(string $Env) 设置环境信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态.
0:已经安装
3:安装中
4:安装失败
 * @method void setStatus(integer $Status) 设置状态.
0:已经安装
3:安装中
4:安装失败
 * @method string getEnvId() 获取环境信息
 * @method void setEnvId(string $EnvId) 设置环境信息
 * @method string getEnvRegion() 获取环境地域
 * @method void setEnvRegion(string $EnvRegion) 设置环境地域
 * @method string getPkgId() 获取资源包
 * @method void setPkgId(string $PkgId) 设置资源包
 * @method integer getCmsProject() 获取应用信息是否安装到cms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmsProject(integer $CmsProject) 设置应用信息是否安装到cms
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannel() 获取渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannel(string $Channel) 设置渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateId() 获取模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getSource() 获取来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsFree() 获取是否计费应用
 * @method void setIsFree(boolean $IsFree) 设置是否计费应用
 * @method string getContentType() 获取应用内容类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentType(string $ContentType) 设置应用内容类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppType() 获取应用类型，是否为B端应用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppType(integer $AppType) 设置应用类型，是否为B端应用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttachAppId() 获取关联B端一样id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachAppId(string $AttachAppId) 设置关联B端一样id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEType() 获取应用类型，是否为企业应用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEType(integer $EType) 设置应用类型，是否为企业应用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEData() 获取企业应用数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEData(string $EData) 设置企业应用数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastMpCiId() 获取最新一次小程序构建id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastMpCiId(string $LastMpCiId) 设置最新一次小程序构建id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastMpCiStatus() 获取最新一次小程序状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastMpCiStatus(string $LastMpCiStatus) 设置最新一次小程序状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastWebCiId() 获取最新一次web构建id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastWebCiId(string $LastWebCiId) 设置最新一次web构建id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastWebCiStatus() 获取最新一次web状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastWebCiStatus(string $LastWebCiStatus) 设置最新一次web状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastDeployTime() 获取最新部署时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastDeployTime(string $LastDeployTime) 设置最新部署时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlowId() 获取安装任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowId(integer $FlowId) 设置安装任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppJobInfo getJobInfo() 获取任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobInfo(AppJobInfo $JobInfo) 设置任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlatform() 获取应用端
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlatform(string $Platform) 设置应用端
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastWebCiMode() 获取最新一次web构建模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastWebCiMode(integer $LastWebCiMode) 设置最新一次web构建模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastMpCiMode() 获取最新一次小程序构建模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastMpCiMode(integer $LastMpCiMode) 设置最新一次小程序构建模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSceneType() 获取应用场景化入口类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneType(string $SceneType) 设置应用场景化入口类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientId() 获取client_Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientId(string $ClientId) 设置client_Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIconUrl() 获取图标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIconUrl(string $IconUrl) 设置图标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFaviconUrl() 获取页面图标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaviconUrl(string $FaviconUrl) 设置页面图标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackgroundColor() 获取图标背景色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackgroundColor(string $BackgroundColor) 设置图标背景色
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getFavorite() 获取应用是否收藏
 * @method void setFavorite(boolean $Favorite) 设置应用是否收藏
 * @method string getPublishPlatform() 获取发布平台：web、mp、pc、adminPortal、xPagePC、cloudAdmin
 * @method void setPublishPlatform(string $PublishPlatform) 设置发布平台：web、mp、pc、adminPortal、xPagePC、cloudAdmin
 */
class Weapp extends AbstractModel
{
    /**
     * @var string 应用id
     */
    public $Id;

    /**
     * @var string 应用所属者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string 标识
     */
    public $Name;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 应用名称
     */
    public $Title;

    /**
     * @var string 环境信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Env;

    /**
     * @var integer 状态.
0:已经安装
3:安装中
4:安装失败
     */
    public $Status;

    /**
     * @var string 环境信息
     */
    public $EnvId;

    /**
     * @var string 环境地域
     */
    public $EnvRegion;

    /**
     * @var string 资源包
     */
    public $PkgId;

    /**
     * @var integer 应用信息是否安装到cms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CmsProject;

    /**
     * @var string 渠道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Channel;

    /**
     * @var string 模板id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var boolean 是否计费应用
     */
    public $IsFree;

    /**
     * @var string 应用内容类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentType;

    /**
     * @var integer 应用类型，是否为B端应用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppType;

    /**
     * @var string 关联B端一样id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachAppId;

    /**
     * @var integer 应用类型，是否为企业应用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EType;

    /**
     * @var string 企业应用数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EData;

    /**
     * @var string 最新一次小程序构建id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastMpCiId;

    /**
     * @var string 最新一次小程序状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastMpCiStatus;

    /**
     * @var string 最新一次web构建id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastWebCiId;

    /**
     * @var string 最新一次web状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastWebCiStatus;

    /**
     * @var string 最新部署时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastDeployTime;

    /**
     * @var integer 安装任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowId;

    /**
     * @var AppJobInfo 任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobInfo;

    /**
     * @var string 应用端
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Platform;

    /**
     * @var integer 最新一次web构建模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastWebCiMode;

    /**
     * @var integer 最新一次小程序构建模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastMpCiMode;

    /**
     * @var string 应用场景化入口类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneType;

    /**
     * @var string client_Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientId;

    /**
     * @var string 图标地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IconUrl;

    /**
     * @var string 页面图标地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaviconUrl;

    /**
     * @var string 图标背景色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackgroundColor;

    /**
     * @var boolean 应用是否收藏
     */
    public $Favorite;

    /**
     * @var string 发布平台：web、mp、pc、adminPortal、xPagePC、cloudAdmin
     */
    public $PublishPlatform;

    /**
     * @param string $Id 应用id
     * @param string $Owner 应用所属者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 标识
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 应用名称
     * @param string $Env 环境信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态.
0:已经安装
3:安装中
4:安装失败
     * @param string $EnvId 环境信息
     * @param string $EnvRegion 环境地域
     * @param string $PkgId 资源包
     * @param integer $CmsProject 应用信息是否安装到cms
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Channel 渠道
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateId 模板id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $Source 来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsFree 是否计费应用
     * @param string $ContentType 应用内容类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppType 应用类型，是否为B端应用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttachAppId 关联B端一样id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EType 应用类型，是否为企业应用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EData 企业应用数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastMpCiId 最新一次小程序构建id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastMpCiStatus 最新一次小程序状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastWebCiId 最新一次web构建id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastWebCiStatus 最新一次web状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastDeployTime 最新部署时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FlowId 安装任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppJobInfo $JobInfo 任务详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Platform 应用端
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastWebCiMode 最新一次web构建模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastMpCiMode 最新一次小程序构建模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SceneType 应用场景化入口类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientId client_Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IconUrl 图标地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FaviconUrl 页面图标地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackgroundColor 图标背景色
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Favorite 应用是否收藏
     * @param string $PublishPlatform 发布平台：web、mp、pc、adminPortal、xPagePC、cloudAdmin
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("EnvRegion",$param) and $param["EnvRegion"] !== null) {
            $this->EnvRegion = $param["EnvRegion"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("CmsProject",$param) and $param["CmsProject"] !== null) {
            $this->CmsProject = $param["CmsProject"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("IsFree",$param) and $param["IsFree"] !== null) {
            $this->IsFree = $param["IsFree"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("AttachAppId",$param) and $param["AttachAppId"] !== null) {
            $this->AttachAppId = $param["AttachAppId"];
        }

        if (array_key_exists("EType",$param) and $param["EType"] !== null) {
            $this->EType = $param["EType"];
        }

        if (array_key_exists("EData",$param) and $param["EData"] !== null) {
            $this->EData = $param["EData"];
        }

        if (array_key_exists("LastMpCiId",$param) and $param["LastMpCiId"] !== null) {
            $this->LastMpCiId = $param["LastMpCiId"];
        }

        if (array_key_exists("LastMpCiStatus",$param) and $param["LastMpCiStatus"] !== null) {
            $this->LastMpCiStatus = $param["LastMpCiStatus"];
        }

        if (array_key_exists("LastWebCiId",$param) and $param["LastWebCiId"] !== null) {
            $this->LastWebCiId = $param["LastWebCiId"];
        }

        if (array_key_exists("LastWebCiStatus",$param) and $param["LastWebCiStatus"] !== null) {
            $this->LastWebCiStatus = $param["LastWebCiStatus"];
        }

        if (array_key_exists("LastDeployTime",$param) and $param["LastDeployTime"] !== null) {
            $this->LastDeployTime = $param["LastDeployTime"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("JobInfo",$param) and $param["JobInfo"] !== null) {
            $this->JobInfo = new AppJobInfo();
            $this->JobInfo->deserialize($param["JobInfo"]);
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("LastWebCiMode",$param) and $param["LastWebCiMode"] !== null) {
            $this->LastWebCiMode = $param["LastWebCiMode"];
        }

        if (array_key_exists("LastMpCiMode",$param) and $param["LastMpCiMode"] !== null) {
            $this->LastMpCiMode = $param["LastMpCiMode"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("FaviconUrl",$param) and $param["FaviconUrl"] !== null) {
            $this->FaviconUrl = $param["FaviconUrl"];
        }

        if (array_key_exists("BackgroundColor",$param) and $param["BackgroundColor"] !== null) {
            $this->BackgroundColor = $param["BackgroundColor"];
        }

        if (array_key_exists("Favorite",$param) and $param["Favorite"] !== null) {
            $this->Favorite = $param["Favorite"];
        }

        if (array_key_exists("PublishPlatform",$param) and $param["PublishPlatform"] !== null) {
            $this->PublishPlatform = $param["PublishPlatform"];
        }
    }
}

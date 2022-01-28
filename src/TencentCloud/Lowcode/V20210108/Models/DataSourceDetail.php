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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源详情列表
 *
 * @method string getId() 获取数据源 ID
 * @method void setId(string $Id) 设置数据源 ID
 * @method string getTitle() 获取数据源名称
 * @method void setTitle(string $Title) 设置数据源名称
 * @method string getName() 获取数据源标识
 * @method void setName(string $Name) 设置数据源标识
 * @method string getType() 获取数据源类型
 * @method void setType(string $Type) 设置数据源类型
 * @method string getDescription() 获取数据源描述
 * @method void setDescription(string $Description) 设置数据源描述
 * @method string getSchema() 获取数据源配置
 * @method void setSchema(string $Schema) 设置数据源配置
 * @method string getCmsProject() 获取cms 项目状态, 0: 重新获取详情信息，1： 不需要重新获取详情信息
 * @method void setCmsProject(string $CmsProject) 设置cms 项目状态, 0: 重新获取详情信息，1： 不需要重新获取详情信息
 * @method string getPkgId() 获取当前为环境 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgId(string $PkgId) 设置当前为环境 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaVersion() 获取schema 版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaVersion(string $SchemaVersion) 设置schema 版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorId() 获取创建者用户 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorId(string $CreatorId) 设置创建者用户 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvId() 获取环境 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvId(string $EnvId) 设置环境 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceVersion() 获取版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceVersion(string $DataSourceVersion) 设置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAppUsageList() 获取所属应用数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppUsageList(array $AppUsageList) 设置所属应用数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublishedAt() 获取发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishedAt(string $PublishedAt) 设置发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildDataSourceIds() 获取子数据源ids
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildDataSourceIds(array $ChildDataSourceIds) 设置子数据源ids
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFun() 获取数据源发布信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFun(string $Fun) 设置数据源发布信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScfStatus() 获取云函数状态 1 Active 2 Creating 3 Updating 4 Deleting  9 Deleted 11 CreatFailed  12 UpdateFailed 13 DeleteFailed 21 UpdateTimeOut
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScfStatus(integer $ScfStatus) 设置云函数状态 1 Active 2 Creating 3 Updating 4 Deleting  9 Deleted 11 CreatFailed  12 UpdateFailed 13 DeleteFailed 21 UpdateTimeOut
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMethods() 获取自定义方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethods(string $Methods) 设置自定义方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildDataSourceNames() 获取子数据源名数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildDataSourceNames(array $ChildDataSourceNames) 设置子数据源名数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNewDataSource() 获取是否旧数据源 1 新 0 旧
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNewDataSource(integer $IsNewDataSource) 设置是否旧数据源 1 新 0 旧
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getViewId() 获取数据源视图id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViewId(string $ViewId) 设置数据源视图id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfiguration() 获取数据源属性配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfiguration(string $Configuration) 设置数据源属性配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateCode() 获取外部数据源模板code
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateCode(string $TemplateCode) 设置外部数据源模板code
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSource() 获取外部数据源模板来源 0 空模板 1 腾讯文档 2 腾讯会议 3 企业微信 4 微信电商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置外部数据源模板来源 0 空模板 1 腾讯文档 2 腾讯会议 3 企业微信 4 微信电商
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublishVersion() 获取发布版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishVersion(string $PublishVersion) 设置发布版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublishViewId() 获取发布视图id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishViewId(string $PublishViewId) 设置发布视图id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubType() 获取数据源子类型   "database" 标准模型 "custom-database" 自定义模型 "system" 系统模型 "connector" 连接器 "custom-connector" 自定义连接器 "hidden" 隐藏数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubType(string $SubType) 设置数据源子类型   "database" 标准模型 "custom-database" 自定义模型 "system" 系统模型 "connector" 连接器 "custom-connector" 自定义连接器 "hidden" 隐藏数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthStatus() 获取授权状态  0 授权无效 1 授权有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthStatus(integer $AuthStatus) 设置授权状态  0 授权无效 1 授权有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method TicketAuthInfo getAuthInfo() 获取数据源授权信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthInfo(TicketAuthInfo $AuthInfo) 设置数据源授权信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataSourceDetail extends AbstractModel
{
    /**
     * @var string 数据源 ID
     */
    public $Id;

    /**
     * @var string 数据源名称
     */
    public $Title;

    /**
     * @var string 数据源标识
     */
    public $Name;

    /**
     * @var string 数据源类型
     */
    public $Type;

    /**
     * @var string 数据源描述
     */
    public $Description;

    /**
     * @var string 数据源配置
     */
    public $Schema;

    /**
     * @var string cms 项目状态, 0: 重新获取详情信息，1： 不需要重新获取详情信息
     */
    public $CmsProject;

    /**
     * @var string 当前为环境 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgId;

    /**
     * @var string schema 版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaVersion;

    /**
     * @var string 创建者用户 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 环境 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvId;

    /**
     * @var string 版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceVersion;

    /**
     * @var array 所属应用数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppUsageList;

    /**
     * @var string 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishedAt;

    /**
     * @var array 子数据源ids
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildDataSourceIds;

    /**
     * @var string 数据源发布信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fun;

    /**
     * @var integer 云函数状态 1 Active 2 Creating 3 Updating 4 Deleting  9 Deleted 11 CreatFailed  12 UpdateFailed 13 DeleteFailed 21 UpdateTimeOut
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScfStatus;

    /**
     * @var string 自定义方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Methods;

    /**
     * @var array 子数据源名数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildDataSourceNames;

    /**
     * @var integer 是否旧数据源 1 新 0 旧
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNewDataSource;

    /**
     * @var string 数据源视图id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ViewId;

    /**
     * @var string 数据源属性配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Configuration;

    /**
     * @var string 外部数据源模板code
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateCode;

    /**
     * @var integer 外部数据源模板来源 0 空模板 1 腾讯文档 2 腾讯会议 3 企业微信 4 微信电商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 发布版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishVersion;

    /**
     * @var string 发布视图id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishViewId;

    /**
     * @var string 数据源子类型   "database" 标准模型 "custom-database" 自定义模型 "system" 系统模型 "connector" 连接器 "custom-connector" 自定义连接器 "hidden" 隐藏数据源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubType;

    /**
     * @var integer 授权状态  0 授权无效 1 授权有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthStatus;

    /**
     * @var TicketAuthInfo 数据源授权信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthInfo;

    /**
     * @param string $Id 数据源 ID
     * @param string $Title 数据源名称
     * @param string $Name 数据源标识
     * @param string $Type 数据源类型
     * @param string $Description 数据源描述
     * @param string $Schema 数据源配置
     * @param string $CmsProject cms 项目状态, 0: 重新获取详情信息，1： 不需要重新获取详情信息
     * @param string $PkgId 当前为环境 id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaVersion schema 版本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorId 创建者用户 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvId 环境 id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceVersion 版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AppUsageList 所属应用数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublishedAt 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChildDataSourceIds 子数据源ids
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fun 数据源发布信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScfStatus 云函数状态 1 Active 2 Creating 3 Updating 4 Deleting  9 Deleted 11 CreatFailed  12 UpdateFailed 13 DeleteFailed 21 UpdateTimeOut
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Methods 自定义方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChildDataSourceNames 子数据源名数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNewDataSource 是否旧数据源 1 新 0 旧
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ViewId 数据源视图id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Configuration 数据源属性配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateCode 外部数据源模板code
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Source 外部数据源模板来源 0 空模板 1 腾讯文档 2 腾讯会议 3 企业微信 4 微信电商
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublishVersion 发布版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublishViewId 发布视图id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubType 数据源子类型   "database" 标准模型 "custom-database" 自定义模型 "system" 系统模型 "connector" 连接器 "custom-connector" 自定义连接器 "hidden" 隐藏数据源
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthStatus 授权状态  0 授权无效 1 授权有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param TicketAuthInfo $AuthInfo 数据源授权信息
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("CmsProject",$param) and $param["CmsProject"] !== null) {
            $this->CmsProject = $param["CmsProject"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("SchemaVersion",$param) and $param["SchemaVersion"] !== null) {
            $this->SchemaVersion = $param["SchemaVersion"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("DataSourceVersion",$param) and $param["DataSourceVersion"] !== null) {
            $this->DataSourceVersion = $param["DataSourceVersion"];
        }

        if (array_key_exists("AppUsageList",$param) and $param["AppUsageList"] !== null) {
            $this->AppUsageList = [];
            foreach ($param["AppUsageList"] as $key => $value){
                $obj = new DataSourceLinkApp();
                $obj->deserialize($value);
                array_push($this->AppUsageList, $obj);
            }
        }

        if (array_key_exists("PublishedAt",$param) and $param["PublishedAt"] !== null) {
            $this->PublishedAt = $param["PublishedAt"];
        }

        if (array_key_exists("ChildDataSourceIds",$param) and $param["ChildDataSourceIds"] !== null) {
            $this->ChildDataSourceIds = $param["ChildDataSourceIds"];
        }

        if (array_key_exists("Fun",$param) and $param["Fun"] !== null) {
            $this->Fun = $param["Fun"];
        }

        if (array_key_exists("ScfStatus",$param) and $param["ScfStatus"] !== null) {
            $this->ScfStatus = $param["ScfStatus"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("ChildDataSourceNames",$param) and $param["ChildDataSourceNames"] !== null) {
            $this->ChildDataSourceNames = $param["ChildDataSourceNames"];
        }

        if (array_key_exists("IsNewDataSource",$param) and $param["IsNewDataSource"] !== null) {
            $this->IsNewDataSource = $param["IsNewDataSource"];
        }

        if (array_key_exists("ViewId",$param) and $param["ViewId"] !== null) {
            $this->ViewId = $param["ViewId"];
        }

        if (array_key_exists("Configuration",$param) and $param["Configuration"] !== null) {
            $this->Configuration = $param["Configuration"];
        }

        if (array_key_exists("TemplateCode",$param) and $param["TemplateCode"] !== null) {
            $this->TemplateCode = $param["TemplateCode"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("PublishVersion",$param) and $param["PublishVersion"] !== null) {
            $this->PublishVersion = $param["PublishVersion"];
        }

        if (array_key_exists("PublishViewId",$param) and $param["PublishViewId"] !== null) {
            $this->PublishViewId = $param["PublishViewId"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }

        if (array_key_exists("AuthInfo",$param) and $param["AuthInfo"] !== null) {
            $this->AuthInfo = new TicketAuthInfo();
            $this->AuthInfo->deserialize($param["AuthInfo"]);
        }
    }
}

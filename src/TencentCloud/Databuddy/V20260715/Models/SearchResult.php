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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统一搜索返回结果
 *
 * @method string getFullName() 获取<p>资产全名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullName(string $FullName) 设置<p>资产全名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetGuid() 获取<p>资产全局ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetGuid(string $AssetGuid) 设置<p>资产全局ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetId() 获取<p>各资产类别下的唯一ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetId(string $AssetId) 设置<p>各资产类别下的唯一ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetName() 获取<p>资产名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置<p>资产名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取<p>资产类型，参见ListEntityTypeMetas返回的EntityType</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置<p>资产类型，参见ListEntityTypeMetas返回的EntityType</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserActivityInfo getUserActivityInfo() 获取<p>用户活动</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserActivityInfo(UserActivityInfo $UserActivityInfo) 设置<p>用户活动</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPopularity() 获取<p>热度，值范围：[1,2,3,4]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPopularity(string $Popularity) 设置<p>热度，值范围：[1,2,3,4]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>资产标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>资产标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Owner getOwner() 获取<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(Owner $Owner) 设置<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取<p>最近更新时间，毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>最近更新时间，毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceId() 获取<p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceFolderPath() 获取<p>工作空间文件夹路径（废弃）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceFolderPath(string $WorkspaceFolderPath) 设置<p>工作空间文件夹路径（废弃）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHighlighting() 获取<p>高亮(废弃)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighlighting(array $Highlighting) 设置<p>高亮(废弃)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取<p>各类资产扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置<p>各类资产扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspacePath() 获取<p>工作空间文件夹路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspacePath(string $WorkspacePath) 设置<p>工作空间文件夹路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFieldInfo() 获取<p>字段信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldInfo(array $FieldInfo) 设置<p>字段信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSignalLevel() 获取<p>废弃</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignalLevel(string $SignalLevel) 设置<p>废弃</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPopularityQuantity() 获取<p>热度值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPopularityQuantity(string $PopularityQuantity) 设置<p>热度值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HighlightingInfo getHighlightingInfo() 获取<p>高亮</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighlightingInfo(HighlightingInfo $HighlightingInfo) 设置<p>高亮</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFieldTags() 获取<p>字段标签列表，返回资产下所有字段上打的标签信息，用于展示字段级标签；每项包含 LabelId、LabelName、LabelType、FieldName、FieldType</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldTags(array $FieldTags) 设置<p>字段标签列表，返回资产下所有字段上打的标签信息，用于展示字段级标签；每项包含 LabelId、LabelName、LabelType、FieldName、FieldType</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAliases() 获取<p>资产别名列表。使用场景：仅指标、语义模型等业务资产支持多别名，其他资产类型返回空列表。前端可选择在资产名后面以【别名1、别名2】的形式展示</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliases(array $Aliases) 设置<p>资产别名列表。使用场景：仅指标、语义模型等业务资产支持多别名，其他资产类型返回空列表。前端可选择在资产名后面以【别名1、别名2】的形式展示</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogSource() 获取<p>资产元数据来源。取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。仅catalog类资产（CATALOG/SCHEMA/TABLE/VIEW/MODEL/VOLUME/FUNCTION/TABLE_COLUMN）返回该字段，非catalog类资产该字段为空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogSource(string $CatalogSource) 设置<p>资产元数据来源。取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。仅catalog类资产（CATALOG/SCHEMA/TABLE/VIEW/MODEL/VOLUME/FUNCTION/TABLE_COLUMN）返回该字段，非catalog类资产该字段为空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchResult extends AbstractModel
{
    /**
     * @var string <p>资产全名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullName;

    /**
     * @var string <p>资产全局ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetGuid;

    /**
     * @var string <p>各资产类别下的唯一ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetId;

    /**
     * @var string <p>资产名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var string <p>资产类型，参见ListEntityTypeMetas返回的EntityType</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var UserActivityInfo <p>用户活动</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserActivityInfo;

    /**
     * @var string <p>热度，值范围：[1,2,3,4]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Popularity;

    /**
     * @var array <p>资产标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var Owner <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string <p>最近更新时间，毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string <p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string <p>工作空间文件夹路径（废弃）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceFolderPath;

    /**
     * @var array <p>高亮(废弃)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Highlighting;

    /**
     * @var array <p>各类资产扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var string <p>工作空间文件夹路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspacePath;

    /**
     * @var array <p>字段信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldInfo;

    /**
     * @var string <p>废弃</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignalLevel;

    /**
     * @var string <p>热度值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PopularityQuantity;

    /**
     * @var HighlightingInfo <p>高亮</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighlightingInfo;

    /**
     * @var array <p>字段标签列表，返回资产下所有字段上打的标签信息，用于展示字段级标签；每项包含 LabelId、LabelName、LabelType、FieldName、FieldType</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldTags;

    /**
     * @var array <p>资产别名列表。使用场景：仅指标、语义模型等业务资产支持多别名，其他资产类型返回空列表。前端可选择在资产名后面以【别名1、别名2】的形式展示</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Aliases;

    /**
     * @var string <p>资产元数据来源。取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。仅catalog类资产（CATALOG/SCHEMA/TABLE/VIEW/MODEL/VOLUME/FUNCTION/TABLE_COLUMN）返回该字段，非catalog类资产该字段为空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogSource;

    /**
     * @param string $FullName <p>资产全名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetGuid <p>资产全局ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetId <p>各资产类别下的唯一ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetName <p>资产名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType <p>资产类型，参见ListEntityTypeMetas返回的EntityType</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserActivityInfo $UserActivityInfo <p>用户活动</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Popularity <p>热度，值范围：[1,2,3,4]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>资产标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Owner $Owner <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime <p>最近更新时间，毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceId <p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceFolderPath <p>工作空间文件夹路径（废弃）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Highlighting <p>高亮(废弃)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties <p>各类资产扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspacePath <p>工作空间文件夹路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FieldInfo <p>字段信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SignalLevel <p>废弃</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PopularityQuantity <p>热度值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HighlightingInfo $HighlightingInfo <p>高亮</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FieldTags <p>字段标签列表，返回资产下所有字段上打的标签信息，用于展示字段级标签；每项包含 LabelId、LabelName、LabelType、FieldName、FieldType</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Aliases <p>资产别名列表。使用场景：仅指标、语义模型等业务资产支持多别名，其他资产类型返回空列表。前端可选择在资产名后面以【别名1、别名2】的形式展示</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogSource <p>资产元数据来源。取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。仅catalog类资产（CATALOG/SCHEMA/TABLE/VIEW/MODEL/VOLUME/FUNCTION/TABLE_COLUMN）返回该字段，非catalog类资产该字段为空字符串。</p>
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
        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("AssetGuid",$param) and $param["AssetGuid"] !== null) {
            $this->AssetGuid = $param["AssetGuid"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("UserActivityInfo",$param) and $param["UserActivityInfo"] !== null) {
            $this->UserActivityInfo = new UserActivityInfo();
            $this->UserActivityInfo->deserialize($param["UserActivityInfo"]);
        }

        if (array_key_exists("Popularity",$param) and $param["Popularity"] !== null) {
            $this->Popularity = $param["Popularity"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Owner();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("WorkspaceFolderPath",$param) and $param["WorkspaceFolderPath"] !== null) {
            $this->WorkspaceFolderPath = $param["WorkspaceFolderPath"];
        }

        if (array_key_exists("Highlighting",$param) and $param["Highlighting"] !== null) {
            $this->Highlighting = [];
            foreach ($param["Highlighting"] as $key => $value){
                $obj = new Highlighting();
                $obj->deserialize($value);
                array_push($this->Highlighting, $obj);
            }
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("WorkspacePath",$param) and $param["WorkspacePath"] !== null) {
            $this->WorkspacePath = $param["WorkspacePath"];
        }

        if (array_key_exists("FieldInfo",$param) and $param["FieldInfo"] !== null) {
            $this->FieldInfo = [];
            foreach ($param["FieldInfo"] as $key => $value){
                $obj = new FieldInfo();
                $obj->deserialize($value);
                array_push($this->FieldInfo, $obj);
            }
        }

        if (array_key_exists("SignalLevel",$param) and $param["SignalLevel"] !== null) {
            $this->SignalLevel = $param["SignalLevel"];
        }

        if (array_key_exists("PopularityQuantity",$param) and $param["PopularityQuantity"] !== null) {
            $this->PopularityQuantity = $param["PopularityQuantity"];
        }

        if (array_key_exists("HighlightingInfo",$param) and $param["HighlightingInfo"] !== null) {
            $this->HighlightingInfo = new HighlightingInfo();
            $this->HighlightingInfo->deserialize($param["HighlightingInfo"]);
        }

        if (array_key_exists("FieldTags",$param) and $param["FieldTags"] !== null) {
            $this->FieldTags = [];
            foreach ($param["FieldTags"] as $key => $value){
                $obj = new FieldTagInfo();
                $obj->deserialize($value);
                array_push($this->FieldTags, $obj);
            }
        }

        if (array_key_exists("Aliases",$param) and $param["Aliases"] !== null) {
            $this->Aliases = $param["Aliases"];
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }
    }
}

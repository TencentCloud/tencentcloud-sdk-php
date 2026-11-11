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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引元数据字段
 *
 * @method string getIndexType() 获取<p>索引类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexType(string $IndexType) 设置<p>索引类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexName() 获取<p>索引名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexName(string $IndexName) 设置<p>索引名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexMetaJson() 获取<p>索引元数据JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexMetaJson(string $IndexMetaJson) 设置<p>索引元数据JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexStatus() 获取<p>索引状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexStatus(string $IndexStatus) 设置<p>索引状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexStorage() 获取<p>索引存储大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexStorage(integer $IndexStorage) 设置<p>索引存储大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexCreateTime() 获取<p>索引创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexCreateTime(string $IndexCreateTime) 设置<p>索引创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackingIndices() 获取<p>后备索引</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackingIndices(array $BackingIndices) 设置<p>后备索引</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>索引所属集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>索引所属集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取<p>索引所属集群名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置<p>索引所属集群名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterVersion() 获取<p>索引所属集群版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterVersion(string $ClusterVersion) 设置<p>索引所属集群版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method IndexPolicyField getIndexPolicyField() 获取<p>索引生命周期字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexPolicyField(IndexPolicyField $IndexPolicyField) 设置<p>索引生命周期字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method IndexOptionsField getIndexOptionsField() 获取<p>索引自治字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexOptionsField(IndexOptionsField $IndexOptionsField) 设置<p>索引自治字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method IndexSettingsField getIndexSettingsField() 获取<p>索引配置字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexSettingsField(IndexSettingsField $IndexSettingsField) 设置<p>索引配置字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndexAliasesField() 获取<p>索引别名字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexAliasesField(array $IndexAliasesField) 设置<p>索引别名字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>索引所属集群APP ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>索引所属集群APP ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexDocs() 获取<p>索引文档数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexDocs(integer $IndexDocs) 设置<p>索引文档数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFieldCount() 获取<p>当前字段数</p>
 * @method void setFieldCount(integer $FieldCount) 设置<p>当前字段数</p>
 * @method integer getFieldLimit() 获取<p>当前上限</p>
 * @method void setFieldLimit(integer $FieldLimit) 设置<p>当前上限</p>
 * @method string getFieldUsageRatio() 获取<p>使用率</p>
 * @method void setFieldUsageRatio(string $FieldUsageRatio) 设置<p>使用率</p>
 * @method integer getOccupiedShards() 获取<p>占用分片数</p>
 * @method void setOccupiedShards(integer $OccupiedShards) 设置<p>占用分片数</p>
 * @method string getIndexOpenStatus() 获取<p>索引开启状态</p>
 * @method void setIndexOpenStatus(string $IndexOpenStatus) 设置<p>索引开启状态</p>
 * @method integer getFieldLimitHardCap() 获取<p>索引字段数硬上限</p>
 * @method void setFieldLimitHardCap(integer $FieldLimitHardCap) 设置<p>索引字段数硬上限</p>
 * @method integer getFieldLimitMin() 获取<p>上限可调整最小值</p>
 * @method void setFieldLimitMin(integer $FieldLimitMin) 设置<p>上限可调整最小值</p>
 * @method integer getFieldAutoAdjustRemaining() 获取<p>剩余调整次数</p>
 * @method void setFieldAutoAdjustRemaining(integer $FieldAutoAdjustRemaining) 设置<p>剩余调整次数</p>
 */
class IndexMetaField extends AbstractModel
{
    /**
     * @var string <p>索引类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexType;

    /**
     * @var string <p>索引名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexName;

    /**
     * @var string <p>索引元数据JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexMetaJson;

    /**
     * @var string <p>索引状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexStatus;

    /**
     * @var integer <p>索引存储大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexStorage;

    /**
     * @var string <p>索引创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexCreateTime;

    /**
     * @var array <p>后备索引</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackingIndices;

    /**
     * @var string <p>索引所属集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>索引所属集群名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string <p>索引所属集群版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterVersion;

    /**
     * @var IndexPolicyField <p>索引生命周期字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexPolicyField;

    /**
     * @var IndexOptionsField <p>索引自治字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexOptionsField;

    /**
     * @var IndexSettingsField <p>索引配置字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexSettingsField;

    /**
     * @var array <p>索引别名字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexAliasesField;

    /**
     * @var integer <p>索引所属集群APP ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var integer <p>索引文档数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexDocs;

    /**
     * @var integer <p>当前字段数</p>
     */
    public $FieldCount;

    /**
     * @var integer <p>当前上限</p>
     */
    public $FieldLimit;

    /**
     * @var string <p>使用率</p>
     */
    public $FieldUsageRatio;

    /**
     * @var integer <p>占用分片数</p>
     */
    public $OccupiedShards;

    /**
     * @var string <p>索引开启状态</p>
     */
    public $IndexOpenStatus;

    /**
     * @var integer <p>索引字段数硬上限</p>
     */
    public $FieldLimitHardCap;

    /**
     * @var integer <p>上限可调整最小值</p>
     */
    public $FieldLimitMin;

    /**
     * @var integer <p>剩余调整次数</p>
     */
    public $FieldAutoAdjustRemaining;

    /**
     * @param string $IndexType <p>索引类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexName <p>索引名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexMetaJson <p>索引元数据JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexStatus <p>索引状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexStorage <p>索引存储大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexCreateTime <p>索引创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackingIndices <p>后备索引</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>索引所属集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName <p>索引所属集群名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterVersion <p>索引所属集群版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param IndexPolicyField $IndexPolicyField <p>索引生命周期字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param IndexOptionsField $IndexOptionsField <p>索引自治字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param IndexSettingsField $IndexSettingsField <p>索引配置字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IndexAliasesField <p>索引别名字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>索引所属集群APP ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexDocs <p>索引文档数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FieldCount <p>当前字段数</p>
     * @param integer $FieldLimit <p>当前上限</p>
     * @param string $FieldUsageRatio <p>使用率</p>
     * @param integer $OccupiedShards <p>占用分片数</p>
     * @param string $IndexOpenStatus <p>索引开启状态</p>
     * @param integer $FieldLimitHardCap <p>索引字段数硬上限</p>
     * @param integer $FieldLimitMin <p>上限可调整最小值</p>
     * @param integer $FieldAutoAdjustRemaining <p>剩余调整次数</p>
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
        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("IndexMetaJson",$param) and $param["IndexMetaJson"] !== null) {
            $this->IndexMetaJson = $param["IndexMetaJson"];
        }

        if (array_key_exists("IndexStatus",$param) and $param["IndexStatus"] !== null) {
            $this->IndexStatus = $param["IndexStatus"];
        }

        if (array_key_exists("IndexStorage",$param) and $param["IndexStorage"] !== null) {
            $this->IndexStorage = $param["IndexStorage"];
        }

        if (array_key_exists("IndexCreateTime",$param) and $param["IndexCreateTime"] !== null) {
            $this->IndexCreateTime = $param["IndexCreateTime"];
        }

        if (array_key_exists("BackingIndices",$param) and $param["BackingIndices"] !== null) {
            $this->BackingIndices = [];
            foreach ($param["BackingIndices"] as $key => $value){
                $obj = new BackingIndexMetaField();
                $obj->deserialize($value);
                array_push($this->BackingIndices, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("IndexPolicyField",$param) and $param["IndexPolicyField"] !== null) {
            $this->IndexPolicyField = new IndexPolicyField();
            $this->IndexPolicyField->deserialize($param["IndexPolicyField"]);
        }

        if (array_key_exists("IndexOptionsField",$param) and $param["IndexOptionsField"] !== null) {
            $this->IndexOptionsField = new IndexOptionsField();
            $this->IndexOptionsField->deserialize($param["IndexOptionsField"]);
        }

        if (array_key_exists("IndexSettingsField",$param) and $param["IndexSettingsField"] !== null) {
            $this->IndexSettingsField = new IndexSettingsField();
            $this->IndexSettingsField->deserialize($param["IndexSettingsField"]);
        }

        if (array_key_exists("IndexAliasesField",$param) and $param["IndexAliasesField"] !== null) {
            $this->IndexAliasesField = $param["IndexAliasesField"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IndexDocs",$param) and $param["IndexDocs"] !== null) {
            $this->IndexDocs = $param["IndexDocs"];
        }

        if (array_key_exists("FieldCount",$param) and $param["FieldCount"] !== null) {
            $this->FieldCount = $param["FieldCount"];
        }

        if (array_key_exists("FieldLimit",$param) and $param["FieldLimit"] !== null) {
            $this->FieldLimit = $param["FieldLimit"];
        }

        if (array_key_exists("FieldUsageRatio",$param) and $param["FieldUsageRatio"] !== null) {
            $this->FieldUsageRatio = $param["FieldUsageRatio"];
        }

        if (array_key_exists("OccupiedShards",$param) and $param["OccupiedShards"] !== null) {
            $this->OccupiedShards = $param["OccupiedShards"];
        }

        if (array_key_exists("IndexOpenStatus",$param) and $param["IndexOpenStatus"] !== null) {
            $this->IndexOpenStatus = $param["IndexOpenStatus"];
        }

        if (array_key_exists("FieldLimitHardCap",$param) and $param["FieldLimitHardCap"] !== null) {
            $this->FieldLimitHardCap = $param["FieldLimitHardCap"];
        }

        if (array_key_exists("FieldLimitMin",$param) and $param["FieldLimitMin"] !== null) {
            $this->FieldLimitMin = $param["FieldLimitMin"];
        }

        if (array_key_exists("FieldAutoAdjustRemaining",$param) and $param["FieldAutoAdjustRemaining"] !== null) {
            $this->FieldAutoAdjustRemaining = $param["FieldAutoAdjustRemaining"];
        }
    }
}

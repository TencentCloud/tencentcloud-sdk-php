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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引元数据字段
 *
 * @method string getIndexType() 获取索引类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexType(string $IndexType) 设置索引类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexName() 获取索引名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexName(string $IndexName) 设置索引名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexStatus() 获取索引状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexStatus(string $IndexStatus) 设置索引状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexStorage() 获取索引存储大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexStorage(integer $IndexStorage) 设置索引存储大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexCreateTime() 获取索引创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexCreateTime(string $IndexCreateTime) 设置索引创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackingIndices() 获取后备索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackingIndices(array $BackingIndices) 设置后备索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取索引所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置索引所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取索引所属集群名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置索引所属集群名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterVersion() 获取索引所属集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterVersion(string $ClusterVersion) 设置索引所属集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method IndexPolicyField getIndexPolicyField() 获取索引生命周期字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexPolicyField(IndexPolicyField $IndexPolicyField) 设置索引生命周期字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method IndexOptionsField getIndexOptionsField() 获取索引自治字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexOptionsField(IndexOptionsField $IndexOptionsField) 设置索引自治字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method IndexSettingsField getIndexSettingsField() 获取索引配置字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexSettingsField(IndexSettingsField $IndexSettingsField) 设置索引配置字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取索引所属集群APP ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置索引所属集群APP ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexDocs() 获取索引文档数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexDocs(integer $IndexDocs) 设置索引文档数
注意：此字段可能返回 null，表示取不到有效值。
 */
class IndexMetaField extends AbstractModel
{
    /**
     * @var string 索引类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexType;

    /**
     * @var string 索引名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexName;

    /**
     * @var string 索引状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexStatus;

    /**
     * @var integer 索引存储大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexStorage;

    /**
     * @var string 索引创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexCreateTime;

    /**
     * @var array 后备索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackingIndices;

    /**
     * @var string 索引所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 索引所属集群名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 索引所属集群版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterVersion;

    /**
     * @var IndexPolicyField 索引生命周期字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexPolicyField;

    /**
     * @var IndexOptionsField 索引自治字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexOptionsField;

    /**
     * @var IndexSettingsField 索引配置字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexSettingsField;

    /**
     * @var integer 索引所属集群APP ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var integer 索引文档数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexDocs;

    /**
     * @param string $IndexType 索引类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexName 索引名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexStatus 索引状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexStorage 索引存储大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexCreateTime 索引创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackingIndices 后备索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 索引所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 索引所属集群名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterVersion 索引所属集群版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param IndexPolicyField $IndexPolicyField 索引生命周期字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param IndexOptionsField $IndexOptionsField 索引自治字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param IndexSettingsField $IndexSettingsField 索引配置字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 索引所属集群APP ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexDocs 索引文档数
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
        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IndexDocs",$param) and $param["IndexDocs"] !== null) {
            $this->IndexDocs = $param["IndexDocs"];
        }
    }
}

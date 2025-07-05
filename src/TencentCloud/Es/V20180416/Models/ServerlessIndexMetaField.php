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
 * @method integer getAppId() 获取索引所属集群APP ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置索引所属集群APP ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexName() 获取索引名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexName(string $IndexName) 设置索引名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexMetaJson() 获取索引元数据JSON
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexMetaJson(string $IndexMetaJson) 设置索引元数据JSON
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexDocs() 获取索引文档数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexDocs(integer $IndexDocs) 设置索引文档数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexStorage() 获取索引存储大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexStorage(integer $IndexStorage) 设置索引存储大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexCreateTime() 获取索引创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexCreateTime(string $IndexCreateTime) 设置索引创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取索引实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置索引实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServerlessIndexOptionsField getIndexOptionsField() 获取索引自治字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexOptionsField(ServerlessIndexOptionsField $IndexOptionsField) 设置索引自治字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServerlessIndexSettingsField getIndexSettingsField() 获取索引配置字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexSettingsField(ServerlessIndexSettingsField $IndexSettingsField) 设置索引配置字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServerlessIndexNetworkField getIndexNetworkField() 获取索引所属连接相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexNetworkField(ServerlessIndexNetworkField $IndexNetworkField) 设置索引所属连接相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaUrl() 获取Kibana公网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaUrl(string $KibanaUrl) 设置Kibana公网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaPrivateUrl() 获取Kibana内网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPrivateUrl(string $KibanaPrivateUrl) 设置Kibana内网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexAccessUrl() 获取索引内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexAccessUrl(string $IndexAccessUrl) 设置索引内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpaceId() 获取索引空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpaceId(string $SpaceId) 设置索引空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpaceName() 获取索引空间名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpaceName(string $SpaceName) 设置索引空间名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageType() 获取存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(integer $StorageType) 设置存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取标签信息
 * @method void setTagList(array $TagList) 设置标签信息
 * @method float getIndexTraffic() 获取索引流量，单位byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexTraffic(float $IndexTraffic) 设置索引流量，单位byte
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServerlessIndexMetaField extends AbstractModel
{
    /**
     * @var integer 索引所属集群APP ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 索引名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexName;

    /**
     * @var string 索引元数据JSON
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexMetaJson;

    /**
     * @var integer 索引文档数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexDocs;

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
     * @var string 索引实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var ServerlessIndexOptionsField 索引自治字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexOptionsField;

    /**
     * @var ServerlessIndexSettingsField 索引配置字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexSettingsField;

    /**
     * @var ServerlessIndexNetworkField 索引所属连接相关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexNetworkField;

    /**
     * @var string Kibana公网域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaUrl;

    /**
     * @var string Kibana内网域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPrivateUrl;

    /**
     * @var string 索引内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexAccessUrl;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 索引空间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpaceId;

    /**
     * @var string 索引空间名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpaceName;

    /**
     * @var integer 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var array 标签信息
     */
    public $TagList;

    /**
     * @var float 索引流量，单位byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexTraffic;

    /**
     * @param integer $AppId 索引所属集群APP ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexName 索引名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexMetaJson 索引元数据JSON
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexDocs 索引文档数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexStorage 索引存储大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexCreateTime 索引创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 索引实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServerlessIndexOptionsField $IndexOptionsField 索引自治字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServerlessIndexSettingsField $IndexSettingsField 索引配置字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServerlessIndexNetworkField $IndexNetworkField 索引所属连接相关信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaUrl Kibana公网域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaPrivateUrl Kibana内网域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexAccessUrl 索引内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpaceId 索引空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpaceName 索引空间名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageType 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList 标签信息
     * @param float $IndexTraffic 索引流量，单位byte
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("IndexMetaJson",$param) and $param["IndexMetaJson"] !== null) {
            $this->IndexMetaJson = $param["IndexMetaJson"];
        }

        if (array_key_exists("IndexDocs",$param) and $param["IndexDocs"] !== null) {
            $this->IndexDocs = $param["IndexDocs"];
        }

        if (array_key_exists("IndexStorage",$param) and $param["IndexStorage"] !== null) {
            $this->IndexStorage = $param["IndexStorage"];
        }

        if (array_key_exists("IndexCreateTime",$param) and $param["IndexCreateTime"] !== null) {
            $this->IndexCreateTime = $param["IndexCreateTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IndexOptionsField",$param) and $param["IndexOptionsField"] !== null) {
            $this->IndexOptionsField = new ServerlessIndexOptionsField();
            $this->IndexOptionsField->deserialize($param["IndexOptionsField"]);
        }

        if (array_key_exists("IndexSettingsField",$param) and $param["IndexSettingsField"] !== null) {
            $this->IndexSettingsField = new ServerlessIndexSettingsField();
            $this->IndexSettingsField->deserialize($param["IndexSettingsField"]);
        }

        if (array_key_exists("IndexNetworkField",$param) and $param["IndexNetworkField"] !== null) {
            $this->IndexNetworkField = new ServerlessIndexNetworkField();
            $this->IndexNetworkField->deserialize($param["IndexNetworkField"]);
        }

        if (array_key_exists("KibanaUrl",$param) and $param["KibanaUrl"] !== null) {
            $this->KibanaUrl = $param["KibanaUrl"];
        }

        if (array_key_exists("KibanaPrivateUrl",$param) and $param["KibanaPrivateUrl"] !== null) {
            $this->KibanaPrivateUrl = $param["KibanaPrivateUrl"];
        }

        if (array_key_exists("IndexAccessUrl",$param) and $param["IndexAccessUrl"] !== null) {
            $this->IndexAccessUrl = $param["IndexAccessUrl"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("IndexTraffic",$param) and $param["IndexTraffic"] !== null) {
            $this->IndexTraffic = $param["IndexTraffic"];
        }
    }
}

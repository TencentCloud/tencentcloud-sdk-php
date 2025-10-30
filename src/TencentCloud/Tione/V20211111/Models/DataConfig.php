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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据配置
 *
 * @method string getMappingPath() 获取映射路径
 * @method void setMappingPath(string $MappingPath) 设置映射路径
 * @method string getDataSourceUsage() 获取存储用途
可选值为 BUILTIN_CODE, BUILTIN_DATA, BUILTIN_MODEL, USER_DATA, USER_CODE, USER_MODEL, OUTPUT, OTHER
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceUsage(string $DataSourceUsage) 设置存储用途
可选值为 BUILTIN_CODE, BUILTIN_DATA, BUILTIN_MODEL, USER_DATA, USER_CODE, USER_MODEL, OUTPUT, OTHER
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceType() 获取DATASET、COS、CFS、CFSTurbo、GooseFSx、HDFS、WEDATA_HDFS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceType(string $DataSourceType) 设置DATASET、COS、CFS、CFSTurbo、GooseFSx、HDFS、WEDATA_HDFS
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSetConfig getDataSetSource() 获取来自数据集的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSetSource(DataSetConfig $DataSetSource) 设置来自数据集的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getCOSSource() 获取来自cos的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCOSSource(CosPathInfo $COSSource) 设置来自cos的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method CFSConfig getCFSSource() 获取来自CFS的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFSSource(CFSConfig $CFSSource) 设置来自CFS的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method HDFSConfig getHDFSSource() 获取来自HDFS的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHDFSSource(HDFSConfig $HDFSSource) 设置来自HDFS的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method GooseFS getGooseFSSource() 获取配置GooseFS的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGooseFSSource(GooseFS $GooseFSSource) 设置配置GooseFS的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method CFSTurbo getCFSTurboSource() 获取配置TurboFS的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFSTurboSource(CFSTurbo $CFSTurboSource) 设置配置TurboFS的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method LocalDisk getLocalDiskSource() 获取来自本地磁盘的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDiskSource(LocalDisk $LocalDiskSource) 设置来自本地磁盘的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method CBSConfig getCBSSource() 获取CBS配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCBSSource(CBSConfig $CBSSource) 设置CBS配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method HostPath getHostPathSource() 获取主机路径信息
 * @method void setHostPathSource(HostPath $HostPathSource) 设置主机路径信息
 */
class DataConfig extends AbstractModel
{
    /**
     * @var string 映射路径
     */
    public $MappingPath;

    /**
     * @var string 存储用途
可选值为 BUILTIN_CODE, BUILTIN_DATA, BUILTIN_MODEL, USER_DATA, USER_CODE, USER_MODEL, OUTPUT, OTHER
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceUsage;

    /**
     * @var string DATASET、COS、CFS、CFSTurbo、GooseFSx、HDFS、WEDATA_HDFS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceType;

    /**
     * @var DataSetConfig 来自数据集的数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSetSource;

    /**
     * @var CosPathInfo 来自cos的数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $COSSource;

    /**
     * @var CFSConfig 来自CFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFSSource;

    /**
     * @var HDFSConfig 来自HDFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HDFSSource;

    /**
     * @var GooseFS 配置GooseFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GooseFSSource;

    /**
     * @var CFSTurbo 配置TurboFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFSTurboSource;

    /**
     * @var LocalDisk 来自本地磁盘的信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDiskSource;

    /**
     * @var CBSConfig CBS配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CBSSource;

    /**
     * @var HostPath 主机路径信息
     */
    public $HostPathSource;

    /**
     * @param string $MappingPath 映射路径
     * @param string $DataSourceUsage 存储用途
可选值为 BUILTIN_CODE, BUILTIN_DATA, BUILTIN_MODEL, USER_DATA, USER_CODE, USER_MODEL, OUTPUT, OTHER
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceType DATASET、COS、CFS、CFSTurbo、GooseFSx、HDFS、WEDATA_HDFS
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSetConfig $DataSetSource 来自数据集的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $COSSource 来自cos的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param CFSConfig $CFSSource 来自CFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param HDFSConfig $HDFSSource 来自HDFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param GooseFS $GooseFSSource 配置GooseFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param CFSTurbo $CFSTurboSource 配置TurboFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param LocalDisk $LocalDiskSource 来自本地磁盘的信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param CBSConfig $CBSSource CBS配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param HostPath $HostPathSource 主机路径信息
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
        if (array_key_exists("MappingPath",$param) and $param["MappingPath"] !== null) {
            $this->MappingPath = $param["MappingPath"];
        }

        if (array_key_exists("DataSourceUsage",$param) and $param["DataSourceUsage"] !== null) {
            $this->DataSourceUsage = $param["DataSourceUsage"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("DataSetSource",$param) and $param["DataSetSource"] !== null) {
            $this->DataSetSource = new DataSetConfig();
            $this->DataSetSource->deserialize($param["DataSetSource"]);
        }

        if (array_key_exists("COSSource",$param) and $param["COSSource"] !== null) {
            $this->COSSource = new CosPathInfo();
            $this->COSSource->deserialize($param["COSSource"]);
        }

        if (array_key_exists("CFSSource",$param) and $param["CFSSource"] !== null) {
            $this->CFSSource = new CFSConfig();
            $this->CFSSource->deserialize($param["CFSSource"]);
        }

        if (array_key_exists("HDFSSource",$param) and $param["HDFSSource"] !== null) {
            $this->HDFSSource = new HDFSConfig();
            $this->HDFSSource->deserialize($param["HDFSSource"]);
        }

        if (array_key_exists("GooseFSSource",$param) and $param["GooseFSSource"] !== null) {
            $this->GooseFSSource = new GooseFS();
            $this->GooseFSSource->deserialize($param["GooseFSSource"]);
        }

        if (array_key_exists("CFSTurboSource",$param) and $param["CFSTurboSource"] !== null) {
            $this->CFSTurboSource = new CFSTurbo();
            $this->CFSTurboSource->deserialize($param["CFSTurboSource"]);
        }

        if (array_key_exists("LocalDiskSource",$param) and $param["LocalDiskSource"] !== null) {
            $this->LocalDiskSource = new LocalDisk();
            $this->LocalDiskSource->deserialize($param["LocalDiskSource"]);
        }

        if (array_key_exists("CBSSource",$param) and $param["CBSSource"] !== null) {
            $this->CBSSource = new CBSConfig();
            $this->CBSSource->deserialize($param["CBSSource"]);
        }

        if (array_key_exists("HostPathSource",$param) and $param["HostPathSource"] !== null) {
            $this->HostPathSource = new HostPath();
            $this->HostPathSource->deserialize($param["HostPathSource"]);
        }
    }
}

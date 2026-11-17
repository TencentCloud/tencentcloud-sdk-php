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
 * @method string getMappingPath() 获取<p>映射路径</p>
 * @method void setMappingPath(string $MappingPath) 设置<p>映射路径</p>
 * @method string getDataSourceUsage() 获取<p>存储用途，用于标识该数据配置中数据的使用场景。</p><p>枚举值：</p><ul><li>BUILTIN_CODE： 内置代码</li><li>BUILTIN_DATA： 内置数据</li><li>BUILTIN_MODEL： 内置模型</li><li>USER_DATA： 用户数据</li><li>USER_CODE： 用户代码</li><li>USER_MODEL： 用户模型</li><li>OUTPUT： 训练输出</li><li>DEFAULT： 其他</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceUsage(string $DataSourceUsage) 设置<p>存储用途，用于标识该数据配置中数据的使用场景。</p><p>枚举值：</p><ul><li>BUILTIN_CODE： 内置代码</li><li>BUILTIN_DATA： 内置数据</li><li>BUILTIN_MODEL： 内置模型</li><li>USER_DATA： 用户数据</li><li>USER_CODE： 用户代码</li><li>USER_MODEL： 用户模型</li><li>OUTPUT： 训练输出</li><li>DEFAULT： 其他</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceType() 获取<p>存储类型，各取值对应的数据结构见下方枚举值说明。</p><p>枚举值：</p><ul><li>DATASET： 数据集，填 DataSetSource</li><li>COS： COS 对象存储，填 COSSource；仅 Train 支持</li><li>COSFS： COS 挂载（COSFS），填 COSSource</li><li>CFS： CFS 文件存储，填 CFSSource</li><li>CFSTurbo： CFSTurbo 文件存储，填 CFSSource；兼容历史字段 CFSTurboSource；仅 Train 支持</li><li>GooseFS： GooseFS 实例，填 GooseFSSource</li><li>GooseFSx： GooseFSx 实例，填 GooseFSSource</li><li>HDFS： HDFS 存储，填 HDFSSource；仅 Train 支持</li><li>LOCAL_DISK： 本地磁盘，填 LocalDiskSource</li><li>HOST_PATH： 宿主机路径，填 HostPathSource</li><li>PUBLIC_DATA_SOURCE： 公有云数据源，填 PublicDataSource</li><li>CLOUD_PREMIUM： 高性能云硬盘（CBS），填 CBSSource，需指定 VolumeSizeInGB；仅 Notebook 支持</li><li>CLOUD_SSD： SSD 云硬盘（CBS），填 CBSSource，需指定 VolumeSizeInGB；仅 Notebook 支持</li><li>FREE： 免费云硬盘（CBS），填 CBSSource；仅 Notebook 支持</li><li>CFS_TURBO： CFSTurbo 文件存储，填 CFSSource；仅 Notebook 支持</li><li>BUILTIN_DATASET： 平台内置数据集，填 DataSetSource</li><li>PRELOAD_FILE： 预加载文件，填 PreloadFileSource</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceType(string $DataSourceType) 设置<p>存储类型，各取值对应的数据结构见下方枚举值说明。</p><p>枚举值：</p><ul><li>DATASET： 数据集，填 DataSetSource</li><li>COS： COS 对象存储，填 COSSource；仅 Train 支持</li><li>COSFS： COS 挂载（COSFS），填 COSSource</li><li>CFS： CFS 文件存储，填 CFSSource</li><li>CFSTurbo： CFSTurbo 文件存储，填 CFSSource；兼容历史字段 CFSTurboSource；仅 Train 支持</li><li>GooseFS： GooseFS 实例，填 GooseFSSource</li><li>GooseFSx： GooseFSx 实例，填 GooseFSSource</li><li>HDFS： HDFS 存储，填 HDFSSource；仅 Train 支持</li><li>LOCAL_DISK： 本地磁盘，填 LocalDiskSource</li><li>HOST_PATH： 宿主机路径，填 HostPathSource</li><li>PUBLIC_DATA_SOURCE： 公有云数据源，填 PublicDataSource</li><li>CLOUD_PREMIUM： 高性能云硬盘（CBS），填 CBSSource，需指定 VolumeSizeInGB；仅 Notebook 支持</li><li>CLOUD_SSD： SSD 云硬盘（CBS），填 CBSSource，需指定 VolumeSizeInGB；仅 Notebook 支持</li><li>FREE： 免费云硬盘（CBS），填 CBSSource；仅 Notebook 支持</li><li>CFS_TURBO： CFSTurbo 文件存储，填 CFSSource；仅 Notebook 支持</li><li>BUILTIN_DATASET： 平台内置数据集，填 DataSetSource</li><li>PRELOAD_FILE： 预加载文件，填 PreloadFileSource</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSetConfig getDataSetSource() 获取<p>来自数据集的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSetSource(DataSetConfig $DataSetSource) 设置<p>来自数据集的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getCOSSource() 获取<p>来自cos的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCOSSource(CosPathInfo $COSSource) 设置<p>来自cos的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CFSConfig getCFSSource() 获取<p>来自CFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFSSource(CFSConfig $CFSSource) 设置<p>来自CFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HDFSConfig getHDFSSource() 获取<p>来自HDFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHDFSSource(HDFSConfig $HDFSSource) 设置<p>来自HDFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method GooseFS getGooseFSSource() 获取<p>配置GooseFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGooseFSSource(GooseFS $GooseFSSource) 设置<p>配置GooseFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CFSTurbo getCFSTurboSource() 获取<p>配置TurboFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFSTurboSource(CFSTurbo $CFSTurboSource) 设置<p>配置TurboFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LocalDisk getLocalDiskSource() 获取<p>来自本地磁盘的信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDiskSource(LocalDisk $LocalDiskSource) 设置<p>来自本地磁盘的信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CBSConfig getCBSSource() 获取<p>CBS配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCBSSource(CBSConfig $CBSSource) 设置<p>CBS配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HostPath getHostPathSource() 获取<p>主机路径信息</p>
 * @method void setHostPathSource(HostPath $HostPathSource) 设置<p>主机路径信息</p>
 * @method PublicDataSourceFS getPublicDataSource() 获取<p>公有云数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicDataSource(PublicDataSourceFS $PublicDataSource) 设置<p>公有云数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReadOnly() 获取<p>是否是只读存储</p>
 * @method void setReadOnly(boolean $ReadOnly) 设置<p>是否是只读存储</p>
 */
class DataConfig extends AbstractModel
{
    /**
     * @var string <p>映射路径</p>
     */
    public $MappingPath;

    /**
     * @var string <p>存储用途，用于标识该数据配置中数据的使用场景。</p><p>枚举值：</p><ul><li>BUILTIN_CODE： 内置代码</li><li>BUILTIN_DATA： 内置数据</li><li>BUILTIN_MODEL： 内置模型</li><li>USER_DATA： 用户数据</li><li>USER_CODE： 用户代码</li><li>USER_MODEL： 用户模型</li><li>OUTPUT： 训练输出</li><li>DEFAULT： 其他</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceUsage;

    /**
     * @var string <p>存储类型，各取值对应的数据结构见下方枚举值说明。</p><p>枚举值：</p><ul><li>DATASET： 数据集，填 DataSetSource</li><li>COS： COS 对象存储，填 COSSource；仅 Train 支持</li><li>COSFS： COS 挂载（COSFS），填 COSSource</li><li>CFS： CFS 文件存储，填 CFSSource</li><li>CFSTurbo： CFSTurbo 文件存储，填 CFSSource；兼容历史字段 CFSTurboSource；仅 Train 支持</li><li>GooseFS： GooseFS 实例，填 GooseFSSource</li><li>GooseFSx： GooseFSx 实例，填 GooseFSSource</li><li>HDFS： HDFS 存储，填 HDFSSource；仅 Train 支持</li><li>LOCAL_DISK： 本地磁盘，填 LocalDiskSource</li><li>HOST_PATH： 宿主机路径，填 HostPathSource</li><li>PUBLIC_DATA_SOURCE： 公有云数据源，填 PublicDataSource</li><li>CLOUD_PREMIUM： 高性能云硬盘（CBS），填 CBSSource，需指定 VolumeSizeInGB；仅 Notebook 支持</li><li>CLOUD_SSD： SSD 云硬盘（CBS），填 CBSSource，需指定 VolumeSizeInGB；仅 Notebook 支持</li><li>FREE： 免费云硬盘（CBS），填 CBSSource；仅 Notebook 支持</li><li>CFS_TURBO： CFSTurbo 文件存储，填 CFSSource；仅 Notebook 支持</li><li>BUILTIN_DATASET： 平台内置数据集，填 DataSetSource</li><li>PRELOAD_FILE： 预加载文件，填 PreloadFileSource</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceType;

    /**
     * @var DataSetConfig <p>来自数据集的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSetSource;

    /**
     * @var CosPathInfo <p>来自cos的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $COSSource;

    /**
     * @var CFSConfig <p>来自CFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFSSource;

    /**
     * @var HDFSConfig <p>来自HDFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HDFSSource;

    /**
     * @var GooseFS <p>配置GooseFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GooseFSSource;

    /**
     * @var CFSTurbo <p>配置TurboFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFSTurboSource;

    /**
     * @var LocalDisk <p>来自本地磁盘的信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDiskSource;

    /**
     * @var CBSConfig <p>CBS配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CBSSource;

    /**
     * @var HostPath <p>主机路径信息</p>
     */
    public $HostPathSource;

    /**
     * @var PublicDataSourceFS <p>公有云数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicDataSource;

    /**
     * @var boolean <p>是否是只读存储</p>
     */
    public $ReadOnly;

    /**
     * @param string $MappingPath <p>映射路径</p>
     * @param string $DataSourceUsage <p>存储用途，用于标识该数据配置中数据的使用场景。</p><p>枚举值：</p><ul><li>BUILTIN_CODE： 内置代码</li><li>BUILTIN_DATA： 内置数据</li><li>BUILTIN_MODEL： 内置模型</li><li>USER_DATA： 用户数据</li><li>USER_CODE： 用户代码</li><li>USER_MODEL： 用户模型</li><li>OUTPUT： 训练输出</li><li>DEFAULT： 其他</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceType <p>存储类型，各取值对应的数据结构见下方枚举值说明。</p><p>枚举值：</p><ul><li>DATASET： 数据集，填 DataSetSource</li><li>COS： COS 对象存储，填 COSSource；仅 Train 支持</li><li>COSFS： COS 挂载（COSFS），填 COSSource</li><li>CFS： CFS 文件存储，填 CFSSource</li><li>CFSTurbo： CFSTurbo 文件存储，填 CFSSource；兼容历史字段 CFSTurboSource；仅 Train 支持</li><li>GooseFS： GooseFS 实例，填 GooseFSSource</li><li>GooseFSx： GooseFSx 实例，填 GooseFSSource</li><li>HDFS： HDFS 存储，填 HDFSSource；仅 Train 支持</li><li>LOCAL_DISK： 本地磁盘，填 LocalDiskSource</li><li>HOST_PATH： 宿主机路径，填 HostPathSource</li><li>PUBLIC_DATA_SOURCE： 公有云数据源，填 PublicDataSource</li><li>CLOUD_PREMIUM： 高性能云硬盘（CBS），填 CBSSource，需指定 VolumeSizeInGB；仅 Notebook 支持</li><li>CLOUD_SSD： SSD 云硬盘（CBS），填 CBSSource，需指定 VolumeSizeInGB；仅 Notebook 支持</li><li>FREE： 免费云硬盘（CBS），填 CBSSource；仅 Notebook 支持</li><li>CFS_TURBO： CFSTurbo 文件存储，填 CFSSource；仅 Notebook 支持</li><li>BUILTIN_DATASET： 平台内置数据集，填 DataSetSource</li><li>PRELOAD_FILE： 预加载文件，填 PreloadFileSource</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSetConfig $DataSetSource <p>来自数据集的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $COSSource <p>来自cos的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CFSConfig $CFSSource <p>来自CFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HDFSConfig $HDFSSource <p>来自HDFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param GooseFS $GooseFSSource <p>配置GooseFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CFSTurbo $CFSTurboSource <p>配置TurboFS的数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LocalDisk $LocalDiskSource <p>来自本地磁盘的信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CBSConfig $CBSSource <p>CBS配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HostPath $HostPathSource <p>主机路径信息</p>
     * @param PublicDataSourceFS $PublicDataSource <p>公有云数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ReadOnly <p>是否是只读存储</p>
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

        if (array_key_exists("PublicDataSource",$param) and $param["PublicDataSource"] !== null) {
            $this->PublicDataSource = new PublicDataSourceFS();
            $this->PublicDataSource->deserialize($param["PublicDataSource"]);
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }
    }
}

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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据配置
 *
 * @method string getMappingPath() 获取映射路径
 * @method void setMappingPath(string $MappingPath) 设置映射路径
 * @method string getDataSourceType() 获取DATASET、COS、CFS、HDFS、WEDATA_HDFS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceType(string $DataSourceType) 设置DATASET、COS、CFS、HDFS、WEDATA_HDFS
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
 * @method GooseFS getGooseFSSource() 获取配饰GooseFS的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGooseFSSource(GooseFS $GooseFSSource) 设置配饰GooseFS的数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataConfig extends AbstractModel
{
    /**
     * @var string 映射路径
     */
    public $MappingPath;

    /**
     * @var string DATASET、COS、CFS、HDFS、WEDATA_HDFS
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
     * @var GooseFS 配饰GooseFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GooseFSSource;

    /**
     * @param string $MappingPath 映射路径
     * @param string $DataSourceType DATASET、COS、CFS、HDFS、WEDATA_HDFS
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSetConfig $DataSetSource 来自数据集的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $COSSource 来自cos的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param CFSConfig $CFSSource 来自CFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param HDFSConfig $HDFSSource 来自HDFS的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param GooseFS $GooseFSSource 配饰GooseFS的数据
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
        if (array_key_exists("MappingPath",$param) and $param["MappingPath"] !== null) {
            $this->MappingPath = $param["MappingPath"];
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
    }
}

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
 * CreateDataset请求参数结构体
 *
 * @method string getDatasetName() 获取数据集名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
 * @method void setDatasetName(string $DatasetName) 设置数据集名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
 * @method string getDatasetType() 获取数据集类型:
TYPE_DATASET_TEXT，文本
TYPE_DATASET_IMAGE，图片
TYPE_DATASET_TABLE，表格
TYPE_DATASET_OTHER，其他
 * @method void setDatasetType(string $DatasetType) 设置数据集类型:
TYPE_DATASET_TEXT，文本
TYPE_DATASET_IMAGE，图片
TYPE_DATASET_TABLE，表格
TYPE_DATASET_OTHER，其他
 * @method CosPathInfo getStorageDataPath() 获取数据源cos路径
 * @method void setStorageDataPath(CosPathInfo $StorageDataPath) 设置数据源cos路径
 * @method CosPathInfo getStorageLabelPath() 获取数据集标签cos存储路径
 * @method void setStorageLabelPath(CosPathInfo $StorageLabelPath) 设置数据集标签cos存储路径
 * @method array getDatasetTags() 获取数据集标签
 * @method void setDatasetTags(array $DatasetTags) 设置数据集标签
 * @method string getAnnotationStatus() 获取数据集标注状态:
STATUS_NON_ANNOTATED，未标注
STATUS_ANNOTATED，已标注
 * @method void setAnnotationStatus(string $AnnotationStatus) 设置数据集标注状态:
STATUS_NON_ANNOTATED，未标注
STATUS_ANNOTATED，已标注
 * @method string getAnnotationType() 获取标注类型:
ANNOTATION_TYPE_CLASSIFICATION，图片分类
ANNOTATION_TYPE_DETECTION，目标检测
ANNOTATION_TYPE_SEGMENTATION，图片分割
ANNOTATION_TYPE_TRACKING，目标跟踪
 * @method void setAnnotationType(string $AnnotationType) 设置标注类型:
ANNOTATION_TYPE_CLASSIFICATION，图片分类
ANNOTATION_TYPE_DETECTION，目标检测
ANNOTATION_TYPE_SEGMENTATION，图片分割
ANNOTATION_TYPE_TRACKING，目标跟踪
 * @method string getAnnotationFormat() 获取标注格式:
ANNOTATION_FORMAT_TI，TI平台格式
ANNOTATION_FORMAT_PASCAL，Pascal Voc
ANNOTATION_FORMAT_COCO，COCO
ANNOTATION_FORMAT_FILE，文件目录结构
 * @method void setAnnotationFormat(string $AnnotationFormat) 设置标注格式:
ANNOTATION_FORMAT_TI，TI平台格式
ANNOTATION_FORMAT_PASCAL，Pascal Voc
ANNOTATION_FORMAT_COCO，COCO
ANNOTATION_FORMAT_FILE，文件目录结构
 * @method array getSchemaInfos() 获取表头信息
 * @method void setSchemaInfos(array $SchemaInfos) 设置表头信息
 * @method boolean getIsSchemaExisted() 获取数据是否存在表头
 * @method void setIsSchemaExisted(boolean $IsSchemaExisted) 设置数据是否存在表头
 * @method string getContentType() 获取导入文件粒度，按行或者按文件
 * @method void setContentType(string $ContentType) 设置导入文件粒度，按行或者按文件
 */
class CreateDatasetRequest extends AbstractModel
{
    /**
     * @var string 数据集名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
     */
    public $DatasetName;

    /**
     * @var string 数据集类型:
TYPE_DATASET_TEXT，文本
TYPE_DATASET_IMAGE，图片
TYPE_DATASET_TABLE，表格
TYPE_DATASET_OTHER，其他
     */
    public $DatasetType;

    /**
     * @var CosPathInfo 数据源cos路径
     */
    public $StorageDataPath;

    /**
     * @var CosPathInfo 数据集标签cos存储路径
     */
    public $StorageLabelPath;

    /**
     * @var array 数据集标签
     */
    public $DatasetTags;

    /**
     * @var string 数据集标注状态:
STATUS_NON_ANNOTATED，未标注
STATUS_ANNOTATED，已标注
     */
    public $AnnotationStatus;

    /**
     * @var string 标注类型:
ANNOTATION_TYPE_CLASSIFICATION，图片分类
ANNOTATION_TYPE_DETECTION，目标检测
ANNOTATION_TYPE_SEGMENTATION，图片分割
ANNOTATION_TYPE_TRACKING，目标跟踪
     */
    public $AnnotationType;

    /**
     * @var string 标注格式:
ANNOTATION_FORMAT_TI，TI平台格式
ANNOTATION_FORMAT_PASCAL，Pascal Voc
ANNOTATION_FORMAT_COCO，COCO
ANNOTATION_FORMAT_FILE，文件目录结构
     */
    public $AnnotationFormat;

    /**
     * @var array 表头信息
     */
    public $SchemaInfos;

    /**
     * @var boolean 数据是否存在表头
     */
    public $IsSchemaExisted;

    /**
     * @var string 导入文件粒度，按行或者按文件
     */
    public $ContentType;

    /**
     * @param string $DatasetName 数据集名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
     * @param string $DatasetType 数据集类型:
TYPE_DATASET_TEXT，文本
TYPE_DATASET_IMAGE，图片
TYPE_DATASET_TABLE，表格
TYPE_DATASET_OTHER，其他
     * @param CosPathInfo $StorageDataPath 数据源cos路径
     * @param CosPathInfo $StorageLabelPath 数据集标签cos存储路径
     * @param array $DatasetTags 数据集标签
     * @param string $AnnotationStatus 数据集标注状态:
STATUS_NON_ANNOTATED，未标注
STATUS_ANNOTATED，已标注
     * @param string $AnnotationType 标注类型:
ANNOTATION_TYPE_CLASSIFICATION，图片分类
ANNOTATION_TYPE_DETECTION，目标检测
ANNOTATION_TYPE_SEGMENTATION，图片分割
ANNOTATION_TYPE_TRACKING，目标跟踪
     * @param string $AnnotationFormat 标注格式:
ANNOTATION_FORMAT_TI，TI平台格式
ANNOTATION_FORMAT_PASCAL，Pascal Voc
ANNOTATION_FORMAT_COCO，COCO
ANNOTATION_FORMAT_FILE，文件目录结构
     * @param array $SchemaInfos 表头信息
     * @param boolean $IsSchemaExisted 数据是否存在表头
     * @param string $ContentType 导入文件粒度，按行或者按文件
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
        if (array_key_exists("DatasetName",$param) and $param["DatasetName"] !== null) {
            $this->DatasetName = $param["DatasetName"];
        }

        if (array_key_exists("DatasetType",$param) and $param["DatasetType"] !== null) {
            $this->DatasetType = $param["DatasetType"];
        }

        if (array_key_exists("StorageDataPath",$param) and $param["StorageDataPath"] !== null) {
            $this->StorageDataPath = new CosPathInfo();
            $this->StorageDataPath->deserialize($param["StorageDataPath"]);
        }

        if (array_key_exists("StorageLabelPath",$param) and $param["StorageLabelPath"] !== null) {
            $this->StorageLabelPath = new CosPathInfo();
            $this->StorageLabelPath->deserialize($param["StorageLabelPath"]);
        }

        if (array_key_exists("DatasetTags",$param) and $param["DatasetTags"] !== null) {
            $this->DatasetTags = [];
            foreach ($param["DatasetTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->DatasetTags, $obj);
            }
        }

        if (array_key_exists("AnnotationStatus",$param) and $param["AnnotationStatus"] !== null) {
            $this->AnnotationStatus = $param["AnnotationStatus"];
        }

        if (array_key_exists("AnnotationType",$param) and $param["AnnotationType"] !== null) {
            $this->AnnotationType = $param["AnnotationType"];
        }

        if (array_key_exists("AnnotationFormat",$param) and $param["AnnotationFormat"] !== null) {
            $this->AnnotationFormat = $param["AnnotationFormat"];
        }

        if (array_key_exists("SchemaInfos",$param) and $param["SchemaInfos"] !== null) {
            $this->SchemaInfos = [];
            foreach ($param["SchemaInfos"] as $key => $value){
                $obj = new SchemaInfo();
                $obj->deserialize($value);
                array_push($this->SchemaInfos, $obj);
            }
        }

        if (array_key_exists("IsSchemaExisted",$param) and $param["IsSchemaExisted"] !== null) {
            $this->IsSchemaExisted = $param["IsSchemaExisted"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }
    }
}

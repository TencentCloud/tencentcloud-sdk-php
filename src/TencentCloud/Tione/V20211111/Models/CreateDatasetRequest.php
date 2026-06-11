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
 * CreateDataset请求参数结构体
 *
 * @method string getDatasetName() 获取<p>数据集名称，不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
 * @method void setDatasetName(string $DatasetName) 设置<p>数据集名称，不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method string getDatasetType() 获取<p>数据集类型</p><p>枚举值：</p><ul><li>TYPE_DATASET_IMAGE： 图片</li><li>TYPE_DATASET_LLM： 大模型</li><li>TYPE_DATASET_TABLE： 表格</li><li>TYPE_DATASET_OTHER： 其他</li></ul>
 * @method void setDatasetType(string $DatasetType) 设置<p>数据集类型</p><p>枚举值：</p><ul><li>TYPE_DATASET_IMAGE： 图片</li><li>TYPE_DATASET_LLM： 大模型</li><li>TYPE_DATASET_TABLE： 表格</li><li>TYPE_DATASET_OTHER： 其他</li></ul>
 * @method CosPathInfo getStorageDataPath() 获取<p>数据源cos路径</p>
 * @method void setStorageDataPath(CosPathInfo $StorageDataPath) 设置<p>数据源cos路径</p>
 * @method CosPathInfo getStorageLabelPath() 获取<p>数据集标签cos存储路径</p>
 * @method void setStorageLabelPath(CosPathInfo $StorageLabelPath) 设置<p>数据集标签cos存储路径</p>
 * @method array getDatasetTags() 获取<p>数据集标签</p>
 * @method void setDatasetTags(array $DatasetTags) 设置<p>数据集标签</p>
 * @method string getAnnotationStatus() 获取<p>数据集标注状态</p><p>枚举值：</p><ul><li>STATUS_NON_ANNOTATED： 未标注</li><li>STATUS_ANNOTATED： 已标注</li></ul>
 * @method void setAnnotationStatus(string $AnnotationStatus) 设置<p>数据集标注状态</p><p>枚举值：</p><ul><li>STATUS_NON_ANNOTATED： 未标注</li><li>STATUS_ANNOTATED： 已标注</li></ul>
 * @method string getAnnotationType() 获取<p>标注类型</p><p>枚举值：</p><ul><li>ANNOTATION_TYPE_CLASSIFICATION： 图片分类</li><li>ANNOTATION_TYPE_DETECTION： 目标检测</li><li>ANNOTATION_TYPE_SEGMENTATION： 图片分割</li><li>ANNOTATION_TYPE_TRACKING： 目标跟踪</li><li>ANNOTATION_TYPE_OCR： OCR</li></ul>
 * @method void setAnnotationType(string $AnnotationType) 设置<p>标注类型</p><p>枚举值：</p><ul><li>ANNOTATION_TYPE_CLASSIFICATION： 图片分类</li><li>ANNOTATION_TYPE_DETECTION： 目标检测</li><li>ANNOTATION_TYPE_SEGMENTATION： 图片分割</li><li>ANNOTATION_TYPE_TRACKING： 目标跟踪</li><li>ANNOTATION_TYPE_OCR： OCR</li></ul>
 * @method string getAnnotationFormat() 获取<p>标注格式</p><p>枚举值：</p><ul><li>ANNOTATION_FORMAT_TI： TI-ONE平台格式</li><li>ANNOTATION_FORMAT_PASCAL： Pascal Voc格式</li><li>ANNOTATION_FORMAT_COCO： COCO格式</li><li>ANNOTATION_FORMAT_FILE： 文件目录结构</li></ul>
 * @method void setAnnotationFormat(string $AnnotationFormat) 设置<p>标注格式</p><p>枚举值：</p><ul><li>ANNOTATION_FORMAT_TI： TI-ONE平台格式</li><li>ANNOTATION_FORMAT_PASCAL： Pascal Voc格式</li><li>ANNOTATION_FORMAT_COCO： COCO格式</li><li>ANNOTATION_FORMAT_FILE： 文件目录结构</li></ul>
 * @method array getSchemaInfos() 获取<p>表头信息</p>
 * @method void setSchemaInfos(array $SchemaInfos) 设置<p>表头信息</p>
 * @method boolean getIsSchemaExisted() 获取<p>数据是否存在表头</p>
 * @method void setIsSchemaExisted(boolean $IsSchemaExisted) 设置<p>数据是否存在表头</p>
 * @method string getContentType() 获取<p>导入文件粒度</p><p>枚举值：</p><ul><li>TYPE_TEXT_LINE： 按行</li><li>TYPE_TEXT_FILE： 按文件</li></ul>
 * @method void setContentType(string $ContentType) 设置<p>导入文件粒度</p><p>枚举值：</p><ul><li>TYPE_TEXT_LINE： 按行</li><li>TYPE_TEXT_FILE： 按文件</li></ul>
 * @method string getDatasetScene() 获取<p>数据集建模一级类别</p><p>枚举值：</p><ul><li>LLM： 大模型建模</li><li>CV： 传统CV建模</li><li>STRUCTURE： 大数据建模</li><li>OTHER： 其它</li></ul>
 * @method void setDatasetScene(string $DatasetScene) 设置<p>数据集建模一级类别</p><p>枚举值：</p><ul><li>LLM： 大模型建模</li><li>CV： 传统CV建模</li><li>STRUCTURE： 大数据建模</li><li>OTHER： 其它</li></ul>
 * @method array getSceneTags() 获取<p>数据集标签。</p>
 * @method void setSceneTags(array $SceneTags) 设置<p>数据集标签。</p>
 * @method CFSConfig getCFSConfig() 获取<p>数据集CFS配置。仅支持LLM场景</p>
 * @method void setCFSConfig(CFSConfig $CFSConfig) 设置<p>数据集CFS配置。仅支持LLM场景</p>
 */
class CreateDatasetRequest extends AbstractModel
{
    /**
     * @var string <p>数据集名称，不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
     */
    public $DatasetName;

    /**
     * @var string <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     */
    public $TiProjectId;

    /**
     * @var string <p>数据集类型</p><p>枚举值：</p><ul><li>TYPE_DATASET_IMAGE： 图片</li><li>TYPE_DATASET_LLM： 大模型</li><li>TYPE_DATASET_TABLE： 表格</li><li>TYPE_DATASET_OTHER： 其他</li></ul>
     */
    public $DatasetType;

    /**
     * @var CosPathInfo <p>数据源cos路径</p>
     */
    public $StorageDataPath;

    /**
     * @var CosPathInfo <p>数据集标签cos存储路径</p>
     */
    public $StorageLabelPath;

    /**
     * @var array <p>数据集标签</p>
     */
    public $DatasetTags;

    /**
     * @var string <p>数据集标注状态</p><p>枚举值：</p><ul><li>STATUS_NON_ANNOTATED： 未标注</li><li>STATUS_ANNOTATED： 已标注</li></ul>
     */
    public $AnnotationStatus;

    /**
     * @var string <p>标注类型</p><p>枚举值：</p><ul><li>ANNOTATION_TYPE_CLASSIFICATION： 图片分类</li><li>ANNOTATION_TYPE_DETECTION： 目标检测</li><li>ANNOTATION_TYPE_SEGMENTATION： 图片分割</li><li>ANNOTATION_TYPE_TRACKING： 目标跟踪</li><li>ANNOTATION_TYPE_OCR： OCR</li></ul>
     */
    public $AnnotationType;

    /**
     * @var string <p>标注格式</p><p>枚举值：</p><ul><li>ANNOTATION_FORMAT_TI： TI-ONE平台格式</li><li>ANNOTATION_FORMAT_PASCAL： Pascal Voc格式</li><li>ANNOTATION_FORMAT_COCO： COCO格式</li><li>ANNOTATION_FORMAT_FILE： 文件目录结构</li></ul>
     */
    public $AnnotationFormat;

    /**
     * @var array <p>表头信息</p>
     */
    public $SchemaInfos;

    /**
     * @var boolean <p>数据是否存在表头</p>
     */
    public $IsSchemaExisted;

    /**
     * @var string <p>导入文件粒度</p><p>枚举值：</p><ul><li>TYPE_TEXT_LINE： 按行</li><li>TYPE_TEXT_FILE： 按文件</li></ul>
     */
    public $ContentType;

    /**
     * @var string <p>数据集建模一级类别</p><p>枚举值：</p><ul><li>LLM： 大模型建模</li><li>CV： 传统CV建模</li><li>STRUCTURE： 大数据建模</li><li>OTHER： 其它</li></ul>
     */
    public $DatasetScene;

    /**
     * @var array <p>数据集标签。</p>
     */
    public $SceneTags;

    /**
     * @var CFSConfig <p>数据集CFS配置。仅支持LLM场景</p>
     */
    public $CFSConfig;

    /**
     * @param string $DatasetName <p>数据集名称，不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
     * @param string $TiProjectId <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     * @param string $DatasetType <p>数据集类型</p><p>枚举值：</p><ul><li>TYPE_DATASET_IMAGE： 图片</li><li>TYPE_DATASET_LLM： 大模型</li><li>TYPE_DATASET_TABLE： 表格</li><li>TYPE_DATASET_OTHER： 其他</li></ul>
     * @param CosPathInfo $StorageDataPath <p>数据源cos路径</p>
     * @param CosPathInfo $StorageLabelPath <p>数据集标签cos存储路径</p>
     * @param array $DatasetTags <p>数据集标签</p>
     * @param string $AnnotationStatus <p>数据集标注状态</p><p>枚举值：</p><ul><li>STATUS_NON_ANNOTATED： 未标注</li><li>STATUS_ANNOTATED： 已标注</li></ul>
     * @param string $AnnotationType <p>标注类型</p><p>枚举值：</p><ul><li>ANNOTATION_TYPE_CLASSIFICATION： 图片分类</li><li>ANNOTATION_TYPE_DETECTION： 目标检测</li><li>ANNOTATION_TYPE_SEGMENTATION： 图片分割</li><li>ANNOTATION_TYPE_TRACKING： 目标跟踪</li><li>ANNOTATION_TYPE_OCR： OCR</li></ul>
     * @param string $AnnotationFormat <p>标注格式</p><p>枚举值：</p><ul><li>ANNOTATION_FORMAT_TI： TI-ONE平台格式</li><li>ANNOTATION_FORMAT_PASCAL： Pascal Voc格式</li><li>ANNOTATION_FORMAT_COCO： COCO格式</li><li>ANNOTATION_FORMAT_FILE： 文件目录结构</li></ul>
     * @param array $SchemaInfos <p>表头信息</p>
     * @param boolean $IsSchemaExisted <p>数据是否存在表头</p>
     * @param string $ContentType <p>导入文件粒度</p><p>枚举值：</p><ul><li>TYPE_TEXT_LINE： 按行</li><li>TYPE_TEXT_FILE： 按文件</li></ul>
     * @param string $DatasetScene <p>数据集建模一级类别</p><p>枚举值：</p><ul><li>LLM： 大模型建模</li><li>CV： 传统CV建模</li><li>STRUCTURE： 大数据建模</li><li>OTHER： 其它</li></ul>
     * @param array $SceneTags <p>数据集标签。</p>
     * @param CFSConfig $CFSConfig <p>数据集CFS配置。仅支持LLM场景</p>
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

        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
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

        if (array_key_exists("DatasetScene",$param) and $param["DatasetScene"] !== null) {
            $this->DatasetScene = $param["DatasetScene"];
        }

        if (array_key_exists("SceneTags",$param) and $param["SceneTags"] !== null) {
            $this->SceneTags = $param["SceneTags"];
        }

        if (array_key_exists("CFSConfig",$param) and $param["CFSConfig"] !== null) {
            $this->CFSConfig = new CFSConfig();
            $this->CFSConfig->deserialize($param["CFSConfig"]);
        }
    }
}

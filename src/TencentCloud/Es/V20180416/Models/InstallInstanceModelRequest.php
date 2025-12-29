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
 * InstallInstanceModel请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getUsrCosModelUrlList() 获取客户上传到cos的模型地址，单次请求限制一个。cos文件为压缩文件，格式包括：zip、tgz和tar.gz
 * @method void setUsrCosModelUrlList(array $UsrCosModelUrlList) 设置客户上传到cos的模型地址，单次请求限制一个。cos文件为压缩文件，格式包括：zip、tgz和tar.gz
 * @method array getModelNames() 获取客户指定安装的模型名称，可为空，默认为模型文件名
 * @method void setModelNames(array $ModelNames) 设置客户指定安装的模型名称，可为空，默认为模型文件名
 * @method array getTaskTypes() 获取模型使用的任务类型，包括：fill_mask, ner, question_answering, text_classification, text_embedding, text_expansion, text_similarity和zero_shot_classification，默认为text_embedding
 * @method void setTaskTypes(array $TaskTypes) 设置模型使用的任务类型，包括：fill_mask, ner, question_answering, text_classification, text_embedding, text_expansion, text_similarity和zero_shot_classification，默认为text_embedding
 * @method array getHuggingFaceModelNames() 获取HuggingFace模型名称
 * @method void setHuggingFaceModelNames(array $HuggingFaceModelNames) 设置HuggingFace模型名称
 * @method string getModelDescription() 获取模型描述
 * @method void setModelDescription(string $ModelDescription) 设置模型描述
 * @method string getModelSourceType() 获取模型来源：UserModel、HuggingFace和PlatformModel
 * @method void setModelSourceType(string $ModelSourceType) 设置模型来源：UserModel、HuggingFace和PlatformModel
 * @method array getUploadedCosPaths() 获取已上传的模型路径
 * @method void setUploadedCosPaths(array $UploadedCosPaths) 设置已上传的模型路径
 */
class InstallInstanceModelRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 客户上传到cos的模型地址，单次请求限制一个。cos文件为压缩文件，格式包括：zip、tgz和tar.gz
     */
    public $UsrCosModelUrlList;

    /**
     * @var array 客户指定安装的模型名称，可为空，默认为模型文件名
     */
    public $ModelNames;

    /**
     * @var array 模型使用的任务类型，包括：fill_mask, ner, question_answering, text_classification, text_embedding, text_expansion, text_similarity和zero_shot_classification，默认为text_embedding
     */
    public $TaskTypes;

    /**
     * @var array HuggingFace模型名称
     */
    public $HuggingFaceModelNames;

    /**
     * @var string 模型描述
     */
    public $ModelDescription;

    /**
     * @var string 模型来源：UserModel、HuggingFace和PlatformModel
     */
    public $ModelSourceType;

    /**
     * @var array 已上传的模型路径
     */
    public $UploadedCosPaths;

    /**
     * @param string $InstanceId 实例ID
     * @param array $UsrCosModelUrlList 客户上传到cos的模型地址，单次请求限制一个。cos文件为压缩文件，格式包括：zip、tgz和tar.gz
     * @param array $ModelNames 客户指定安装的模型名称，可为空，默认为模型文件名
     * @param array $TaskTypes 模型使用的任务类型，包括：fill_mask, ner, question_answering, text_classification, text_embedding, text_expansion, text_similarity和zero_shot_classification，默认为text_embedding
     * @param array $HuggingFaceModelNames HuggingFace模型名称
     * @param string $ModelDescription 模型描述
     * @param string $ModelSourceType 模型来源：UserModel、HuggingFace和PlatformModel
     * @param array $UploadedCosPaths 已上传的模型路径
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UsrCosModelUrlList",$param) and $param["UsrCosModelUrlList"] !== null) {
            $this->UsrCosModelUrlList = $param["UsrCosModelUrlList"];
        }

        if (array_key_exists("ModelNames",$param) and $param["ModelNames"] !== null) {
            $this->ModelNames = $param["ModelNames"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("HuggingFaceModelNames",$param) and $param["HuggingFaceModelNames"] !== null) {
            $this->HuggingFaceModelNames = $param["HuggingFaceModelNames"];
        }

        if (array_key_exists("ModelDescription",$param) and $param["ModelDescription"] !== null) {
            $this->ModelDescription = $param["ModelDescription"];
        }

        if (array_key_exists("ModelSourceType",$param) and $param["ModelSourceType"] !== null) {
            $this->ModelSourceType = $param["ModelSourceType"];
        }

        if (array_key_exists("UploadedCosPaths",$param) and $param["UploadedCosPaths"] !== null) {
            $this->UploadedCosPaths = $param["UploadedCosPaths"];
        }
    }
}

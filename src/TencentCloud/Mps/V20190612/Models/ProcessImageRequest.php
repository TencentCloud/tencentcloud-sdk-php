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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ProcessImage请求参数结构体
 *
 * @method MediaInputInfo getInputInfo() 获取图片处理的文件输入信息。
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置图片处理的文件输入信息。
 * @method TaskOutputStorage getOutputStorage() 获取图片处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置图片处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
 * @method string getOutputDir() 获取图片处理生成的文件输出的路径。如果不填表示与 InputInfo 中文件所在的目录一致。如果是目录，如`/image/201907/`，表示继承原文件名输出到该目录。
 * @method void setOutputDir(string $OutputDir) 设置图片处理生成的文件输出的路径。如果不填表示与 InputInfo 中文件所在的目录一致。如果是目录，如`/image/201907/`，表示继承原文件名输出到该目录。
 * @method string getOutputPath() 获取输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>
如果不填，则默认为相对路径：{inputName}.{format}。
 * @method void setOutputPath(string $OutputPath) 设置输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>
如果不填，则默认为相对路径：{inputName}.{format}。
 * @method integer getDefinition() 获取图片处理模板唯一标识。
图片模板功能内测中，如需使用请提交工单申请。
 * @method void setDefinition(integer $Definition) 设置图片处理模板唯一标识。
图片模板功能内测中，如需使用请提交工单申请。
 * @method string getResourceId() 获取资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。
 * @method void setResourceId(string $ResourceId) 设置资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。
 * @method ImageTaskInput getImageTask() 获取图片处理参数。
 * @method void setImageTask(ImageTaskInput $ImageTask) 设置图片处理参数。
 */
class ProcessImageRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo 图片处理的文件输入信息。
     */
    public $InputInfo;

    /**
     * @var TaskOutputStorage 图片处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
     */
    public $OutputStorage;

    /**
     * @var string 图片处理生成的文件输出的路径。如果不填表示与 InputInfo 中文件所在的目录一致。如果是目录，如`/image/201907/`，表示继承原文件名输出到该目录。
     */
    public $OutputDir;

    /**
     * @var string 输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>
如果不填，则默认为相对路径：{inputName}.{format}。
     */
    public $OutputPath;

    /**
     * @var integer 图片处理模板唯一标识。
图片模板功能内测中，如需使用请提交工单申请。
     */
    public $Definition;

    /**
     * @var string 资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。
     */
    public $ResourceId;

    /**
     * @var ImageTaskInput 图片处理参数。
     */
    public $ImageTask;

    /**
     * @param MediaInputInfo $InputInfo 图片处理的文件输入信息。
     * @param TaskOutputStorage $OutputStorage 图片处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
     * @param string $OutputDir 图片处理生成的文件输出的路径。如果不填表示与 InputInfo 中文件所在的目录一致。如果是目录，如`/image/201907/`，表示继承原文件名输出到该目录。
     * @param string $OutputPath 输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>
如果不填，则默认为相对路径：{inputName}.{format}。
     * @param integer $Definition 图片处理模板唯一标识。
图片模板功能内测中，如需使用请提交工单申请。
     * @param string $ResourceId 资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。
     * @param ImageTaskInput $ImageTask 图片处理参数。
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("OutputPath",$param) and $param["OutputPath"] !== null) {
            $this->OutputPath = $param["OutputPath"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ImageTask",$param) and $param["ImageTask"] !== null) {
            $this->ImageTask = new ImageTaskInput();
            $this->ImageTask->deserialize($param["ImageTask"]);
        }
    }
}

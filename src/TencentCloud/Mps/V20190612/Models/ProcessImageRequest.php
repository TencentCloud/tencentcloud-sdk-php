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
     * @var ImageTaskInput 图片处理参数。
     */
    public $ImageTask;

    /**
     * @param MediaInputInfo $InputInfo 图片处理的文件输入信息。
     * @param TaskOutputStorage $OutputStorage 图片处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
     * @param string $OutputDir 图片处理生成的文件输出的路径。如果不填表示与 InputInfo 中文件所在的目录一致。如果是目录，如`/image/201907/`，表示继承原文件名输出到该目录。
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

        if (array_key_exists("ImageTask",$param) and $param["ImageTask"] !== null) {
            $this->ImageTask = new ImageTaskInput();
            $this->ImageTask->deserialize($param["ImageTask"]);
        }
    }
}

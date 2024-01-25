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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenameFile请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getFilePath() 获取文件路径
 * @method void setFilePath(string $FilePath) 设置文件路径
 * @method string getFile() 获取新文件名
 * @method void setFile(string $File) 设置新文件名
 * @method string getFromTask() 获取来源任务（集成使用）
 * @method void setFromTask(string $FromTask) 设置来源任务（集成使用）
 * @method string getToTask() 获取目标任务（集成使用）
 * @method void setToTask(string $ToTask) 设置目标任务（集成使用）
 */
class RenameFileRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 文件路径
     */
    public $FilePath;

    /**
     * @var string 新文件名
     */
    public $File;

    /**
     * @var string 来源任务（集成使用）
     */
    public $FromTask;

    /**
     * @var string 目标任务（集成使用）
     */
    public $ToTask;

    /**
     * @param string $ProjectId 项目id
     * @param string $FilePath 文件路径
     * @param string $File 新文件名
     * @param string $FromTask 来源任务（集成使用）
     * @param string $ToTask 目标任务（集成使用）
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = $param["File"];
        }

        if (array_key_exists("FromTask",$param) and $param["FromTask"] !== null) {
            $this->FromTask = $param["FromTask"];
        }

        if (array_key_exists("ToTask",$param) and $param["ToTask"] !== null) {
            $this->ToTask = $param["ToTask"];
        }
    }
}

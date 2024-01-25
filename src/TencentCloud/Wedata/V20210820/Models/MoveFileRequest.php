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
 * MoveFile请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getSourceFilePath() 获取来源路径
 * @method void setSourceFilePath(string $SourceFilePath) 设置来源路径
 * @method string getTargetDirPath() 获取目标路径
 * @method void setTargetDirPath(string $TargetDirPath) 设置目标路径
 */
class MoveFileRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 来源路径
     */
    public $SourceFilePath;

    /**
     * @var string 目标路径
     */
    public $TargetDirPath;

    /**
     * @param string $ProjectId 项目id
     * @param string $SourceFilePath 来源路径
     * @param string $TargetDirPath 目标路径
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

        if (array_key_exists("SourceFilePath",$param) and $param["SourceFilePath"] !== null) {
            $this->SourceFilePath = $param["SourceFilePath"];
        }

        if (array_key_exists("TargetDirPath",$param) and $param["TargetDirPath"] !== null) {
            $this->TargetDirPath = $param["TargetDirPath"];
        }
    }
}

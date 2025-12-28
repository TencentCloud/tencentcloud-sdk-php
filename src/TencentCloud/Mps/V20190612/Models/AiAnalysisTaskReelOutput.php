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
 * 智能成片结果信息
 *
 * @method string getVideoPath() 获取成片视频路径。
 * @method void setVideoPath(string $VideoPath) 设置成片视频路径。
 * @method string getScriptPath() 获取脚本文件路径

 * @method void setScriptPath(string $ScriptPath) 设置脚本文件路径

 * @method TaskOutputStorage getOutputStorage() 获取成片视频存储位置。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置成片视频存储位置。
 */
class AiAnalysisTaskReelOutput extends AbstractModel
{
    /**
     * @var string 成片视频路径。
     */
    public $VideoPath;

    /**
     * @var string 脚本文件路径

     */
    public $ScriptPath;

    /**
     * @var TaskOutputStorage 成片视频存储位置。
     */
    public $OutputStorage;

    /**
     * @param string $VideoPath 成片视频路径。
     * @param string $ScriptPath 脚本文件路径

     * @param TaskOutputStorage $OutputStorage 成片视频存储位置。
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
        if (array_key_exists("VideoPath",$param) and $param["VideoPath"] !== null) {
            $this->VideoPath = $param["VideoPath"];
        }

        if (array_key_exists("ScriptPath",$param) and $param["ScriptPath"] !== null) {
            $this->ScriptPath = $param["ScriptPath"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}

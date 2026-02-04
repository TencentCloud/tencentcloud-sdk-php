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
 * AI解说二创结果信息
 *
 * @method string getVideoPath() 获取解说视频路径。
 * @method void setVideoPath(string $VideoPath) 设置解说视频路径。
 * @method array getVideoPaths() 获取解说视频路径列表。

**注意**：
1. 当返回一个文件时，`VideoPath `返回一个文件路径，`VideoPaths `也会填充同样路径的一个元素。
2. 当返回多个文件时，`VideoPath `返回为空字符串，`VideoPaths `返回多文件路径列表。
 * @method void setVideoPaths(array $VideoPaths) 设置解说视频路径列表。

**注意**：
1. 当返回一个文件时，`VideoPath `返回一个文件路径，`VideoPaths `也会填充同样路径的一个元素。
2. 当返回多个文件时，`VideoPath `返回为空字符串，`VideoPaths `返回多文件路径列表。
 * @method string getScriptPath() 获取脚本文件路径

 * @method void setScriptPath(string $ScriptPath) 设置脚本文件路径

 * @method TaskOutputStorage getOutputStorage() 获取解说视频存储位置。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置解说视频存储位置。
 */
class AiAnalysisTaskReelOutput extends AbstractModel
{
    /**
     * @var string 解说视频路径。
     */
    public $VideoPath;

    /**
     * @var array 解说视频路径列表。

**注意**：
1. 当返回一个文件时，`VideoPath `返回一个文件路径，`VideoPaths `也会填充同样路径的一个元素。
2. 当返回多个文件时，`VideoPath `返回为空字符串，`VideoPaths `返回多文件路径列表。
     */
    public $VideoPaths;

    /**
     * @var string 脚本文件路径

     */
    public $ScriptPath;

    /**
     * @var TaskOutputStorage 解说视频存储位置。
     */
    public $OutputStorage;

    /**
     * @param string $VideoPath 解说视频路径。
     * @param array $VideoPaths 解说视频路径列表。

**注意**：
1. 当返回一个文件时，`VideoPath `返回一个文件路径，`VideoPaths `也会填充同样路径的一个元素。
2. 当返回多个文件时，`VideoPath `返回为空字符串，`VideoPaths `返回多文件路径列表。
     * @param string $ScriptPath 脚本文件路径

     * @param TaskOutputStorage $OutputStorage 解说视频存储位置。
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

        if (array_key_exists("VideoPaths",$param) and $param["VideoPaths"] !== null) {
            $this->VideoPaths = $param["VideoPaths"];
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

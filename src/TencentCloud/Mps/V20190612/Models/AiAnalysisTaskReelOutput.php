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
 * @method string getVideoPath() 获取<p>解说视频路径。</p>
 * @method void setVideoPath(string $VideoPath) 设置<p>解说视频路径。</p>
 * @method array getVideoPaths() 获取<p>解说视频路径列表。</p><p><strong>注意</strong>：</p><ol><li>当返回一个文件时，<code>VideoPath</code>返回一个文件路径，<code>VideoPaths</code>也会填充同样路径的一个元素。</li><li>当返回多个文件时，<code>VideoPath</code>返回为空字符串，<code>VideoPaths</code>返回多文件路径列表。</li></ol>
 * @method void setVideoPaths(array $VideoPaths) 设置<p>解说视频路径列表。</p><p><strong>注意</strong>：</p><ol><li>当返回一个文件时，<code>VideoPath</code>返回一个文件路径，<code>VideoPaths</code>也会填充同样路径的一个元素。</li><li>当返回多个文件时，<code>VideoPath</code>返回为空字符串，<code>VideoPaths</code>返回多文件路径列表。</li></ol>
 * @method string getScriptPath() 获取<p>脚本文件路径</p>
 * @method void setScriptPath(string $ScriptPath) 设置<p>脚本文件路径</p>
 * @method array getScriptPaths() 获取<p>多个脚本文件路径</p>
 * @method void setScriptPaths(array $ScriptPaths) 设置<p>多个脚本文件路径</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>解说视频存储位置。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>解说视频存储位置。</p>
 * @method string getOutputSubtitlePath() 获取<p>输出视频字幕文件</p>
 * @method void setOutputSubtitlePath(string $OutputSubtitlePath) 设置<p>输出视频字幕文件</p>
 * @method array getOutputSubtitlePaths() 获取<p>多个输出视频字幕文件，与输出的VideoPaths对应</p>
 * @method void setOutputSubtitlePaths(array $OutputSubtitlePaths) 设置<p>多个输出视频字幕文件，与输出的VideoPaths对应</p>
 */
class AiAnalysisTaskReelOutput extends AbstractModel
{
    /**
     * @var string <p>解说视频路径。</p>
     */
    public $VideoPath;

    /**
     * @var array <p>解说视频路径列表。</p><p><strong>注意</strong>：</p><ol><li>当返回一个文件时，<code>VideoPath</code>返回一个文件路径，<code>VideoPaths</code>也会填充同样路径的一个元素。</li><li>当返回多个文件时，<code>VideoPath</code>返回为空字符串，<code>VideoPaths</code>返回多文件路径列表。</li></ol>
     */
    public $VideoPaths;

    /**
     * @var string <p>脚本文件路径</p>
     */
    public $ScriptPath;

    /**
     * @var array <p>多个脚本文件路径</p>
     */
    public $ScriptPaths;

    /**
     * @var TaskOutputStorage <p>解说视频存储位置。</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>输出视频字幕文件</p>
     */
    public $OutputSubtitlePath;

    /**
     * @var array <p>多个输出视频字幕文件，与输出的VideoPaths对应</p>
     */
    public $OutputSubtitlePaths;

    /**
     * @param string $VideoPath <p>解说视频路径。</p>
     * @param array $VideoPaths <p>解说视频路径列表。</p><p><strong>注意</strong>：</p><ol><li>当返回一个文件时，<code>VideoPath</code>返回一个文件路径，<code>VideoPaths</code>也会填充同样路径的一个元素。</li><li>当返回多个文件时，<code>VideoPath</code>返回为空字符串，<code>VideoPaths</code>返回多文件路径列表。</li></ol>
     * @param string $ScriptPath <p>脚本文件路径</p>
     * @param array $ScriptPaths <p>多个脚本文件路径</p>
     * @param TaskOutputStorage $OutputStorage <p>解说视频存储位置。</p>
     * @param string $OutputSubtitlePath <p>输出视频字幕文件</p>
     * @param array $OutputSubtitlePaths <p>多个输出视频字幕文件，与输出的VideoPaths对应</p>
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

        if (array_key_exists("ScriptPaths",$param) and $param["ScriptPaths"] !== null) {
            $this->ScriptPaths = $param["ScriptPaths"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputSubtitlePath",$param) and $param["OutputSubtitlePath"] !== null) {
            $this->OutputSubtitlePath = $param["OutputSubtitlePath"];
        }

        if (array_key_exists("OutputSubtitlePaths",$param) and $param["OutputSubtitlePaths"] !== null) {
            $this->OutputSubtitlePaths = $param["OutputSubtitlePaths"];
        }
    }
}

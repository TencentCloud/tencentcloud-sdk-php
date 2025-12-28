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
 * 视频抠图结果信息
 *
 * @method string getPath() 获取视频智能抠图文件路径。
 * @method void setPath(string $Path) 设置视频智能抠图文件路径。
 * @method TaskOutputStorage getOutputStorage() 获取视频智能抠图的存储位置。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置视频智能抠图的存储位置。
 */
class AiAnalysisTaskCutoutOutput extends AbstractModel
{
    /**
     * @var string 视频智能抠图文件路径。
     */
    public $Path;

    /**
     * @var TaskOutputStorage 视频智能抠图的存储位置。
     */
    public $OutputStorage;

    /**
     * @param string $Path 视频智能抠图文件路径。
     * @param TaskOutputStorage $OutputStorage 视频智能抠图的存储位置。
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}

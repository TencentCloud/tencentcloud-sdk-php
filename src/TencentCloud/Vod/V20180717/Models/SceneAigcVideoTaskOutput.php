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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 场景化 AIGC 生成视频任务的输出。
 *
 * @method array getFileInfos() 获取AIGC 生视频任务的输出文件信息。
 * @method void setFileInfos(array $FileInfos) 设置AIGC 生视频任务的输出文件信息。
 */
class SceneAigcVideoTaskOutput extends AbstractModel
{
    /**
     * @var array AIGC 生视频任务的输出文件信息。
     */
    public $FileInfos;

    /**
     * @param array $FileInfos AIGC 生视频任务的输出文件信息。
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
        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new SceneAigcImageTaskOutputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }
    }
}

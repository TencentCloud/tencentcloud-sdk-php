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
 * 异步获取 AIGC 人脸信息输入。
 *
 * @method array getFileInfos() 获取<p>需要获取人脸信息的输入视频信息。</p>
 * @method void setFileInfos(array $FileInfos) 设置<p>需要获取人脸信息的输入视频信息。</p>
 */
class DescribeAigcFaceInfoAsyncInput extends AbstractModel
{
    /**
     * @var array <p>需要获取人脸信息的输入视频信息。</p>
     */
    public $FileInfos;

    /**
     * @param array $FileInfos <p>需要获取人脸信息的输入视频信息。</p>
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
                $obj = new AigcFaceInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }
    }
}

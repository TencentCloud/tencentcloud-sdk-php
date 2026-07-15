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
 * CreateAiDramaTask请求参数结构体
 *
 * @method AiDramaInput getInput() 获取<p>ai漫剧输入</p>
 * @method void setInput(AiDramaInput $Input) 设置<p>ai漫剧输入</p>
 * @method VideoDramaCosInfo getCosInfo() 获取<p>用户cos信息</p>
 * @method void setCosInfo(VideoDramaCosInfo $CosInfo) 设置<p>用户cos信息</p>
 */
class CreateAiDramaTaskRequest extends AbstractModel
{
    /**
     * @var AiDramaInput <p>ai漫剧输入</p>
     */
    public $Input;

    /**
     * @var VideoDramaCosInfo <p>用户cos信息</p>
     */
    public $CosInfo;

    /**
     * @param AiDramaInput $Input <p>ai漫剧输入</p>
     * @param VideoDramaCosInfo $CosInfo <p>用户cos信息</p>
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AiDramaInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new VideoDramaCosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }
    }
}

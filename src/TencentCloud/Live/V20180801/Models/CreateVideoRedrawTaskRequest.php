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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoRedrawTask请求参数结构体
 *
 * @method VideoRedrawInput getInput() 获取<p>输入待转绘视频url信息</p>
 * @method void setInput(VideoRedrawInput $Input) 设置<p>输入待转绘视频url信息</p>
 * @method VideoRedrawCosInfo getCosInfo() 获取<p>用户自定义cos信息</p>
 * @method void setCosInfo(VideoRedrawCosInfo $CosInfo) 设置<p>用户自定义cos信息</p>
 */
class CreateVideoRedrawTaskRequest extends AbstractModel
{
    /**
     * @var VideoRedrawInput <p>输入待转绘视频url信息</p>
     */
    public $Input;

    /**
     * @var VideoRedrawCosInfo <p>用户自定义cos信息</p>
     */
    public $CosInfo;

    /**
     * @param VideoRedrawInput $Input <p>输入待转绘视频url信息</p>
     * @param VideoRedrawCosInfo $CosInfo <p>用户自定义cos信息</p>
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
            $this->Input = new VideoRedrawInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new VideoRedrawCosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }
    }
}

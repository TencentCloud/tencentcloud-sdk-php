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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编辑视频的结果文件输出配置。
 *
 * @method string getContainer() 获取封装格式，可选值：mp4、hls、mov、flv、avi。默认是 mp4。
 * @method void setContainer(string $Container) 设置封装格式，可选值：mp4、hls、mov、flv、avi。默认是 mp4。
 * @method string getType() 获取剪辑模式，可选值 normal、fast。默认是精确剪辑 normal
 * @method void setType(string $Type) 设置剪辑模式，可选值 normal、fast。默认是精确剪辑 normal
 */
class EditMediaOutputConfig extends AbstractModel
{
    /**
     * @var string 封装格式，可选值：mp4、hls、mov、flv、avi。默认是 mp4。
     */
    public $Container;

    /**
     * @var string 剪辑模式，可选值 normal、fast。默认是精确剪辑 normal
     */
    public $Type;

    /**
     * @param string $Container 封装格式，可选值：mp4、hls、mov、flv、avi。默认是 mp4。
     * @param string $Type 剪辑模式，可选值 normal、fast。默认是精确剪辑 normal
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

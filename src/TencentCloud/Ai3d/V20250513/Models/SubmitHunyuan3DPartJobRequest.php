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
namespace TencentCloud\Ai3d\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitHunyuan3DPartJob请求参数结构体
 *
 * @method InputFile3D getFile() 获取需进行组件生成的3D模型文件，仅支持FBX格式。
 * @method void setFile(InputFile3D $File) 设置需进行组件生成的3D模型文件，仅支持FBX格式。
 * @method string getModel() 获取组件生成模型版本，默认为1.0，可选项：1.0，1.5；
 * @method void setModel(string $Model) 设置组件生成模型版本，默认为1.0，可选项：1.0，1.5；
 */
class SubmitHunyuan3DPartJobRequest extends AbstractModel
{
    /**
     * @var InputFile3D 需进行组件生成的3D模型文件，仅支持FBX格式。
     */
    public $File;

    /**
     * @var string 组件生成模型版本，默认为1.0，可选项：1.0，1.5；
     */
    public $Model;

    /**
     * @param InputFile3D $File 需进行组件生成的3D模型文件，仅支持FBX格式。
     * @param string $Model 组件生成模型版本，默认为1.0，可选项：1.0，1.5；
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
        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = new InputFile3D();
            $this->File->deserialize($param["File"]);
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}

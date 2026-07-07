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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * model 信息
 *
 * @method string getModelId() 获取<p>模型唯一标识, 用于实际访问</p>
 * @method void setModelId(string $ModelId) 设置<p>模型唯一标识, 用于实际访问</p>
 * @method array getInputModalities() 获取<p>该模型当前支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>默认值：text</p>
 * @method void setInputModalities(array $InputModalities) 设置<p>该模型当前支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>默认值：text</p>
 * @method string getModelAlias() 获取<p>模型别名, 可以用于实际访问</p>
 * @method void setModelAlias(string $ModelAlias) 设置<p>模型别名, 可以用于实际访问</p>
 */
class ModelItem extends AbstractModel
{
    /**
     * @var string <p>模型唯一标识, 用于实际访问</p>
     */
    public $ModelId;

    /**
     * @var array <p>该模型当前支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>默认值：text</p>
     */
    public $InputModalities;

    /**
     * @var string <p>模型别名, 可以用于实际访问</p>
     */
    public $ModelAlias;

    /**
     * @param string $ModelId <p>模型唯一标识, 用于实际访问</p>
     * @param array $InputModalities <p>该模型当前支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>默认值：text</p>
     * @param string $ModelAlias <p>模型别名, 可以用于实际访问</p>
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("InputModalities",$param) and $param["InputModalities"] !== null) {
            $this->InputModalities = $param["InputModalities"];
        }

        if (array_key_exists("ModelAlias",$param) and $param["ModelAlias"] !== null) {
            $this->ModelAlias = $param["ModelAlias"];
        }
    }
}

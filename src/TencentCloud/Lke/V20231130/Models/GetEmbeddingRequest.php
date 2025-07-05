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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEmbedding请求参数结构体
 *
 * @method string getModel() 获取模型名称
 * @method void setModel(string $Model) 设置模型名称
 * @method array getInputs() 获取需要 embedding 的文本, 单条文本最大长度500个字符, 总条数最大7条
 * @method void setInputs(array $Inputs) 设置需要 embedding 的文本, 单条文本最大长度500个字符, 总条数最大7条
 * @method boolean getOnline() 获取是否在线, 后台异步任务使用离线, 实时任务使用在线, 默认值: false
 * @method void setOnline(boolean $Online) 设置是否在线, 后台异步任务使用离线, 实时任务使用在线, 默认值: false
 */
class GetEmbeddingRequest extends AbstractModel
{
    /**
     * @var string 模型名称
     */
    public $Model;

    /**
     * @var array 需要 embedding 的文本, 单条文本最大长度500个字符, 总条数最大7条
     */
    public $Inputs;

    /**
     * @var boolean 是否在线, 后台异步任务使用离线, 实时任务使用在线, 默认值: false
     */
    public $Online;

    /**
     * @param string $Model 模型名称
     * @param array $Inputs 需要 embedding 的文本, 单条文本最大长度500个字符, 总条数最大7条
     * @param boolean $Online 是否在线, 后台异步任务使用离线, 实时任务使用在线, 默认值: false
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = $param["Inputs"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }
    }
}

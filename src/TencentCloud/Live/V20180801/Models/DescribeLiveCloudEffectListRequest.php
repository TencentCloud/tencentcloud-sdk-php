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
 * DescribeLiveCloudEffectList请求参数结构体
 *
 * @method string getId() 获取云端特效ID。
 * @method void setId(string $Id) 设置云端特效ID。
 * @method string getPrompt() 获取云端特效描述词。由用户原始输入的描述词。
 * @method void setPrompt(string $Prompt) 设置云端特效描述词。由用户原始输入的描述词。
 * @method string getFlag() 获取云端特效标签。对云端特效进行分类标签，可用于分类搜索。
 * @method void setFlag(string $Flag) 设置云端特效标签。对云端特效进行分类标签，可用于分类搜索。
 * @method string getType() 获取云端特效类型, 默认不填，返回全部。PGC: 特效库中的特效；AICG : AI生成的特效；UGC：用户自定义上传的特效；
 * @method void setType(string $Type) 设置云端特效类型, 默认不填，返回全部。PGC: 特效库中的特效；AICG : AI生成的特效；UGC：用户自定义上传的特效；
 */
class DescribeLiveCloudEffectListRequest extends AbstractModel
{
    /**
     * @var string 云端特效ID。
     */
    public $Id;

    /**
     * @var string 云端特效描述词。由用户原始输入的描述词。
     */
    public $Prompt;

    /**
     * @var string 云端特效标签。对云端特效进行分类标签，可用于分类搜索。
     */
    public $Flag;

    /**
     * @var string 云端特效类型, 默认不填，返回全部。PGC: 特效库中的特效；AICG : AI生成的特效；UGC：用户自定义上传的特效；
     */
    public $Type;

    /**
     * @param string $Id 云端特效ID。
     * @param string $Prompt 云端特效描述词。由用户原始输入的描述词。
     * @param string $Flag 云端特效标签。对云端特效进行分类标签，可用于分类搜索。
     * @param string $Type 云端特效类型, 默认不填，返回全部。PGC: 特效库中的特效；AICG : AI生成的特效；UGC：用户自定义上传的特效；
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

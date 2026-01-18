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
 * CreateLiveCloudEffect请求参数结构体
 *
 * @method string getPrompt() 获取<p>用于生成云端特效的 Prompt。示例：飞鸟。Prompt 和 ImageUrl 二选一。</p>
 * @method void setPrompt(string $Prompt) 设置<p>用于生成云端特效的 Prompt。示例：飞鸟。Prompt 和 ImageUrl 二选一。</p>
 * @method string getTemplateId() 获取<p>模板生礼物的模板ID。目前支持的模板ID：queen_accession, wizard_of_oz，red_envelopes，fishermen，captain_america。</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模板生礼物的模板ID。目前支持的模板ID：queen_accession, wizard_of_oz，red_envelopes，fishermen，captain_america。</p>
 * @method string getImageUrl() 获取<p>输入我的图片地址，用于生成云端特效。ImageUrl 和 Prompt 二选一。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>输入我的图片地址，用于生成云端特效。ImageUrl 和 Prompt 二选一。</p>
 * @method string getType() 获取<p>指定生成云端特效的方式。默认自动选取。标准方式：text2video，高品质方式：text2video_hq。</p>
 * @method void setType(string $Type) 设置<p>指定生成云端特效的方式。默认自动选取。标准方式：text2video，高品质方式：text2video_hq。</p>
 * @method string getOperator() 获取<p>操作者名称。</p>
 * @method void setOperator(string $Operator) 设置<p>操作者名称。</p>
 */
class CreateLiveCloudEffectRequest extends AbstractModel
{
    /**
     * @var string <p>用于生成云端特效的 Prompt。示例：飞鸟。Prompt 和 ImageUrl 二选一。</p>
     */
    public $Prompt;

    /**
     * @var string <p>模板生礼物的模板ID。目前支持的模板ID：queen_accession, wizard_of_oz，red_envelopes，fishermen，captain_america。</p>
     */
    public $TemplateId;

    /**
     * @var string <p>输入我的图片地址，用于生成云端特效。ImageUrl 和 Prompt 二选一。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>指定生成云端特效的方式。默认自动选取。标准方式：text2video，高品质方式：text2video_hq。</p>
     */
    public $Type;

    /**
     * @var string <p>操作者名称。</p>
     */
    public $Operator;

    /**
     * @param string $Prompt <p>用于生成云端特效的 Prompt。示例：飞鸟。Prompt 和 ImageUrl 二选一。</p>
     * @param string $TemplateId <p>模板生礼物的模板ID。目前支持的模板ID：queen_accession, wizard_of_oz，red_envelopes，fishermen，captain_america。</p>
     * @param string $ImageUrl <p>输入我的图片地址，用于生成云端特效。ImageUrl 和 Prompt 二选一。</p>
     * @param string $Type <p>指定生成云端特效的方式。默认自动选取。标准方式：text2video，高品质方式：text2video_hq。</p>
     * @param string $Operator <p>操作者名称。</p>
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}

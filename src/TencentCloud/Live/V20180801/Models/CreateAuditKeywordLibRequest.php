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
 * CreateAuditKeywordLib请求参数结构体
 *
 * @method string getName() 获取<p>自定义词库名称。</p>
 * @method void setName(string $Name) 设置<p>自定义词库名称。</p>
 * @method string getDescription() 获取<p>自定义词库名称描述。</p>
 * @method void setDescription(string $Description) 设置<p>自定义词库名称描述。</p>
 * @method string getSuggestion() 获取<p>处理建议。<br>可取值：Review 疑似，Block 违规。</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>处理建议。<br>可取值：Review 疑似，Block 违规。</p>
 * @method string getMatchType() 获取<p>匹配模式。<br>可取值：ExactMatch 精确匹配， FuzzyMatch 模糊匹配。</p>
 * @method void setMatchType(string $MatchType) 设置<p>匹配模式。<br>可取值：ExactMatch 精确匹配， FuzzyMatch 模糊匹配。</p>
 */
class CreateAuditKeywordLibRequest extends AbstractModel
{
    /**
     * @var string <p>自定义词库名称。</p>
     */
    public $Name;

    /**
     * @var string <p>自定义词库名称描述。</p>
     */
    public $Description;

    /**
     * @var string <p>处理建议。<br>可取值：Review 疑似，Block 违规。</p>
     */
    public $Suggestion;

    /**
     * @var string <p>匹配模式。<br>可取值：ExactMatch 精确匹配， FuzzyMatch 模糊匹配。</p>
     */
    public $MatchType;

    /**
     * @param string $Name <p>自定义词库名称。</p>
     * @param string $Description <p>自定义词库名称描述。</p>
     * @param string $Suggestion <p>处理建议。<br>可取值：Review 疑似，Block 违规。</p>
     * @param string $MatchType <p>匹配模式。<br>可取值：ExactMatch 精确匹配， FuzzyMatch 模糊匹配。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }
    }
}

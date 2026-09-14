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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档解析配置
 *
 * @method ContentFilter getContentFilter() 获取<p>内容过滤配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentFilter(ContentFilter $ContentFilter) 设置<p>内容过滤配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSplitRule() 获取<p>分割规则</p>
 * @method void setSplitRule(string $SplitRule) 设置<p>分割规则</p>
 */
class DocParseConfig extends AbstractModel
{
    /**
     * @var ContentFilter <p>内容过滤配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentFilter;

    /**
     * @var string <p>分割规则</p>
     */
    public $SplitRule;

    /**
     * @param ContentFilter $ContentFilter <p>内容过滤配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SplitRule <p>分割规则</p>
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
        if (array_key_exists("ContentFilter",$param) and $param["ContentFilter"] !== null) {
            $this->ContentFilter = new ContentFilter();
            $this->ContentFilter->deserialize($param["ContentFilter"]);
        }

        if (array_key_exists("SplitRule",$param) and $param["SplitRule"] !== null) {
            $this->SplitRule = $param["SplitRule"];
        }
    }
}

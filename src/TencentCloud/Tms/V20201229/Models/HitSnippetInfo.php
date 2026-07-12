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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导致命中审核标签的原文片段信息，如果不命中任何审核标签，则不会有该片段信息，该片段信息只鹰用于辅助分析导致命中审核标签的文本所在位置
 *
 * @method string getSnippet() 获取<p>命中的文本片段（明文），已还原到预处理前的原文，注意该字段内容在原文中可能不连续，需要结合HitSnippetInfos[].Positions来还原出所在原文位置</p>
 * @method void setSnippet(string $Snippet) 设置<p>命中的文本片段（明文），已还原到预处理前的原文，注意该字段内容在原文中可能不连续，需要结合HitSnippetInfos[].Positions来还原出所在原文位置</p>
 * @method string getAtomicName() 获取<p>原子能力类型，如果是业务自定义库命中，会给出词库名称</p>
 * @method void setAtomicName(string $AtomicName) 设置<p>原子能力类型，如果是业务自定义库命中，会给出词库名称</p>
 * @method string getAtomicId() 获取<p>原子能力ID，如果是业务自定义库导致命中本次审核标签，该值是词库ID</p>
 * @method void setAtomicId(string $AtomicId) 设置<p>原子能力ID，如果是业务自定义库导致命中本次审核标签，该值是词库ID</p>
 * @method array getPositions() 获取<p>该命中片段在原文中的位置列表，由于文本片段在原文中可能不连续，它可能是有多段位置信息</p>
 * @method void setPositions(array $Positions) 设置<p>该命中片段在原文中的位置列表，由于文本片段在原文中可能不连续，它可能是有多段位置信息</p>
 */
class HitSnippetInfo extends AbstractModel
{
    /**
     * @var string <p>命中的文本片段（明文），已还原到预处理前的原文，注意该字段内容在原文中可能不连续，需要结合HitSnippetInfos[].Positions来还原出所在原文位置</p>
     */
    public $Snippet;

    /**
     * @var string <p>原子能力类型，如果是业务自定义库命中，会给出词库名称</p>
     */
    public $AtomicName;

    /**
     * @var string <p>原子能力ID，如果是业务自定义库导致命中本次审核标签，该值是词库ID</p>
     */
    public $AtomicId;

    /**
     * @var array <p>该命中片段在原文中的位置列表，由于文本片段在原文中可能不连续，它可能是有多段位置信息</p>
     */
    public $Positions;

    /**
     * @param string $Snippet <p>命中的文本片段（明文），已还原到预处理前的原文，注意该字段内容在原文中可能不连续，需要结合HitSnippetInfos[].Positions来还原出所在原文位置</p>
     * @param string $AtomicName <p>原子能力类型，如果是业务自定义库命中，会给出词库名称</p>
     * @param string $AtomicId <p>原子能力ID，如果是业务自定义库导致命中本次审核标签，该值是词库ID</p>
     * @param array $Positions <p>该命中片段在原文中的位置列表，由于文本片段在原文中可能不连续，它可能是有多段位置信息</p>
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
        if (array_key_exists("Snippet",$param) and $param["Snippet"] !== null) {
            $this->Snippet = $param["Snippet"];
        }

        if (array_key_exists("AtomicName",$param) and $param["AtomicName"] !== null) {
            $this->AtomicName = $param["AtomicName"];
        }

        if (array_key_exists("AtomicId",$param) and $param["AtomicId"] !== null) {
            $this->AtomicId = $param["AtomicId"];
        }

        if (array_key_exists("Positions",$param) and $param["Positions"] !== null) {
            $this->Positions = [];
            foreach ($param["Positions"] as $key => $value){
                $obj = new HitPosition();
                $obj->deserialize($value);
                array_push($this->Positions, $obj);
            }
        }
    }
}

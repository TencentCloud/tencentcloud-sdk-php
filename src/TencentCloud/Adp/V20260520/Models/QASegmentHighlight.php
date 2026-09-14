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
 * QA 分片高亮信息
 *
 * @method string getEndPos() 获取<p>高亮结束位置</p>
 * @method void setEndPos(string $EndPos) 设置<p>高亮结束位置</p>
 * @method string getStartPos() 获取<p>高亮起始位置</p>
 * @method void setStartPos(string $StartPos) 设置<p>高亮起始位置</p>
 */
class QASegmentHighlight extends AbstractModel
{
    /**
     * @var string <p>高亮结束位置</p>
     */
    public $EndPos;

    /**
     * @var string <p>高亮起始位置</p>
     */
    public $StartPos;

    /**
     * @param string $EndPos <p>高亮结束位置</p>
     * @param string $StartPos <p>高亮起始位置</p>
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
        if (array_key_exists("EndPos",$param) and $param["EndPos"] !== null) {
            $this->EndPos = $param["EndPos"];
        }

        if (array_key_exists("StartPos",$param) and $param["StartPos"] !== null) {
            $this->StartPos = $param["StartPos"];
        }
    }
}

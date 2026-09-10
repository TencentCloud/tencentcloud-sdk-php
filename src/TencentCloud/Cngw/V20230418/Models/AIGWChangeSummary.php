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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本变更的兼容变更，破坏变更数
 *
 * @method integer getBreaking() 获取<p>破坏性变更数</p>
 * @method void setBreaking(integer $Breaking) 设置<p>破坏性变更数</p>
 * @method integer getCompatible() 获取<p>兼容性变更数</p>
 * @method void setCompatible(integer $Compatible) 设置<p>兼容性变更数</p>
 */
class AIGWChangeSummary extends AbstractModel
{
    /**
     * @var integer <p>破坏性变更数</p>
     */
    public $Breaking;

    /**
     * @var integer <p>兼容性变更数</p>
     */
    public $Compatible;

    /**
     * @param integer $Breaking <p>破坏性变更数</p>
     * @param integer $Compatible <p>兼容性变更数</p>
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
        if (array_key_exists("Breaking",$param) and $param["Breaking"] !== null) {
            $this->Breaking = $param["Breaking"];
        }

        if (array_key_exists("Compatible",$param) and $param["Compatible"] !== null) {
            $this->Compatible = $param["Compatible"];
        }
    }
}

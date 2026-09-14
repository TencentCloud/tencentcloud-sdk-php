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
 * QA 检索配置
 *
 * @method float getConfidence() 获取<p>置信度阈值</p>
 * @method void setConfidence(float $Confidence) 设置<p>置信度阈值</p>
 * @method boolean getEnabled() 获取<p>是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
 * @method integer getTopN() 获取<p>返回前 N 条</p>
 * @method void setTopN(integer $TopN) 设置<p>返回前 N 条</p>
 */
class QARetrievalConfig extends AbstractModel
{
    /**
     * @var float <p>置信度阈值</p>
     */
    public $Confidence;

    /**
     * @var boolean <p>是否启用</p>
     */
    public $Enabled;

    /**
     * @var integer <p>返回前 N 条</p>
     */
    public $TopN;

    /**
     * @param float $Confidence <p>置信度阈值</p>
     * @param boolean $Enabled <p>是否启用</p>
     * @param integer $TopN <p>返回前 N 条</p>
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("TopN",$param) and $param["TopN"] !== null) {
            $this->TopN = $param["TopN"];
        }
    }
}

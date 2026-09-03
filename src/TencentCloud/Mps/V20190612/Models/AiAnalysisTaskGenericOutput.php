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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能分析通用结果信息
 *
 * @method TaskOutputStorage getOutputStorage() 获取<p>存储位置。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>存储位置。</p>
 * @method string getResult() 获取<p>任务结果。</p>
 * @method void setResult(string $Result) 设置<p>任务结果。</p>
 */
class AiAnalysisTaskGenericOutput extends AbstractModel
{
    /**
     * @var TaskOutputStorage <p>存储位置。</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>任务结果。</p>
     */
    public $Result;

    /**
     * @param TaskOutputStorage $OutputStorage <p>存储位置。</p>
     * @param string $Result <p>任务结果。</p>
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
        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}

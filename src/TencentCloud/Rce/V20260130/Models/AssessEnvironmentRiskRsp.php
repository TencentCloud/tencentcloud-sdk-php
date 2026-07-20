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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境风险评估返回结果
 *
 * @method DataScore getScore() 获取<p>环境风险分信息</p>
 * @method void setScore(DataScore $Score) 设置<p>环境风险分信息</p>
 * @method Environment getEnvironment() 获取<p>环境基础信息</p>
 * @method void setEnvironment(Environment $Environment) 设置<p>环境基础信息</p>
 */
class AssessEnvironmentRiskRsp extends AbstractModel
{
    /**
     * @var DataScore <p>环境风险分信息</p>
     */
    public $Score;

    /**
     * @var Environment <p>环境基础信息</p>
     */
    public $Environment;

    /**
     * @param DataScore $Score <p>环境风险分信息</p>
     * @param Environment $Environment <p>环境基础信息</p>
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = new DataScore();
            $this->Score->deserialize($param["Score"]);
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new Environment();
            $this->Environment->deserialize($param["Environment"]);
        }
    }
}

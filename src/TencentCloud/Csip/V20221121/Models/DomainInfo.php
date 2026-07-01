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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 反查域名信息
 *
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getAnalysisTime() 获取<p>分析时间</p>
 * @method void setAnalysisTime(string $AnalysisTime) 设置<p>分析时间</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>分析时间</p>
     */
    public $AnalysisTime;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @param string $Domain <p>域名</p>
     * @param string $AnalysisTime <p>分析时间</p>
     * @param array $Tags <p>标签</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AnalysisTime",$param) and $param["AnalysisTime"] !== null) {
            $this->AnalysisTime = $param["AnalysisTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}

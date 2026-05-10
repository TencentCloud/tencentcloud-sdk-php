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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * prompt注入检测结果结构体
 *
 * @method string getResult() 获取<p>检测结果</p>
 * @method void setResult(string $Result) 设置<p>检测结果</p>
 * @method integer getConfidence() 获取<p>置信度</p>
 * @method void setConfidence(integer $Confidence) 设置<p>置信度</p>
 * @method array getCategory() 获取<p>检出类别</p>
 * @method void setCategory(array $Category) 设置<p>检出类别</p>
 */
class PromptDetectResult extends AbstractModel
{
    /**
     * @var string <p>检测结果</p>
     */
    public $Result;

    /**
     * @var integer <p>置信度</p>
     */
    public $Confidence;

    /**
     * @var array <p>检出类别</p>
     */
    public $Category;

    /**
     * @param string $Result <p>检测结果</p>
     * @param integer $Confidence <p>置信度</p>
     * @param array $Category <p>检出类别</p>
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}

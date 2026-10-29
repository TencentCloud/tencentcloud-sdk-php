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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一个能力的名字和结果
 *
 * @method string getFeature() 获取<p>能力名</p>
 * @method void setFeature(string $Feature) 设置<p>能力名</p>
 * @method string getResult() 获取<p>结果</p>
 * @method void setResult(string $Result) 设置<p>结果</p>
 * @method boolean getSuccess() 获取<p>这个能力是否成功得到结果</p>
 * @method void setSuccess(boolean $Success) 设置<p>这个能力是否成功得到结果</p>
 */
class LlmResult extends AbstractModel
{
    /**
     * @var string <p>能力名</p>
     */
    public $Feature;

    /**
     * @var string <p>结果</p>
     */
    public $Result;

    /**
     * @var boolean <p>这个能力是否成功得到结果</p>
     */
    public $Success;

    /**
     * @param string $Feature <p>能力名</p>
     * @param string $Result <p>结果</p>
     * @param boolean $Success <p>这个能力是否成功得到结果</p>
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
        if (array_key_exists("Feature",$param) and $param["Feature"] !== null) {
            $this->Feature = $param["Feature"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }
    }
}

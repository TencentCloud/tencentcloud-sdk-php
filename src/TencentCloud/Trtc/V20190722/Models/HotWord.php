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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 热词的词和权重
 *
 * @method string getWord() 获取<p>热词</p>
 * @method void setWord(string $Word) 设置<p>热词</p>
 * @method integer getWeight() 获取<p>权重</p>
 * @method void setWeight(integer $Weight) 设置<p>权重</p>
 */
class HotWord extends AbstractModel
{
    /**
     * @var string <p>热词</p>
     */
    public $Word;

    /**
     * @var integer <p>权重</p>
     */
    public $Weight;

    /**
     * @param string $Word <p>热词</p>
     * @param integer $Weight <p>权重</p>
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
        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}

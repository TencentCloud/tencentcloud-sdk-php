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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 承接语气词信息
 *
 * @method float getFirstSentenceTimeout() 获取首句超时时间，单位秒
 * @method void setFirstSentenceTimeout(float $FirstSentenceTimeout) 设置首句超时时间，单位秒
 * @method ZHToneWordsInfo getZHToneWords() 获取承接语气词
 * @method void setZHToneWords(ZHToneWordsInfo $ZHToneWords) 设置承接语气词
 */
class ToneWordInfo extends AbstractModel
{
    /**
     * @var float 首句超时时间，单位秒
     */
    public $FirstSentenceTimeout;

    /**
     * @var ZHToneWordsInfo 承接语气词
     */
    public $ZHToneWords;

    /**
     * @param float $FirstSentenceTimeout 首句超时时间，单位秒
     * @param ZHToneWordsInfo $ZHToneWords 承接语气词
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
        if (array_key_exists("FirstSentenceTimeout",$param) and $param["FirstSentenceTimeout"] !== null) {
            $this->FirstSentenceTimeout = $param["FirstSentenceTimeout"];
        }

        if (array_key_exists("ZHToneWords",$param) and $param["ZHToneWords"] !== null) {
            $this->ZHToneWords = new ZHToneWordsInfo();
            $this->ZHToneWords->deserialize($param["ZHToneWords"]);
        }
    }
}

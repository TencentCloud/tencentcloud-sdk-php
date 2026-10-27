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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务执行的标准输出。
 *
 * @method array getLines() 获取<p>任务的标准输出。</p>
 * @method void setLines(array $Lines) 设置<p>任务的标准输出。</p>
 * @method integer getLinesOffset() 获取<p>本次返回的输出第一行对应的索引编号。</p>
 * @method void setLinesOffset(integer $LinesOffset) 设置<p>本次返回的输出第一行对应的索引编号。</p>
 * @method integer getLinesNum() 获取<p>本次返回的输出的行数。</p>
 * @method void setLinesNum(integer $LinesNum) 设置<p>本次返回的输出的行数。</p>
 * @method string getEncoding() 获取<p>输出的编码方式：<br>&lt;li&gt;PlainText 未经过Base64编码。</p>
 * @method void setEncoding(string $Encoding) 设置<p>输出的编码方式：<br>&lt;li&gt;PlainText 未经过Base64编码。</p>
 * @method integer getAllLinesOffset() 获取<p>当前有效的输出起始编号，从0开始。输出过多，会冲掉旧的输出。</p>
 * @method void setAllLinesOffset(integer $AllLinesOffset) 设置<p>当前有效的输出起始编号，从0开始。输出过多，会冲掉旧的输出。</p>
 * @method integer getAllLinesNum() 获取<p>当前有效的标准输出总行数。</p>
 * @method void setAllLinesNum(integer $AllLinesNum) 设置<p>当前有效的标准输出总行数。</p>
 */
class InvocationOutput extends AbstractModel
{
    /**
     * @var array <p>任务的标准输出。</p>
     */
    public $Lines;

    /**
     * @var integer <p>本次返回的输出第一行对应的索引编号。</p>
     */
    public $LinesOffset;

    /**
     * @var integer <p>本次返回的输出的行数。</p>
     */
    public $LinesNum;

    /**
     * @var string <p>输出的编码方式：<br>&lt;li&gt;PlainText 未经过Base64编码。</p>
     */
    public $Encoding;

    /**
     * @var integer <p>当前有效的输出起始编号，从0开始。输出过多，会冲掉旧的输出。</p>
     */
    public $AllLinesOffset;

    /**
     * @var integer <p>当前有效的标准输出总行数。</p>
     */
    public $AllLinesNum;

    /**
     * @param array $Lines <p>任务的标准输出。</p>
     * @param integer $LinesOffset <p>本次返回的输出第一行对应的索引编号。</p>
     * @param integer $LinesNum <p>本次返回的输出的行数。</p>
     * @param string $Encoding <p>输出的编码方式：<br>&lt;li&gt;PlainText 未经过Base64编码。</p>
     * @param integer $AllLinesOffset <p>当前有效的输出起始编号，从0开始。输出过多，会冲掉旧的输出。</p>
     * @param integer $AllLinesNum <p>当前有效的标准输出总行数。</p>
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
        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = $param["Lines"];
        }

        if (array_key_exists("LinesOffset",$param) and $param["LinesOffset"] !== null) {
            $this->LinesOffset = $param["LinesOffset"];
        }

        if (array_key_exists("LinesNum",$param) and $param["LinesNum"] !== null) {
            $this->LinesNum = $param["LinesNum"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("AllLinesOffset",$param) and $param["AllLinesOffset"] !== null) {
            $this->AllLinesOffset = $param["AllLinesOffset"];
        }

        if (array_key_exists("AllLinesNum",$param) and $param["AllLinesNum"] !== null) {
            $this->AllLinesNum = $param["AllLinesNum"];
        }
    }
}

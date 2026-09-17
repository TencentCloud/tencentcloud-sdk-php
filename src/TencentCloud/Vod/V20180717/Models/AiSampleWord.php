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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 样本管理，关键词输出信息。
 *
 * @method string getKeyword() 获取<p>关键词。</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键词。</p>
 * @method array getTagSet() 获取<p>关键词标签。</p>
 * @method void setTagSet(array $TagSet) 设置<p>关键词标签。</p>
 * @method array getUsageSet() 获取<p>关键词应用场景。</p>
 * @method void setUsageSet(array $UsageSet) 设置<p>关键词应用场景。</p>
 * @method string getCreateTime() 获取<p>创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getUpdateTime() 获取<p>最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 */
class AiSampleWord extends AbstractModel
{
    /**
     * @var string <p>关键词。</p>
     */
    public $Keyword;

    /**
     * @var array <p>关键词标签。</p>
     */
    public $TagSet;

    /**
     * @var array <p>关键词应用场景。</p>
     */
    public $UsageSet;

    /**
     * @var string <p>创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $UpdateTime;

    /**
     * @param string $Keyword <p>关键词。</p>
     * @param array $TagSet <p>关键词标签。</p>
     * @param array $UsageSet <p>关键词应用场景。</p>
     * @param string $CreateTime <p>创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $UpdateTime <p>最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("UsageSet",$param) and $param["UsageSet"] !== null) {
            $this->UsageSet = $param["UsageSet"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

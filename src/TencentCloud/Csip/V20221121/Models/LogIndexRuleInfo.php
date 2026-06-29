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
 * 日志索引规则信息
 *
 * @method LogFullTextInfo getFullText() 获取<p>全文索引</p>
 * @method void setFullText(LogFullTextInfo $FullText) 设置<p>全文索引</p>
 * @method LogRuleKeyValueInfo getKeyValue() 获取<p>键值索引</p>
 * @method void setKeyValue(LogRuleKeyValueInfo $KeyValue) 设置<p>键值索引</p>
 * @method LogRuleKeyValueInfo getTag() 获取<p>标签</p>
 * @method void setTag(LogRuleKeyValueInfo $Tag) 设置<p>标签</p>
 * @method LogDynamicIndex getDynamicIndex() 获取<p>动态索引</p>
 * @method void setDynamicIndex(LogDynamicIndex $DynamicIndex) 设置<p>动态索引</p>
 */
class LogIndexRuleInfo extends AbstractModel
{
    /**
     * @var LogFullTextInfo <p>全文索引</p>
     */
    public $FullText;

    /**
     * @var LogRuleKeyValueInfo <p>键值索引</p>
     */
    public $KeyValue;

    /**
     * @var LogRuleKeyValueInfo <p>标签</p>
     */
    public $Tag;

    /**
     * @var LogDynamicIndex <p>动态索引</p>
     */
    public $DynamicIndex;

    /**
     * @param LogFullTextInfo $FullText <p>全文索引</p>
     * @param LogRuleKeyValueInfo $KeyValue <p>键值索引</p>
     * @param LogRuleKeyValueInfo $Tag <p>标签</p>
     * @param LogDynamicIndex $DynamicIndex <p>动态索引</p>
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
        if (array_key_exists("FullText",$param) and $param["FullText"] !== null) {
            $this->FullText = new LogFullTextInfo();
            $this->FullText->deserialize($param["FullText"]);
        }

        if (array_key_exists("KeyValue",$param) and $param["KeyValue"] !== null) {
            $this->KeyValue = new LogRuleKeyValueInfo();
            $this->KeyValue->deserialize($param["KeyValue"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = new LogRuleKeyValueInfo();
            $this->Tag->deserialize($param["Tag"]);
        }

        if (array_key_exists("DynamicIndex",$param) and $param["DynamicIndex"] !== null) {
            $this->DynamicIndex = new LogDynamicIndex();
            $this->DynamicIndex->deserialize($param["DynamicIndex"]);
        }
    }
}

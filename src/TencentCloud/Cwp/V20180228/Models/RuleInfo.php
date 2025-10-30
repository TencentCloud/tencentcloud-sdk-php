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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引规则
 *
 * @method FullTextInfo getFullText() 获取全文索引的相关配置
 * @method void setFullText(FullTextInfo $FullText) 设置全文索引的相关配置
 * @method KeyValueInfo getKeyValue() 获取键值索引的相关配置
 * @method void setKeyValue(KeyValueInfo $KeyValue) 设置键值索引的相关配置
 * @method KeyValueInfo getTag() 获取元字段索引配置
 * @method void setTag(KeyValueInfo $Tag) 设置元字段索引配置
 */
class RuleInfo extends AbstractModel
{
    /**
     * @var FullTextInfo 全文索引的相关配置
     */
    public $FullText;

    /**
     * @var KeyValueInfo 键值索引的相关配置
     */
    public $KeyValue;

    /**
     * @var KeyValueInfo 元字段索引配置
     */
    public $Tag;

    /**
     * @param FullTextInfo $FullText 全文索引的相关配置
     * @param KeyValueInfo $KeyValue 键值索引的相关配置
     * @param KeyValueInfo $Tag 元字段索引配置
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
            $this->FullText = new FullTextInfo();
            $this->FullText->deserialize($param["FullText"]);
        }

        if (array_key_exists("KeyValue",$param) and $param["KeyValue"] !== null) {
            $this->KeyValue = new KeyValueInfo();
            $this->KeyValue->deserialize($param["KeyValue"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = new KeyValueInfo();
            $this->Tag->deserialize($param["Tag"]);
        }
    }
}

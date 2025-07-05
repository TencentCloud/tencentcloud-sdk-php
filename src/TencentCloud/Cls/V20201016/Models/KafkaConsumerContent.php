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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kafka协议消费内容
 *
 * @method integer getFormat() 获取消费数据格式。 0：原始内容；1：JSON。
 * @method void setFormat(integer $Format) 设置消费数据格式。 0：原始内容；1：JSON。
 * @method boolean getEnableTag() 获取是否投递 TAG 信息
Format为0时，此字段不需要赋值
 * @method void setEnableTag(boolean $EnableTag) 设置是否投递 TAG 信息
Format为0时，此字段不需要赋值
 * @method array getMetaFields() 获取元数据信息列表, 可选值为：\_\_SOURCE\_\_、\_\_FILENAME\_\_
、\_\_TIMESTAMP\_\_、\_\_HOSTNAME\_\_、\_\_PKGID\_\_
Format为0时，此字段不需要赋值
 * @method void setMetaFields(array $MetaFields) 设置元数据信息列表, 可选值为：\_\_SOURCE\_\_、\_\_FILENAME\_\_
、\_\_TIMESTAMP\_\_、\_\_HOSTNAME\_\_、\_\_PKGID\_\_
Format为0时，此字段不需要赋值
 * @method integer getTagTransaction() 获取tag数据处理方式：1:不平铺（默认值）；2:平铺。

不平铺示例：
TAG信息：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
不平铺：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`

平铺示例：
TAG信息：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
平铺：`{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
 * @method void setTagTransaction(integer $TagTransaction) 设置tag数据处理方式：1:不平铺（默认值）；2:平铺。

不平铺示例：
TAG信息：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
不平铺：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`

平铺示例：
TAG信息：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
平铺：`{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
 * @method integer getJsonType() 获取消费数据Json格式：
1：不转义（默认格式）
2：转义

投递Json格式。
JsonType为1：和原始日志一致，不转义。示例：
日志原文：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
投递到Ckafka：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`

JsonType为2：转义。示例：
日志原文：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
投递到Ckafka：`{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
 * @method void setJsonType(integer $JsonType) 设置消费数据Json格式：
1：不转义（默认格式）
2：转义

投递Json格式。
JsonType为1：和原始日志一致，不转义。示例：
日志原文：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
投递到Ckafka：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`

JsonType为2：转义。示例：
日志原文：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
投递到Ckafka：`{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
 */
class KafkaConsumerContent extends AbstractModel
{
    /**
     * @var integer 消费数据格式。 0：原始内容；1：JSON。
     */
    public $Format;

    /**
     * @var boolean 是否投递 TAG 信息
Format为0时，此字段不需要赋值
     */
    public $EnableTag;

    /**
     * @var array 元数据信息列表, 可选值为：\_\_SOURCE\_\_、\_\_FILENAME\_\_
、\_\_TIMESTAMP\_\_、\_\_HOSTNAME\_\_、\_\_PKGID\_\_
Format为0时，此字段不需要赋值
     */
    public $MetaFields;

    /**
     * @var integer tag数据处理方式：1:不平铺（默认值）；2:平铺。

不平铺示例：
TAG信息：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
不平铺：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`

平铺示例：
TAG信息：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
平铺：`{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
     */
    public $TagTransaction;

    /**
     * @var integer 消费数据Json格式：
1：不转义（默认格式）
2：转义

投递Json格式。
JsonType为1：和原始日志一致，不转义。示例：
日志原文：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
投递到Ckafka：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`

JsonType为2：转义。示例：
日志原文：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
投递到Ckafka：`{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
     */
    public $JsonType;

    /**
     * @param integer $Format 消费数据格式。 0：原始内容；1：JSON。
     * @param boolean $EnableTag 是否投递 TAG 信息
Format为0时，此字段不需要赋值
     * @param array $MetaFields 元数据信息列表, 可选值为：\_\_SOURCE\_\_、\_\_FILENAME\_\_
、\_\_TIMESTAMP\_\_、\_\_HOSTNAME\_\_、\_\_PKGID\_\_
Format为0时，此字段不需要赋值
     * @param integer $TagTransaction tag数据处理方式：1:不平铺（默认值）；2:平铺。

不平铺示例：
TAG信息：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
不平铺：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`

平铺示例：
TAG信息：`{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
平铺：`{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
     * @param integer $JsonType 消费数据Json格式：
1：不转义（默认格式）
2：转义

投递Json格式。
JsonType为1：和原始日志一致，不转义。示例：
日志原文：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
投递到Ckafka：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`

JsonType为2：转义。示例：
日志原文：`{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
投递到Ckafka：`{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("EnableTag",$param) and $param["EnableTag"] !== null) {
            $this->EnableTag = $param["EnableTag"];
        }

        if (array_key_exists("MetaFields",$param) and $param["MetaFields"] !== null) {
            $this->MetaFields = $param["MetaFields"];
        }

        if (array_key_exists("TagTransaction",$param) and $param["TagTransaction"] !== null) {
            $this->TagTransaction = $param["TagTransaction"];
        }

        if (array_key_exists("JsonType",$param) and $param["JsonType"] !== null) {
            $this->JsonType = $param["JsonType"];
        }
    }
}

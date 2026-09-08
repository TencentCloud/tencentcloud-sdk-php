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
 * @method integer getFormat() 获取<p>消费数据格式。 0：原始内容；1：JSON。</p>
 * @method void setFormat(integer $Format) 设置<p>消费数据格式。 0：原始内容；1：JSON。</p>
 * @method boolean getEnableTag() 获取<p>是否投递 TAG 信息<br>Format为0时，此字段不需要赋值</p>
 * @method void setEnableTag(boolean $EnableTag) 设置<p>是否投递 TAG 信息<br>Format为0时，此字段不需要赋值</p>
 * @method array getMetaFields() 获取<p>元数据信息列表, 可选值为：__SOURCE__、__FILENAME__<br>、__TIMESTAMP__、__HOSTNAME__、__PKGID__<br>Format为0时，此字段不需要赋值</p>
 * @method void setMetaFields(array $MetaFields) 设置<p>元数据信息列表, 可选值为：__SOURCE__、__FILENAME__<br>、__TIMESTAMP__、__HOSTNAME__、__PKGID__<br>Format为0时，此字段不需要赋值</p>
 * @method integer getTagTransaction() 获取<p>tag数据处理方式：1:不平铺（默认值）；2:平铺。</p><p>不平铺示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>不平铺：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>平铺示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>平铺：<code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
 * @method void setTagTransaction(integer $TagTransaction) 设置<p>tag数据处理方式：1:不平铺（默认值）；2:平铺。</p><p>不平铺示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>不平铺：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>平铺示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>平铺：<code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
 * @method integer getJsonType() 获取<p>消费数据Json格式：<br>1：不转义（默认格式）<br>2：转义</p><p>投递Json格式。<br>JsonType为1：和原始日志一致，不转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></p><p>JsonType为2：转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></p>
 * @method void setJsonType(integer $JsonType) 设置<p>消费数据Json格式：<br>1：不转义（默认格式）<br>2：转义</p><p>投递Json格式。<br>JsonType为1：和原始日志一致，不转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></p><p>JsonType为2：转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></p>
 * @method boolean getAutoConvertNumber() 获取<p>数值类型自动转换开关</p><p>枚举值：</p><ul><li>true： JSON 结构中第一层级的 value 中的数字字符串（如 &quot;123&quot; ）会被自动转换为数值类型（int / float）。</li><li>false： JSON 结构中第一层级的 value 中的数字字符串（如 &quot;123&quot; ）为字符串。</li></ul><p>默认值：false</p>
 * @method void setAutoConvertNumber(boolean $AutoConvertNumber) 设置<p>数值类型自动转换开关</p><p>枚举值：</p><ul><li>true： JSON 结构中第一层级的 value 中的数字字符串（如 &quot;123&quot; ）会被自动转换为数值类型（int / float）。</li><li>false： JSON 结构中第一层级的 value 中的数字字符串（如 &quot;123&quot; ）为字符串。</li></ul><p>默认值：false</p>
 */
class KafkaConsumerContent extends AbstractModel
{
    /**
     * @var integer <p>消费数据格式。 0：原始内容；1：JSON。</p>
     */
    public $Format;

    /**
     * @var boolean <p>是否投递 TAG 信息<br>Format为0时，此字段不需要赋值</p>
     */
    public $EnableTag;

    /**
     * @var array <p>元数据信息列表, 可选值为：__SOURCE__、__FILENAME__<br>、__TIMESTAMP__、__HOSTNAME__、__PKGID__<br>Format为0时，此字段不需要赋值</p>
     */
    public $MetaFields;

    /**
     * @var integer <p>tag数据处理方式：1:不平铺（默认值）；2:平铺。</p><p>不平铺示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>不平铺：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>平铺示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>平铺：<code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
     */
    public $TagTransaction;

    /**
     * @var integer <p>消费数据Json格式：<br>1：不转义（默认格式）<br>2：转义</p><p>投递Json格式。<br>JsonType为1：和原始日志一致，不转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></p><p>JsonType为2：转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></p>
     */
    public $JsonType;

    /**
     * @var boolean <p>数值类型自动转换开关</p><p>枚举值：</p><ul><li>true： JSON 结构中第一层级的 value 中的数字字符串（如 &quot;123&quot; ）会被自动转换为数值类型（int / float）。</li><li>false： JSON 结构中第一层级的 value 中的数字字符串（如 &quot;123&quot; ）为字符串。</li></ul><p>默认值：false</p>
     */
    public $AutoConvertNumber;

    /**
     * @param integer $Format <p>消费数据格式。 0：原始内容；1：JSON。</p>
     * @param boolean $EnableTag <p>是否投递 TAG 信息<br>Format为0时，此字段不需要赋值</p>
     * @param array $MetaFields <p>元数据信息列表, 可选值为：__SOURCE__、__FILENAME__<br>、__TIMESTAMP__、__HOSTNAME__、__PKGID__<br>Format为0时，此字段不需要赋值</p>
     * @param integer $TagTransaction <p>tag数据处理方式：1:不平铺（默认值）；2:平铺。</p><p>不平铺示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>不平铺：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>平铺示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>平铺：<code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
     * @param integer $JsonType <p>消费数据Json格式：<br>1：不转义（默认格式）<br>2：转义</p><p>投递Json格式。<br>JsonType为1：和原始日志一致，不转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></p><p>JsonType为2：转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></p>
     * @param boolean $AutoConvertNumber <p>数值类型自动转换开关</p><p>枚举值：</p><ul><li>true： JSON 结构中第一层级的 value 中的数字字符串（如 &quot;123&quot; ）会被自动转换为数值类型（int / float）。</li><li>false： JSON 结构中第一层级的 value 中的数字字符串（如 &quot;123&quot; ）为字符串。</li></ul><p>默认值：false</p>
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

        if (array_key_exists("AutoConvertNumber",$param) and $param["AutoConvertNumber"] !== null) {
            $this->AutoConvertNumber = $param["AutoConvertNumber"];
        }
    }
}

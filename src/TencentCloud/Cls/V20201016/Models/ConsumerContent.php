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
 * 投递任务出入参 Content
 *
 * @method boolean getEnableTag() 获取<p>是否投递 TAG 信息。<br>当EnableTag为true时，表示投递TAG元信息。</p>
 * @method void setEnableTag(boolean $EnableTag) 设置<p>是否投递 TAG 信息。<br>当EnableTag为true时，表示投递TAG元信息。</p>
 * @method array getMetaFields() 获取<p>需要投递的元数据列表，目前仅支持：__SOURCE__，__FILENAME__，__TIMESTAMP__，__HOSTNAME__和__PKGID__</p>
 * @method void setMetaFields(array $MetaFields) 设置<p>需要投递的元数据列表，目前仅支持：__SOURCE__，__FILENAME__，__TIMESTAMP__，__HOSTNAME__和__PKGID__</p>
 * @method boolean getTagJsonNotTiled() 获取<p>当EnableTag为true时，必须填写TagJsonNotTiled字段。<br>TagJsonNotTiled用于标识tag信息是否json平铺。</p><p>TagJsonNotTiled为true时不平铺，示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>不平铺：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>TagJsonNotTiled为false时平铺，示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>平铺：<code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
 * @method void setTagJsonNotTiled(boolean $TagJsonNotTiled) 设置<p>当EnableTag为true时，必须填写TagJsonNotTiled字段。<br>TagJsonNotTiled用于标识tag信息是否json平铺。</p><p>TagJsonNotTiled为true时不平铺，示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>不平铺：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>TagJsonNotTiled为false时平铺，示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>平铺：<code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
 * @method integer getTimestampAccuracy() 获取<p>投递时间戳精度，可选项 [1：秒；2：毫秒] ，默认是1。</p>
 * @method void setTimestampAccuracy(integer $TimestampAccuracy) 设置<p>投递时间戳精度，可选项 [1：秒；2：毫秒] ，默认是1。</p>
 * @method integer getJsonType() 获取<p>投递Json格式。</p><p>枚举值：</p><ul><li>0： 转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></li><li>1： 和原始日志一致，不转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></li></ul>
 * @method void setJsonType(integer $JsonType) 设置<p>投递Json格式。</p><p>枚举值：</p><ul><li>0： 转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></li><li>1： 和原始日志一致，不转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></li></ul>
 */
class ConsumerContent extends AbstractModel
{
    /**
     * @var boolean <p>是否投递 TAG 信息。<br>当EnableTag为true时，表示投递TAG元信息。</p>
     */
    public $EnableTag;

    /**
     * @var array <p>需要投递的元数据列表，目前仅支持：__SOURCE__，__FILENAME__，__TIMESTAMP__，__HOSTNAME__和__PKGID__</p>
     */
    public $MetaFields;

    /**
     * @var boolean <p>当EnableTag为true时，必须填写TagJsonNotTiled字段。<br>TagJsonNotTiled用于标识tag信息是否json平铺。</p><p>TagJsonNotTiled为true时不平铺，示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>不平铺：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>TagJsonNotTiled为false时平铺，示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>平铺：<code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
     */
    public $TagJsonNotTiled;

    /**
     * @var integer <p>投递时间戳精度，可选项 [1：秒；2：毫秒] ，默认是1。</p>
     */
    public $TimestampAccuracy;

    /**
     * @var integer <p>投递Json格式。</p><p>枚举值：</p><ul><li>0： 转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></li><li>1： 和原始日志一致，不转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></li></ul>
     */
    public $JsonType;

    /**
     * @param boolean $EnableTag <p>是否投递 TAG 信息。<br>当EnableTag为true时，表示投递TAG元信息。</p>
     * @param array $MetaFields <p>需要投递的元数据列表，目前仅支持：__SOURCE__，__FILENAME__，__TIMESTAMP__，__HOSTNAME__和__PKGID__</p>
     * @param boolean $TagJsonNotTiled <p>当EnableTag为true时，必须填写TagJsonNotTiled字段。<br>TagJsonNotTiled用于标识tag信息是否json平铺。</p><p>TagJsonNotTiled为true时不平铺，示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>不平铺：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>TagJsonNotTiled为false时平铺，示例：<br>TAG信息：<code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>平铺：<code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
     * @param integer $TimestampAccuracy <p>投递时间戳精度，可选项 [1：秒；2：毫秒] ，默认是1。</p>
     * @param integer $JsonType <p>投递Json格式。</p><p>枚举值：</p><ul><li>0： 转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></li><li>1： 和原始日志一致，不转义。示例：<br>日志原文：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>投递到Ckafka：<code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></li></ul>
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
        if (array_key_exists("EnableTag",$param) and $param["EnableTag"] !== null) {
            $this->EnableTag = $param["EnableTag"];
        }

        if (array_key_exists("MetaFields",$param) and $param["MetaFields"] !== null) {
            $this->MetaFields = $param["MetaFields"];
        }

        if (array_key_exists("TagJsonNotTiled",$param) and $param["TagJsonNotTiled"] !== null) {
            $this->TagJsonNotTiled = $param["TagJsonNotTiled"];
        }

        if (array_key_exists("TimestampAccuracy",$param) and $param["TimestampAccuracy"] !== null) {
            $this->TimestampAccuracy = $param["TimestampAccuracy"];
        }

        if (array_key_exists("JsonType",$param) and $param["JsonType"] !== null) {
            $this->JsonType = $param["JsonType"];
        }
    }
}

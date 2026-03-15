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
 * DescribeIndex返回参数结构体
 *
 * @method string getTopicId() 获取<p>日志主题Id</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题Id</p>
 * @method boolean getStatus() 获取<p>索引状态。true：开启状态，false：关闭状态<br>开启后可对日志进行检索分析，将产生索引流量、索引存储及相应费用。<a href="https://cloud.tencent.com/document/product/614/45802#.E8.AE.A1.E8.B4.B9.E9.A1.B9">费用详情</a></p>
 * @method void setStatus(boolean $Status) 设置<p>索引状态。true：开启状态，false：关闭状态<br>开启后可对日志进行检索分析，将产生索引流量、索引存储及相应费用。<a href="https://cloud.tencent.com/document/product/614/45802#.E8.AE.A1.E8.B4.B9.E9.A1.B9">费用详情</a></p>
 * @method RuleInfo getRule() 获取<p>索引配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRule(RuleInfo $Rule) 设置<p>索引配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取<p>索引修改时间，初始值为索引创建时间。格式 <code>YYYY-MM-DD HH:MM:SS</code></p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>索引修改时间，初始值为索引创建时间。格式 <code>YYYY-MM-DD HH:MM:SS</code></p>
 * @method boolean getIncludeInternalFields() 获取<p>内置保留字段（<code>__FILENAME__</code>，<code>__HOSTNAME__</code>及<code>__SOURCE__</code>）是否包含至全文索引</p><ul><li>false:不包含</li><li>true:包含</li></ul>
 * @method void setIncludeInternalFields(boolean $IncludeInternalFields) 设置<p>内置保留字段（<code>__FILENAME__</code>，<code>__HOSTNAME__</code>及<code>__SOURCE__</code>）是否包含至全文索引</p><ul><li>false:不包含</li><li>true:包含</li></ul>
 * @method integer getMetadataFlag() 获取<p>元数据字段（前缀为<code>__TAG__</code>的字段）是否包含至全文索引</p><ul><li>0:仅包含开启键值索引的元数据字段</li><li>1:包含所有元数据字段</li><li>2:不包含任何元数据字段</li></ul>
 * @method void setMetadataFlag(integer $MetadataFlag) 设置<p>元数据字段（前缀为<code>__TAG__</code>的字段）是否包含至全文索引</p><ul><li>0:仅包含开启键值索引的元数据字段</li><li>1:包含所有元数据字段</li><li>2:不包含任何元数据字段</li></ul>
 * @method string getCoverageField() 获取<p>自定义日志解析异常存储字段。</p>
 * @method void setCoverageField(string $CoverageField) 设置<p>自定义日志解析异常存储字段。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIndexResponse extends AbstractModel
{
    /**
     * @var string <p>日志主题Id</p>
     */
    public $TopicId;

    /**
     * @var boolean <p>索引状态。true：开启状态，false：关闭状态<br>开启后可对日志进行检索分析，将产生索引流量、索引存储及相应费用。<a href="https://cloud.tencent.com/document/product/614/45802#.E8.AE.A1.E8.B4.B9.E9.A1.B9">费用详情</a></p>
     */
    public $Status;

    /**
     * @var RuleInfo <p>索引配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rule;

    /**
     * @var string <p>索引修改时间，初始值为索引创建时间。格式 <code>YYYY-MM-DD HH:MM:SS</code></p>
     */
    public $ModifyTime;

    /**
     * @var boolean <p>内置保留字段（<code>__FILENAME__</code>，<code>__HOSTNAME__</code>及<code>__SOURCE__</code>）是否包含至全文索引</p><ul><li>false:不包含</li><li>true:包含</li></ul>
     */
    public $IncludeInternalFields;

    /**
     * @var integer <p>元数据字段（前缀为<code>__TAG__</code>的字段）是否包含至全文索引</p><ul><li>0:仅包含开启键值索引的元数据字段</li><li>1:包含所有元数据字段</li><li>2:不包含任何元数据字段</li></ul>
     */
    public $MetadataFlag;

    /**
     * @var string <p>自定义日志解析异常存储字段。</p>
     */
    public $CoverageField;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TopicId <p>日志主题Id</p>
     * @param boolean $Status <p>索引状态。true：开启状态，false：关闭状态<br>开启后可对日志进行检索分析，将产生索引流量、索引存储及相应费用。<a href="https://cloud.tencent.com/document/product/614/45802#.E8.AE.A1.E8.B4.B9.E9.A1.B9">费用详情</a></p>
     * @param RuleInfo $Rule <p>索引配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime <p>索引修改时间，初始值为索引创建时间。格式 <code>YYYY-MM-DD HH:MM:SS</code></p>
     * @param boolean $IncludeInternalFields <p>内置保留字段（<code>__FILENAME__</code>，<code>__HOSTNAME__</code>及<code>__SOURCE__</code>）是否包含至全文索引</p><ul><li>false:不包含</li><li>true:包含</li></ul>
     * @param integer $MetadataFlag <p>元数据字段（前缀为<code>__TAG__</code>的字段）是否包含至全文索引</p><ul><li>0:仅包含开启键值索引的元数据字段</li><li>1:包含所有元数据字段</li><li>2:不包含任何元数据字段</li></ul>
     * @param string $CoverageField <p>自定义日志解析异常存储字段。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new RuleInfo();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IncludeInternalFields",$param) and $param["IncludeInternalFields"] !== null) {
            $this->IncludeInternalFields = $param["IncludeInternalFields"];
        }

        if (array_key_exists("MetadataFlag",$param) and $param["MetadataFlag"] !== null) {
            $this->MetadataFlag = $param["MetadataFlag"];
        }

        if (array_key_exists("CoverageField",$param) and $param["CoverageField"] !== null) {
            $this->CoverageField = $param["CoverageField"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

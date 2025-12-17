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
 * @method string getTopicId() 获取日志主题Id
 * @method void setTopicId(string $TopicId) 设置日志主题Id
 * @method boolean getStatus() 获取索引状态。true：开启状态，false：关闭状态
开启后可对日志进行检索分析，将产生索引流量、索引存储及相应费用。[费用详情](https://cloud.tencent.com/document/product/614/45802#.E8.AE.A1.E8.B4.B9.E9.A1.B9)
 * @method void setStatus(boolean $Status) 设置索引状态。true：开启状态，false：关闭状态
开启后可对日志进行检索分析，将产生索引流量、索引存储及相应费用。[费用详情](https://cloud.tencent.com/document/product/614/45802#.E8.AE.A1.E8.B4.B9.E9.A1.B9)
 * @method RuleInfo getRule() 获取索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRule(RuleInfo $Rule) 设置索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取索引修改时间，初始值为索引创建时间。格式 `YYYY-MM-DD HH:MM:SS`
 * @method void setModifyTime(string $ModifyTime) 设置索引修改时间，初始值为索引创建时间。格式 `YYYY-MM-DD HH:MM:SS`
 * @method boolean getIncludeInternalFields() 获取内置保留字段（`__FILENAME__`，`__HOSTNAME__`及`__SOURCE__`）是否包含至全文索引
* false:不包含
* true:包含
 * @method void setIncludeInternalFields(boolean $IncludeInternalFields) 设置内置保留字段（`__FILENAME__`，`__HOSTNAME__`及`__SOURCE__`）是否包含至全文索引
* false:不包含
* true:包含
 * @method integer getMetadataFlag() 获取元数据字段（前缀为`__TAG__`的字段）是否包含至全文索引
* 0:仅包含开启键值索引的元数据字段
* 1:包含所有元数据字段
* 2:不包含任何元数据字段
 * @method void setMetadataFlag(integer $MetadataFlag) 设置元数据字段（前缀为`__TAG__`的字段）是否包含至全文索引
* 0:仅包含开启键值索引的元数据字段
* 1:包含所有元数据字段
* 2:不包含任何元数据字段
 * @method string getCoverageField() 获取自定义日志解析异常存储字段。
 * @method void setCoverageField(string $CoverageField) 设置自定义日志解析异常存储字段。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIndexResponse extends AbstractModel
{
    /**
     * @var string 日志主题Id
     */
    public $TopicId;

    /**
     * @var boolean 索引状态。true：开启状态，false：关闭状态
开启后可对日志进行检索分析，将产生索引流量、索引存储及相应费用。[费用详情](https://cloud.tencent.com/document/product/614/45802#.E8.AE.A1.E8.B4.B9.E9.A1.B9)
     */
    public $Status;

    /**
     * @var RuleInfo 索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rule;

    /**
     * @var string 索引修改时间，初始值为索引创建时间。格式 `YYYY-MM-DD HH:MM:SS`
     */
    public $ModifyTime;

    /**
     * @var boolean 内置保留字段（`__FILENAME__`，`__HOSTNAME__`及`__SOURCE__`）是否包含至全文索引
* false:不包含
* true:包含
     */
    public $IncludeInternalFields;

    /**
     * @var integer 元数据字段（前缀为`__TAG__`的字段）是否包含至全文索引
* 0:仅包含开启键值索引的元数据字段
* 1:包含所有元数据字段
* 2:不包含任何元数据字段
     */
    public $MetadataFlag;

    /**
     * @var string 自定义日志解析异常存储字段。
     */
    public $CoverageField;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TopicId 日志主题Id
     * @param boolean $Status 索引状态。true：开启状态，false：关闭状态
开启后可对日志进行检索分析，将产生索引流量、索引存储及相应费用。[费用详情](https://cloud.tencent.com/document/product/614/45802#.E8.AE.A1.E8.B4.B9.E9.A1.B9)
     * @param RuleInfo $Rule 索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 索引修改时间，初始值为索引创建时间。格式 `YYYY-MM-DD HH:MM:SS`
     * @param boolean $IncludeInternalFields 内置保留字段（`__FILENAME__`，`__HOSTNAME__`及`__SOURCE__`）是否包含至全文索引
* false:不包含
* true:包含
     * @param integer $MetadataFlag 元数据字段（前缀为`__TAG__`的字段）是否包含至全文索引
* 0:仅包含开启键值索引的元数据字段
* 1:包含所有元数据字段
* 2:不包含任何元数据字段
     * @param string $CoverageField 自定义日志解析异常存储字段。
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

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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字段级标签信息，用于资产打标时指定字段维度的标签（入参+出参共用）
 *
 * @method string getFieldName() 获取字段名称（必填）；清除标记场景（LabelId=-1）下为待清除字段名
 * @method void setFieldName(string $FieldName) 设置字段名称（必填）；清除标记场景（LabelId=-1）下为待清除字段名
 * @method string getLabelId() 获取<p>标签ID</p><p>特殊值：-1 表示「清除标记」，仅在 BatchAttachAssetTag 接口中生效：服务端会清除该 FieldName 下所有已有字段标签。使用 -1 时 FieldName 必填，其余字段可留空。</p>
 * @method void setLabelId(string $LabelId) 设置<p>标签ID</p><p>特殊值：-1 表示「清除标记」，仅在 BatchAttachAssetTag 接口中生效：服务端会清除该 FieldName 下所有已有字段标签。使用 -1 时 FieldName 必填，其余字段可留空。</p>
 * @method string getLabelName() 获取标签名称（可选）
 * @method void setLabelName(string $LabelName) 设置标签名称（可选）
 * @method integer getLabelType() 获取<p>标签类型</p><p>枚举值：</p><ul><li>1：GOVERNANCE_LABEL：治理标签</li><li>2：CUSTOM_LABEL：自定义标签</li><li>3：PROPERTY_LABEL：属性标签</li><li>4：DESENSITIZATION_LABEL：脱敏标签</li></ul><p>字段打标规则：非脱敏标签（1/2/3）时 LabelValue 必填；脱敏标签（4）时 LabelValue 可为空</p>
 * @method void setLabelType(integer $LabelType) 设置<p>标签类型</p><p>枚举值：</p><ul><li>1：GOVERNANCE_LABEL：治理标签</li><li>2：CUSTOM_LABEL：自定义标签</li><li>3：PROPERTY_LABEL：属性标签</li><li>4：DESENSITIZATION_LABEL：脱敏标签</li></ul><p>字段打标规则：非脱敏标签（1/2/3）时 LabelValue 必填；脱敏标签（4）时 LabelValue 可为空</p>
 * @method string getFieldType() 获取字段类型（可选），如 string、int、bigint 等
 * @method void setFieldType(string $FieldType) 设置字段类型（可选），如 string、int、bigint 等
 * @method string getLabelValueId() 获取标签值ID（可选）；非脱敏标签（LabelType!=4）建议填充；属性标签（LabelType=3）可为0；脱敏标签（LabelType=4）及清除标记（LabelId=-1）场景可留空
 * @method void setLabelValueId(string $LabelValueId) 设置标签值ID（可选）；非脱敏标签（LabelType!=4）建议填充；属性标签（LabelType=3）可为0；脱敏标签（LabelType=4）及清除标记（LabelId=-1）场景可留空
 * @method string getLabelValue() 获取标签值；非脱敏标签（LabelType!=4）必填，例如治理/自定义/属性标签均需携带业务语义值；脱敏标签（LabelType=4）及清除标记（LabelId=-1）场景可为空
 * @method void setLabelValue(string $LabelValue) 设置标签值；非脱敏标签（LabelType!=4）必填，例如治理/自定义/属性标签均需携带业务语义值；脱敏标签（LabelType=4）及清除标记（LabelId=-1）场景可为空
 */
class FieldTagInfo extends AbstractModel
{
    /**
     * @var string 字段名称（必填）；清除标记场景（LabelId=-1）下为待清除字段名
     */
    public $FieldName;

    /**
     * @var string <p>标签ID</p><p>特殊值：-1 表示「清除标记」，仅在 BatchAttachAssetTag 接口中生效：服务端会清除该 FieldName 下所有已有字段标签。使用 -1 时 FieldName 必填，其余字段可留空。</p>
     */
    public $LabelId;

    /**
     * @var string 标签名称（可选）
     */
    public $LabelName;

    /**
     * @var integer <p>标签类型</p><p>枚举值：</p><ul><li>1：GOVERNANCE_LABEL：治理标签</li><li>2：CUSTOM_LABEL：自定义标签</li><li>3：PROPERTY_LABEL：属性标签</li><li>4：DESENSITIZATION_LABEL：脱敏标签</li></ul><p>字段打标规则：非脱敏标签（1/2/3）时 LabelValue 必填；脱敏标签（4）时 LabelValue 可为空</p>
     */
    public $LabelType;

    /**
     * @var string 字段类型（可选），如 string、int、bigint 等
     */
    public $FieldType;

    /**
     * @var string 标签值ID（可选）；非脱敏标签（LabelType!=4）建议填充；属性标签（LabelType=3）可为0；脱敏标签（LabelType=4）及清除标记（LabelId=-1）场景可留空
     */
    public $LabelValueId;

    /**
     * @var string 标签值；非脱敏标签（LabelType!=4）必填，例如治理/自定义/属性标签均需携带业务语义值；脱敏标签（LabelType=4）及清除标记（LabelId=-1）场景可为空
     */
    public $LabelValue;

    /**
     * @param string $FieldName 字段名称（必填）；清除标记场景（LabelId=-1）下为待清除字段名
     * @param string $LabelId <p>标签ID</p><p>特殊值：-1 表示「清除标记」，仅在 BatchAttachAssetTag 接口中生效：服务端会清除该 FieldName 下所有已有字段标签。使用 -1 时 FieldName 必填，其余字段可留空。</p>
     * @param string $LabelName 标签名称（可选）
     * @param integer $LabelType <p>标签类型</p><p>枚举值：</p><ul><li>1：GOVERNANCE_LABEL：治理标签</li><li>2：CUSTOM_LABEL：自定义标签</li><li>3：PROPERTY_LABEL：属性标签</li><li>4：DESENSITIZATION_LABEL：脱敏标签</li></ul><p>字段打标规则：非脱敏标签（1/2/3）时 LabelValue 必填；脱敏标签（4）时 LabelValue 可为空</p>
     * @param string $FieldType 字段类型（可选），如 string、int、bigint 等
     * @param string $LabelValueId 标签值ID（可选）；非脱敏标签（LabelType!=4）建议填充；属性标签（LabelType=3）可为0；脱敏标签（LabelType=4）及清除标记（LabelId=-1）场景可留空
     * @param string $LabelValue 标签值；非脱敏标签（LabelType!=4）必填，例如治理/自定义/属性标签均需携带业务语义值；脱敏标签（LabelType=4）及清除标记（LabelId=-1）场景可为空
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
        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("LabelType",$param) and $param["LabelType"] !== null) {
            $this->LabelType = $param["LabelType"];
        }

        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("LabelValueId",$param) and $param["LabelValueId"] !== null) {
            $this->LabelValueId = $param["LabelValueId"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }
    }
}

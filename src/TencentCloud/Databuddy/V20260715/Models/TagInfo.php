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
 * 标签信息，入参时用于指定打标标签，出参时返回资产已打的标签（入参+出参共用）
 *
 * @method string getLabelId() 获取标签ID（入参必填）
 * @method void setLabelId(string $LabelId) 设置标签ID（入参必填）
 * @method string getLabelName() 获取标签名称（入参必填）
 * @method void setLabelName(string $LabelName) 设置标签名称（入参必填）
 * @method integer getType() 获取<p>标签类型（入参必填）</p><p>枚举值：</p><ul><li>1：GOVERNANCE_LABEL：治理标签（标签管理页手动创建）</li><li>2：CUSTOM_LABEL：自定义标签（打标时自动创建）</li><li>3：PROPERTY_LABEL：属性标签（Key-Value键值对）</li><li>4：DESENSITIZATION_LABEL：脱敏标签（与脱敏策略绑定）</li></ul>
 * @method void setType(integer $Type) 设置<p>标签类型（入参必填）</p><p>枚举值：</p><ul><li>1：GOVERNANCE_LABEL：治理标签（标签管理页手动创建）</li><li>2：CUSTOM_LABEL：自定义标签（打标时自动创建）</li><li>3：PROPERTY_LABEL：属性标签（Key-Value键值对）</li><li>4：DESENSITIZATION_LABEL：脱敏标签（与脱敏策略绑定）</li></ul>
 * @method string getLabelValueId() 获取标签值ID（可选）；属性标签可为0；LabelType=4（脱敏标签）时非必填
 * @method void setLabelValueId(string $LabelValueId) 设置标签值ID（可选）；属性标签可为0；LabelType=4（脱敏标签）时非必填
 * @method string getLabelValue() 获取标签值（可选）；LabelType=4（脱敏标签）时非必填
 * @method void setLabelValue(string $LabelValue) 设置标签值（可选）；LabelType=4（脱敏标签）时非必填
 * @method boolean getIsDeleted() 获取【仅出参，入参无需填写】标签是否已被物理删除（true=已删除）
 * @method void setIsDeleted(boolean $IsDeleted) 设置【仅出参，入参无需填写】标签是否已被物理删除（true=已删除）
 * @method boolean getCreateCustomLabel() 获取【仅入参，出参不返回】是否自动创建自定义标签（可选，默认 false）；true=当 LabelName 非空且标签不存在时，自动创建 LabelType=2（CUSTOM_LABEL）的自定义标签；false=仅使用已有标签打标，标签不存在时报错
 * @method void setCreateCustomLabel(boolean $CreateCustomLabel) 设置【仅入参，出参不返回】是否自动创建自定义标签（可选，默认 false）；true=当 LabelName 非空且标签不存在时，自动创建 LabelType=2（CUSTOM_LABEL）的自定义标签；false=仅使用已有标签打标，标签不存在时报错
 */
class TagInfo extends AbstractModel
{
    /**
     * @var string 标签ID（入参必填）
     */
    public $LabelId;

    /**
     * @var string 标签名称（入参必填）
     */
    public $LabelName;

    /**
     * @var integer <p>标签类型（入参必填）</p><p>枚举值：</p><ul><li>1：GOVERNANCE_LABEL：治理标签（标签管理页手动创建）</li><li>2：CUSTOM_LABEL：自定义标签（打标时自动创建）</li><li>3：PROPERTY_LABEL：属性标签（Key-Value键值对）</li><li>4：DESENSITIZATION_LABEL：脱敏标签（与脱敏策略绑定）</li></ul>
     */
    public $Type;

    /**
     * @var string 标签值ID（可选）；属性标签可为0；LabelType=4（脱敏标签）时非必填
     */
    public $LabelValueId;

    /**
     * @var string 标签值（可选）；LabelType=4（脱敏标签）时非必填
     */
    public $LabelValue;

    /**
     * @var boolean 【仅出参，入参无需填写】标签是否已被物理删除（true=已删除）
     */
    public $IsDeleted;

    /**
     * @var boolean 【仅入参，出参不返回】是否自动创建自定义标签（可选，默认 false）；true=当 LabelName 非空且标签不存在时，自动创建 LabelType=2（CUSTOM_LABEL）的自定义标签；false=仅使用已有标签打标，标签不存在时报错
     */
    public $CreateCustomLabel;

    /**
     * @param string $LabelId 标签ID（入参必填）
     * @param string $LabelName 标签名称（入参必填）
     * @param integer $Type <p>标签类型（入参必填）</p><p>枚举值：</p><ul><li>1：GOVERNANCE_LABEL：治理标签（标签管理页手动创建）</li><li>2：CUSTOM_LABEL：自定义标签（打标时自动创建）</li><li>3：PROPERTY_LABEL：属性标签（Key-Value键值对）</li><li>4：DESENSITIZATION_LABEL：脱敏标签（与脱敏策略绑定）</li></ul>
     * @param string $LabelValueId 标签值ID（可选）；属性标签可为0；LabelType=4（脱敏标签）时非必填
     * @param string $LabelValue 标签值（可选）；LabelType=4（脱敏标签）时非必填
     * @param boolean $IsDeleted 【仅出参，入参无需填写】标签是否已被物理删除（true=已删除）
     * @param boolean $CreateCustomLabel 【仅入参，出参不返回】是否自动创建自定义标签（可选，默认 false）；true=当 LabelName 非空且标签不存在时，自动创建 LabelType=2（CUSTOM_LABEL）的自定义标签；false=仅使用已有标签打标，标签不存在时报错
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
        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LabelValueId",$param) and $param["LabelValueId"] !== null) {
            $this->LabelValueId = $param["LabelValueId"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }

        if (array_key_exists("IsDeleted",$param) and $param["IsDeleted"] !== null) {
            $this->IsDeleted = $param["IsDeleted"];
        }

        if (array_key_exists("CreateCustomLabel",$param) and $param["CreateCustomLabel"] !== null) {
            $this->CreateCustomLabel = $param["CreateCustomLabel"];
        }
    }
}

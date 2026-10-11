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
 * 脱敏策略绑定的敏感标签（精简视图）。相比通用 CommonTagInfo，仅保留策略视角下必要的三字段，避免序列化冗余。Type 固定为 4（DESENSITIZATION_LABEL 脱敏标签）
 *
 * @method string getLabelId() 获取敏感标签 ID，对应 catalog-manager meta_biz_label.id
 * @method void setLabelId(string $LabelId) 设置敏感标签 ID，对应 catalog-manager meta_biz_label.id
 * @method string getLabelName() 获取敏感标签名称，对应 catalog-manager meta_biz_label.name
 * @method void setLabelName(string $LabelName) 设置敏感标签名称，对应 catalog-manager meta_biz_label.name
 * @method integer getType() 获取标签类型，固定值 4（DESENSITIZATION_LABEL 脱敏标签）。参考 enum LabelType：1=业务标签、2=技术标签、3=分类标签、4=脱敏标签
 * @method void setType(integer $Type) 设置标签类型，固定值 4（DESENSITIZATION_LABEL 脱敏标签）。参考 enum LabelType：1=业务标签、2=技术标签、3=分类标签、4=脱敏标签
 */
class DataMaskLabelInfo extends AbstractModel
{
    /**
     * @var string 敏感标签 ID，对应 catalog-manager meta_biz_label.id
     */
    public $LabelId;

    /**
     * @var string 敏感标签名称，对应 catalog-manager meta_biz_label.name
     */
    public $LabelName;

    /**
     * @var integer 标签类型，固定值 4（DESENSITIZATION_LABEL 脱敏标签）。参考 enum LabelType：1=业务标签、2=技术标签、3=分类标签、4=脱敏标签
     */
    public $Type;

    /**
     * @param string $LabelId 敏感标签 ID，对应 catalog-manager meta_biz_label.id
     * @param string $LabelName 敏感标签名称，对应 catalog-manager meta_biz_label.name
     * @param integer $Type 标签类型，固定值 4（DESENSITIZATION_LABEL 脱敏标签）。参考 enum LabelType：1=业务标签、2=技术标签、3=分类标签、4=脱敏标签
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
    }
}

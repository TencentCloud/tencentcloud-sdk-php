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
 * 通用标签信息（用于查询展示场景），适用于表标签、字段标签等各类资产标签的轻量展示，供GetTable等接口返回使用
 *
 * @method string getLabelId() 获取标签ID
 * @method void setLabelId(string $LabelId) 设置标签ID
 * @method string getLabelName() 获取标签名称
 * @method void setLabelName(string $LabelName) 设置标签名称
 * @method string getLabelValueId() 获取标签值ID，属性标签（LabelType=3）可为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValueId(string $LabelValueId) 设置标签值ID，属性标签（LabelType=3）可为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelValue() 获取标签值，脱敏标签（LabelType=4）时可为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValue(string $LabelValue) 设置标签值，脱敏标签（LabelType=4）时可为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取标签类型，取值参考LabelType枚举定义：1-治理标签，2-自定义标签，3-属性标签，4-脱敏标签
 * @method void setType(integer $Type) 设置标签类型，取值参考LabelType枚举定义：1-治理标签，2-自定义标签，3-属性标签，4-脱敏标签
 * @method boolean getDeleted() 获取标签是否已删除。true表示该LabelId在meta_biz_label中查不到记录，标签已被物理删除；false（默认）表示标签仍存在
 * @method void setDeleted(boolean $Deleted) 设置标签是否已删除。true表示该LabelId在meta_biz_label中查不到记录，标签已被物理删除；false（默认）表示标签仍存在
 */
class CommonTagInfo extends AbstractModel
{
    /**
     * @var string 标签ID
     */
    public $LabelId;

    /**
     * @var string 标签名称
     */
    public $LabelName;

    /**
     * @var string 标签值ID，属性标签（LabelType=3）可为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValueId;

    /**
     * @var string 标签值，脱敏标签（LabelType=4）时可为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValue;

    /**
     * @var integer 标签类型，取值参考LabelType枚举定义：1-治理标签，2-自定义标签，3-属性标签，4-脱敏标签
     */
    public $Type;

    /**
     * @var boolean 标签是否已删除。true表示该LabelId在meta_biz_label中查不到记录，标签已被物理删除；false（默认）表示标签仍存在
     */
    public $Deleted;

    /**
     * @param string $LabelId 标签ID
     * @param string $LabelName 标签名称
     * @param string $LabelValueId 标签值ID，属性标签（LabelType=3）可为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelValue 标签值，脱敏标签（LabelType=4）时可为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 标签类型，取值参考LabelType枚举定义：1-治理标签，2-自定义标签，3-属性标签，4-脱敏标签
     * @param boolean $Deleted 标签是否已删除。true表示该LabelId在meta_biz_label中查不到记录，标签已被物理删除；false（默认）表示标签仍存在
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

        if (array_key_exists("LabelValueId",$param) and $param["LabelValueId"] !== null) {
            $this->LabelValueId = $param["LabelValueId"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }
    }
}

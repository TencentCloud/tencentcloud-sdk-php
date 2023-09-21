<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构 (FormField) 用于描述内容控件填充结构。
 *
 * @method string getComponentValue() 获取控件填充值，ComponentType和传入值格式对应关系如下：
<ul>
<li>TEXT - 普通文本控件，需输入文本字符串；</li>
<li>MULTI_LINE_TEXT - 多行文本控件，需输入文本字符串；</li>
<li>CHECK_BOX - 勾选框控件，若选中需填写ComponentValue，填写 true或者 false 字符串；</li>
<li>FILL_IMAGE - 图片控件，需填写ComponentValue为图片的资源 ID；</li>
<li>DYNAMIC_TABLE - 动态表格控件；</li>
<li>ATTACHMENT - 附件控件，需填写ComponentValue为附件图片的资源 ID列表，以逗号分割；</li>
<li>DATE - 日期控件；格式为 <b>xxxx年xx月xx日</b> 字符串；</li>
<li>DISTRICT - 省市区行政区控件，需填写ComponentValue为省市区行政区字符串内容；</li>
</ul>

 * @method void setComponentValue(string $ComponentValue) 设置控件填充值，ComponentType和传入值格式对应关系如下：
<ul>
<li>TEXT - 普通文本控件，需输入文本字符串；</li>
<li>MULTI_LINE_TEXT - 多行文本控件，需输入文本字符串；</li>
<li>CHECK_BOX - 勾选框控件，若选中需填写ComponentValue，填写 true或者 false 字符串；</li>
<li>FILL_IMAGE - 图片控件，需填写ComponentValue为图片的资源 ID；</li>
<li>DYNAMIC_TABLE - 动态表格控件；</li>
<li>ATTACHMENT - 附件控件，需填写ComponentValue为附件图片的资源 ID列表，以逗号分割；</li>
<li>DATE - 日期控件；格式为 <b>xxxx年xx月xx日</b> 字符串；</li>
<li>DISTRICT - 省市区行政区控件，需填写ComponentValue为省市区行政区字符串内容；</li>
</ul>

 * @method string getComponentId() 获取表单域或控件的ID，跟ComponentName二选一，不能全为空；
CreateFlowsByTemplates 接口不使用此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentId(string $ComponentId) 设置表单域或控件的ID，跟ComponentName二选一，不能全为空；
CreateFlowsByTemplates 接口不使用此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComponentName() 获取控件的名字，跟ComponentId二选一，不能全为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentName(string $ComponentName) 设置控件的名字，跟ComponentId二选一，不能全为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLockComponentValue() 获取是否锁定模板控件值，锁定后无法修改（用于嵌入式发起合同），true-锁定，false-不锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockComponentValue(boolean $LockComponentValue) 设置是否锁定模板控件值，锁定后无法修改（用于嵌入式发起合同），true-锁定，false-不锁定
注意：此字段可能返回 null，表示取不到有效值。
 */
class FormField extends AbstractModel
{
    /**
     * @var string 控件填充值，ComponentType和传入值格式对应关系如下：
<ul>
<li>TEXT - 普通文本控件，需输入文本字符串；</li>
<li>MULTI_LINE_TEXT - 多行文本控件，需输入文本字符串；</li>
<li>CHECK_BOX - 勾选框控件，若选中需填写ComponentValue，填写 true或者 false 字符串；</li>
<li>FILL_IMAGE - 图片控件，需填写ComponentValue为图片的资源 ID；</li>
<li>DYNAMIC_TABLE - 动态表格控件；</li>
<li>ATTACHMENT - 附件控件，需填写ComponentValue为附件图片的资源 ID列表，以逗号分割；</li>
<li>DATE - 日期控件；格式为 <b>xxxx年xx月xx日</b> 字符串；</li>
<li>DISTRICT - 省市区行政区控件，需填写ComponentValue为省市区行政区字符串内容；</li>
</ul>

     */
    public $ComponentValue;

    /**
     * @var string 表单域或控件的ID，跟ComponentName二选一，不能全为空；
CreateFlowsByTemplates 接口不使用此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComponentId;

    /**
     * @var string 控件的名字，跟ComponentId二选一，不能全为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComponentName;

    /**
     * @var boolean 是否锁定模板控件值，锁定后无法修改（用于嵌入式发起合同），true-锁定，false-不锁定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockComponentValue;

    /**
     * @param string $ComponentValue 控件填充值，ComponentType和传入值格式对应关系如下：
<ul>
<li>TEXT - 普通文本控件，需输入文本字符串；</li>
<li>MULTI_LINE_TEXT - 多行文本控件，需输入文本字符串；</li>
<li>CHECK_BOX - 勾选框控件，若选中需填写ComponentValue，填写 true或者 false 字符串；</li>
<li>FILL_IMAGE - 图片控件，需填写ComponentValue为图片的资源 ID；</li>
<li>DYNAMIC_TABLE - 动态表格控件；</li>
<li>ATTACHMENT - 附件控件，需填写ComponentValue为附件图片的资源 ID列表，以逗号分割；</li>
<li>DATE - 日期控件；格式为 <b>xxxx年xx月xx日</b> 字符串；</li>
<li>DISTRICT - 省市区行政区控件，需填写ComponentValue为省市区行政区字符串内容；</li>
</ul>

     * @param string $ComponentId 表单域或控件的ID，跟ComponentName二选一，不能全为空；
CreateFlowsByTemplates 接口不使用此字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComponentName 控件的名字，跟ComponentId二选一，不能全为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $LockComponentValue 是否锁定模板控件值，锁定后无法修改（用于嵌入式发起合同），true-锁定，false-不锁定
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ComponentValue",$param) and $param["ComponentValue"] !== null) {
            $this->ComponentValue = $param["ComponentValue"];
        }

        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("LockComponentValue",$param) and $param["LockComponentValue"] !== null) {
            $this->LockComponentValue = $param["LockComponentValue"];
        }
    }
}

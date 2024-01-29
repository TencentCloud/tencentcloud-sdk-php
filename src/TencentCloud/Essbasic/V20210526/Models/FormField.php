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
 * 电子文档的控件填充信息。按照控件类型进行相应的填充。

当控件的 ComponentType='TEXT'时，FormField.ComponentValue填入文本内容
```
FormField输入示例：
{
    "ComponentId": "componentId1",
    "ComponentValue": "文本内容"
}
```
当控件的 ComponentType='MULTI_LINE_TEXT'时，FormField.ComponentValue填入文本内容，支持自动换行。
```
FormField输入示例：
{
    "ComponentId": "componentId1",
    "ComponentValue": "多行文本内容"
}
```
当控件的 ComponentType='CHECK_BOX'时，FormField.ComponentValue填入true或false文本
```
FormField输入示例：
{
    "ComponentId": "componentId1",
    "ComponentValue": "true"
}
```
当控件的 ComponentType='FILL_IMAGE'时，FormField.ComponentValue填入图片的资源ID
```
FormField输入示例：
{
    "ComponentId": "componentId1",
    "ComponentValue": "yDwhsxxxxxxxxxxxxxxxxxxxxxxxxxxx"
}
```
当控件的 ComponentType='ATTACHMENT'时，FormField.ComponentValue填入附件图片的资源ID列表，以逗号分隔，单个附件控件最多支持6个资源ID；
```
FormField输入示例：
{
    "ComponentId": "componentId1",
    "ComponentValue": "yDwhsxxxxxxxxxxxxxxxxxxxxxxxxxx1,yDwhsxxxxxxxxxxxxxxxxxxxxxxxxxx2,yDwhsxxxxxxxxxxxxxxxxxxxxxxxxxx3"
}
```
当控件的 ComponentType='SELECTOR'时，FormField.ComponentValue填入选择的选项内容；
```
FormField输入示例：
{
    "ComponentId": "componentId1",
    "ComponentValue": "选择的内容"
}
```
当控件的 ComponentType='DATE'时，FormField.ComponentValue填入日期内容；
```
FormField输入示例：
{
    "ComponentId": "componentId1",
    "ComponentValue": "2023年01月01日"
}
```
当控件的 ComponentType='DISTRICT'时，FormField.ComponentValue填入省市区内容；
```
FormField输入示例：
{
    "ComponentId": "componentId1",
    "ComponentValue": "广东省深圳市福田区"
}
```
【数据表格传参说明】
当控件的 ComponentType='DYNAMIC_TABLE'时，FormField.ComponentValue需要传递json格式的字符串参数，用于确定表头&填充数据表格（支持内容的单元格合并）
输入示例1：

```
{
    "headers":[
        {
            "content":"head1"
        },
        {
            "content":"head2"
        },
        {
            "content":"head3"
        }
    ],
    "rowCount":3,
    "body":{
        "cells":[
            {
                "rowStart":1,
                "rowEnd":1,
                "columnStart":1,
                "columnEnd":1,
                "content":"123"
            },
            {
                "rowStart":2,
                "rowEnd":3,
                "columnStart":1,
                "columnEnd":2,
                "content":"456"
            },
            {
                "rowStart":3,
                "rowEnd":3,
                "columnStart":3,
                "columnEnd":3,
                "content":"789"
            }
        ]
    }
}

```

输入示例2（表格表头宽度比例配置）：

```
{
    "headers":[
        {
            "content":"head1",
            "widthPercent": 30
        },
        {
            "content":"head2",
            "widthPercent": 30
        },
        {
            "content":"head3",
            "widthPercent": 40
        }
    ],
    "rowCount":3,
    "body":{
        "cells":[
            {
                "rowStart":1,
                "rowEnd":1,
                "columnStart":1,
                "columnEnd":1,
                "content":"123"
            },
            {
                "rowStart":2,
                "rowEnd":3,
                "columnStart":1,
                "columnEnd":2,
                "content":"456"
            },
            {
                "rowStart":3,
                "rowEnd":3,
                "columnStart":3,
                "columnEnd":3,
                "content":"789"
            }
        ]
    }
}

```


输入示例3（表格设置字体加粗颜色）：

```
{
    "headers":[
        {
            "content":"head1"
        },
        {
            "content":"head2"
        },
        {
            "content":"head3"
        }
    ],
    "rowCount":3,
    "body":{
        "cells":[
            {
                "rowStart":1,
                "rowEnd":1,
                "columnStart":1,
                "columnEnd":1,
                "content":"123",
                "style": {"color": "#b50000", "fontSize": 12,"bold": true,"align": "CENTER"}
            },
            {
                "rowStart":2,
                "rowEnd":3,
                "columnStart":1,
                "columnEnd":2,
                "content":"456",
                "style": {"color": "#b50000", "fontSize": 12,"bold": true,"align": "LEFT"}
            },
            {
                "rowStart":3,
                "rowEnd":3,
                "columnStart":3,
                "columnEnd":3,
                "content":"789",
                "style": {"color": "#b500bf", "fontSize": 12,"bold": false,"align": "RIGHT"}
            }
        ]
    }
}

```

表格参数说明

| 名称                | 类型    | 描述                                              |
| ------------------- | ------- | ------------------------------------------------- |
| headers             | Array   | 表头：不超过10列，不支持单元格合并，字数不超过100 |
| rowCount            | Integer | 表格内容最大行数                                  |
| cells.N.rowStart    | Integer | 单元格坐标：行起始index                           |
| cells.N.rowEnd      | Integer | 单元格坐标：行结束index                           |
| cells.N.columnStart | Integer | 单元格坐标：列起始index                           |
| cells.N.columnEnd   | Integer | 单元格坐标：列结束index                           |
| cells.N.content     | String  | 单元格内容，字数不超过100                         |
| cells.N.style         | String  | 单元格字体风格配置 ，风格配置的json字符串  如： {"font":"黑体","fontSize":12,"color":"#FFFFFF","bold":true,"align":"CENTER"}      |

表格参数headers说明
widthPercent Integer 表头单元格列占总表头的比例，例如1：30表示 此列占表头的30%，不填写时列宽度平均拆分；例如2：总2列，某一列填写40，剩余列可以为空，按照60计算。；例如3：总3列，某一列填写30，剩余2列可以为空，分别为(100-30)/2=35

content String 表头单元格内容，字数不超过100

style String 为字体风格设置 风格支持： font : 目前支持 黑体、宋体; fontSize： 6-72; color：000000-FFFFFF  字符串形如：  "#FFFFFF" 或者 "0xFFFFFF"; bold ： 是否加粗， true ： 加粗 false： 不加粗; align: 对其方式， 支持 LEFT / RIGHT / CENTER
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

<a href="https://dyn.ess.tencent.cn/guide/apivideo/channel_component_name.mp4" target="_blank">点击此处查看模板上控件ID的获取方式</a>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentId(string $ComponentId) 设置表单域或控件的ID，跟ComponentName二选一，不能全为空；
CreateFlowsByTemplates 接口不使用此字段。

<a href="https://dyn.ess.tencent.cn/guide/apivideo/channel_component_name.mp4" target="_blank">点击此处查看模板上控件ID的获取方式</a>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComponentName() 获取控件的名字，跟ComponentId二选一，不能全为空

<a href="https://dyn.ess.tencent.cn/guide/apivideo/channel_component_name.mp4" target="_blank">点击此处查看模板上控件名字的获取方式</a>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentName(string $ComponentName) 设置控件的名字，跟ComponentId二选一，不能全为空

<a href="https://dyn.ess.tencent.cn/guide/apivideo/channel_component_name.mp4" target="_blank">点击此处查看模板上控件名字的获取方式</a>
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

<a href="https://dyn.ess.tencent.cn/guide/apivideo/channel_component_name.mp4" target="_blank">点击此处查看模板上控件ID的获取方式</a>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComponentId;

    /**
     * @var string 控件的名字，跟ComponentId二选一，不能全为空

<a href="https://dyn.ess.tencent.cn/guide/apivideo/channel_component_name.mp4" target="_blank">点击此处查看模板上控件名字的获取方式</a>
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

<a href="https://dyn.ess.tencent.cn/guide/apivideo/channel_component_name.mp4" target="_blank">点击此处查看模板上控件ID的获取方式</a>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComponentName 控件的名字，跟ComponentId二选一，不能全为空

<a href="https://dyn.ess.tencent.cn/guide/apivideo/channel_component_name.mp4" target="_blank">点击此处查看模板上控件名字的获取方式</a>
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

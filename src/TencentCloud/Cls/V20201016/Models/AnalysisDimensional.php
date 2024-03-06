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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多维分析的分析维度
 *
 * @method string getName() 获取分析名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置分析名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取分析类型：query，field ，original
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置分析类型：query，field ，original
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取分析内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置分析内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfigInfo() 获取多维分析配置。

当Analysis的Type字段为query（自定义）时，支持
{
"Key": "SyntaxRule",  // 语法规则
"Value": "1"  //0：Lucene语法 ，1： CQL语法
}

当Analysis的Type字段为field（top5）时,  支持
 {
    "Key": "QueryIndex",
    "Value": "-1" //  -1：自定义， 1：执行语句1， 2：执行语句2
},{
    "Key": "CustomQuery", //检索语句。 QueryIndex为-1时有效且必填
    "Value": "* | select count(*) as count"
},{
    "Key": "SyntaxRule", // 查不到这个字段也是老语法（Lucene）
    "Value": "0"//0:Lucene, 1:CQL
}       

当Analysis的Type字段为original（原始日志）时,  支持
{
    "Key": "Fields",
    "Value": "__SOURCE__,__HOSTNAME__,__TIMESTAMP__,__PKG_LOGID__,__TAG__.pod_ip"
}, {
    "Key": "QueryIndex",
    "Value": "-1" //  -1：自定义， 1：执行语句1， 2：执行语句2
},{
    "Key": "CustomQuery", //  //检索语句。 QueryIndex为-1时有效且必填
    "Value": "* | select count(*) as count"
},{
    "Key": "Format", //显示形式。1：每条日志一行，2：每条日志每个字段一行
    "Value": "2"
},
{
    "Key": "Limit", //最大日志条数
    "Value": "5"
},{
    "Key": "SyntaxRule", // 查不到这个字段也是老语法
    "Value": "0"//0:Lucene, 1:CQL
}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigInfo(array $ConfigInfo) 设置多维分析配置。

当Analysis的Type字段为query（自定义）时，支持
{
"Key": "SyntaxRule",  // 语法规则
"Value": "1"  //0：Lucene语法 ，1： CQL语法
}

当Analysis的Type字段为field（top5）时,  支持
 {
    "Key": "QueryIndex",
    "Value": "-1" //  -1：自定义， 1：执行语句1， 2：执行语句2
},{
    "Key": "CustomQuery", //检索语句。 QueryIndex为-1时有效且必填
    "Value": "* | select count(*) as count"
},{
    "Key": "SyntaxRule", // 查不到这个字段也是老语法（Lucene）
    "Value": "0"//0:Lucene, 1:CQL
}       

当Analysis的Type字段为original（原始日志）时,  支持
{
    "Key": "Fields",
    "Value": "__SOURCE__,__HOSTNAME__,__TIMESTAMP__,__PKG_LOGID__,__TAG__.pod_ip"
}, {
    "Key": "QueryIndex",
    "Value": "-1" //  -1：自定义， 1：执行语句1， 2：执行语句2
},{
    "Key": "CustomQuery", //  //检索语句。 QueryIndex为-1时有效且必填
    "Value": "* | select count(*) as count"
},{
    "Key": "Format", //显示形式。1：每条日志一行，2：每条日志每个字段一行
    "Value": "2"
},
{
    "Key": "Limit", //最大日志条数
    "Value": "5"
},{
    "Key": "SyntaxRule", // 查不到这个字段也是老语法
    "Value": "0"//0:Lucene, 1:CQL
}
注意：此字段可能返回 null，表示取不到有效值。
 */
class AnalysisDimensional extends AbstractModel
{
    /**
     * @var string 分析名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 分析类型：query，field ，original
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 分析内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var array 多维分析配置。

当Analysis的Type字段为query（自定义）时，支持
{
"Key": "SyntaxRule",  // 语法规则
"Value": "1"  //0：Lucene语法 ，1： CQL语法
}

当Analysis的Type字段为field（top5）时,  支持
 {
    "Key": "QueryIndex",
    "Value": "-1" //  -1：自定义， 1：执行语句1， 2：执行语句2
},{
    "Key": "CustomQuery", //检索语句。 QueryIndex为-1时有效且必填
    "Value": "* | select count(*) as count"
},{
    "Key": "SyntaxRule", // 查不到这个字段也是老语法（Lucene）
    "Value": "0"//0:Lucene, 1:CQL
}       

当Analysis的Type字段为original（原始日志）时,  支持
{
    "Key": "Fields",
    "Value": "__SOURCE__,__HOSTNAME__,__TIMESTAMP__,__PKG_LOGID__,__TAG__.pod_ip"
}, {
    "Key": "QueryIndex",
    "Value": "-1" //  -1：自定义， 1：执行语句1， 2：执行语句2
},{
    "Key": "CustomQuery", //  //检索语句。 QueryIndex为-1时有效且必填
    "Value": "* | select count(*) as count"
},{
    "Key": "Format", //显示形式。1：每条日志一行，2：每条日志每个字段一行
    "Value": "2"
},
{
    "Key": "Limit", //最大日志条数
    "Value": "5"
},{
    "Key": "SyntaxRule", // 查不到这个字段也是老语法
    "Value": "0"//0:Lucene, 1:CQL
}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigInfo;

    /**
     * @param string $Name 分析名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 分析类型：query，field ，original
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 分析内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConfigInfo 多维分析配置。

当Analysis的Type字段为query（自定义）时，支持
{
"Key": "SyntaxRule",  // 语法规则
"Value": "1"  //0：Lucene语法 ，1： CQL语法
}

当Analysis的Type字段为field（top5）时,  支持
 {
    "Key": "QueryIndex",
    "Value": "-1" //  -1：自定义， 1：执行语句1， 2：执行语句2
},{
    "Key": "CustomQuery", //检索语句。 QueryIndex为-1时有效且必填
    "Value": "* | select count(*) as count"
},{
    "Key": "SyntaxRule", // 查不到这个字段也是老语法（Lucene）
    "Value": "0"//0:Lucene, 1:CQL
}       

当Analysis的Type字段为original（原始日志）时,  支持
{
    "Key": "Fields",
    "Value": "__SOURCE__,__HOSTNAME__,__TIMESTAMP__,__PKG_LOGID__,__TAG__.pod_ip"
}, {
    "Key": "QueryIndex",
    "Value": "-1" //  -1：自定义， 1：执行语句1， 2：执行语句2
},{
    "Key": "CustomQuery", //  //检索语句。 QueryIndex为-1时有效且必填
    "Value": "* | select count(*) as count"
},{
    "Key": "Format", //显示形式。1：每条日志一行，2：每条日志每个字段一行
    "Value": "2"
},
{
    "Key": "Limit", //最大日志条数
    "Value": "5"
},{
    "Key": "SyntaxRule", // 查不到这个字段也是老语法
    "Value": "0"//0:Lucene, 1:CQL
}
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ConfigInfo",$param) and $param["ConfigInfo"] !== null) {
            $this->ConfigInfo = [];
            foreach ($param["ConfigInfo"] as $key => $value){
                $obj = new AlarmAnalysisConfig();
                $obj->deserialize($value);
                array_push($this->ConfigInfo, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 变量详情
 *
 * @method string getVarId() 获取变量ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVarId(string $VarId) 设置变量ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVarName() 获取变量名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVarName(string $VarName) 设置变量名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVarDesc() 获取变量描述（默认为"-"）
 * @method void setVarDesc(string $VarDesc) 设置变量描述（默认为"-"）
 * @method string getVarType() 获取变量类型 (STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)

 * @method void setVarType(string $VarType) 设置变量类型 (STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)
 */
class TaskFLowVar extends AbstractModel
{
    /**
     * @var string 变量ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VarId;

    /**
     * @var string 变量名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VarName;

    /**
     * @var string 变量描述（默认为"-"）
     */
    public $VarDesc;

    /**
     * @var string 变量类型 (STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)

     */
    public $VarType;

    /**
     * @param string $VarId 变量ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VarName 变量名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VarDesc 变量描述（默认为"-"）
     * @param string $VarType 变量类型 (STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)
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
        if (array_key_exists("VarId",$param) and $param["VarId"] !== null) {
            $this->VarId = $param["VarId"];
        }

        if (array_key_exists("VarName",$param) and $param["VarName"] !== null) {
            $this->VarName = $param["VarName"];
        }

        if (array_key_exists("VarDesc",$param) and $param["VarDesc"] !== null) {
            $this->VarDesc = $param["VarDesc"];
        }

        if (array_key_exists("VarType",$param) and $param["VarType"] !== null) {
            $this->VarType = $param["VarType"];
        }
    }
}

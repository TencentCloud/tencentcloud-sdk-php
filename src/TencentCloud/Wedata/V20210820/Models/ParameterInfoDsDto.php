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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数信息领域模型
 *
 * @method integer getId() 获取唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamKey() 获取参数key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamKey(string $ParamKey) 设置参数key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamType() 获取参数类型project_self_constant,
project_self_data_variable,   project_self_run_variable,
    project_system,   workflow_self_constant,   workflow_self_data_variable,
workflow_self_run_variable,
workflow_system,
task
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamType(string $ParamType) 设置参数类型project_self_constant,
project_self_data_variable,   project_self_run_variable,
    project_system,   workflow_self_constant,   workflow_self_data_variable,
workflow_self_run_variable,
workflow_system,
task
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamBelong() 获取参数归属
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamBelong(string $ParamBelong) 设置参数归属
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamDefine() 获取参数周期运行值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamDefine(string $ParamDefine) 设置参数周期运行值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamValue() 获取参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamValue(string $ParamValue) 设置参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamOwner() 获取参数责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamOwner(string $ParamOwner) 设置参数责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getResult() 获取导入结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(boolean $Result) 设置导入结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsg() 获取信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamDefineTest() 获取参数调试运行值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamDefineTest(string $ParamDefineTest) 设置参数调试运行值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamDescription() 获取参数描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamDescription(string $ParamDescription) 设置参数描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParameterInfoDsDto extends AbstractModel
{
    /**
     * @var integer 唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 参数key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamKey;

    /**
     * @var string 参数类型project_self_constant,
project_self_data_variable,   project_self_run_variable,
    project_system,   workflow_self_constant,   workflow_self_data_variable,
workflow_self_run_variable,
workflow_system,
task
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamType;

    /**
     * @var string 参数归属
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamBelong;

    /**
     * @var string 参数周期运行值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamDefine;

    /**
     * @var string 参数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamValue;

    /**
     * @var string 参数责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamOwner;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var boolean 导入结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var string 参数调试运行值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamDefineTest;

    /**
     * @var string 参数描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamDescription;

    /**
     * @param integer $Id 唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamKey 参数key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamType 参数类型project_self_constant,
project_self_data_variable,   project_self_run_variable,
    project_system,   workflow_self_constant,   workflow_self_data_variable,
workflow_self_run_variable,
workflow_system,
task
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamBelong 参数归属
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDefine 参数周期运行值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamValue 参数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamOwner 参数责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Result 导入结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msg 信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDefineTest 参数调试运行值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDescription 参数描述
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ParamKey",$param) and $param["ParamKey"] !== null) {
            $this->ParamKey = $param["ParamKey"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("ParamBelong",$param) and $param["ParamBelong"] !== null) {
            $this->ParamBelong = $param["ParamBelong"];
        }

        if (array_key_exists("ParamDefine",$param) and $param["ParamDefine"] !== null) {
            $this->ParamDefine = $param["ParamDefine"];
        }

        if (array_key_exists("ParamValue",$param) and $param["ParamValue"] !== null) {
            $this->ParamValue = $param["ParamValue"];
        }

        if (array_key_exists("ParamOwner",$param) and $param["ParamOwner"] !== null) {
            $this->ParamOwner = $param["ParamOwner"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("ParamDefineTest",$param) and $param["ParamDefineTest"] !== null) {
            $this->ParamDefineTest = $param["ParamDefineTest"];
        }

        if (array_key_exists("ParamDescription",$param) and $param["ParamDescription"] !== null) {
            $this->ParamDescription = $param["ParamDescription"];
        }
    }
}

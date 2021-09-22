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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务出参
 *
 * @method integer getCode() 获取请求返回状态值，0为成功，别的结合Message查看
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(integer $Code) 设置请求返回状态值，0为成功，别的结合Message查看
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取请求返回信息
 * @method void setMessage(string $Message) 设置请求返回信息
 * @method OutputDescribeRiskModelValue getValue() 获取请求返回结果
 * @method void setValue(OutputDescribeRiskModelValue $Value) 设置请求返回结果
 */
class OutputDescribeRiskModel extends AbstractModel
{
    /**
     * @var integer 请求返回状态值，0为成功，别的结合Message查看
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 请求返回信息
     */
    public $Message;

    /**
     * @var OutputDescribeRiskModelValue 请求返回结果
     */
    public $Value;

    /**
     * @param integer $Code 请求返回状态值，0为成功，别的结合Message查看
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 请求返回信息
     * @param OutputDescribeRiskModelValue $Value 请求返回结果
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new OutputDescribeRiskModelValue();
            $this->Value->deserialize($param["Value"]);
        }
    }
}

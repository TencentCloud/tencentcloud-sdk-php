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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户自定义错误码
 *
 * @method integer getCode() 获取自定义响应配置错误码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(integer $Code) 设置自定义响应配置错误码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsg() 获取自定义响应配置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置自定义响应配置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取自定义响应配置错误码备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置自定义响应配置错误码备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConvertedCode() 获取自定义错误码转换。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConvertedCode(integer $ConvertedCode) 设置自定义错误码转换。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNeedConvert() 获取是否需要开启错误码转换。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeedConvert(boolean $NeedConvert) 设置是否需要开启错误码转换。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ErrorCodes extends AbstractModel
{
    /**
     * @var integer 自定义响应配置错误码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 自定义响应配置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var string 自定义响应配置错误码备注。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var integer 自定义错误码转换。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConvertedCode;

    /**
     * @var boolean 是否需要开启错误码转换。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeedConvert;

    /**
     * @param integer $Code 自定义响应配置错误码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msg 自定义响应配置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 自定义响应配置错误码备注。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConvertedCode 自定义错误码转换。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $NeedConvert 是否需要开启错误码转换。
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ConvertedCode",$param) and $param["ConvertedCode"] !== null) {
            $this->ConvertedCode = $param["ConvertedCode"];
        }

        if (array_key_exists("NeedConvert",$param) and $param["NeedConvert"] !== null) {
            $this->NeedConvert = $param["NeedConvert"];
        }
    }
}

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
namespace TencentCloud\Afc\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 天御信鸽取数平台接口出参
 *
 * @method string getCode() 获取错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取回包信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置回包信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotarizationData() 获取公证处业务回包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotarizationData(string $NotarizationData) 设置公证处业务回包
注意：此字段可能返回 null，表示取不到有效值。
 */
class TransportGeneralInterfaceOutput extends AbstractModel
{
    /**
     * @var string 错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 回包信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 公证处业务回包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotarizationData;

    /**
     * @param string $Code 错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 回包信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NotarizationData 公证处业务回包
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("NotarizationData",$param) and $param["NotarizationData"] !== null) {
            $this->NotarizationData = $param["NotarizationData"];
        }
    }
}

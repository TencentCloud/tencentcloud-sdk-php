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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 红票结果
 *
 * @method string getMessage() 获取错误消息
 * @method void setMessage(string $Message) 设置错误消息
 * @method integer getCode() 获取错误码
 * @method void setCode(integer $Code) 设置错误码
 * @method array getData() 获取红票数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置红票数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateRedInvoiceResult extends AbstractModel
{
    /**
     * @var string 错误消息
     */
    public $Message;

    /**
     * @var integer 错误码
     */
    public $Code;

    /**
     * @var array 红票数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param string $Message 错误消息
     * @param integer $Code 错误码
     * @param array $Data 红票数据
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new CreateRedInvoiceResultData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}

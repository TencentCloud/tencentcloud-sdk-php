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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 错误信息汇总
 *
 * @method string getStatus() 获取状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取结果码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置结果码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取错误出现次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置错误出现次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRate() 获取错误率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRate(float $Rate) 设置错误率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProto() 获取请求协议类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProto(string $Proto) 设置请求协议类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class ErrorSummary extends AbstractModel
{
    /**
     * @var string 状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 结果码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var integer 错误出现次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var float 错误率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rate;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 请求协议类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Proto;

    /**
     * @param string $Status 状态码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result 结果码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 错误出现次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Rate 错误率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Proto 请求协议类型
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }
    }
}

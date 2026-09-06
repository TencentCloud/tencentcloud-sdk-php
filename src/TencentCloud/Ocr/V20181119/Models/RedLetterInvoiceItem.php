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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 红字发票信息
 *
 * @method string getCode() 获取<p>红字发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置<p>红字发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNumber() 获取<p>红字发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumber(string $Number) 设置<p>红字发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取<p>红字开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置<p>红字开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取<p>红字发票状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置<p>红字发票状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RedLetterInvoiceItem extends AbstractModel
{
    /**
     * @var string <p>红字发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string <p>红字发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Number;

    /**
     * @var string <p>红字开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var string <p>红字发票状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @param string $Code <p>红字发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Number <p>红字发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date <p>红字开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State <p>红字发票状态</p>
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}

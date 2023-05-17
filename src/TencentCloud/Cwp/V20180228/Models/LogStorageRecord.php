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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志存储量记录
 *
 * @method string getMonth() 获取年月份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonth(string $Month) 设置年月份
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsedSize() 获取存储量，字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedSize(integer $UsedSize) 设置存储量，字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInquireSize() 获取总量，字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInquireSize(integer $InquireSize) 设置总量，字节
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogStorageRecord extends AbstractModel
{
    /**
     * @var string 年月份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Month;

    /**
     * @var integer 存储量，字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedSize;

    /**
     * @var integer 总量，字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InquireSize;

    /**
     * @param string $Month 年月份
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UsedSize 存储量，字节
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InquireSize 总量，字节
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("UsedSize",$param) and $param["UsedSize"] !== null) {
            $this->UsedSize = $param["UsedSize"];
        }

        if (array_key_exists("InquireSize",$param) and $param["InquireSize"] !== null) {
            $this->InquireSize = $param["InquireSize"];
        }
    }
}

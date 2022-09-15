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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据处理——Value处理参数——转换时间格式参数
 *
 * @method string getFormat() 获取时间格式
 * @method void setFormat(string $Format) 设置时间格式
 * @method string getTargetType() 获取输入类型，string，unix时间戳，默认string
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetType(string $TargetType) 设置输入类型，string，unix时间戳，默认string
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeZone() 获取时区，默认GMT+8
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZone(string $TimeZone) 设置时区，默认GMT+8
注意：此字段可能返回 null，表示取不到有效值。
 */
class DateParam extends AbstractModel
{
    /**
     * @var string 时间格式
     */
    public $Format;

    /**
     * @var string 输入类型，string，unix时间戳，默认string
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetType;

    /**
     * @var string 时区，默认GMT+8
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZone;

    /**
     * @param string $Format 时间格式
     * @param string $TargetType 输入类型，string，unix时间戳，默认string
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeZone 时区，默认GMT+8
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}

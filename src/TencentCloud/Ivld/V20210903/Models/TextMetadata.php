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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本文件元信息
 *
 * @method integer getFileSize() 获取媒资文本文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置媒资文本文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMD5() 获取媒资文本文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMD5(string $MD5) 设置媒资文本文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLength() 获取媒资文本文件字符数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLength(integer $Length) 设置媒资文本文件字符数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormat() 获取媒资文本文件格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormat(string $Format) 设置媒资文本文件格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextMetadata extends AbstractModel
{
    /**
     * @var integer 媒资文本文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 媒资文本文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MD5;

    /**
     * @var integer 媒资文本文件字符数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Length;

    /**
     * @var string 媒资文本文件格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Format;

    /**
     * @param integer $FileSize 媒资文本文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MD5 媒资文本文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Length 媒资文本文件字符数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Format 媒资文本文件格式
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
        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}

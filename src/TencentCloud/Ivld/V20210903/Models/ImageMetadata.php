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
 * 图片文件元信息
 *
 * @method integer getFileSize() 获取媒资图片文件大小，单位为Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置媒资图片文件大小，单位为Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMD5() 获取媒资图片文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMD5(string $MD5) 设置媒资图片文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取媒资图片文件宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置媒资图片文件宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取媒资图片文件高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置媒资图片文件高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormat() 获取媒资图片文件格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormat(string $Format) 设置媒资图片文件格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageMetadata extends AbstractModel
{
    /**
     * @var integer 媒资图片文件大小，单位为Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 媒资图片文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MD5;

    /**
     * @var integer 媒资图片文件宽度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 媒资图片文件高度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var string 媒资图片文件格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Format;

    /**
     * @param integer $FileSize 媒资图片文件大小，单位为Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MD5 媒资图片文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 媒资图片文件宽度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 媒资图片文件高度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Format 媒资图片文件格式
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}

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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 从图片中检测到的二维码，可能为多个
 *
 * @method string getStrCharset() 获取二维码文本的编码格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrCharset(string $StrCharset) 设置二维码文本的编码格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQrCodePosition() 获取二维码在图片中的位置，由边界点的坐标表示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQrCodePosition(array $QrCodePosition) 设置二维码在图片中的位置，由边界点的坐标表示
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrQrCodeText() 获取二维码的文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrQrCodeText(string $StrQrCodeText) 设置二维码的文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUint32QrCodeType() 获取二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUint32QrCodeType(integer $Uint32QrCodeType) 设置二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeCharset() 获取二维码文本的编码格式（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeCharset(string $CodeCharset) 设置二维码文本的编码格式（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCodePosition() 获取二维码在图片中的位置，由边界点的坐标表示（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodePosition(array $CodePosition) 设置二维码在图片中的位置，由边界点的坐标表示（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeText() 获取二维码的文本内容（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeText(string $CodeText) 设置二维码的文本内容（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCodeType() 获取二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeType(integer $CodeType) 设置二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeDetail extends AbstractModel
{
    /**
     * @var string 二维码文本的编码格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrCharset;

    /**
     * @var array 二维码在图片中的位置，由边界点的坐标表示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QrCodePosition;

    /**
     * @var string 二维码的文本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrQrCodeText;

    /**
     * @var integer 二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uint32QrCodeType;

    /**
     * @var string 二维码文本的编码格式（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeCharset;

    /**
     * @var array 二维码在图片中的位置，由边界点的坐标表示（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodePosition;

    /**
     * @var string 二维码的文本内容（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeText;

    /**
     * @var integer 二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeType;

    /**
     * @param string $StrCharset 二维码文本的编码格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QrCodePosition 二维码在图片中的位置，由边界点的坐标表示
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrQrCodeText 二维码的文本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Uint32QrCodeType 二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeCharset 二维码文本的编码格式（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CodePosition 二维码在图片中的位置，由边界点的坐标表示（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeText 二维码的文本内容（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CodeType 二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX（已废弃）
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
        if (array_key_exists("StrCharset",$param) and $param["StrCharset"] !== null) {
            $this->StrCharset = $param["StrCharset"];
        }

        if (array_key_exists("QrCodePosition",$param) and $param["QrCodePosition"] !== null) {
            $this->QrCodePosition = [];
            foreach ($param["QrCodePosition"] as $key => $value){
                $obj = new CodePosition();
                $obj->deserialize($value);
                array_push($this->QrCodePosition, $obj);
            }
        }

        if (array_key_exists("StrQrCodeText",$param) and $param["StrQrCodeText"] !== null) {
            $this->StrQrCodeText = $param["StrQrCodeText"];
        }

        if (array_key_exists("Uint32QrCodeType",$param) and $param["Uint32QrCodeType"] !== null) {
            $this->Uint32QrCodeType = $param["Uint32QrCodeType"];
        }

        if (array_key_exists("CodeCharset",$param) and $param["CodeCharset"] !== null) {
            $this->CodeCharset = $param["CodeCharset"];
        }

        if (array_key_exists("CodePosition",$param) and $param["CodePosition"] !== null) {
            $this->CodePosition = [];
            foreach ($param["CodePosition"] as $key => $value){
                $obj = new CodePosition();
                $obj->deserialize($value);
                array_push($this->CodePosition, $obj);
            }
        }

        if (array_key_exists("CodeText",$param) and $param["CodeText"] !== null) {
            $this->CodeText = $param["CodeText"];
        }

        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            $this->CodeType = $param["CodeType"];
        }
    }
}

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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生产企业名称和地址
 *
 * @method string getText() 获取文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取企业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置企业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取生产地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置生产地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPostalCode() 获取邮政编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostalCode(string $PostalCode) 设置邮政编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取电话，包含区号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置电话，包含区号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFax() 获取传真，包含区号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFax(string $Fax) 设置传真，包含区号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebsite() 获取网址，如无则不填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebsite(string $Website) 设置网址，如无则不填写
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChemicalProductInfoManufacturer extends AbstractModel
{
    /**
     * @var string 文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 企业名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 生产地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 邮政编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostalCode;

    /**
     * @var string 电话，包含区号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var string 传真，包含区号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fax;

    /**
     * @var string 网址，如无则不填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Website;

    /**
     * @param string $Text 文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 企业名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 生产地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PostalCode 邮政编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 电话，包含区号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fax 传真，包含区号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Website 网址，如无则不填写
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("PostalCode",$param) and $param["PostalCode"] !== null) {
            $this->PostalCode = $param["PostalCode"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Fax",$param) and $param["Fax"] !== null) {
            $this->Fax = $param["Fax"];
        }

        if (array_key_exists("Website",$param) and $param["Website"] !== null) {
            $this->Website = $param["Website"];
        }
    }
}

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
 * 体检报告-内科-腹部
 *
 * @method KeyValueItem getText() 获取内科腹部小结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(KeyValueItem $Text) 设置内科腹部小结
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternalMedicineAbdomenLiver getLiver() 获取肝脏
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiver(InternalMedicineAbdomenLiver $Liver) 设置肝脏
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternalMedicineAbdomenGallBladder getGallBladder() 获取胆囊
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGallBladder(InternalMedicineAbdomenGallBladder $GallBladder) 设置胆囊
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternalMedicineAbdomenPancreas getPancreas() 获取胰腺
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPancreas(InternalMedicineAbdomenPancreas $Pancreas) 设置胰腺
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternalMedicineAbdomenSpleen getSpleen() 获取脾脏
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpleen(InternalMedicineAbdomenSpleen $Spleen) 设置脾脏
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternalMedicineAbdomenKidney getKidney() 获取肾脏
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKidney(InternalMedicineAbdomenKidney $Kidney) 设置肾脏
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOthers() 获取腹部其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthers(array $Others) 设置腹部其他
注意：此字段可能返回 null，表示取不到有效值。
 */
class InternalMedicineAbdomen extends AbstractModel
{
    /**
     * @var KeyValueItem 内科腹部小结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var InternalMedicineAbdomenLiver 肝脏
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Liver;

    /**
     * @var InternalMedicineAbdomenGallBladder 胆囊
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GallBladder;

    /**
     * @var InternalMedicineAbdomenPancreas 胰腺
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pancreas;

    /**
     * @var InternalMedicineAbdomenSpleen 脾脏
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spleen;

    /**
     * @var InternalMedicineAbdomenKidney 肾脏
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kidney;

    /**
     * @var array 腹部其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Others;

    /**
     * @param KeyValueItem $Text 内科腹部小结
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternalMedicineAbdomenLiver $Liver 肝脏
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternalMedicineAbdomenGallBladder $GallBladder 胆囊
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternalMedicineAbdomenPancreas $Pancreas 胰腺
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternalMedicineAbdomenSpleen $Spleen 脾脏
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternalMedicineAbdomenKidney $Kidney 肾脏
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Others 腹部其他
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
            $this->Text = new KeyValueItem();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("Liver",$param) and $param["Liver"] !== null) {
            $this->Liver = new InternalMedicineAbdomenLiver();
            $this->Liver->deserialize($param["Liver"]);
        }

        if (array_key_exists("GallBladder",$param) and $param["GallBladder"] !== null) {
            $this->GallBladder = new InternalMedicineAbdomenGallBladder();
            $this->GallBladder->deserialize($param["GallBladder"]);
        }

        if (array_key_exists("Pancreas",$param) and $param["Pancreas"] !== null) {
            $this->Pancreas = new InternalMedicineAbdomenPancreas();
            $this->Pancreas->deserialize($param["Pancreas"]);
        }

        if (array_key_exists("Spleen",$param) and $param["Spleen"] !== null) {
            $this->Spleen = new InternalMedicineAbdomenSpleen();
            $this->Spleen->deserialize($param["Spleen"]);
        }

        if (array_key_exists("Kidney",$param) and $param["Kidney"] !== null) {
            $this->Kidney = new InternalMedicineAbdomenKidney();
            $this->Kidney->deserialize($param["Kidney"]);
        }

        if (array_key_exists("Others",$param) and $param["Others"] !== null) {
            $this->Others = [];
            foreach ($param["Others"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->Others, $obj);
            }
        }
    }
}

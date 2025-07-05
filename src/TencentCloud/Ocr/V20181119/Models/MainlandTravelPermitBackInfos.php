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
 * 港澳台来往内地通行证背面字段信息
 *
 * @method string getType() 获取String	证件类别， 如：台湾居民来往大陆通行证、港澳居民来往内地通行证。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置String	证件类别， 如：台湾居民来往大陆通行证、港澳居民来往内地通行证。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取卡证背面的中文姓名	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置卡证背面的中文姓名	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIDNumber() 获取卡证背面的身份证号码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIDNumber(string $IDNumber) 设置卡证背面的身份证号码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHistoryNumber() 获取历史通行证号码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHistoryNumber(string $HistoryNumber) 设置历史通行证号码	
注意：此字段可能返回 null，表示取不到有效值。
 */
class MainlandTravelPermitBackInfos extends AbstractModel
{
    /**
     * @var string String	证件类别， 如：台湾居民来往大陆通行证、港澳居民来往内地通行证。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 卡证背面的中文姓名	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 卡证背面的身份证号码	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IDNumber;

    /**
     * @var string 历史通行证号码	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HistoryNumber;

    /**
     * @param string $Type String	证件类别， 如：台湾居民来往大陆通行证、港澳居民来往内地通行证。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 卡证背面的中文姓名	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IDNumber 卡证背面的身份证号码	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HistoryNumber 历史通行证号码	
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IDNumber",$param) and $param["IDNumber"] !== null) {
            $this->IDNumber = $param["IDNumber"];
        }

        if (array_key_exists("HistoryNumber",$param) and $param["HistoryNumber"] !== null) {
            $this->HistoryNumber = $param["HistoryNumber"];
        }
    }
}

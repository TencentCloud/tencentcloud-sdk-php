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
 * 转移
 *
 * @method integer getIndex() 获取索引位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置索引位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPart() 获取部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPart(string $Part) 设置部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalNum() 获取局部总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalNum(string $TotalNum) 设置局部总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransferNum() 获取转移数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferNum(string $TransferNum) 设置转移数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class Metastasis extends AbstractModel
{
    /**
     * @var integer 索引位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 部位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Part;

    /**
     * @var string 局部总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalNum;

    /**
     * @var string 转移数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferNum;

    /**
     * @param integer $Index 索引位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Part 部位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalNum 局部总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransferNum 转移数量
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = $param["Part"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TransferNum",$param) and $param["TransferNum"] !== null) {
            $this->TransferNum = $param["TransferNum"];
        }
    }
}

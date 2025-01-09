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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeCall信息
 *
 * @method string getTWeCallType() 获取voip类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTWeCallType(string $TWeCallType) 设置voip类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalNum() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalNum(integer $TotalNum) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsedNum() 获取已使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedNum(integer $UsedNum) 设置已使用
注意：此字段可能返回 null，表示取不到有效值。
 */
class TWeCallLicenseInfo extends AbstractModel
{
    /**
     * @var string voip类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TWeCallType;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalNum;

    /**
     * @var integer 已使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedNum;

    /**
     * @param string $TWeCallType voip类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalNum 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UsedNum 已使用
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
        if (array_key_exists("TWeCallType",$param) and $param["TWeCallType"] !== null) {
            $this->TWeCallType = $param["TWeCallType"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }
    }
}

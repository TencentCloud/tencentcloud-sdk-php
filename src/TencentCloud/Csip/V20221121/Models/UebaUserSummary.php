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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户行为分析-用户概览信息
 *
 * @method integer getAllUserCount() 获取全部用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllUserCount(integer $AllUserCount) 设置全部用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAbnormalUserCount() 获取异常用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbnormalUserCount(integer $AbnormalUserCount) 设置异常用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserCount() 获取云账号用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserCount(integer $UserCount) 设置云账号用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubUserCount() 获取子用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubUserCount(integer $SubUserCount) 设置子用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCustomUserCount() 获取自定义用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomUserCount(integer $CustomUserCount) 设置自定义用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getElement() 获取自定义用户求和组成元素
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElement(array $Element) 设置自定义用户求和组成元素
注意：此字段可能返回 null，表示取不到有效值。
 */
class UebaUserSummary extends AbstractModel
{
    /**
     * @var integer 全部用户数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllUserCount;

    /**
     * @var integer 异常用户数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbnormalUserCount;

    /**
     * @var integer 云账号用户数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserCount;

    /**
     * @var integer 子用户数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubUserCount;

    /**
     * @var integer 自定义用户数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomUserCount;

    /**
     * @var array 自定义用户求和组成元素
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Element;

    /**
     * @param integer $AllUserCount 全部用户数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AbnormalUserCount 异常用户数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserCount 云账号用户数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubUserCount 子用户数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CustomUserCount 自定义用户数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Element 自定义用户求和组成元素
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
        if (array_key_exists("AllUserCount",$param) and $param["AllUserCount"] !== null) {
            $this->AllUserCount = $param["AllUserCount"];
        }

        if (array_key_exists("AbnormalUserCount",$param) and $param["AbnormalUserCount"] !== null) {
            $this->AbnormalUserCount = $param["AbnormalUserCount"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }

        if (array_key_exists("SubUserCount",$param) and $param["SubUserCount"] !== null) {
            $this->SubUserCount = $param["SubUserCount"];
        }

        if (array_key_exists("CustomUserCount",$param) and $param["CustomUserCount"] !== null) {
            $this->CustomUserCount = $param["CustomUserCount"];
        }

        if (array_key_exists("Element",$param) and $param["Element"] !== null) {
            $this->Element = [];
            foreach ($param["Element"] as $key => $value){
                $obj = new UebaUserSummaryElement();
                $obj->deserialize($value);
                array_push($this->Element, $obj);
            }
        }
    }
}

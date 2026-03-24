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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成员信息
 *
 * @method integer getMemberUin() 获取成员ID
 * @method void setMemberUin(integer $MemberUin) 设置成员ID
 * @method string getMemberName() 获取成员名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberName(string $MemberName) 设置成员名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AggregatorAccount extends AbstractModel
{
    /**
     * @var integer 成员ID
     */
    public $MemberUin;

    /**
     * @var string 成员名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberName;

    /**
     * @param integer $MemberUin 成员ID
     * @param string $MemberName 成员名称
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }
    }
}

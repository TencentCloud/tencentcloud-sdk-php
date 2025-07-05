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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组织成员财务信息。
 *
 * @method integer getMemberUin() 获取成员Uin。
 * @method void setMemberUin(integer $MemberUin) 设置成员Uin。
 * @method string getMemberName() 获取成员名称。
 * @method void setMemberName(string $MemberName) 设置成员名称。
 * @method float getTotalCost() 获取消耗金额，单位：元。
 * @method void setTotalCost(float $TotalCost) 设置消耗金额，单位：元。
 * @method string getRatio() 获取占比%。
 * @method void setRatio(string $Ratio) 设置占比%。
 */
class OrgMemberFinancial extends AbstractModel
{
    /**
     * @var integer 成员Uin。
     */
    public $MemberUin;

    /**
     * @var string 成员名称。
     */
    public $MemberName;

    /**
     * @var float 消耗金额，单位：元。
     */
    public $TotalCost;

    /**
     * @var string 占比%。
     */
    public $Ratio;

    /**
     * @param integer $MemberUin 成员Uin。
     * @param string $MemberName 成员名称。
     * @param float $TotalCost 消耗金额，单位：元。
     * @param string $Ratio 占比%。
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

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}

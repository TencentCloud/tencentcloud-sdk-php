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
 * 用户组列表信息
 *
 * @method string getName() 获取账号组名称
 * @method void setName(string $Name) 设置账号组名称
 * @method string getDescription() 获取账号组描述
 * @method void setDescription(string $Description) 设置账号组描述
 * @method integer getOwnerUin() 获取创建者用户ID
 * @method void setOwnerUin(integer $OwnerUin) 设置创建者用户ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getAccountCount() 获取账号组成员数量
 * @method void setAccountCount(integer $AccountCount) 设置账号组成员数量
 * @method string getType() 获取RD:全局账号组
 * @method void setType(string $Type) 设置RD:全局账号组
 * @method string getAccountGroupId() 获取账号组ID
 * @method void setAccountGroupId(string $AccountGroupId) 设置账号组ID
 * @method integer getAggregatorStatus() 获取账号组状态
 * @method void setAggregatorStatus(integer $AggregatorStatus) 设置账号组状态
 * @method string getMemberName() 获取账号组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberName(string $MemberName) 设置账号组名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class Aggregator extends AbstractModel
{
    /**
     * @var string 账号组名称
     */
    public $Name;

    /**
     * @var string 账号组描述
     */
    public $Description;

    /**
     * @var integer 创建者用户ID
     */
    public $OwnerUin;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 账号组成员数量
     */
    public $AccountCount;

    /**
     * @var string RD:全局账号组
     */
    public $Type;

    /**
     * @var string 账号组ID
     */
    public $AccountGroupId;

    /**
     * @var integer 账号组状态
     */
    public $AggregatorStatus;

    /**
     * @var string 账号组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberName;

    /**
     * @param string $Name 账号组名称
     * @param string $Description 账号组描述
     * @param integer $OwnerUin 创建者用户ID
     * @param string $CreateTime 创建时间
     * @param integer $AccountCount 账号组成员数量
     * @param string $Type RD:全局账号组
     * @param string $AccountGroupId 账号组ID
     * @param integer $AggregatorStatus 账号组状态
     * @param string $MemberName 账号组名称
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("AggregatorStatus",$param) and $param["AggregatorStatus"] !== null) {
            $this->AggregatorStatus = $param["AggregatorStatus"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }
    }
}

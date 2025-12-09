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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基于资产的标签统计信息
 *
 * @method integer getTagId() 获取标签id
 * @method void setTagId(integer $TagId) 设置标签id
 * @method string getTagName() 获取标签名
 * @method void setTagName(string $TagName) 设置标签名
 * @method integer getVoteSum() 获取该表该标签投票次数
 * @method void setVoteSum(integer $VoteSum) 设置该表该标签投票次数
 * @method boolean getStatus() 获取当前用户对这张表是否加了该标签 true 已添加 false 未添加
 * @method void setStatus(boolean $Status) 设置当前用户对这张表是否加了该标签 true 已添加 false 未添加
 * @method string getTagDesc() 获取标签描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagDesc(string $TagDesc) 设置标签描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTagValueId() 获取标签值Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagValueId(integer $TagValueId) 设置标签值Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagValue() 获取标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagValue(string $TagValue) 设置标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTagIsDeleted() 获取标签是否已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagIsDeleted(boolean $TagIsDeleted) 设置标签是否已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTagValueIsDeleted() 获取标签值是否已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagValueIsDeleted(boolean $TagValueIsDeleted) 设置标签值是否已删除
注意：此字段可能返回 null，表示取不到有效值。
 */
class TagVoteSum extends AbstractModel
{
    /**
     * @var integer 标签id
     */
    public $TagId;

    /**
     * @var string 标签名
     */
    public $TagName;

    /**
     * @var integer 该表该标签投票次数
     */
    public $VoteSum;

    /**
     * @var boolean 当前用户对这张表是否加了该标签 true 已添加 false 未添加
     */
    public $Status;

    /**
     * @var string 标签描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagDesc;

    /**
     * @var integer 标签值Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagValueId;

    /**
     * @var string 标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagValue;

    /**
     * @var boolean 标签是否已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagIsDeleted;

    /**
     * @var boolean 标签值是否已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagValueIsDeleted;

    /**
     * @param integer $TagId 标签id
     * @param string $TagName 标签名
     * @param integer $VoteSum 该表该标签投票次数
     * @param boolean $Status 当前用户对这张表是否加了该标签 true 已添加 false 未添加
     * @param string $TagDesc 标签描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TagValueId 标签值Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagValue 标签值
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TagIsDeleted 标签是否已删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TagValueIsDeleted 标签值是否已删除
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
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("VoteSum",$param) and $param["VoteSum"] !== null) {
            $this->VoteSum = $param["VoteSum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TagDesc",$param) and $param["TagDesc"] !== null) {
            $this->TagDesc = $param["TagDesc"];
        }

        if (array_key_exists("TagValueId",$param) and $param["TagValueId"] !== null) {
            $this->TagValueId = $param["TagValueId"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("TagIsDeleted",$param) and $param["TagIsDeleted"] !== null) {
            $this->TagIsDeleted = $param["TagIsDeleted"];
        }

        if (array_key_exists("TagValueIsDeleted",$param) and $param["TagValueIsDeleted"] !== null) {
            $this->TagValueIsDeleted = $param["TagValueIsDeleted"];
        }
    }
}

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
 * 基于表的标签统计信息
 *
 * @method integer getTagId() 获取标签id
 * @method void setTagId(integer $TagId) 设置标签id
 * @method integer getVoteSum() 获取该表该标签投票次数
 * @method void setVoteSum(integer $VoteSum) 设置该表该标签投票次数
 * @method boolean getStatus() 获取当前用户对这张表是否加了该标签 true 已添加 false 未添加
 * @method void setStatus(boolean $Status) 设置当前用户对这张表是否加了该标签 true 已添加 false 未添加
 * @method string getTagName() 获取标签名
 * @method void setTagName(string $TagName) 设置标签名
 */
class TagVoteSum extends AbstractModel
{
    /**
     * @var integer 标签id
     */
    public $TagId;

    /**
     * @var integer 该表该标签投票次数
     */
    public $VoteSum;

    /**
     * @var boolean 当前用户对这张表是否加了该标签 true 已添加 false 未添加
     */
    public $Status;

    /**
     * @var string 标签名
     */
    public $TagName;

    /**
     * @param integer $TagId 标签id
     * @param integer $VoteSum 该表该标签投票次数
     * @param boolean $Status 当前用户对这张表是否加了该标签 true 已添加 false 未添加
     * @param string $TagName 标签名
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

        if (array_key_exists("VoteSum",$param) and $param["VoteSum"] !== null) {
            $this->VoteSum = $param["VoteSum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }
    }
}

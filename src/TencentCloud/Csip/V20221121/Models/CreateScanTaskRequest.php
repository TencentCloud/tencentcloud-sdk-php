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
 * CreateScanTask请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getTaskMode() 获取<p>检测模式</p>
 * @method void setTaskMode(integer $TaskMode) 设置<p>检测模式</p>
 * @method array getRuleIDs() 获取<p>规则集合</p>
 * @method void setRuleIDs(array $RuleIDs) 设置<p>规则集合</p>
 * @method array getStandardIDs() 获取<p>规范ID</p>
 * @method void setStandardIDs(array $StandardIDs) 设置<p>规范ID</p>
 */
class CreateScanTaskRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>检测模式</p>
     */
    public $TaskMode;

    /**
     * @var array <p>规则集合</p>
     */
    public $RuleIDs;

    /**
     * @var array <p>规范ID</p>
     */
    public $StandardIDs;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $TaskMode <p>检测模式</p>
     * @param array $RuleIDs <p>规则集合</p>
     * @param array $StandardIDs <p>规范ID</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("StandardIDs",$param) and $param["StandardIDs"] !== null) {
            $this->StandardIDs = $param["StandardIDs"];
        }
    }
}

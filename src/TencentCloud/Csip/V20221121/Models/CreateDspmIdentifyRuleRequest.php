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
 * CreateDspmIdentifyRule请求参数结构体
 *
 * @method string getName() 获取<p>数据项名称</p>
 * @method void setName(string $Name) 设置<p>数据项名称</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getDescription() 获取<p>数据项描述</p>
 * @method void setDescription(string $Description) 设置<p>数据项描述</p>
 * @method integer getStatus() 获取<p>数据项启用状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
 * @method void setStatus(integer $Status) 设置<p>数据项启用状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
 * @method string getStructuredRule() 获取<p>结构化规则</p>
 * @method void setStructuredRule(string $StructuredRule) 设置<p>结构化规则</p>
 * @method string getUnStructuredRule() 获取<p>非结构化规则</p>
 * @method void setUnStructuredRule(string $UnStructuredRule) 设置<p>非结构化规则</p>
 */
class CreateDspmIdentifyRuleRequest extends AbstractModel
{
    /**
     * @var string <p>数据项名称</p>
     */
    public $Name;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>数据项描述</p>
     */
    public $Description;

    /**
     * @var integer <p>数据项启用状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
     */
    public $Status;

    /**
     * @var string <p>结构化规则</p>
     */
    public $StructuredRule;

    /**
     * @var string <p>非结构化规则</p>
     */
    public $UnStructuredRule;

    /**
     * @param string $Name <p>数据项名称</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Description <p>数据项描述</p>
     * @param integer $Status <p>数据项启用状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
     * @param string $StructuredRule <p>结构化规则</p>
     * @param string $UnStructuredRule <p>非结构化规则</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StructuredRule",$param) and $param["StructuredRule"] !== null) {
            $this->StructuredRule = $param["StructuredRule"];
        }

        if (array_key_exists("UnStructuredRule",$param) and $param["UnStructuredRule"] !== null) {
            $this->UnStructuredRule = $param["UnStructuredRule"];
        }
    }
}

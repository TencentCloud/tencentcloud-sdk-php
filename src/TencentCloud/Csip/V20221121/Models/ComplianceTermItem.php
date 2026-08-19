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
 * 云资源配置检测条款项
 *
 * @method integer getTermID() 获取<p>条款ID</p>
 * @method void setTermID(integer $TermID) 设置<p>条款ID</p>
 * @method string getDescription() 获取<p>条款描述</p>
 * @method void setDescription(string $Description) 设置<p>条款描述</p>
 * @method string getName() 获取<p>条款名称</p>
 * @method void setName(string $Name) 设置<p>条款名称</p>
 * @method integer getRuleCount() 获取<p>关联规则数量</p>
 * @method void setRuleCount(integer $RuleCount) 设置<p>关联规则数量</p>
 * @method string getRationale() 获取<p>条款原理</p>
 * @method void setRationale(string $Rationale) 设置<p>条款原理</p>
 * @method string getSn() 获取<p>编号</p>
 * @method void setSn(string $Sn) 设置<p>编号</p>
 */
class ComplianceTermItem extends AbstractModel
{
    /**
     * @var integer <p>条款ID</p>
     */
    public $TermID;

    /**
     * @var string <p>条款描述</p>
     */
    public $Description;

    /**
     * @var string <p>条款名称</p>
     */
    public $Name;

    /**
     * @var integer <p>关联规则数量</p>
     */
    public $RuleCount;

    /**
     * @var string <p>条款原理</p>
     */
    public $Rationale;

    /**
     * @var string <p>编号</p>
     */
    public $Sn;

    /**
     * @param integer $TermID <p>条款ID</p>
     * @param string $Description <p>条款描述</p>
     * @param string $Name <p>条款名称</p>
     * @param integer $RuleCount <p>关联规则数量</p>
     * @param string $Rationale <p>条款原理</p>
     * @param string $Sn <p>编号</p>
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
        if (array_key_exists("TermID",$param) and $param["TermID"] !== null) {
            $this->TermID = $param["TermID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("Rationale",$param) and $param["Rationale"] !== null) {
            $this->Rationale = $param["Rationale"];
        }

        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            $this->Sn = $param["Sn"];
        }
    }
}

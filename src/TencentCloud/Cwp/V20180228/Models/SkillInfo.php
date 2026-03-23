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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Skill 的信息
 *
 * @method string getSkillName() 获取Skill名称
 * @method void setSkillName(string $SkillName) 设置Skill名称
 * @method string getSkillDesc() 获取Skill 描述
 * @method void setSkillDesc(string $SkillDesc) 设置Skill 描述
 * @method string getSkillSource() 获取Skill来源
 * @method void setSkillSource(string $SkillSource) 设置Skill来源
 * @method array getTags() 获取Skill风险标签
 * @method void setTags(array $Tags) 设置Skill风险标签
 * @method string getRiskDesc() 获取skill风险描述
 * @method void setRiskDesc(string $RiskDesc) 设置skill风险描述
 * @method string getEvidence() 获取证据链
 * @method void setEvidence(string $Evidence) 设置证据链
 * @method integer getId() 获取事件ID
 * @method void setId(integer $Id) 设置事件ID
 */
class SkillInfo extends AbstractModel
{
    /**
     * @var string Skill名称
     */
    public $SkillName;

    /**
     * @var string Skill 描述
     */
    public $SkillDesc;

    /**
     * @var string Skill来源
     */
    public $SkillSource;

    /**
     * @var array Skill风险标签
     */
    public $Tags;

    /**
     * @var string skill风险描述
     */
    public $RiskDesc;

    /**
     * @var string 证据链
     */
    public $Evidence;

    /**
     * @var integer 事件ID
     */
    public $Id;

    /**
     * @param string $SkillName Skill名称
     * @param string $SkillDesc Skill 描述
     * @param string $SkillSource Skill来源
     * @param array $Tags Skill风险标签
     * @param string $RiskDesc skill风险描述
     * @param string $Evidence 证据链
     * @param integer $Id 事件ID
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
        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            $this->SkillName = $param["SkillName"];
        }

        if (array_key_exists("SkillDesc",$param) and $param["SkillDesc"] !== null) {
            $this->SkillDesc = $param["SkillDesc"];
        }

        if (array_key_exists("SkillSource",$param) and $param["SkillSource"] !== null) {
            $this->SkillSource = $param["SkillSource"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("RiskDesc",$param) and $param["RiskDesc"] !== null) {
            $this->RiskDesc = $param["RiskDesc"];
        }

        if (array_key_exists("Evidence",$param) and $param["Evidence"] !== null) {
            $this->Evidence = $param["Evidence"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}

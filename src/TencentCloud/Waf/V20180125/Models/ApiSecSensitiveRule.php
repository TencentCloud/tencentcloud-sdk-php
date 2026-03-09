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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api安全敏感规则列表
 *
 * @method string getRuleName() 获取身份证号，唯一主键
 * @method void setRuleName(string $RuleName) 设置身份证号，唯一主键
 * @method string getSource() 获取表示OS系统内置，"custom"表示客户自定义
 * @method void setSource(string $Source) 设置表示OS系统内置，"custom"表示客户自定义
 * @method integer getStatus() 获取开关状态，0：表示关，1表示开
 * @method void setStatus(integer $Status) 设置开关状态，0：表示关，1表示开
 * @method string getLevel() 获取风险等级，100，200,300表示低中高三个等级
 * @method void setLevel(string $Level) 设置风险等级，100，200,300表示低中高三个等级
 * @method integer getTimestamp() 获取修改时间，默认0，表示没有进行修改
 * @method void setTimestamp(integer $Timestamp) 设置修改时间，默认0，表示没有进行修改
 * @method ApiSecCustomSensitiveRule getCustomRule() 获取自定义规则部分
 * @method void setCustomRule(ApiSecCustomSensitiveRule $CustomRule) 设置自定义规则部分
 * @method integer getIsPan() 获取是否泛化 0:不泛化，1:泛化
 * @method void setIsPan(integer $IsPan) 设置是否泛化 0:不泛化，1:泛化
 */
class ApiSecSensitiveRule extends AbstractModel
{
    /**
     * @var string 身份证号，唯一主键
     */
    public $RuleName;

    /**
     * @var string 表示OS系统内置，"custom"表示客户自定义
     */
    public $Source;

    /**
     * @var integer 开关状态，0：表示关，1表示开
     */
    public $Status;

    /**
     * @var string 风险等级，100，200,300表示低中高三个等级
     */
    public $Level;

    /**
     * @var integer 修改时间，默认0，表示没有进行修改
     */
    public $Timestamp;

    /**
     * @var ApiSecCustomSensitiveRule 自定义规则部分
     */
    public $CustomRule;

    /**
     * @var integer 是否泛化 0:不泛化，1:泛化
     */
    public $IsPan;

    /**
     * @param string $RuleName 身份证号，唯一主键
     * @param string $Source 表示OS系统内置，"custom"表示客户自定义
     * @param integer $Status 开关状态，0：表示关，1表示开
     * @param string $Level 风险等级，100，200,300表示低中高三个等级
     * @param integer $Timestamp 修改时间，默认0，表示没有进行修改
     * @param ApiSecCustomSensitiveRule $CustomRule 自定义规则部分
     * @param integer $IsPan 是否泛化 0:不泛化，1:泛化
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = new ApiSecCustomSensitiveRule();
            $this->CustomRule->deserialize($param["CustomRule"]);
        }

        if (array_key_exists("IsPan",$param) and $param["IsPan"] !== null) {
            $this->IsPan = $param["IsPan"];
        }
    }
}

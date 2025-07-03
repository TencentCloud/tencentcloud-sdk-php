<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ModifyUserSignatureRuleV2请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getMainClassID() 获取主类id
 * @method void setMainClassID(string $MainClassID) 设置主类id
 * @method integer getStatus() 获取主类开关0=关闭，1=开启，2=只告警
 * @method void setStatus(integer $Status) 设置主类开关0=关闭，1=开启，2=只告警
 * @method array getRuleID() 获取下发修改的规则列表
 * @method void setRuleID(array $RuleID) 设置下发修改的规则列表
 */
class ModifyUserSignatureRuleV2Request extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 主类id
     */
    public $MainClassID;

    /**
     * @var integer 主类开关0=关闭，1=开启，2=只告警
     */
    public $Status;

    /**
     * @var array 下发修改的规则列表
     */
    public $RuleID;

    /**
     * @param string $Domain 域名
     * @param string $MainClassID 主类id
     * @param integer $Status 主类开关0=关闭，1=开启，2=只告警
     * @param array $RuleID 下发修改的规则列表
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("MainClassID",$param) and $param["MainClassID"] !== null) {
            $this->MainClassID = $param["MainClassID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = [];
            foreach ($param["RuleID"] as $key => $value){
                $obj = new ReqUserRule();
                $obj->deserialize($value);
                array_push($this->RuleID, $obj);
            }
        }
    }
}

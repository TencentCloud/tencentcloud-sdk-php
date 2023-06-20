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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务高级配置
 *
 * @method array getVulRisk() 获取漏洞风险高级配置
 * @method void setVulRisk(array $VulRisk) 设置漏洞风险高级配置
 * @method array getWeakPwdRisk() 获取弱口令风险高级配置
 * @method void setWeakPwdRisk(array $WeakPwdRisk) 设置弱口令风险高级配置
 * @method array getCFGRisk() 获取配置风险高级配置
 * @method void setCFGRisk(array $CFGRisk) 设置配置风险高级配置
 */
class TaskAdvanceCFG extends AbstractModel
{
    /**
     * @var array 漏洞风险高级配置
     */
    public $VulRisk;

    /**
     * @var array 弱口令风险高级配置
     */
    public $WeakPwdRisk;

    /**
     * @var array 配置风险高级配置
     */
    public $CFGRisk;

    /**
     * @param array $VulRisk 漏洞风险高级配置
     * @param array $WeakPwdRisk 弱口令风险高级配置
     * @param array $CFGRisk 配置风险高级配置
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
        if (array_key_exists("VulRisk",$param) and $param["VulRisk"] !== null) {
            $this->VulRisk = [];
            foreach ($param["VulRisk"] as $key => $value){
                $obj = new TaskCenterVulRiskInputParam();
                $obj->deserialize($value);
                array_push($this->VulRisk, $obj);
            }
        }

        if (array_key_exists("WeakPwdRisk",$param) and $param["WeakPwdRisk"] !== null) {
            $this->WeakPwdRisk = [];
            foreach ($param["WeakPwdRisk"] as $key => $value){
                $obj = new TaskCenterWeakPwdRiskInputParam();
                $obj->deserialize($value);
                array_push($this->WeakPwdRisk, $obj);
            }
        }

        if (array_key_exists("CFGRisk",$param) and $param["CFGRisk"] !== null) {
            $this->CFGRisk = [];
            foreach ($param["CFGRisk"] as $key => $value){
                $obj = new TaskCenterCFGRiskInputParam();
                $obj->deserialize($value);
                array_push($this->CFGRisk, $obj);
            }
        }
    }
}

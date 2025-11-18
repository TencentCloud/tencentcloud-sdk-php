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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAuditService请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cmgo-xfts****，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cmgo-xfts****，与云数据库控制台页面中显示的实例 ID 相同。
 * @method integer getLogExpireDay() 获取审计日志保存时长。单位为：天。当前支持的取值包括： 7： 一周。 30： 一个月。 90： 三个月。 180 ： 六个月。 365 ： 一年。 1095 ： 三年。 1825 ： 五年。
 * @method void setLogExpireDay(integer $LogExpireDay) 设置审计日志保存时长。单位为：天。当前支持的取值包括： 7： 一周。 30： 一个月。 90： 三个月。 180 ： 六个月。 365 ： 一年。 1095 ： 三年。 1825 ： 五年。
 * @method boolean getAuditAll() 获取true-全审计，false-规则审计，注意：AuditAll=true 时，RuleFilters 无需填参
 * @method void setAuditAll(boolean $AuditAll) 设置true-全审计，false-规则审计，注意：AuditAll=true 时，RuleFilters 无需填参
 * @method array getRuleFilters() 获取审计过滤规则，Type的范围【SrcIp、DB、Collection、User、SqlType】，注意：Type=SqlType时，Value必须在这个范围 ["query", "insert", "update", "delete", "command"]
 * @method void setRuleFilters(array $RuleFilters) 设置审计过滤规则，Type的范围【SrcIp、DB、Collection、User、SqlType】，注意：Type=SqlType时，Value必须在这个范围 ["query", "insert", "update", "delete", "command"]
 */
class ModifyAuditServiceRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cmgo-xfts****，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var integer 审计日志保存时长。单位为：天。当前支持的取值包括： 7： 一周。 30： 一个月。 90： 三个月。 180 ： 六个月。 365 ： 一年。 1095 ： 三年。 1825 ： 五年。
     */
    public $LogExpireDay;

    /**
     * @var boolean true-全审计，false-规则审计，注意：AuditAll=true 时，RuleFilters 无需填参
     */
    public $AuditAll;

    /**
     * @var array 审计过滤规则，Type的范围【SrcIp、DB、Collection、User、SqlType】，注意：Type=SqlType时，Value必须在这个范围 ["query", "insert", "update", "delete", "command"]
     */
    public $RuleFilters;

    /**
     * @param string $InstanceId 实例ID，格式如：cmgo-xfts****，与云数据库控制台页面中显示的实例 ID 相同。
     * @param integer $LogExpireDay 审计日志保存时长。单位为：天。当前支持的取值包括： 7： 一周。 30： 一个月。 90： 三个月。 180 ： 六个月。 365 ： 一年。 1095 ： 三年。 1825 ： 五年。
     * @param boolean $AuditAll true-全审计，false-规则审计，注意：AuditAll=true 时，RuleFilters 无需填参
     * @param array $RuleFilters 审计过滤规则，Type的范围【SrcIp、DB、Collection、User、SqlType】，注意：Type=SqlType时，Value必须在这个范围 ["query", "insert", "update", "delete", "command"]
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
        }

        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }
    }
}

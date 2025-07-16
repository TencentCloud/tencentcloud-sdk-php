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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdatePrometheusAlertGroup请求参数结构体
 *
 * @method string getInstanceId() 获取prometheus实例ID
 * @method void setInstanceId(string $InstanceId) 设置prometheus实例ID
 * @method string getGroupId() 获取告警分组ID，形如alert-xxxx
 * @method void setGroupId(string $GroupId) 设置告警分组ID，形如alert-xxxx
 * @method string getGroupName() 获取告警分组名称，不能与其他告警分组重名
 * @method void setGroupName(string $GroupName) 设置告警分组名称，不能与其他告警分组重名
 * @method integer getGroupState() 获取告警分组状态：
2 -- 启用
3 -- 禁用
不为空时会覆盖 `Rules`字段下所有告警规则状态
 * @method void setGroupState(integer $GroupState) 设置告警分组状态：
2 -- 启用
3 -- 禁用
不为空时会覆盖 `Rules`字段下所有告警规则状态
 * @method array getAMPReceivers() 获取腾讯云可观测平台告警通知模板ID列表，形如Consumer-xxxx或notice-xxxx
 * @method void setAMPReceivers(array $AMPReceivers) 设置腾讯云可观测平台告警通知模板ID列表，形如Consumer-xxxx或notice-xxxx
 * @method PrometheusAlertCustomReceiver getCustomReceiver() 获取自定义告警通知模板
 * @method void setCustomReceiver(PrometheusAlertCustomReceiver $CustomReceiver) 设置自定义告警通知模板
 * @method string getRepeatInterval() 获取告警通知周期（收敛时间），为空默认1h
 * @method void setRepeatInterval(string $RepeatInterval) 设置告警通知周期（收敛时间），为空默认1h
 * @method array getRules() 获取要创建的告警规则列表
 * @method void setRules(array $Rules) 设置要创建的告警规则列表
 */
class UpdatePrometheusAlertGroupRequest extends AbstractModel
{
    /**
     * @var string prometheus实例ID
     */
    public $InstanceId;

    /**
     * @var string 告警分组ID，形如alert-xxxx
     */
    public $GroupId;

    /**
     * @var string 告警分组名称，不能与其他告警分组重名
     */
    public $GroupName;

    /**
     * @var integer 告警分组状态：
2 -- 启用
3 -- 禁用
不为空时会覆盖 `Rules`字段下所有告警规则状态
     */
    public $GroupState;

    /**
     * @var array 腾讯云可观测平台告警通知模板ID列表，形如Consumer-xxxx或notice-xxxx
     */
    public $AMPReceivers;

    /**
     * @var PrometheusAlertCustomReceiver 自定义告警通知模板
     */
    public $CustomReceiver;

    /**
     * @var string 告警通知周期（收敛时间），为空默认1h
     */
    public $RepeatInterval;

    /**
     * @var array 要创建的告警规则列表
     */
    public $Rules;

    /**
     * @param string $InstanceId prometheus实例ID
     * @param string $GroupId 告警分组ID，形如alert-xxxx
     * @param string $GroupName 告警分组名称，不能与其他告警分组重名
     * @param integer $GroupState 告警分组状态：
2 -- 启用
3 -- 禁用
不为空时会覆盖 `Rules`字段下所有告警规则状态
     * @param array $AMPReceivers 腾讯云可观测平台告警通知模板ID列表，形如Consumer-xxxx或notice-xxxx
     * @param PrometheusAlertCustomReceiver $CustomReceiver 自定义告警通知模板
     * @param string $RepeatInterval 告警通知周期（收敛时间），为空默认1h
     * @param array $Rules 要创建的告警规则列表
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupState",$param) and $param["GroupState"] !== null) {
            $this->GroupState = $param["GroupState"];
        }

        if (array_key_exists("AMPReceivers",$param) and $param["AMPReceivers"] !== null) {
            $this->AMPReceivers = $param["AMPReceivers"];
        }

        if (array_key_exists("CustomReceiver",$param) and $param["CustomReceiver"] !== null) {
            $this->CustomReceiver = new PrometheusAlertCustomReceiver();
            $this->CustomReceiver->deserialize($param["CustomReceiver"]);
        }

        if (array_key_exists("RepeatInterval",$param) and $param["RepeatInterval"] !== null) {
            $this->RepeatInterval = $param["RepeatInterval"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PrometheusAlertGroupRuleSet();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}

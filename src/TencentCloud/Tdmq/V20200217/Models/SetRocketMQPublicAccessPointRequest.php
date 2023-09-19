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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetRocketMQPublicAccessPoint请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID，当前只支持专享集群
 * @method void setInstanceId(string $InstanceId) 设置集群ID，当前只支持专享集群
 * @method boolean getEnabled() 获取开启或关闭访问
 * @method void setEnabled(boolean $Enabled) 设置开启或关闭访问
 * @method integer getBandwidth() 获取带宽大小，开启或者调整公网时必须指定，Mbps为单位
 * @method void setBandwidth(integer $Bandwidth) 设置带宽大小，开启或者调整公网时必须指定，Mbps为单位
 * @method integer getPayMode() 获取付费模式，开启公网时必须指定，0为按小时计费，1为包年包月，当前只支持按小时计费
 * @method void setPayMode(integer $PayMode) 设置付费模式，开启公网时必须指定，0为按小时计费，1为包年包月，当前只支持按小时计费
 * @method array getRules() 获取公网访问安全规则列表，Enabled为true时必须传入
 * @method void setRules(array $Rules) 设置公网访问安全规则列表，Enabled为true时必须传入
 */
class SetRocketMQPublicAccessPointRequest extends AbstractModel
{
    /**
     * @var string 集群ID，当前只支持专享集群
     */
    public $InstanceId;

    /**
     * @var boolean 开启或关闭访问
     */
    public $Enabled;

    /**
     * @var integer 带宽大小，开启或者调整公网时必须指定，Mbps为单位
     */
    public $Bandwidth;

    /**
     * @var integer 付费模式，开启公网时必须指定，0为按小时计费，1为包年包月，当前只支持按小时计费
     */
    public $PayMode;

    /**
     * @var array 公网访问安全规则列表，Enabled为true时必须传入
     */
    public $Rules;

    /**
     * @param string $InstanceId 集群ID，当前只支持专享集群
     * @param boolean $Enabled 开启或关闭访问
     * @param integer $Bandwidth 带宽大小，开启或者调整公网时必须指定，Mbps为单位
     * @param integer $PayMode 付费模式，开启公网时必须指定，0为按小时计费，1为包年包月，当前只支持按小时计费
     * @param array $Rules 公网访问安全规则列表，Enabled为true时必须传入
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

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PublicAccessRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}

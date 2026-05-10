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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * rocketmq router规则基本信息
 *
 * @method string getSourceType() 获取<p>源类型。<br>OPEN_SOURCE_ROCKETMQ：开源rocketmq<br>ALI_ROCKETMQ：阿里云rocketmq<br>TENCENT_ROCKETMQ：腾讯云rocketmq<br>TENCENT_MQTT：腾讯云MQTT<br>ALI_MNS：阿里云mns</p>
 * @method void setSourceType(string $SourceType) 设置<p>源类型。<br>OPEN_SOURCE_ROCKETMQ：开源rocketmq<br>ALI_ROCKETMQ：阿里云rocketmq<br>TENCENT_ROCKETMQ：腾讯云rocketmq<br>TENCENT_MQTT：腾讯云MQTT<br>ALI_MNS：阿里云mns</p>
 * @method string getTargetType() 获取<p>目标类型。<br>枚举和SourceType字段一样</p>
 * @method void setTargetType(string $TargetType) 设置<p>目标类型。<br>枚举和SourceType字段一样</p>
 * @method string getRemarkName() 获取<p>规则备注，创建后任务后可以修改</p>
 * @method void setRemarkName(string $RemarkName) 设置<p>规则备注，创建后任务后可以修改</p>
 * @method RouterRocketMQSource getAliRocketMQSource() 获取<p>阿里云rocketmq源信息</p>
 * @method void setAliRocketMQSource(RouterRocketMQSource $AliRocketMQSource) 设置<p>阿里云rocketmq源信息</p>
 * @method RouterRocketMQTarget getAliRocketMQTarget() 获取<p>阿里云rocketmq目标信息</p>
 * @method void setAliRocketMQTarget(RouterRocketMQTarget $AliRocketMQTarget) 设置<p>阿里云rocketmq目标信息</p>
 * @method RouterMessageServiceSource getAliMessageServiceSource() 获取<p>阿里云mns源信息</p>
 * @method void setAliMessageServiceSource(RouterMessageServiceSource $AliMessageServiceSource) 设置<p>阿里云mns源信息</p>
 * @method RouterMessageServiceTarget getAliMessageServiceTarget() 获取<p>阿里云mns目标信息</p>
 * @method void setAliMessageServiceTarget(RouterMessageServiceTarget $AliMessageServiceTarget) 设置<p>阿里云mns目标信息</p>
 * @method RouterTencentRocketMQSource getTenRocketMQSource() 获取<p>腾讯云rocketmq源信息</p>
 * @method void setTenRocketMQSource(RouterTencentRocketMQSource $TenRocketMQSource) 设置<p>腾讯云rocketmq源信息</p>
 * @method RouterTencentRocketMQTarget getTenRocketMQTarget() 获取<p>腾讯云rocketmq目标信息</p>
 * @method void setTenRocketMQTarget(RouterTencentRocketMQTarget $TenRocketMQTarget) 设置<p>腾讯云rocketmq目标信息</p>
 * @method string getAliasName() 获取<p>任务别名</p>
 * @method void setAliasName(string $AliasName) 设置<p>任务别名</p>
 * @method RouterTencentMQTTSource getTenMQTTSource() 获取<p>腾讯云 MQTT 源集群信息</p>
 * @method void setTenMQTTSource(RouterTencentMQTTSource $TenMQTTSource) 设置<p>腾讯云 MQTT 源集群信息</p>
 * @method RouterTencentMQTTTarget getTenMQTTTarget() 获取<p>腾讯云 MQTT 目标集群信息</p>
 * @method void setTenMQTTTarget(RouterTencentMQTTTarget $TenMQTTTarget) 设置<p>腾讯云 MQTT 目标集群信息</p>
 */
class RocketMQRouterRuleInfo extends AbstractModel
{
    /**
     * @var string <p>源类型。<br>OPEN_SOURCE_ROCKETMQ：开源rocketmq<br>ALI_ROCKETMQ：阿里云rocketmq<br>TENCENT_ROCKETMQ：腾讯云rocketmq<br>TENCENT_MQTT：腾讯云MQTT<br>ALI_MNS：阿里云mns</p>
     */
    public $SourceType;

    /**
     * @var string <p>目标类型。<br>枚举和SourceType字段一样</p>
     */
    public $TargetType;

    /**
     * @var string <p>规则备注，创建后任务后可以修改</p>
     */
    public $RemarkName;

    /**
     * @var RouterRocketMQSource <p>阿里云rocketmq源信息</p>
     */
    public $AliRocketMQSource;

    /**
     * @var RouterRocketMQTarget <p>阿里云rocketmq目标信息</p>
     */
    public $AliRocketMQTarget;

    /**
     * @var RouterMessageServiceSource <p>阿里云mns源信息</p>
     */
    public $AliMessageServiceSource;

    /**
     * @var RouterMessageServiceTarget <p>阿里云mns目标信息</p>
     */
    public $AliMessageServiceTarget;

    /**
     * @var RouterTencentRocketMQSource <p>腾讯云rocketmq源信息</p>
     */
    public $TenRocketMQSource;

    /**
     * @var RouterTencentRocketMQTarget <p>腾讯云rocketmq目标信息</p>
     */
    public $TenRocketMQTarget;

    /**
     * @var string <p>任务别名</p>
     */
    public $AliasName;

    /**
     * @var RouterTencentMQTTSource <p>腾讯云 MQTT 源集群信息</p>
     */
    public $TenMQTTSource;

    /**
     * @var RouterTencentMQTTTarget <p>腾讯云 MQTT 目标集群信息</p>
     */
    public $TenMQTTTarget;

    /**
     * @param string $SourceType <p>源类型。<br>OPEN_SOURCE_ROCKETMQ：开源rocketmq<br>ALI_ROCKETMQ：阿里云rocketmq<br>TENCENT_ROCKETMQ：腾讯云rocketmq<br>TENCENT_MQTT：腾讯云MQTT<br>ALI_MNS：阿里云mns</p>
     * @param string $TargetType <p>目标类型。<br>枚举和SourceType字段一样</p>
     * @param string $RemarkName <p>规则备注，创建后任务后可以修改</p>
     * @param RouterRocketMQSource $AliRocketMQSource <p>阿里云rocketmq源信息</p>
     * @param RouterRocketMQTarget $AliRocketMQTarget <p>阿里云rocketmq目标信息</p>
     * @param RouterMessageServiceSource $AliMessageServiceSource <p>阿里云mns源信息</p>
     * @param RouterMessageServiceTarget $AliMessageServiceTarget <p>阿里云mns目标信息</p>
     * @param RouterTencentRocketMQSource $TenRocketMQSource <p>腾讯云rocketmq源信息</p>
     * @param RouterTencentRocketMQTarget $TenRocketMQTarget <p>腾讯云rocketmq目标信息</p>
     * @param string $AliasName <p>任务别名</p>
     * @param RouterTencentMQTTSource $TenMQTTSource <p>腾讯云 MQTT 源集群信息</p>
     * @param RouterTencentMQTTTarget $TenMQTTTarget <p>腾讯云 MQTT 目标集群信息</p>
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("RemarkName",$param) and $param["RemarkName"] !== null) {
            $this->RemarkName = $param["RemarkName"];
        }

        if (array_key_exists("AliRocketMQSource",$param) and $param["AliRocketMQSource"] !== null) {
            $this->AliRocketMQSource = new RouterRocketMQSource();
            $this->AliRocketMQSource->deserialize($param["AliRocketMQSource"]);
        }

        if (array_key_exists("AliRocketMQTarget",$param) and $param["AliRocketMQTarget"] !== null) {
            $this->AliRocketMQTarget = new RouterRocketMQTarget();
            $this->AliRocketMQTarget->deserialize($param["AliRocketMQTarget"]);
        }

        if (array_key_exists("AliMessageServiceSource",$param) and $param["AliMessageServiceSource"] !== null) {
            $this->AliMessageServiceSource = new RouterMessageServiceSource();
            $this->AliMessageServiceSource->deserialize($param["AliMessageServiceSource"]);
        }

        if (array_key_exists("AliMessageServiceTarget",$param) and $param["AliMessageServiceTarget"] !== null) {
            $this->AliMessageServiceTarget = new RouterMessageServiceTarget();
            $this->AliMessageServiceTarget->deserialize($param["AliMessageServiceTarget"]);
        }

        if (array_key_exists("TenRocketMQSource",$param) and $param["TenRocketMQSource"] !== null) {
            $this->TenRocketMQSource = new RouterTencentRocketMQSource();
            $this->TenRocketMQSource->deserialize($param["TenRocketMQSource"]);
        }

        if (array_key_exists("TenRocketMQTarget",$param) and $param["TenRocketMQTarget"] !== null) {
            $this->TenRocketMQTarget = new RouterTencentRocketMQTarget();
            $this->TenRocketMQTarget->deserialize($param["TenRocketMQTarget"]);
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("TenMQTTSource",$param) and $param["TenMQTTSource"] !== null) {
            $this->TenMQTTSource = new RouterTencentMQTTSource();
            $this->TenMQTTSource->deserialize($param["TenMQTTSource"]);
        }

        if (array_key_exists("TenMQTTTarget",$param) and $param["TenMQTTTarget"] !== null) {
            $this->TenMQTTTarget = new RouterTencentMQTTTarget();
            $this->TenMQTTTarget->deserialize($param["TenMQTTTarget"]);
        }
    }
}

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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知渠道组详细配置
 *
 * @method string getName() 获取<p>告警通知渠道组名称。</p>
 * @method void setName(string $Name) 设置<p>告警通知渠道组名称。</p>
 * @method array getTags() 获取<p>告警通知渠道组绑定的标签信息。</p>
 * @method void setTags(array $Tags) 设置<p>告警通知渠道组绑定的标签信息。</p>
 * @method string getType() 获取<p>告警模板的类型。可选值：<br><br><li> Trigger - 告警触发</li><br><br><li> Recovery - 告警恢复</li><br><br><li> All - 告警触发和告警恢复</li></p>
 * @method void setType(string $Type) 设置<p>告警模板的类型。可选值：<br><br><li> Trigger - 告警触发</li><br><br><li> Recovery - 告警恢复</li><br><br><li> All - 告警触发和告警恢复</li></p>
 * @method array getNoticeReceivers() 获取<p>告警通知模板接收者信息。</p>
 * @method void setNoticeReceivers(array $NoticeReceivers) 设置<p>告警通知模板接收者信息。</p>
 * @method array getWebCallbacks() 获取<p>告警通知模板回调信息。</p>
 * @method void setWebCallbacks(array $WebCallbacks) 设置<p>告警通知模板回调信息。</p>
 * @method string getAlarmNoticeId() 获取<p>告警通知模板ID。</p>
 * @method void setAlarmNoticeId(string $AlarmNoticeId) 设置<p>告警通知模板ID。</p>
 * @method array getNoticeRules() 获取<p>通知规则。</p>
 * @method void setNoticeRules(array $NoticeRules) 设置<p>通知规则。</p>
 * @method integer getAlarmShieldStatus() 获取<p>免登录操作告警开关。<br>参数值： 1：关闭 2：开启（默认开启）</p>
 * @method void setAlarmShieldStatus(integer $AlarmShieldStatus) 设置<p>免登录操作告警开关。<br>参数值： 1：关闭 2：开启（默认开启）</p>
 * @method integer getSecureDetailStatus() 获取<p>告警详情需要安全认证登录开关，未传时默认&quot;关闭&quot;</p><p>枚举值：</p><ul><li>1： 关闭（默认值）</li><li>2： 开启</li></ul>
 * @method void setSecureDetailStatus(integer $SecureDetailStatus) 设置<p>告警详情需要安全认证登录开关，未传时默认&quot;关闭&quot;</p><p>枚举值：</p><ul><li>1： 关闭（默认值）</li><li>2： 开启</li></ul>
 * @method string getJumpDomain() 获取<p>调用链接域名。http:// 或者 https:// 开头，不能/结尾</p>
 * @method void setJumpDomain(string $JumpDomain) 设置<p>调用链接域名。http:// 或者 https:// 开头，不能/结尾</p>
 * @method AlarmNoticeDeliverConfig getAlarmNoticeDeliverConfig() 获取<p>投递相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmNoticeDeliverConfig(AlarmNoticeDeliverConfig $AlarmNoticeDeliverConfig) 设置<p>投递相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间。格式： YYYY-MM-DD HH:MM:SS</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。格式： YYYY-MM-DD HH:MM:SS</p>
 * @method string getUpdateTime() 获取<p>最近更新时间。格式： YYYY-MM-DD HH:MM:SS</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近更新时间。格式： YYYY-MM-DD HH:MM:SS</p>
 * @method integer getDeliverStatus() 获取<p>投递日志开关。</p><p>参数值：</p><p>1：关闭</p><p>2：开启</p>
 * @method void setDeliverStatus(integer $DeliverStatus) 设置<p>投递日志开关。</p><p>参数值：</p><p>1：关闭</p><p>2：开启</p>
 * @method integer getDeliverFlag() 获取<p>投递日志标识。</p><p>参数值：</p><p>1：未启用</p><p>2：已启用</p><p>3：投递异常</p>
 * @method void setDeliverFlag(integer $DeliverFlag) 设置<p>投递日志标识。</p><p>参数值：</p><p>1：未启用</p><p>2：已启用</p><p>3：投递异常</p>
 * @method AlarmShieldCount getAlarmShieldCount() 获取<p>通知渠道组配置的告警屏蔽统计状态数量信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmShieldCount(AlarmShieldCount $AlarmShieldCount) 设置<p>通知渠道组配置的告警屏蔽统计状态数量信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCallbackPrioritize() 获取<p>统一设定自定义回调参数。</p><ul><li>true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。</li><li>false:优先使用告警策略中单独配置的请求头及请求内容。</li></ul>
 * @method void setCallbackPrioritize(boolean $CallbackPrioritize) 设置<p>统一设定自定义回调参数。</p><ul><li>true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。</li><li>false:优先使用告警策略中单独配置的请求头及请求内容。</li></ul>
 */
class AlarmNotice extends AbstractModel
{
    /**
     * @var string <p>告警通知渠道组名称。</p>
     */
    public $Name;

    /**
     * @var array <p>告警通知渠道组绑定的标签信息。</p>
     */
    public $Tags;

    /**
     * @var string <p>告警模板的类型。可选值：<br><br><li> Trigger - 告警触发</li><br><br><li> Recovery - 告警恢复</li><br><br><li> All - 告警触发和告警恢复</li></p>
     */
    public $Type;

    /**
     * @var array <p>告警通知模板接收者信息。</p>
     */
    public $NoticeReceivers;

    /**
     * @var array <p>告警通知模板回调信息。</p>
     */
    public $WebCallbacks;

    /**
     * @var string <p>告警通知模板ID。</p>
     */
    public $AlarmNoticeId;

    /**
     * @var array <p>通知规则。</p>
     */
    public $NoticeRules;

    /**
     * @var integer <p>免登录操作告警开关。<br>参数值： 1：关闭 2：开启（默认开启）</p>
     */
    public $AlarmShieldStatus;

    /**
     * @var integer <p>告警详情需要安全认证登录开关，未传时默认&quot;关闭&quot;</p><p>枚举值：</p><ul><li>1： 关闭（默认值）</li><li>2： 开启</li></ul>
     */
    public $SecureDetailStatus;

    /**
     * @var string <p>调用链接域名。http:// 或者 https:// 开头，不能/结尾</p>
     */
    public $JumpDomain;

    /**
     * @var AlarmNoticeDeliverConfig <p>投递相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmNoticeDeliverConfig;

    /**
     * @var string <p>创建时间。格式： YYYY-MM-DD HH:MM:SS</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最近更新时间。格式： YYYY-MM-DD HH:MM:SS</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>投递日志开关。</p><p>参数值：</p><p>1：关闭</p><p>2：开启</p>
     */
    public $DeliverStatus;

    /**
     * @var integer <p>投递日志标识。</p><p>参数值：</p><p>1：未启用</p><p>2：已启用</p><p>3：投递异常</p>
     */
    public $DeliverFlag;

    /**
     * @var AlarmShieldCount <p>通知渠道组配置的告警屏蔽统计状态数量信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmShieldCount;

    /**
     * @var boolean <p>统一设定自定义回调参数。</p><ul><li>true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。</li><li>false:优先使用告警策略中单独配置的请求头及请求内容。</li></ul>
     */
    public $CallbackPrioritize;

    /**
     * @param string $Name <p>告警通知渠道组名称。</p>
     * @param array $Tags <p>告警通知渠道组绑定的标签信息。</p>
     * @param string $Type <p>告警模板的类型。可选值：<br><br><li> Trigger - 告警触发</li><br><br><li> Recovery - 告警恢复</li><br><br><li> All - 告警触发和告警恢复</li></p>
     * @param array $NoticeReceivers <p>告警通知模板接收者信息。</p>
     * @param array $WebCallbacks <p>告警通知模板回调信息。</p>
     * @param string $AlarmNoticeId <p>告警通知模板ID。</p>
     * @param array $NoticeRules <p>通知规则。</p>
     * @param integer $AlarmShieldStatus <p>免登录操作告警开关。<br>参数值： 1：关闭 2：开启（默认开启）</p>
     * @param integer $SecureDetailStatus <p>告警详情需要安全认证登录开关，未传时默认&quot;关闭&quot;</p><p>枚举值：</p><ul><li>1： 关闭（默认值）</li><li>2： 开启</li></ul>
     * @param string $JumpDomain <p>调用链接域名。http:// 或者 https:// 开头，不能/结尾</p>
     * @param AlarmNoticeDeliverConfig $AlarmNoticeDeliverConfig <p>投递相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间。格式： YYYY-MM-DD HH:MM:SS</p>
     * @param string $UpdateTime <p>最近更新时间。格式： YYYY-MM-DD HH:MM:SS</p>
     * @param integer $DeliverStatus <p>投递日志开关。</p><p>参数值：</p><p>1：关闭</p><p>2：开启</p>
     * @param integer $DeliverFlag <p>投递日志标识。</p><p>参数值：</p><p>1：未启用</p><p>2：已启用</p><p>3：投递异常</p>
     * @param AlarmShieldCount $AlarmShieldCount <p>通知渠道组配置的告警屏蔽统计状态数量信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CallbackPrioritize <p>统一设定自定义回调参数。</p><ul><li>true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。</li><li>false:优先使用告警策略中单独配置的请求头及请求内容。</li></ul>
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NoticeReceivers",$param) and $param["NoticeReceivers"] !== null) {
            $this->NoticeReceivers = [];
            foreach ($param["NoticeReceivers"] as $key => $value){
                $obj = new NoticeReceiver();
                $obj->deserialize($value);
                array_push($this->NoticeReceivers, $obj);
            }
        }

        if (array_key_exists("WebCallbacks",$param) and $param["WebCallbacks"] !== null) {
            $this->WebCallbacks = [];
            foreach ($param["WebCallbacks"] as $key => $value){
                $obj = new WebCallback();
                $obj->deserialize($value);
                array_push($this->WebCallbacks, $obj);
            }
        }

        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }

        if (array_key_exists("NoticeRules",$param) and $param["NoticeRules"] !== null) {
            $this->NoticeRules = [];
            foreach ($param["NoticeRules"] as $key => $value){
                $obj = new NoticeRule();
                $obj->deserialize($value);
                array_push($this->NoticeRules, $obj);
            }
        }

        if (array_key_exists("AlarmShieldStatus",$param) and $param["AlarmShieldStatus"] !== null) {
            $this->AlarmShieldStatus = $param["AlarmShieldStatus"];
        }

        if (array_key_exists("SecureDetailStatus",$param) and $param["SecureDetailStatus"] !== null) {
            $this->SecureDetailStatus = $param["SecureDetailStatus"];
        }

        if (array_key_exists("JumpDomain",$param) and $param["JumpDomain"] !== null) {
            $this->JumpDomain = $param["JumpDomain"];
        }

        if (array_key_exists("AlarmNoticeDeliverConfig",$param) and $param["AlarmNoticeDeliverConfig"] !== null) {
            $this->AlarmNoticeDeliverConfig = new AlarmNoticeDeliverConfig();
            $this->AlarmNoticeDeliverConfig->deserialize($param["AlarmNoticeDeliverConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DeliverStatus",$param) and $param["DeliverStatus"] !== null) {
            $this->DeliverStatus = $param["DeliverStatus"];
        }

        if (array_key_exists("DeliverFlag",$param) and $param["DeliverFlag"] !== null) {
            $this->DeliverFlag = $param["DeliverFlag"];
        }

        if (array_key_exists("AlarmShieldCount",$param) and $param["AlarmShieldCount"] !== null) {
            $this->AlarmShieldCount = new AlarmShieldCount();
            $this->AlarmShieldCount->deserialize($param["AlarmShieldCount"]);
        }

        if (array_key_exists("CallbackPrioritize",$param) and $param["CallbackPrioritize"] !== null) {
            $this->CallbackPrioritize = $param["CallbackPrioritize"];
        }
    }
}

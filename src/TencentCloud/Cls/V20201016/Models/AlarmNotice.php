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
 * @method string getName() 获取告警通知渠道组名称。
 * @method void setName(string $Name) 设置告警通知渠道组名称。
 * @method array getTags() 获取告警通知渠道组绑定的标签信息。
 * @method void setTags(array $Tags) 设置告警通知渠道组绑定的标签信息。
 * @method string getType() 获取告警模板的类型。可选值：
<br><li> Trigger - 告警触发</li>
<br><li> Recovery - 告警恢复</li>
<br><li> All - 告警触发和告警恢复</li>
 * @method void setType(string $Type) 设置告警模板的类型。可选值：
<br><li> Trigger - 告警触发</li>
<br><li> Recovery - 告警恢复</li>
<br><li> All - 告警触发和告警恢复</li>
 * @method array getNoticeReceivers() 获取告警通知模板接收者信息。
 * @method void setNoticeReceivers(array $NoticeReceivers) 设置告警通知模板接收者信息。
 * @method array getWebCallbacks() 获取告警通知模板回调信息。
 * @method void setWebCallbacks(array $WebCallbacks) 设置告警通知模板回调信息。
 * @method string getAlarmNoticeId() 获取告警通知模板ID。
 * @method void setAlarmNoticeId(string $AlarmNoticeId) 设置告警通知模板ID。
 * @method array getNoticeRules() 获取通知规则。
 * @method void setNoticeRules(array $NoticeRules) 设置通知规则。
 * @method integer getAlarmShieldStatus() 获取免登录操作告警开关。
参数值： 1：关闭 2：开启（默认开启）
 * @method void setAlarmShieldStatus(integer $AlarmShieldStatus) 设置免登录操作告警开关。
参数值： 1：关闭 2：开启（默认开启）
 * @method string getJumpDomain() 获取调用链接域名。http:// 或者 https:// 开头，不能/结尾
 * @method void setJumpDomain(string $JumpDomain) 设置调用链接域名。http:// 或者 https:// 开头，不能/结尾
 * @method AlarmNoticeDeliverConfig getAlarmNoticeDeliverConfig() 获取投递相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmNoticeDeliverConfig(AlarmNoticeDeliverConfig $AlarmNoticeDeliverConfig) 设置投递相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间。格式： YYYY-MM-DD HH:MM:SS
 * @method void setCreateTime(string $CreateTime) 设置创建时间。格式： YYYY-MM-DD HH:MM:SS
 * @method string getUpdateTime() 获取最近更新时间。格式： YYYY-MM-DD HH:MM:SS
 * @method void setUpdateTime(string $UpdateTime) 设置最近更新时间。格式： YYYY-MM-DD HH:MM:SS
 * @method integer getDeliverStatus() 获取投递日志开关。

参数值：

1：关闭

2：开启 

 * @method void setDeliverStatus(integer $DeliverStatus) 设置投递日志开关。

参数值：

1：关闭

2：开启 

 * @method integer getDeliverFlag() 获取投递日志标识。

参数值：

1：未启用

2：已启用

3：投递异常
 * @method void setDeliverFlag(integer $DeliverFlag) 设置投递日志标识。

参数值：

1：未启用

2：已启用

3：投递异常
 * @method AlarmShieldCount getAlarmShieldCount() 获取通知渠道组配置的告警屏蔽统计状态数量信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmShieldCount(AlarmShieldCount $AlarmShieldCount) 设置通知渠道组配置的告警屏蔽统计状态数量信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCallbackPrioritize() 获取统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
 * @method void setCallbackPrioritize(boolean $CallbackPrioritize) 设置统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
 */
class AlarmNotice extends AbstractModel
{
    /**
     * @var string 告警通知渠道组名称。
     */
    public $Name;

    /**
     * @var array 告警通知渠道组绑定的标签信息。
     */
    public $Tags;

    /**
     * @var string 告警模板的类型。可选值：
<br><li> Trigger - 告警触发</li>
<br><li> Recovery - 告警恢复</li>
<br><li> All - 告警触发和告警恢复</li>
     */
    public $Type;

    /**
     * @var array 告警通知模板接收者信息。
     */
    public $NoticeReceivers;

    /**
     * @var array 告警通知模板回调信息。
     */
    public $WebCallbacks;

    /**
     * @var string 告警通知模板ID。
     */
    public $AlarmNoticeId;

    /**
     * @var array 通知规则。
     */
    public $NoticeRules;

    /**
     * @var integer 免登录操作告警开关。
参数值： 1：关闭 2：开启（默认开启）
     */
    public $AlarmShieldStatus;

    /**
     * @var string 调用链接域名。http:// 或者 https:// 开头，不能/结尾
     */
    public $JumpDomain;

    /**
     * @var AlarmNoticeDeliverConfig 投递相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmNoticeDeliverConfig;

    /**
     * @var string 创建时间。格式： YYYY-MM-DD HH:MM:SS
     */
    public $CreateTime;

    /**
     * @var string 最近更新时间。格式： YYYY-MM-DD HH:MM:SS
     */
    public $UpdateTime;

    /**
     * @var integer 投递日志开关。

参数值：

1：关闭

2：开启 

     */
    public $DeliverStatus;

    /**
     * @var integer 投递日志标识。

参数值：

1：未启用

2：已启用

3：投递异常
     */
    public $DeliverFlag;

    /**
     * @var AlarmShieldCount 通知渠道组配置的告警屏蔽统计状态数量信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmShieldCount;

    /**
     * @var boolean 统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
     */
    public $CallbackPrioritize;

    /**
     * @param string $Name 告警通知渠道组名称。
     * @param array $Tags 告警通知渠道组绑定的标签信息。
     * @param string $Type 告警模板的类型。可选值：
<br><li> Trigger - 告警触发</li>
<br><li> Recovery - 告警恢复</li>
<br><li> All - 告警触发和告警恢复</li>
     * @param array $NoticeReceivers 告警通知模板接收者信息。
     * @param array $WebCallbacks 告警通知模板回调信息。
     * @param string $AlarmNoticeId 告警通知模板ID。
     * @param array $NoticeRules 通知规则。
     * @param integer $AlarmShieldStatus 免登录操作告警开关。
参数值： 1：关闭 2：开启（默认开启）
     * @param string $JumpDomain 调用链接域名。http:// 或者 https:// 开头，不能/结尾
     * @param AlarmNoticeDeliverConfig $AlarmNoticeDeliverConfig 投递相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间。格式： YYYY-MM-DD HH:MM:SS
     * @param string $UpdateTime 最近更新时间。格式： YYYY-MM-DD HH:MM:SS
     * @param integer $DeliverStatus 投递日志开关。

参数值：

1：关闭

2：开启 

     * @param integer $DeliverFlag 投递日志标识。

参数值：

1：未启用

2：已启用

3：投递异常
     * @param AlarmShieldCount $AlarmShieldCount 通知渠道组配置的告警屏蔽统计状态数量信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CallbackPrioritize 统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
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

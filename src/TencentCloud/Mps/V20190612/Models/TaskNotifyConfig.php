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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务的事件通知配置。
 *
 * @method string getCmqModel() 获取CMQ或TDMQ-CMQ 的模型，有 Queue 和 Topic 两种。
 * @method void setCmqModel(string $CmqModel) 设置CMQ或TDMQ-CMQ 的模型，有 Queue 和 Topic 两种。
 * @method string getCmqRegion() 获取CMQ或TDMQ-CMQ 的园区，如 sh，bj 等。
 * @method void setCmqRegion(string $CmqRegion) 设置CMQ或TDMQ-CMQ 的园区，如 sh，bj 等。
 * @method string getTopicName() 获取当模型为 Topic 时有效，表示接收事件通知的 CMQ 或 TDMQ-CMQ 的主题名。
 * @method void setTopicName(string $TopicName) 设置当模型为 Topic 时有效，表示接收事件通知的 CMQ 或 TDMQ-CMQ 的主题名。
 * @method string getQueueName() 获取当模型为 Queue 时有效，表示接收事件通知的 CMQ 或 TDMQ-CMQ 的队列名。
 * @method void setQueueName(string $QueueName) 设置当模型为 Queue 时有效，表示接收事件通知的 CMQ 或 TDMQ-CMQ 的队列名。
 * @method string getNotifyMode() 获取工作流通知的模式，可取值有 Finish 和 Change，不填代表 Finish。
 * @method void setNotifyMode(string $NotifyMode) 设置工作流通知的模式，可取值有 Finish 和 Change，不填代表 Finish。
 * @method string getNotifyType() 获取通知类型，可选值：
<li>CMQ：已下线，建议切换到TDMQ-CMQ</li>
<li>TDMQ-CMQ：消息队列</li>
<li>URL：指定URL时HTTP回调推送到 NotifyUrl 指定的地址，回调协议http+json，包体内容同解析事件通知接口的输出参数 </li>
<li>SCF：不推荐使用，需要在控制台额外配置SCF</li>
<font color="red"> 注：不填或为空时默认 CMQ，如需采用其他类型需填写对应类型值。 </font>
 * @method void setNotifyType(string $NotifyType) 设置通知类型，可选值：
<li>CMQ：已下线，建议切换到TDMQ-CMQ</li>
<li>TDMQ-CMQ：消息队列</li>
<li>URL：指定URL时HTTP回调推送到 NotifyUrl 指定的地址，回调协议http+json，包体内容同解析事件通知接口的输出参数 </li>
<li>SCF：不推荐使用，需要在控制台额外配置SCF</li>
<font color="red"> 注：不填或为空时默认 CMQ，如需采用其他类型需填写对应类型值。 </font>
 * @method string getNotifyUrl() 获取HTTP回调地址，NotifyType为URL时必填。
 * @method void setNotifyUrl(string $NotifyUrl) 设置HTTP回调地址，NotifyType为URL时必填。
 */
class TaskNotifyConfig extends AbstractModel
{
    /**
     * @var string CMQ或TDMQ-CMQ 的模型，有 Queue 和 Topic 两种。
     */
    public $CmqModel;

    /**
     * @var string CMQ或TDMQ-CMQ 的园区，如 sh，bj 等。
     */
    public $CmqRegion;

    /**
     * @var string 当模型为 Topic 时有效，表示接收事件通知的 CMQ 或 TDMQ-CMQ 的主题名。
     */
    public $TopicName;

    /**
     * @var string 当模型为 Queue 时有效，表示接收事件通知的 CMQ 或 TDMQ-CMQ 的队列名。
     */
    public $QueueName;

    /**
     * @var string 工作流通知的模式，可取值有 Finish 和 Change，不填代表 Finish。
     */
    public $NotifyMode;

    /**
     * @var string 通知类型，可选值：
<li>CMQ：已下线，建议切换到TDMQ-CMQ</li>
<li>TDMQ-CMQ：消息队列</li>
<li>URL：指定URL时HTTP回调推送到 NotifyUrl 指定的地址，回调协议http+json，包体内容同解析事件通知接口的输出参数 </li>
<li>SCF：不推荐使用，需要在控制台额外配置SCF</li>
<font color="red"> 注：不填或为空时默认 CMQ，如需采用其他类型需填写对应类型值。 </font>
     */
    public $NotifyType;

    /**
     * @var string HTTP回调地址，NotifyType为URL时必填。
     */
    public $NotifyUrl;

    /**
     * @param string $CmqModel CMQ或TDMQ-CMQ 的模型，有 Queue 和 Topic 两种。
     * @param string $CmqRegion CMQ或TDMQ-CMQ 的园区，如 sh，bj 等。
     * @param string $TopicName 当模型为 Topic 时有效，表示接收事件通知的 CMQ 或 TDMQ-CMQ 的主题名。
     * @param string $QueueName 当模型为 Queue 时有效，表示接收事件通知的 CMQ 或 TDMQ-CMQ 的队列名。
     * @param string $NotifyMode 工作流通知的模式，可取值有 Finish 和 Change，不填代表 Finish。
     * @param string $NotifyType 通知类型，可选值：
<li>CMQ：已下线，建议切换到TDMQ-CMQ</li>
<li>TDMQ-CMQ：消息队列</li>
<li>URL：指定URL时HTTP回调推送到 NotifyUrl 指定的地址，回调协议http+json，包体内容同解析事件通知接口的输出参数 </li>
<li>SCF：不推荐使用，需要在控制台额外配置SCF</li>
<font color="red"> 注：不填或为空时默认 CMQ，如需采用其他类型需填写对应类型值。 </font>
     * @param string $NotifyUrl HTTP回调地址，NotifyType为URL时必填。
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
        if (array_key_exists("CmqModel",$param) and $param["CmqModel"] !== null) {
            $this->CmqModel = $param["CmqModel"];
        }

        if (array_key_exists("CmqRegion",$param) and $param["CmqRegion"] !== null) {
            $this->CmqRegion = $param["CmqRegion"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("NotifyMode",$param) and $param["NotifyMode"] !== null) {
            $this->NotifyMode = $param["NotifyMode"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }
    }
}

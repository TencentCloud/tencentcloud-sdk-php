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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTarget请求参数结构体
 *
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method string getType() 获取目标类型;取值范围:scf(云函数)/cls(日志服务)/amp(消息推送)/ckafka(消息推送)/es(大数据elastic-search)
 * @method void setType(string $Type) 设置目标类型;取值范围:scf(云函数)/cls(日志服务)/amp(消息推送)/ckafka(消息推送)/es(大数据elastic-search)
 * @method TargetDescription getTargetDescription() 获取目标描述;scf类型示例:
{"ResourceDescription":"qcs::scf:ap-guangzhou:uin/2252646423:namespace/default/function/john-test-0326/$LATEST"};
cls类型示例:
{"ResourceDescription":"qcs::cls:ap-guangzhou:uin/12323442323:topic/7103f705-6c38-4b64-ac9d-428af0f2e732"}
ckafka类型示例:
{"ResourceDescription":"qcs::ckafka:ap-guangzhou:uin/1500000688:ckafkaId/uin/1500000688/ckafka-018q1nwj","CkafkaTargetParams":{"TopicName":"alert","RetryPolicy":{"RetryInterval":60,"MaxRetryAttempts":360}}}
amp类型-邮件/短信示例:
{"ResourceDescription":"qcs::eb-amp:ap-guangzhou:uin/100012505002:","AMPParams":{"NotificationTemplateId":10181,"Lang":"cn","NoticeReceivers":[{"UserType":"User","UserIds":["9424525"],"TimeWindow":{"From":"09:30:00","To":"23:30:00"},"Channels":["Email","SMS"]}]}}
es类型示例:
{"ResourceDescription":"qcs::es:ap-guangzhou:uin/1500000688:instance/es-7cplmhsd","ESTargetParams":{"EsVersion":"7.14.2","UserName":"elastic","Password":"xxxxx","NetMode":"privateLink","IndexPrefix":"auto-test","IndexSuffixMode":"default","RotationInterval":"none","IndexTemplateType":"","OutputMode":"default"}}
 * @method void setTargetDescription(TargetDescription $TargetDescription) 设置目标描述;scf类型示例:
{"ResourceDescription":"qcs::scf:ap-guangzhou:uin/2252646423:namespace/default/function/john-test-0326/$LATEST"};
cls类型示例:
{"ResourceDescription":"qcs::cls:ap-guangzhou:uin/12323442323:topic/7103f705-6c38-4b64-ac9d-428af0f2e732"}
ckafka类型示例:
{"ResourceDescription":"qcs::ckafka:ap-guangzhou:uin/1500000688:ckafkaId/uin/1500000688/ckafka-018q1nwj","CkafkaTargetParams":{"TopicName":"alert","RetryPolicy":{"RetryInterval":60,"MaxRetryAttempts":360}}}
amp类型-邮件/短信示例:
{"ResourceDescription":"qcs::eb-amp:ap-guangzhou:uin/100012505002:","AMPParams":{"NotificationTemplateId":10181,"Lang":"cn","NoticeReceivers":[{"UserType":"User","UserIds":["9424525"],"TimeWindow":{"From":"09:30:00","To":"23:30:00"},"Channels":["Email","SMS"]}]}}
es类型示例:
{"ResourceDescription":"qcs::es:ap-guangzhou:uin/1500000688:instance/es-7cplmhsd","ESTargetParams":{"EsVersion":"7.14.2","UserName":"elastic","Password":"xxxxx","NetMode":"privateLink","IndexPrefix":"auto-test","IndexSuffixMode":"default","RotationInterval":"none","IndexTemplateType":"","OutputMode":"default"}}
 * @method string getRuleId() 获取事件规则ID
 * @method void setRuleId(string $RuleId) 设置事件规则ID
 */
class CreateTargetRequest extends AbstractModel
{
    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var string 目标类型;取值范围:scf(云函数)/cls(日志服务)/amp(消息推送)/ckafka(消息推送)/es(大数据elastic-search)
     */
    public $Type;

    /**
     * @var TargetDescription 目标描述;scf类型示例:
{"ResourceDescription":"qcs::scf:ap-guangzhou:uin/2252646423:namespace/default/function/john-test-0326/$LATEST"};
cls类型示例:
{"ResourceDescription":"qcs::cls:ap-guangzhou:uin/12323442323:topic/7103f705-6c38-4b64-ac9d-428af0f2e732"}
ckafka类型示例:
{"ResourceDescription":"qcs::ckafka:ap-guangzhou:uin/1500000688:ckafkaId/uin/1500000688/ckafka-018q1nwj","CkafkaTargetParams":{"TopicName":"alert","RetryPolicy":{"RetryInterval":60,"MaxRetryAttempts":360}}}
amp类型-邮件/短信示例:
{"ResourceDescription":"qcs::eb-amp:ap-guangzhou:uin/100012505002:","AMPParams":{"NotificationTemplateId":10181,"Lang":"cn","NoticeReceivers":[{"UserType":"User","UserIds":["9424525"],"TimeWindow":{"From":"09:30:00","To":"23:30:00"},"Channels":["Email","SMS"]}]}}
es类型示例:
{"ResourceDescription":"qcs::es:ap-guangzhou:uin/1500000688:instance/es-7cplmhsd","ESTargetParams":{"EsVersion":"7.14.2","UserName":"elastic","Password":"xxxxx","NetMode":"privateLink","IndexPrefix":"auto-test","IndexSuffixMode":"default","RotationInterval":"none","IndexTemplateType":"","OutputMode":"default"}}
     */
    public $TargetDescription;

    /**
     * @var string 事件规则ID
     */
    public $RuleId;

    /**
     * @param string $EventBusId 事件集ID
     * @param string $Type 目标类型;取值范围:scf(云函数)/cls(日志服务)/amp(消息推送)/ckafka(消息推送)/es(大数据elastic-search)
     * @param TargetDescription $TargetDescription 目标描述;scf类型示例:
{"ResourceDescription":"qcs::scf:ap-guangzhou:uin/2252646423:namespace/default/function/john-test-0326/$LATEST"};
cls类型示例:
{"ResourceDescription":"qcs::cls:ap-guangzhou:uin/12323442323:topic/7103f705-6c38-4b64-ac9d-428af0f2e732"}
ckafka类型示例:
{"ResourceDescription":"qcs::ckafka:ap-guangzhou:uin/1500000688:ckafkaId/uin/1500000688/ckafka-018q1nwj","CkafkaTargetParams":{"TopicName":"alert","RetryPolicy":{"RetryInterval":60,"MaxRetryAttempts":360}}}
amp类型-邮件/短信示例:
{"ResourceDescription":"qcs::eb-amp:ap-guangzhou:uin/100012505002:","AMPParams":{"NotificationTemplateId":10181,"Lang":"cn","NoticeReceivers":[{"UserType":"User","UserIds":["9424525"],"TimeWindow":{"From":"09:30:00","To":"23:30:00"},"Channels":["Email","SMS"]}]}}
es类型示例:
{"ResourceDescription":"qcs::es:ap-guangzhou:uin/1500000688:instance/es-7cplmhsd","ESTargetParams":{"EsVersion":"7.14.2","UserName":"elastic","Password":"xxxxx","NetMode":"privateLink","IndexPrefix":"auto-test","IndexSuffixMode":"default","RotationInterval":"none","IndexTemplateType":"","OutputMode":"default"}}
     * @param string $RuleId 事件规则ID
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TargetDescription",$param) and $param["TargetDescription"] !== null) {
            $this->TargetDescription = new TargetDescription();
            $this->TargetDescription->deserialize($param["TargetDescription"]);
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}

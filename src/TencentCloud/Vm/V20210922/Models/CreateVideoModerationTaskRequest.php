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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoModerationTask请求参数结构体
 *
 * @method string getBizType() 获取该字段表示策略的具体编号，用于接口调度，在[内容安全控制台](https://console.cloud.tencent.com/cms/clouds/manage)中可配置。若不传入Biztype参数（留空），则代表采用默认的识别策略；传入则会在审核时根据业务场景采取不同的审核策略。
备注：Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
 * @method void setBizType(string $BizType) 设置该字段表示策略的具体编号，用于接口调度，在[内容安全控制台](https://console.cloud.tencent.com/cms/clouds/manage)中可配置。若不传入Biztype参数（留空），则代表采用默认的识别策略；传入则会在审核时根据业务场景采取不同的审核策略。
备注：Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
 * @method string getType() 获取任务类型：可选VIDEO（点播视频），LIVE_VIDEO（直播视频）
 * @method void setType(string $Type) 设置任务类型：可选VIDEO（点播视频），LIVE_VIDEO（直播视频）
 * @method array getTasks() 获取输入的任务信息，最多可以同时创建10个任务
 * @method void setTasks(array $Tasks) 设置输入的任务信息，最多可以同时创建10个任务
 * @method string getSeed() 获取验证签名参数，具体可以参考[验签说明](https://cloud.tencent.com/document/product/1265/104001#42dd87d2-580f-46cf-a953-639a787d1eda)。
 * @method void setSeed(string $Seed) 设置验证签名参数，具体可以参考[验签说明](https://cloud.tencent.com/document/product/1265/104001#42dd87d2-580f-46cf-a953-639a787d1eda)。
 * @method string getCallbackUrl() 获取接收审核信息回调地址。如果设置了该字段，在审核过程中发现违规音频片段和画面截帧结果将发送至该接口。更多详情请参阅[回调配置说明](https://cloud.tencent.com/document/product/1265/104001)。
 * @method void setCallbackUrl(string $CallbackUrl) 设置接收审核信息回调地址。如果设置了该字段，在审核过程中发现违规音频片段和画面截帧结果将发送至该接口。更多详情请参阅[回调配置说明](https://cloud.tencent.com/document/product/1265/104001)。
 * @method integer getPriority() 获取审核排队优先级。当您有多个视频审核任务排队时，可以根据这个参数控制排队优先级。用于处理插队等逻辑。默认该参数为0
 * @method void setPriority(integer $Priority) 设置审核排队优先级。当您有多个视频审核任务排队时，可以根据这个参数控制排队优先级。用于处理插队等逻辑。默认该参数为0
 * @method User getUser() 获取该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户
 * @method void setUser(User $User) 设置该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户
 */
class CreateVideoModerationTaskRequest extends AbstractModel
{
    /**
     * @var string 该字段表示策略的具体编号，用于接口调度，在[内容安全控制台](https://console.cloud.tencent.com/cms/clouds/manage)中可配置。若不传入Biztype参数（留空），则代表采用默认的识别策略；传入则会在审核时根据业务场景采取不同的审核策略。
备注：Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
     */
    public $BizType;

    /**
     * @var string 任务类型：可选VIDEO（点播视频），LIVE_VIDEO（直播视频）
     */
    public $Type;

    /**
     * @var array 输入的任务信息，最多可以同时创建10个任务
     */
    public $Tasks;

    /**
     * @var string 验证签名参数，具体可以参考[验签说明](https://cloud.tencent.com/document/product/1265/104001#42dd87d2-580f-46cf-a953-639a787d1eda)。
     */
    public $Seed;

    /**
     * @var string 接收审核信息回调地址。如果设置了该字段，在审核过程中发现违规音频片段和画面截帧结果将发送至该接口。更多详情请参阅[回调配置说明](https://cloud.tencent.com/document/product/1265/104001)。
     */
    public $CallbackUrl;

    /**
     * @var integer 审核排队优先级。当您有多个视频审核任务排队时，可以根据这个参数控制排队优先级。用于处理插队等逻辑。默认该参数为0
     */
    public $Priority;

    /**
     * @var User 该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户
     */
    public $User;

    /**
     * @param string $BizType 该字段表示策略的具体编号，用于接口调度，在[内容安全控制台](https://console.cloud.tencent.com/cms/clouds/manage)中可配置。若不传入Biztype参数（留空），则代表采用默认的识别策略；传入则会在审核时根据业务场景采取不同的审核策略。
备注：Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
     * @param string $Type 任务类型：可选VIDEO（点播视频），LIVE_VIDEO（直播视频）
     * @param array $Tasks 输入的任务信息，最多可以同时创建10个任务
     * @param string $Seed 验证签名参数，具体可以参考[验签说明](https://cloud.tencent.com/document/product/1265/104001#42dd87d2-580f-46cf-a953-639a787d1eda)。
     * @param string $CallbackUrl 接收审核信息回调地址。如果设置了该字段，在审核过程中发现违规音频片段和画面截帧结果将发送至该接口。更多详情请参阅[回调配置说明](https://cloud.tencent.com/document/product/1265/104001)。
     * @param integer $Priority 审核排队优先级。当您有多个视频审核任务排队时，可以根据这个参数控制排队优先级。用于处理插队等逻辑。默认该参数为0
     * @param User $User 该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskInput();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new User();
            $this->User->deserialize($param["User"]);
        }
    }
}

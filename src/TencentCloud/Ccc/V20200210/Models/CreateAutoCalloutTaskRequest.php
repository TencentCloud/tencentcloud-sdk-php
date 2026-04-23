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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoCalloutTask请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method integer getNotBefore() 获取<p>任务起始时间戳，Unix 秒级时间戳</p>
 * @method void setNotBefore(integer $NotBefore) 设置<p>任务起始时间戳，Unix 秒级时间戳</p>
 * @method array getCallees() 获取<p>被叫号码列表</p>
 * @method void setCallees(array $Callees) 设置<p>被叫号码列表</p>
 * @method array getCallers() 获取<p>主叫号码列表</p>
 * @method void setCallers(array $Callers) 设置<p>主叫号码列表</p>
 * @method integer getIvrId() 获取<p>呼叫使用的 IVR Id，不填时需要填写 AIAgentId</p>
 * @method void setIvrId(integer $IvrId) 设置<p>呼叫使用的 IVR Id，不填时需要填写 AIAgentId</p>
 * @method string getName() 获取<p>任务名</p>
 * @method void setName(string $Name) 设置<p>任务名</p>
 * @method string getDescription() 获取<p>任务描述</p>
 * @method void setDescription(string $Description) 设置<p>任务描述</p>
 * @method integer getNotAfter() 获取<p>任务停止时间戳，Unix 秒级时间戳</p>
 * @method void setNotAfter(integer $NotAfter) 设置<p>任务停止时间戳，Unix 秒级时间戳</p>
 * @method integer getTries() 获取<p>最大尝试次数，1-3 次</p>
 * @method void setTries(integer $Tries) 设置<p>最大尝试次数，1-3 次</p>
 * @method array getVariables() 获取<p>自定义变量（仅高级版支持），CalleeAttributes 字段中使用相同变量会覆盖此处</p>
 * @method void setVariables(array $Variables) 设置<p>自定义变量（仅高级版支持），CalleeAttributes 字段中使用相同变量会覆盖此处</p>
 * @method string getUUI() 获取<p>用户自定义数据，CalleeAttributes 字段中使用 UUI 会覆盖此处</p>
 * @method void setUUI(string $UUI) 设置<p>用户自定义数据，CalleeAttributes 字段中使用 UUI 会覆盖此处</p>
 * @method array getCalleeAttributes() 获取<p>被叫属性</p>
 * @method void setCalleeAttributes(array $CalleeAttributes) 设置<p>被叫属性</p>
 * @method string getTimeZone() 获取<p>IANA 时区名称，参考 https://datatracker.ietf.org/doc/html/draft-ietf-netmod-iana-timezones</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>IANA 时区名称，参考 https://datatracker.ietf.org/doc/html/draft-ietf-netmod-iana-timezones</p>
 * @method array getAvailableTime() 获取<p>可用时间段</p>
 * @method void setAvailableTime(array $AvailableTime) 设置<p>可用时间段</p>
 * @method integer getAIAgentId() 获取<p>智能体 ID，不填写时需要填写 IvrId</p>
 * @method void setAIAgentId(integer $AIAgentId) 设置<p>智能体 ID，不填写时需要填写 IvrId</p>
 * @method integer getRetryInterval() 获取<p>任务失败重试时间间隔，重试间隔 600秒～86400 秒</p>
 * @method void setRetryInterval(integer $RetryInterval) 设置<p>任务失败重试时间间隔，重试间隔 600秒～86400 秒</p>
 * @method integer getMaxRingTimeoutSecond() 获取<p>最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数</p>
 * @method void setMaxRingTimeoutSecond(integer $MaxRingTimeoutSecond) 设置<p>最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数</p>
 * @method array getRetryHangupTypes() 获取<p>根据限定的挂断原因(可选挂断状态码:202,203,204,205,206,207,208,210,212,213,215,216,217,218,219,221,222,234)进行重试，只对使用AIAgentID的任务有效，挂断状态码说明</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
 * @method void setRetryHangupTypes(array $RetryHangupTypes) 设置<p>根据限定的挂断原因(可选挂断状态码:202,203,204,205,206,207,208,210,212,213,215,216,217,218,219,221,222,234)进行重试，只对使用AIAgentID的任务有效，挂断状态码说明</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
 * @method array getRetryTags() 获取<p>根据限定的话后标签进行重试，只对使用对话模型的AIAgentID任务有效，标签信息可在智能体配置中查询</p>
 * @method void setRetryTags(array $RetryTags) 设置<p>根据限定的话后标签进行重试，只对使用对话模型的AIAgentID任务有效，标签信息可在智能体配置中查询</p>
 * @method array getAvailableWorkTimeConfig() 获取<p>生效的工作时间配置。建议使用此字段代替AvailableTime 字段，当同时使用时，优先生效AvailableTime。</p>
 * @method void setAvailableWorkTimeConfig(array $AvailableWorkTimeConfig) 设置<p>生效的工作时间配置。建议使用此字段代替AvailableTime 字段，当同时使用时，优先生效AvailableTime。</p>
 * @method array getTriggerStrategy() 获取<p>触发策略</p>
 * @method void setTriggerStrategy(array $TriggerStrategy) 设置<p>触发策略</p>
 */
class CreateAutoCalloutTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>任务起始时间戳，Unix 秒级时间戳</p>
     */
    public $NotBefore;

    /**
     * @var array <p>被叫号码列表</p>
     */
    public $Callees;

    /**
     * @var array <p>主叫号码列表</p>
     */
    public $Callers;

    /**
     * @var integer <p>呼叫使用的 IVR Id，不填时需要填写 AIAgentId</p>
     */
    public $IvrId;

    /**
     * @var string <p>任务名</p>
     */
    public $Name;

    /**
     * @var string <p>任务描述</p>
     */
    public $Description;

    /**
     * @var integer <p>任务停止时间戳，Unix 秒级时间戳</p>
     */
    public $NotAfter;

    /**
     * @var integer <p>最大尝试次数，1-3 次</p>
     */
    public $Tries;

    /**
     * @var array <p>自定义变量（仅高级版支持），CalleeAttributes 字段中使用相同变量会覆盖此处</p>
     */
    public $Variables;

    /**
     * @var string <p>用户自定义数据，CalleeAttributes 字段中使用 UUI 会覆盖此处</p>
     */
    public $UUI;

    /**
     * @var array <p>被叫属性</p>
     */
    public $CalleeAttributes;

    /**
     * @var string <p>IANA 时区名称，参考 https://datatracker.ietf.org/doc/html/draft-ietf-netmod-iana-timezones</p>
     */
    public $TimeZone;

    /**
     * @var array <p>可用时间段</p>
     */
    public $AvailableTime;

    /**
     * @var integer <p>智能体 ID，不填写时需要填写 IvrId</p>
     */
    public $AIAgentId;

    /**
     * @var integer <p>任务失败重试时间间隔，重试间隔 600秒～86400 秒</p>
     */
    public $RetryInterval;

    /**
     * @var integer <p>最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数</p>
     */
    public $MaxRingTimeoutSecond;

    /**
     * @var array <p>根据限定的挂断原因(可选挂断状态码:202,203,204,205,206,207,208,210,212,213,215,216,217,218,219,221,222,234)进行重试，只对使用AIAgentID的任务有效，挂断状态码说明</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
     */
    public $RetryHangupTypes;

    /**
     * @var array <p>根据限定的话后标签进行重试，只对使用对话模型的AIAgentID任务有效，标签信息可在智能体配置中查询</p>
     */
    public $RetryTags;

    /**
     * @var array <p>生效的工作时间配置。建议使用此字段代替AvailableTime 字段，当同时使用时，优先生效AvailableTime。</p>
     */
    public $AvailableWorkTimeConfig;

    /**
     * @var array <p>触发策略</p>
     */
    public $TriggerStrategy;

    /**
     * @param integer $SdkAppId <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     * @param integer $NotBefore <p>任务起始时间戳，Unix 秒级时间戳</p>
     * @param array $Callees <p>被叫号码列表</p>
     * @param array $Callers <p>主叫号码列表</p>
     * @param integer $IvrId <p>呼叫使用的 IVR Id，不填时需要填写 AIAgentId</p>
     * @param string $Name <p>任务名</p>
     * @param string $Description <p>任务描述</p>
     * @param integer $NotAfter <p>任务停止时间戳，Unix 秒级时间戳</p>
     * @param integer $Tries <p>最大尝试次数，1-3 次</p>
     * @param array $Variables <p>自定义变量（仅高级版支持），CalleeAttributes 字段中使用相同变量会覆盖此处</p>
     * @param string $UUI <p>用户自定义数据，CalleeAttributes 字段中使用 UUI 会覆盖此处</p>
     * @param array $CalleeAttributes <p>被叫属性</p>
     * @param string $TimeZone <p>IANA 时区名称，参考 https://datatracker.ietf.org/doc/html/draft-ietf-netmod-iana-timezones</p>
     * @param array $AvailableTime <p>可用时间段</p>
     * @param integer $AIAgentId <p>智能体 ID，不填写时需要填写 IvrId</p>
     * @param integer $RetryInterval <p>任务失败重试时间间隔，重试间隔 600秒～86400 秒</p>
     * @param integer $MaxRingTimeoutSecond <p>最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数</p>
     * @param array $RetryHangupTypes <p>根据限定的挂断原因(可选挂断状态码:202,203,204,205,206,207,208,210,212,213,215,216,217,218,219,221,222,234)进行重试，只对使用AIAgentID的任务有效，挂断状态码说明</p><p><a href="https://cloud.tencent.com/document/product/679/123938">详见</a></p>
     * @param array $RetryTags <p>根据限定的话后标签进行重试，只对使用对话模型的AIAgentID任务有效，标签信息可在智能体配置中查询</p>
     * @param array $AvailableWorkTimeConfig <p>生效的工作时间配置。建议使用此字段代替AvailableTime 字段，当同时使用时，优先生效AvailableTime。</p>
     * @param array $TriggerStrategy <p>触发策略</p>
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("NotBefore",$param) and $param["NotBefore"] !== null) {
            $this->NotBefore = $param["NotBefore"];
        }

        if (array_key_exists("Callees",$param) and $param["Callees"] !== null) {
            $this->Callees = $param["Callees"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("IvrId",$param) and $param["IvrId"] !== null) {
            $this->IvrId = $param["IvrId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NotAfter",$param) and $param["NotAfter"] !== null) {
            $this->NotAfter = $param["NotAfter"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }

        if (array_key_exists("CalleeAttributes",$param) and $param["CalleeAttributes"] !== null) {
            $this->CalleeAttributes = [];
            foreach ($param["CalleeAttributes"] as $key => $value){
                $obj = new CalleeAttribute();
                $obj->deserialize($value);
                array_push($this->CalleeAttributes, $obj);
            }
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("AvailableTime",$param) and $param["AvailableTime"] !== null) {
            $this->AvailableTime = [];
            foreach ($param["AvailableTime"] as $key => $value){
                $obj = new TimeRange();
                $obj->deserialize($value);
                array_push($this->AvailableTime, $obj);
            }
        }

        if (array_key_exists("AIAgentId",$param) and $param["AIAgentId"] !== null) {
            $this->AIAgentId = $param["AIAgentId"];
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("MaxRingTimeoutSecond",$param) and $param["MaxRingTimeoutSecond"] !== null) {
            $this->MaxRingTimeoutSecond = $param["MaxRingTimeoutSecond"];
        }

        if (array_key_exists("RetryHangupTypes",$param) and $param["RetryHangupTypes"] !== null) {
            $this->RetryHangupTypes = $param["RetryHangupTypes"];
        }

        if (array_key_exists("RetryTags",$param) and $param["RetryTags"] !== null) {
            $this->RetryTags = [];
            foreach ($param["RetryTags"] as $key => $value){
                $obj = new RetryTagItem();
                $obj->deserialize($value);
                array_push($this->RetryTags, $obj);
            }
        }

        if (array_key_exists("AvailableWorkTimeConfig",$param) and $param["AvailableWorkTimeConfig"] !== null) {
            $this->AvailableWorkTimeConfig = [];
            foreach ($param["AvailableWorkTimeConfig"] as $key => $value){
                $obj = new AvailableTimeConfig();
                $obj->deserialize($value);
                array_push($this->AvailableWorkTimeConfig, $obj);
            }
        }

        if (array_key_exists("TriggerStrategy",$param) and $param["TriggerStrategy"] !== null) {
            $this->TriggerStrategy = [];
            foreach ($param["TriggerStrategy"] as $key => $value){
                $obj = new TriggerStrategyItem();
                $obj->deserialize($value);
                array_push($this->TriggerStrategy, $obj);
            }
        }
    }
}

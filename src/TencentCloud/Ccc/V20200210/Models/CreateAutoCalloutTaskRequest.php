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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoCalloutTask请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method integer getNotBefore() 获取任务起始时间戳，Unix 秒级时间戳
 * @method void setNotBefore(integer $NotBefore) 设置任务起始时间戳，Unix 秒级时间戳
 * @method array getCallees() 获取被叫号码列表
 * @method void setCallees(array $Callees) 设置被叫号码列表
 * @method array getCallers() 获取主叫号码列表
 * @method void setCallers(array $Callers) 设置主叫号码列表
 * @method integer getIvrId() 获取呼叫使用的Ivr
 * @method void setIvrId(integer $IvrId) 设置呼叫使用的Ivr
 * @method string getName() 获取任务名
 * @method void setName(string $Name) 设置任务名
 * @method string getDescription() 获取任务描述
 * @method void setDescription(string $Description) 设置任务描述
 * @method integer getNotAfter() 获取任务停止时间戳，Unix 秒级时间戳
 * @method void setNotAfter(integer $NotAfter) 设置任务停止时间戳，Unix 秒级时间戳
 * @method integer getTries() 获取最大尝试次数
 * @method void setTries(integer $Tries) 设置最大尝试次数
 * @method array getVariables() 获取自定义变量（仅高级版支持）
 * @method void setVariables(array $Variables) 设置自定义变量（仅高级版支持）
 */
class CreateAutoCalloutTaskRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var integer 任务起始时间戳，Unix 秒级时间戳
     */
    public $NotBefore;

    /**
     * @var array 被叫号码列表
     */
    public $Callees;

    /**
     * @var array 主叫号码列表
     */
    public $Callers;

    /**
     * @var integer 呼叫使用的Ivr
     */
    public $IvrId;

    /**
     * @var string 任务名
     */
    public $Name;

    /**
     * @var string 任务描述
     */
    public $Description;

    /**
     * @var integer 任务停止时间戳，Unix 秒级时间戳
     */
    public $NotAfter;

    /**
     * @var integer 最大尝试次数
     */
    public $Tries;

    /**
     * @var array 自定义变量（仅高级版支持）
     */
    public $Variables;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param integer $NotBefore 任务起始时间戳，Unix 秒级时间戳
     * @param array $Callees 被叫号码列表
     * @param array $Callers 主叫号码列表
     * @param integer $IvrId 呼叫使用的Ivr
     * @param string $Name 任务名
     * @param string $Description 任务描述
     * @param integer $NotAfter 任务停止时间戳，Unix 秒级时间戳
     * @param integer $Tries 最大尝试次数
     * @param array $Variables 自定义变量（仅高级版支持）
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
    }
}

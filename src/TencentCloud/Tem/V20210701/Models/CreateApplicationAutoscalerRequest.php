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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplicationAutoscaler请求参数结构体
 *
 * @method string getApplicationId() 获取服务id
 * @method void setApplicationId(string $ApplicationId) 设置服务id
 * @method string getEnvironmentId() 获取环境ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID
 * @method Autoscaler getAutoscaler() 获取弹性伸缩策略
 * @method void setAutoscaler(Autoscaler $Autoscaler) 设置弹性伸缩策略
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 */
class CreateApplicationAutoscalerRequest extends AbstractModel
{
    /**
     * @var string 服务id
     */
    public $ApplicationId;

    /**
     * @var string 环境ID
     */
    public $EnvironmentId;

    /**
     * @var Autoscaler 弹性伸缩策略
     */
    public $Autoscaler;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @param string $ApplicationId 服务id
     * @param string $EnvironmentId 环境ID
     * @param Autoscaler $Autoscaler 弹性伸缩策略
     * @param integer $SourceChannel 来源渠道
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Autoscaler",$param) and $param["Autoscaler"] !== null) {
            $this->Autoscaler = new Autoscaler();
            $this->Autoscaler->deserialize($param["Autoscaler"]);
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}

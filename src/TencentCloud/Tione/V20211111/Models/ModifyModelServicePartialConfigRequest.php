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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModelServicePartialConfig请求参数结构体
 *
 * @method string getServiceId() 获取在线推理服务Id，需已存在
 * @method void setServiceId(string $ServiceId) 设置在线推理服务Id，需已存在
 * @method ScheduledAction getScheduledAction() 获取更新后服务不重启，定时停止的配置
 * @method void setScheduledAction(ScheduledAction $ScheduledAction) 设置更新后服务不重启，定时停止的配置
 * @method ServiceLimit getServiceLimit() 获取更新后服务不重启，服务对应限流限频配置
 * @method void setServiceLimit(ServiceLimit $ServiceLimit) 设置更新后服务不重启，服务对应限流限频配置
 */
class ModifyModelServicePartialConfigRequest extends AbstractModel
{
    /**
     * @var string 在线推理服务Id，需已存在
     */
    public $ServiceId;

    /**
     * @var ScheduledAction 更新后服务不重启，定时停止的配置
     */
    public $ScheduledAction;

    /**
     * @var ServiceLimit 更新后服务不重启，服务对应限流限频配置
     */
    public $ServiceLimit;

    /**
     * @param string $ServiceId 在线推理服务Id，需已存在
     * @param ScheduledAction $ScheduledAction 更新后服务不重启，定时停止的配置
     * @param ServiceLimit $ServiceLimit 更新后服务不重启，服务对应限流限频配置
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ScheduledAction",$param) and $param["ScheduledAction"] !== null) {
            $this->ScheduledAction = new ScheduledAction();
            $this->ScheduledAction->deserialize($param["ScheduledAction"]);
        }

        if (array_key_exists("ServiceLimit",$param) and $param["ServiceLimit"] !== null) {
            $this->ServiceLimit = new ServiceLimit();
            $this->ServiceLimit->deserialize($param["ServiceLimit"]);
        }
    }
}

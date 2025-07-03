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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DestroyPostCLSFlow请求参数结构体
 *
 * @method integer getFlowId() 获取投递流的流ID
 * @method void setFlowId(integer $FlowId) 设置投递流的流ID
 * @method integer getLogType() 获取1-访问日志，2-攻击日志，默认为访问日志。
 * @method void setLogType(integer $LogType) 设置1-访问日志，2-攻击日志，默认为访问日志。
 */
class DestroyPostCLSFlowRequest extends AbstractModel
{
    /**
     * @var integer 投递流的流ID
     */
    public $FlowId;

    /**
     * @var integer 1-访问日志，2-攻击日志，默认为访问日志。
     */
    public $LogType;

    /**
     * @param integer $FlowId 投递流的流ID
     * @param integer $LogType 1-访问日志，2-攻击日志，默认为访问日志。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}

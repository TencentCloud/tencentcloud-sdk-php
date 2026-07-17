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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OperateInferenceService请求参数结构体
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getServiceId() 获取推理服务 ID。
 * @method void setServiceId(string $ServiceId) 设置推理服务 ID。
 * @method string getOperation() 获取操作类型，包含以下几种：<li>Stop：停止；</li><li>Resume：启动；</li><li>Delete：删除。</li>
 * @method void setOperation(string $Operation) 设置操作类型，包含以下几种：<li>Stop：停止；</li><li>Resume：启动；</li><li>Delete：删除。</li>
 */
class OperateInferenceServiceRequest extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 推理服务 ID。
     */
    public $ServiceId;

    /**
     * @var string 操作类型，包含以下几种：<li>Stop：停止；</li><li>Resume：启动；</li><li>Delete：删除。</li>
     */
    public $Operation;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $ServiceId 推理服务 ID。
     * @param string $Operation 操作类型，包含以下几种：<li>Stop：停止；</li><li>Resume：启动；</li><li>Delete：删除。</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}

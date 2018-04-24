<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTemplateId() 获取监控模板ID
 * @method void setTemplateId(integer $templateId) 设置监控模板ID
 * @method array getMetrics() 获取监控指标项
 * @method void setMetrics(array $metrics) 设置监控指标项
 */

/**
 *ModifyMonitorTemplate请求参数结构体
 */
class ModifyMonitorTemplateRequest extends AbstractModel
{
    /**
     * @var integer 监控模板ID
     */
    public $templateId;

    /**
     * @var array 监控指标项
     */
    public $metrics;
    /**
     * @param integer $templateId 监控模板ID
     * @param array $metrics 监控指标项
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->templateId = $param["TemplateId"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->metrics = $param["Metrics"];
        }
    }
}

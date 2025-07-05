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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDefaultParams请求参数结构体
 *
 * @method string getEngineVersion() 获取引擎版本，目前支持 ["5.1", "5.5", "5.6", "5.7", "8.0"]
 * @method void setEngineVersion(string $EngineVersion) 设置引擎版本，目前支持 ["5.1", "5.5", "5.6", "5.7", "8.0"]
 * @method string getTemplateType() 获取默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
 * @method void setTemplateType(string $TemplateType) 设置默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
 * @method string getEngineType() 获取参数模板引擎，默认值：InnoDB
 * @method void setEngineType(string $EngineType) 设置参数模板引擎，默认值：InnoDB
 */
class DescribeDefaultParamsRequest extends AbstractModel
{
    /**
     * @var string 引擎版本，目前支持 ["5.1", "5.5", "5.6", "5.7", "8.0"]
     */
    public $EngineVersion;

    /**
     * @var string 默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
     */
    public $TemplateType;

    /**
     * @var string 参数模板引擎，默认值：InnoDB
     */
    public $EngineType;

    /**
     * @param string $EngineVersion 引擎版本，目前支持 ["5.1", "5.5", "5.6", "5.7", "8.0"]
     * @param string $TemplateType 默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
     * @param string $EngineType 参数模板引擎，默认值：InnoDB
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
        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}

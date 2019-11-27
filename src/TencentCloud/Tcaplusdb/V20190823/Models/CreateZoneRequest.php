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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getApplicationId() 获取大区所属应用实例ID
 * @method void setApplicationId(string $ApplicationId) 设置大区所属应用实例ID
 * @method string getZoneName() 获取大区名称，可以采用中文、英文或数字字符，长度不能超过30
 * @method void setZoneName(string $ZoneName) 设置大区名称，可以采用中文、英文或数字字符，长度不能超过30
 * @method string getLogicZoneId() 获取大区ID，可以由用户指定，但在同一个App内不能重复，如果不指定则采用自增的模式
 * @method void setLogicZoneId(string $LogicZoneId) 设置大区ID，可以由用户指定，但在同一个App内不能重复，如果不指定则采用自增的模式
 */

/**
 *CreateZone请求参数结构体
 */
class CreateZoneRequest extends AbstractModel
{
    /**
     * @var string 大区所属应用实例ID
     */
    public $ApplicationId;

    /**
     * @var string 大区名称，可以采用中文、英文或数字字符，长度不能超过30
     */
    public $ZoneName;

    /**
     * @var string 大区ID，可以由用户指定，但在同一个App内不能重复，如果不指定则采用自增的模式
     */
    public $LogicZoneId;
    /**
     * @param string $ApplicationId 大区所属应用实例ID
     * @param string $ZoneName 大区名称，可以采用中文、英文或数字字符，长度不能超过30
     * @param string $LogicZoneId 大区ID，可以由用户指定，但在同一个App内不能重复，如果不指定则采用自增的模式
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("LogicZoneId",$param) and $param["LogicZoneId"] !== null) {
            $this->LogicZoneId = $param["LogicZoneId"];
        }
    }
}

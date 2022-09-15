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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略类型信息
 *
 * @method string getId() 获取命名空间标示
 * @method void setId(string $Id) 设置命名空间标示
 * @method string getName() 获取命名空间名称
 * @method void setName(string $Name) 设置命名空间名称
 * @method string getMonitorType() 获取监控类型
 * @method void setMonitorType(string $MonitorType) 设置监控类型
 * @method array getDimensions() 获取维度信息
 * @method void setDimensions(array $Dimensions) 设置维度信息
 */
class CommonNamespaceNew extends AbstractModel
{
    /**
     * @var string 命名空间标示
     */
    public $Id;

    /**
     * @var string 命名空间名称
     */
    public $Name;

    /**
     * @var string 监控类型
     */
    public $MonitorType;

    /**
     * @var array 维度信息
     */
    public $Dimensions;

    /**
     * @param string $Id 命名空间标示
     * @param string $Name 命名空间名称
     * @param string $MonitorType 监控类型
     * @param array $Dimensions 维度信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DimensionNew();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }
    }
}

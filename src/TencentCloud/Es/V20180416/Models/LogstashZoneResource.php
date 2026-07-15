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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logstash可用区资源描述
 *
 * @method string getZoneName() 获取可用区名称
 * @method void setZoneName(string $ZoneName) 设置可用区名称
 * @method boolean getAvailable() 获取是否可售
 * @method void setAvailable(boolean $Available) 设置是否可售
 * @method array getNodeTypeList() 获取节点规格资源列表
 * @method void setNodeTypeList(array $NodeTypeList) 设置节点规格资源列表
 * @method array getAvailNodeFamilies() 获取可用节点机型族列表
 * @method void setAvailNodeFamilies(array $AvailNodeFamilies) 设置可用节点机型族列表
 */
class LogstashZoneResource extends AbstractModel
{
    /**
     * @var string 可用区名称
     */
    public $ZoneName;

    /**
     * @var boolean 是否可售
     */
    public $Available;

    /**
     * @var array 节点规格资源列表
     */
    public $NodeTypeList;

    /**
     * @var array 可用节点机型族列表
     */
    public $AvailNodeFamilies;

    /**
     * @param string $ZoneName 可用区名称
     * @param boolean $Available 是否可售
     * @param array $NodeTypeList 节点规格资源列表
     * @param array $AvailNodeFamilies 可用节点机型族列表
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("NodeTypeList",$param) and $param["NodeTypeList"] !== null) {
            $this->NodeTypeList = [];
            foreach ($param["NodeTypeList"] as $key => $value){
                $obj = new LogstashNodeTypeResource();
                $obj->deserialize($value);
                array_push($this->NodeTypeList, $obj);
            }
        }

        if (array_key_exists("AvailNodeFamilies",$param) and $param["AvailNodeFamilies"] !== null) {
            $this->AvailNodeFamilies = $param["AvailNodeFamilies"];
        }
    }
}

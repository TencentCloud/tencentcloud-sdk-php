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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ddos特征过滤
 *
 * @method string getSwitch() 获取特征过滤清空标识，off清空处理
 * @method void setSwitch(string $Switch) 设置特征过滤清空标识，off清空处理
 * @method array getPacketFilter() 获取特征过滤数组
 * @method void setPacketFilter(array $PacketFilter) 设置特征过滤数组
 */
class DdosPacketFilter extends AbstractModel
{
    /**
     * @var string 特征过滤清空标识，off清空处理
     */
    public $Switch;

    /**
     * @var array 特征过滤数组
     */
    public $PacketFilter;

    /**
     * @param string $Switch 特征过滤清空标识，off清空处理
     * @param array $PacketFilter 特征过滤数组
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("PacketFilter",$param) and $param["PacketFilter"] !== null) {
            $this->PacketFilter = [];
            foreach ($param["PacketFilter"] as $key => $value){
                $obj = new DDoSFeaturesFilter();
                $obj->deserialize($value);
                array_push($this->PacketFilter, $obj);
            }
        }
    }
}

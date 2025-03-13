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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询域名可绑定集群数据
 *
 * @method string getLabel() 获取服务节点描述
 * @method void setLabel(string $Label) 设置服务节点描述
 * @method string getValue() 获取服务节点 ID（对应为其他接口中所需的 ClusterId）
 * @method void setValue(string $Value) 设置服务节点 ID（对应为其他接口中所需的 ClusterId）
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 */
class DescribeDomainRegionData extends AbstractModel
{
    /**
     * @var string 服务节点描述
     */
    public $Label;

    /**
     * @var string 服务节点 ID（对应为其他接口中所需的 ClusterId）
     */
    public $Value;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @param string $Label 服务节点描述
     * @param string $Value 服务节点 ID（对应为其他接口中所需的 ClusterId）
     * @param string $Region 地域信息
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}

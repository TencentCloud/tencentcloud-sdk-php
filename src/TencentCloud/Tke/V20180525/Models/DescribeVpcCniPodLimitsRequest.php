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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcCniPodLimits请求参数结构体
 *
 * @method string getZone() 获取查询的机型所在可用区，如：ap-guangzhou-3，默认为空，即不按可用区过滤信息
 * @method void setZone(string $Zone) 设置查询的机型所在可用区，如：ap-guangzhou-3，默认为空，即不按可用区过滤信息
 * @method string getInstanceFamily() 获取查询的实例机型系列信息，如：S5，默认为空，即不按机型系列过滤信息
 * @method void setInstanceFamily(string $InstanceFamily) 设置查询的实例机型系列信息，如：S5，默认为空，即不按机型系列过滤信息
 * @method string getInstanceType() 获取查询的实例机型信息，如：S5.LARGE8，默认为空，即不按机型过滤信息
 * @method void setInstanceType(string $InstanceType) 设置查询的实例机型信息，如：S5.LARGE8，默认为空，即不按机型过滤信息
 */
class DescribeVpcCniPodLimitsRequest extends AbstractModel
{
    /**
     * @var string 查询的机型所在可用区，如：ap-guangzhou-3，默认为空，即不按可用区过滤信息
     */
    public $Zone;

    /**
     * @var string 查询的实例机型系列信息，如：S5，默认为空，即不按机型系列过滤信息
     */
    public $InstanceFamily;

    /**
     * @var string 查询的实例机型信息，如：S5.LARGE8，默认为空，即不按机型过滤信息
     */
    public $InstanceType;

    /**
     * @param string $Zone 查询的机型所在可用区，如：ap-guangzhou-3，默认为空，即不按可用区过滤信息
     * @param string $InstanceFamily 查询的实例机型系列信息，如：S5，默认为空，即不按机型系列过滤信息
     * @param string $InstanceType 查询的实例机型信息，如：S5.LARGE8，默认为空，即不按机型过滤信息
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}

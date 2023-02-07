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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleUpInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例唯一ID
 * @method void setInstanceId(string $InstanceId) 设置实例唯一ID
 * @method string getType() 获取节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
 * @method void setType(string $Type) 设置节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
 * @method string getSpecName() 获取clickhouse节点规格。
 * @method void setSpecName(string $SpecName) 设置clickhouse节点规格。
 * @method boolean getScaleUpEnableRolling() 获取是否滚动重启，false为不滚动重启，true为滚动重启
 * @method void setScaleUpEnableRolling(boolean $ScaleUpEnableRolling) 设置是否滚动重启，false为不滚动重启，true为滚动重启
 */
class ScaleUpInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例唯一ID
     */
    public $InstanceId;

    /**
     * @var string 节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
     */
    public $Type;

    /**
     * @var string clickhouse节点规格。
     */
    public $SpecName;

    /**
     * @var boolean 是否滚动重启，false为不滚动重启，true为滚动重启
     */
    public $ScaleUpEnableRolling;

    /**
     * @param string $InstanceId 实例唯一ID
     * @param string $Type 节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
     * @param string $SpecName clickhouse节点规格。
     * @param boolean $ScaleUpEnableRolling 是否滚动重启，false为不滚动重启，true为滚动重启
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("ScaleUpEnableRolling",$param) and $param["ScaleUpEnableRolling"] !== null) {
            $this->ScaleUpEnableRolling = $param["ScaleUpEnableRolling"];
        }
    }
}

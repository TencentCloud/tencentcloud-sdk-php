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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDefendStatus请求参数结构体
 *
 * @method boolean getSwitchOn() 获取开关是否开启
 * @method void setSwitchOn(boolean $SwitchOn) 设置开关是否开启
 * @method string getInstanceType() 获取实例类型 <li> Cluster: 集群</li> <li> Node: 节点</li>
 * @method void setInstanceType(string $InstanceType) 设置实例类型 <li> Cluster: 集群</li> <li> Node: 节点</li>
 * @method boolean getIsAll() 获取是否是全部实例
 * @method void setIsAll(boolean $IsAll) 设置是否是全部实例
 * @method array getInstanceIDs() 获取实例id列表
 * @method void setInstanceIDs(array $InstanceIDs) 设置实例id列表
 */
class ModifyDefendStatusRequest extends AbstractModel
{
    /**
     * @var boolean 开关是否开启
     */
    public $SwitchOn;

    /**
     * @var string 实例类型 <li> Cluster: 集群</li> <li> Node: 节点</li>
     */
    public $InstanceType;

    /**
     * @var boolean 是否是全部实例
     */
    public $IsAll;

    /**
     * @var array 实例id列表
     */
    public $InstanceIDs;

    /**
     * @param boolean $SwitchOn 开关是否开启
     * @param string $InstanceType 实例类型 <li> Cluster: 集群</li> <li> Node: 节点</li>
     * @param boolean $IsAll 是否是全部实例
     * @param array $InstanceIDs 实例id列表
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
        if (array_key_exists("SwitchOn",$param) and $param["SwitchOn"] !== null) {
            $this->SwitchOn = $param["SwitchOn"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }
    }
}

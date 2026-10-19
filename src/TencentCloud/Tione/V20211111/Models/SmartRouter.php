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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能路由完整对象（挂在 ServiceGroup 的 44 号）
 *
 * @method boolean getEnabled() 获取智能路由开关状态（true=已开启，false=未开启/已停止）
 * @method void setEnabled(boolean $Enabled) 设置智能路由开关状态（true=已开启，false=未开启/已停止）
 * @method string getServiceGroupId() 获取绑定的服务组 ID（一对一）
 * @method void setServiceGroupId(string $ServiceGroupId) 设置绑定的服务组 ID（一对一）
 * @method array getComponentList() 获取组件列表（gateway + scheduler；repeated 为未来扩展预留）
 * @method void setComponentList(array $ComponentList) 设置组件列表（gateway + scheduler；repeated 为未来扩展预留）
 * @method string getCreator() 获取创建人
 * @method void setCreator(string $Creator) 设置创建人
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class SmartRouter extends AbstractModel
{
    /**
     * @var boolean 智能路由开关状态（true=已开启，false=未开启/已停止）
     */
    public $Enabled;

    /**
     * @var string 绑定的服务组 ID（一对一）
     */
    public $ServiceGroupId;

    /**
     * @var array 组件列表（gateway + scheduler；repeated 为未来扩展预留）
     */
    public $ComponentList;

    /**
     * @var string 创建人
     */
    public $Creator;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param boolean $Enabled 智能路由开关状态（true=已开启，false=未开启/已停止）
     * @param string $ServiceGroupId 绑定的服务组 ID（一对一）
     * @param array $ComponentList 组件列表（gateway + scheduler；repeated 为未来扩展预留）
     * @param string $Creator 创建人
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("ComponentList",$param) and $param["ComponentList"] !== null) {
            $this->ComponentList = [];
            foreach ($param["ComponentList"] as $key => $value){
                $obj = new SmartRouterComponent();
                $obj->deserialize($value);
                array_push($this->ComponentList, $obj);
            }
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

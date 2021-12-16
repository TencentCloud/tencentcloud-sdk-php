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
 * 实例的授权信息
 *
 * @method integer getHasChargeOperation() 获取是否有计费操作权限(1=有，2=无)
 * @method void setHasChargeOperation(integer $HasChargeOperation) 设置是否有计费操作权限(1=有，2=无)
 * @method integer getHasVpcDisplay() 获取是否显示VPC信息的权限(1=有，2=无)
 * @method void setHasVpcDisplay(integer $HasVpcDisplay) 设置是否显示VPC信息的权限(1=有，2=无)
 * @method integer getHasGrafanaStatusChange() 获取是否可修改Grafana的状态(1=有，2=无)
 * @method void setHasGrafanaStatusChange(integer $HasGrafanaStatusChange) 设置是否可修改Grafana的状态(1=有，2=无)
 * @method integer getHasAgentManage() 获取是否有管理agent的权限(1=有，2=无)
 * @method void setHasAgentManage(integer $HasAgentManage) 设置是否有管理agent的权限(1=有，2=无)
 * @method integer getHasTkeManage() 获取是否有管理TKE集成的权限(1=有，2=无)
 * @method void setHasTkeManage(integer $HasTkeManage) 设置是否有管理TKE集成的权限(1=有，2=无)
 * @method integer getHasApiOperation() 获取是否显示API等信息(1=有, 2=无)
 * @method void setHasApiOperation(integer $HasApiOperation) 设置是否显示API等信息(1=有, 2=无)
 */
class PrometheusInstanceGrantInfo extends AbstractModel
{
    /**
     * @var integer 是否有计费操作权限(1=有，2=无)
     */
    public $HasChargeOperation;

    /**
     * @var integer 是否显示VPC信息的权限(1=有，2=无)
     */
    public $HasVpcDisplay;

    /**
     * @var integer 是否可修改Grafana的状态(1=有，2=无)
     */
    public $HasGrafanaStatusChange;

    /**
     * @var integer 是否有管理agent的权限(1=有，2=无)
     */
    public $HasAgentManage;

    /**
     * @var integer 是否有管理TKE集成的权限(1=有，2=无)
     */
    public $HasTkeManage;

    /**
     * @var integer 是否显示API等信息(1=有, 2=无)
     */
    public $HasApiOperation;

    /**
     * @param integer $HasChargeOperation 是否有计费操作权限(1=有，2=无)
     * @param integer $HasVpcDisplay 是否显示VPC信息的权限(1=有，2=无)
     * @param integer $HasGrafanaStatusChange 是否可修改Grafana的状态(1=有，2=无)
     * @param integer $HasAgentManage 是否有管理agent的权限(1=有，2=无)
     * @param integer $HasTkeManage 是否有管理TKE集成的权限(1=有，2=无)
     * @param integer $HasApiOperation 是否显示API等信息(1=有, 2=无)
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
        if (array_key_exists("HasChargeOperation",$param) and $param["HasChargeOperation"] !== null) {
            $this->HasChargeOperation = $param["HasChargeOperation"];
        }

        if (array_key_exists("HasVpcDisplay",$param) and $param["HasVpcDisplay"] !== null) {
            $this->HasVpcDisplay = $param["HasVpcDisplay"];
        }

        if (array_key_exists("HasGrafanaStatusChange",$param) and $param["HasGrafanaStatusChange"] !== null) {
            $this->HasGrafanaStatusChange = $param["HasGrafanaStatusChange"];
        }

        if (array_key_exists("HasAgentManage",$param) and $param["HasAgentManage"] !== null) {
            $this->HasAgentManage = $param["HasAgentManage"];
        }

        if (array_key_exists("HasTkeManage",$param) and $param["HasTkeManage"] !== null) {
            $this->HasTkeManage = $param["HasTkeManage"];
        }

        if (array_key_exists("HasApiOperation",$param) and $param["HasApiOperation"] !== null) {
            $this->HasApiOperation = $param["HasApiOperation"];
        }
    }
}

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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关部署组、分组、API列表数据
 *
 * @method string getGatewayDeployGroupId() 获取网关部署组ID
 * @method void setGatewayDeployGroupId(string $GatewayDeployGroupId) 设置网关部署组ID
 * @method string getGatewayDeployGroupName() 获取网关部署组名称
 * @method void setGatewayDeployGroupName(string $GatewayDeployGroupName) 设置网关部署组名称
 * @method integer getGroupNum() 获取API 分组个数
 * @method void setGroupNum(integer $GroupNum) 设置API 分组个数
 * @method array getGroups() 获取API 分组列表
 * @method void setGroups(array $Groups) 设置API 分组列表
 */
class GatewayVo extends AbstractModel
{
    /**
     * @var string 网关部署组ID
     */
    public $GatewayDeployGroupId;

    /**
     * @var string 网关部署组名称
     */
    public $GatewayDeployGroupName;

    /**
     * @var integer API 分组个数
     */
    public $GroupNum;

    /**
     * @var array API 分组列表
     */
    public $Groups;

    /**
     * @param string $GatewayDeployGroupId 网关部署组ID
     * @param string $GatewayDeployGroupName 网关部署组名称
     * @param integer $GroupNum API 分组个数
     * @param array $Groups API 分组列表
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
        if (array_key_exists("GatewayDeployGroupId",$param) and $param["GatewayDeployGroupId"] !== null) {
            $this->GatewayDeployGroupId = $param["GatewayDeployGroupId"];
        }

        if (array_key_exists("GatewayDeployGroupName",$param) and $param["GatewayDeployGroupName"] !== null) {
            $this->GatewayDeployGroupName = $param["GatewayDeployGroupName"];
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new GatewayApiGroupVo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网路由接收策略
 *
 * @method array getRouteConditions() 获取路由条件。
 * @method void setRouteConditions(array $RouteConditions) 设置路由条件。
 * @method string getAction() 获取路由行为，`accept` 允许，`drop` 拒绝。
 * @method void setAction(string $Action) 设置路由行为，`accept` 允许，`drop` 拒绝。
 * @method string getDescription() 获取策略描述。
 * @method void setDescription(string $Description) 设置策略描述。
 */
class CcnRouteTableInputPolicy extends AbstractModel
{
    /**
     * @var array 路由条件。
     */
    public $RouteConditions;

    /**
     * @var string 路由行为，`accept` 允许，`drop` 拒绝。
     */
    public $Action;

    /**
     * @var string 策略描述。
     */
    public $Description;

    /**
     * @param array $RouteConditions 路由条件。
     * @param string $Action 路由行为，`accept` 允许，`drop` 拒绝。
     * @param string $Description 策略描述。
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
        if (array_key_exists("RouteConditions",$param) and $param["RouteConditions"] !== null) {
            $this->RouteConditions = [];
            foreach ($param["RouteConditions"] as $key => $value){
                $obj = new CcnRouteBroadcastPolicyRouteCondition();
                $obj->deserialize($value);
                array_push($this->RouteConditions, $obj);
            }
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

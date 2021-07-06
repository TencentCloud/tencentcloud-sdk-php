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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于ListPoliciesGrantingServiceAccess接口的List节点
 *
 * @method ListGrantServiceAccessService getService() 获取服务
 * @method void setService(ListGrantServiceAccessService $Service) 设置服务
 * @method array getAction() 获取接口信息
 * @method void setAction(array $Action) 设置接口信息
 * @method array getPolicy() 获取授权的策略
 * @method void setPolicy(array $Policy) 设置授权的策略
 */
class ListGrantServiceAccessNode extends AbstractModel
{
    /**
     * @var ListGrantServiceAccessService 服务
     */
    public $Service;

    /**
     * @var array 接口信息
     */
    public $Action;

    /**
     * @var array 授权的策略
     */
    public $Policy;

    /**
     * @param ListGrantServiceAccessService $Service 服务
     * @param array $Action 接口信息
     * @param array $Policy 授权的策略
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = new ListGrantServiceAccessService();
            $this->Service->deserialize($param["Service"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = [];
            foreach ($param["Action"] as $key => $value){
                $obj = new ListGrantServiceAccessActionNode();
                $obj->deserialize($value);
                array_push($this->Action, $obj);
            }
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new ListGrantServiceAccessPolicy();
                $obj->deserialize($value);
                array_push($this->Policy, $obj);
            }
        }
    }
}

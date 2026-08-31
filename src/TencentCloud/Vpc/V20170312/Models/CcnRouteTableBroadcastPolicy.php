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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网路由传播策略
 *
 * @method array getRouteConditions() 获取<p>路由条件</p>
 * @method void setRouteConditions(array $RouteConditions) 设置<p>路由条件</p>
 * @method array getBroadcastConditions() 获取<p>传播条件</p>
 * @method void setBroadcastConditions(array $BroadcastConditions) 设置<p>传播条件</p>
 * @method string getAction() 获取<p>路由行为，<code>accept</code> 允许，<code>drop</code> 拒绝</p>
 * @method void setAction(string $Action) 设置<p>路由行为，<code>accept</code> 允许，<code>drop</code> 拒绝</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 * @method string getOperateAsPath() 获取<p>as-path操作</p>
 * @method void setOperateAsPath(string $OperateAsPath) 设置<p>as-path操作</p>
 * @method string getAsPathOperateMode() 获取<p>as-path操作模式</p>
 * @method void setAsPathOperateMode(string $AsPathOperateMode) 设置<p>as-path操作模式</p>
 * @method array getOperateCommunitySet() 获取<p>community操作</p>
 * @method void setOperateCommunitySet(array $OperateCommunitySet) 设置<p>community操作</p>
 * @method string getCommunityOperateMode() 获取<p>community操作模式</p>
 * @method void setCommunityOperateMode(string $CommunityOperateMode) 设置<p>community操作模式</p>
 */
class CcnRouteTableBroadcastPolicy extends AbstractModel
{
    /**
     * @var array <p>路由条件</p>
     */
    public $RouteConditions;

    /**
     * @var array <p>传播条件</p>
     */
    public $BroadcastConditions;

    /**
     * @var string <p>路由行为，<code>accept</code> 允许，<code>drop</code> 拒绝</p>
     */
    public $Action;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @var string <p>as-path操作</p>
     */
    public $OperateAsPath;

    /**
     * @var string <p>as-path操作模式</p>
     */
    public $AsPathOperateMode;

    /**
     * @var array <p>community操作</p>
     */
    public $OperateCommunitySet;

    /**
     * @var string <p>community操作模式</p>
     */
    public $CommunityOperateMode;

    /**
     * @param array $RouteConditions <p>路由条件</p>
     * @param array $BroadcastConditions <p>传播条件</p>
     * @param string $Action <p>路由行为，<code>accept</code> 允许，<code>drop</code> 拒绝</p>
     * @param string $Description <p>策略描述</p>
     * @param string $OperateAsPath <p>as-path操作</p>
     * @param string $AsPathOperateMode <p>as-path操作模式</p>
     * @param array $OperateCommunitySet <p>community操作</p>
     * @param string $CommunityOperateMode <p>community操作模式</p>
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

        if (array_key_exists("BroadcastConditions",$param) and $param["BroadcastConditions"] !== null) {
            $this->BroadcastConditions = [];
            foreach ($param["BroadcastConditions"] as $key => $value){
                $obj = new CcnRouteBroadcastPolicyRouteCondition();
                $obj->deserialize($value);
                array_push($this->BroadcastConditions, $obj);
            }
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OperateAsPath",$param) and $param["OperateAsPath"] !== null) {
            $this->OperateAsPath = $param["OperateAsPath"];
        }

        if (array_key_exists("AsPathOperateMode",$param) and $param["AsPathOperateMode"] !== null) {
            $this->AsPathOperateMode = $param["AsPathOperateMode"];
        }

        if (array_key_exists("OperateCommunitySet",$param) and $param["OperateCommunitySet"] !== null) {
            $this->OperateCommunitySet = $param["OperateCommunitySet"];
        }

        if (array_key_exists("CommunityOperateMode",$param) and $param["CommunityOperateMode"] !== null) {
            $this->CommunityOperateMode = $param["CommunityOperateMode"];
        }
    }
}

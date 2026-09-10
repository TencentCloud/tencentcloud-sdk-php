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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP路由对象
 *
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getExpression() 获取<p>路由表达式</p>
 * @method void setExpression(string $Expression) 设置<p>路由表达式</p>
 * @method array getHeaderMatch() 获取<p>Header匹配规则</p>
 * @method void setHeaderMatch(array $HeaderMatch) 设置<p>Header匹配规则</p>
 * @method boolean getIsDefault() 获取<p>是否为默认路由</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method void setIsDefault(boolean $IsDefault) 设置<p>是否为默认路由</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method array getMethods() 获取<p>http path</p>
 * @method void setMethods(array $Methods) 设置<p>http path</p>
 * @method string getName() 获取<p>路由名称</p>
 * @method void setName(string $Name) 设置<p>路由名称</p>
 * @method string getPath() 获取<p>路由路径</p>
 * @method void setPath(string $Path) 设置<p>路由路径</p>
 * @method string getPathMatchType() 获取<p>路径匹配方式</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
 * @method void setPathMatchType(string $PathMatchType) 设置<p>路径匹配方式</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
 * @method integer getPriority() 获取<p>优先级</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级</p>
 * @method string getRouteId() 获取<p>路由ID</p>
 * @method void setRouteId(string $RouteId) 设置<p>路由ID</p>
 * @method string getStatus() 获取<p>启用/禁用状态</p><p>枚举值：</p><ul><li>Enabled： 启用</li><li>Disabled： 禁用</li></ul>
 * @method void setStatus(string $Status) 设置<p>启用/禁用状态</p><p>枚举值：</p><ul><li>Enabled： 启用</li><li>Disabled： 禁用</li></ul>
 * @method boolean getPreserveHost() 获取<p>是否开启保留原Host功能</p>
 * @method void setPreserveHost(boolean $PreserveHost) 设置<p>是否开启保留原Host功能</p>
 */
class AIGWMCPRoute extends AbstractModel
{
    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>路由表达式</p>
     */
    public $Expression;

    /**
     * @var array <p>Header匹配规则</p>
     */
    public $HeaderMatch;

    /**
     * @var boolean <p>是否为默认路由</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     */
    public $IsDefault;

    /**
     * @var array <p>http path</p>
     */
    public $Methods;

    /**
     * @var string <p>路由名称</p>
     */
    public $Name;

    /**
     * @var string <p>路由路径</p>
     */
    public $Path;

    /**
     * @var string <p>路径匹配方式</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
     */
    public $PathMatchType;

    /**
     * @var integer <p>优先级</p>
     */
    public $Priority;

    /**
     * @var string <p>路由ID</p>
     */
    public $RouteId;

    /**
     * @var string <p>启用/禁用状态</p><p>枚举值：</p><ul><li>Enabled： 启用</li><li>Disabled： 禁用</li></ul>
     */
    public $Status;

    /**
     * @var boolean <p>是否开启保留原Host功能</p>
     */
    public $PreserveHost;

    /**
     * @param string $CreateTime <p>创建时间</p>
     * @param string $Expression <p>路由表达式</p>
     * @param array $HeaderMatch <p>Header匹配规则</p>
     * @param boolean $IsDefault <p>是否为默认路由</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     * @param array $Methods <p>http path</p>
     * @param string $Name <p>路由名称</p>
     * @param string $Path <p>路由路径</p>
     * @param string $PathMatchType <p>路径匹配方式</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
     * @param integer $Priority <p>优先级</p>
     * @param string $RouteId <p>路由ID</p>
     * @param string $Status <p>启用/禁用状态</p><p>枚举值：</p><ul><li>Enabled： 启用</li><li>Disabled： 禁用</li></ul>
     * @param boolean $PreserveHost <p>是否开启保留原Host功能</p>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Expression",$param) and $param["Expression"] !== null) {
            $this->Expression = $param["Expression"];
        }

        if (array_key_exists("HeaderMatch",$param) and $param["HeaderMatch"] !== null) {
            $this->HeaderMatch = [];
            foreach ($param["HeaderMatch"] as $key => $value){
                $obj = new AIGWHeaderRule();
                $obj->deserialize($value);
                array_push($this->HeaderMatch, $obj);
            }
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("PathMatchType",$param) and $param["PathMatchType"] !== null) {
            $this->PathMatchType = $param["PathMatchType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PreserveHost",$param) and $param["PreserveHost"] !== null) {
            $this->PreserveHost = $param["PreserveHost"];
        }
    }
}

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
 * CreateCloudNativeAPIGatewayMCPRoute请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关ID</p>
 * @method string getServerId() 获取<p>MCP Server ID</p>
 * @method void setServerId(string $ServerId) 设置<p>MCP Server ID</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method array getHeaderMatch() 获取<p>Header匹配规则</p>
 * @method void setHeaderMatch(array $HeaderMatch) 设置<p>Header匹配规则</p>
 * @method array getMethods() 获取<p>http method</p>
 * @method void setMethods(array $Methods) 设置<p>http method</p>
 * @method string getName() 获取<p>路由名称</p>
 * @method void setName(string $Name) 设置<p>路由名称</p>
 * @method string getPath() 获取<p>路径</p>
 * @method void setPath(string $Path) 设置<p>路径</p>
 * @method string getPathMatchType() 获取<p>路径匹配规则</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
 * @method void setPathMatchType(string $PathMatchType) 设置<p>路径匹配规则</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
 * @method integer getPriority() 获取<p>route优先级</p>
 * @method void setPriority(integer $Priority) 设置<p>route优先级</p>
 */
class CreateCloudNativeAPIGatewayMCPRouteRequest extends AbstractModel
{
    /**
     * @var string <p>网关ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>MCP Server ID</p>
     */
    public $ServerId;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var array <p>Header匹配规则</p>
     */
    public $HeaderMatch;

    /**
     * @var array <p>http method</p>
     */
    public $Methods;

    /**
     * @var string <p>路由名称</p>
     */
    public $Name;

    /**
     * @var string <p>路径</p>
     */
    public $Path;

    /**
     * @var string <p>路径匹配规则</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
     */
    public $PathMatchType;

    /**
     * @var integer <p>route优先级</p>
     */
    public $Priority;

    /**
     * @param string $GatewayId <p>网关ID</p>
     * @param string $ServerId <p>MCP Server ID</p>
     * @param string $Description <p>描述</p>
     * @param array $HeaderMatch <p>Header匹配规则</p>
     * @param array $Methods <p>http method</p>
     * @param string $Name <p>路由名称</p>
     * @param string $Path <p>路径</p>
     * @param string $PathMatchType <p>路径匹配规则</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
     * @param integer $Priority <p>route优先级</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HeaderMatch",$param) and $param["HeaderMatch"] !== null) {
            $this->HeaderMatch = [];
            foreach ($param["HeaderMatch"] as $key => $value){
                $obj = new AIGWHeaderRule();
                $obj->deserialize($value);
                array_push($this->HeaderMatch, $obj);
            }
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
    }
}

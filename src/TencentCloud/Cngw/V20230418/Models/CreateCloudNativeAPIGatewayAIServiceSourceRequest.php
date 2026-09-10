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
 * CreateCloudNativeAPIGatewayAIServiceSource请求参数结构体
 *
 * @method string getGatewayId() 获取<p>实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>实例 ID</p>
 * @method string getSourceType() 获取<p>来源类型:</p><ul><li>MCPRegistry:  mcp 注册中心</li></ul>
 * @method void setSourceType(string $SourceType) 设置<p>来源类型:</p><ul><li>MCPRegistry:  mcp 注册中心</li></ul>
 * @method string getSourceName() 获取<p>服务来源名字</p>
 * @method void setSourceName(string $SourceName) 设置<p>服务来源名字</p>
 * @method string getSourceProduct() 获取<p>来源产品：- TSFNacos：TSF Nacos</p>
 * @method void setSourceProduct(string $SourceProduct) 设置<p>来源产品：- TSFNacos：TSF Nacos</p>
 * @method CNAPIGwAIServiceSourceInfo getSourceInfo() 获取<p>来源详情</p>
 * @method void setSourceInfo(CNAPIGwAIServiceSourceInfo $SourceInfo) 设置<p>来源详情</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 */
class CreateCloudNativeAPIGatewayAIServiceSourceRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>来源类型:</p><ul><li>MCPRegistry:  mcp 注册中心</li></ul>
     */
    public $SourceType;

    /**
     * @var string <p>服务来源名字</p>
     */
    public $SourceName;

    /**
     * @var string <p>来源产品：- TSFNacos：TSF Nacos</p>
     */
    public $SourceProduct;

    /**
     * @var CNAPIGwAIServiceSourceInfo <p>来源详情</p>
     */
    public $SourceInfo;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @param string $GatewayId <p>实例 ID</p>
     * @param string $SourceType <p>来源类型:</p><ul><li>MCPRegistry:  mcp 注册中心</li></ul>
     * @param string $SourceName <p>服务来源名字</p>
     * @param string $SourceProduct <p>来源产品：- TSFNacos：TSF Nacos</p>
     * @param CNAPIGwAIServiceSourceInfo $SourceInfo <p>来源详情</p>
     * @param string $Description <p>描述</p>
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

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("SourceProduct",$param) and $param["SourceProduct"] !== null) {
            $this->SourceProduct = $param["SourceProduct"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new CNAPIGwAIServiceSourceInfo();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

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
namespace TencentCloud\Tccatalog\V20241024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tcc数据目录连接配置
 *
 * @method string getEndpointServiceId() 获取终端节点服务Id
 * @method void setEndpointServiceId(string $EndpointServiceId) 设置终端节点服务Id
 * @method string getMetaStoreUrl() 获取元数据连接串
 * @method void setMetaStoreUrl(string $MetaStoreUrl) 设置元数据连接串
 * @method NetWork getNetWork() 获取	网络信息
 * @method void setNetWork(NetWork $NetWork) 设置	网络信息
 */
class TccConnection extends AbstractModel
{
    /**
     * @var string 终端节点服务Id
     */
    public $EndpointServiceId;

    /**
     * @var string 元数据连接串
     */
    public $MetaStoreUrl;

    /**
     * @var NetWork 	网络信息
     */
    public $NetWork;

    /**
     * @param string $EndpointServiceId 终端节点服务Id
     * @param string $MetaStoreUrl 元数据连接串
     * @param NetWork $NetWork 	网络信息
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
        if (array_key_exists("EndpointServiceId",$param) and $param["EndpointServiceId"] !== null) {
            $this->EndpointServiceId = $param["EndpointServiceId"];
        }

        if (array_key_exists("MetaStoreUrl",$param) and $param["MetaStoreUrl"] !== null) {
            $this->MetaStoreUrl = $param["MetaStoreUrl"];
        }

        if (array_key_exists("NetWork",$param) and $param["NetWork"] !== null) {
            $this->NetWork = new NetWork();
            $this->NetWork->deserialize($param["NetWork"]);
        }
    }
}

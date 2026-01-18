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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHTTPListeners请求参数结构体
 *
 * @method string getProxyId() 获取<p>通道ID。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
 * @method void setProxyId(string $ProxyId) 设置<p>通道ID。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
 * @method string getGroupId() 获取<p>通道组ID。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
 * @method void setGroupId(string $GroupId) 设置<p>通道组ID。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
 * @method string getListenerId() 获取<p>过滤条件，按照监听器ID进行精确查询。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>过滤条件，按照监听器ID进行精确查询。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
 * @method string getListenerName() 获取<p>过滤条件，按照监听器名称进行精确查询</p>
 * @method void setListenerName(string $ListenerName) 设置<p>过滤条件，按照监听器名称进行精确查询</p>
 * @method integer getPort() 获取<p>过滤条件，按照监听器端口进行精确查询</p>
 * @method void setPort(integer $Port) 设置<p>过滤条件，按照监听器端口进行精确查询</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method integer getLimit() 获取<p>限制数量，默认为20个</p>
 * @method void setLimit(integer $Limit) 设置<p>限制数量，默认为20个</p>
 * @method string getSearchValue() 获取<p>过滤条件，支持按照端口或监听器名称进行模糊查询，该参数不能与ListenerName和Port同时使用</p>
 * @method void setSearchValue(string $SearchValue) 设置<p>过滤条件，支持按照端口或监听器名称进行模糊查询，该参数不能与ListenerName和Port同时使用</p>
 */
class DescribeHTTPListenersRequest extends AbstractModel
{
    /**
     * @var string <p>通道ID。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
     */
    public $ProxyId;

    /**
     * @var string <p>通道组ID。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
     */
    public $GroupId;

    /**
     * @var string <p>过滤条件，按照监听器ID进行精确查询。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
     */
    public $ListenerId;

    /**
     * @var string <p>过滤条件，按照监听器名称进行精确查询</p>
     */
    public $ListenerName;

    /**
     * @var integer <p>过滤条件，按照监听器端口进行精确查询</p>
     */
    public $Port;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>限制数量，默认为20个</p>
     */
    public $Limit;

    /**
     * @var string <p>过滤条件，支持按照端口或监听器名称进行模糊查询，该参数不能与ListenerName和Port同时使用</p>
     */
    public $SearchValue;

    /**
     * @param string $ProxyId <p>通道ID。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
     * @param string $GroupId <p>通道组ID。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
     * @param string $ListenerId <p>过滤条件，按照监听器ID进行精确查询。ListenerId、ProxyId、GroupId须至少填写一个，且ProxyId与GroupId至多只能填写其中一个。</p>
     * @param string $ListenerName <p>过滤条件，按照监听器名称进行精确查询</p>
     * @param integer $Port <p>过滤条件，按照监听器端口进行精确查询</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param integer $Limit <p>限制数量，默认为20个</p>
     * @param string $SearchValue <p>过滤条件，支持按照端口或监听器名称进行模糊查询，该参数不能与ListenerName和Port同时使用</p>
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }
    }
}

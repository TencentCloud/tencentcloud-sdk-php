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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlertCenterOmit请求参数结构体
 *
 * @method array getHandleIdList() 获取<p>处置对象,ID列表，  IdLists和IpList二选一</p>
 * @method void setHandleIdList(array $HandleIdList) 设置<p>处置对象,ID列表，  IdLists和IpList二选一</p>
 * @method string getTableType() 获取<p>忽略数据来源：<br>AlertTable 告警中心  InterceptionTable拦截列表</p>
 * @method void setTableType(string $TableType) 设置<p>忽略数据来源：<br>AlertTable 告警中心  InterceptionTable拦截列表</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method array getHandleEventIdList() 获取<p>处置对象,事件ID列表</p>
 * @method void setHandleEventIdList(array $HandleEventIdList) 设置<p>处置对象,事件ID列表</p>
 */
class CreateAlertCenterOmitRequest extends AbstractModel
{
    /**
     * @var array <p>处置对象,ID列表，  IdLists和IpList二选一</p>
     */
    public $HandleIdList;

    /**
     * @var string <p>忽略数据来源：<br>AlertTable 告警中心  InterceptionTable拦截列表</p>
     */
    public $TableType;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var array <p>处置对象,事件ID列表</p>
     */
    public $HandleEventIdList;

    /**
     * @param array $HandleIdList <p>处置对象,ID列表，  IdLists和IpList二选一</p>
     * @param string $TableType <p>忽略数据来源：<br>AlertTable 告警中心  InterceptionTable拦截列表</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     * @param array $HandleEventIdList <p>处置对象,事件ID列表</p>
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
        if (array_key_exists("HandleIdList",$param) and $param["HandleIdList"] !== null) {
            $this->HandleIdList = $param["HandleIdList"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("HandleEventIdList",$param) and $param["HandleEventIdList"] !== null) {
            $this->HandleEventIdList = $param["HandleEventIdList"];
        }
    }
}

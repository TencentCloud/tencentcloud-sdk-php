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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileCounterSign请求参数结构体
 *
 * @method string getFileId() 获取需要加签的文件Id。

注: `暂时只支持pdf类型的文件`
 * @method void setFileId(string $FileId) 设置需要加签的文件Id。

注: `暂时只支持pdf类型的文件`
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method Agent getAgent() 获取代理企业和员工的信息。在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method boolean getSyncMode() 获取是否使用同步模式。
<ul><li><b>false</b>:异步模式，返回taskId。需要使用taskId轮询结果查询接口。</li>
<li><b>true</b>: 同步模式，此接口将直接返回taskId和ResultFileId(加签后文件id)。</li></ul>
注：
1. 当加签文件较大的时候，建议使用异步接口进行操作。否则文件加签时间过长会导致接口超时。
 * @method void setSyncMode(boolean $SyncMode) 设置是否使用同步模式。
<ul><li><b>false</b>:异步模式，返回taskId。需要使用taskId轮询结果查询接口。</li>
<li><b>true</b>: 同步模式，此接口将直接返回taskId和ResultFileId(加签后文件id)。</li></ul>
注：
1. 当加签文件较大的时候，建议使用异步接口进行操作。否则文件加签时间过长会导致接口超时。
 */
class CreateFileCounterSignRequest extends AbstractModel
{
    /**
     * @var string 需要加签的文件Id。

注: `暂时只支持pdf类型的文件`
     */
    public $FileId;

    /**
     * @var UserInfo 执行本接口操作的员工信息。注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var Agent 代理企业和员工的信息。在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var boolean 是否使用同步模式。
<ul><li><b>false</b>:异步模式，返回taskId。需要使用taskId轮询结果查询接口。</li>
<li><b>true</b>: 同步模式，此接口将直接返回taskId和ResultFileId(加签后文件id)。</li></ul>
注：
1. 当加签文件较大的时候，建议使用异步接口进行操作。否则文件加签时间过长会导致接口超时。
     */
    public $SyncMode;

    /**
     * @param string $FileId 需要加签的文件Id。

注: `暂时只支持pdf类型的文件`
     * @param UserInfo $Operator 执行本接口操作的员工信息。注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param Agent $Agent 代理企业和员工的信息。在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param boolean $SyncMode 是否使用同步模式。
<ul><li><b>false</b>:异步模式，返回taskId。需要使用taskId轮询结果查询接口。</li>
<li><b>true</b>: 同步模式，此接口将直接返回taskId和ResultFileId(加签后文件id)。</li></ul>
注：
1. 当加签文件较大的时候，建议使用异步接口进行操作。否则文件加签时间过长会导致接口超时。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }
    }
}

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
 * CreateSealPolicy请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method array getUsers() 获取<p>用户在电子文件签署平台标识信息，具体参考UserInfo结构体。可跟下面的UserIds可叠加起作用,<br>同时也支持使用主企业的User进行授权， 当使用主企业的User时， 需要有集团角色。</p>
 * @method void setUsers(array $Users) 设置<p>用户在电子文件签署平台标识信息，具体参考UserInfo结构体。可跟下面的UserIds可叠加起作用,<br>同时也支持使用主企业的User进行授权， 当使用主企业的User时， 需要有集团角色。</p>
 * @method string getSealId() 获取<p>电子印章ID，为32位字符串。<br>建议开发者保留此印章ID，后续指定签署区印章或者操作印章需此印章ID。<br>可登录腾讯电子签控制台，在 &quot;印章&quot;-&gt;&quot;印章中心&quot;选择查看的印章，在&quot;印章详情&quot; 中查看某个印章的SealId(在页面中展示为印章ID)。</p>
 * @method void setSealId(string $SealId) 设置<p>电子印章ID，为32位字符串。<br>建议开发者保留此印章ID，后续指定签署区印章或者操作印章需此印章ID。<br>可登录腾讯电子签控制台，在 &quot;印章&quot;-&gt;&quot;印章中心&quot;选择查看的印章，在&quot;印章详情&quot; 中查看某个印章的SealId(在页面中展示为印章ID)。</p>
 * @method integer getExpired() 获取<p>授权有效期，时间戳秒级。可以传0，代表有效期到2099年12月12日23点59分59秒。</p>
 * @method void setExpired(integer $Expired) 设置<p>授权有效期，时间戳秒级。可以传0，代表有效期到2099年12月12日23点59分59秒。</p>
 * @method array getUserIds() 获取<p>需要授权的用户UserId集合。跟上面的SealId参数配合使用。选填，跟上面的Users同时起作用。<br>支持使用主企业的UserId进行授权， 当使用主企业的UserId时，该UserId 需要有集团角色。</p>
 * @method void setUserIds(array $UserIds) 设置<p>需要授权的用户UserId集合。跟上面的SealId参数配合使用。选填，跟上面的Users同时起作用。<br>支持使用主企业的UserId进行授权， 当使用主企业的UserId时，该UserId 需要有集团角色。</p>
 * @method string getPolicy() 获取<p>印章授权内容，最多300 个字符。</p>
 * @method void setPolicy(string $Policy) 设置<p>印章授权内容，最多300 个字符。</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method array getOptions() 获取<p>个性化配置字段，默认不传。</p>
 * @method void setOptions(array $Options) 设置<p>个性化配置字段，默认不传。</p>
 * @method SealPolicyAuthorizationFlows getAuthorizationFlows() 获取<p>针对用印的合同/合同组授权。<br>当单次用印授权时，可以仅在指定合同获得印章授权。<br>此场景下不会触发印章授权回调。</p>
 * @method void setAuthorizationFlows(SealPolicyAuthorizationFlows $AuthorizationFlows) 设置<p>针对用印的合同/合同组授权。<br>当单次用印授权时，可以仅在指定合同获得印章授权。<br>此场景下不会触发印章授权回调。</p>
 */
class CreateSealPolicyRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var array <p>用户在电子文件签署平台标识信息，具体参考UserInfo结构体。可跟下面的UserIds可叠加起作用,<br>同时也支持使用主企业的User进行授权， 当使用主企业的User时， 需要有集团角色。</p>
     */
    public $Users;

    /**
     * @var string <p>电子印章ID，为32位字符串。<br>建议开发者保留此印章ID，后续指定签署区印章或者操作印章需此印章ID。<br>可登录腾讯电子签控制台，在 &quot;印章&quot;-&gt;&quot;印章中心&quot;选择查看的印章，在&quot;印章详情&quot; 中查看某个印章的SealId(在页面中展示为印章ID)。</p>
     */
    public $SealId;

    /**
     * @var integer <p>授权有效期，时间戳秒级。可以传0，代表有效期到2099年12月12日23点59分59秒。</p>
     */
    public $Expired;

    /**
     * @var array <p>需要授权的用户UserId集合。跟上面的SealId参数配合使用。选填，跟上面的Users同时起作用。<br>支持使用主企业的UserId进行授权， 当使用主企业的UserId时，该UserId 需要有集团角色。</p>
     */
    public $UserIds;

    /**
     * @var string <p>印章授权内容，最多300 个字符。</p>
     */
    public $Policy;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var array <p>个性化配置字段，默认不传。</p>
     */
    public $Options;

    /**
     * @var SealPolicyAuthorizationFlows <p>针对用印的合同/合同组授权。<br>当单次用印授权时，可以仅在指定合同获得印章授权。<br>此场景下不会触发印章授权回调。</p>
     */
    public $AuthorizationFlows;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param array $Users <p>用户在电子文件签署平台标识信息，具体参考UserInfo结构体。可跟下面的UserIds可叠加起作用,<br>同时也支持使用主企业的User进行授权， 当使用主企业的User时， 需要有集团角色。</p>
     * @param string $SealId <p>电子印章ID，为32位字符串。<br>建议开发者保留此印章ID，后续指定签署区印章或者操作印章需此印章ID。<br>可登录腾讯电子签控制台，在 &quot;印章&quot;-&gt;&quot;印章中心&quot;选择查看的印章，在&quot;印章详情&quot; 中查看某个印章的SealId(在页面中展示为印章ID)。</p>
     * @param integer $Expired <p>授权有效期，时间戳秒级。可以传0，代表有效期到2099年12月12日23点59分59秒。</p>
     * @param array $UserIds <p>需要授权的用户UserId集合。跟上面的SealId参数配合使用。选填，跟上面的Users同时起作用。<br>支持使用主企业的UserId进行授权， 当使用主企业的UserId时，该UserId 需要有集团角色。</p>
     * @param string $Policy <p>印章授权内容，最多300 个字符。</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param array $Options <p>个性化配置字段，默认不传。</p>
     * @param SealPolicyAuthorizationFlows $AuthorizationFlows <p>针对用印的合同/合同组授权。<br>当单次用印授权时，可以仅在指定合同获得印章授权。<br>此场景下不会触发印章授权回调。</p>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new Option();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }

        if (array_key_exists("AuthorizationFlows",$param) and $param["AuthorizationFlows"] !== null) {
            $this->AuthorizationFlows = new SealPolicyAuthorizationFlows();
            $this->AuthorizationFlows->deserialize($param["AuthorizationFlows"]);
        }
    }
}

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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAccounts请求参数结构体
 *
 * @method integer getMaxItems() 获取<p>返回结果的条数，当返回结果达到 MaxItems 限制被截断时，返回参数IsTruncated将等于true。</p><p>取值范围：[1, 100]</p>
 * @method void setMaxItems(integer $MaxItems) 设置<p>返回结果的条数，当返回结果达到 MaxItems 限制被截断时，返回参数IsTruncated将等于true。</p><p>取值范围：[1, 100]</p>
 * @method string getMarker() 获取<p>当请求的返回结果被截断时，可以使用Marker获取从当前截断位置之后的内容。</p>
 * @method void setMarker(string $Marker) 设置<p>当请求的返回结果被截断时，可以使用Marker获取从当前截断位置之后的内容。</p>
 * @method string getUserType() 获取<p>用户类型</p><p>枚举值：</p><ul><li>Owner： 主账号</li><li>SubUser： 普通子用户</li><li>CICUser： CIC 子用户</li><li>WechatCorpUser： 企业微信子用户</li><li>AgentIdentity： AgentIdentity子用户</li><li>Collaborator： 协作者</li><li>MessageReceiver： 消息接收者</li></ul>
 * @method void setUserType(string $UserType) 设置<p>用户类型</p><p>枚举值：</p><ul><li>Owner： 主账号</li><li>SubUser： 普通子用户</li><li>CICUser： CIC 子用户</li><li>WechatCorpUser： 企业微信子用户</li><li>AgentIdentity： AgentIdentity子用户</li><li>Collaborator： 协作者</li><li>MessageReceiver： 消息接收者</li></ul>
 */
class ListAccountsRequest extends AbstractModel
{
    /**
     * @var integer <p>返回结果的条数，当返回结果达到 MaxItems 限制被截断时，返回参数IsTruncated将等于true。</p><p>取值范围：[1, 100]</p>
     */
    public $MaxItems;

    /**
     * @var string <p>当请求的返回结果被截断时，可以使用Marker获取从当前截断位置之后的内容。</p>
     */
    public $Marker;

    /**
     * @var string <p>用户类型</p><p>枚举值：</p><ul><li>Owner： 主账号</li><li>SubUser： 普通子用户</li><li>CICUser： CIC 子用户</li><li>WechatCorpUser： 企业微信子用户</li><li>AgentIdentity： AgentIdentity子用户</li><li>Collaborator： 协作者</li><li>MessageReceiver： 消息接收者</li></ul>
     */
    public $UserType;

    /**
     * @param integer $MaxItems <p>返回结果的条数，当返回结果达到 MaxItems 限制被截断时，返回参数IsTruncated将等于true。</p><p>取值范围：[1, 100]</p>
     * @param string $Marker <p>当请求的返回结果被截断时，可以使用Marker获取从当前截断位置之后的内容。</p>
     * @param string $UserType <p>用户类型</p><p>枚举值：</p><ul><li>Owner： 主账号</li><li>SubUser： 普通子用户</li><li>CICUser： CIC 子用户</li><li>WechatCorpUser： 企业微信子用户</li><li>AgentIdentity： AgentIdentity子用户</li><li>Collaborator： 协作者</li><li>MessageReceiver： 消息接收者</li></ul>
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
        if (array_key_exists("MaxItems",$param) and $param["MaxItems"] !== null) {
            $this->MaxItems = $param["MaxItems"];
        }

        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}

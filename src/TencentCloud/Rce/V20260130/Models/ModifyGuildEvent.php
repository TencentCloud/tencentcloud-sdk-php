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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编辑公会资料事件详情
 *
 * @method string getGuildNameAfter() 获取<p>修改后的公会名，允许空串</p>
 * @method void setGuildNameAfter(string $GuildNameAfter) 设置<p>修改后的公会名，允许空串</p>
 * @method string getGuildSignatureAfter() 获取<p>修改后的公会签名，允许空串</p>
 * @method void setGuildSignatureAfter(string $GuildSignatureAfter) 设置<p>修改后的公会签名，允许空串</p>
 * @method string getServerId() 获取<p>所属服务器ID，允许空串</p>
 * @method void setServerId(string $ServerId) 设置<p>所属服务器ID，允许空串</p>
 * @method User getUserInfo() 获取<p>编辑者账号信息</p>
 * @method void setUserInfo(User $UserInfo) 设置<p>编辑者账号信息</p>
 * @method Guild getGuild() 获取<p>公会信息</p>
 * @method void setGuild(Guild $Guild) 设置<p>公会信息</p>
 * @method array getCust() 获取<p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class ModifyGuildEvent extends AbstractModel
{
    /**
     * @var string <p>修改后的公会名，允许空串</p>
     */
    public $GuildNameAfter;

    /**
     * @var string <p>修改后的公会签名，允许空串</p>
     */
    public $GuildSignatureAfter;

    /**
     * @var string <p>所属服务器ID，允许空串</p>
     */
    public $ServerId;

    /**
     * @var User <p>编辑者账号信息</p>
     */
    public $UserInfo;

    /**
     * @var Guild <p>公会信息</p>
     */
    public $Guild;

    /**
     * @var array <p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param string $GuildNameAfter <p>修改后的公会名，允许空串</p>
     * @param string $GuildSignatureAfter <p>修改后的公会签名，允许空串</p>
     * @param string $ServerId <p>所属服务器ID，允许空串</p>
     * @param User $UserInfo <p>编辑者账号信息</p>
     * @param Guild $Guild <p>公会信息</p>
     * @param array $Cust <p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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
        if (array_key_exists("GuildNameAfter",$param) and $param["GuildNameAfter"] !== null) {
            $this->GuildNameAfter = $param["GuildNameAfter"];
        }

        if (array_key_exists("GuildSignatureAfter",$param) and $param["GuildSignatureAfter"] !== null) {
            $this->GuildSignatureAfter = $param["GuildSignatureAfter"];
        }

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new User();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("Guild",$param) and $param["Guild"] !== null) {
            $this->Guild = new Guild();
            $this->Guild->deserialize($param["Guild"]);
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}

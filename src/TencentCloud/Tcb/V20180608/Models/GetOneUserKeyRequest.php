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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetOneUserKey请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getKeyID() 获取<p>用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成</p>
 * @method void setKeyID(string $KeyID) 设置<p>用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成</p>
 * @method string getBusiness() 获取<p>业务场景来源，默认不传，表示来源授权中心，integration表示来源集成中心，当从集成中心请求时必传integration</p>
 * @method void setBusiness(string $Business) 设置<p>业务场景来源，默认不传，表示来源授权中心，integration表示来源集成中心，当从集成中心请求时必传integration</p>
 * @method boolean getNeedPwd() 获取<p>是否需要加密字段的值，true：是，false：否，默认不传，不需要</p><p>默认值：false</p><p>当为true时，返回加密字段的值，前端进行按约定解密</p>
 * @method void setNeedPwd(boolean $NeedPwd) 设置<p>是否需要加密字段的值，true：是，false：否，默认不传，不需要</p><p>默认值：false</p><p>当为true时，返回加密字段的值，前端进行按约定解密</p>
 */
class GetOneUserKeyRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成</p>
     */
    public $KeyID;

    /**
     * @var string <p>业务场景来源，默认不传，表示来源授权中心，integration表示来源集成中心，当从集成中心请求时必传integration</p>
     */
    public $Business;

    /**
     * @var boolean <p>是否需要加密字段的值，true：是，false：否，默认不传，不需要</p><p>默认值：false</p><p>当为true时，返回加密字段的值，前端进行按约定解密</p>
     */
    public $NeedPwd;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $KeyID <p>用户密钥对标识，前半部分用户填写，后半部分平台按照一定规则生成</p>
     * @param string $Business <p>业务场景来源，默认不传，表示来源授权中心，integration表示来源集成中心，当从集成中心请求时必传integration</p>
     * @param boolean $NeedPwd <p>是否需要加密字段的值，true：是，false：否，默认不传，不需要</p><p>默认值：false</p><p>当为true时，返回加密字段的值，前端进行按约定解密</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("KeyID",$param) and $param["KeyID"] !== null) {
            $this->KeyID = $param["KeyID"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("NeedPwd",$param) and $param["NeedPwd"] !== null) {
            $this->NeedPwd = $param["NeedPwd"];
        }
    }
}

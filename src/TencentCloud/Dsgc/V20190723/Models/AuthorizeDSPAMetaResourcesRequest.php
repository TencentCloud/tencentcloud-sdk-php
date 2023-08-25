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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthorizeDSPAMetaResources请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method string getAuthType() 获取授权方式，可选：automatic(一键自动授权) 、 account(指定用户名授权)。
 * @method void setAuthType(string $AuthType) 设置授权方式，可选：automatic(一键自动授权) 、 account(指定用户名授权)。
 * @method string getMetaType() 获取资源类型。
 * @method void setMetaType(string $MetaType) 设置资源类型。
 * @method string getResourceRegion() 获取资源所处地域。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所处地域。
 * @method array getResourcesAccount() 获取用户授权的账户信息，如果是一键自动授权模式，则不需要填写账户名与密码。
 * @method void setResourcesAccount(array $ResourcesAccount) 设置用户授权的账户信息，如果是一键自动授权模式，则不需要填写账户名与密码。
 */
class AuthorizeDSPAMetaResourcesRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var string 授权方式，可选：automatic(一键自动授权) 、 account(指定用户名授权)。
     */
    public $AuthType;

    /**
     * @var string 资源类型。
     */
    public $MetaType;

    /**
     * @var string 资源所处地域。
     */
    public $ResourceRegion;

    /**
     * @var array 用户授权的账户信息，如果是一键自动授权模式，则不需要填写账户名与密码。
     */
    public $ResourcesAccount;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param string $AuthType 授权方式，可选：automatic(一键自动授权) 、 account(指定用户名授权)。
     * @param string $MetaType 资源类型。
     * @param string $ResourceRegion 资源所处地域。
     * @param array $ResourcesAccount 用户授权的账户信息，如果是一键自动授权模式，则不需要填写账户名与密码。
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourcesAccount",$param) and $param["ResourcesAccount"] !== null) {
            $this->ResourcesAccount = [];
            foreach ($param["ResourcesAccount"] as $key => $value){
                $obj = new DspaResourceAccount();
                $obj->deserialize($value);
                array_push($this->ResourcesAccount, $obj);
            }
        }
    }
}

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
 * UpdateDSPASelfBuildResource请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method string getResourceId() 获取云资源名称，如果是通过CVM访问则填写CVM的资源ID，如果是通过LB访问则填写LB的资源ID。
 * @method void setResourceId(string $ResourceId) 设置云资源名称，如果是通过CVM访问则填写CVM的资源ID，如果是通过LB访问则填写LB的资源ID。
 * @method integer getResourceVPort() 获取资源绑定的端口，为0则表示不更新。
 * @method void setResourceVPort(integer $ResourceVPort) 设置资源绑定的端口，为0则表示不更新。
 * @method string getUserName() 获取账户名，为空则表示不更新。
UserName和Password必须同时填写或同时为空。
 * @method void setUserName(string $UserName) 设置账户名，为空则表示不更新。
UserName和Password必须同时填写或同时为空。
 * @method string getPassword() 获取账户密码，为空则表示不更新。
UserName和Password必须同时填写或同时为空。
 * @method void setPassword(string $Password) 设置账户密码，为空则表示不更新。
UserName和Password必须同时填写或同时为空。
 */
class UpdateDSPASelfBuildResourceRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var string 云资源名称，如果是通过CVM访问则填写CVM的资源ID，如果是通过LB访问则填写LB的资源ID。
     */
    public $ResourceId;

    /**
     * @var integer 资源绑定的端口，为0则表示不更新。
     */
    public $ResourceVPort;

    /**
     * @var string 账户名，为空则表示不更新。
UserName和Password必须同时填写或同时为空。
     */
    public $UserName;

    /**
     * @var string 账户密码，为空则表示不更新。
UserName和Password必须同时填写或同时为空。
     */
    public $Password;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param string $ResourceId 云资源名称，如果是通过CVM访问则填写CVM的资源ID，如果是通过LB访问则填写LB的资源ID。
     * @param integer $ResourceVPort 资源绑定的端口，为0则表示不更新。
     * @param string $UserName 账户名，为空则表示不更新。
UserName和Password必须同时填写或同时为空。
     * @param string $Password 账户密码，为空则表示不更新。
UserName和Password必须同时填写或同时为空。
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceVPort",$param) and $param["ResourceVPort"] !== null) {
            $this->ResourceVPort = $param["ResourceVPort"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}

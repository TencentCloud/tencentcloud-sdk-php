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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImageRegistryConnectivityTask请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getRegistryName() 获取<p>镜像仓库名</p>
 * @method void setRegistryName(string $RegistryName) 设置<p>镜像仓库名</p>
 * @method string getRegistryRegion() 获取<p>镜像仓库所在region</p>
 * @method void setRegistryRegion(string $RegistryRegion) 设置<p>镜像仓库所在region</p>
 * @method string getRegistryType() 获取<p>镜像仓库类型</p>
 * @method void setRegistryType(string $RegistryType) 设置<p>镜像仓库类型</p>
 * @method string getApiVersion() 获取<p>镜像仓库API版本</p>
 * @method void setApiVersion(string $ApiVersion) 设置<p>镜像仓库API版本</p>
 * @method string getUserName() 获取<p>账号</p>
 * @method void setUserName(string $UserName) 设置<p>账号</p>
 * @method string getPassword() 获取<p>密码</p>
 * @method void setPassword(string $Password) 设置<p>密码</p>
 * @method string getUrl() 获取<p>镜像仓库url</p>
 * @method void setUrl(string $Url) 设置<p>镜像仓库url</p>
 * @method array getParams() 获取<p>链接检查参数</p>
 * @method void setParams(array $Params) 设置<p>链接检查参数</p>
 * @method integer getRegistryId() 获取<p>仓库id</p>
 * @method void setRegistryId(integer $RegistryId) 设置<p>仓库id</p>
 * @method string getInstanceId() 获取<p>仓库实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>仓库实例id</p>
 */
class CreateImageRegistryConnectivityTaskRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>镜像仓库名</p>
     */
    public $RegistryName;

    /**
     * @var string <p>镜像仓库所在region</p>
     */
    public $RegistryRegion;

    /**
     * @var string <p>镜像仓库类型</p>
     */
    public $RegistryType;

    /**
     * @var string <p>镜像仓库API版本</p>
     */
    public $ApiVersion;

    /**
     * @var string <p>账号</p>
     */
    public $UserName;

    /**
     * @var string <p>密码</p>
     */
    public $Password;

    /**
     * @var string <p>镜像仓库url</p>
     */
    public $Url;

    /**
     * @var array <p>链接检查参数</p>
     */
    public $Params;

    /**
     * @var integer <p>仓库id</p>
     */
    public $RegistryId;

    /**
     * @var string <p>仓库实例id</p>
     */
    public $InstanceId;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $RegistryName <p>镜像仓库名</p>
     * @param string $RegistryRegion <p>镜像仓库所在region</p>
     * @param string $RegistryType <p>镜像仓库类型</p>
     * @param string $ApiVersion <p>镜像仓库API版本</p>
     * @param string $UserName <p>账号</p>
     * @param string $Password <p>密码</p>
     * @param string $Url <p>镜像仓库url</p>
     * @param array $Params <p>链接检查参数</p>
     * @param integer $RegistryId <p>仓库id</p>
     * @param string $InstanceId <p>仓库实例id</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ApiVersion",$param) and $param["ApiVersion"] !== null) {
            $this->ApiVersion = $param["ApiVersion"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ImageRegistryDetectionHostParam();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}

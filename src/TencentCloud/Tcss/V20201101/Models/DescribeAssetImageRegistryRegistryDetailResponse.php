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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetImageRegistryRegistryDetail返回参数结构体
 *
 * @method string getName() 获取仓库名
 * @method void setName(string $Name) 设置仓库名
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method string getUrl() 获取仓库url
 * @method void setUrl(string $Url) 设置仓库url
 * @method string getRegistryType() 获取仓库类型，列表：harbor
 * @method void setRegistryType(string $RegistryType) 设置仓库类型，列表：harbor
 * @method string getRegistryVersion() 获取仓库版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryVersion(string $RegistryVersion) 设置仓库版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetType() 获取网络类型，列表：public（公网）
 * @method void setNetType(string $NetType) 设置网络类型，列表：public（公网）
 * @method string getRegistryRegion() 获取区域，列表:default（默认）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryRegion(string $RegistryRegion) 设置区域，列表:default（默认）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSpeedLimit() 获取限速
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeedLimit(integer $SpeedLimit) 设置限速
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInsecure() 获取安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsecure(integer $Insecure) 设置安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetImageRegistryRegistryDetailResponse extends AbstractModel
{
    /**
     * @var string 仓库名
     */
    public $Name;

    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var string 仓库url
     */
    public $Url;

    /**
     * @var string 仓库类型，列表：harbor
     */
    public $RegistryType;

    /**
     * @var string 仓库版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryVersion;

    /**
     * @var string 网络类型，列表：public（公网）
     */
    public $NetType;

    /**
     * @var string 区域，列表:default（默认）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryRegion;

    /**
     * @var integer 限速
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeedLimit;

    /**
     * @var integer 安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Insecure;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 仓库名
     * @param string $Username 用户名
     * @param string $Password 密码
     * @param string $Url 仓库url
     * @param string $RegistryType 仓库类型，列表：harbor
     * @param string $RegistryVersion 仓库版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetType 网络类型，列表：public（公网）
     * @param string $RegistryRegion 区域，列表:default（默认）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SpeedLimit 限速
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Insecure 安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("RegistryVersion",$param) and $param["RegistryVersion"] !== null) {
            $this->RegistryVersion = $param["RegistryVersion"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("SpeedLimit",$param) and $param["SpeedLimit"] !== null) {
            $this->SpeedLimit = $param["SpeedLimit"];
        }

        if (array_key_exists("Insecure",$param) and $param["Insecure"] !== null) {
            $this->Insecure = $param["Insecure"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

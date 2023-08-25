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
 * CreateDSPASelfBuildMetaResource请求参数结构体
 *
 * @method string getDspaId() 获取Dspa实例ID。
 * @method void setDspaId(string $DspaId) 设置Dspa实例ID。
 * @method string getMetaType() 获取自建数据库类型。目前支持的自建数据库类型按照协议进行区分，支持两种开源数据库协议：
mysql_like_proto -- Mysql协议类关系型数据库，
postgre_like_proto -- Postgre协议类关系型数据库。
其他闭源协议的数据库如SqlServer、Oracle等暂不支持。
 * @method void setMetaType(string $MetaType) 设置自建数据库类型。目前支持的自建数据库类型按照协议进行区分，支持两种开源数据库协议：
mysql_like_proto -- Mysql协议类关系型数据库，
postgre_like_proto -- Postgre协议类关系型数据库。
其他闭源协议的数据库如SqlServer、Oracle等暂不支持。
 * @method string getResourceRegion() 获取资源所处地域。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所处地域。
 * @method string getResourceId() 获取自建云资源ID。
 * @method void setResourceId(string $ResourceId) 设置自建云资源ID。
 * @method string getResourceVip() 获取可用于访问自建云资源的IP。
 * @method void setResourceVip(string $ResourceVip) 设置可用于访问自建云资源的IP。
 * @method integer getResourceVPort() 获取可用于访问自建云资源的端口。
 * @method void setResourceVPort(integer $ResourceVPort) 设置可用于访问自建云资源的端口。
 * @method string getResourceUniqueVpcId() 获取自建云资源的VPC ID。
 * @method void setResourceUniqueVpcId(string $ResourceUniqueVpcId) 设置自建云资源的VPC ID。
 * @method string getResourceUniqueSubnetId() 获取自建云资源的Subnet ID。
 * @method void setResourceUniqueSubnetId(string $ResourceUniqueSubnetId) 设置自建云资源的Subnet ID。
 * @method string getResourceAccessType() 获取自建云资源所处的服务类型，可选：
cvm - 通过云服务器直接访问。
clb - 通过LB的方式进行访问。
 * @method void setResourceAccessType(string $ResourceAccessType) 设置自建云资源所处的服务类型，可选：
cvm - 通过云服务器直接访问。
clb - 通过LB的方式进行访问。
 * @method string getUserName() 获取账户名。
 * @method void setUserName(string $UserName) 设置账户名。
 * @method string getPassword() 获取账户密码。
 * @method void setPassword(string $Password) 设置账户密码。
 * @method string getResourceName() 获取资源名称，1-60个字符。
 * @method void setResourceName(string $ResourceName) 设置资源名称，1-60个字符。
 */
class CreateDSPASelfBuildMetaResourceRequest extends AbstractModel
{
    /**
     * @var string Dspa实例ID。
     */
    public $DspaId;

    /**
     * @var string 自建数据库类型。目前支持的自建数据库类型按照协议进行区分，支持两种开源数据库协议：
mysql_like_proto -- Mysql协议类关系型数据库，
postgre_like_proto -- Postgre协议类关系型数据库。
其他闭源协议的数据库如SqlServer、Oracle等暂不支持。
     */
    public $MetaType;

    /**
     * @var string 资源所处地域。
     */
    public $ResourceRegion;

    /**
     * @var string 自建云资源ID。
     */
    public $ResourceId;

    /**
     * @var string 可用于访问自建云资源的IP。
     */
    public $ResourceVip;

    /**
     * @var integer 可用于访问自建云资源的端口。
     */
    public $ResourceVPort;

    /**
     * @var string 自建云资源的VPC ID。
     */
    public $ResourceUniqueVpcId;

    /**
     * @var string 自建云资源的Subnet ID。
     */
    public $ResourceUniqueSubnetId;

    /**
     * @var string 自建云资源所处的服务类型，可选：
cvm - 通过云服务器直接访问。
clb - 通过LB的方式进行访问。
     */
    public $ResourceAccessType;

    /**
     * @var string 账户名。
     */
    public $UserName;

    /**
     * @var string 账户密码。
     */
    public $Password;

    /**
     * @var string 资源名称，1-60个字符。
     */
    public $ResourceName;

    /**
     * @param string $DspaId Dspa实例ID。
     * @param string $MetaType 自建数据库类型。目前支持的自建数据库类型按照协议进行区分，支持两种开源数据库协议：
mysql_like_proto -- Mysql协议类关系型数据库，
postgre_like_proto -- Postgre协议类关系型数据库。
其他闭源协议的数据库如SqlServer、Oracle等暂不支持。
     * @param string $ResourceRegion 资源所处地域。
     * @param string $ResourceId 自建云资源ID。
     * @param string $ResourceVip 可用于访问自建云资源的IP。
     * @param integer $ResourceVPort 可用于访问自建云资源的端口。
     * @param string $ResourceUniqueVpcId 自建云资源的VPC ID。
     * @param string $ResourceUniqueSubnetId 自建云资源的Subnet ID。
     * @param string $ResourceAccessType 自建云资源所处的服务类型，可选：
cvm - 通过云服务器直接访问。
clb - 通过LB的方式进行访问。
     * @param string $UserName 账户名。
     * @param string $Password 账户密码。
     * @param string $ResourceName 资源名称，1-60个字符。
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

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceVip",$param) and $param["ResourceVip"] !== null) {
            $this->ResourceVip = $param["ResourceVip"];
        }

        if (array_key_exists("ResourceVPort",$param) and $param["ResourceVPort"] !== null) {
            $this->ResourceVPort = $param["ResourceVPort"];
        }

        if (array_key_exists("ResourceUniqueVpcId",$param) and $param["ResourceUniqueVpcId"] !== null) {
            $this->ResourceUniqueVpcId = $param["ResourceUniqueVpcId"];
        }

        if (array_key_exists("ResourceUniqueSubnetId",$param) and $param["ResourceUniqueSubnetId"] !== null) {
            $this->ResourceUniqueSubnetId = $param["ResourceUniqueSubnetId"];
        }

        if (array_key_exists("ResourceAccessType",$param) and $param["ResourceAccessType"] !== null) {
            $this->ResourceAccessType = $param["ResourceAccessType"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }
    }
}

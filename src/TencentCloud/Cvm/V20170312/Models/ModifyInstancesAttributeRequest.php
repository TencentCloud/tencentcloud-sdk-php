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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesAttribute请求参数结构体
 *
 * @method array getInstanceIds() 获取一个或多个待操作的实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/213/15728) API返回值中的`InstanceId`获取。每次请求允许操作的实例数量上限是100。
 * @method void setInstanceIds(array $InstanceIds) 设置一个或多个待操作的实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/213/15728) API返回值中的`InstanceId`获取。每次请求允许操作的实例数量上限是100。
 * @method string getInstanceName() 获取修改后实例名称。可任意命名，但不得超过60个字符。
 * @method void setInstanceName(string $InstanceName) 设置修改后实例名称。可任意命名，但不得超过60个字符。
 * @method string getUserData() 获取提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16 KB。关于获取此参数的详细介绍，请参阅 [Windows](https://cloud.tencent.com/document/product/213/17526) 和 [Linux](https://cloud.tencent.com/document/product/213/17525) 启动时运行命令。
 * @method void setUserData(string $UserData) 设置提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16 KB。关于获取此参数的详细介绍，请参阅 [Windows](https://cloud.tencent.com/document/product/213/17526) 和 [Linux](https://cloud.tencent.com/document/product/213/17525) 启动时运行命令。
 * @method array getSecurityGroups() 获取指定实例的修改后的安全组Id列表，子机将重新关联指定列表的安全组，原本关联的安全组会被解绑。
 * @method void setSecurityGroups(array $SecurityGroups) 设置指定实例的修改后的安全组Id列表，子机将重新关联指定列表的安全组，原本关联的安全组会被解绑。
 * @method string getCamRoleName() 获取给实例绑定用户角色，传空值为解绑操作
 * @method void setCamRoleName(string $CamRoleName) 设置给实例绑定用户角色，传空值为解绑操作
 * @method string getHostName() 获取修改后实例的主机名。<li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><li>Windows 实例：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li>注意点：修改主机名后实例会立即重启，重启后新的主机名生效。
 * @method void setHostName(string $HostName) 设置修改后实例的主机名。<li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><li>Windows 实例：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li>注意点：修改主机名后实例会立即重启，重启后新的主机名生效。
 * @method boolean getDisableApiTermination() 获取实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<li>true：表示开启实例保护，不允许通过api接口删除实例</li><li>false：表示关闭实例保护，允许通过api接口删除实例</li>默认取值：false。
 * @method void setDisableApiTermination(boolean $DisableApiTermination) 设置实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<li>true：表示开启实例保护，不允许通过api接口删除实例</li><li>false：表示关闭实例保护，允许通过api接口删除实例</li>默认取值：false。
 * @method string getCamRoleType() 获取角色类别，与CamRoleName搭配使用，该值可从CAM [ DescribeRoleList ](https://cloud.tencent.com/document/product/598/36223)或[ GetRole ](https://cloud.tencent.com/document/product/598/36221)接口返回RoleType字段获取，当前只接受user、system和service_linked三种类别。
举例：一般CamRoleName中包含“LinkedRoleIn”（如TKE_QCSLinkedRoleInPrometheusService）时，DescribeRoleList和GetRole返回的RoleType为service_linked，则本参数也需要传递service_linked。
该参数默认值为user，若CameRoleName为非service_linked类型，本参数可不传递。
 * @method void setCamRoleType(string $CamRoleType) 设置角色类别，与CamRoleName搭配使用，该值可从CAM [ DescribeRoleList ](https://cloud.tencent.com/document/product/598/36223)或[ GetRole ](https://cloud.tencent.com/document/product/598/36221)接口返回RoleType字段获取，当前只接受user、system和service_linked三种类别。
举例：一般CamRoleName中包含“LinkedRoleIn”（如TKE_QCSLinkedRoleInPrometheusService）时，DescribeRoleList和GetRole返回的RoleType为service_linked，则本参数也需要传递service_linked。
该参数默认值为user，若CameRoleName为非service_linked类型，本参数可不传递。
 * @method boolean getAutoReboot() 获取修改实例主机名是否自动重启实例，不传默认自动重启。
- true: 修改主机名，并自动重启实例；
- false: 修改主机名，不自动重启实例，需要手动重启使新主机名生效。
注意点：本参数仅对修改主机名生效。
 * @method void setAutoReboot(boolean $AutoReboot) 设置修改实例主机名是否自动重启实例，不传默认自动重启。
- true: 修改主机名，并自动重启实例；
- false: 修改主机名，不自动重启实例，需要手动重启使新主机名生效。
注意点：本参数仅对修改主机名生效。
 */
class ModifyInstancesAttributeRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/213/15728) API返回值中的`InstanceId`获取。每次请求允许操作的实例数量上限是100。
     */
    public $InstanceIds;

    /**
     * @var string 修改后实例名称。可任意命名，但不得超过60个字符。
     */
    public $InstanceName;

    /**
     * @var string 提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16 KB。关于获取此参数的详细介绍，请参阅 [Windows](https://cloud.tencent.com/document/product/213/17526) 和 [Linux](https://cloud.tencent.com/document/product/213/17525) 启动时运行命令。
     */
    public $UserData;

    /**
     * @var array 指定实例的修改后的安全组Id列表，子机将重新关联指定列表的安全组，原本关联的安全组会被解绑。
     */
    public $SecurityGroups;

    /**
     * @var string 给实例绑定用户角色，传空值为解绑操作
     */
    public $CamRoleName;

    /**
     * @var string 修改后实例的主机名。<li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><li>Windows 实例：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li>注意点：修改主机名后实例会立即重启，重启后新的主机名生效。
     */
    public $HostName;

    /**
     * @var boolean 实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<li>true：表示开启实例保护，不允许通过api接口删除实例</li><li>false：表示关闭实例保护，允许通过api接口删除实例</li>默认取值：false。
     */
    public $DisableApiTermination;

    /**
     * @var string 角色类别，与CamRoleName搭配使用，该值可从CAM [ DescribeRoleList ](https://cloud.tencent.com/document/product/598/36223)或[ GetRole ](https://cloud.tencent.com/document/product/598/36221)接口返回RoleType字段获取，当前只接受user、system和service_linked三种类别。
举例：一般CamRoleName中包含“LinkedRoleIn”（如TKE_QCSLinkedRoleInPrometheusService）时，DescribeRoleList和GetRole返回的RoleType为service_linked，则本参数也需要传递service_linked。
该参数默认值为user，若CameRoleName为非service_linked类型，本参数可不传递。
     */
    public $CamRoleType;

    /**
     * @var boolean 修改实例主机名是否自动重启实例，不传默认自动重启。
- true: 修改主机名，并自动重启实例；
- false: 修改主机名，不自动重启实例，需要手动重启使新主机名生效。
注意点：本参数仅对修改主机名生效。
     */
    public $AutoReboot;

    /**
     * @param array $InstanceIds 一个或多个待操作的实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/213/15728) API返回值中的`InstanceId`获取。每次请求允许操作的实例数量上限是100。
     * @param string $InstanceName 修改后实例名称。可任意命名，但不得超过60个字符。
     * @param string $UserData 提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16 KB。关于获取此参数的详细介绍，请参阅 [Windows](https://cloud.tencent.com/document/product/213/17526) 和 [Linux](https://cloud.tencent.com/document/product/213/17525) 启动时运行命令。
     * @param array $SecurityGroups 指定实例的修改后的安全组Id列表，子机将重新关联指定列表的安全组，原本关联的安全组会被解绑。
     * @param string $CamRoleName 给实例绑定用户角色，传空值为解绑操作
     * @param string $HostName 修改后实例的主机名。<li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><li>Windows 实例：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li>注意点：修改主机名后实例会立即重启，重启后新的主机名生效。
     * @param boolean $DisableApiTermination 实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<li>true：表示开启实例保护，不允许通过api接口删除实例</li><li>false：表示关闭实例保护，允许通过api接口删除实例</li>默认取值：false。
     * @param string $CamRoleType 角色类别，与CamRoleName搭配使用，该值可从CAM [ DescribeRoleList ](https://cloud.tencent.com/document/product/598/36223)或[ GetRole ](https://cloud.tencent.com/document/product/598/36221)接口返回RoleType字段获取，当前只接受user、system和service_linked三种类别。
举例：一般CamRoleName中包含“LinkedRoleIn”（如TKE_QCSLinkedRoleInPrometheusService）时，DescribeRoleList和GetRole返回的RoleType为service_linked，则本参数也需要传递service_linked。
该参数默认值为user，若CameRoleName为非service_linked类型，本参数可不传递。
     * @param boolean $AutoReboot 修改实例主机名是否自动重启实例，不传默认自动重启。
- true: 修改主机名，并自动重启实例；
- false: 修改主机名，不自动重启实例，需要手动重启使新主机名生效。
注意点：本参数仅对修改主机名生效。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }

        if (array_key_exists("CamRoleType",$param) and $param["CamRoleType"] !== null) {
            $this->CamRoleType = $param["CamRoleType"];
        }

        if (array_key_exists("AutoReboot",$param) and $param["AutoReboot"] !== null) {
            $this->AutoReboot = $param["AutoReboot"];
        }
    }
}

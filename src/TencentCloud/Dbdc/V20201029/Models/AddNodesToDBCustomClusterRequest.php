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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddNodesToDBCustomCluster请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method array getNodeIds() 获取<p>需上架的节点 ID 列表</p>
 * @method void setNodeIds(array $NodeIds) 设置<p>需上架的节点 ID 列表</p>
 * @method string getImageId() 获取<p>节点上架后重设的操作系统镜像ID</p><p>取值参考：可通过&quot;DescribeDBCustomImages&quot;接口获取支持的镜像。</p>
 * @method void setImageId(string $ImageId) 设置<p>节点上架后重设的操作系统镜像ID</p><p>取值参考：可通过&quot;DescribeDBCustomImages&quot;接口获取支持的镜像。</p>
 * @method LoginSettings getLoginSettings() 获取<p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。</p><p>入参限制：若选择密钥方式，KeyIds 仅支持单个 ID。三种方式必须且仅可以设置其中一种。</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。</p><p>入参限制：若选择密钥方式，KeyIds 仅支持单个 ID。三种方式必须且仅可以设置其中一种。</p>
 * @method array getLabels() 获取<p>节点上架成功后初始化新增的自定义 Label</p><p>入参限制：单次 ≤ 20 对</p>
 * @method void setLabels(array $Labels) 设置<p>节点上架成功后初始化新增的自定义 Label</p><p>入参限制：单次 ≤ 20 对</p>
 * @method array getTaints() 获取<p>节点上架成功后初始化下发的Taint</p><p>入参限制：单次 ≤ 5 对</p>
 * @method void setTaints(array $Taints) 设置<p>节点上架成功后初始化下发的Taint</p><p>入参限制：单次 ≤ 5 对</p>
 * @method string getHostName() 获取<p>主机hostname ，仅 HostNameType=1 时必填，其余情况忽略；不支持大写字母</p><p>入参限制：- 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。不允许使用下划线(_)。</p><ul><li>Windows 节点：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>其他类型（Linux 等）节点：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><li>上架多台节点时：</li><li>指定模式串 {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买节点的数量。例如：输入 server_{R:3}，购买1台时，节点主机名为 server_3；购买2台时，主机名分别为 server_3、server_4。</li><li>指定模式串 {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，节点主机名为 server_003、server_004。若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，节点主机名为 app_99、app_100。</li><li>指定模式串 {IP}：自动替换为节点的内网IP地址。例如：输入 node-{IP}，节点主机名为 node-10.0.12.8；支持与序号模式串混合使用，例如：输入 web-{IP}-{R:1}，购买2台时，节点主机名分别为 web-10.0.12.8-1、web-10.0.12.9-2。</li><li>模式串需严格遵循 {R:x,F:y}、{R:x} 或 {IP} 格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：节点主机名添加后缀 1、2...n，其中n表示购买节点的数量，例如 server_购买2台时生成 server_1、server_2。</li></ul>
 * @method void setHostName(string $HostName) 设置<p>主机hostname ，仅 HostNameType=1 时必填，其余情况忽略；不支持大写字母</p><p>入参限制：- 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。不允许使用下划线(_)。</p><ul><li>Windows 节点：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>其他类型（Linux 等）节点：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><li>上架多台节点时：</li><li>指定模式串 {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买节点的数量。例如：输入 server_{R:3}，购买1台时，节点主机名为 server_3；购买2台时，主机名分别为 server_3、server_4。</li><li>指定模式串 {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，节点主机名为 server_003、server_004。若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，节点主机名为 app_99、app_100。</li><li>指定模式串 {IP}：自动替换为节点的内网IP地址。例如：输入 node-{IP}，节点主机名为 node-10.0.12.8；支持与序号模式串混合使用，例如：输入 web-{IP}-{R:1}，购买2台时，节点主机名分别为 web-10.0.12.8-1、web-10.0.12.9-2。</li><li>模式串需严格遵循 {R:x,F:y}、{R:x} 或 {IP} 格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：节点主机名添加后缀 1、2...n，其中n表示购买节点的数量，例如 server_购买2台时生成 server_1、server_2。</li></ul>
 * @method integer getHostNameType() 获取<p>HostName 来源类型</p><p>枚举值：</p><ul><li>0： 复用节点创建时设置的 hostname，为空则报错</li><li>1： 重新指定 HostName，需同时传 HostName 字段（支持模式串 {R:x}、{R:x,F:y}、{IP}）</li><li>2： 系统自动分配，用 NodeId 作为 HostName</li></ul>
 * @method void setHostNameType(integer $HostNameType) 设置<p>HostName 来源类型</p><p>枚举值：</p><ul><li>0： 复用节点创建时设置的 hostname，为空则报错</li><li>1： 重新指定 HostName，需同时传 HostName 字段（支持模式串 {R:x}、{R:x,F:y}、{IP}）</li><li>2： 系统自动分配，用 NodeId 作为 HostName</li></ul>
 * @method boolean getDryRun() 获取<p>试运行开关，true 时只执行参数校验，不发起上架流程</p><p>默认值：false</p>
 * @method void setDryRun(boolean $DryRun) 设置<p>试运行开关，true 时只执行参数校验，不发起上架流程</p><p>默认值：false</p>
 */
class AddNodesToDBCustomClusterRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var array <p>需上架的节点 ID 列表</p>
     */
    public $NodeIds;

    /**
     * @var string <p>节点上架后重设的操作系统镜像ID</p><p>取值参考：可通过&quot;DescribeDBCustomImages&quot;接口获取支持的镜像。</p>
     */
    public $ImageId;

    /**
     * @var LoginSettings <p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。</p><p>入参限制：若选择密钥方式，KeyIds 仅支持单个 ID。三种方式必须且仅可以设置其中一种。</p>
     */
    public $LoginSettings;

    /**
     * @var array <p>节点上架成功后初始化新增的自定义 Label</p><p>入参限制：单次 ≤ 20 对</p>
     */
    public $Labels;

    /**
     * @var array <p>节点上架成功后初始化下发的Taint</p><p>入参限制：单次 ≤ 5 对</p>
     */
    public $Taints;

    /**
     * @var string <p>主机hostname ，仅 HostNameType=1 时必填，其余情况忽略；不支持大写字母</p><p>入参限制：- 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。不允许使用下划线(_)。</p><ul><li>Windows 节点：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>其他类型（Linux 等）节点：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><li>上架多台节点时：</li><li>指定模式串 {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买节点的数量。例如：输入 server_{R:3}，购买1台时，节点主机名为 server_3；购买2台时，主机名分别为 server_3、server_4。</li><li>指定模式串 {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，节点主机名为 server_003、server_004。若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，节点主机名为 app_99、app_100。</li><li>指定模式串 {IP}：自动替换为节点的内网IP地址。例如：输入 node-{IP}，节点主机名为 node-10.0.12.8；支持与序号模式串混合使用，例如：输入 web-{IP}-{R:1}，购买2台时，节点主机名分别为 web-10.0.12.8-1、web-10.0.12.9-2。</li><li>模式串需严格遵循 {R:x,F:y}、{R:x} 或 {IP} 格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：节点主机名添加后缀 1、2...n，其中n表示购买节点的数量，例如 server_购买2台时生成 server_1、server_2。</li></ul>
     */
    public $HostName;

    /**
     * @var integer <p>HostName 来源类型</p><p>枚举值：</p><ul><li>0： 复用节点创建时设置的 hostname，为空则报错</li><li>1： 重新指定 HostName，需同时传 HostName 字段（支持模式串 {R:x}、{R:x,F:y}、{IP}）</li><li>2： 系统自动分配，用 NodeId 作为 HostName</li></ul>
     */
    public $HostNameType;

    /**
     * @var boolean <p>试运行开关，true 时只执行参数校验，不发起上架流程</p><p>默认值：false</p>
     */
    public $DryRun;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param array $NodeIds <p>需上架的节点 ID 列表</p>
     * @param string $ImageId <p>节点上架后重设的操作系统镜像ID</p><p>取值参考：可通过&quot;DescribeDBCustomImages&quot;接口获取支持的镜像。</p>
     * @param LoginSettings $LoginSettings <p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。</p><p>入参限制：若选择密钥方式，KeyIds 仅支持单个 ID。三种方式必须且仅可以设置其中一种。</p>
     * @param array $Labels <p>节点上架成功后初始化新增的自定义 Label</p><p>入参限制：单次 ≤ 20 对</p>
     * @param array $Taints <p>节点上架成功后初始化下发的Taint</p><p>入参限制：单次 ≤ 5 对</p>
     * @param string $HostName <p>主机hostname ，仅 HostNameType=1 时必填，其余情况忽略；不支持大写字母</p><p>入参限制：- 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。不允许使用下划线(_)。</p><ul><li>Windows 节点：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>其他类型（Linux 等）节点：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><li>上架多台节点时：</li><li>指定模式串 {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买节点的数量。例如：输入 server_{R:3}，购买1台时，节点主机名为 server_3；购买2台时，主机名分别为 server_3、server_4。</li><li>指定模式串 {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，节点主机名为 server_003、server_004。若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，节点主机名为 app_99、app_100。</li><li>指定模式串 {IP}：自动替换为节点的内网IP地址。例如：输入 node-{IP}，节点主机名为 node-10.0.12.8；支持与序号模式串混合使用，例如：输入 web-{IP}-{R:1}，购买2台时，节点主机名分别为 web-10.0.12.8-1、web-10.0.12.9-2。</li><li>模式串需严格遵循 {R:x,F:y}、{R:x} 或 {IP} 格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：节点主机名添加后缀 1、2...n，其中n表示购买节点的数量，例如 server_购买2台时生成 server_1、server_2。</li></ul>
     * @param integer $HostNameType <p>HostName 来源类型</p><p>枚举值：</p><ul><li>0： 复用节点创建时设置的 hostname，为空则报错</li><li>1： 重新指定 HostName，需同时传 HostName 字段（支持模式串 {R:x}、{R:x,F:y}、{IP}）</li><li>2： 系统自动分配，用 NodeId 作为 HostName</li></ul>
     * @param boolean $DryRun <p>试运行开关，true 时只执行参数校验，不发起上架流程</p><p>默认值：false</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostNameType",$param) and $param["HostNameType"] !== null) {
            $this->HostNameType = $param["HostNameType"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}

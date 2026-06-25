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
 * DescribeCWPMachines请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method Filter getFilter() 获取<p>一、主表字段筛选（需要指定 OperatorType）<br>MachineName：主机名称，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;test-server&quot;]<br>MachineIp：内网IP，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;10.0.0.1&quot;]<br>MachineWanIp：外网IP，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;1.2.3.4&quot;]<br>InstanceID：实例ID，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;ins-xxxxx&quot;]<br>MachineStatus / InstanceStatus：实例状态，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;RUNNING&quot;]，可选值：RUNNING/STOPPED/EXPIRED<br>MachineOs：操作系统类型，支持 OperatorType 7(IN)，Values示例：[&quot;1&quot;]，值为数字编码，见下方OsType说明<br>VpcId：VPC ID，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;vpc-xxxxx&quot;]<br>CloudFromEnum：云服务商，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;0&quot;]，值为数字编码，见下方CloudFrom说明<br>Region ：地域，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;ap-guangzhou&quot;]<br>AppId：账号AppId，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;1234567890&quot;]<br>ProjectId：项目ID，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;0&quot;]</p><p>二、预筛选字段（不需要指定 OperatorType）<br>AgentStatus：Agent状态，单选，Values示例：[&quot;ONLINE&quot;]，可选值：ONLINE/OFFLINE/UNINSTALL<br>ProtectType：防护类型（综合），Values示例：[&quot;ULTIMATE&quot;]，可选值：BASIC/PRO/ULTIMATE/NONE<br>CsipProtectType：CSIP防护类型，Values示例：[&quot;ULTIMATE&quot;]，可选值：BASIC/PRO/ULTIMATE/NONE<br>CloudTags：云标签，Values示例：[&quot;tagKey$tagValue&quot;]，格式：tagKey$tagValue 或 tagKey（只匹配key），最多5个值<br>Tags：资产标签，Values示例：[&quot;123&quot;]，值为标签ID<br>ExposedStatus：暴露状态，单选，Values示例：[&quot;EXPOSED&quot;]，可选值：NOT_APPLICABLE/EXPOSED/UNEXPOSED</p><p>三、特殊筛选字段（不需要指定 OperatorType）<br>NetworkType：网络类型，单选，Values示例：[&quot;1&quot;]，1=VPC网络, 2=基础网络, 3=非腾讯云网络<br>MachineType：机器类型，可多选，Values示例：[&quot;CVM&quot;]，可选值：CVM/BM/ECM/LH/EKS-NATIVE/ECS/EC2/VMS<br>Common：通用搜索，单选，Values示例：[&quot;关键词&quot;]，同时对内网IP、外网IP、主机名称、实例ID做模糊匹配</p>
 * @method void setFilter(Filter $Filter) 设置<p>一、主表字段筛选（需要指定 OperatorType）<br>MachineName：主机名称，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;test-server&quot;]<br>MachineIp：内网IP，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;10.0.0.1&quot;]<br>MachineWanIp：外网IP，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;1.2.3.4&quot;]<br>InstanceID：实例ID，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;ins-xxxxx&quot;]<br>MachineStatus / InstanceStatus：实例状态，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;RUNNING&quot;]，可选值：RUNNING/STOPPED/EXPIRED<br>MachineOs：操作系统类型，支持 OperatorType 7(IN)，Values示例：[&quot;1&quot;]，值为数字编码，见下方OsType说明<br>VpcId：VPC ID，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;vpc-xxxxx&quot;]<br>CloudFromEnum：云服务商，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;0&quot;]，值为数字编码，见下方CloudFrom说明<br>Region ：地域，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;ap-guangzhou&quot;]<br>AppId：账号AppId，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;1234567890&quot;]<br>ProjectId：项目ID，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;0&quot;]</p><p>二、预筛选字段（不需要指定 OperatorType）<br>AgentStatus：Agent状态，单选，Values示例：[&quot;ONLINE&quot;]，可选值：ONLINE/OFFLINE/UNINSTALL<br>ProtectType：防护类型（综合），Values示例：[&quot;ULTIMATE&quot;]，可选值：BASIC/PRO/ULTIMATE/NONE<br>CsipProtectType：CSIP防护类型，Values示例：[&quot;ULTIMATE&quot;]，可选值：BASIC/PRO/ULTIMATE/NONE<br>CloudTags：云标签，Values示例：[&quot;tagKey$tagValue&quot;]，格式：tagKey$tagValue 或 tagKey（只匹配key），最多5个值<br>Tags：资产标签，Values示例：[&quot;123&quot;]，值为标签ID<br>ExposedStatus：暴露状态，单选，Values示例：[&quot;EXPOSED&quot;]，可选值：NOT_APPLICABLE/EXPOSED/UNEXPOSED</p><p>三、特殊筛选字段（不需要指定 OperatorType）<br>NetworkType：网络类型，单选，Values示例：[&quot;1&quot;]，1=VPC网络, 2=基础网络, 3=非腾讯云网络<br>MachineType：机器类型，可多选，Values示例：[&quot;CVM&quot;]，可选值：CVM/BM/ECM/LH/EKS-NATIVE/ECS/EC2/VMS<br>Common：通用搜索，单选，Values示例：[&quot;关键词&quot;]，同时对内网IP、外网IP、主机名称、实例ID做模糊匹配</p>
 * @method boolean getNeedTatStatus() 获取<p>是否需要tat状态信息</p>
 * @method void setNeedTatStatus(boolean $NeedTatStatus) 设置<p>是否需要tat状态信息</p>
 * @method boolean getMoreInformation() 获取<p>是否需要额外信息，如安全中心标签、腾讯云标签</p>
 * @method void setMoreInformation(boolean $MoreInformation) 设置<p>是否需要额外信息，如安全中心标签、腾讯云标签</p>
 * @method boolean getNeedContainerInfo() 获取<p>是否需要容器信息，如容器数、核数、容器防护状态</p>
 * @method void setNeedContainerInfo(boolean $NeedContainerInfo) 设置<p>是否需要容器信息，如容器数、核数、容器防护状态</p>
 */
class DescribeCWPMachinesRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>一、主表字段筛选（需要指定 OperatorType）<br>MachineName：主机名称，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;test-server&quot;]<br>MachineIp：内网IP，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;10.0.0.1&quot;]<br>MachineWanIp：外网IP，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;1.2.3.4&quot;]<br>InstanceID：实例ID，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;ins-xxxxx&quot;]<br>MachineStatus / InstanceStatus：实例状态，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;RUNNING&quot;]，可选值：RUNNING/STOPPED/EXPIRED<br>MachineOs：操作系统类型，支持 OperatorType 7(IN)，Values示例：[&quot;1&quot;]，值为数字编码，见下方OsType说明<br>VpcId：VPC ID，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;vpc-xxxxx&quot;]<br>CloudFromEnum：云服务商，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;0&quot;]，值为数字编码，见下方CloudFrom说明<br>Region ：地域，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;ap-guangzhou&quot;]<br>AppId：账号AppId，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;1234567890&quot;]<br>ProjectId：项目ID，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;0&quot;]</p><p>二、预筛选字段（不需要指定 OperatorType）<br>AgentStatus：Agent状态，单选，Values示例：[&quot;ONLINE&quot;]，可选值：ONLINE/OFFLINE/UNINSTALL<br>ProtectType：防护类型（综合），Values示例：[&quot;ULTIMATE&quot;]，可选值：BASIC/PRO/ULTIMATE/NONE<br>CsipProtectType：CSIP防护类型，Values示例：[&quot;ULTIMATE&quot;]，可选值：BASIC/PRO/ULTIMATE/NONE<br>CloudTags：云标签，Values示例：[&quot;tagKey$tagValue&quot;]，格式：tagKey$tagValue 或 tagKey（只匹配key），最多5个值<br>Tags：资产标签，Values示例：[&quot;123&quot;]，值为标签ID<br>ExposedStatus：暴露状态，单选，Values示例：[&quot;EXPOSED&quot;]，可选值：NOT_APPLICABLE/EXPOSED/UNEXPOSED</p><p>三、特殊筛选字段（不需要指定 OperatorType）<br>NetworkType：网络类型，单选，Values示例：[&quot;1&quot;]，1=VPC网络, 2=基础网络, 3=非腾讯云网络<br>MachineType：机器类型，可多选，Values示例：[&quot;CVM&quot;]，可选值：CVM/BM/ECM/LH/EKS-NATIVE/ECS/EC2/VMS<br>Common：通用搜索，单选，Values示例：[&quot;关键词&quot;]，同时对内网IP、外网IP、主机名称、实例ID做模糊匹配</p>
     */
    public $Filter;

    /**
     * @var boolean <p>是否需要tat状态信息</p>
     */
    public $NeedTatStatus;

    /**
     * @var boolean <p>是否需要额外信息，如安全中心标签、腾讯云标签</p>
     */
    public $MoreInformation;

    /**
     * @var boolean <p>是否需要容器信息，如容器数、核数、容器防护状态</p>
     */
    public $NeedContainerInfo;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param Filter $Filter <p>一、主表字段筛选（需要指定 OperatorType）<br>MachineName：主机名称，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;test-server&quot;]<br>MachineIp：内网IP，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;10.0.0.1&quot;]<br>MachineWanIp：外网IP，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;1.2.3.4&quot;]<br>InstanceID：实例ID，支持 OperatorType 9(模糊)、7(IN)，Values示例：[&quot;ins-xxxxx&quot;]<br>MachineStatus / InstanceStatus：实例状态，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;RUNNING&quot;]，可选值：RUNNING/STOPPED/EXPIRED<br>MachineOs：操作系统类型，支持 OperatorType 7(IN)，Values示例：[&quot;1&quot;]，值为数字编码，见下方OsType说明<br>VpcId：VPC ID，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;vpc-xxxxx&quot;]<br>CloudFromEnum：云服务商，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;0&quot;]，值为数字编码，见下方CloudFrom说明<br>Region ：地域，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;ap-guangzhou&quot;]<br>AppId：账号AppId，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;1234567890&quot;]<br>ProjectId：项目ID，支持 OperatorType 7(IN)、1(等于)，Values示例：[&quot;0&quot;]</p><p>二、预筛选字段（不需要指定 OperatorType）<br>AgentStatus：Agent状态，单选，Values示例：[&quot;ONLINE&quot;]，可选值：ONLINE/OFFLINE/UNINSTALL<br>ProtectType：防护类型（综合），Values示例：[&quot;ULTIMATE&quot;]，可选值：BASIC/PRO/ULTIMATE/NONE<br>CsipProtectType：CSIP防护类型，Values示例：[&quot;ULTIMATE&quot;]，可选值：BASIC/PRO/ULTIMATE/NONE<br>CloudTags：云标签，Values示例：[&quot;tagKey$tagValue&quot;]，格式：tagKey$tagValue 或 tagKey（只匹配key），最多5个值<br>Tags：资产标签，Values示例：[&quot;123&quot;]，值为标签ID<br>ExposedStatus：暴露状态，单选，Values示例：[&quot;EXPOSED&quot;]，可选值：NOT_APPLICABLE/EXPOSED/UNEXPOSED</p><p>三、特殊筛选字段（不需要指定 OperatorType）<br>NetworkType：网络类型，单选，Values示例：[&quot;1&quot;]，1=VPC网络, 2=基础网络, 3=非腾讯云网络<br>MachineType：机器类型，可多选，Values示例：[&quot;CVM&quot;]，可选值：CVM/BM/ECM/LH/EKS-NATIVE/ECS/EC2/VMS<br>Common：通用搜索，单选，Values示例：[&quot;关键词&quot;]，同时对内网IP、外网IP、主机名称、实例ID做模糊匹配</p>
     * @param boolean $NeedTatStatus <p>是否需要tat状态信息</p>
     * @param boolean $MoreInformation <p>是否需要额外信息，如安全中心标签、腾讯云标签</p>
     * @param boolean $NeedContainerInfo <p>是否需要容器信息，如容器数、核数、容器防护状态</p>
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

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("NeedTatStatus",$param) and $param["NeedTatStatus"] !== null) {
            $this->NeedTatStatus = $param["NeedTatStatus"];
        }

        if (array_key_exists("MoreInformation",$param) and $param["MoreInformation"] !== null) {
            $this->MoreInformation = $param["MoreInformation"];
        }

        if (array_key_exists("NeedContainerInfo",$param) and $param["NeedContainerInfo"] !== null) {
            $this->NeedContainerInfo = $param["NeedContainerInfo"];
        }
    }
}

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
 * 网络集群策略返回的结构体
 *
 * @method string getName() 获取网络策略名
 * @method void setName(string $Name) 设置网络策略名
 * @method string getDescription() 获取网络策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置网络策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublishStatus() 获取发布状态：

开启待确认：PublishedNoConfirm

开启已确认：PublishedConfirmed

关闭中：unPublishing

开启中：Publishing

待开启：unPublishEdit
 * @method void setPublishStatus(string $PublishStatus) 设置发布状态：

开启待确认：PublishedNoConfirm

开启已确认：PublishedConfirmed

关闭中：unPublishing

开启中：Publishing

待开启：unPublishEdit
 * @method string getPolicySourceType() 获取策略类型：

自动发现：System

手动添加：Manual
 * @method void setPolicySourceType(string $PolicySourceType) 设置策略类型：

自动发现：System

手动添加：Manual
 * @method string getNamespace() 获取策略空间
 * @method void setNamespace(string $Namespace) 设置策略空间
 * @method string getPolicyCreateTime() 获取策略创建日期
 * @method void setPolicyCreateTime(string $PolicyCreateTime) 设置策略创建日期
 * @method string getNetworkPolicyPlugin() 获取策略类型

kube-router：KubeRouter

cilium：Cilium
 * @method void setNetworkPolicyPlugin(string $NetworkPolicyPlugin) 设置策略类型

kube-router：KubeRouter

cilium：Cilium
 * @method string getPublishResult() 获取策略发布结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishResult(string $PublishResult) 设置策略发布结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFromPolicyRule() 获取入站规则

全部允许：1

全部拒绝 ：2

自定义：3
 * @method void setFromPolicyRule(integer $FromPolicyRule) 设置入站规则

全部允许：1

全部拒绝 ：2

自定义：3
 * @method integer getToPolicyRule() 获取入站规则

全部允许：1

全部拒绝 ：2

自定义：3
 * @method void setToPolicyRule(integer $ToPolicyRule) 设置入站规则

全部允许：1

全部拒绝 ：2

自定义：3
 * @method string getPodSelector() 获取作用对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodSelector(string $PodSelector) 设置作用对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取网络策略Id
 * @method void setId(integer $Id) 设置网络策略Id
 */
class NetworkPolicyInfoItem extends AbstractModel
{
    /**
     * @var string 网络策略名
     */
    public $Name;

    /**
     * @var string 网络策略描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 发布状态：

开启待确认：PublishedNoConfirm

开启已确认：PublishedConfirmed

关闭中：unPublishing

开启中：Publishing

待开启：unPublishEdit
     */
    public $PublishStatus;

    /**
     * @var string 策略类型：

自动发现：System

手动添加：Manual
     */
    public $PolicySourceType;

    /**
     * @var string 策略空间
     */
    public $Namespace;

    /**
     * @var string 策略创建日期
     */
    public $PolicyCreateTime;

    /**
     * @var string 策略类型

kube-router：KubeRouter

cilium：Cilium
     */
    public $NetworkPolicyPlugin;

    /**
     * @var string 策略发布结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishResult;

    /**
     * @var integer 入站规则

全部允许：1

全部拒绝 ：2

自定义：3
     */
    public $FromPolicyRule;

    /**
     * @var integer 入站规则

全部允许：1

全部拒绝 ：2

自定义：3
     */
    public $ToPolicyRule;

    /**
     * @var string 作用对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodSelector;

    /**
     * @var integer 网络策略Id
     */
    public $Id;

    /**
     * @param string $Name 网络策略名
     * @param string $Description 网络策略描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublishStatus 发布状态：

开启待确认：PublishedNoConfirm

开启已确认：PublishedConfirmed

关闭中：unPublishing

开启中：Publishing

待开启：unPublishEdit
     * @param string $PolicySourceType 策略类型：

自动发现：System

手动添加：Manual
     * @param string $Namespace 策略空间
     * @param string $PolicyCreateTime 策略创建日期
     * @param string $NetworkPolicyPlugin 策略类型

kube-router：KubeRouter

cilium：Cilium
     * @param string $PublishResult 策略发布结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FromPolicyRule 入站规则

全部允许：1

全部拒绝 ：2

自定义：3
     * @param integer $ToPolicyRule 入站规则

全部允许：1

全部拒绝 ：2

自定义：3
     * @param string $PodSelector 作用对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 网络策略Id
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PublishStatus",$param) and $param["PublishStatus"] !== null) {
            $this->PublishStatus = $param["PublishStatus"];
        }

        if (array_key_exists("PolicySourceType",$param) and $param["PolicySourceType"] !== null) {
            $this->PolicySourceType = $param["PolicySourceType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("PolicyCreateTime",$param) and $param["PolicyCreateTime"] !== null) {
            $this->PolicyCreateTime = $param["PolicyCreateTime"];
        }

        if (array_key_exists("NetworkPolicyPlugin",$param) and $param["NetworkPolicyPlugin"] !== null) {
            $this->NetworkPolicyPlugin = $param["NetworkPolicyPlugin"];
        }

        if (array_key_exists("PublishResult",$param) and $param["PublishResult"] !== null) {
            $this->PublishResult = $param["PublishResult"];
        }

        if (array_key_exists("FromPolicyRule",$param) and $param["FromPolicyRule"] !== null) {
            $this->FromPolicyRule = $param["FromPolicyRule"];
        }

        if (array_key_exists("ToPolicyRule",$param) and $param["ToPolicyRule"] !== null) {
            $this->ToPolicyRule = $param["ToPolicyRule"];
        }

        if (array_key_exists("PodSelector",$param) and $param["PodSelector"] !== null) {
            $this->PodSelector = $param["PodSelector"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}

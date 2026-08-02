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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BYOK信息
 *
 * @method string getAccessType() 获取<p>BYOK类型</p>
 * @method void setAccessType(string $AccessType) 设置<p>BYOK类型</p>
 * @method array getInputModalities() 获取<p>单个byok实例下该模型可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul>
 * @method void setInputModalities(array $InputModalities) 设置<p>单个byok实例下该模型可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul>
 * @method string getProtocol() 获取<p>模型协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>模型协议</p>
 * @method string getProvider() 获取<p>BYOK的所属厂商</p>
 * @method void setProvider(string $Provider) 设置<p>BYOK的所属厂商</p>
 * @method string getServiceProviderId() 获取<p>BYOK实例ID</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>BYOK实例ID</p>
 * @method string getServiceProviderName() 获取<p>BYOK名称</p>
 * @method void setServiceProviderName(string $ServiceProviderName) 设置<p>BYOK名称</p>
 * @method integer getOrder() 获取<p>绑定的指定模型组内BYOK实例的调度优先级</p><p>取值范围[0,2]，优先级随数值增大而降低。</p>
 * @method void setOrder(integer $Order) 设置<p>绑定的指定模型组内BYOK实例的调度优先级</p><p>取值范围[0,2]，优先级随数值增大而降低。</p>
 * @method integer getWeight() 获取<p>绑定的指定模型组Order相同层级内BYOK实例的调度权重</p>
 * @method void setWeight(integer $Weight) 设置<p>绑定的指定模型组Order相同层级内BYOK实例的调度权重</p>
 * @method string getAssociationStatus() 获取<p>CMR实例-BYOK实例的模型调度绑定关系状态</p><p>枚举值：</p><ul><li>Configuring： 变配中</li><li>ConfigureFailed： 变配失败</li><li>Deleting： 删除中</li><li>Provisioning： 创建中</li><li>Active： 正常可用</li><li>ProvisionFailed： 创建失败</li><li>DeletionFailed： 删除失败</li></ul>
 * @method void setAssociationStatus(string $AssociationStatus) 设置<p>CMR实例-BYOK实例的模型调度绑定关系状态</p><p>枚举值：</p><ul><li>Configuring： 变配中</li><li>ConfigureFailed： 变配失败</li><li>Deleting： 删除中</li><li>Provisioning： 创建中</li><li>Active： 正常可用</li><li>ProvisionFailed： 创建失败</li><li>DeletionFailed： 删除失败</li></ul>
 */
class ServiceProvider extends AbstractModel
{
    /**
     * @var string <p>BYOK类型</p>
     */
    public $AccessType;

    /**
     * @var array <p>单个byok实例下该模型可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul>
     */
    public $InputModalities;

    /**
     * @var string <p>模型协议</p>
     */
    public $Protocol;

    /**
     * @var string <p>BYOK的所属厂商</p>
     */
    public $Provider;

    /**
     * @var string <p>BYOK实例ID</p>
     */
    public $ServiceProviderId;

    /**
     * @var string <p>BYOK名称</p>
     */
    public $ServiceProviderName;

    /**
     * @var integer <p>绑定的指定模型组内BYOK实例的调度优先级</p><p>取值范围[0,2]，优先级随数值增大而降低。</p>
     */
    public $Order;

    /**
     * @var integer <p>绑定的指定模型组Order相同层级内BYOK实例的调度权重</p>
     */
    public $Weight;

    /**
     * @var string <p>CMR实例-BYOK实例的模型调度绑定关系状态</p><p>枚举值：</p><ul><li>Configuring： 变配中</li><li>ConfigureFailed： 变配失败</li><li>Deleting： 删除中</li><li>Provisioning： 创建中</li><li>Active： 正常可用</li><li>ProvisionFailed： 创建失败</li><li>DeletionFailed： 删除失败</li></ul>
     */
    public $AssociationStatus;

    /**
     * @param string $AccessType <p>BYOK类型</p>
     * @param array $InputModalities <p>单个byok实例下该模型可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul>
     * @param string $Protocol <p>模型协议</p>
     * @param string $Provider <p>BYOK的所属厂商</p>
     * @param string $ServiceProviderId <p>BYOK实例ID</p>
     * @param string $ServiceProviderName <p>BYOK名称</p>
     * @param integer $Order <p>绑定的指定模型组内BYOK实例的调度优先级</p><p>取值范围[0,2]，优先级随数值增大而降低。</p>
     * @param integer $Weight <p>绑定的指定模型组Order相同层级内BYOK实例的调度权重</p>
     * @param string $AssociationStatus <p>CMR实例-BYOK实例的模型调度绑定关系状态</p><p>枚举值：</p><ul><li>Configuring： 变配中</li><li>ConfigureFailed： 变配失败</li><li>Deleting： 删除中</li><li>Provisioning： 创建中</li><li>Active： 正常可用</li><li>ProvisionFailed： 创建失败</li><li>DeletionFailed： 删除失败</li></ul>
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("InputModalities",$param) and $param["InputModalities"] !== null) {
            $this->InputModalities = $param["InputModalities"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("ServiceProviderName",$param) and $param["ServiceProviderName"] !== null) {
            $this->ServiceProviderName = $param["ServiceProviderName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("AssociationStatus",$param) and $param["AssociationStatus"] !== null) {
            $this->AssociationStatus = $param["AssociationStatus"];
        }
    }
}

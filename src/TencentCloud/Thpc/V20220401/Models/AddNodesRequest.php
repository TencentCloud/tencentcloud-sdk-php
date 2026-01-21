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
namespace TencentCloud\Thpc\V20220401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddNodes请求参数结构体
 *
 * @method Placement getPlacement() 获取<p>集群中实例所在的位置。</p>
 * @method void setPlacement(Placement $Placement) 设置<p>集群中实例所在的位置。</p>
 * @method string getClusterId() 获取<p>集群ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID。</p>
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取<p>私有网络相关信息配置。</p>
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置<p>私有网络相关信息配置。</p>
 * @method integer getCount() 获取<p>添加节点数量。</p>
 * @method void setCount(integer $Count) 设置<p>添加节点数量。</p>
 * @method string getImageId() 获取<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前仅支持公有镜像和特定自定义镜像。</p>
 * @method void setImageId(string $ImageId) 设置<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前仅支持公有镜像和特定自定义镜像。</p>
 * @method string getInstanceChargeType() 获取<p>节点<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>SPOTPAID：竞价付费<br>默认值：POSTPAID_BY_HOUR。</li></p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>节点<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>SPOTPAID：竞价付费<br>默认值：POSTPAID_BY_HOUR。</li></p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。</p>
 * @method string getInstanceType() 获取<p>节点机型。不同实例机型指定了不同的资源规格。<br><li>具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。</li></p>
 * @method void setInstanceType(string $InstanceType) 设置<p>节点机型。不同实例机型指定了不同的资源规格。<br><li>具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。</li></p>
 * @method array getSystemDisk() 获取<p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
 * @method void setSystemDisk(array $SystemDisk) 设置<p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
 * @method array getDataDisks() 获取<p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
 * @method void setDataDisks(array $DataDisks) 设置<p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
 * @method InternetAccessible getInternetAccessible() 获取<p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置<p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
 * @method string getInstanceName() 获取<p>节点显示名称。<br>不指定节点显示名称则默认显示‘未命名’。<br>最多支持60个字符。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>节点显示名称。<br>不指定节点显示名称则默认显示‘未命名’。<br>最多支持60个字符。</p>
 * @method LoginSettings getLoginSettings() 获取<p>集群登录设置。</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>集群登录设置。</p>
 * @method array getSecurityGroupIds() 获取<p>集群中实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>集群中实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method string getQueueName() 获取<p>队列名称。不指定则为默认队列。<li>SLURM默认队列为：compute。</li></p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称。不指定则为默认队列。<li>SLURM默认队列为：compute。</li></p>
 * @method string getNodeRole() 获取<p>添加节点角色。默认值：Compute<br><li>Compute：计算节点。</li><br><li>Login：登录节点。</li></p>
 * @method void setNodeRole(string $NodeRole) 设置<p>添加节点角色。默认值：Compute<br><li>Compute：计算节点。</li><br><li>Login：登录节点。</li></p>
 * @method boolean getDryRun() 获取<p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
 * @method string getNodeType() 获取<p>添加节点类型。默认取值：STATIC。<li>STATIC：静态节点，不会参与弹性伸缩流程。</li><li>DYNAMIC：弹性节点，会被弹性缩容的节点。管控节点和登录节点不支持此参数。</li></p>
 * @method void setNodeType(string $NodeType) 设置<p>添加节点类型。默认取值：STATIC。<li>STATIC：静态节点，不会参与弹性伸缩流程。</li><li>DYNAMIC：弹性节点，会被弹性缩容的节点。管控节点和登录节点不支持此参数。</li></p>
 */
class AddNodesRequest extends AbstractModel
{
    /**
     * @var Placement <p>集群中实例所在的位置。</p>
     */
    public $Placement;

    /**
     * @var string <p>集群ID。</p>
     */
    public $ClusterId;

    /**
     * @var VirtualPrivateCloud <p>私有网络相关信息配置。</p>
     */
    public $VirtualPrivateCloud;

    /**
     * @var integer <p>添加节点数量。</p>
     */
    public $Count;

    /**
     * @var string <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前仅支持公有镜像和特定自定义镜像。</p>
     */
    public $ImageId;

    /**
     * @var string <p>节点<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>SPOTPAID：竞价付费<br>默认值：POSTPAID_BY_HOUR。</li></p>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var string <p>节点机型。不同实例机型指定了不同的资源规格。<br><li>具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。</li></p>
     */
    public $InstanceType;

    /**
     * @var array <p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
     */
    public $DataDisks;

    /**
     * @var InternetAccessible <p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
     */
    public $InternetAccessible;

    /**
     * @var string <p>节点显示名称。<br>不指定节点显示名称则默认显示‘未命名’。<br>最多支持60个字符。</p>
     */
    public $InstanceName;

    /**
     * @var LoginSettings <p>集群登录设置。</p>
     */
    public $LoginSettings;

    /**
     * @var array <p>集群中实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     */
    public $ClientToken;

    /**
     * @var string <p>队列名称。不指定则为默认队列。<li>SLURM默认队列为：compute。</li></p>
     */
    public $QueueName;

    /**
     * @var string <p>添加节点角色。默认值：Compute<br><li>Compute：计算节点。</li><br><li>Login：登录节点。</li></p>
     */
    public $NodeRole;

    /**
     * @var boolean <p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
     */
    public $DryRun;

    /**
     * @var string <p>添加节点类型。默认取值：STATIC。<li>STATIC：静态节点，不会参与弹性伸缩流程。</li><li>DYNAMIC：弹性节点，会被弹性缩容的节点。管控节点和登录节点不支持此参数。</li></p>
     */
    public $NodeType;

    /**
     * @param Placement $Placement <p>集群中实例所在的位置。</p>
     * @param string $ClusterId <p>集群ID。</p>
     * @param VirtualPrivateCloud $VirtualPrivateCloud <p>私有网络相关信息配置。</p>
     * @param integer $Count <p>添加节点数量。</p>
     * @param string $ImageId <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前仅支持公有镜像和特定自定义镜像。</p>
     * @param string $InstanceChargeType <p>节点<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>SPOTPAID：竞价付费<br>默认值：POSTPAID_BY_HOUR。</li></p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。</p>
     * @param string $InstanceType <p>节点机型。不同实例机型指定了不同的资源规格。<br><li>具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。</li></p>
     * @param array $SystemDisk <p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
     * @param array $DataDisks <p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
     * @param InternetAccessible $InternetAccessible <p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
     * @param string $InstanceName <p>节点显示名称。<br>不指定节点显示名称则默认显示‘未命名’。<br>最多支持60个字符。</p>
     * @param LoginSettings $LoginSettings <p>集群登录设置。</p>
     * @param array $SecurityGroupIds <p>集群中实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     * @param string $QueueName <p>队列名称。不指定则为默认队列。<li>SLURM默认队列为：compute。</li></p>
     * @param string $NodeRole <p>添加节点角色。默认值：Compute<br><li>Compute：计算节点。</li><br><li>Login：登录节点。</li></p>
     * @param boolean $DryRun <p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
     * @param string $NodeType <p>添加节点类型。默认取值：STATIC。<li>STATIC：静态节点，不会参与弹性伸缩流程。</li><li>DYNAMIC：弹性节点，会被弹性缩容的节点。管控节点和登录节点不支持此参数。</li></p>
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = [];
            foreach ($param["SystemDisk"] as $key => $value){
                $obj = new SystemDisk();
                $obj->deserialize($value);
                array_push($this->SystemDisk, $obj);
            }
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}

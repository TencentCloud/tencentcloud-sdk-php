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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachNodes请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method array getResourceSet() 获取<p>节点的实例id列表</p>
 * @method void setResourceSet(array $ResourceSet) 设置<p>节点的实例id列表</p>
 * @method string getQueueName() 获取<p>队列名称。不指定则为默认队列：<br>SLURM默认队列为：compute。</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称。不指定则为默认队列：<br>SLURM默认队列为：compute。</p>
 * @method string getImageId() 获取<p>指定有效的镜像ID，格式形如img-xxx。目前仅支持公有镜像和特定自定义镜像。如不指定，则该字段是默认镜像。</p>
 * @method void setImageId(string $ImageId) 设置<p>指定有效的镜像ID，格式形如img-xxx。目前仅支持公有镜像和特定自定义镜像。如不指定，则该字段是默认镜像。</p>
 * @method string getResourceType() 获取<p>要新增节点的资源类型。<li>CVM：CVM实例类型资源</li><li>WORKSPACE：工作空间类型实例资源</li>默认值：CVM。</p>
 * @method void setResourceType(string $ResourceType) 设置<p>要新增节点的资源类型。<li>CVM：CVM实例类型资源</li><li>WORKSPACE：工作空间类型实例资源</li>默认值：CVM。</p>
 * @method string getUserData() 获取<p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
 * @method void setUserData(string $UserData) 设置<p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
 * @method boolean getSkipResetInstance() 获取<p>控制实例加入集群是否跳过重装系统</p><p>默认值：False</p>
 * @method void setSkipResetInstance(boolean $SkipResetInstance) 设置<p>控制实例加入集群是否跳过重装系统</p><p>默认值：False</p>
 */
class AttachNodesRequest extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var array <p>节点的实例id列表</p>
     */
    public $ResourceSet;

    /**
     * @var string <p>队列名称。不指定则为默认队列：<br>SLURM默认队列为：compute。</p>
     */
    public $QueueName;

    /**
     * @var string <p>指定有效的镜像ID，格式形如img-xxx。目前仅支持公有镜像和特定自定义镜像。如不指定，则该字段是默认镜像。</p>
     */
    public $ImageId;

    /**
     * @var string <p>要新增节点的资源类型。<li>CVM：CVM实例类型资源</li><li>WORKSPACE：工作空间类型实例资源</li>默认值：CVM。</p>
     */
    public $ResourceType;

    /**
     * @var string <p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
     */
    public $UserData;

    /**
     * @var boolean <p>控制实例加入集群是否跳过重装系统</p><p>默认值：False</p>
     */
    public $SkipResetInstance;

    /**
     * @param string $ClusterId <p>集群id</p>
     * @param array $ResourceSet <p>节点的实例id列表</p>
     * @param string $QueueName <p>队列名称。不指定则为默认队列：<br>SLURM默认队列为：compute。</p>
     * @param string $ImageId <p>指定有效的镜像ID，格式形如img-xxx。目前仅支持公有镜像和特定自定义镜像。如不指定，则该字段是默认镜像。</p>
     * @param string $ResourceType <p>要新增节点的资源类型。<li>CVM：CVM实例类型资源</li><li>WORKSPACE：工作空间类型实例资源</li>默认值：CVM。</p>
     * @param string $UserData <p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
     * @param boolean $SkipResetInstance <p>控制实例加入集群是否跳过重装系统</p><p>默认值：False</p>
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

        if (array_key_exists("ResourceSet",$param) and $param["ResourceSet"] !== null) {
            $this->ResourceSet = $param["ResourceSet"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("SkipResetInstance",$param) and $param["SkipResetInstance"] !== null) {
            $this->SkipResetInstance = $param["SkipResetInstance"];
        }
    }
}

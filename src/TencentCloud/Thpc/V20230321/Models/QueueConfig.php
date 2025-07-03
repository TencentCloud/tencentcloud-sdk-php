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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩容队列配置。
 *
 * @method string getQueueName() 获取队列名称。
 * @method void setQueueName(string $QueueName) 设置队列名称。
 * @method integer getMinSize() 获取队列中弹性节点数量最小值。默认值：0。取值范围：0～200。
 * @method void setMinSize(integer $MinSize) 设置队列中弹性节点数量最小值。默认值：0。取值范围：0～200。
 * @method integer getMaxSize() 获取队列中弹性节点数量最大值。默认值：10。取值范围：0～200。
 * @method void setMaxSize(integer $MaxSize) 设置队列中弹性节点数量最大值。默认值：10。取值范围：0～200。
 * @method boolean getEnableAutoExpansion() 获取是否开启自动扩容。
 * @method void setEnableAutoExpansion(boolean $EnableAutoExpansion) 设置是否开启自动扩容。
 * @method boolean getEnableAutoShrink() 获取是否开启自动缩容。
 * @method void setEnableAutoShrink(boolean $EnableAutoShrink) 设置是否开启自动缩容。
 * @method string getImageId() 获取指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。目前仅支持公有镜和特定自定义镜像。
 * @method void setImageId(string $ImageId) 设置指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。目前仅支持公有镜和特定自定义镜像。
 * @method SystemDisk getSystemDisk() 获取节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 * @method array getDataDisks() 获取节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。
 * @method void setDataDisks(array $DataDisks) 设置节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。
 * @method InternetAccessible getInternetAccessible() 获取公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
 * @method array getExpansionNodeConfigs() 获取扩容节点配置信息。
 * @method void setExpansionNodeConfigs(array $ExpansionNodeConfigs) 设置扩容节点配置信息。
 * @method integer getDesiredIdleNodeCapacity() 获取队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。
 * @method void setDesiredIdleNodeCapacity(integer $DesiredIdleNodeCapacity) 设置队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。
 * @method integer getDesiredNodeCount() 获取队列中期望的总节点数。
 * @method void setDesiredNodeCount(integer $DesiredNodeCount) 设置队列中期望的总节点数。
 * @method integer getScaleOutRatio() 获取扩容比例。默认值：100。取值范围：1～100。
如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。
 * @method void setScaleOutRatio(integer $ScaleOutRatio) 设置扩容比例。默认值：100。取值范围：1～100。
如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。
 * @method integer getScaleOutNodeThreshold() 获取比例扩容阈值。默认值：0。取值范围：0～200。
当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。
此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。
 * @method void setScaleOutNodeThreshold(integer $ScaleOutNodeThreshold) 设置比例扩容阈值。默认值：0。取值范围：0～200。
当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。
此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。
 * @method integer getMaxNodesPerCycle() 获取每轮扩容最大节点个数。默认值：100。取值范围：1～100。
 * @method void setMaxNodesPerCycle(integer $MaxNodesPerCycle) 设置每轮扩容最大节点个数。默认值：100。取值范围：1～100。
 * @method integer getScaleUpMemRatio() 获取扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br/>
针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，

- 当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。
- 当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。
 * @method void setScaleUpMemRatio(integer $ScaleUpMemRatio) 设置扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br/>
针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，

- 当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。
- 当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。
 * @method EnhancedService getEnhancedService() 获取增强服务。通过该参数可以指定是否开启云安全、腾讯云可观测平台等服务。若不指定该参数，则默认开启腾讯云可观测平台、云安全服务、自动化助手服务。
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置增强服务。通过该参数可以指定是否开启云安全、腾讯云可观测平台等服务。若不指定该参数，则默认开启腾讯云可观测平台、云安全服务、自动化助手服务。
 */
class QueueConfig extends AbstractModel
{
    /**
     * @var string 队列名称。
     */
    public $QueueName;

    /**
     * @var integer 队列中弹性节点数量最小值。默认值：0。取值范围：0～200。
     */
    public $MinSize;

    /**
     * @var integer 队列中弹性节点数量最大值。默认值：10。取值范围：0～200。
     */
    public $MaxSize;

    /**
     * @var boolean 是否开启自动扩容。
     */
    public $EnableAutoExpansion;

    /**
     * @var boolean 是否开启自动缩容。
     */
    public $EnableAutoShrink;

    /**
     * @var string 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。目前仅支持公有镜和特定自定义镜像。
     */
    public $ImageId;

    /**
     * @var SystemDisk 节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
     */
    public $SystemDisk;

    /**
     * @var array 节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。
     */
    public $DataDisks;

    /**
     * @var InternetAccessible 公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
     */
    public $InternetAccessible;

    /**
     * @var array 扩容节点配置信息。
     */
    public $ExpansionNodeConfigs;

    /**
     * @var integer 队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。
     */
    public $DesiredIdleNodeCapacity;

    /**
     * @var integer 队列中期望的总节点数。
     */
    public $DesiredNodeCount;

    /**
     * @var integer 扩容比例。默认值：100。取值范围：1～100。
如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。
     */
    public $ScaleOutRatio;

    /**
     * @var integer 比例扩容阈值。默认值：0。取值范围：0～200。
当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。
此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。
     */
    public $ScaleOutNodeThreshold;

    /**
     * @var integer 每轮扩容最大节点个数。默认值：100。取值范围：1～100。
     */
    public $MaxNodesPerCycle;

    /**
     * @var integer 扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br/>
针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，

- 当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。
- 当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。
     */
    public $ScaleUpMemRatio;

    /**
     * @var EnhancedService 增强服务。通过该参数可以指定是否开启云安全、腾讯云可观测平台等服务。若不指定该参数，则默认开启腾讯云可观测平台、云安全服务、自动化助手服务。
     */
    public $EnhancedService;

    /**
     * @param string $QueueName 队列名称。
     * @param integer $MinSize 队列中弹性节点数量最小值。默认值：0。取值范围：0～200。
     * @param integer $MaxSize 队列中弹性节点数量最大值。默认值：10。取值范围：0～200。
     * @param boolean $EnableAutoExpansion 是否开启自动扩容。
     * @param boolean $EnableAutoShrink 是否开启自动缩容。
     * @param string $ImageId 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。目前仅支持公有镜和特定自定义镜像。
     * @param SystemDisk $SystemDisk 节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
     * @param array $DataDisks 节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。
     * @param InternetAccessible $InternetAccessible 公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
     * @param array $ExpansionNodeConfigs 扩容节点配置信息。
     * @param integer $DesiredIdleNodeCapacity 队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。
     * @param integer $DesiredNodeCount 队列中期望的总节点数。
     * @param integer $ScaleOutRatio 扩容比例。默认值：100。取值范围：1～100。
如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。
     * @param integer $ScaleOutNodeThreshold 比例扩容阈值。默认值：0。取值范围：0～200。
当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。
此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。
     * @param integer $MaxNodesPerCycle 每轮扩容最大节点个数。默认值：100。取值范围：1～100。
     * @param integer $ScaleUpMemRatio 扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br/>
针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，

- 当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。
- 当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。
     * @param EnhancedService $EnhancedService 增强服务。通过该参数可以指定是否开启云安全、腾讯云可观测平台等服务。若不指定该参数，则默认开启腾讯云可观测平台、云安全服务、自动化助手服务。
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("EnableAutoExpansion",$param) and $param["EnableAutoExpansion"] !== null) {
            $this->EnableAutoExpansion = $param["EnableAutoExpansion"];
        }

        if (array_key_exists("EnableAutoShrink",$param) and $param["EnableAutoShrink"] !== null) {
            $this->EnableAutoShrink = $param["EnableAutoShrink"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
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

        if (array_key_exists("ExpansionNodeConfigs",$param) and $param["ExpansionNodeConfigs"] !== null) {
            $this->ExpansionNodeConfigs = [];
            foreach ($param["ExpansionNodeConfigs"] as $key => $value){
                $obj = new ExpansionNodeConfig();
                $obj->deserialize($value);
                array_push($this->ExpansionNodeConfigs, $obj);
            }
        }

        if (array_key_exists("DesiredIdleNodeCapacity",$param) and $param["DesiredIdleNodeCapacity"] !== null) {
            $this->DesiredIdleNodeCapacity = $param["DesiredIdleNodeCapacity"];
        }

        if (array_key_exists("DesiredNodeCount",$param) and $param["DesiredNodeCount"] !== null) {
            $this->DesiredNodeCount = $param["DesiredNodeCount"];
        }

        if (array_key_exists("ScaleOutRatio",$param) and $param["ScaleOutRatio"] !== null) {
            $this->ScaleOutRatio = $param["ScaleOutRatio"];
        }

        if (array_key_exists("ScaleOutNodeThreshold",$param) and $param["ScaleOutNodeThreshold"] !== null) {
            $this->ScaleOutNodeThreshold = $param["ScaleOutNodeThreshold"];
        }

        if (array_key_exists("MaxNodesPerCycle",$param) and $param["MaxNodesPerCycle"] !== null) {
            $this->MaxNodesPerCycle = $param["MaxNodesPerCycle"];
        }

        if (array_key_exists("ScaleUpMemRatio",$param) and $param["ScaleUpMemRatio"] !== null) {
            $this->ScaleUpMemRatio = $param["ScaleUpMemRatio"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }
    }
}

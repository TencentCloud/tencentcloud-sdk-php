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
 * 扩容队列配置。
 *
 * @method string getQueueName() 获取<p>队列名称。</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称。</p>
 * @method integer getMinSize() 获取<p>队列中弹性节点数量最小值。默认值：0。取值范围：0～200。</p>
 * @method void setMinSize(integer $MinSize) 设置<p>队列中弹性节点数量最小值。默认值：0。取值范围：0～200。</p>
 * @method integer getMaxSize() 获取<p>队列中弹性节点数量最大值。默认值：10。取值范围：0～200。</p>
 * @method void setMaxSize(integer $MaxSize) 设置<p>队列中弹性节点数量最大值。默认值：10。取值范围：0～200。</p>
 * @method boolean getEnableAutoExpansion() 获取<p>是否开启自动扩容。</p>
 * @method void setEnableAutoExpansion(boolean $EnableAutoExpansion) 设置<p>是否开启自动扩容。</p>
 * @method boolean getEnableAutoShrink() 获取<p>是否开启自动缩容。</p>
 * @method void setEnableAutoShrink(boolean $EnableAutoShrink) 设置<p>是否开启自动缩容。</p>
 * @method string getImageId() 获取<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前仅支持公有镜和特定自定义镜像。</p>
 * @method void setImageId(string $ImageId) 设置<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前仅支持公有镜和特定自定义镜像。</p>
 * @method SystemDisk getSystemDisk() 获取<p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置<p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
 * @method array getDataDisks() 获取<p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
 * @method void setDataDisks(array $DataDisks) 设置<p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
 * @method InternetAccessible getInternetAccessible() 获取<p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置<p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
 * @method array getExpansionNodeConfigs() 获取<p>扩容节点配置信息。</p>
 * @method void setExpansionNodeConfigs(array $ExpansionNodeConfigs) 设置<p>扩容节点配置信息。</p>
 * @method integer getDesiredIdleNodeCapacity() 获取<p>队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。</p>
 * @method void setDesiredIdleNodeCapacity(integer $DesiredIdleNodeCapacity) 设置<p>队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。</p>
 * @method integer getDesiredNodeCount() 获取<p>队列中期望的总节点数。</p>
 * @method void setDesiredNodeCount(integer $DesiredNodeCount) 设置<p>队列中期望的总节点数。</p>
 * @method integer getScaleOutRatio() 获取<p>扩容比例。默认值：100。取值范围：1～100。<br>如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。</p>
 * @method void setScaleOutRatio(integer $ScaleOutRatio) 设置<p>扩容比例。默认值：100。取值范围：1～100。<br>如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。</p>
 * @method integer getScaleOutNodeThreshold() 获取<p>比例扩容阈值。默认值：0。取值范围：0～200。<br>当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。<br>此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。</p>
 * @method void setScaleOutNodeThreshold(integer $ScaleOutNodeThreshold) 设置<p>比例扩容阈值。默认值：0。取值范围：0～200。<br>当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。<br>此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。</p>
 * @method integer getMaxNodesPerCycle() 获取<p>每轮扩容最大节点个数。默认值：100。取值范围：1～100。</p>
 * @method void setMaxNodesPerCycle(integer $MaxNodesPerCycle) 设置<p>每轮扩容最大节点个数。默认值：100。取值范围：1～100。</p>
 * @method integer getScaleUpMemRatio() 获取<p>扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br><br>针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，</p><ul><li>当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。</li><li>当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。</li></ul>
 * @method void setScaleUpMemRatio(integer $ScaleUpMemRatio) 设置<p>扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br><br>针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，</p><ul><li>当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。</li><li>当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。</li></ul>
 * @method EnhancedService getEnhancedService() 获取<p>增强服务。通过该参数可以指定是否开启云安全、腾讯云可观测平台等服务。若不指定该参数，则默认开启腾讯云可观测平台、云安全服务、自动化助手服务。</p>
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置<p>增强服务。通过该参数可以指定是否开启云安全、腾讯云可观测平台等服务。若不指定该参数，则默认开启腾讯云可观测平台、云安全服务、自动化助手服务。</p>
 * @method array getLaunchTemplateIds() 获取<p>扩容实例模板，可以在cvm侧进行设置</p>
 * @method void setLaunchTemplateIds(array $LaunchTemplateIds) 设置<p>扩容实例模板，可以在cvm侧进行设置</p>
 */
class QueueConfig extends AbstractModel
{
    /**
     * @var string <p>队列名称。</p>
     */
    public $QueueName;

    /**
     * @var integer <p>队列中弹性节点数量最小值。默认值：0。取值范围：0～200。</p>
     */
    public $MinSize;

    /**
     * @var integer <p>队列中弹性节点数量最大值。默认值：10。取值范围：0～200。</p>
     */
    public $MaxSize;

    /**
     * @var boolean <p>是否开启自动扩容。</p>
     */
    public $EnableAutoExpansion;

    /**
     * @var boolean <p>是否开启自动缩容。</p>
     */
    public $EnableAutoShrink;

    /**
     * @var string <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前仅支持公有镜和特定自定义镜像。</p>
     */
    public $ImageId;

    /**
     * @var SystemDisk <p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
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
     * @var array <p>扩容节点配置信息。</p>
     */
    public $ExpansionNodeConfigs;

    /**
     * @var integer <p>队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。</p>
     */
    public $DesiredIdleNodeCapacity;

    /**
     * @var integer <p>队列中期望的总节点数。</p>
     */
    public $DesiredNodeCount;

    /**
     * @var integer <p>扩容比例。默认值：100。取值范围：1～100。<br>如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。</p>
     */
    public $ScaleOutRatio;

    /**
     * @var integer <p>比例扩容阈值。默认值：0。取值范围：0～200。<br>当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。<br>此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。</p>
     */
    public $ScaleOutNodeThreshold;

    /**
     * @var integer <p>每轮扩容最大节点个数。默认值：100。取值范围：1～100。</p>
     */
    public $MaxNodesPerCycle;

    /**
     * @var integer <p>扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br><br>针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，</p><ul><li>当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。</li><li>当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。</li></ul>
     */
    public $ScaleUpMemRatio;

    /**
     * @var EnhancedService <p>增强服务。通过该参数可以指定是否开启云安全、腾讯云可观测平台等服务。若不指定该参数，则默认开启腾讯云可观测平台、云安全服务、自动化助手服务。</p>
     */
    public $EnhancedService;

    /**
     * @var array <p>扩容实例模板，可以在cvm侧进行设置</p>
     */
    public $LaunchTemplateIds;

    /**
     * @param string $QueueName <p>队列名称。</p>
     * @param integer $MinSize <p>队列中弹性节点数量最小值。默认值：0。取值范围：0～200。</p>
     * @param integer $MaxSize <p>队列中弹性节点数量最大值。默认值：10。取值范围：0～200。</p>
     * @param boolean $EnableAutoExpansion <p>是否开启自动扩容。</p>
     * @param boolean $EnableAutoShrink <p>是否开启自动缩容。</p>
     * @param string $ImageId <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前仅支持公有镜和特定自定义镜像。</p>
     * @param SystemDisk $SystemDisk <p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
     * @param array $DataDisks <p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
     * @param InternetAccessible $InternetAccessible <p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
     * @param array $ExpansionNodeConfigs <p>扩容节点配置信息。</p>
     * @param integer $DesiredIdleNodeCapacity <p>队列中期望的空闲节点数量（包含弹性节点和静态节点）。默认值：0。队列中，处于空闲状态的节点小于此值，集群会扩容弹性节点；处于空闲状态的节点大于此值，集群会缩容弹性节点。</p>
     * @param integer $DesiredNodeCount <p>队列中期望的总节点数。</p>
     * @param integer $ScaleOutRatio <p>扩容比例。默认值：100。取值范围：1～100。<br>如果扩容比例为50，那么每轮只会扩容当前作业负载所需的50%数量的节点。</p>
     * @param integer $ScaleOutNodeThreshold <p>比例扩容阈值。默认值：0。取值范围：0～200。<br>当作业负载需要扩容节点数量大于此值，当前扩容轮次按照ScaleOutRatio配置的比例进行扩容。当作业负载需要扩容节点数量小于此值，当前扩容轮次扩容当前作业负载所需数量的节点。<br>此参数配合ScaleOutRatio参数进行使用，用于比例扩容场景下，在作业负载所需节点数量较小时，加快收敛速度。</p>
     * @param integer $MaxNodesPerCycle <p>每轮扩容最大节点个数。默认值：100。取值范围：1～100。</p>
     * @param integer $ScaleUpMemRatio <p>扩容过程中，作业的内存在匹配实例机型时增大比例（不会影响作业提交的内存大小，只影响匹配计算过程）。<br><br>针对场景：由于实例机型的总内存会大于实例内部的可用内存，16GB内存规格的实例，实例操作系统内的可用内存只有约14.9GB内存。假设此时提交一个需要15GB内存的作业，</p><ul><li>当ScaleUpMemRatio=0时，会匹配到16GB内存规格的实例,但是由于操作系统内的可用内存为14.9GB小于作业所需的15GB，扩容出来的实例作业无法运行起来。</li><li>当ScaleUpMemRatio=10时，匹配实例规格会按照15*(1+10%)=16.5GB来进行实例规格匹配，则不会匹配到16GB的实例，而是更大内存规格的实例来保证作业能够被运行起来。</li></ul>
     * @param EnhancedService $EnhancedService <p>增强服务。通过该参数可以指定是否开启云安全、腾讯云可观测平台等服务。若不指定该参数，则默认开启腾讯云可观测平台、云安全服务、自动化助手服务。</p>
     * @param array $LaunchTemplateIds <p>扩容实例模板，可以在cvm侧进行设置</p>
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

        if (array_key_exists("LaunchTemplateIds",$param) and $param["LaunchTemplateIds"] !== null) {
            $this->LaunchTemplateIds = $param["LaunchTemplateIds"];
        }
    }
}

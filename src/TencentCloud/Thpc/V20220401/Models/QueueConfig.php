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
 * 扩容队列配置。
 *
 * @method string getQueueName() 获取<p>队列名称。</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称。</p>
 * @method integer getMinSize() 获取<p>队列中弹性节点数量最小值。取值范围0～200。</p>
 * @method void setMinSize(integer $MinSize) 设置<p>队列中弹性节点数量最小值。取值范围0～200。</p>
 * @method integer getMaxSize() 获取<p>队列中弹性节点数量最大值。取值范围0～200。</p>
 * @method void setMaxSize(integer $MaxSize) 设置<p>队列中弹性节点数量最大值。取值范围0～200。</p>
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
     * @var integer <p>队列中弹性节点数量最小值。取值范围0～200。</p>
     */
    public $MinSize;

    /**
     * @var integer <p>队列中弹性节点数量最大值。取值范围0～200。</p>
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
     * @var array <p>扩容实例模板，可以在cvm侧进行设置</p>
     */
    public $LaunchTemplateIds;

    /**
     * @param string $QueueName <p>队列名称。</p>
     * @param integer $MinSize <p>队列中弹性节点数量最小值。取值范围0～200。</p>
     * @param integer $MaxSize <p>队列中弹性节点数量最大值。取值范围0～200。</p>
     * @param boolean $EnableAutoExpansion <p>是否开启自动扩容。</p>
     * @param boolean $EnableAutoShrink <p>是否开启自动缩容。</p>
     * @param string $ImageId <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前仅支持公有镜和特定自定义镜像。</p>
     * @param SystemDisk $SystemDisk <p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
     * @param array $DataDisks <p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
     * @param InternetAccessible $InternetAccessible <p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
     * @param array $ExpansionNodeConfigs <p>扩容节点配置信息。</p>
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

        if (array_key_exists("LaunchTemplateIds",$param) and $param["LaunchTemplateIds"] !== null) {
            $this->LaunchTemplateIds = $param["LaunchTemplateIds"];
        }
    }
}

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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMetricConfig请求参数结构体
 *
 * @method string getTopicId() 获取指标日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
 * @method void setTopicId(string $TopicId) 设置指标日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
 * @method integer getSource() 获取采集配置来源。支持 ：`0`、`1`
- 0:自建k8s
- 1:TKE
 * @method void setSource(integer $Source) 设置采集配置来源。支持 ：`0`、`1`
- 0:自建k8s
- 1:TKE
 * @method array getGroupIds() 获取机器组id。
 * @method void setGroupIds(array $GroupIds) 设置机器组id。
 * @method integer getType() 获取监控类型。支持 ：`0`、`1`，不支持修改
- 0:基础监控
- 1:自定义监控, 
 * @method void setType(integer $Type) 设置监控类型。支持 ：`0`、`1`，不支持修改
- 0:基础监控
- 1:自定义监控, 
 * @method integer getFlag() 获取采集配置方式。支持 ：`0`、`1`，不支持修改
- 0:普通配置方式，Type字段只能为：``1`
- 1:YAML导入方式， Type 可以是：`0`或者`1`
 * @method void setFlag(integer $Flag) 设置采集配置方式。支持 ：`0`、`1`，不支持修改
- 0:普通配置方式，Type字段只能为：``1`
- 1:YAML导入方式， Type 可以是：`0`或者`1`
 * @method string getName() 获取名称：长度不超过253字符，校验格式  ` [a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`。
 * @method void setName(string $Name) 设置名称：长度不超过253字符，校验格式  ` [a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`。
 * @method MetricSpec getSpec() 获取采集对象, Flag=0时生效
 * @method void setSpec(MetricSpec $Spec) 设置采集对象, Flag=0时生效
 * @method array getMetricRelabels() 获取标签处理, Flag=0时生效
 * @method void setMetricRelabels(array $MetricRelabels) 设置标签处理, Flag=0时生效
 * @method MetricConfigLabel getMetricLabel() 获取自定义元数据, Flag=0时生效
 * @method void setMetricLabel(MetricConfigLabel $MetricLabel) 设置自定义元数据, Flag=0时生效
 * @method string getScheme() 获取通信协议 http、https; Flag=0时生效
 * @method void setScheme(string $Scheme) 设置通信协议 http、https; Flag=0时生效
 * @method string getScrapeInterval() 获取采集频率,  Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
- 默认：60s
 * @method void setScrapeInterval(string $ScrapeInterval) 设置采集频率,  Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
- 默认：60s
 * @method string getScrapeTimeout() 获取采集超时时间， Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
- 默认：30s
 * @method void setScrapeTimeout(string $ScrapeTimeout) 设置采集超时时间， Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
- 默认：30s
 * @method boolean getHonorLabels() 获取Prometheus如何处理标签之间的冲突。当Flag=0时生效，支持`true`,`false`
- `false`:配置数据中冲突的标签重命名
- `true`:忽略冲突的服务器端标签
 * @method void setHonorLabels(boolean $HonorLabels) 设置Prometheus如何处理标签之间的冲突。当Flag=0时生效，支持`true`,`false`
- `false`:配置数据中冲突的标签重命名
- `true`:忽略冲突的服务器端标签
 * @method MetricYamlSpec getYamlSpec() 获取采集配置yaml格式字符串, Flag=1时必填
 * @method void setYamlSpec(MetricYamlSpec $YamlSpec) 设置采集配置yaml格式字符串, Flag=1时必填
 */
class CreateMetricConfigRequest extends AbstractModel
{
    /**
     * @var string 指标日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
     */
    public $TopicId;

    /**
     * @var integer 采集配置来源。支持 ：`0`、`1`
- 0:自建k8s
- 1:TKE
     */
    public $Source;

    /**
     * @var array 机器组id。
     */
    public $GroupIds;

    /**
     * @var integer 监控类型。支持 ：`0`、`1`，不支持修改
- 0:基础监控
- 1:自定义监控, 
     */
    public $Type;

    /**
     * @var integer 采集配置方式。支持 ：`0`、`1`，不支持修改
- 0:普通配置方式，Type字段只能为：``1`
- 1:YAML导入方式， Type 可以是：`0`或者`1`
     */
    public $Flag;

    /**
     * @var string 名称：长度不超过253字符，校验格式  ` [a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`。
     */
    public $Name;

    /**
     * @var MetricSpec 采集对象, Flag=0时生效
     */
    public $Spec;

    /**
     * @var array 标签处理, Flag=0时生效
     */
    public $MetricRelabels;

    /**
     * @var MetricConfigLabel 自定义元数据, Flag=0时生效
     */
    public $MetricLabel;

    /**
     * @var string 通信协议 http、https; Flag=0时生效
     */
    public $Scheme;

    /**
     * @var string 采集频率,  Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
- 默认：60s
     */
    public $ScrapeInterval;

    /**
     * @var string 采集超时时间， Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
- 默认：30s
     */
    public $ScrapeTimeout;

    /**
     * @var boolean Prometheus如何处理标签之间的冲突。当Flag=0时生效，支持`true`,`false`
- `false`:配置数据中冲突的标签重命名
- `true`:忽略冲突的服务器端标签
     */
    public $HonorLabels;

    /**
     * @var MetricYamlSpec 采集配置yaml格式字符串, Flag=1时必填
     */
    public $YamlSpec;

    /**
     * @param string $TopicId 指标日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
     * @param integer $Source 采集配置来源。支持 ：`0`、`1`
- 0:自建k8s
- 1:TKE
     * @param array $GroupIds 机器组id。
     * @param integer $Type 监控类型。支持 ：`0`、`1`，不支持修改
- 0:基础监控
- 1:自定义监控, 
     * @param integer $Flag 采集配置方式。支持 ：`0`、`1`，不支持修改
- 0:普通配置方式，Type字段只能为：``1`
- 1:YAML导入方式， Type 可以是：`0`或者`1`
     * @param string $Name 名称：长度不超过253字符，校验格式  ` [a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`。
     * @param MetricSpec $Spec 采集对象, Flag=0时生效
     * @param array $MetricRelabels 标签处理, Flag=0时生效
     * @param MetricConfigLabel $MetricLabel 自定义元数据, Flag=0时生效
     * @param string $Scheme 通信协议 http、https; Flag=0时生效
     * @param string $ScrapeInterval 采集频率,  Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
- 默认：60s
     * @param string $ScrapeTimeout 采集超时时间， Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
- 默认：30s
     * @param boolean $HonorLabels Prometheus如何处理标签之间的冲突。当Flag=0时生效，支持`true`,`false`
- `false`:配置数据中冲突的标签重命名
- `true`:忽略冲突的服务器端标签
     * @param MetricYamlSpec $YamlSpec 采集配置yaml格式字符串, Flag=1时必填
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new MetricSpec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("MetricRelabels",$param) and $param["MetricRelabels"] !== null) {
            $this->MetricRelabels = [];
            foreach ($param["MetricRelabels"] as $key => $value){
                $obj = new Relabeling();
                $obj->deserialize($value);
                array_push($this->MetricRelabels, $obj);
            }
        }

        if (array_key_exists("MetricLabel",$param) and $param["MetricLabel"] !== null) {
            $this->MetricLabel = new MetricConfigLabel();
            $this->MetricLabel->deserialize($param["MetricLabel"]);
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("ScrapeInterval",$param) and $param["ScrapeInterval"] !== null) {
            $this->ScrapeInterval = $param["ScrapeInterval"];
        }

        if (array_key_exists("ScrapeTimeout",$param) and $param["ScrapeTimeout"] !== null) {
            $this->ScrapeTimeout = $param["ScrapeTimeout"];
        }

        if (array_key_exists("HonorLabels",$param) and $param["HonorLabels"] !== null) {
            $this->HonorLabels = $param["HonorLabels"];
        }

        if (array_key_exists("YamlSpec",$param) and $param["YamlSpec"] !== null) {
            $this->YamlSpec = new MetricYamlSpec();
            $this->YamlSpec->deserialize($param["YamlSpec"]);
        }
    }
}

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
 * 指标采集配置
 *
 * @method string getConfigId() 获取采集配置id
 * @method void setConfigId(string $ConfigId) 设置采集配置id
 * @method array getTopicIds() 获取日志主题id。
 * @method void setTopicIds(array $TopicIds) 设置日志主题id。
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
- 0:普通配置方式，Type字段只能为：`1`
- 1:YAML导入方式，Type 可以是：`0`或者`1`
 * @method void setFlag(integer $Flag) 设置采集配置方式。支持 ：`0`、`1`，不支持修改
- 0:普通配置方式，Type字段只能为：`1`
- 1:YAML导入方式，Type 可以是：`0`或者`1`
 * @method string getName() 获取名称：长度不超过253字符，校验格式  ` [a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称：长度不超过253字符，校验格式  ` [a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetricSpec getSpec() 获取采集对象, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(MetricSpec $Spec) 设置采集对象, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMetricRelabels() 获取标签处理, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricRelabels(array $MetricRelabels) 设置标签处理, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetricConfigLabel getMetricLabel() 获取自定义元数据, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricLabel(MetricConfigLabel $MetricLabel) 设置自定义元数据, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheme() 获取通信协议 `http`、`https`；Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheme(string $Scheme) 设置通信协议 `http`、`https`；Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScrapeInterval() 获取采集频率,  Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScrapeInterval(string $ScrapeInterval) 设置采集频率,  Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScrapeTimeout() 获取采集超时时间。  Flag=0 && Type=1时生效
- format:`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScrapeTimeout(string $ScrapeTimeout) 设置采集超时时间。  Flag=0 && Type=1时生效
- format:`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`

注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHonorLabels() 获取Prometheus如何处理标签之间的冲突。当Flag=0生效，支持`true`,`false`

- `false`:配置数据中冲突的标签重命名
- `true`:忽略冲突的服务器端标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHonorLabels(boolean $HonorLabels) 设置Prometheus如何处理标签之间的冲突。当Flag=0生效，支持`true`,`false`

- `false`:配置数据中冲突的标签重命名
- `true`:忽略冲突的服务器端标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetricYamlSpec getYamlSpec() 获取采集配置yaml格式字符串, Flag=1时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYamlSpec(MetricYamlSpec $YamlSpec) 设置采集配置yaml格式字符串, Flag=1时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperate() 获取操作状态,0:应用,1:暂停
 * @method void setOperate(integer $Operate) 设置操作状态,0:应用,1:暂停
 * @method integer getCreateTime() 获取创建时间戳 秒级
 * @method void setCreateTime(integer $CreateTime) 设置创建时间戳 秒级
 * @method integer getUpdateTime() 获取更新时间戳 秒级
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间戳 秒级
 */
class MetricCollectConfig extends AbstractModel
{
    /**
     * @var string 采集配置id
     */
    public $ConfigId;

    /**
     * @var array 日志主题id。
     */
    public $TopicIds;

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
- 0:普通配置方式，Type字段只能为：`1`
- 1:YAML导入方式，Type 可以是：`0`或者`1`
     */
    public $Flag;

    /**
     * @var string 名称：长度不超过253字符，校验格式  ` [a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var MetricSpec 采集对象, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spec;

    /**
     * @var array 标签处理, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricRelabels;

    /**
     * @var MetricConfigLabel 自定义元数据, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricLabel;

    /**
     * @var string 通信协议 `http`、`https`；Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scheme;

    /**
     * @var string 采集频率,  Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScrapeInterval;

    /**
     * @var string 采集超时时间。  Flag=0 && Type=1时生效
- format:`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScrapeTimeout;

    /**
     * @var boolean Prometheus如何处理标签之间的冲突。当Flag=0生效，支持`true`,`false`

- `false`:配置数据中冲突的标签重命名
- `true`:忽略冲突的服务器端标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HonorLabels;

    /**
     * @var MetricYamlSpec 采集配置yaml格式字符串, Flag=1时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YamlSpec;

    /**
     * @var integer 操作状态,0:应用,1:暂停
     */
    public $Operate;

    /**
     * @var integer 创建时间戳 秒级
     */
    public $CreateTime;

    /**
     * @var integer 更新时间戳 秒级
     */
    public $UpdateTime;

    /**
     * @param string $ConfigId 采集配置id
     * @param array $TopicIds 日志主题id。
     * @param integer $Source 采集配置来源。支持 ：`0`、`1`
- 0:自建k8s
- 1:TKE
     * @param array $GroupIds 机器组id。
     * @param integer $Type 监控类型。支持 ：`0`、`1`，不支持修改

- 0:基础监控
- 1:自定义监控, 
     * @param integer $Flag 采集配置方式。支持 ：`0`、`1`，不支持修改
- 0:普通配置方式，Type字段只能为：`1`
- 1:YAML导入方式，Type 可以是：`0`或者`1`
     * @param string $Name 名称：长度不超过253字符，校验格式  ` [a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetricSpec $Spec 采集对象, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MetricRelabels 标签处理, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetricConfigLabel $MetricLabel 自定义元数据, Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scheme 通信协议 `http`、`https`；Flag=0时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScrapeInterval 采集频率,  Flag=0时生效
- 校验格式：`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScrapeTimeout 采集超时时间。  Flag=0 && Type=1时生效
- format:`^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`

注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HonorLabels Prometheus如何处理标签之间的冲突。当Flag=0生效，支持`true`,`false`

- `false`:配置数据中冲突的标签重命名
- `true`:忽略冲突的服务器端标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetricYamlSpec $YamlSpec 采集配置yaml格式字符串, Flag=1时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Operate 操作状态,0:应用,1:暂停
     * @param integer $CreateTime 创建时间戳 秒级
     * @param integer $UpdateTime 更新时间戳 秒级
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("TopicIds",$param) and $param["TopicIds"] !== null) {
            $this->TopicIds = $param["TopicIds"];
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

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

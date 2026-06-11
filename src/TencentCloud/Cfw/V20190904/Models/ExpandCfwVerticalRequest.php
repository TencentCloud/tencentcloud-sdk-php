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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExpandCfwVertical请求参数结构体
 *
 * @method string getFwType() 获取<p>nat：nat防火墙，ew：东西向防火墙</p>
 * @method void setFwType(string $FwType) 设置<p>nat：nat防火墙，ew：东西向防火墙</p>
 * @method integer getWidth() 获取<p>带宽值</p>
 * @method void setWidth(integer $Width) 设置<p>带宽值</p>
 * @method string getCfwInstance() 获取<p>防火墙实例id</p>
 * @method void setCfwInstance(string $CfwInstance) 设置<p>防火墙实例id</p>
 * @method integer getElasticSwitch() 获取<p>弹性开关 1打开 0 关闭</p>
 * @method void setElasticSwitch(integer $ElasticSwitch) 设置<p>弹性开关 1打开 0 关闭</p>
 * @method integer getElasticBandwidth() 获取<p>弹性带宽上限，单位Mbps</p>
 * @method void setElasticBandwidth(integer $ElasticBandwidth) 设置<p>弹性带宽上限，单位Mbps</p>
 * @method array getTags() 获取<p>按量计费标签</p>
 * @method void setTags(array $Tags) 设置<p>按量计费标签</p>
 * @method integer getElasticTrafficSwitch() 获取<p>按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 * @method void setElasticTrafficSwitch(integer $ElasticTrafficSwitch) 设置<p>按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 */
class ExpandCfwVerticalRequest extends AbstractModel
{
    /**
     * @var string <p>nat：nat防火墙，ew：东西向防火墙</p>
     */
    public $FwType;

    /**
     * @var integer <p>带宽值</p>
     */
    public $Width;

    /**
     * @var string <p>防火墙实例id</p>
     */
    public $CfwInstance;

    /**
     * @var integer <p>弹性开关 1打开 0 关闭</p>
     */
    public $ElasticSwitch;

    /**
     * @var integer <p>弹性带宽上限，单位Mbps</p>
     */
    public $ElasticBandwidth;

    /**
     * @var array <p>按量计费标签</p>
     */
    public $Tags;

    /**
     * @var integer <p>按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
     */
    public $ElasticTrafficSwitch;

    /**
     * @param string $FwType <p>nat：nat防火墙，ew：东西向防火墙</p>
     * @param integer $Width <p>带宽值</p>
     * @param string $CfwInstance <p>防火墙实例id</p>
     * @param integer $ElasticSwitch <p>弹性开关 1打开 0 关闭</p>
     * @param integer $ElasticBandwidth <p>弹性带宽上限，单位Mbps</p>
     * @param array $Tags <p>按量计费标签</p>
     * @param integer $ElasticTrafficSwitch <p>按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
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
        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }

        if (array_key_exists("ElasticSwitch",$param) and $param["ElasticSwitch"] !== null) {
            $this->ElasticSwitch = $param["ElasticSwitch"];
        }

        if (array_key_exists("ElasticBandwidth",$param) and $param["ElasticBandwidth"] !== null) {
            $this->ElasticBandwidth = $param["ElasticBandwidth"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ElasticTrafficSwitch",$param) and $param["ElasticTrafficSwitch"] !== null) {
            $this->ElasticTrafficSwitch = $param["ElasticTrafficSwitch"];
        }
    }
}

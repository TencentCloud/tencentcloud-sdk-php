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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTargetGroup请求参数结构体
 *
 * @method string getTargetGroupName() 获取目标组名称，限定50个字符
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组名称，限定50个字符
 * @method string getVpcId() 获取目标组的vpcid属性，不填则使用默认vpc
 * @method void setVpcId(string $VpcId) 设置目标组的vpcid属性，不填则使用默认vpc
 * @method integer getPort() 获取目标组的默认端口， 后续添加服务器时可使用该默认端口。全监听目标组不支持此参数，非全监听目标组Port和TargetGroupInstances.N中的port二者必填其一。

 * @method void setPort(integer $Port) 设置目标组的默认端口， 后续添加服务器时可使用该默认端口。全监听目标组不支持此参数，非全监听目标组Port和TargetGroupInstances.N中的port二者必填其一。

 * @method array getTargetGroupInstances() 获取目标组绑定的后端服务器，单次最多支持50个。
 * @method void setTargetGroupInstances(array $TargetGroupInstances) 设置目标组绑定的后端服务器，单次最多支持50个。
 * @method string getType() 获取目标组类型，当前支持v1(旧版目标组), v2(新版目标组), 默认为v1(旧版目标组)。
 * @method void setType(string $Type) 设置目标组类型，当前支持v1(旧版目标组), v2(新版目标组), 默认为v1(旧版目标组)。
 * @method string getProtocol() 获取目标组后端转发协议。v2新版目标组该项必填。目前支持tcp、udp。
 * @method void setProtocol(string $Protocol) 设置目标组后端转发协议。v2新版目标组该项必填。目前支持tcp、udp。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 * @method integer getWeight() 获取后端服务默认权重。
<ul>
    <li>取值范围[0, 100]</li>
    <li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li>
</ul>
v1 目标组类型不支持设置 Weight 参数。
 * @method void setWeight(integer $Weight) 设置后端服务默认权重。
<ul>
    <li>取值范围[0, 100]</li>
    <li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li>
</ul>
v1 目标组类型不支持设置 Weight 参数。
 * @method boolean getFullListenSwitch() 获取全监听目标组标识，为true表示是全监听目标组，false表示不是全监听目标组。
 * @method void setFullListenSwitch(boolean $FullListenSwitch) 设置全监听目标组标识，为true表示是全监听目标组，false表示不是全监听目标组。
 * @method boolean getKeepaliveEnable() 获取是否开启长连接，此参数仅适用于HTTP/HTTPS目标组，0:关闭；1:开启， 默认关闭。
 * @method void setKeepaliveEnable(boolean $KeepaliveEnable) 设置是否开启长连接，此参数仅适用于HTTP/HTTPS目标组，0:关闭；1:开启， 默认关闭。
 * @method integer getSessionExpireTime() 获取会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。TCP/UDP目标组不支持该参数。
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。TCP/UDP目标组不支持该参数。
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string 目标组名称，限定50个字符
     */
    public $TargetGroupName;

    /**
     * @var string 目标组的vpcid属性，不填则使用默认vpc
     */
    public $VpcId;

    /**
     * @var integer 目标组的默认端口， 后续添加服务器时可使用该默认端口。全监听目标组不支持此参数，非全监听目标组Port和TargetGroupInstances.N中的port二者必填其一。

     */
    public $Port;

    /**
     * @var array 目标组绑定的后端服务器，单次最多支持50个。
     */
    public $TargetGroupInstances;

    /**
     * @var string 目标组类型，当前支持v1(旧版目标组), v2(新版目标组), 默认为v1(旧版目标组)。
     */
    public $Type;

    /**
     * @var string 目标组后端转发协议。v2新版目标组该项必填。目前支持tcp、udp。
     */
    public $Protocol;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @var integer 后端服务默认权重。
<ul>
    <li>取值范围[0, 100]</li>
    <li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li>
</ul>
v1 目标组类型不支持设置 Weight 参数。
     */
    public $Weight;

    /**
     * @var boolean 全监听目标组标识，为true表示是全监听目标组，false表示不是全监听目标组。
     */
    public $FullListenSwitch;

    /**
     * @var boolean 是否开启长连接，此参数仅适用于HTTP/HTTPS目标组，0:关闭；1:开启， 默认关闭。
     */
    public $KeepaliveEnable;

    /**
     * @var integer 会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。TCP/UDP目标组不支持该参数。
     */
    public $SessionExpireTime;

    /**
     * @param string $TargetGroupName 目标组名称，限定50个字符
     * @param string $VpcId 目标组的vpcid属性，不填则使用默认vpc
     * @param integer $Port 目标组的默认端口， 后续添加服务器时可使用该默认端口。全监听目标组不支持此参数，非全监听目标组Port和TargetGroupInstances.N中的port二者必填其一。

     * @param array $TargetGroupInstances 目标组绑定的后端服务器，单次最多支持50个。
     * @param string $Type 目标组类型，当前支持v1(旧版目标组), v2(新版目标组), 默认为v1(旧版目标组)。
     * @param string $Protocol 目标组后端转发协议。v2新版目标组该项必填。目前支持tcp、udp。
     * @param array $Tags 标签。
     * @param integer $Weight 后端服务默认权重。
<ul>
    <li>取值范围[0, 100]</li>
    <li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li>
</ul>
v1 目标组类型不支持设置 Weight 参数。
     * @param boolean $FullListenSwitch 全监听目标组标识，为true表示是全监听目标组，false表示不是全监听目标组。
     * @param boolean $KeepaliveEnable 是否开启长连接，此参数仅适用于HTTP/HTTPS目标组，0:关闭；1:开启， 默认关闭。
     * @param integer $SessionExpireTime 会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。TCP/UDP目标组不支持该参数。
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
        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetGroupInstances",$param) and $param["TargetGroupInstances"] !== null) {
            $this->TargetGroupInstances = [];
            foreach ($param["TargetGroupInstances"] as $key => $value){
                $obj = new TargetGroupInstance();
                $obj->deserialize($value);
                array_push($this->TargetGroupInstances, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("FullListenSwitch",$param) and $param["FullListenSwitch"] !== null) {
            $this->FullListenSwitch = $param["FullListenSwitch"];
        }

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }
    }
}

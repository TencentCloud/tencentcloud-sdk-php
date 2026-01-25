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
 * CreateTargetGroup请求参数结构体
 *
 * @method string getTargetGroupName() 获取<p>目标组名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
 * @method void setTargetGroupName(string $TargetGroupName) 设置<p>目标组名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
 * @method string getVpcId() 获取<p>目标组的vpcId属性，不填则使用默认vpc。</p>
 * @method void setVpcId(string $VpcId) 设置<p>目标组的vpcId属性，不填则使用默认vpc。</p>
 * @method integer getPort() 获取<p>目标组的默认端口， 后续添加服务器时可使用该默认端口。全监听目标组不支持此参数，非全监听目标组Port和TargetGroupInstances.N中的port二者必填其一。</p>
 * @method void setPort(integer $Port) 设置<p>目标组的默认端口， 后续添加服务器时可使用该默认端口。全监听目标组不支持此参数，非全监听目标组Port和TargetGroupInstances.N中的port二者必填其一。</p>
 * @method array getTargetGroupInstances() 获取<p>目标组绑定的后端服务器，单次最多支持50个。</p>
 * @method void setTargetGroupInstances(array $TargetGroupInstances) 设置<p>目标组绑定的后端服务器，单次最多支持50个。</p>
 * @method string getType() 获取<p>目标组类型，当前支持v1(旧版目标组), v2(新版目标组), 默认为v1(旧版目标组)。</p>
 * @method void setType(string $Type) 设置<p>目标组类型，当前支持v1(旧版目标组), v2(新版目标组), 默认为v1(旧版目标组)。</p>
 * @method string getProtocol() 获取<p>目标组后端转发协议。v2新版目标组该项必填。目前支持TCP、UDP、HTTP、HTTPS、GRPC。</p>
 * @method void setProtocol(string $Protocol) 设置<p>目标组后端转发协议。v2新版目标组该项必填。目前支持TCP、UDP、HTTP、HTTPS、GRPC。</p>
 * @method TargetGroupHealthCheck getHealthCheck() 获取<p>健康检查。</p>
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) 设置<p>健康检查。</p>
 * @method string getScheduleAlgorithm() 获取<p>调度算法，仅V2新版目标组，且后端转发协议为(HTTP|HTTPS|GRPC)时该参数有效。可选值：<br>&lt;ur&gt;<li>WRR:按权重轮询。</li><li>LEAST_CONN:最小连接数。</li><li>IP_HASH:按IP哈希。</li><li>默认为 WRR。</li>&lt;ur&gt;</p>
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) 设置<p>调度算法，仅V2新版目标组，且后端转发协议为(HTTP|HTTPS|GRPC)时该参数有效。可选值：<br>&lt;ur&gt;<li>WRR:按权重轮询。</li><li>LEAST_CONN:最小连接数。</li><li>IP_HASH:按IP哈希。</li><li>默认为 WRR。</li>&lt;ur&gt;</p>
 * @method array getTags() 获取<p>标签。</p>
 * @method void setTags(array $Tags) 设置<p>标签。</p>
 * @method integer getWeight() 获取<p>后端服务默认权重, 其中：</p><ul><li>取值范围[0, 100]</li><li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li><li>v1 目标组类型不支持设置 Weight 参数。</li></ul>
 * @method void setWeight(integer $Weight) 设置<p>后端服务默认权重, 其中：</p><ul><li>取值范围[0, 100]</li><li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li><li>v1 目标组类型不支持设置 Weight 参数。</li></ul>
 * @method boolean getFullListenSwitch() 获取<p>全监听目标组标识，true表示是全监听目标组，false表示不是全监听目标组。仅V2新版类型目标组支持该参数。</p>
 * @method void setFullListenSwitch(boolean $FullListenSwitch) 设置<p>全监听目标组标识，true表示是全监听目标组，false表示不是全监听目标组。仅V2新版类型目标组支持该参数。</p>
 * @method boolean getKeepaliveEnable() 获取<p>是否开启长连接，此参数仅适用于HTTP/HTTPS目标组，0:关闭；1:开启， 默认关闭。</p>
 * @method void setKeepaliveEnable(boolean $KeepaliveEnable) 设置<p>是否开启长连接，此参数仅适用于HTTP/HTTPS目标组，0:关闭；1:开启， 默认关闭。</p>
 * @method integer getSessionExpireTime() 获取<p>会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。仅V2新版且后端转发协议为HTTP/HTTPS/GRPC目标组支持该参数。</p>
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置<p>会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。仅V2新版且后端转发协议为HTTP/HTTPS/GRPC目标组支持该参数。</p>
 * @method string getIpVersion() 获取<p>IP版本类型。</p>
 * @method void setIpVersion(string $IpVersion) 设置<p>IP版本类型。</p>
 * @method boolean getSnatEnable() 获取<p>是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时<code>透传客户端源IP</code>选项关闭，反之亦然。</p>
 * @method void setSnatEnable(boolean $SnatEnable) 设置<p>是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时<code>透传客户端源IP</code>选项关闭，反之亦然。</p>
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string <p>目标组名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
     */
    public $TargetGroupName;

    /**
     * @var string <p>目标组的vpcId属性，不填则使用默认vpc。</p>
     */
    public $VpcId;

    /**
     * @var integer <p>目标组的默认端口， 后续添加服务器时可使用该默认端口。全监听目标组不支持此参数，非全监听目标组Port和TargetGroupInstances.N中的port二者必填其一。</p>
     */
    public $Port;

    /**
     * @var array <p>目标组绑定的后端服务器，单次最多支持50个。</p>
     */
    public $TargetGroupInstances;

    /**
     * @var string <p>目标组类型，当前支持v1(旧版目标组), v2(新版目标组), 默认为v1(旧版目标组)。</p>
     */
    public $Type;

    /**
     * @var string <p>目标组后端转发协议。v2新版目标组该项必填。目前支持TCP、UDP、HTTP、HTTPS、GRPC。</p>
     */
    public $Protocol;

    /**
     * @var TargetGroupHealthCheck <p>健康检查。</p>
     */
    public $HealthCheck;

    /**
     * @var string <p>调度算法，仅V2新版目标组，且后端转发协议为(HTTP|HTTPS|GRPC)时该参数有效。可选值：<br>&lt;ur&gt;<li>WRR:按权重轮询。</li><li>LEAST_CONN:最小连接数。</li><li>IP_HASH:按IP哈希。</li><li>默认为 WRR。</li>&lt;ur&gt;</p>
     */
    public $ScheduleAlgorithm;

    /**
     * @var array <p>标签。</p>
     */
    public $Tags;

    /**
     * @var integer <p>后端服务默认权重, 其中：</p><ul><li>取值范围[0, 100]</li><li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li><li>v1 目标组类型不支持设置 Weight 参数。</li></ul>
     */
    public $Weight;

    /**
     * @var boolean <p>全监听目标组标识，true表示是全监听目标组，false表示不是全监听目标组。仅V2新版类型目标组支持该参数。</p>
     */
    public $FullListenSwitch;

    /**
     * @var boolean <p>是否开启长连接，此参数仅适用于HTTP/HTTPS目标组，0:关闭；1:开启， 默认关闭。</p>
     */
    public $KeepaliveEnable;

    /**
     * @var integer <p>会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。仅V2新版且后端转发协议为HTTP/HTTPS/GRPC目标组支持该参数。</p>
     */
    public $SessionExpireTime;

    /**
     * @var string <p>IP版本类型。</p>
     */
    public $IpVersion;

    /**
     * @var boolean <p>是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时<code>透传客户端源IP</code>选项关闭，反之亦然。</p>
     */
    public $SnatEnable;

    /**
     * @param string $TargetGroupName <p>目标组名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
     * @param string $VpcId <p>目标组的vpcId属性，不填则使用默认vpc。</p>
     * @param integer $Port <p>目标组的默认端口， 后续添加服务器时可使用该默认端口。全监听目标组不支持此参数，非全监听目标组Port和TargetGroupInstances.N中的port二者必填其一。</p>
     * @param array $TargetGroupInstances <p>目标组绑定的后端服务器，单次最多支持50个。</p>
     * @param string $Type <p>目标组类型，当前支持v1(旧版目标组), v2(新版目标组), 默认为v1(旧版目标组)。</p>
     * @param string $Protocol <p>目标组后端转发协议。v2新版目标组该项必填。目前支持TCP、UDP、HTTP、HTTPS、GRPC。</p>
     * @param TargetGroupHealthCheck $HealthCheck <p>健康检查。</p>
     * @param string $ScheduleAlgorithm <p>调度算法，仅V2新版目标组，且后端转发协议为(HTTP|HTTPS|GRPC)时该参数有效。可选值：<br>&lt;ur&gt;<li>WRR:按权重轮询。</li><li>LEAST_CONN:最小连接数。</li><li>IP_HASH:按IP哈希。</li><li>默认为 WRR。</li>&lt;ur&gt;</p>
     * @param array $Tags <p>标签。</p>
     * @param integer $Weight <p>后端服务默认权重, 其中：</p><ul><li>取值范围[0, 100]</li><li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li><li>v1 目标组类型不支持设置 Weight 参数。</li></ul>
     * @param boolean $FullListenSwitch <p>全监听目标组标识，true表示是全监听目标组，false表示不是全监听目标组。仅V2新版类型目标组支持该参数。</p>
     * @param boolean $KeepaliveEnable <p>是否开启长连接，此参数仅适用于HTTP/HTTPS目标组，0:关闭；1:开启， 默认关闭。</p>
     * @param integer $SessionExpireTime <p>会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。仅V2新版且后端转发协议为HTTP/HTTPS/GRPC目标组支持该参数。</p>
     * @param string $IpVersion <p>IP版本类型。</p>
     * @param boolean $SnatEnable <p>是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时<code>透传客户端源IP</code>选项关闭，反之亦然。</p>
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

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("ScheduleAlgorithm",$param) and $param["ScheduleAlgorithm"] !== null) {
            $this->ScheduleAlgorithm = $param["ScheduleAlgorithm"];
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

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("SnatEnable",$param) and $param["SnatEnable"] !== null) {
            $this->SnatEnable = $param["SnatEnable"];
        }
    }
}

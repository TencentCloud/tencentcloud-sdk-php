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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站组记录
 *
 * @method string getRecord() 获取源站记录值，不包含端口信息，可以为：IPv4，IPv6，域名格式。
 * @method void setRecord(string $Record) 设置源站记录值，不包含端口信息，可以为：IPv4，IPv6，域名格式。
 * @method string getType() 获取源站类型，取值有：
<li>IP_DOMAIN：IPV4、IPV6、域名类型源站；</li>
<li>COS：COS源。</li>
<li>AWS_S3：AWS S3对象存储源站。</li>
 * @method void setType(string $Type) 设置源站类型，取值有：
<li>IP_DOMAIN：IPV4、IPV6、域名类型源站；</li>
<li>COS：COS源。</li>
<li>AWS_S3：AWS S3对象存储源站。</li>
 * @method string getRecordId() 获取源站记录ID。
 * @method void setRecordId(string $RecordId) 设置源站记录ID。
 * @method integer getWeight() 获取【源站权重】：用于控制流量分配优先级的参数，取值范围：0-100（整数）：<li>空值：不设置权重，系统按默认策略调度；</li><li>0 值：明确设置权重为0，流量将不会分配到该源站，注意事项：必须确保至少有一个源站的权重值大于0；</li><li>正常值：数值越大分配流量越多 ；</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置【源站权重】：用于控制流量分配优先级的参数，取值范围：0-100（整数）：<li>空值：不设置权重，系统按默认策略调度；</li><li>0 值：明确设置权重为0，流量将不会分配到该源站，注意事项：必须确保至少有一个源站的权重值大于0；</li><li>正常值：数值越大分配流量越多 ；</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPrivate() 获取是否私有鉴权，当源站类型 RecordType=COS/AWS_S3 时生效，取值有：
<li>true：使用私有鉴权；</li>
<li>false：不使用私有鉴权。</li>不填写，默认值为：false。

 * @method void setPrivate(boolean $Private) 设置是否私有鉴权，当源站类型 RecordType=COS/AWS_S3 时生效，取值有：
<li>true：使用私有鉴权；</li>
<li>false：不使用私有鉴权。</li>不填写，默认值为：false。

 * @method array getPrivateParameters() 获取私有鉴权参数，当源站类型Private=true时有效。
 * @method void setPrivateParameters(array $PrivateParameters) 设置私有鉴权参数，当源站类型Private=true时有效。
 */
class OriginRecord extends AbstractModel
{
    /**
     * @var string 源站记录值，不包含端口信息，可以为：IPv4，IPv6，域名格式。
     */
    public $Record;

    /**
     * @var string 源站类型，取值有：
<li>IP_DOMAIN：IPV4、IPV6、域名类型源站；</li>
<li>COS：COS源。</li>
<li>AWS_S3：AWS S3对象存储源站。</li>
     */
    public $Type;

    /**
     * @var string 源站记录ID。
     */
    public $RecordId;

    /**
     * @var integer 【源站权重】：用于控制流量分配优先级的参数，取值范围：0-100（整数）：<li>空值：不设置权重，系统按默认策略调度；</li><li>0 值：明确设置权重为0，流量将不会分配到该源站，注意事项：必须确保至少有一个源站的权重值大于0；</li><li>正常值：数值越大分配流量越多 ；</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var boolean 是否私有鉴权，当源站类型 RecordType=COS/AWS_S3 时生效，取值有：
<li>true：使用私有鉴权；</li>
<li>false：不使用私有鉴权。</li>不填写，默认值为：false。

     */
    public $Private;

    /**
     * @var array 私有鉴权参数，当源站类型Private=true时有效。
     */
    public $PrivateParameters;

    /**
     * @param string $Record 源站记录值，不包含端口信息，可以为：IPv4，IPv6，域名格式。
     * @param string $Type 源站类型，取值有：
<li>IP_DOMAIN：IPV4、IPV6、域名类型源站；</li>
<li>COS：COS源。</li>
<li>AWS_S3：AWS S3对象存储源站。</li>
     * @param string $RecordId 源站记录ID。
     * @param integer $Weight 【源站权重】：用于控制流量分配优先级的参数，取值范围：0-100（整数）：<li>空值：不设置权重，系统按默认策略调度；</li><li>0 值：明确设置权重为0，流量将不会分配到该源站，注意事项：必须确保至少有一个源站的权重值大于0；</li><li>正常值：数值越大分配流量越多 ；</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Private 是否私有鉴权，当源站类型 RecordType=COS/AWS_S3 时生效，取值有：
<li>true：使用私有鉴权；</li>
<li>false：不使用私有鉴权。</li>不填写，默认值为：false。

     * @param array $PrivateParameters 私有鉴权参数，当源站类型Private=true时有效。
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
        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Private",$param) and $param["Private"] !== null) {
            $this->Private = $param["Private"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = [];
            foreach ($param["PrivateParameters"] as $key => $value){
                $obj = new PrivateParameter();
                $obj->deserialize($value);
                array_push($this->PrivateParameters, $obj);
            }
        }
    }
}

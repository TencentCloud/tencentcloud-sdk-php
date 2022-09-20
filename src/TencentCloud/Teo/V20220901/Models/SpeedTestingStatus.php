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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测任务状态信息
 *
 * @method string getUrl() 获取拨测 url。
 * @method void setUrl(string $Url) 设置拨测 url。
 * @method boolean getTls() 获取拨测 url 是否使用 https。
 * @method void setTls(boolean $Tls) 设置拨测 url 是否使用 https。
 * @method string getCreatedOn() 获取任务创建时间。
 * @method void setCreatedOn(string $CreatedOn) 设置任务创建时间。
 * @method integer getStatusCode() 获取任务状态，取值有：
<li> 200：任务完成;</li>
<li> 100：任务进行中。</li>
<li> 503: 任务失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusCode(integer $StatusCode) 设置任务状态，取值有：
<li> 200：任务完成;</li>
<li> 100：任务进行中。</li>
<li> 503: 任务失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUA() 获取拨测 UA。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUA(string $UA) 设置拨测 UA。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectivity() 获取网络环境。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectivity(string $Connectivity) 设置网络环境。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReachable() 获取是否可达，取值：
<li> true：可达；</li>
<li> false：不可达。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReachable(boolean $Reachable) 设置是否可达，取值：
<li> true：可达；</li>
<li> false：不可达。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTimedOut() 获取是否超时，取值：
<li> true：超时；</li>
<li> false：不超时。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimedOut(boolean $TimedOut) 设置是否超时，取值：
<li> true：超时；</li>
<li> false：不超时。</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpeedTestingStatus extends AbstractModel
{
    /**
     * @var string 拨测 url。
     */
    public $Url;

    /**
     * @var boolean 拨测 url 是否使用 https。
     */
    public $Tls;

    /**
     * @var string 任务创建时间。
     */
    public $CreatedOn;

    /**
     * @var integer 任务状态，取值有：
<li> 200：任务完成;</li>
<li> 100：任务进行中。</li>
<li> 503: 任务失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusCode;

    /**
     * @var string 拨测 UA。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UA;

    /**
     * @var string 网络环境。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Connectivity;

    /**
     * @var boolean 是否可达，取值：
<li> true：可达；</li>
<li> false：不可达。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reachable;

    /**
     * @var boolean 是否超时，取值：
<li> true：超时；</li>
<li> false：不超时。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimedOut;

    /**
     * @param string $Url 拨测 url。
     * @param boolean $Tls 拨测 url 是否使用 https。
     * @param string $CreatedOn 任务创建时间。
     * @param integer $StatusCode 任务状态，取值有：
<li> 200：任务完成;</li>
<li> 100：任务进行中。</li>
<li> 503: 任务失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UA 拨测 UA。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Connectivity 网络环境。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Reachable 是否可达，取值：
<li> true：可达；</li>
<li> false：不可达。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TimedOut 是否超时，取值：
<li> true：超时；</li>
<li> false：不超时。</li>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Tls",$param) and $param["Tls"] !== null) {
            $this->Tls = $param["Tls"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("UA",$param) and $param["UA"] !== null) {
            $this->UA = $param["UA"];
        }

        if (array_key_exists("Connectivity",$param) and $param["Connectivity"] !== null) {
            $this->Connectivity = $param["Connectivity"];
        }

        if (array_key_exists("Reachable",$param) and $param["Reachable"] !== null) {
            $this->Reachable = $param["Reachable"];
        }

        if (array_key_exists("TimedOut",$param) and $param["TimedOut"] !== null) {
            $this->TimedOut = $param["TimedOut"];
        }
    }
}

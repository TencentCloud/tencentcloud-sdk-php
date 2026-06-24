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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WebUI访问信息
 *
 * @method string getUrl() 获取<p>访问地址，可能为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置<p>访问地址，可能为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWebUIStatus() 获取<p>WebUI状态包括：<br>-1表示当前服务没有WebUI；<br>0表示当前服务有WebUI，但是没有安装KNOX服务；<br>1表示当前服务有WebUI并安装有KNOX服务，但是KNOX没有开启公网访问；<br>2表示，当前服务有WebUI，安装有KNOX服务且已开启公网访问。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebUIStatus(integer $WebUIStatus) 设置<p>WebUI状态包括：<br>-1表示当前服务没有WebUI；<br>0表示当前服务有WebUI，但是没有安装KNOX服务；<br>1表示当前服务有WebUI并安装有KNOX服务，但是KNOX没有开启公网访问；<br>2表示，当前服务有WebUI，安装有KNOX服务且已开启公网访问。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取<p>服务名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置<p>服务名</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebUIInfo extends AbstractModel
{
    /**
     * @var string <p>访问地址，可能为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var integer <p>WebUI状态包括：<br>-1表示当前服务没有WebUI；<br>0表示当前服务有WebUI，但是没有安装KNOX服务；<br>1表示当前服务有WebUI并安装有KNOX服务，但是KNOX没有开启公网访问；<br>2表示，当前服务有WebUI，安装有KNOX服务且已开启公网访问。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebUIStatus;

    /**
     * @var string <p>服务名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @param string $Url <p>访问地址，可能为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WebUIStatus <p>WebUI状态包括：<br>-1表示当前服务没有WebUI；<br>0表示当前服务有WebUI，但是没有安装KNOX服务；<br>1表示当前服务有WebUI并安装有KNOX服务，但是KNOX没有开启公网访问；<br>2表示，当前服务有WebUI，安装有KNOX服务且已开启公网访问。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName <p>服务名</p>
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

        if (array_key_exists("WebUIStatus",$param) and $param["WebUIStatus"] !== null) {
            $this->WebUIStatus = $param["WebUIStatus"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}

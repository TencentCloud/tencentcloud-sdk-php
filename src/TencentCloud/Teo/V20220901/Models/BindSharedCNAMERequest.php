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
 * BindSharedCNAME请求参数结构体
 *
 * @method string getZoneId() 获取加速域名所属站点 ID。	
 * @method void setZoneId(string $ZoneId) 设置加速域名所属站点 ID。	
 * @method string getBindType() 获取绑定类型，取值有：
<li>bind：绑定；</li>
<li>unbind：解绑。</li>
 * @method void setBindType(string $BindType) 设置绑定类型，取值有：
<li>bind：绑定；</li>
<li>unbind：解绑。</li>
 * @method array getBindSharedCNAMEMaps() 获取接入域名与共享 CNAME 的绑定关系。
 * @method void setBindSharedCNAMEMaps(array $BindSharedCNAMEMaps) 设置接入域名与共享 CNAME 的绑定关系。
 */
class BindSharedCNAMERequest extends AbstractModel
{
    /**
     * @var string 加速域名所属站点 ID。	
     */
    public $ZoneId;

    /**
     * @var string 绑定类型，取值有：
<li>bind：绑定；</li>
<li>unbind：解绑。</li>
     */
    public $BindType;

    /**
     * @var array 接入域名与共享 CNAME 的绑定关系。
     */
    public $BindSharedCNAMEMaps;

    /**
     * @param string $ZoneId 加速域名所属站点 ID。	
     * @param string $BindType 绑定类型，取值有：
<li>bind：绑定；</li>
<li>unbind：解绑。</li>
     * @param array $BindSharedCNAMEMaps 接入域名与共享 CNAME 的绑定关系。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("BindSharedCNAMEMaps",$param) and $param["BindSharedCNAMEMaps"] !== null) {
            $this->BindSharedCNAMEMaps = [];
            foreach ($param["BindSharedCNAMEMaps"] as $key => $value){
                $obj = new BindSharedCNAMEMap();
                $obj->deserialize($value);
                array_push($this->BindSharedCNAMEMaps, $obj);
            }
        }
    }
}

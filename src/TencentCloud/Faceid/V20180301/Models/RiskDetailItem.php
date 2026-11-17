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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RiskDetailItem
 *
 * @method string getType() 获取<p>风险项类型</p><p>枚举值：</p><ul><li>IpLocationMismatch： 上报坐标所在国家/地区与 IP 归属国家/地区不一致</li><li>AbnormalLocationChange： 同一人员短时间内发生物理上不可能的位移    </li><li>BlacklistHit： 命中客户自建人脸黑名单</li></ul>
 * @method void setType(string $Type) 设置<p>风险项类型</p><p>枚举值：</p><ul><li>IpLocationMismatch： 上报坐标所在国家/地区与 IP 归属国家/地区不一致</li><li>AbnormalLocationChange： 同一人员短时间内发生物理上不可能的位移    </li><li>BlacklistHit： 命中客户自建人脸黑名单</li></ul>
 */
class RiskDetailItem extends AbstractModel
{
    /**
     * @var string <p>风险项类型</p><p>枚举值：</p><ul><li>IpLocationMismatch： 上报坐标所在国家/地区与 IP 归属国家/地区不一致</li><li>AbnormalLocationChange： 同一人员短时间内发生物理上不可能的位移    </li><li>BlacklistHit： 命中客户自建人脸黑名单</li></ul>
     */
    public $Type;

    /**
     * @param string $Type <p>风险项类型</p><p>枚举值：</p><ul><li>IpLocationMismatch： 上报坐标所在国家/地区与 IP 归属国家/地区不一致</li><li>AbnormalLocationChange： 同一人员短时间内发生物理上不可能的位移    </li><li>BlacklistHit： 命中客户自建人脸黑名单</li></ul>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

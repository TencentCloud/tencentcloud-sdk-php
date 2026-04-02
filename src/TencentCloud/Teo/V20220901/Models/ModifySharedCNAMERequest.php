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
 * ModifySharedCNAME请求参数结构体
 *
 * @method string getZoneId() 获取共享 CNAME 所属站点 ID。
 * @method void setZoneId(string $ZoneId) 设置共享 CNAME 所属站点 ID。
 * @method string getSharedCNAME() 获取共享 CNAME。
 * @method void setSharedCNAME(string $SharedCNAME) 设置共享 CNAME。
 * @method string getDescription() 获取请输入调整后的描述。
 * @method void setDescription(string $Description) 设置请输入调整后的描述。
 * @method IPSSLSetting getIPSSLSetting() 获取设置IP SSL 类型的共享CNAME 的 IP SSL 信息。
 * @method void setIPSSLSetting(IPSSLSetting $IPSSLSetting) 设置设置IP SSL 类型的共享CNAME 的 IP SSL 信息。
 */
class ModifySharedCNAMERequest extends AbstractModel
{
    /**
     * @var string 共享 CNAME 所属站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 共享 CNAME。
     */
    public $SharedCNAME;

    /**
     * @var string 请输入调整后的描述。
     */
    public $Description;

    /**
     * @var IPSSLSetting 设置IP SSL 类型的共享CNAME 的 IP SSL 信息。
     */
    public $IPSSLSetting;

    /**
     * @param string $ZoneId 共享 CNAME 所属站点 ID。
     * @param string $SharedCNAME 共享 CNAME。
     * @param string $Description 请输入调整后的描述。
     * @param IPSSLSetting $IPSSLSetting 设置IP SSL 类型的共享CNAME 的 IP SSL 信息。
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

        if (array_key_exists("SharedCNAME",$param) and $param["SharedCNAME"] !== null) {
            $this->SharedCNAME = $param["SharedCNAME"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IPSSLSetting",$param) and $param["IPSSLSetting"] !== null) {
            $this->IPSSLSetting = new IPSSLSetting();
            $this->IPSSLSetting->deserialize($param["IPSSLSetting"]);
        }
    }
}

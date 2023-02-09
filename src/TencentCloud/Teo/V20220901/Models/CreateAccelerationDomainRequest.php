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
 * CreateAccelerationDomain请求参数结构体
 *
 * @method string getZoneId() 获取加速域名所属站点ID。
 * @method void setZoneId(string $ZoneId) 设置加速域名所属站点ID。
 * @method string getDomainName() 获取加速域名名称。
 * @method void setDomainName(string $DomainName) 设置加速域名名称。
 * @method OriginInfo getOriginInfo() 获取源站信息。
 * @method void setOriginInfo(OriginInfo $OriginInfo) 设置源站信息。
 */
class CreateAccelerationDomainRequest extends AbstractModel
{
    /**
     * @var string 加速域名所属站点ID。
     */
    public $ZoneId;

    /**
     * @var string 加速域名名称。
     */
    public $DomainName;

    /**
     * @var OriginInfo 源站信息。
     */
    public $OriginInfo;

    /**
     * @param string $ZoneId 加速域名所属站点ID。
     * @param string $DomainName 加速域名名称。
     * @param OriginInfo $OriginInfo 源站信息。
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

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("OriginInfo",$param) and $param["OriginInfo"] !== null) {
            $this->OriginInfo = new OriginInfo();
            $this->OriginInfo->deserialize($param["OriginInfo"]);
        }
    }
}

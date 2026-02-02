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
 * 接入域名 CNAME 配置状态
 *
 * @method string getRecordName() 获取接入域名。
 * @method void setRecordName(string $RecordName) 设置接入域名。
 * @method string getCname() 获取EdgeOne 分配给接入域名的 CNAME。
 * @method void setCname(string $Cname) 设置EdgeOne 分配给接入域名的 CNAME。
 * @method string getStatus() 获取CNAME 配置状态校验结果，取值有：
<li>active：表示接入域名已正确配置到 EdgeOne 为其分配的指定 CNAME；</li>
<li>moved：表示接入域名未配置到 EdgeOne 为其分配的指定 CNAME；</li>
<li>invalid：表示接入域名配置的 CNAME 为 EdgeOne 为其他域名分配的 CNAME，会导致服务异常，请修改为 EdgeOne 为该接入域名提供的指定 CNAME，您可通过本结构体的 Cname 字段获取 EdgeOne 为该接入域名提供的 CNAME。</li>
 * @method void setStatus(string $Status) 设置CNAME 配置状态校验结果，取值有：
<li>active：表示接入域名已正确配置到 EdgeOne 为其分配的指定 CNAME；</li>
<li>moved：表示接入域名未配置到 EdgeOne 为其分配的指定 CNAME；</li>
<li>invalid：表示接入域名配置的 CNAME 为 EdgeOne 为其他域名分配的 CNAME，会导致服务异常，请修改为 EdgeOne 为该接入域名提供的指定 CNAME，您可通过本结构体的 Cname 字段获取 EdgeOne 为该接入域名提供的 CNAME。</li>
 */
class CnameStatus extends AbstractModel
{
    /**
     * @var string 接入域名。
     */
    public $RecordName;

    /**
     * @var string EdgeOne 分配给接入域名的 CNAME。
     */
    public $Cname;

    /**
     * @var string CNAME 配置状态校验结果，取值有：
<li>active：表示接入域名已正确配置到 EdgeOne 为其分配的指定 CNAME；</li>
<li>moved：表示接入域名未配置到 EdgeOne 为其分配的指定 CNAME；</li>
<li>invalid：表示接入域名配置的 CNAME 为 EdgeOne 为其他域名分配的 CNAME，会导致服务异常，请修改为 EdgeOne 为该接入域名提供的指定 CNAME，您可通过本结构体的 Cname 字段获取 EdgeOne 为该接入域名提供的 CNAME。</li>
     */
    public $Status;

    /**
     * @param string $RecordName 接入域名。
     * @param string $Cname EdgeOne 分配给接入域名的 CNAME。
     * @param string $Status CNAME 配置状态校验结果，取值有：
<li>active：表示接入域名已正确配置到 EdgeOne 为其分配的指定 CNAME；</li>
<li>moved：表示接入域名未配置到 EdgeOne 为其分配的指定 CNAME；</li>
<li>invalid：表示接入域名配置的 CNAME 为 EdgeOne 为其他域名分配的 CNAME，会导致服务异常，请修改为 EdgeOne 为该接入域名提供的指定 CNAME，您可通过本结构体的 Cname 字段获取 EdgeOne 为该接入域名提供的 CNAME。</li>
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
        if (array_key_exists("RecordName",$param) and $param["RecordName"] !== null) {
            $this->RecordName = $param["RecordName"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分批发布单批次详情
 *
 * @method string getPodId() 获取pod Id
 * @method void setPodId(string $PodId) 设置pod Id
 * @method array getPodStatus() 获取pod状态
 * @method void setPodStatus(array $PodStatus) 设置pod状态
 * @method string getPodVersion() 获取pod版本
 * @method void setPodVersion(string $PodVersion) 设置pod版本
 * @method string getCreateTime() 获取pod创建时间
 * @method void setCreateTime(string $CreateTime) 设置pod创建时间
 * @method string getZone() 获取pod所在可用区
 * @method void setZone(string $Zone) 设置pod所在可用区
 * @method string getWebshell() 获取webshell地址
 * @method void setWebshell(string $Webshell) 设置webshell地址
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 */
class DeployServicePodDetail extends AbstractModel
{
    /**
     * @var string pod Id
     */
    public $PodId;

    /**
     * @var array pod状态
     */
    public $PodStatus;

    /**
     * @var string pod版本
     */
    public $PodVersion;

    /**
     * @var string pod创建时间
     */
    public $CreateTime;

    /**
     * @var string pod所在可用区
     */
    public $Zone;

    /**
     * @var string webshell地址
     */
    public $Webshell;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @param string $PodId pod Id
     * @param array $PodStatus pod状态
     * @param string $PodVersion pod版本
     * @param string $CreateTime pod创建时间
     * @param string $Zone pod所在可用区
     * @param string $Webshell webshell地址
     * @param string $Status 状态
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
        if (array_key_exists("PodId",$param) and $param["PodId"] !== null) {
            $this->PodId = $param["PodId"];
        }

        if (array_key_exists("PodStatus",$param) and $param["PodStatus"] !== null) {
            $this->PodStatus = $param["PodStatus"];
        }

        if (array_key_exists("PodVersion",$param) and $param["PodVersion"] !== null) {
            $this->PodVersion = $param["PodVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Webshell",$param) and $param["Webshell"] !== null) {
            $this->Webshell = $param["Webshell"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

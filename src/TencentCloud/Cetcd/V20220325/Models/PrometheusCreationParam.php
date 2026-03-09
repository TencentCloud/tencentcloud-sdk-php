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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus创建参数
 *
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method integer getDataRetention() 获取保存时长，只支持天单位
12d = 12天
 * @method void setDataRetention(integer $DataRetention) 设置保存时长，只支持天单位
12d = 12天
 * @method string getGrafanaUserName() 获取grafana用户名
 * @method void setGrafanaUserName(string $GrafanaUserName) 设置grafana用户名
 * @method string getGrafanaPassword() 获取grafana密码
 * @method void setGrafanaPassword(string $GrafanaPassword) 设置grafana密码
 */
class PrometheusCreationParam extends AbstractModel
{
    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var integer 保存时长，只支持天单位
12d = 12天
     */
    public $DataRetention;

    /**
     * @var string grafana用户名
     */
    public $GrafanaUserName;

    /**
     * @var string grafana密码
     */
    public $GrafanaPassword;

    /**
     * @param string $SubnetId 子网ID
     * @param integer $DataRetention 保存时长，只支持天单位
12d = 12天
     * @param string $GrafanaUserName grafana用户名
     * @param string $GrafanaPassword grafana密码
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DataRetention",$param) and $param["DataRetention"] !== null) {
            $this->DataRetention = $param["DataRetention"];
        }

        if (array_key_exists("GrafanaUserName",$param) and $param["GrafanaUserName"] !== null) {
            $this->GrafanaUserName = $param["GrafanaUserName"];
        }

        if (array_key_exists("GrafanaPassword",$param) and $param["GrafanaPassword"] !== null) {
            $this->GrafanaPassword = $param["GrafanaPassword"];
        }
    }
}

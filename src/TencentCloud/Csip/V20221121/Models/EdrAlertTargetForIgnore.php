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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EDR告警定位信息，用于永久忽略/取消忽略
 *
 * @method integer getId() 获取告警主键ID
 * @method void setId(integer $Id) 设置告警主键ID
 * @method integer getAppId() 获取告警所属账号ID（跨账号，前端必传）
 * @method void setAppId(integer $AppId) 设置告警所属账号ID（跨账号，前端必传）
 * @method string getAlertId() 获取告警唯一标识
 * @method void setAlertId(string $AlertId) 设置告警唯一标识
 * @method string getQuuid() 获取主机UUID（可选）
 * @method void setQuuid(string $Quuid) 设置主机UUID（可选）
 * @method string getInstanceId() 获取实例ID（可选，用于白名单删除）
 * @method void setInstanceId(string $InstanceId) 设置实例ID（可选，用于白名单删除）
 */
class EdrAlertTargetForIgnore extends AbstractModel
{
    /**
     * @var integer 告警主键ID
     */
    public $Id;

    /**
     * @var integer 告警所属账号ID（跨账号，前端必传）
     */
    public $AppId;

    /**
     * @var string 告警唯一标识
     */
    public $AlertId;

    /**
     * @var string 主机UUID（可选）
     */
    public $Quuid;

    /**
     * @var string 实例ID（可选，用于白名单删除）
     */
    public $InstanceId;

    /**
     * @param integer $Id 告警主键ID
     * @param integer $AppId 告警所属账号ID（跨账号，前端必传）
     * @param string $AlertId 告警唯一标识
     * @param string $Quuid 主机UUID（可选）
     * @param string $InstanceId 实例ID（可选，用于白名单删除）
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AlertId",$param) and $param["AlertId"] !== null) {
            $this->AlertId = $param["AlertId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}

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
 * EDR告警定位信息，用于永久忽略
 *
 * @method integer getId() 获取<p>告警主键ID</p>
 * @method void setId(integer $Id) 设置<p>告警主键ID</p>
 * @method integer getAppId() 获取<p>告警所属账号ID（跨账号，前端必传）</p>
 * @method void setAppId(integer $AppId) 设置<p>告警所属账号ID（跨账号，前端必传）</p>
 * @method string getAlertId() 获取<p>告警唯一标识</p>
 * @method void setAlertId(string $AlertId) 设置<p>告警唯一标识</p>
 * @method string getQuuid() 获取<p>主机UUID（可选）</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机UUID（可选）</p>
 * @method string getInstanceId() 获取<p>实例ID（可选，用于白名单写入）</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID（可选，用于白名单写入）</p>
 */
class EdrAlertTargetForIgnore extends AbstractModel
{
    /**
     * @var integer <p>告警主键ID</p>
     */
    public $Id;

    /**
     * @var integer <p>告警所属账号ID（跨账号，前端必传）</p>
     */
    public $AppId;

    /**
     * @var string <p>告警唯一标识</p>
     */
    public $AlertId;

    /**
     * @var string <p>主机UUID（可选）</p>
     */
    public $Quuid;

    /**
     * @var string <p>实例ID（可选，用于白名单写入）</p>
     */
    public $InstanceId;

    /**
     * @param integer $Id <p>告警主键ID</p>
     * @param integer $AppId <p>告警所属账号ID（跨账号，前端必传）</p>
     * @param string $AlertId <p>告警唯一标识</p>
     * @param string $Quuid <p>主机UUID（可选）</p>
     * @param string $InstanceId <p>实例ID（可选，用于白名单写入）</p>
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

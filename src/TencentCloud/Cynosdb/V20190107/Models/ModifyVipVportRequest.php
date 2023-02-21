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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVipVport请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getInstanceGrpId() 获取实例组id
 * @method void setInstanceGrpId(string $InstanceGrpId) 设置实例组id
 * @method string getVip() 获取需要修改的目的ip
 * @method void setVip(string $Vip) 设置需要修改的目的ip
 * @method integer getVport() 获取需要修改的目的端口
 * @method void setVport(integer $Vport) 设置需要修改的目的端口
 * @method string getDbType() 获取数据库类型，取值范围: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) 设置数据库类型，取值范围: 
<li> MYSQL </li>
 * @method integer getOldIpReserveHours() 获取旧ip回收前的保留时间，单位小时，0表示立即回收
 * @method void setOldIpReserveHours(integer $OldIpReserveHours) 设置旧ip回收前的保留时间，单位小时，0表示立即回收
 */
class ModifyVipVportRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 实例组id
     */
    public $InstanceGrpId;

    /**
     * @var string 需要修改的目的ip
     */
    public $Vip;

    /**
     * @var integer 需要修改的目的端口
     */
    public $Vport;

    /**
     * @var string 数据库类型，取值范围: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var integer 旧ip回收前的保留时间，单位小时，0表示立即回收
     */
    public $OldIpReserveHours;

    /**
     * @param string $ClusterId 集群id
     * @param string $InstanceGrpId 实例组id
     * @param string $Vip 需要修改的目的ip
     * @param integer $Vport 需要修改的目的端口
     * @param string $DbType 数据库类型，取值范围: 
<li> MYSQL </li>
     * @param integer $OldIpReserveHours 旧ip回收前的保留时间，单位小时，0表示立即回收
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceGrpId",$param) and $param["InstanceGrpId"] !== null) {
            $this->InstanceGrpId = $param["InstanceGrpId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("OldIpReserveHours",$param) and $param["OldIpReserveHours"] !== null) {
            $this->OldIpReserveHours = $param["OldIpReserveHours"];
        }
    }
}

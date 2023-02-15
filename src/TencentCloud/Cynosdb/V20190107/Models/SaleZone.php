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
 * 售卖可用区信息
 *
 * @method string getZone() 获取可用区英文名
 * @method void setZone(string $Zone) 设置可用区英文名
 * @method integer getZoneId() 获取可用区数字ID
 * @method void setZoneId(integer $ZoneId) 设置可用区数字ID
 * @method string getZoneZh() 获取可用区中文名
 * @method void setZoneZh(string $ZoneZh) 设置可用区中文名
 * @method integer getIsSupportServerless() 获取是否支持serverless集群<br>
0:不支持<br>
1:支持
 * @method void setIsSupportServerless(integer $IsSupportServerless) 设置是否支持serverless集群<br>
0:不支持<br>
1:支持
 * @method integer getIsSupportNormal() 获取是否支持普通集群<br>
0:不支持<br>
1:支持
 * @method void setIsSupportNormal(integer $IsSupportNormal) 设置是否支持普通集群<br>
0:不支持<br>
1:支持
 * @method string getPhysicalZone() 获取物理区
 * @method void setPhysicalZone(string $PhysicalZone) 设置物理区
 * @method boolean getHasPermission() 获取用户是否有可用区权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasPermission(boolean $HasPermission) 设置用户是否有可用区权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsWholeRdmaZone() 获取是否为全链路RDMA可用区
 * @method void setIsWholeRdmaZone(string $IsWholeRdmaZone) 设置是否为全链路RDMA可用区
 */
class SaleZone extends AbstractModel
{
    /**
     * @var string 可用区英文名
     */
    public $Zone;

    /**
     * @var integer 可用区数字ID
     */
    public $ZoneId;

    /**
     * @var string 可用区中文名
     */
    public $ZoneZh;

    /**
     * @var integer 是否支持serverless集群<br>
0:不支持<br>
1:支持
     */
    public $IsSupportServerless;

    /**
     * @var integer 是否支持普通集群<br>
0:不支持<br>
1:支持
     */
    public $IsSupportNormal;

    /**
     * @var string 物理区
     */
    public $PhysicalZone;

    /**
     * @var boolean 用户是否有可用区权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasPermission;

    /**
     * @var string 是否为全链路RDMA可用区
     */
    public $IsWholeRdmaZone;

    /**
     * @param string $Zone 可用区英文名
     * @param integer $ZoneId 可用区数字ID
     * @param string $ZoneZh 可用区中文名
     * @param integer $IsSupportServerless 是否支持serverless集群<br>
0:不支持<br>
1:支持
     * @param integer $IsSupportNormal 是否支持普通集群<br>
0:不支持<br>
1:支持
     * @param string $PhysicalZone 物理区
     * @param boolean $HasPermission 用户是否有可用区权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsWholeRdmaZone 是否为全链路RDMA可用区
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneZh",$param) and $param["ZoneZh"] !== null) {
            $this->ZoneZh = $param["ZoneZh"];
        }

        if (array_key_exists("IsSupportServerless",$param) and $param["IsSupportServerless"] !== null) {
            $this->IsSupportServerless = $param["IsSupportServerless"];
        }

        if (array_key_exists("IsSupportNormal",$param) and $param["IsSupportNormal"] !== null) {
            $this->IsSupportNormal = $param["IsSupportNormal"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("HasPermission",$param) and $param["HasPermission"] !== null) {
            $this->HasPermission = $param["HasPermission"];
        }

        if (array_key_exists("IsWholeRdmaZone",$param) and $param["IsWholeRdmaZone"] !== null) {
            $this->IsWholeRdmaZone = $param["IsWholeRdmaZone"];
        }
    }
}

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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网路由表信息
 *
 * @method string getCcnId() 获取云联网ID。
 * @method void setCcnId(string $CcnId) 设置云联网ID。
 * @method string getCcnRouteTableId() 获取云联网路由表ID。
 * @method void setCcnRouteTableId(string $CcnRouteTableId) 设置云联网路由表ID。
 * @method string getRouteTableName() 获取云联网路由表名称。
 * @method void setRouteTableName(string $RouteTableName) 设置云联网路由表名称。
 * @method string getRouteTableDescription() 获取云联网路由表描述。
 * @method void setRouteTableDescription(string $RouteTableDescription) 设置云联网路由表描述。
 * @method boolean getIsDefaultTable() 获取True：是默认路由表 False：非默认路由表。
 * @method void setIsDefaultTable(boolean $IsDefaultTable) 设置True：是默认路由表 False：非默认路由表。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 */
class CcnRouteTable extends AbstractModel
{
    /**
     * @var string 云联网ID。
     */
    public $CcnId;

    /**
     * @var string 云联网路由表ID。
     */
    public $CcnRouteTableId;

    /**
     * @var string 云联网路由表名称。
     */
    public $RouteTableName;

    /**
     * @var string 云联网路由表描述。
     */
    public $RouteTableDescription;

    /**
     * @var boolean True：是默认路由表 False：非默认路由表。
     */
    public $IsDefaultTable;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @param string $CcnId 云联网ID。
     * @param string $CcnRouteTableId 云联网路由表ID。
     * @param string $RouteTableName 云联网路由表名称。
     * @param string $RouteTableDescription 云联网路由表描述。
     * @param boolean $IsDefaultTable True：是默认路由表 False：非默认路由表。
     * @param string $CreateTime 创建时间。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnRouteTableId",$param) and $param["CcnRouteTableId"] !== null) {
            $this->CcnRouteTableId = $param["CcnRouteTableId"];
        }

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("RouteTableDescription",$param) and $param["RouteTableDescription"] !== null) {
            $this->RouteTableDescription = $param["RouteTableDescription"];
        }

        if (array_key_exists("IsDefaultTable",$param) and $param["IsDefaultTable"] !== null) {
            $this->IsDefaultTable = $param["IsDefaultTable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

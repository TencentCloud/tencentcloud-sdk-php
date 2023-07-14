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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAuditService请求参数结构体
 *
 * @method string getProduct() 获取服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB。
 * @method string getNodeRequestType() 获取与Product保持一致。如："dcdb" ,"mariadb"。
 * @method void setNodeRequestType(string $NodeRequestType) 设置与Product保持一致。如："dcdb" ,"mariadb"。
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method integer getLogExpireDay() 获取日志保存总时长，只能是7,30,90,180,365,1095,1825。
 * @method void setLogExpireDay(integer $LogExpireDay) 设置日志保存总时长，只能是7,30,90,180,365,1095,1825。
 * @method integer getHotLogExpireDay() 获取高频日志保存时长，只能是7,30,90,180,365,1095,1825。
 * @method void setHotLogExpireDay(integer $HotLogExpireDay) 设置高频日志保存时长，只能是7,30,90,180,365,1095,1825。
 */
class ModifyAuditServiceRequest extends AbstractModel
{
    /**
     * @var string 服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB。
     */
    public $Product;

    /**
     * @var string 与Product保持一致。如："dcdb" ,"mariadb"。
     */
    public $NodeRequestType;

    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 日志保存总时长，只能是7,30,90,180,365,1095,1825。
     */
    public $LogExpireDay;

    /**
     * @var integer 高频日志保存时长，只能是7,30,90,180,365,1095,1825。
     */
    public $HotLogExpireDay;

    /**
     * @param string $Product 服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB。
     * @param string $NodeRequestType 与Product保持一致。如："dcdb" ,"mariadb"。
     * @param string $InstanceId 实例ID。
     * @param integer $LogExpireDay 日志保存总时长，只能是7,30,90,180,365,1095,1825。
     * @param integer $HotLogExpireDay 高频日志保存时长，只能是7,30,90,180,365,1095,1825。
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("NodeRequestType",$param) and $param["NodeRequestType"] !== null) {
            $this->NodeRequestType = $param["NodeRequestType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HotLogExpireDay",$param) and $param["HotLogExpireDay"] !== null) {
            $this->HotLogExpireDay = $param["HotLogExpireDay"];
        }
    }
}

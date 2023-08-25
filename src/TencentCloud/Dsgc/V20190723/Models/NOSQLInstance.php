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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NOSQL类型的数据源实例
 *
 * @method string getDataSourceId() 获取数据源id
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
 * @method string getDataSourceType() 获取cdb, dcdb, mariadb, postgres, cynosdbpg, cynosdbmysql, cos, mysql_like_proto, postgre_like_proto,mongodb
 * @method void setDataSourceType(string $DataSourceType) 设置cdb, dcdb, mariadb, postgres, cynosdbpg, cynosdbmysql, cos, mysql_like_proto, postgre_like_proto,mongodb
 * @method string getResourceRegion() 获取资源所在地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
 * @method integer getDiscoveryTaskId() 获取根据实例创建的敏感数据识别扫描任务Id
 * @method void setDiscoveryTaskId(integer $DiscoveryTaskId) 设置根据实例创建的敏感数据识别扫描任务Id
 * @method integer getDiscoveryTaskInstanceID() 获取敏感数据识别任务实例id
 * @method void setDiscoveryTaskInstanceID(integer $DiscoveryTaskInstanceID) 设置敏感数据识别任务实例id
 */
class NOSQLInstance extends AbstractModel
{
    /**
     * @var string 数据源id
     */
    public $DataSourceId;

    /**
     * @var string cdb, dcdb, mariadb, postgres, cynosdbpg, cynosdbmysql, cos, mysql_like_proto, postgre_like_proto,mongodb
     */
    public $DataSourceType;

    /**
     * @var string 资源所在地域
     */
    public $ResourceRegion;

    /**
     * @var integer 根据实例创建的敏感数据识别扫描任务Id
     */
    public $DiscoveryTaskId;

    /**
     * @var integer 敏感数据识别任务实例id
     */
    public $DiscoveryTaskInstanceID;

    /**
     * @param string $DataSourceId 数据源id
     * @param string $DataSourceType cdb, dcdb, mariadb, postgres, cynosdbpg, cynosdbmysql, cos, mysql_like_proto, postgre_like_proto,mongodb
     * @param string $ResourceRegion 资源所在地域
     * @param integer $DiscoveryTaskId 根据实例创建的敏感数据识别扫描任务Id
     * @param integer $DiscoveryTaskInstanceID 敏感数据识别任务实例id
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("DiscoveryTaskId",$param) and $param["DiscoveryTaskId"] !== null) {
            $this->DiscoveryTaskId = $param["DiscoveryTaskId"];
        }

        if (array_key_exists("DiscoveryTaskInstanceID",$param) and $param["DiscoveryTaskInstanceID"] !== null) {
            $this->DiscoveryTaskInstanceID = $param["DiscoveryTaskInstanceID"];
        }
    }
}

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
 * 创建评估任务的ES详情
 *
 * @method string getDataSourceId() 获取数据源id
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
 * @method string getDataSourceType() 获取数据源类型
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型
 * @method string getResourceRegion() 获取地域
 * @method void setResourceRegion(string $ResourceRegion) 设置地域
 * @method integer getDiscoveryTaskId() 获取扫描任务ID
 * @method void setDiscoveryTaskId(integer $DiscoveryTaskId) 设置扫描任务ID
 * @method integer getDiscoveryTaskInstanceID() 获取扫描任务实例ID
 * @method void setDiscoveryTaskInstanceID(integer $DiscoveryTaskInstanceID) 设置扫描任务实例ID
 */
class ESInstance extends AbstractModel
{
    /**
     * @var string 数据源id
     */
    public $DataSourceId;

    /**
     * @var string 数据源类型
     */
    public $DataSourceType;

    /**
     * @var string 地域
     */
    public $ResourceRegion;

    /**
     * @var integer 扫描任务ID
     */
    public $DiscoveryTaskId;

    /**
     * @var integer 扫描任务实例ID
     */
    public $DiscoveryTaskInstanceID;

    /**
     * @param string $DataSourceId 数据源id
     * @param string $DataSourceType 数据源类型
     * @param string $ResourceRegion 地域
     * @param integer $DiscoveryTaskId 扫描任务ID
     * @param integer $DiscoveryTaskInstanceID 扫描任务实例ID
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

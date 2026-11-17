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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeployments请求参数结构体
 *
 * @method string getZoneId() 获取<p>Makers 站点 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>Makers 站点 ID</p>
 * @method string getProjectId() 获取<p>项目 ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目 ID</p>
 * @method array getDeploymentIds() 获取<p>按部署 ID 查询</p>
 * @method void setDeploymentIds(array $DeploymentIds) 设置<p>按部署 ID 查询</p>
 * @method array getFilters() 获取<p>过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p>
 * @method integer getOffset() 获取<p>偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移</p>
 * @method integer getLimit() 获取<p>每页数量，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，最大 100</p>
 * @method string getOrderBy() 获取<p>CreatedOn 或 ModifiedOn</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>CreatedOn 或 ModifiedOn</p>
 * @method string getOrderType() 获取<p>Asc 或 Desc</p>
 * @method void setOrderType(string $OrderType) 设置<p>Asc 或 Desc</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 */
class DescribeDeploymentsRequest extends AbstractModel
{
    /**
     * @var string <p>Makers 站点 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>项目 ID</p>
     */
    public $ProjectId;

    /**
     * @var array <p>按部署 ID 查询</p>
     */
    public $DeploymentIds;

    /**
     * @var array <p>过滤条件</p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量，最大 100</p>
     */
    public $Limit;

    /**
     * @var string <p>CreatedOn 或 ModifiedOn</p>
     */
    public $OrderBy;

    /**
     * @var string <p>Asc 或 Desc</p>
     */
    public $OrderType;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @param string $ZoneId <p>Makers 站点 ID</p>
     * @param string $ProjectId <p>项目 ID</p>
     * @param array $DeploymentIds <p>按部署 ID 查询</p>
     * @param array $Filters <p>过滤条件</p>
     * @param integer $Offset <p>偏移</p>
     * @param integer $Limit <p>每页数量，最大 100</p>
     * @param string $OrderBy <p>CreatedOn 或 ModifiedOn</p>
     * @param string $OrderType <p>Asc 或 Desc</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeploymentIds",$param) and $param["DeploymentIds"] !== null) {
            $this->DeploymentIds = $param["DeploymentIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new DeploymentFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCrossBackupStatistical请求参数结构体
 *
 * @method integer getOffset() 获取分页,页数
 * @method void setOffset(integer $Offset) 设置分页,页数
 * @method integer getLimit() 获取分页，页大小
 * @method void setLimit(integer $Limit) 设置分页，页大小
 * @method array getInstanceIdSet() 获取实例ID列表
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置实例ID列表
 * @method array getInstanceNameSet() 获取实例名称列表
 * @method void setInstanceNameSet(array $InstanceNameSet) 设置实例名称列表
 * @method string getCrossBackupStatus() 获取跨地域备份状态，enable-开启，disable-关闭
 * @method void setCrossBackupStatus(string $CrossBackupStatus) 设置跨地域备份状态，enable-开启，disable-关闭
 * @method string getCrossRegion() 获取跨地域备份目标地域
 * @method void setCrossRegion(string $CrossRegion) 设置跨地域备份目标地域
 * @method string getOrderBy() 获取排序字段，默认default-按照备份空间降序排序，data-按照数据备份排序，log-按照日志备份培训
 * @method void setOrderBy(string $OrderBy) 设置排序字段，默认default-按照备份空间降序排序，data-按照数据备份排序，log-按照日志备份培训
 * @method string getOrderByType() 获取排序规则（desc-降序，asc-升序），默认desc
 * @method void setOrderByType(string $OrderByType) 设置排序规则（desc-降序，asc-升序），默认desc
 */
class DescribeCrossBackupStatisticalRequest extends AbstractModel
{
    /**
     * @var integer 分页,页数
     */
    public $Offset;

    /**
     * @var integer 分页，页大小
     */
    public $Limit;

    /**
     * @var array 实例ID列表
     */
    public $InstanceIdSet;

    /**
     * @var array 实例名称列表
     */
    public $InstanceNameSet;

    /**
     * @var string 跨地域备份状态，enable-开启，disable-关闭
     */
    public $CrossBackupStatus;

    /**
     * @var string 跨地域备份目标地域
     */
    public $CrossRegion;

    /**
     * @var string 排序字段，默认default-按照备份空间降序排序，data-按照数据备份排序，log-按照日志备份培训
     */
    public $OrderBy;

    /**
     * @var string 排序规则（desc-降序，asc-升序），默认desc
     */
    public $OrderByType;

    /**
     * @param integer $Offset 分页,页数
     * @param integer $Limit 分页，页大小
     * @param array $InstanceIdSet 实例ID列表
     * @param array $InstanceNameSet 实例名称列表
     * @param string $CrossBackupStatus 跨地域备份状态，enable-开启，disable-关闭
     * @param string $CrossRegion 跨地域备份目标地域
     * @param string $OrderBy 排序字段，默认default-按照备份空间降序排序，data-按照数据备份排序，log-按照日志备份培训
     * @param string $OrderByType 排序规则（desc-降序，asc-升序），默认desc
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("InstanceNameSet",$param) and $param["InstanceNameSet"] !== null) {
            $this->InstanceNameSet = $param["InstanceNameSet"];
        }

        if (array_key_exists("CrossBackupStatus",$param) and $param["CrossBackupStatus"] !== null) {
            $this->CrossBackupStatus = $param["CrossBackupStatus"];
        }

        if (array_key_exists("CrossRegion",$param) and $param["CrossRegion"] !== null) {
            $this->CrossRegion = $param["CrossRegion"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}

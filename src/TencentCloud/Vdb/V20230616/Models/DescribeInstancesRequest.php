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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取实例ID数组。
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID数组。
 * @method array getInstanceNames() 获取实例名称，支持模糊搜索。
 * @method void setInstanceNames(array $InstanceNames) 设置实例名称，支持模糊搜索。
 * @method array getInstanceKeys() 获取实例模糊搜索字段。
 * @method void setInstanceKeys(array $InstanceKeys) 设置实例模糊搜索字段。
 * @method array getStatus() 获取根据状态获取实例， 为空则获取全部非隔离和非下线的实例。
 * @method void setStatus(array $Status) 设置根据状态获取实例， 为空则获取全部非隔离和非下线的实例。
 * @method array getEngineNames() 获取按照引擎筛选实例。
 * @method void setEngineNames(array $EngineNames) 设置按照引擎筛选实例。
 * @method array getEngineVersions() 获取按照版本筛选实例。
 * @method void setEngineVersions(array $EngineVersions) 设置按照版本筛选实例。
 * @method array getApiVersions() 获取按照api版本筛选实例
 * @method void setApiVersions(array $ApiVersions) 设置按照api版本筛选实例
 * @method string getCreateAt() 获取按照创建时间筛选实例。
 * @method void setCreateAt(string $CreateAt) 设置按照创建时间筛选实例。
 * @method array getZones() 获取按照可用区筛选实例。
 * @method void setZones(array $Zones) 设置按照可用区筛选实例。
 * @method string getOrderBy() 获取排序字段。
 * @method void setOrderBy(string $OrderBy) 设置排序字段。
 * @method string getOrderDirection() 获取排序方式。
 * @method void setOrderDirection(string $OrderDirection) 设置排序方式。
 * @method integer getOffset() 获取查询开始位置。
 * @method void setOffset(integer $Offset) 设置查询开始位置。
 * @method integer getLimit() 获取列表查询数量。
 * @method void setLimit(integer $Limit) 设置列表查询数量。
 * @method array getResourceTags() 获取按照标签筛选实例
 * @method void setResourceTags(array $ResourceTags) 设置按照标签筛选实例
 * @method array getTaskStatus() 获取任务状态：1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中
 * @method void setTaskStatus(array $TaskStatus) 设置任务状态：1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中
 * @method array getNetworks() 获取根据实例vip搜索实例
 * @method void setNetworks(array $Networks) 设置根据实例vip搜索实例
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例ID数组。
     */
    public $InstanceIds;

    /**
     * @var array 实例名称，支持模糊搜索。
     */
    public $InstanceNames;

    /**
     * @var array 实例模糊搜索字段。
     */
    public $InstanceKeys;

    /**
     * @var array 根据状态获取实例， 为空则获取全部非隔离和非下线的实例。
     */
    public $Status;

    /**
     * @var array 按照引擎筛选实例。
     * @deprecated
     */
    public $EngineNames;

    /**
     * @var array 按照版本筛选实例。
     */
    public $EngineVersions;

    /**
     * @var array 按照api版本筛选实例
     */
    public $ApiVersions;

    /**
     * @var string 按照创建时间筛选实例。
     */
    public $CreateAt;

    /**
     * @var array 按照可用区筛选实例。
     * @deprecated
     */
    public $Zones;

    /**
     * @var string 排序字段。
     */
    public $OrderBy;

    /**
     * @var string 排序方式。
     */
    public $OrderDirection;

    /**
     * @var integer 查询开始位置。
     */
    public $Offset;

    /**
     * @var integer 列表查询数量。
     */
    public $Limit;

    /**
     * @var array 按照标签筛选实例
     */
    public $ResourceTags;

    /**
     * @var array 任务状态：1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中
     */
    public $TaskStatus;

    /**
     * @var array 根据实例vip搜索实例
     */
    public $Networks;

    /**
     * @param array $InstanceIds 实例ID数组。
     * @param array $InstanceNames 实例名称，支持模糊搜索。
     * @param array $InstanceKeys 实例模糊搜索字段。
     * @param array $Status 根据状态获取实例， 为空则获取全部非隔离和非下线的实例。
     * @param array $EngineNames 按照引擎筛选实例。
     * @param array $EngineVersions 按照版本筛选实例。
     * @param array $ApiVersions 按照api版本筛选实例
     * @param string $CreateAt 按照创建时间筛选实例。
     * @param array $Zones 按照可用区筛选实例。
     * @param string $OrderBy 排序字段。
     * @param string $OrderDirection 排序方式。
     * @param integer $Offset 查询开始位置。
     * @param integer $Limit 列表查询数量。
     * @param array $ResourceTags 按照标签筛选实例
     * @param array $TaskStatus 任务状态：1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中
     * @param array $Networks 根据实例vip搜索实例
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("InstanceKeys",$param) and $param["InstanceKeys"] !== null) {
            $this->InstanceKeys = $param["InstanceKeys"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EngineNames",$param) and $param["EngineNames"] !== null) {
            $this->EngineNames = $param["EngineNames"];
        }

        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = $param["EngineVersions"];
        }

        if (array_key_exists("ApiVersions",$param) and $param["ApiVersions"] !== null) {
            $this->ApiVersions = $param["ApiVersions"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Networks",$param) and $param["Networks"] !== null) {
            $this->Networks = $param["Networks"];
        }
    }
}

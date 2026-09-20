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
 * DescribeEdrAlertList请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>过滤条件，支持的 Name 如下：<br/>【资源属性过滤】（前缀模糊，后端自动反查资产后按实例过滤）<br/>InstanceName - string - 是否必填：否 - 资产名称（前缀匹配）<br/>InstanceID - string - 是否必填：否 - 实例ID（前缀匹配）<br/>IP - string - 是否必填：否 - IP地址，支持内网/外网IP（前缀匹配）<br/>Tags - string - 是否必填：否 - 腾讯云标签，格式 tagKey$tagValue（仅单账号场景生效）<br/>CSIPTag - string - 是否必填：否 - 安全中心标签名称（前缀匹配，按语言环境匹配中/英文字段）<br/>AssetTagIds - string - 是否必填：否 - 安全中心资产标签ID（精确匹配，多个标签ID之间为或关系；标签ID可通过资产中心标签树接口 DescribeAssetTagTree 获取）<br/>【容器维度过滤】（前缀模糊，命中后仅返回容器告警）<br/>ClusterName - string - 是否必填：否 - 集群名称（前缀匹配）<br/>ContainerName - string - 是否必填：否 - 容器名称（前缀匹配）<br/>【告警字段过滤】（精确匹配，支持多值）<br/>Status - int - 是否必填：否 - 处理状态<br/>Level - int - 是否必填：否 - 威胁等级<br/>AlertCategory - string - 是否必填：否 - 告警大类<br/>AlertSubType - string - 是否必填：否 - 告警子类型<br/>AttackStage - string - 是否必填：否 - 攻击阶段<br/>DetectMode - string - 是否必填：否 - 检测模式<br/>AlertSource - string - 是否必填：否 - 告警来源（HOST/CONTAINER）<br/>AlertId - string - 是否必填：否 - 告警ID<br/>InstanceId - string - 是否必填：否 - 实例ID（精确匹配）<br/>ContainerId - string - 是否必填：否 - 容器ID（精确匹配）<br/>ClusterId - string - 是否必填：否 - 集群ID（精确匹配）<br/>【时间范围】<br/>StartTime - string - 是否必填：否 - 开始时间，格式 2006-01-02 15:04:05（默认近180天）<br/>EndTime - string - 是否必填：否 - 结束时间，格式 2006-01-02 15:04:05（默认当前时间）</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，支持的 Name 如下：<br/>【资源属性过滤】（前缀模糊，后端自动反查资产后按实例过滤）<br/>InstanceName - string - 是否必填：否 - 资产名称（前缀匹配）<br/>InstanceID - string - 是否必填：否 - 实例ID（前缀匹配）<br/>IP - string - 是否必填：否 - IP地址，支持内网/外网IP（前缀匹配）<br/>Tags - string - 是否必填：否 - 腾讯云标签，格式 tagKey$tagValue（仅单账号场景生效）<br/>CSIPTag - string - 是否必填：否 - 安全中心标签名称（前缀匹配，按语言环境匹配中/英文字段）<br/>AssetTagIds - string - 是否必填：否 - 安全中心资产标签ID（精确匹配，多个标签ID之间为或关系；标签ID可通过资产中心标签树接口 DescribeAssetTagTree 获取）<br/>【容器维度过滤】（前缀模糊，命中后仅返回容器告警）<br/>ClusterName - string - 是否必填：否 - 集群名称（前缀匹配）<br/>ContainerName - string - 是否必填：否 - 容器名称（前缀匹配）<br/>【告警字段过滤】（精确匹配，支持多值）<br/>Status - int - 是否必填：否 - 处理状态<br/>Level - int - 是否必填：否 - 威胁等级<br/>AlertCategory - string - 是否必填：否 - 告警大类<br/>AlertSubType - string - 是否必填：否 - 告警子类型<br/>AttackStage - string - 是否必填：否 - 攻击阶段<br/>DetectMode - string - 是否必填：否 - 检测模式<br/>AlertSource - string - 是否必填：否 - 告警来源（HOST/CONTAINER）<br/>AlertId - string - 是否必填：否 - 告警ID<br/>InstanceId - string - 是否必填：否 - 实例ID（精确匹配）<br/>ContainerId - string - 是否必填：否 - 容器ID（精确匹配）<br/>ClusterId - string - 是否必填：否 - 集群ID（精确匹配）<br/>【时间范围】<br/>StartTime - string - 是否必填：否 - 开始时间，格式 2006-01-02 15:04:05（默认近180天）<br/>EndTime - string - 是否必填：否 - 结束时间，格式 2006-01-02 15:04:05（默认当前时间）</p>
 * @method integer getLimit() 获取<p>限制条数,默认10,最大100</p>
 * @method void setLimit(integer $Limit) 设置<p>限制条数,默认10,最大100</p>
 * @method integer getOffset() 获取<p>偏移量,默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量,默认0</p>
 * @method string getOrder() 获取<p>排序方式: [ASC:升序|DESC:降序]</p>
 * @method void setOrder(string $Order) 设置<p>排序方式: [ASC:升序|DESC:降序]</p>
 * @method string getBy() 获取<p>可选排序列: [LatestDetectTime]</p>
 * @method void setBy(string $By) 设置<p>可选排序列: [LatestDetectTime]</p>
 */
class DescribeEdrAlertListRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>过滤条件，支持的 Name 如下：<br/>【资源属性过滤】（前缀模糊，后端自动反查资产后按实例过滤）<br/>InstanceName - string - 是否必填：否 - 资产名称（前缀匹配）<br/>InstanceID - string - 是否必填：否 - 实例ID（前缀匹配）<br/>IP - string - 是否必填：否 - IP地址，支持内网/外网IP（前缀匹配）<br/>Tags - string - 是否必填：否 - 腾讯云标签，格式 tagKey$tagValue（仅单账号场景生效）<br/>CSIPTag - string - 是否必填：否 - 安全中心标签名称（前缀匹配，按语言环境匹配中/英文字段）<br/>AssetTagIds - string - 是否必填：否 - 安全中心资产标签ID（精确匹配，多个标签ID之间为或关系；标签ID可通过资产中心标签树接口 DescribeAssetTagTree 获取）<br/>【容器维度过滤】（前缀模糊，命中后仅返回容器告警）<br/>ClusterName - string - 是否必填：否 - 集群名称（前缀匹配）<br/>ContainerName - string - 是否必填：否 - 容器名称（前缀匹配）<br/>【告警字段过滤】（精确匹配，支持多值）<br/>Status - int - 是否必填：否 - 处理状态<br/>Level - int - 是否必填：否 - 威胁等级<br/>AlertCategory - string - 是否必填：否 - 告警大类<br/>AlertSubType - string - 是否必填：否 - 告警子类型<br/>AttackStage - string - 是否必填：否 - 攻击阶段<br/>DetectMode - string - 是否必填：否 - 检测模式<br/>AlertSource - string - 是否必填：否 - 告警来源（HOST/CONTAINER）<br/>AlertId - string - 是否必填：否 - 告警ID<br/>InstanceId - string - 是否必填：否 - 实例ID（精确匹配）<br/>ContainerId - string - 是否必填：否 - 容器ID（精确匹配）<br/>ClusterId - string - 是否必填：否 - 集群ID（精确匹配）<br/>【时间范围】<br/>StartTime - string - 是否必填：否 - 开始时间，格式 2006-01-02 15:04:05（默认近180天）<br/>EndTime - string - 是否必填：否 - 结束时间，格式 2006-01-02 15:04:05（默认当前时间）</p>
     */
    public $Filters;

    /**
     * @var integer <p>限制条数,默认10,最大100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量,默认0</p>
     */
    public $Offset;

    /**
     * @var string <p>排序方式: [ASC:升序|DESC:降序]</p>
     */
    public $Order;

    /**
     * @var string <p>可选排序列: [LatestDetectTime]</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>过滤条件，支持的 Name 如下：<br/>【资源属性过滤】（前缀模糊，后端自动反查资产后按实例过滤）<br/>InstanceName - string - 是否必填：否 - 资产名称（前缀匹配）<br/>InstanceID - string - 是否必填：否 - 实例ID（前缀匹配）<br/>IP - string - 是否必填：否 - IP地址，支持内网/外网IP（前缀匹配）<br/>Tags - string - 是否必填：否 - 腾讯云标签，格式 tagKey$tagValue（仅单账号场景生效）<br/>CSIPTag - string - 是否必填：否 - 安全中心标签名称（前缀匹配，按语言环境匹配中/英文字段）<br/>AssetTagIds - string - 是否必填：否 - 安全中心资产标签ID（精确匹配，多个标签ID之间为或关系；标签ID可通过资产中心标签树接口 DescribeAssetTagTree 获取）<br/>【容器维度过滤】（前缀模糊，命中后仅返回容器告警）<br/>ClusterName - string - 是否必填：否 - 集群名称（前缀匹配）<br/>ContainerName - string - 是否必填：否 - 容器名称（前缀匹配）<br/>【告警字段过滤】（精确匹配，支持多值）<br/>Status - int - 是否必填：否 - 处理状态<br/>Level - int - 是否必填：否 - 威胁等级<br/>AlertCategory - string - 是否必填：否 - 告警大类<br/>AlertSubType - string - 是否必填：否 - 告警子类型<br/>AttackStage - string - 是否必填：否 - 攻击阶段<br/>DetectMode - string - 是否必填：否 - 检测模式<br/>AlertSource - string - 是否必填：否 - 告警来源（HOST/CONTAINER）<br/>AlertId - string - 是否必填：否 - 告警ID<br/>InstanceId - string - 是否必填：否 - 实例ID（精确匹配）<br/>ContainerId - string - 是否必填：否 - 容器ID（精确匹配）<br/>ClusterId - string - 是否必填：否 - 集群ID（精确匹配）<br/>【时间范围】<br/>StartTime - string - 是否必填：否 - 开始时间，格式 2006-01-02 15:04:05（默认近180天）<br/>EndTime - string - 是否必填：否 - 结束时间，格式 2006-01-02 15:04:05（默认当前时间）</p>
     * @param integer $Limit <p>限制条数,默认10,最大100</p>
     * @param integer $Offset <p>偏移量,默认0</p>
     * @param string $Order <p>排序方式: [ASC:升序|DESC:降序]</p>
     * @param string $By <p>可选排序列: [LatestDetectTime]</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}

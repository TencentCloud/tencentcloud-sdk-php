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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method integer getLimit() 获取<p>每页输出实例的数量，参数默认值20，最大值为1000。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页输出实例的数量，参数默认值20，最大值为1000。</p>
 * @method integer getOffset() 获取<p>分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。</p>
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method string getOrderBy() 获取<p>实例列表排序依据，枚举值如下所示：</p><ul><li>projectId：依据项目ID排序。</li><li>createtime：依据实例创建时间排序。</li><li>instancename：依据实例名称排序。</li><li>type：依据实例类型排序。</li><li>curDeadline：依据实例到期时间排序。</li></ul>
 * @method void setOrderBy(string $OrderBy) 设置<p>实例列表排序依据，枚举值如下所示：</p><ul><li>projectId：依据项目ID排序。</li><li>createtime：依据实例创建时间排序。</li><li>instancename：依据实例名称排序。</li><li>type：依据实例类型排序。</li><li>curDeadline：依据实例到期时间排序。</li></ul>
 * @method integer getOrderType() 获取<p>实例排序方式，默认为倒序排序。</p><ul><li>1：倒序。</li><li>0：顺序。</li></ul>
 * @method void setOrderType(integer $OrderType) 设置<p>实例排序方式，默认为倒序排序。</p><ul><li>1：倒序。</li><li>0：顺序。</li></ul>
 * @method array getVpcIds() 获取<p>私有网络 ID 数组。如果不配置该参数或设置数组为空则默认选择基础网络。例如47525。该参数暂时保留，可忽略。请根据 UniqVpcIds 参数格式设置私有网络ID数组。</p>
 * @method void setVpcIds(array $VpcIds) 设置<p>私有网络 ID 数组。如果不配置该参数或设置数组为空则默认选择基础网络。例如47525。该参数暂时保留，可忽略。请根据 UniqVpcIds 参数格式设置私有网络ID数组。</p>
 * @method array getSubnetIds() 获取<p>私有网络所属子网 ID 数组，例如：56854。该参数暂时保留，可忽略。请根据 UniqSubnetIds 参数格式设置私有网络子网 ID 数组。</p>
 * @method void setSubnetIds(array $SubnetIds) 设置<p>私有网络所属子网 ID 数组，例如：56854。该参数暂时保留，可忽略。请根据 UniqSubnetIds 参数格式设置私有网络子网 ID 数组。</p>
 * @method string getSearchKey() 获取<p>设置模糊查询关键字段，仅实例名称支持模糊查询。</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>设置模糊查询关键字段，仅实例名称支持模糊查询。</p>
 * @method array getProjectIds() 获取<p>项目 ID 组成的数组。</p>
 * @method void setProjectIds(array $ProjectIds) 设置<p>项目 ID 组成的数组。</p>
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method array getUniqVpcIds() 获取<p>私有网络 ID 数组。如果不配置该参数或者设置数组为空则默认选择基础网络，如：vpc-sad23jfdfk。</p>
 * @method void setUniqVpcIds(array $UniqVpcIds) 设置<p>私有网络 ID 数组。如果不配置该参数或者设置数组为空则默认选择基础网络，如：vpc-sad23jfdfk。</p>
 * @method array getUniqSubnetIds() 获取<p>私有网络所属子网 ID 数组，如：subnet-fdj24n34j2。</p>
 * @method void setUniqSubnetIds(array $UniqSubnetIds) 设置<p>私有网络所属子网 ID 数组，如：subnet-fdj24n34j2。</p>
 * @method array getRegionIds() 获取<p>地域 ID 数组，该参数已经弃用，可通过公共参数Region查询对应地域。</p>
 * @method void setRegionIds(array $RegionIds) 设置<p>地域 ID 数组，该参数已经弃用，可通过公共参数Region查询对应地域。</p>
 * @method array getStatus() 获取<p>实例状态。</p><ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
 * @method void setStatus(array $Status) 设置<p>实例状态。</p><ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
 * @method integer getTypeVersion() 获取<p>实例架构版本。</p><ul><li>1：单机版。</li><li>2：主从版。</li><li>3：集群版。</li></ul>
 * @method void setTypeVersion(integer $TypeVersion) 设置<p>实例架构版本。</p><ul><li>1：单机版。</li><li>2：主从版。</li><li>3：集群版。</li></ul>
 * @method string getEngineName() 获取<p>存储引擎信息。可设置为Redis-2.8、Redis-4.0、Redis-5.0、Redis-6.0 或者 CKV。</p>
 * @method void setEngineName(string $EngineName) 设置<p>存储引擎信息。可设置为Redis-2.8、Redis-4.0、Redis-5.0、Redis-6.0 或者 CKV。</p>
 * @method array getAutoRenew() 获取<p>续费模式。</p><ul><li>0：手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</li></ul>
 * @method void setAutoRenew(array $AutoRenew) 设置<p>续费模式。</p><ul><li>0：手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</li></ul>
 * @method string getBillingMode() 获取<p>计费模式。</p><ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
 * @method void setBillingMode(string $BillingMode) 设置<p>计费模式。</p><ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
 * @method integer getType() 获取<p>实例类型。</p><ul><li>2：Redis 2.8 内存版（标准架构）。</li><li>3：CKV 3.2 内存版（标准架构）。</li><li>4：CKV 3.2 内存版（集群架构）。</li><li>5：Redis 2.8 内存版（单机）。</li><li>6：Redis 4.0 内存版（标准架构）。</li><li>7：Redis 4.0 内存版（集群架构）。</li><li>8：Redis 5.0 内存版（标准架构）。</li><li>9：Redis 5.0 内存版（集群架构）。</li><li>15：Redis 6.2 内存版（标准架构）。</li><li>16：Redis 6.2 内存版（集群架构）。</li><li>17：Redis 7.0 内存版（标准架构）。</li><li>18：Redis 7.0 内存版（集群架构）。</li><li>200:Memcached 1.6 内存版（集群架构）。</li></ul>
 * @method void setType(integer $Type) 设置<p>实例类型。</p><ul><li>2：Redis 2.8 内存版（标准架构）。</li><li>3：CKV 3.2 内存版（标准架构）。</li><li>4：CKV 3.2 内存版（集群架构）。</li><li>5：Redis 2.8 内存版（单机）。</li><li>6：Redis 4.0 内存版（标准架构）。</li><li>7：Redis 4.0 内存版（集群架构）。</li><li>8：Redis 5.0 内存版（标准架构）。</li><li>9：Redis 5.0 内存版（集群架构）。</li><li>15：Redis 6.2 内存版（标准架构）。</li><li>16：Redis 6.2 内存版（集群架构）。</li><li>17：Redis 7.0 内存版（标准架构）。</li><li>18：Redis 7.0 内存版（集群架构）。</li><li>200:Memcached 1.6 内存版（集群架构）。</li></ul>
 * @method array getSearchKeys() 获取<p>该参数为数组类型，支持配置实例名称、实例 ID、IP地址，其中实例名称为模糊匹配，实例 ID 和 IP 地址精确匹配。</p><ul><li>数组中每一个元素取并集进行匹配查询。</li><li><strong>InstanceId</strong> 与 <strong>SearchKeys</strong> 同时配置，则取二者交集进行匹配查询。</li></ul>
 * @method void setSearchKeys(array $SearchKeys) 设置<p>该参数为数组类型，支持配置实例名称、实例 ID、IP地址，其中实例名称为模糊匹配，实例 ID 和 IP 地址精确匹配。</p><ul><li>数组中每一个元素取并集进行匹配查询。</li><li><strong>InstanceId</strong> 与 <strong>SearchKeys</strong> 同时配置，则取二者交集进行匹配查询。</li></ul>
 * @method array getTypeList() 获取<p>内部参数，用户可忽略。</p>
 * @method void setTypeList(array $TypeList) 设置<p>内部参数，用户可忽略。</p>
 * @method string getMonitorVersion() 获取<p>内部参数，用户可忽略。</p>
 * @method void setMonitorVersion(string $MonitorVersion) 设置<p>内部参数，用户可忽略。</p>
 * @method array getInstanceTags() 获取<p>根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。</p>
 * @method void setInstanceTags(array $InstanceTags) 设置<p>根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。</p>
 * @method array getTagKeys() 获取<p>根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。</p>
 * @method void setTagKeys(array $TagKeys) 设置<p>根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。</p>
 * @method array getProductVersions() 获取<p>实例的部署类型。如果该参数不配置或者数组设置为空值，则默认不依据此参数过滤实例。</p><p>枚举值：</p><ul><li>local： 通用 I 型。</li><li>localv2： 通用 II 型。</li><li>cdc： 独享集群型。</li></ul>
 * @method void setProductVersions(array $ProductVersions) 设置<p>实例的部署类型。如果该参数不配置或者数组设置为空值，则默认不依据此参数过滤实例。</p><p>枚举值：</p><ul><li>local： 通用 I 型。</li><li>localv2： 通用 II 型。</li><li>cdc： 独享集群型。</li></ul>
 * @method array getInstanceIds() 获取<p>批量查询指定的实例 ID，返回结果已 Limit 限制为主。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>批量查询指定的实例 ID，返回结果已 Limit 限制为主。</p>
 * @method string getAzMode() 获取<p>可用区模式。</p><ul><li>singleaz：单可用区。</li><li>multiaz：多可用区。</li></ul>
 * @method void setAzMode(string $AzMode) 设置<p>可用区模式。</p><ul><li>singleaz：单可用区。</li><li>multiaz：多可用区。</li></ul>
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer <p>每页输出实例的数量，参数默认值20，最大值为1000。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。</p>
     */
    public $Offset;

    /**
     * @var string <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例列表排序依据，枚举值如下所示：</p><ul><li>projectId：依据项目ID排序。</li><li>createtime：依据实例创建时间排序。</li><li>instancename：依据实例名称排序。</li><li>type：依据实例类型排序。</li><li>curDeadline：依据实例到期时间排序。</li></ul>
     */
    public $OrderBy;

    /**
     * @var integer <p>实例排序方式，默认为倒序排序。</p><ul><li>1：倒序。</li><li>0：顺序。</li></ul>
     */
    public $OrderType;

    /**
     * @var array <p>私有网络 ID 数组。如果不配置该参数或设置数组为空则默认选择基础网络。例如47525。该参数暂时保留，可忽略。请根据 UniqVpcIds 参数格式设置私有网络ID数组。</p>
     */
    public $VpcIds;

    /**
     * @var array <p>私有网络所属子网 ID 数组，例如：56854。该参数暂时保留，可忽略。请根据 UniqSubnetIds 参数格式设置私有网络子网 ID 数组。</p>
     */
    public $SubnetIds;

    /**
     * @var string <p>设置模糊查询关键字段，仅实例名称支持模糊查询。</p>
     */
    public $SearchKey;

    /**
     * @var array <p>项目 ID 组成的数组。</p>
     */
    public $ProjectIds;

    /**
     * @var string <p>实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var array <p>私有网络 ID 数组。如果不配置该参数或者设置数组为空则默认选择基础网络，如：vpc-sad23jfdfk。</p>
     */
    public $UniqVpcIds;

    /**
     * @var array <p>私有网络所属子网 ID 数组，如：subnet-fdj24n34j2。</p>
     */
    public $UniqSubnetIds;

    /**
     * @var array <p>地域 ID 数组，该参数已经弃用，可通过公共参数Region查询对应地域。</p>
     */
    public $RegionIds;

    /**
     * @var array <p>实例状态。</p><ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>实例架构版本。</p><ul><li>1：单机版。</li><li>2：主从版。</li><li>3：集群版。</li></ul>
     */
    public $TypeVersion;

    /**
     * @var string <p>存储引擎信息。可设置为Redis-2.8、Redis-4.0、Redis-5.0、Redis-6.0 或者 CKV。</p>
     */
    public $EngineName;

    /**
     * @var array <p>续费模式。</p><ul><li>0：手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</li></ul>
     */
    public $AutoRenew;

    /**
     * @var string <p>计费模式。</p><ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
     */
    public $BillingMode;

    /**
     * @var integer <p>实例类型。</p><ul><li>2：Redis 2.8 内存版（标准架构）。</li><li>3：CKV 3.2 内存版（标准架构）。</li><li>4：CKV 3.2 内存版（集群架构）。</li><li>5：Redis 2.8 内存版（单机）。</li><li>6：Redis 4.0 内存版（标准架构）。</li><li>7：Redis 4.0 内存版（集群架构）。</li><li>8：Redis 5.0 内存版（标准架构）。</li><li>9：Redis 5.0 内存版（集群架构）。</li><li>15：Redis 6.2 内存版（标准架构）。</li><li>16：Redis 6.2 内存版（集群架构）。</li><li>17：Redis 7.0 内存版（标准架构）。</li><li>18：Redis 7.0 内存版（集群架构）。</li><li>200:Memcached 1.6 内存版（集群架构）。</li></ul>
     */
    public $Type;

    /**
     * @var array <p>该参数为数组类型，支持配置实例名称、实例 ID、IP地址，其中实例名称为模糊匹配，实例 ID 和 IP 地址精确匹配。</p><ul><li>数组中每一个元素取并集进行匹配查询。</li><li><strong>InstanceId</strong> 与 <strong>SearchKeys</strong> 同时配置，则取二者交集进行匹配查询。</li></ul>
     */
    public $SearchKeys;

    /**
     * @var array <p>内部参数，用户可忽略。</p>
     */
    public $TypeList;

    /**
     * @var string <p>内部参数，用户可忽略。</p>
     */
    public $MonitorVersion;

    /**
     * @var array <p>根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。</p>
     */
    public $InstanceTags;

    /**
     * @var array <p>根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。</p>
     */
    public $TagKeys;

    /**
     * @var array <p>实例的部署类型。如果该参数不配置或者数组设置为空值，则默认不依据此参数过滤实例。</p><p>枚举值：</p><ul><li>local： 通用 I 型。</li><li>localv2： 通用 II 型。</li><li>cdc： 独享集群型。</li></ul>
     */
    public $ProductVersions;

    /**
     * @var array <p>批量查询指定的实例 ID，返回结果已 Limit 限制为主。</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>可用区模式。</p><ul><li>singleaz：单可用区。</li><li>multiaz：多可用区。</li></ul>
     */
    public $AzMode;

    /**
     * @param integer $Limit <p>每页输出实例的数量，参数默认值20，最大值为1000。</p>
     * @param integer $Offset <p>分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。</p>
     * @param string $InstanceId <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param string $OrderBy <p>实例列表排序依据，枚举值如下所示：</p><ul><li>projectId：依据项目ID排序。</li><li>createtime：依据实例创建时间排序。</li><li>instancename：依据实例名称排序。</li><li>type：依据实例类型排序。</li><li>curDeadline：依据实例到期时间排序。</li></ul>
     * @param integer $OrderType <p>实例排序方式，默认为倒序排序。</p><ul><li>1：倒序。</li><li>0：顺序。</li></ul>
     * @param array $VpcIds <p>私有网络 ID 数组。如果不配置该参数或设置数组为空则默认选择基础网络。例如47525。该参数暂时保留，可忽略。请根据 UniqVpcIds 参数格式设置私有网络ID数组。</p>
     * @param array $SubnetIds <p>私有网络所属子网 ID 数组，例如：56854。该参数暂时保留，可忽略。请根据 UniqSubnetIds 参数格式设置私有网络子网 ID 数组。</p>
     * @param string $SearchKey <p>设置模糊查询关键字段，仅实例名称支持模糊查询。</p>
     * @param array $ProjectIds <p>项目 ID 组成的数组。</p>
     * @param string $InstanceName <p>实例名称。</p>
     * @param array $UniqVpcIds <p>私有网络 ID 数组。如果不配置该参数或者设置数组为空则默认选择基础网络，如：vpc-sad23jfdfk。</p>
     * @param array $UniqSubnetIds <p>私有网络所属子网 ID 数组，如：subnet-fdj24n34j2。</p>
     * @param array $RegionIds <p>地域 ID 数组，该参数已经弃用，可通过公共参数Region查询对应地域。</p>
     * @param array $Status <p>实例状态。</p><ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
     * @param integer $TypeVersion <p>实例架构版本。</p><ul><li>1：单机版。</li><li>2：主从版。</li><li>3：集群版。</li></ul>
     * @param string $EngineName <p>存储引擎信息。可设置为Redis-2.8、Redis-4.0、Redis-5.0、Redis-6.0 或者 CKV。</p>
     * @param array $AutoRenew <p>续费模式。</p><ul><li>0：手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</li></ul>
     * @param string $BillingMode <p>计费模式。</p><ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
     * @param integer $Type <p>实例类型。</p><ul><li>2：Redis 2.8 内存版（标准架构）。</li><li>3：CKV 3.2 内存版（标准架构）。</li><li>4：CKV 3.2 内存版（集群架构）。</li><li>5：Redis 2.8 内存版（单机）。</li><li>6：Redis 4.0 内存版（标准架构）。</li><li>7：Redis 4.0 内存版（集群架构）。</li><li>8：Redis 5.0 内存版（标准架构）。</li><li>9：Redis 5.0 内存版（集群架构）。</li><li>15：Redis 6.2 内存版（标准架构）。</li><li>16：Redis 6.2 内存版（集群架构）。</li><li>17：Redis 7.0 内存版（标准架构）。</li><li>18：Redis 7.0 内存版（集群架构）。</li><li>200:Memcached 1.6 内存版（集群架构）。</li></ul>
     * @param array $SearchKeys <p>该参数为数组类型，支持配置实例名称、实例 ID、IP地址，其中实例名称为模糊匹配，实例 ID 和 IP 地址精确匹配。</p><ul><li>数组中每一个元素取并集进行匹配查询。</li><li><strong>InstanceId</strong> 与 <strong>SearchKeys</strong> 同时配置，则取二者交集进行匹配查询。</li></ul>
     * @param array $TypeList <p>内部参数，用户可忽略。</p>
     * @param string $MonitorVersion <p>内部参数，用户可忽略。</p>
     * @param array $InstanceTags <p>根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。</p>
     * @param array $TagKeys <p>根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。</p>
     * @param array $ProductVersions <p>实例的部署类型。如果该参数不配置或者数组设置为空值，则默认不依据此参数过滤实例。</p><p>枚举值：</p><ul><li>local： 通用 I 型。</li><li>localv2： 通用 II 型。</li><li>cdc： 独享集群型。</li></ul>
     * @param array $InstanceIds <p>批量查询指定的实例 ID，返回结果已 Limit 限制为主。</p>
     * @param string $AzMode <p>可用区模式。</p><ul><li>singleaz：单可用区。</li><li>multiaz：多可用区。</li></ul>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("UniqVpcIds",$param) and $param["UniqVpcIds"] !== null) {
            $this->UniqVpcIds = $param["UniqVpcIds"];
        }

        if (array_key_exists("UniqSubnetIds",$param) and $param["UniqSubnetIds"] !== null) {
            $this->UniqSubnetIds = $param["UniqSubnetIds"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TypeVersion",$param) and $param["TypeVersion"] !== null) {
            $this->TypeVersion = $param["TypeVersion"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SearchKeys",$param) and $param["SearchKeys"] !== null) {
            $this->SearchKeys = $param["SearchKeys"];
        }

        if (array_key_exists("TypeList",$param) and $param["TypeList"] !== null) {
            $this->TypeList = $param["TypeList"];
        }

        if (array_key_exists("MonitorVersion",$param) and $param["MonitorVersion"] !== null) {
            $this->MonitorVersion = $param["MonitorVersion"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("ProductVersions",$param) and $param["ProductVersions"] !== null) {
            $this->ProductVersions = $param["ProductVersions"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("AzMode",$param) and $param["AzMode"] !== null) {
            $this->AzMode = $param["AzMode"];
        }
    }
}

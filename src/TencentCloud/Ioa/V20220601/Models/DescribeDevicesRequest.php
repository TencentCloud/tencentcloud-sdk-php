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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDevices请求参数结构体
 *
 * @method string getDomainInstanceId() 获取管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method void setDomainInstanceId(string $DomainInstanceId) 设置管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method Condition getCondition() 获取<p>过滤条件参数（字段含义请参考接口返回值）</p><ul><li>Mid, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Name, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Itime, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>UserName, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>MacAddr, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>UserId, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Ip, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Tags，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>LocalIpList，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>SerialNum，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Version，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>StrVersion，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>RtpStatus，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>HostName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>IoaUserName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>GroupName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>CriticalVulListCount，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>RiskCount，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>VulVersion，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>Virusver，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>SysRepver，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>BaseBoardSn，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Os，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>ConnActiveTime，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>FirewallStatus，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>DomainName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>SysRepVersion，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>VirusVer，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Cpu，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Memory，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>HardDiskSize，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>AccountName，类型String，支持操作：【like.ilike】，支持排序</li><li>AccountGroupName，类型String，支持操作：【like.ilike】，支持排序</li></ul><p>分页参数</p><ul><li>PageNum 从1开始，小于等于0时使用默认参数</li><li>PageSize 最大值5000，最好不超过100</li></ul>
 * @method void setCondition(Condition $Condition) 设置<p>过滤条件参数（字段含义请参考接口返回值）</p><ul><li>Mid, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Name, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Itime, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>UserName, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>MacAddr, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>UserId, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Ip, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Tags，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>LocalIpList，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>SerialNum，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Version，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>StrVersion，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>RtpStatus，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>HostName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>IoaUserName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>GroupName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>CriticalVulListCount，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>RiskCount，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>VulVersion，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>Virusver，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>SysRepver，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>BaseBoardSn，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Os，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>ConnActiveTime，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>FirewallStatus，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>DomainName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>SysRepVersion，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>VirusVer，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Cpu，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Memory，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>HardDiskSize，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>AccountName，类型String，支持操作：【like.ilike】，支持排序</li><li>AccountGroupName，类型String，支持操作：【like.ilike】，支持排序</li></ul><p>分页参数</p><ul><li>PageNum 从1开始，小于等于0时使用默认参数</li><li>PageSize 最大值5000，最好不超过100</li></ul>
 * @method integer getGroupId() 获取<p>【和GroupIds必须有一个填写】设备分组id（需要和OsType匹配），下面是私有化场景下默认id：<br>id-名称-操作系统<br>1    全网终端    Win<br>2    未分组终端    Win<br>30000000    服务器    Win<br>40000101    全网终端    Linux<br>40000102    未分组终端    Linux<br>40000103    服务器    Linux<br>40000201    全网终端    macOS<br>40000202    未分组终端    macOS<br>40000203    服务器    macOS<br>40000401    全网终端    Android<br>40000402    未分组终端    Android<br>40000501    全网终端    iOS<br>40000502    未分组终端    iOS</p><p>SaaS需要调用分组接口DescribeDeviceChildGroups获取对应分组id</p>
 * @method void setGroupId(integer $GroupId) 设置<p>【和GroupIds必须有一个填写】设备分组id（需要和OsType匹配），下面是私有化场景下默认id：<br>id-名称-操作系统<br>1    全网终端    Win<br>2    未分组终端    Win<br>30000000    服务器    Win<br>40000101    全网终端    Linux<br>40000102    未分组终端    Linux<br>40000103    服务器    Linux<br>40000201    全网终端    macOS<br>40000202    未分组终端    macOS<br>40000203    服务器    macOS<br>40000401    全网终端    Android<br>40000402    未分组终端    Android<br>40000501    全网终端    iOS<br>40000502    未分组终端    iOS</p><p>SaaS需要调用分组接口DescribeDeviceChildGroups获取对应分组id</p>
 * @method integer getOsType() 获取<p>系统类型（0: win，1：linux，2: mac，4：android，5：ios，-1：全系统（SaaS一体化版本） ； 不传默认为0）(只支持32位)，需要和GroupId或者GroupIds匹配</p>
 * @method void setOsType(integer $OsType) 设置<p>系统类型（0: win，1：linux，2: mac，4：android，5：ios，-1：全系统（SaaS一体化版本） ； 不传默认为0）(只支持32位)，需要和GroupId或者GroupIds匹配</p>
 * @method integer getOnlineStatus() 获取<p>在线状态 （2表示在线，0或者1表示离线）</p>
 * @method void setOnlineStatus(integer $OnlineStatus) 设置<p>在线状态 （2表示在线，0或者1表示离线）</p>
 * @method array getFilters() 获取<p>过滤条件--兼容旧接口,参数同Condition</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件--兼容旧接口,参数同Condition</p>
 * @method Sort getSort() 获取<p>排序字段--兼容旧接口,参数同Condition</p>
 * @method void setSort(Sort $Sort) 设置<p>排序字段--兼容旧接口,参数同Condition</p>
 * @method integer getPageNum() 获取<p>获取第几页--兼容旧接口,参数同Condition</p>
 * @method void setPageNum(integer $PageNum) 设置<p>获取第几页--兼容旧接口,参数同Condition</p>
 * @method integer getPageSize() 获取<p>每页获取数--兼容旧接口,参数同Condition</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页获取数--兼容旧接口,参数同Condition</p>
 * @method integer getStatus() 获取<p>授权状态： 4基础授权 5高级授权</p>
 * @method void setStatus(integer $Status) 设置<p>授权状态： 4基础授权 5高级授权</p>
 * @method array getGroupIds() 获取<p>【和GroupId必须有一个填写】设备分组id列表（需要和OsType匹配）</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>【和GroupId必须有一个填写】设备分组id列表（需要和OsType匹配）</p>
 */
class DescribeDevicesRequest extends AbstractModel
{
    /**
     * @var string 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     */
    public $DomainInstanceId;

    /**
     * @var Condition <p>过滤条件参数（字段含义请参考接口返回值）</p><ul><li>Mid, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Name, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Itime, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>UserName, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>MacAddr, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>UserId, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Ip, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Tags，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>LocalIpList，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>SerialNum，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Version，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>StrVersion，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>RtpStatus，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>HostName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>IoaUserName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>GroupName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>CriticalVulListCount，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>RiskCount，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>VulVersion，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>Virusver，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>SysRepver，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>BaseBoardSn，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Os，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>ConnActiveTime，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>FirewallStatus，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>DomainName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>SysRepVersion，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>VirusVer，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Cpu，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Memory，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>HardDiskSize，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>AccountName，类型String，支持操作：【like.ilike】，支持排序</li><li>AccountGroupName，类型String，支持操作：【like.ilike】，支持排序</li></ul><p>分页参数</p><ul><li>PageNum 从1开始，小于等于0时使用默认参数</li><li>PageSize 最大值5000，最好不超过100</li></ul>
     */
    public $Condition;

    /**
     * @var integer <p>【和GroupIds必须有一个填写】设备分组id（需要和OsType匹配），下面是私有化场景下默认id：<br>id-名称-操作系统<br>1    全网终端    Win<br>2    未分组终端    Win<br>30000000    服务器    Win<br>40000101    全网终端    Linux<br>40000102    未分组终端    Linux<br>40000103    服务器    Linux<br>40000201    全网终端    macOS<br>40000202    未分组终端    macOS<br>40000203    服务器    macOS<br>40000401    全网终端    Android<br>40000402    未分组终端    Android<br>40000501    全网终端    iOS<br>40000502    未分组终端    iOS</p><p>SaaS需要调用分组接口DescribeDeviceChildGroups获取对应分组id</p>
     */
    public $GroupId;

    /**
     * @var integer <p>系统类型（0: win，1：linux，2: mac，4：android，5：ios，-1：全系统（SaaS一体化版本） ； 不传默认为0）(只支持32位)，需要和GroupId或者GroupIds匹配</p>
     */
    public $OsType;

    /**
     * @var integer <p>在线状态 （2表示在线，0或者1表示离线）</p>
     */
    public $OnlineStatus;

    /**
     * @var array <p>过滤条件--兼容旧接口,参数同Condition</p>
     */
    public $Filters;

    /**
     * @var Sort <p>排序字段--兼容旧接口,参数同Condition</p>
     */
    public $Sort;

    /**
     * @var integer <p>获取第几页--兼容旧接口,参数同Condition</p>
     */
    public $PageNum;

    /**
     * @var integer <p>每页获取数--兼容旧接口,参数同Condition</p>
     */
    public $PageSize;

    /**
     * @var integer <p>授权状态： 4基础授权 5高级授权</p>
     */
    public $Status;

    /**
     * @var array <p>【和GroupId必须有一个填写】设备分组id列表（需要和OsType匹配）</p>
     */
    public $GroupIds;

    /**
     * @param string $DomainInstanceId 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     * @param Condition $Condition <p>过滤条件参数（字段含义请参考接口返回值）</p><ul><li>Mid, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Name, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Itime, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>UserName, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>MacAddr, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>UserId, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Ip, 类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Tags，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>LocalIpList，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>SerialNum，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Version，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>StrVersion，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>RtpStatus，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>HostName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>IoaUserName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>GroupName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>CriticalVulListCount，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>RiskCount，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>VulVersion，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>Virusver，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>SysRepver，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>BaseBoardSn，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Os，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>ConnActiveTime，类型String，支持操作：【eq，like，ilike】，<strong>不支持排序</strong></li><li>FirewallStatus，<strong>类型Int</strong>，支持操作：【eq】，<strong>不支持排序</strong></li><li>DomainName，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>SysRepVersion，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>VirusVer，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Cpu，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>Memory，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>HardDiskSize，类型String，支持操作：【eq，like，ilike】，支持排序</li><li>AccountName，类型String，支持操作：【like.ilike】，支持排序</li><li>AccountGroupName，类型String，支持操作：【like.ilike】，支持排序</li></ul><p>分页参数</p><ul><li>PageNum 从1开始，小于等于0时使用默认参数</li><li>PageSize 最大值5000，最好不超过100</li></ul>
     * @param integer $GroupId <p>【和GroupIds必须有一个填写】设备分组id（需要和OsType匹配），下面是私有化场景下默认id：<br>id-名称-操作系统<br>1    全网终端    Win<br>2    未分组终端    Win<br>30000000    服务器    Win<br>40000101    全网终端    Linux<br>40000102    未分组终端    Linux<br>40000103    服务器    Linux<br>40000201    全网终端    macOS<br>40000202    未分组终端    macOS<br>40000203    服务器    macOS<br>40000401    全网终端    Android<br>40000402    未分组终端    Android<br>40000501    全网终端    iOS<br>40000502    未分组终端    iOS</p><p>SaaS需要调用分组接口DescribeDeviceChildGroups获取对应分组id</p>
     * @param integer $OsType <p>系统类型（0: win，1：linux，2: mac，4：android，5：ios，-1：全系统（SaaS一体化版本） ； 不传默认为0）(只支持32位)，需要和GroupId或者GroupIds匹配</p>
     * @param integer $OnlineStatus <p>在线状态 （2表示在线，0或者1表示离线）</p>
     * @param array $Filters <p>过滤条件--兼容旧接口,参数同Condition</p>
     * @param Sort $Sort <p>排序字段--兼容旧接口,参数同Condition</p>
     * @param integer $PageNum <p>获取第几页--兼容旧接口,参数同Condition</p>
     * @param integer $PageSize <p>每页获取数--兼容旧接口,参数同Condition</p>
     * @param integer $Status <p>授权状态： 4基础授权 5高级授权</p>
     * @param array $GroupIds <p>【和GroupId必须有一个填写】设备分组id列表（需要和OsType匹配）</p>
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
        if (array_key_exists("DomainInstanceId",$param) and $param["DomainInstanceId"] !== null) {
            $this->DomainInstanceId = $param["DomainInstanceId"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new Condition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("OnlineStatus",$param) and $param["OnlineStatus"] !== null) {
            $this->OnlineStatus = $param["OnlineStatus"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new Sort();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}

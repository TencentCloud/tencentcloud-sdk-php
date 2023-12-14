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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDevices请求参数结构体
 *
 * @method Condition getCondition() 获取过滤条件<br>
<li>Ip - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照Ip进行过滤。</li>
<li>MacAddr - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照mac地址进行过滤。</li>
<li>IoaUserName - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照ioa用户名进行过滤。</li>
分页参数<br>
<li>PageNum 从1开始，小于等于0时使用默认参数。</li>
<li>PageSize 最大值5000，最好不超过100。</li>
 * @method void setCondition(Condition $Condition) 设置过滤条件<br>
<li>Ip - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照Ip进行过滤。</li>
<li>MacAddr - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照mac地址进行过滤。</li>
<li>IoaUserName - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照ioa用户名进行过滤。</li>
分页参数<br>
<li>PageNum 从1开始，小于等于0时使用默认参数。</li>
<li>PageSize 最大值5000，最好不超过100。</li>
 * @method integer getGroupId() 获取私有化默认分组id-名称-操作系统
1	全网终端	Win
2	未分组终端	Win
30000000	服务器	Win
40000101	全网终端	Linux
40000102	未分组终端	Linux
40000103	服务器	Linux
40000201	全网终端	macOS
40000202	未分组终端	macOS
40000203	服务器	macOS
40000401	全网终端	Android
40000402	未分组终端	Android
40000501	全网终端	iOS
40000502	未分组终端	iOS
 * @method void setGroupId(integer $GroupId) 设置私有化默认分组id-名称-操作系统
1	全网终端	Win
2	未分组终端	Win
30000000	服务器	Win
40000101	全网终端	Linux
40000102	未分组终端	Linux
40000103	服务器	Linux
40000201	全网终端	macOS
40000202	未分组终端	macOS
40000203	服务器	macOS
40000401	全网终端	Android
40000402	未分组终端	Android
40000501	全网终端	iOS
40000502	未分组终端	iOS
 * @method integer getOsType() 获取系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）
 * @method void setOsType(integer $OsType) 设置系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）
 * @method integer getOnlineStatus() 获取在线状态 2 在线 0，1 离线
 * @method void setOnlineStatus(integer $OnlineStatus) 设置在线状态 2 在线 0，1 离线
 * @method array getFilters() 获取过滤条件--兼容旧接口,参数同Condition
 * @method void setFilters(array $Filters) 设置过滤条件--兼容旧接口,参数同Condition
 * @method Sort getSort() 获取排序字段--兼容旧接口,参数同Condition
 * @method void setSort(Sort $Sort) 设置排序字段--兼容旧接口,参数同Condition
 * @method integer getPageNum() 获取获取第几页--兼容旧接口,参数同Condition(只支持32位)
 * @method void setPageNum(integer $PageNum) 设置获取第几页--兼容旧接口,参数同Condition(只支持32位)
 * @method integer getPageSize() 获取每页获取数--兼容旧接口,参数同Condition(只支持32位)
 * @method void setPageSize(integer $PageSize) 设置每页获取数--兼容旧接口,参数同Condition(只支持32位)
 * @method integer getStatus() 获取授权状态 4未授权 5已授权
 * @method void setStatus(integer $Status) 设置授权状态 4未授权 5已授权
 */
class DescribeDevicesRequest extends AbstractModel
{
    /**
     * @var Condition 过滤条件<br>
<li>Ip - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照Ip进行过滤。</li>
<li>MacAddr - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照mac地址进行过滤。</li>
<li>IoaUserName - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照ioa用户名进行过滤。</li>
分页参数<br>
<li>PageNum 从1开始，小于等于0时使用默认参数。</li>
<li>PageSize 最大值5000，最好不超过100。</li>
     */
    public $Condition;

    /**
     * @var integer 私有化默认分组id-名称-操作系统
1	全网终端	Win
2	未分组终端	Win
30000000	服务器	Win
40000101	全网终端	Linux
40000102	未分组终端	Linux
40000103	服务器	Linux
40000201	全网终端	macOS
40000202	未分组终端	macOS
40000203	服务器	macOS
40000401	全网终端	Android
40000402	未分组终端	Android
40000501	全网终端	iOS
40000502	未分组终端	iOS
     */
    public $GroupId;

    /**
     * @var integer 系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）
     */
    public $OsType;

    /**
     * @var integer 在线状态 2 在线 0，1 离线
     */
    public $OnlineStatus;

    /**
     * @var array 过滤条件--兼容旧接口,参数同Condition
     */
    public $Filters;

    /**
     * @var Sort 排序字段--兼容旧接口,参数同Condition
     */
    public $Sort;

    /**
     * @var integer 获取第几页--兼容旧接口,参数同Condition(只支持32位)
     */
    public $PageNum;

    /**
     * @var integer 每页获取数--兼容旧接口,参数同Condition(只支持32位)
     */
    public $PageSize;

    /**
     * @var integer 授权状态 4未授权 5已授权
     */
    public $Status;

    /**
     * @param Condition $Condition 过滤条件<br>
<li>Ip - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照Ip进行过滤。</li>
<li>MacAddr - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照mac地址进行过滤。</li>
<li>IoaUserName - String - 是否必填：否 - 操作符: eq  - 排序支持：否- 按照ioa用户名进行过滤。</li>
分页参数<br>
<li>PageNum 从1开始，小于等于0时使用默认参数。</li>
<li>PageSize 最大值5000，最好不超过100。</li>
     * @param integer $GroupId 私有化默认分组id-名称-操作系统
1	全网终端	Win
2	未分组终端	Win
30000000	服务器	Win
40000101	全网终端	Linux
40000102	未分组终端	Linux
40000103	服务器	Linux
40000201	全网终端	macOS
40000202	未分组终端	macOS
40000203	服务器	macOS
40000401	全网终端	Android
40000402	未分组终端	Android
40000501	全网终端	iOS
40000502	未分组终端	iOS
     * @param integer $OsType 系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）
     * @param integer $OnlineStatus 在线状态 2 在线 0，1 离线
     * @param array $Filters 过滤条件--兼容旧接口,参数同Condition
     * @param Sort $Sort 排序字段--兼容旧接口,参数同Condition
     * @param integer $PageNum 获取第几页--兼容旧接口,参数同Condition(只支持32位)
     * @param integer $PageSize 每页获取数--兼容旧接口,参数同Condition(只支持32位)
     * @param integer $Status 授权状态 4未授权 5已授权
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
    }
}

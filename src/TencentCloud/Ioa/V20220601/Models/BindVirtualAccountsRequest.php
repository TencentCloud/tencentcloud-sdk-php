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
 * BindVirtualAccounts请求参数结构体
 *
 * @method integer getVirtualGroupId() 获取<p>Comment: 虚拟组id;Required:true</p>
 * @method void setVirtualGroupId(integer $VirtualGroupId) 设置<p>Comment: 虚拟组id;Required:true</p>
 * @method array getAccountIdList() 获取<p>Comment: 要绑定的账户Id集合，这里的Id指的是DescribeLocalAccountsData结构体里返回的Id;Required:true</p>
 * @method void setAccountIdList(array $AccountIdList) 设置<p>Comment: 要绑定的账户Id集合，这里的Id指的是DescribeLocalAccountsData结构体里返回的Id;Required:true</p>
 * @method array getAccountUserList() 获取<p>Comment: 要绑定的账户(目录MenuId+登录账号UserId)集合，与AccountIdList二选一或并用，查不到的账号会被跳过;Required:false</p>
 * @method void setAccountUserList(array $AccountUserList) 设置<p>Comment: 要绑定的账户(目录MenuId+登录账号UserId)集合，与AccountIdList二选一或并用，查不到的账号会被跳过;Required:false</p>
 * @method string getDomainInstanceId() 获取Comment: 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method void setDomainInstanceId(string $DomainInstanceId) 设置Comment: 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 */
class BindVirtualAccountsRequest extends AbstractModel
{
    /**
     * @var integer <p>Comment: 虚拟组id;Required:true</p>
     */
    public $VirtualGroupId;

    /**
     * @var array <p>Comment: 要绑定的账户Id集合，这里的Id指的是DescribeLocalAccountsData结构体里返回的Id;Required:true</p>
     */
    public $AccountIdList;

    /**
     * @var array <p>Comment: 要绑定的账户(目录MenuId+登录账号UserId)集合，与AccountIdList二选一或并用，查不到的账号会被跳过;Required:false</p>
     */
    public $AccountUserList;

    /**
     * @var string Comment: 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     */
    public $DomainInstanceId;

    /**
     * @param integer $VirtualGroupId <p>Comment: 虚拟组id;Required:true</p>
     * @param array $AccountIdList <p>Comment: 要绑定的账户Id集合，这里的Id指的是DescribeLocalAccountsData结构体里返回的Id;Required:true</p>
     * @param array $AccountUserList <p>Comment: 要绑定的账户(目录MenuId+登录账号UserId)集合，与AccountIdList二选一或并用，查不到的账号会被跳过;Required:false</p>
     * @param string $DomainInstanceId Comment: 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
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
        if (array_key_exists("VirtualGroupId",$param) and $param["VirtualGroupId"] !== null) {
            $this->VirtualGroupId = $param["VirtualGroupId"];
        }

        if (array_key_exists("AccountIdList",$param) and $param["AccountIdList"] !== null) {
            $this->AccountIdList = $param["AccountIdList"];
        }

        if (array_key_exists("AccountUserList",$param) and $param["AccountUserList"] !== null) {
            $this->AccountUserList = [];
            foreach ($param["AccountUserList"] as $key => $value){
                $obj = new AccountUserIdItem();
                $obj->deserialize($value);
                array_push($this->AccountUserList, $obj);
            }
        }

        if (array_key_exists("DomainInstanceId",$param) and $param["DomainInstanceId"] !== null) {
            $this->DomainInstanceId = $param["DomainInstanceId"];
        }
    }
}

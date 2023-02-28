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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceAccounts请求参数结构体
 *
 * @method array getIdSet() 获取主机账号ID集合，非必需，如果使用IdSet则忽略其他过滤参数
 * @method void setIdSet(array $IdSet) 设置主机账号ID集合，非必需，如果使用IdSet则忽略其他过滤参数
 * @method string getAccount() 获取主机账号名，模糊查询，不能单独出现，必须于DeviceId一起提交
 * @method void setAccount(string $Account) 设置主机账号名，模糊查询，不能单独出现，必须于DeviceId一起提交
 * @method integer getDeviceId() 获取主机ID，未使用IdSet时必须携带
 * @method void setDeviceId(integer $DeviceId) 设置主机ID，未使用IdSet时必须携带
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 * @method integer getLimit() 获取每页条目数量，默认20
 * @method void setLimit(integer $Limit) 设置每页条目数量，默认20
 */
class DescribeDeviceAccountsRequest extends AbstractModel
{
    /**
     * @var array 主机账号ID集合，非必需，如果使用IdSet则忽略其他过滤参数
     */
    public $IdSet;

    /**
     * @var string 主机账号名，模糊查询，不能单独出现，必须于DeviceId一起提交
     */
    public $Account;

    /**
     * @var integer 主机ID，未使用IdSet时必须携带
     */
    public $DeviceId;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @var integer 每页条目数量，默认20
     */
    public $Limit;

    /**
     * @param array $IdSet 主机账号ID集合，非必需，如果使用IdSet则忽略其他过滤参数
     * @param string $Account 主机账号名，模糊查询，不能单独出现，必须于DeviceId一起提交
     * @param integer $DeviceId 主机ID，未使用IdSet时必须携带
     * @param integer $Offset 分页偏移位置，默认值为0
     * @param integer $Limit 每页条目数量，默认20
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
        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

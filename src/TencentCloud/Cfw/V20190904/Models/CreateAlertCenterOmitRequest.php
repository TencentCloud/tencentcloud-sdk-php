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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlertCenterOmit请求参数结构体
 *
 * @method array getHandleIdList() 获取处置对象,ID列表，  IdLists和IpList二选一
 * @method void setHandleIdList(array $HandleIdList) 设置处置对象,ID列表，  IdLists和IpList二选一
 * @method string getTableType() 获取忽略数据来源：
AlertTable 告警中心  InterceptionTable拦截列表
 * @method void setTableType(string $TableType) 设置忽略数据来源：
AlertTable 告警中心  InterceptionTable拦截列表
 */
class CreateAlertCenterOmitRequest extends AbstractModel
{
    /**
     * @var array 处置对象,ID列表，  IdLists和IpList二选一
     */
    public $HandleIdList;

    /**
     * @var string 忽略数据来源：
AlertTable 告警中心  InterceptionTable拦截列表
     */
    public $TableType;

    /**
     * @param array $HandleIdList 处置对象,ID列表，  IdLists和IpList二选一
     * @param string $TableType 忽略数据来源：
AlertTable 告警中心  InterceptionTable拦截列表
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
        if (array_key_exists("HandleIdList",$param) and $param["HandleIdList"] !== null) {
            $this->HandleIdList = $param["HandleIdList"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }
    }
}

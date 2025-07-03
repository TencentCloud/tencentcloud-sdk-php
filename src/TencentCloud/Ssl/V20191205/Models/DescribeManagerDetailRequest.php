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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeManagerDetail请求参数结构体
 *
 * @method integer getManagerId() 获取管理人ID,可以从describeManagers接口获得
 * @method void setManagerId(integer $ManagerId) 设置管理人ID,可以从describeManagers接口获得
 * @method integer getLimit() 获取分页每页数量
 * @method void setLimit(integer $Limit) 设置分页每页数量
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 */
class DescribeManagerDetailRequest extends AbstractModel
{
    /**
     * @var integer 管理人ID,可以从describeManagers接口获得
     */
    public $ManagerId;

    /**
     * @var integer 分页每页数量
     * @deprecated
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     * @deprecated
     */
    public $Offset;

    /**
     * @param integer $ManagerId 管理人ID,可以从describeManagers接口获得
     * @param integer $Limit 分页每页数量
     * @param integer $Offset 分页偏移量
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
        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
